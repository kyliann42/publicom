<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Message extends BaseController
{

    //liste des message
    public function liste($communeId)
    {
        $messageModel=model('MessageModel');
        $communeModel=model('CommuneModel');

        $messageListe=$messageModel->where('ID_COMMUNEMESSAGE', $communeId)->findAll();
        $commune=$communeModel->find($communeId);

        return view('liste_messages',['messageListe' =>$messageListe, 'commune' =>$commune]);
    }

    //page de visualisation des message
    public function visualisation($messageId)
    {
        $messageModel=model('MessageModel');
        $communeModel=model('CommuneModel');

        $message=$messageModel->find($messageId);
        $commune=$communeModel->find($message['ID_COMMUNEMESSAGE']);

        return view('visu_message',['message' =>$message, 'commune'=>$commune]);
    }

    //création de message
    public function ajout($communeId)
    {
        return view('ajout_message',['communeId' =>$communeId]);
    }
    public function create()
    {
        //à faire : insertion de message dans la base de donné + redirection vers la liste des message
    }

    //modification des message
        public function modif($messageId)
    {

        return view('modif_message',['messageId' =>$messageId]);
    }
    public function update()
    {
        //à faire : modification de message dans la base de donné + redirection vers la liste des message
    }

    //suppresion des message
    public function delete()
    {
        //à faire : modification de message dans la base de donné + redirection vers la liste des message
    }

}
