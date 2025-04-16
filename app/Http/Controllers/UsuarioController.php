<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    
    public function index()
    {
        return Usuario::all();
    }

    public function criar(Request $request)
    {
        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return response()->json([
            'mensagem' => 'Usuário inserido com sucesso.',
            'usuario' => $usuario
        ], 201);
    }


    public function listar($id)
    {
        return Usuario::findOrFail($id);
    }

    public function editar(Request $request, $id )
    {
        $usuario = Usuario::findOrFail($id);

        $dados = $request->all();
    
        // Se tiver senha no request, faz o hash
        if (!empty($dados['password'])) {
            $dados['password'] = Hash::make($dados['password']);
        } else {
            unset($dados['password']);
        }
    
        $usuario->update($dados);
    
        return response()->json([
            'mensagem' => 'Usuário atualizado com sucesso.',
            'usuario' => $usuario
        ], 200);
    }

    public function excluir($id)
    {
        $usuario = Usuario::find($id);
    
        if (!$usuario) {
            return response()->json(['mensagem' => 'Usuário não encontrado.'], 404);
        }
    
        $usuario->delete();
    
        return response()->json(['mensagem' => 'Usuário excluído com sucesso.'], 200);
    }
    
}
