<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= get_csrf_meta(); ?>

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

            <div class="signArea">
                <?php if (auth()::isAuth()) : ?>
                <a href="/signout" class="btn btn-dark"><i class="fa fa-sign-out" aria-hidden="true"></i>SignOut</a>
                <?php else: ?>
                <div data-bs-toggle="modal" data-bs-target="#modalLogin">
                    <button class="btn btn-dark btnSignIn"><i class="fa fa-sign-in" aria-hidden="true"></i>SignIn</button>
                </div>
                <?php endif; ?>
            </div>



        </div>
    </div>



</header>
<!---//end_header---->

<!---content---->
<section id="content" class="content">
    <?= /** @var string $content */
    $content; ?>
</section>

<section class="statistic">

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
                <form action="/auth" method="post" id="loginForm">
                    <?= get_csrf_token()  ?>
                    <div class="mb-3">
                        <label for="login" class="form-label">login</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="login">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="password"
                               placeholder="password">
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