<?php

namespace App\Controllers;

class UserController
{
    public function auth()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = db()->query("SELECT * FROM users WHERE login = ? AND password = ?" ,[
            $login, $password
        ])->getOne();
        if ($user){
            session()->set('user', [
                'id' => $user['id'],
                'role' => $user['role'],
                'email' => $user['email'],
            ]);
        } else {
            session()->setFlash('errors', 'Invalid username or password.');
        }
        response()->redirect('/');
    }

    public function signout(){
        unset($_SESSION['user']);
        response()->redirect('/');
    }

}