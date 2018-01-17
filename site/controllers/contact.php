<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Gelieve een geldig e-mailadres in te vullen',
        ],
        'name' => [],
        'message' => [
            'rules' => ['required'],
            'message' => 'Gelieve een bericht in te vullen',
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'klaas@firstklaas.be',
            'from' => 'klaas@firstklaas.be',
        ]);
    }

    return compact('form');
};