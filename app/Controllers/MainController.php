<?php
namespace App\Controllers;

use CoreApp\Auth;
use CoreApp\View;

class MainController
{
    public function index(): string|View
    {
        return view('main');
    }


}