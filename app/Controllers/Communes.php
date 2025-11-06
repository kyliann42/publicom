<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Communes extends BaseController
{
    public function liste()
    {
        $communeModel = new \App\Models\Commune();
        $communes = $communeModel-> findAll();

        $data = [
            'listeCommunes' => $communes
        ];

        return view('listeCommunes', ['communePage'=>true,'listeCommunes' => $communes]);
    }


    public function creation()
    
    {
        return view('creationCommunes');
    }

    public function create()
    
    {

    
    $communeModel = new \App\Models\Commune();

    /*$data= [
        $this->request->getPost('NOM'),
        $this->request->getPost('CODEPOSTAL'),
        $this->request->getPost('DESCRIPTION')



    ];*/


    //dd($data);
    $communeModel->insert($this->request->getPost());
    //dd($this->request->getPost());
    return redirect('/');

    }
    
    public function 









}

