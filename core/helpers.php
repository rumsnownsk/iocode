<?php

function app(): \CoreApp\Application
{
    return \CoreApp\Application::$app;
}
function request(): \CoreApp\Request
{
    return app()->request;
}

function response(): \CoreApp\Response
{
    return app()->response;
}

function view($view = '', $data = [], $layout=''): string|\CoreApp\View
{
    if($view){
        return app()->view->render($view,$data, $layout);
    }
    return app()->view;
}

function session(): \CoreApp\Session
{
    return app()->session;
}

function db(): \CoreApp\Database
{
    return app()->db;
}

function auth(): \CoreApp\Auth
{
    return app()->auth;
}

function abort($error = '', $code = 404)
{
    dd($error, $code);
    response()->setResponseCode($code);
    echo view("errors/{$code}", ['error' => $error], false);
    die;
}

//function get_alerts(): void
//{
//    if (!empty($_SESSION['flash'])){
//        foreach ($_SESSION['flash'] as $k => $v) {
//            echo view()->renderPartial(
//                "incs/alert_{$k}",
//                ["flash_{$k}" => session()->getFlash($k)]);
//        }
//    }
//}

function base_url($path=''): string
{
    return PATH.$path;
}

function get_href($address = ''): string
{
    $host = HOST;
    if (empty($host)) return '#';
    $arr = explode(".", $host);
    $location = end($arr);

    if ($location == 'ru') {
        return "https://{$address}.iocode.{$location}";
    } elseif ($location == 'loc') {
        return "http://{$address}.iocode.{$location}";
    } else return '#';
}

function get_csrf_token(): string
{
    return '<input type="hidden" name="csrf_token" value="'. session()->get('csrf_token') .'">';
}

function get_csrf_meta(): string
{
    return '<meta name="csrf-token" content="'. session()->get('csrf_token') .'">';
}

function env($key)
{
    return $_ENV[$key];
}
