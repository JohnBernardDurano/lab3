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
            . view('pages/guests')
            . view('templates/footer');
    }
    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Join The Masterclass'])
                . view('pages/forms')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['gstname', 'email', 'website', 'vtuber', 'messages']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'gstname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'website' => 'required|max_length[255]|min_length[3]',			
            'vtuber'  => 'required|max_length[5000]|min_length[10]',
            'messages' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Join The Masterclass'])
                . view('pages/validation')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'NAME' => $post['NAME'],
            'EMAIL'  => $post['EMAIL'],
            'WEBSITE'  => $post['WEBSITE'],
            'COMMENT'  => $post['COMMENT'],
            'GENDER'  => $post['GENDER'],
        ]);

        return view('templates/header', ['title' => 'Join The Masterclass'])
            . view('pages/masterclass')
            . view('templates/footer');
    }
}