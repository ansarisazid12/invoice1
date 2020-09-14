<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Datatables;
class ClientController extends Controller
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
       return view('clients.index');
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
            $data = Client::select('*')->orderBy('id','DESC');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                           //$btn = '<a href="'.route('items.edit', $row->id) .'" class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.' <a href="'.route('clients.edit', $row->id) .'" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0);" class="edit btn btn-danger btn-sm" onclick="deleteclients('.$row->id.')">Delete</a>';
                            
                            return $btn;
                    })
                    ->rawColumns(['delete' => 'delete','action' => 'action'])
                    ->make(true);
      //  }
        
        return view('clients.index');
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
            'gst'=>'required',
            'phone'=>'required',
            'pan'=>'required',
           // 'address'=>'required',
           // 'city'=>'required',
           // 'state'=>'required'

        ]);
        $client = new Client([
            'name' => $request->get('name'),
            'gst' => $request->get('gst'),
            'phone' => $request->get('phone'),
            'pan' => $request->get('pan')
        ]);
        $client->save();
        return redirect('/clients')->with('success', 'Item saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function addClient()
    { 
        //
        $client = new Client;

        return view('clients.edit',compact('client'));
    }
    public function edit($id)
    { 
        //
        //return view('items.edit');
        $client = Client::find($id); 
        return view('clients.edit', compact('client'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
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
    { 
        $client=Client::find($id);  
        $client->delete();
    }
}
