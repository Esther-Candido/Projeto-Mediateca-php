<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    protected $msg = [
        'required' => 'O nome do autor é obrigatório',
        'min' => 'O nome do autor terá que possuir pelo menos 2 letra',
        'max' => 'A biografia não pode conter mais que 500 caracteres'
    ];
    protected $rules = [
        'nome' => 'required|min:2',
        'bio' => 'nullable|max:500'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('autores.index',['autores'=>Autor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados=$request->validate($this->rules,$this->msg);
        $autor=new Autor($dados);
        $autor->save();
        return redirect()->route('admin.autores.show',$autor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        return view('autores.show',[
            'autor'=>$autor,
            'obras'=>$autor->criou
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        return view('autores.edit', ['autor' => $autor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        $dados = $request->validate($this->rules,$this->msg);
        $autor->update($dados);
        $autor->save();
        return redirect()->route('admin.autores.show', ['autor' => $autor]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();
        return redirect()->route('admin.autores.index');
       // return to_route('admin.autores.index');
    }
}
