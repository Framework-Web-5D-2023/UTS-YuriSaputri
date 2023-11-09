<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
namespace App\Controllers;
class About extends BaseController {

    public function index()
    {
        $data = [
            'title' => 'About Us', 
            'nama'  => 'Yuri Saputri', 
            'npm'   => '2110631170041',
        ];

        echo view('templates/header', $data);
        echo view('about', $data);
        echo view('templates/footer');

    }
}