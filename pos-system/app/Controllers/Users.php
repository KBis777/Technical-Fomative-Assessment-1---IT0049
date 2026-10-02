<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'name' => 'Mark Benipayo',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'name' => 'Jeoff Oliver Galvez',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'name' => 'John Benedict Sazon',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager',
                'name' => 'Lorenzo Dominik Munson',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'name' => 'Mark Lopez',
                'role' => 'Staff'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}