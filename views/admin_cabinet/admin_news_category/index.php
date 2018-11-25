<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Категории</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_category" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Создать</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Название в ленте новостей</th>
                                <th>Статус</th>
                                <th>Сортировка</th>
                                <th width="20px"></th>
                                <th width="20px"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <tr>
                                        <td><?= $category['id']?></td>
                                        <td><?= $category['name']?></td>
                                        <td><?= $category['title']?></td>
                                        <td><div class="<?= App\app\Models\News::getColorNews($category['is_active'])?>">
                                                <?= App\app\Models\NewsCategory::getStatusCategory($category['is_active'])?></div>
                                        </td>
                                        <td class="text-center"><?= $category['sort'] ?></td>
                                        <td class="text-center">
                                            <a href="/news/<?= $category['slug']; ?>" target="_blank" data-toggle="tooltip" title="Посмотреть на сайте">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="/admin/news/category/update/<?= $category['id']; ?>" data-toggle="tooltip" title="Редактировать">
                                                <i class="fa fa-pencil-square-o"></i>
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


<div class="modal modal_create_category fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить категорию</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Название</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Название в ленте новостей</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">Сортировка</label>
                            <div class="col-sm-4">
                                <input type="number" name="sort" class="form-control" id="sort">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-sm-3 control-label">Статус</label>
                            <div class="col-sm-4">
                                <select name="is_active" class="form-control" id="category">
                                    <option value="1">Активна</option>
                                    <option value="0">Не активна</option>
                                </select>
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

