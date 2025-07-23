<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?= base_url('/assets/images/favicon.ico') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.min.css') ?>">
    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/iziModal.min.css') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/main.css') ?>">

    <title>Document</title>
</head>
<body>
<!---header---->
<header id="header" class="header">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3">Записки интернета</h1>
        </div>
    </div>
</header>
<!---//end_header---->

<!---content---->
<section id="content" class="content">

    <div class="container">
            <div class="row mt-4">
                <div class="col-md-3 d-flex">
                    <div class="btnLink">
                        <a href="<?= get_href('crudajax'); ?>" class="">CRUD AJAX</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="descTask">
                        <span class="h3">Create Read Update Delete</span>
                        <p class="mt-2">Реализован CRUD-функционал для записей в базу данных посредством AJAX без перезагрузки страницы. Всплывающие поп-ап окна. Проверки на стороне сервера. AJAX-поиск. ООП структура + composer</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-3 d-flex">
                    <div class="btnLink">
                        <a href="<?= get_href('lilurl'); ?>" >LI'L URL</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="descTask">
                        <span class="h3">Сократитель ссылок</span>
                        <p class="mt-2">Сервис по укорачиванию ссылок введённых пользователем. Немного AJAX, нативный JS. ООП + Composer</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 d-flex">
                    <div class="btnLink">
                        <a href="<?= get_href('comments'); ?>" >Comments</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="descTask">
                        <span class="h3">Добавление комментариев</span>
                        <p class="mt-2">Выполнение задачи по созданию функционала по принципу "Оставить комментарий". Выполняется проверка на отправку пустого сообщения, а также защита Captcha-кодом </p>
                    </div>
                </div>
            </div>




            <div class="field">
                <a href="#" class="btnLink">SOME LINK</a>
            </div>
            <div class="some_link">
                <a href="#" class="btnLink">SOME LINK</a>
            </div>

    </div>
</section>

<!---footer---->
<footer id="footer" class="footer">
    <div class="container">
    </div>
</footer>
<!---//end_footer---->

<script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.7.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>

<!--<script type="text/javascript" src="--><?php //= base_url('/assets/js/iziModal.min.js') ?><!--"></script>-->
<!--<script type="text/javascript" src="--><?php //= base_url('/assets/js/mark.min.js') ?><!--"></script>-->
<!--<script type="text/javascript" src="--><?php //= base_url('/assets/js/main.js') ?><!--"></script>-->
</body>
</html>