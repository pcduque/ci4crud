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

    public function checkdb()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from users");
        $data['data'] = $query->getResult();
        $out = json_encode($data['data']); //to json
        header('Content-type: application/json');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Methods: GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        return $out ;
        // return view('welcome_message',$data);
    }
}
