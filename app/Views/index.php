<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?= base_url('/assets/images/favicon.ico') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/font-awesome-4.7.0/css/font-awesome.css') ?>">
    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/iziModal.min.css') ?>">

    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/main.css') ?>">

    <title>Document</title>
</head>
<body>
<!---header---->
<header id="header" class="header">
    <div class="container">
        <div class="header__top">
            <div class="header__logo">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
            </div>
            <div class="signArea" data-bs-toggle="modal" data-bs-target="#modalLogin">
                <button class="btn btn-dark btnSignIn"><i class="fa fa-sign-in" aria-hidden="true"></i>SignIn</button>
            </div>
        </div>
    </div>



</header>
<!---//end_header---->

<!---content---->
<section id="content" class="content">

    <div class="container">
        <h1 class="h1" style="color: #4cab46">Записки интернета</h1>

        <div class="itemTask">
                    <div class="itemTask__link">
                        <a href="<?= get_href('crudajax'); ?>" class="">CRUD AJAX</a>
                    </div>

                    <div class="itemTask__desc">
                        <span class="h3">Create Read Update Delete</span>
                        <p class="mt-2">Реализован CRUD-функционал для записей в базу данных посредством AJAX без перезагрузки страницы. Всплывающие поп-ап окна. Проверки на стороне сервера. AJAX-поиск. ООП структура + composer</p>
                    </div>
            </div>

            <div class="itemTask">
                    <div class="itemTask__link">
                        <a href="<?= get_href('lilurl'); ?>" >LI'L URL</a>
                    </div>

                    <div class="itemTask__desc">
                        <span class="h3">Сократитель ссылок</span>
                        <p class="mt-2">Сервис по укорачиванию ссылок введённых пользователем. Немного AJAX, нативный JS. ООП + Composer</p>
                    </div>
            </div>
            <div class="itemTask">
                    <div class="itemTask__link">
                        <a href="<?= get_href('comments'); ?>" >Comments</a>
                    </div>

                    <div class="itemTask__desc">
                        <span class="h3">Добавление комментариев</span>
                        <p class="mt-2">Выполнение задачи по созданию функционала по принципу "Оставить комментарий". Выполняется проверка на отправку пустого сообщения, а также защита Captcha-кодом </p>
                    </div>
            </div>




            <div class="itemTask">
                <div class="itemTask__link">
                    <a href="#" >SOME LINK</a>
                </div>

                <div class="itemTask__desc">
                    <span class="h3">Title</span>
                    <p class="mt-2">description</p>
                </div>
            </div>
            <div class="itemTask">
                <div class="itemTask__link">
                    <a href="#" >SOME LINK</a>
                </div>

                <div class="itemTask__desc">
                    <span class="h3">Title</span>
                    <p class="mt-2">description</p>
                </div>
            </div>

    </div>
</section>

<!---footer---->
<footer id="footer" class="footer">
    <div class="container">
    </div>
</footer>
<!---//end_footer---->

<!-- Modal Login-->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="fieldLogin" class="form-label">login</label>
                        <input type="text" name="fieldLogin" class="form-control" id="fieldLogin" placeholder="login">
                    </div>
                    <div class="mb-3">
                        <label for="fieldPassword" class="form-label">Password</label>
                        <input type="text" name="fieldPassword" class="form-control" id="fieldPassword"
                               placeholder="password">
                        <!--                        <input type="hidden" name="addCity">-->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btn-login">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.7.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>

<!--<script type="text/javascript" src="--><?php //= base_url('/assets/js/iziModal.min.js') ?><!--"></script>-->
<!--<script type="text/javascript" src="--><?php //= base_url('/assets/js/mark.min.js') ?><!--"></script>-->
<!--<script type="text/javascript" src="--><?php //= base_url('/assets/js/main.js') ?><!--"></script>-->
</body>
</html>