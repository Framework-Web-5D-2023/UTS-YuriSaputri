<?php

namespace App\Models;

use CodeIgniter\Model;

class BookstoreModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $useTimestamps = 'true';

    public function getAllBookstore()
    {
        return $this->findAll();
    }
}