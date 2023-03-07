<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function create_log($acao, $objeto, $id_objeto) {
        $user = Auth::user();
        $tarefa = Tarefa::get('titulo');
        Log::create([
            "id_user"    => $user->id,
            "user_name"  => $user->name,
            "escola_id"  => $user->escola_id,
            "acao"       => $acao,
            "objeto"     => $objeto,
            "id_objeto"  => $id_objeto,
        ]);
    }
}
