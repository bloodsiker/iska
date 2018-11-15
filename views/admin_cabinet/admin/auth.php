<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin SkyStep| Log in</title>
    <link href="/template/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/dist/css/responsive.css" rel="stylesheet">
    <link href="/template/dist/css/admin.css" rel="stylesheet">

</head><!--/head-->


<body role="login">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="panel panel-default">


                <div class="panel-body">
                    <form role="form" action="" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block hidden"><img class="profile-img"
                                                               src="/template/site/img/logo.png"
                                                               class="img-responsive" alt=""></div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <label>Логин:</label>

                                        <div class="input-group"><span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-user"></i> </span>
                                            <input class="form-control" placeholder="Логин" name="login"
                                                   type="text" value="<?= $login; ?>" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Пароль:</label>

                                        <div class="input-group"><span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-lock"></i> </span>
                                            <input class="form-control" placeholder="Пароль" name="password"
                                                   type="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox">
                                            Запомнить меня </label> <input type="submit" name="submit"
                                                                           class="btn btn-success" value="Войти">
                                    </div>

                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>