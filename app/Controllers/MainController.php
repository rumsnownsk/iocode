<?php
namespace App\Controllers;

use CoreApp\Auth;
use CoreApp\View;

class MainController
{
    public function index(): string|View
    {
        $styles = '';
//        $statistic_table = '';
//        $visitors = db()->query('SELECT * FROM visitors order by last_visit desc limit 10')->get();
//
//        for ($i = 0; $i < count($visitors); $i++) {
//            $visitors[$i]['last_visit'] = date('d-m-Y H:i', $visitors[$i]['last_visit']);
//        }

        if(Auth::isAuth() && Auth::getRole()>1){
            $styles = [ base_url('assets/css/statistic_table.css') ];
//            $statistic_table = view()->renderPartial('incs/statistic_table', [
//                'visitors' => $visitors
//            ]);
        };
        dump($_SESSION);

        return view('main');


    }


}