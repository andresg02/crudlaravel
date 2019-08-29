<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Medicamento;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicamentos=Medicamento::orderBy('id','DESC')->paginate(3);
        return view('medicamento.index',compact('medicamentos')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Medicamento.create');
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
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required', 'cantidad'=>'required', 'fechav'=>'required', 'laboratorio'=>'required', 'precio'=>'required']);
        Medicamento::create($request->all());
        return redirect()->route('medicamento.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamentos=Medicamento::find($id);
        return  view('Medicamento.show',compact('medicamentos'));
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
        $medicamentos=Medicamento::find($id);
        return view('medicamento.edit',compact('medicamentos'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required', 'cantidad'=>'required', 'fechav'=>'required', 'laboratorio'=>'required', 'precio'=>'required']);
 
        Medicamento::find($id)->update($request->all());
        return redirect()->route('medicamento.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Medicamento::find($id)->delete();
        return redirect()->route('medicamento.index')->with('success','Registro eliminado satisfactoriamente');
    }
}