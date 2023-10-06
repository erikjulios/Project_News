<?php

namespace App\Models;

use CodeIgniter\Model;

class LiveUpdateModel extends Model
{
    protected $table  = 'liveupdate';
    protected $primaryKey  = 'id';
    protected $useAutoIncrement  = true;
    protected $allowedFields  = ['nama','email','no','berita'];

}