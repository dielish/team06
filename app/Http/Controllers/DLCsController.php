<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DLC;
class DLCsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dlcs = DLC::all()->sortBy('price');
        return view('dlcs.index')->with(['DLCs'=>$dlcs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DLCs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = $request->input('product');
        $price = $request->input('price');

        DLC::create(
            [
                'product'=>$product,
                'price'=>$price,
            ]
        );
        return redirect('DLCs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $DLC = DLC::findOrFail($id);
        return view('DLCs.show')->with(['DLC'=>$DLC]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $DLC = DLC::findOrFail($id);


        return view('DLCs.edit')->with(['DLC'=>$DLC]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $DLC = DLC::findOrFail($id);
        $DLC->product = $request->input('product');
        $DLC->price = $request->input('price');
        $DLC->save();
        return redirect('DLCs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $DLC = DLC::findOrFail($id);
        $DLC->delete();
        return redirect('DLCs');
    }
    public function price()
    {
        $DLCs=DLC::price()->get();
        return view('DLCs.index',['DLCs'=>$DLCs]);
    }
    public function p()
    {
        $DLCs=DLC::p()->get();
        return view('DLCs.index',['DLCs'=>$DLCs]);
    }
    public function rt()
    {
        $DLCs=DLC::rt()->get();
        return view('DLCs.index',['DLCs'=>$DLCs]);
    }

    public function api_DLCs()
    {
        return DLC::all();
    }
    public function api_update(Request $request)
    {
        $DLC = DLC::find($request->input('id'));
        if ($DLC == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $DLC->product = $request->input('product');
        $DLC->price = $request->input('price');
        if ($DLC->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
    public function api_delete(Request $request)
    {
        $DLC = DLC::find($request->input('id'));

        if ($DLC == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($DLC->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
