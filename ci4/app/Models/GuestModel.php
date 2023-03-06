<?php

namespace App\Models;

use CodeIgniter\Model;
// Change Line 8 when you upload it to apcwebprog
class GuestModel extends Model {
    protected $table = 'jsdurano_guests';

    public function getGuest(){
        return $this->findAll();
    }
}