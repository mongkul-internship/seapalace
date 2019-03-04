<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Mongkul'
            ], [
                'id' => 2,
                'name' => 'Mora Lee'
            ], [
                'id' => 3,
                'name' => 'Monika'
            ], [
                'id' => 4,
                'name' => 'Sovanara'
            ], [
                'id' => 5,
                'name' => 'Sim Mony'
            ], [
                'id' => 6,
                'name' => 'Kim Vattana'
            ]
        ];
        return view('user', compact('users'));
    }

    public function getUserId($id)
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Mongkul'
            ], [
                'id' => 2,
                'name' => 'Mora Lee'
            ], [
                'id' => 3,
                'name' => 'Monika'
            ], [
                'id' => 4,
                'name' => 'Sovanara'
            ], [
                'id' => 5,
                'name' => 'Sim Mony'
            ], [
                'id' => 6,
                'name' => 'Kim Vattana'
            ],
        ];
        $showUser = null;
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $showUser = $user;
            }
        }
        return view('show-user', compact('showUser'));
    }
}
