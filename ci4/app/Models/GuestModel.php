<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'jsdurano_guests';

    protected $allowedFields = ['gstname', 'email', 'website', 'vtuber', 'messages'];
    
    public function getGuest()
    {
        return $this->findAll();
    }
}
