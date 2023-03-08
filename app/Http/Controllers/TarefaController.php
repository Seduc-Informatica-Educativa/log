<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Http\Requests\StoreTarefaRequest;
use App\Http\Requests\UpdateTarefaRequest;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::orderBy('id', 'DESC')->paginate(25);
        return view('tarefas.index', compact('tarefas'));
    }
    public function create()
    {
        $certificados = Tarefa::all();
        return view('tarefas.create', compact('certificados'));
    }
    public function store(StoreTarefaRequest $request, Tarefa $tarefa)
    {
        $input = $request->all();
        Tarefa::create($request->validated());
        $nova_tarefa = Tarefa::create($input);
        
        $this->create_log("Cadastrou", "Tarefa", $nova_tarefa->id);

        return redirect()->route('tarefas.index')->with('evento.sucesso', 'Novo tarefa');
    }
    public function show(Tarefa $tarefa)
    {
        return view('tarefas.show', compact('tarefa'));
    }
    public function edit(Tarefa $tarefa)
    {
        $certificados = Tarefa::all();
        return view('tarefas.edit', compact('tarefa', 'certificados'));
    }
    public function update(UpdateTarefaRequest $request, Tarefa $tarefa)
    {
        $tarefa->update($request->validated()) ;
        $this->create_log("Atualizou", "Tarefa", $tarefa->id);
        return redirect()->route('tarefas.index')->with('tarefa.alterado', 'Tarefa: '.$tarefa->titulo);
    }
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        $this->create_log("Excluiu", "Tarefa", $tarefa->id);
        return redirect()->route('tarefas.index')->with('tarefa.excluir', ''.$tarefa->titulo);
    }
}
