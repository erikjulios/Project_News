<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactusModel extends Model
{
    protected $table  = 'contactus';
    protected $primaryKey  = 'id';
    protected $useAutoIncrement  = true;
    protected $allowedFields  = ['nama', 'email', 'subjek', 'pesan'];

}