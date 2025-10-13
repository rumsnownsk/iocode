<?php
namespace App\Controllers;

use Rum\Iocode\View;

class MainController
{
    public function index(): string|View
    {
        return view(view: 'main');
    }


}