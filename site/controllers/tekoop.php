<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => 'Naam is verplicht',
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'E-mail is verplicht',
        ],
        'message' => [],
        'filefield' => [
            'rules' => [
                'required',
                'file',
                'mime' => ['image/png', 'image/jpeg'],
                'filesize' => 5000,
            ],
            'message' => [
                'Gelieve een bestand te kiezen (1).',
                'Gelieve een bestand te kiezen (2).',
                'Gelieve een jpeg of png bestand te kiezen.',
                'Gelieve een bestand te selecteren dat groter is dan 5 MB.',
            ],
        ],
    ]);

    if (r::is('POST')) {
        $imagePath = '/' . $page->diruri() . '/uploads/' . date('Y_m_d_H_i');

        $form->uploadAction(['fields' => [
            'filefield' => [
                # Hier ook aangepast zodat alle uploads in aparte map per tijdstip komen. Dit om duplicate filenames niet te laten overschrijven.
                'target' => kirby()->roots()->content() . $imagePath,
                'prefix' => false,
            ]
        ]]);

        # Naam vd foto eraan toevoegen
        $imagePath .= '/' . $_FILES['filefield']['name'];

        # Custom veld toevoegen om te gebruiken in de mail snippet
        $form->addCustom('filefield_url', url($imagePath));

        # Mail versturen
        $form->emailAction([
            'to' => 'klaas@firstklaas.be',
            'from' => 'klaas@firstklaas.be',
            // Dynamically generate the subject with a template.
            'subject' => 'Subject',
            'snippet' => 'tekoop-mail',
        ]);
    }

    return compact('form');
};