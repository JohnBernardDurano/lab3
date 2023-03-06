<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController {
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guestbook',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }
}