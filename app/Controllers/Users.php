<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from users");
        $data['data'] = $query->getResult();
        //return view('welcome_message',$data);
        return $data['data'];
    }

}
