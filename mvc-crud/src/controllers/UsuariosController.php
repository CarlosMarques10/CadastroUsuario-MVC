<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('adicionar');
    }

    public function addAction(){

        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){
            $data = Usuario::select()->where('email',$email)->execute();
            
            if(count($data) === 0){
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
            }
        }
        $this->redirect('/novoUsuario');
    }

    public function editar($parm){
        $usuario = Usuario::select()->where('id',$parm['id'])->one();

        $this->render('edit',[
            'usuario' => $usuario
        ]);


    }

    public function editarAction($parm){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){
            Usuario::update()
            ->set('nome', $nome)
            ->set('email', $email)
            ->where('id', $parm['id'])
            ->execute();

            $this->redirect('/');

        }

        $this->redirect('/editar/'.$parm['id']);

    }

    public function deletar($parm){
        Usuario::delete()->where('id', $parm['id'])->execute();

        $this->redirect('/');

    }

}