<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    private function getAllAttributes($model) {
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();
        $add = array_merge(array_flip($columns), $attributes);
        $add['id'] = 0;
        return $add;
    }
    
    private function verifySort($sort) {
        /*$sorts = ['id' => 1, 'name' => 1, 'category' => 1, 'genre' => 1, 'budget' => 1];*/
        $sorts = $this->getAllAttributes(new Genre());
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
        $sorts = $this->getAllAttributes(new Genre());
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

        $genre = new Genre();
        if($search != null) {
            $genre = $genre -> where ('id', 'like', '%' . $search . '%')
                                         ->orWhere('name', 'like', '%' . $search . '%')
                                        // ->orWhere('category', 'like', '%' . $search . '%')
                                        // ->orWhere('genre', 'like', '%' . $search . '%')
                                        // ->orWhere('budget', 'like', '%' . $search . '%')
                                        ;
        }
        
        if($sort != null && $order != null) {
            $genre = $genre->orderBy($sort, $order);
        }
        
        //dd([$appendData, $data]);
        $data['appendData'] = $appendData;
        $genre = $genre->orderBy('name', 'asc')->paginate($rpp)->appends($appendData);
        $data['genres'] = $genre; //Genre::paginate(10);
        $data['rutaSearch'] = route('genre.index');
        return view('genre.index', $data);
        
        
        // return view('genre.index', ['genres' => Genre::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Genre $genre)
    {
        $data = [];
        $data['genre'] = $genre;
        
        return view ('genre.create', $data);
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
        $data['message'] = 'New genre has been inserted successfully.';
        $data['type'] = 'success';
        $genre = new genre($request->all());
        try {
            $result = $genre->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The genre can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('genre')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('genre.show', ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        $data = [];
        $data['genre'] = $genre;
        return view('genre.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        $data = [];
        $data['message'] = 'The genre ' . $genre->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $genre->update($request->all());
        } catch(\Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The genre can not be updated. ';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('genre')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Genre $genre)
    {
        $data = [];
        $data['message'] = 'The genre ' . $genre->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $genre->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The genre ' . $genre->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('genre')->with($data);
    }
    
}