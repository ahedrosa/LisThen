<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    
    private function getAllAttributes($model) {
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();
        $add = array_merge(array_flip($columns), $attributes);
        $add['id'] = 0;
        return $add;
    }
    
    private function verifySort($sort) {
        /*$sorts = ['id' => 1, 'name' => 1, 'category' => 1, 'artist' => 1, 'budget' => 1];*/
        $sorts = $this->getAllAttributes(new Artist());
        if(isset($sorts[$sort])) {
            return $sort;
        }
        return null;
    }
    
    
    private function verifyOrder($order) {
        if($order == null) {
            return $order;
        } elseif($order == 'desc'){
            return $order;
        }
        return 'asc';
    }

    private function getRecordsPerPageArray($array) {
        $result = [];
        $rpps = $this->getRpps();
        foreach($rpps as $rpp => $value) {
            $result['rpps'][] = array_merge($array, ['rpp' =>  $rpp]);
        }
        return $result;
    }
    
    private function getOrderArrays($array) {
        $data = [];
        $orders = ['asc', 'desc'];
        $sorts = $this->getAllAttributes(new Artist());
        foreach($orders as $order){
            foreach($sorts as $sortindex => $sort){
                $data['order' . $sortindex . $order] = array_merge(['sort' => $sortindex, 'order' => $order], $array);
            }
        }
        return $data;
    }
    
    private function getRpps() {
        return [2 => 1, 5 => 1, 10 => 1, 20 => 1, 50 => 1, 100 => 1];
    }
    
    private function verifyRpp($rpp) {
        $rpps = $this->getRpps();
        if(isset($rpps[$rpp])) {
            return $rpp;
        }
        return 10;
    }
    
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = [];
        $appendData = [];
        $filterData = [];
        $rppData = [];
        $sortData = [];
        $searchData = [];

        
        $page = $request->input('page');
        $filter = $request->input('filter');
        $search = $request->input('search');
        $sort = $this->verifySort($request->input('sort'));
        $order = $this->verifyOrder($request->input('order'));
        $rpp = $this->verifyRpp($request->input('rpp'));
        
        if($sort != null && $order != null) {
            $sortData = ['sort' => $sort, 'order' => $order];
        }

        if($rpp != 10) {
            $rppData['rpp'] = $rpp;
        }
    
        if($search != null){
            $searchData['search'] = $search;
            // $data['search']  = $search;
        }
        
        $appendData = array_merge($appendData, $rppData);
        $appendData = array_merge($appendData, $sortData);
        $appendData = array_merge($appendData, $searchData);

        $data = array_merge($data, $this->getOrderArrays($rppData, $searchData));
        $data = array_merge($data, $this->getRecordsPerPageArray($appendData));
        $data['rpp'] = $rpp;

        $artist = new Artist();
        if($search != null) {
            $artist = $artist -> where ('id', 'like', '%' . $search . '%')
                                         ->orWhere('name', 'like', '%' . $search . '%')
                                        // ->orWhere('category', 'like', '%' . $search . '%')
                                        // ->orWhere('artist', 'like', '%' . $search . '%')
                                        // ->orWhere('budget', 'like', '%' . $search . '%')
                                        ;
        }
        
        if($sort != null && $order != null) {
            $artist = $artist->orderBy($sort, $order);
        }
        
        //dd([$appendData, $data]);
        $data['appendData'] = $appendData;
        $artist = $artist->orderBy('name', 'asc')->paginate($rpp)->appends($appendData);
        $data['artists'] = $artist; //Artist::paginate(10);
        $data['rutaSearch'] = route('artist.index');
        return view('artist.index', $data);
        
        
        // return view('artist.index', ['artists' => Artist::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Artist $artist)
    {
        $data = [];
        $data['artist'] = $artist;
        
        return view ('artist.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data['message'] = 'New artist has been inserted successfully.';
        $data['type'] = 'success';
        $artist = new artist($request->all());
        try {
            $result = $artist->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The artist can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('artist')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artist.show', ['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        $data = [];
        $data['artist'] = $artist;
        return view('artist.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $data = [];
        $data['message'] = 'The artist ' . $artist->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $artist->update($request->all());
        } catch(\Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The artist can not be updated. ';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('artist')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Artist $artist)
    {
        $data = [];
        $data['message'] = 'The artist ' . $artist->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $artist->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The artist ' . $artist->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('artist')->with($data);
    }
}
