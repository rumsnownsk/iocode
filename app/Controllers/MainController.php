<?php
namespace App\Controllers;

use CoreApp\View;

class MainController
{
    public function index(): string|View
    {
        dump($_SESSION);

        return view('main', [
            'statistic_table' => view()->renderPartial('incs/statistic_table', [
                'visitors' => db()->query('SELECT * FROM visitors')->get()
            ]),
        ]);
    }


}