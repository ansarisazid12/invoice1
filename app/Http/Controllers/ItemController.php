<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Datatables;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //
       // return view('items.index');
       return view('items.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
      //  return Datatables::of(Item::query()->orderBy('id','DESC'))->make(true);
        //if ($request->ajax()) {
            $data = Item::select('*')->orderBy('id','DESC');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                           //$btn = '<a href="'.route('items.edit', $row->id) .'" class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.' <a href="'.route('items.edit', $row->id) .'" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.' <a href="'.route('items.destroy', $row->id) .'" class="edit btn btn-danger btn-sm">Delete</a>';
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
      //  }
        
        return view('items.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //var_dump( $request);
        //
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'tax'=>'required',
            'price'=>'required'
        ]);
        $item = new Item([
            'name' => $request->get('name'),
            'code' => $request->get('code'),
            'tax' => $request->get('tax'),
            'price' => $request->get('price')
        ]);
        $item->save();
        return redirect('/items')->with('success', 'Item saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function addItem()
    { 
        //
        $item = new Item;

        return view('items.edit',compact('item'));
    }
    public function edit($id)
    { 
        //
        //return view('items.edit');
        $item = Item::find($id); 
        return view('items.edit', compact('item'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    { echo $id;die;
        //
        $item=Item::find($id);  
        $item->delete();
    }
}
