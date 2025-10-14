<?php

namespace CoreApp;

class Application
{
    protected string $uri;
    public Session $session;

    public Request $request;
    public Response $response;
    public Router $router;
    public View $view;
    public DataBase $db;
    public Auth $auth;

    public static Application $app;

    public function __construct()
    {
        self::$app = $this;

        $this->uri = $_SERVER['REQUEST_URI'];

        $this->session = new Session();
        $this->request = new Request($this->uri);
        $this->response = new Response();

        $this->router = new Router($this->request, $this->response);
        $this->view = new View(LAYOUT);

        $this->db = new DataBase();
        $this->generatedCsrfToken();
        $this->auth = new Auth();

        new Visitors();
    }

    public function run(): void // void - ничего не возвращаем
    {
        echo $this->router->dispatch();
    }

    public function generatedCsrfToken(): void
    {
        if (!session()->has('csrf_token')){
            session()->set('csrf_token', md5(uniqid(mt_rand(), true)));
        }
    }
}