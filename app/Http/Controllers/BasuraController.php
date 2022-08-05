<?php


namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Basura;
use Illuminate\Http\Request;

class BasuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basuras = Basura::orderBy('id')->get();

        return view('basura.index', compact('basuras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::orderBy('id')->get();
        return view('basura.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     *  
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_baja = $request->validate(
            [
                'decremento' => 'required',
                'description' => 'nullable',
                'id_area'  => 'required',


            ]
        );

        $basura = Basura::create($data_baja);
        $item_baja = Area::firstWhere('id', $data_baja['id_area']);
        $item_baja->cantidad = $item_baja->cantidad + $data_baja['decremento']; 
        if($item_baja->cantidad >= 0 )
        {
        $item_baja->save();
        }
        else
        { 
         return view('basura.error');
        }
        return redirect()->route('area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('basura.show', compact('basura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
