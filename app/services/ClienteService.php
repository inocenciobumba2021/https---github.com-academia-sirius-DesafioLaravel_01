<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Log;
use DB;

class ClienteService 
{
    public function salvarUsuario(Usuario $usuario, Endereco $endereco)
    {
        try {

            //Verificando se esse usuario já existe no banco de dados
            $dbUsuario = Usuario::where("login", $usuario->login)->first();
            if($dbUsuario){
                return ['status' => 'err', 'message' => 'Esse amail já existe'];
            }
            DB::beginTransaction(); // Iniciar uma transação

            $usuario->save(); // Salvar usuário
            $endereco->usuario_id = $usuario->id; // Fazer o relacionamento
            $endereco->save(); // Salvar endereço

            DB::commit(); // Commit da transação

            return ['status' => 'Ok', 'message' => 'Usuário cadastrado com sucesso'];
        } catch (\Exception $e) {
            // Catch para tratar o erro, pode ser dar uma mensagem de erro para o usuário ou até mesmo enviar um email
            Log::error("Erro", ['file' => 'ClienteService.salvarUsuario', 'message' => $e->getMessage()]);
            DB::rollback(); // Cancelar a transação

            return ['status' => 'err', 'message' => 'Falha ao cadastrar usuário'];
        }
    }
}
