<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | ISKA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/template/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/template/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/template/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/template/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/template/plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" href="/template/dist/css/style.css">

    <link rel="stylesheet" href="/template/dist/css/animate.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="ol-b-cms" style="display: none">

</div>

<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/admin/index" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">ISKA</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">ISKA</span>
        </a>
        <a href="/admin/index" class="logo logo-fixed">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">ISKA</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">ISKA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li>
                        <a href="/admin/congratulation" class="bg-orange">Поздравление</a>
                    </li>
                    <li>
                        <a href="/" target="_blank" class="bg-aqua">На сайт</a>
                    </li>
                    <li>
                            <a href="/admin/logout" class="bg-black">Выход</a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <ul class="sidebar-menu">
                <li class="header">МЕНЮ АДМИНИСТРАТОРА</li>
                <li class="<?= App\components\Url::IsActive('/admin/index')?> treeview">
                    <a href="/admin/index">
                        <i class="fa fa-newspaper-o"></i> <span>Главная</span>
                    </a>
                </li>
                <!--вложенное меню 2 уровень -->


                <li class="<?= App\components\Url::IsActive('/admin/user') ?> treeview">
                    <a href="/admin/user">
                        <i class="fa fa-users"></i> <span>Пользователи</span>
                    </a>
                </li>

                <li class="<?= App\components\Url::IsActive('/admin/banner') ?> treeview hidden">
                    <a href="/admin/banner">
                        <i class="fa fa-picture-o"></i> <span>Баннера</span>
                    </a>
                </li>
                <li class="header">МЕНЮ УПРАВЛЕНИЯ МОДУЛЯМИ</li>

                <li class="<?= App\components\Url::IsActive('/admin/history')?> treeview">
                    <a href="/admin/history">
                        <i class="fa fa-th"></i> <span>Історія розвитку</span>
                    </a>
                </li>

                <li class="<?= App\components\Url::IsActive([
                        '/admin/federation/leadership',
                        '/admin/federation/calendar',
                        '/admin/federation/position',
                        '/admin/federation/list-regions',
                        '/admin/federation/rules'])?> treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Федерація</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?= App\components\Url::IsActive('/admin/federation/leadership')?> treeview">
                            <a href="/admin/federation/leadership">
                                <i class="fa fa-th"></i> <span>Керівництво</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/federation/calendar')?> treeview">
                            <a href="/admin/federation/calendar">
                                <i class="fa fa-th"></i> <span>Календарь</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/federation/rules')?> treeview">
                            <a href="/admin/federation/rules">
                                <i class="fa fa-th"></i> <span>Назва розділів</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/federation/list-regions')?> treeview">
                            <a href="/admin/federation/list-regions">
                                <i class="fa fa-th"></i> <span>Представники в регіонах</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/federation/position')?> treeview">
                            <a href="/admin/federation/position">
                                <i class="fa fa-th"></i> <span>Положення</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="<?= App\components\Url::IsActive(['/admin/activity/national_patriotic', '/admin/activity/scientific'])?> treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Діяльність</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?= App\components\Url::IsActive('/admin/activity/national_patriotic')?> treeview">
                            <a href="/admin/activity/national_patriotic">
                                <i class="fa fa-th"></i> <span>Національно-патріотична</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/activity/scientific')?> treeview">
                            <a href="/admin/activity/scientific">
                                <i class="fa fa-th"></i> <span>Наукова</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="<?= App\components\Url::IsActive(['/admin/achievement/international', '/admin/achievement/personal']) ?> treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Досягнення</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?= App\components\Url::IsActive('/admin/achievement/international') ?> treeview">
                            <a href="/admin/achievement/international">
                                <i class="fa fa-th"></i> <span>Міжнародні</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/achievement/personal') ?> treeview">
                            <a href="/admin/achievement/personal">
                                <i class="fa fa-th"></i> <span>Особисті</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="<?= App\components\Url::IsActive('/admin/news')?> treeview">
                    <a href="/admin/news">
                        <i class="fa fa-file-text-o"></i> <span>Новини</span>
                    </a>
                </li>


                <li class="<?= App\components\Url::IsActive([
                        '/admin/media/photo',
                        '/admin/media/arhive_photo',
                        '/admin/media/arhive_video',
                        '/admin/media/video'])?> treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Медіа</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?= App\components\Url::IsActive('/admin/media/photo') ?> treeview">
                            <a href="/admin/media/photo">
                                <i class="fa fa-th"></i> <span>Фото</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/media/video') ?> treeview">
                            <a href="/admin/media/video">
                                <i class="fa fa-th"></i> <span>Відео</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/media/arhive_photo')?> treeview">
                            <a href="/admin/media/arhive_photo">
                                <i class="fa fa-th"></i> <span>Фото архів</span>
                            </a>
                        </li>
                        <li class="<?= App\components\Url::IsActive('/admin/media/arhive_video') ?> treeview">
                            <a href="/admin/media/arhive_video">
                                <i class="fa fa-th"></i> <span>Видео архів</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>