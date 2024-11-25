<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Método para exibir todos os clientes
    public function index()
    {
        // Recupera todos os clientes do banco de dados
        $clientes = Cliente::all();
        
        // Retorna a view com os clientes
        return view('clientes.index', compact('clientes'));
    }

    // Método para exibir o formulário de criação
    public function create()
    {
        return view('clientes.create');
    }

    // Método para salvar um novo cliente
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefone' => 'required|string|max:15',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        Cliente::create($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id); // Busca o cliente pelo ID
        return view('clientes.edit', compact('cliente'));
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);

        // Remove a foto associada ao cliente, se existir
        if ($cliente->foto && \Storage::exists('public/' . $cliente->foto)) {
            \Storage::delete('public/' . $cliente->foto);
        }

        // Exclui o cliente
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefone' => 'required|string|max:15',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Remove a foto antiga, se existir
            if ($cliente->foto && \Storage::exists('public/' . $cliente->foto)) {
                \Storage::delete('public/' . $cliente->foto);
            }

            $validated['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $cliente->update($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }
}
