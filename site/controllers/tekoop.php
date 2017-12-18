<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'name' => [],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
        'filefield' => [
            'rules' => [
                'required',
                'image',
                'mime' => ['image/jpeg'],
                'filesize' => 5000,
            ],
            'message' => [
                'Please choose a file.',
                'Please choose a file.',
                'Please choose a PDF.',
                'Please choose a file that is smaller than 5 MB.',
            ],        
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'klaas@firstklaas.be',
            'from' => 'klaas@firstklaas.be',
        ]);
        $form->uploadAction(['fields' => [
            'filefield' => [
                'target' => kirby()->roots()->content(),
                'prefix' => false,
            ],
        ]]);    
    }

    return compact('form');
};