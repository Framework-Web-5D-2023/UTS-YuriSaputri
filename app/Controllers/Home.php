<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function index(): string 
    {
        $bookstore = $this->bookstoreModel->getAllBookstore();
        $data = [
            'title' => 'Home',
            'nama' => 'Yuri',
            "bookstore" => $bookstore,
        ];
        return view('templates/header', $data) . view('home', $data) . view('templates/footer', $data);
    }
}
