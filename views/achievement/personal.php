<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISKA - Міжнародні досягнення</title>
    <meta name="author" content="Овсийчук Дмитрий" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="Resource-type" content="Document" />
    <link href="/template/site/img/icon/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/template/site/css/style.css">
    <link rel="stylesheet" href="/template/site/css/colorbox.css">

    <link href="/template/site/css/galleriffic.css" rel="stylesheet" type="text/css" />
    <link href="/template/site/css/main.css" rel="stylesheet" type="text/css" />

    <script src="/template/site/js/jquery.js"></script>
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>


    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements

            $(".ajax").colorbox();

        });
    </script>


    <?php require_once ROOT . '/views/layouts/analytics.php'?>
</head>
<body>
<?php require_once ROOT . '/views/layouts/tagmanager.php'?>
<!-- HEAD AND MENU  -->
<?php require_once ROOT . '/views/layouts/menu-header.php'?>



<section class="displ-slide">
    <div class="container main">
        <div class="slider-block calendar-block">
            <div class="bookmark bookmark-video">
                <span>Особисті досягнення</span>
            </div>
            <div class="position">
                <h1 style="text-align: center">Чемпіони  світу  ІСКА  2013-2016 рік.</h1>


                <table width="100%" border="1" cellspacing="0" cellpadding="4"
                       style="border-collapse: collapse; margin-top: 40px; text-align: center">
                    <tr style="background: #0e7add; color: #fff;">
                        <th>№</th>
                        <th style="text-align: left">Прізвище, Ім'я</th>
                        <th></th>
                        <th>Розділ</th>
                    </tr>
                    <tr>
                        <td style="background: #d3d3d3;">1</td>
                        <td style="text-align: left">Лисюк Сергій / м.Чернігів</td>
                        <td style="background: #d3d3d3;"> 1 - місце</td>
                        <td>фул-контакт</td>
                    </tr>
                    <tr>
                        <td style="background: #d3d3d3;">2</td>
                        <td style="text-align: left">Шрам Сергій /  м.Чернігів</td>
                        <td style="background: #d3d3d3;"> 1 - місце</td>
                        <td>Лайт,лоу-кік, К-1 лайт</td>
                    </tr>
                    <tr>
                        <td style="background: #d3d3d3;">3</td>
                        <td style="text-align: left">Копкін Богдан /  м.Кременчук</td>
                        <td style="background: #d3d3d3;"> 1 - місце</td>
                        <td>лоу-кік, К-1</td>
                    </tr>
                    <tr>
                        <td style="background: #d3d3d3;">4</td>
                        <td style="text-align: left">Рильский Дмитро /  м.Київ</td>
                        <td style="background: #d3d3d3;"> 1 - місце</td>
                        <td>К-1 лайт</td>
                    </tr>
                    <tr>
                        <td style="background: #d3d3d3;">5</td>
                        <td style="text-align: left">Кашка Ігор /  м.Київ</td>
                        <td style="background: #d3d3d3;"> 1 - місце</td>
                        <td>фул</td>
                    </tr>
                </table>



                <div style="height: 300px"></div>
            </div>
        </div>
        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

    </div>
</section>


<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>