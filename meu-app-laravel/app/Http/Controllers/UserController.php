<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            "nomes" => [
                "Maciel Júnior",
                "Rodrigo Calazans"
            ]
        ];

        dd($users);
    }

    public function show($id)
    {
        $idUser = $id;
        dd("Id do usuário é " . $idUser);
    }
}
