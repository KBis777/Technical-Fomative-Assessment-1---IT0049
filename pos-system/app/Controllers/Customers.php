<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'name' => 'Mark Benipayo',
                'email' => 'markbenipayo@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'name' => 'Jeoff Oliver Galvez',
                'email' => 'jeoffgalvez@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'name' => 'John Benedict Sazon',
                'email' => 'johnbenedictsazon@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'name' => 'Lorenzo Dominik Munson',
                'email' => 'lorenzomunson@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'name' => 'Mark Lopez',
                'email' => 'marklopez@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}