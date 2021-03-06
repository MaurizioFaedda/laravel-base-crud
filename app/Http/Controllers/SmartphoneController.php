<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $smartphones = Smartphone::all()->sortBy($request->category);
        $result = $request->price;
        if ($request->price == "") {
            $smartphones = Smartphone::all();
        } else {
            // l'orderby deve per forza contenere o asc o desc quindi per far caricare la
            // pagina ho dovuto inserire una condizione per dare dei risultati di default
            $smartphones = Smartphone::orderBy('price', $request->price)->get();
        }

        // dd($smartphones);
        // $smartphones = Smartphone::orderBy('price', 'asc')->get();
        // dd($request);
        // $smartphones = Smartphone::where('ram', '>', '6')->get();
        $data = [
            'smartphones' => $smartphones
        ];
        return view('smartphones.index', $data)->withSuccess('');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('smartphones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $smartphone = new Smartphone();
        // $smartphone->brand = $data['brand'];
        // $smartphone->model = $data['model'];
        // $smartphone->memory = $data['memory'];
        // $smartphone->ram = $data['ram'];
        // $smartphone->battery = $data['battery'];
        // $smartphone->camera = $data['camera'];
        // $smartphone->price = $data['price'];
        $smartphone->fill($data);
        $smartphone->save();

        $last_smartphone = Smartphone::orderBy('id', 'desc')->first();
        return redirect()->route('smartphones.index')->withSuccess('Salvataggio completato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $smartphone = Smartphone::find($id);
        if($smartphone) {
            $data = [
                'smartphone' => $smartphone,
            ];
            return view('smartphones.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Smartphone $smartphone)
    {
        if($smartphone){
            $data = [
                'smartphone' => $smartphone
            ];
            return view('smartphones.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smartphone $smartphone)
    {
        $data = $request->all();
        $smartphone->update($data);

        return redirect()->route('smartphones.index')->withSuccess('Modifica completata');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smartphone $smartphone)
    {
        $smartphone->delete();
        return redirect()->route('smartphones.index')->withSuccess('Cancellazione completata');
    }
}
