<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    
    private function getAllAttributes($model) {
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();
        $add = array_merge(array_flip($columns), $attributes);
        $add['id'] = 0;
        return $add;
    }
    
    private function verifySort($sort) {
        /*$sorts = ['id' => 1, 'name' => 1, 'category' => 1, 'album' => 1, 'budget' => 1];*/
        $sorts = $this->getAllAttributes(new Album());
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
        $sorts = $this->getAllAttributes(new Album());
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

        $album = new Album();
        if($search != null) {
            $album = $album -> where ('id', 'like', '%' . $search . '%')
                                         ->orWhere('name', 'like', '%' . $search . '%')
                                         ->orWhere('type', 'like', '%' . $search . '%')
                                        // ->orWhere('album', 'like', '%' . $search . '%')
                                        // ->orWhere('budget', 'like', '%' . $search . '%')
                                        ;
        }
        
        if($sort != null && $order != null) {
            $album = $album->orderBy($sort, $order);
        }
        
        //dd([$appendData, $data]);
        $data['appendData'] = $appendData;
        $album = $album->orderBy('name', 'asc')->paginate($rpp)->appends($appendData);
        $data['albums'] = $album; //Album::paginate(10);
        $data['rutaSearch'] = route('album.index');
        return view('album.index', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Album $album)
    {
        $data = [];
        $data['album'] = $album;
        
        return view ('album.create', $data);
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
        $data['message'] = 'New album has been inserted successfully.';
        $data['type'] = 'success';
        $album = new album($request->all());
        try {
            $result = $album->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The album can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('album')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('album.show', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $data = [];
        $data['album'] = $album;
        return view('album.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $data = [];
        $data['message'] = 'The album ' . $album->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $album->update($request->all());
        } catch(\Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The album can not be updated. ';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('album')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Album $album)
    {
        $data = [];
        $data['message'] = 'The album ' . $album->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $album->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The album ' . $album->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('album')->with($data);
    }
}
