<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'guestbook',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a guest item'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['gstname', 'email', 'website', 'vtuber', 'messages']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'gstname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'website' => 'required|max_length[255]|min_length[3]',
            'vtuber' => 'required|max_length[255]|min_length[3]',
            'messages'  => 'required|max_length[5000]|min_length[10]'
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a guest item'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'gstname' => $post['gstname'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'vtuber' => $post['vtuber'],
            'messages'  => $post['messages']
        ]);

        return view('templates/header', ['title' => 'Create a guest item'])
            . view('guest/success')
            . view('templates/footer');
    }
}
?>