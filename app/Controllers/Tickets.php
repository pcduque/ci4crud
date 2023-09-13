<?php

namespace App\Controllers;

class Tickets extends BaseController
{
    public function index(): string
    {
        return view('tickets');
    }

    public function reports(): string
    {
        return view('reports');
    }

    public function new(): string
    {
        $data = ['fullname' => 'name', 'phone' => 'phone'];
        return view('reports', $data); 
    }

    public function checkdb(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from users");
        $data['data'] = $query->getResult();
        return view('welcome_message',$data);
    }
}
