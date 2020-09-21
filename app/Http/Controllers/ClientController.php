<?php

namespace App\Http\Controllers;

use App\Client;
use DB;
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
    public function store(Request $request, Client $client)
    {  $id = $request->get('id');
        
        $request->validate([
            'name'=>'required',
            'gst'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',

        ]);
        if(!empty($id))
        {
            //dd($id);
            $client->update($request->all());
            $message = "Item Update!";
        }else{
            
            $client = new Client([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'gst' => $request->get('gst'),
                'pan' => $request->get('pan'),
                'address' => $request->get('address'),
                'city' => $request->get('city'),
                'state' => $request->get('state'),
                'country' => $request->get('country'),
                'pincode' => $request->get('pincode')
            ]);
            
            $client->save();
            $message = "Item Saved!";
        }
        return redirect('/clients')->with('success', $message);
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
        $state = DB::select('select * from state ORDER BY state');
        return view('clients.edit',compact(['client'=>'client','state'=>'state']));
    }
    public function edit($id)
    { 
        //
        //return view('items.edit');
        $client = Client::find($id); 
        $state = DB::select('select * from state ORDER BY state');
        return view('clients.edit',compact(['client'=>'client','state'=>'state'])); 
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
