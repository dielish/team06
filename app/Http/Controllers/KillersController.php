<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Killer;
class KillersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        //
       // $killers = Killer::all()->toArray();
        //return $killers;
        $killers = killer::all()->sortBy('difficulty');
        return  view('killers.index')->with(['killers'=>$killers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('killers.create');
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
        $killer = $request->input('killer');
        $Did = $request->input('Did');
        $difficulty = $request->input('difficulty');
        $strenght1 = $request->input('strenght1');
        $strenght2 = $request->input('strenght2');
        $inherited1 = $request->input('inherited1');
        $inherited2 = $request->input('inherited2');
        $inherited3 = $request->input('inherited3');
        $anothername = $request->input('anothername');

        Killer::create(
            [
                'killer'=>$killer,
                'Did'=>$Did,
                'difficulty'=>$difficulty,
                'strenght1'=>$strenght1,
                'strenght2'=>$strenght2,
                'inherited1'=>$inherited1,
                'inherited2'=>$inherited2,
                'inherited3'=>$inherited3,
                'anothername'=>$anothername,

            ]
        );
        return redirect('killers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $killer = Killer::findOrFail($id);
        return view('Killers.show')->with(['killer'=>$killer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $killer = Killer::findOrFail($id);
        return view('Killers.edit')->with(['killer'=>$killer]);
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
        $killer = Killer::findorFail($id);

        $killer->killer = $request->input('killer');
        $killer->Did = $request->input('Did');
        $killer->difficulty = $request->input('difficulty');
        $killer->strenght1 = $request->input('strenght1');
        $killer->strenght2 = $request->input('strenght2');
        $killer->inherited1 = $request->input('inherited1');
        $killer->inherited2 = $request->input('inherited2');
        $killer->inherited3 = $request->input('inherited3');
        $killer->anothername = $request->input('anothername');
        $killer->save();
        return redirect('killers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $killer = Killer::findOrFail($id);
        $killer->delete();
        return redirect('killers');


    }
    public function difficulty()
    {
        $killers=Killer::difficulty()->get();
        return view('killers.index',['killers'=>$killers]);
    }
    public function soso()
    {
        $killers=Killer::soso()->get();
        return view('killers.index',['killers'=>$killers]);
    }
    public function er()
    {
        $killers=Killer::er()->get();
        return view('killers.index',['killers'=>$killers]);
    }
    public function api_killers()
    {
        return Killer::all();
    }
    public function api_update(Request $request)
    {
        $killer = Killer::find($request->input('id'));
        if ($killer == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $killer->killer = $request->input('killer');
        $killer->Did = $request->input('Did');
        $killer->difficulty = $request->input('difficulty');
        $killer->strenght1 = $request->input('strenght1');
        $killer->strenght2 = $request->input('strenght2');
        $killer->inherited1 = $request->input('inherited1');
        $killer->inherited2 = $request->input('inherited2');
        $killer->inherited3 = $request->input('inherited3');
        $killer->anothername = $request->input('anothername');

        if ($killer->save())
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
        $killer = Killer::find($request->input('id'));

        if ($killer == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($killer->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }

}

