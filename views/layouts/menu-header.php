<header>
    <div class="container head">
        <div class="top-header">
            <div class="logo">

            </div>
            <div class="language" style="display: none;">
                <a class="active-lang" href="">UKR</a>
                <a href="">ENG</a>
                <a href="">RUS</a>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</header>


<div class="menu-wrapper">
    <div class="container clearfix">

        <div class="nav-top cl-effect-11 clearfix">
            <ul>
                <li><a class="<?= \App\components\Url::IsActive('/index', 'active_menu')?> nav-top-link" data-hover="Головна" href="/">Головна</a></li>
                <li><a class="<?= \App\components\Url::IsActive('/federation', 'active_menu')?> nav-top-link" data-hover="Федерація">Федерація</a>
                    <ul>
                        <li><a class="<?= \App\components\Url::IsActive('leadership', 'active-dropdown')?>" href="/federation/leadership">Керівництво</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/representative', 'active-dropdown')?>" href="/federation/representative">Представники в регіонах</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/calendar_2016', 'active-dropdown')?>" href="/federation/calendar_2016">Календар всеукраїнських та міжнародних змагань</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/position', 'active-dropdown')?>" href="/federation/position">Положення</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/competition-rules', 'active-dropdown')?>" href="/federation/competition-rules">Правила змагань</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/rules', 'active-dropdown')?>" href="/federation/rules">Назва розділів</a></li>
                    </ul>
                </li>
                <li><a class="<?= \App\components\Url::IsActive('/news', 'active_menu')?> nav-top-link" data-hover="Новини">Новини</a>
                    <ul>
                        <?php $categoryList = \App\app\Models\NewsCategory::getCategoryListSite()?>
                        <?php foreach($categoryList as $category): ?>
                            <li><a class="<?= \App\components\Url::IsActive("/{$category['slug']}", 'active-dropdown')?>" href="/news/<?= $category['slug'] ?>"><?= $category['name'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a class="<?= \App\components\Url::IsActive('/media', 'active_menu')?> nav-top-link" data-hover="Медіа">Медіа</a>
                    <ul>
                        <li><a class="<?= \App\components\Url::IsActive('/photo', 'active-dropdown')?>" href="/media/photo">Фото</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/video', 'active-dropdown')?>" href="/media/video">Відео</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/archive-media/', 'active-dropdown')?>" href="/media/archive-foto">Архів</a></li>
                    </ul>
                </li>
                <li><a class="<?= \App\components\Url::IsActive('/activity', 'active_menu')?> nav-top-link" data-hover="діяльність">діяльність</a>
                    <ul>
                        <li><a class="<?= \App\components\Url::IsActive('/activity/national_patriotic', 'active-dropdown')?>" href="/activity/national_patriotic">Національно-патріотична</a></li>
                        <li><a class="<?= \App\components\Url::IsActive('/activity/scientific', 'active-dropdown')?>" href="/activity/scientific">наукова</a></li>
                    </ul>
                </li>
                <li><a class="<?= \App\components\Url::IsActive('/achievement', 'active_menu')?> nav-top-link" data-hover="досягнення">досягнення</a>
                    <ul>
                        <li><a class="<?= \App\components\Url::IsActive('/international/', 'active-dropdown')?>" href="/achievement/international/ukraine">міжнародні</a>
                        </li>
<!--                        <li><a class="--><?//= \App\components\Url::IsActive('/personal/', 'active-dropdown')?><!--" href="/achievement/personal">особисті</a></li>-->
                    </ul>
                </li>
                <li><a class="<?= \App\components\Url::IsActive('/contact', 'active_menu')?> nav-top-link" data-hover="Контакти" href="/contact">Контакти</a></li>
                <li style="display: none"><a class="nav-top-link" data-hover="Search" href="#">Search</a></li>
            </ul>
        </div>

    </div>
</div>
