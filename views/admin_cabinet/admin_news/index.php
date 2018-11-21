<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список новостей</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_news" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Создать</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>Изображение</th>
                                <th>ID</th>
                                <th>Заголовок</th>
                                <th>Категория</th>
                                <th>Статус</th>
                                <th>Просмотры</th>
                                <th>Дата</th>
                                <th>Действия</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($newsList)): ?>
                                <?php foreach ($newsList as $news): ?>
                                    <tr>
                                        <td width="120"><img width="120" src="<?php echo $news['path'] . $news['img']?>" alt=""></td>
                                        <td><?php echo $news['id']?></td>
                                        <td><?php echo $news['title']?></td>
                                        <td><?= App\app\Models\News::getNameCategory($news['category'])?></td>
                                        <td><div class="<?= App\app\Models\News::getColorNews($news['status'])?>"><?= App\app\Models\News::getStatusNews($news['status'])?></div></td>
                                        <td class="text-center"><?= $news['views'] ?></td>
                                        <td><?= App\components\Functions::replaceTypeDate($news['data_create']); ?></td>
                                        <td>
                                            <a href="/news/<?= $news['category']; ?>/<?= $news['id']; ?>" target="_blank" data-toggle="tooltip" title="Посмотреть на сайте">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            &nbsp;
                                            <a href="/admin/news/update/<?php echo $news['id']; ?>" data-toggle="tooltip" title="Редактировать">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            &nbsp;
                                            <a href="/admin/news/delete/<?php echo $news['id']; ?>" data-toggle="tooltip" title="Удалить">
                                                <i class="glyphicon glyphicon-trash delete"></i>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<div class="modal modal_create_news fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить новость</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="date_create" class="col-sm-3 control-label">Дата создания</label>
                            <div class="col-sm-4">
                                <input type="date" name="data_create" class="form-control" id="date_create" value="<?= date('Y-m-d')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_cat" class="col-sm-3 control-label">Статус</label>
                            <div class="col-sm-4">
                                <select name="status" class="form-control">
                                    <option value="1">Отображена</option>
                                    <option value="0">Скрыта</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_cat" class="col-sm-3 control-label">Категория</label>
                            <div class="col-sm-4">
                                <select name="category" class="form-control">
                                    <option value="ukrainian">Всеукраїнські</option>
                                    <option value="iska-pro">ISKA PRO</option>
                                    <option value="international">Міжнародні</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Заголовок</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lead" class="col-sm-3 control-label">Лид</label>
                            <div class="col-sm-9">
                                <textarea name="description" style="width: 100%" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment" class="col-sm-3 control-label">Полный текст</label>
                            <div class="col-sm-9">
                                <textarea name="text" id="comment" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addimg" class="col-sm-3 control-label">Загрузите изображения</label>
                            <div class="col-sm-9">
                                <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 650х360 px" name="image" id="addimg">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <input type="submit" name="create" value="Сохранить" class="btn btn-primary pull-right">
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

