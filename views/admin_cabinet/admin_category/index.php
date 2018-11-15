<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row ">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Список категорий</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 80px;">
                                <a href="" data-toggle="modal" data-target=".modal_create_category" class="btn btn-sm btn-primary"><i class="fa fa-plus">&nbsp;</i>Добавить</a>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table-bordered table">
                            <tr>
                                <th width="50px">#</th>
                                <th>Название категории</th>
                                <th>Порядковый номер</th>
                                <th>Статус</th>
                                <th class="hidden" width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                            <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <tr>
                                        <td><?php echo $category['id']; ?></td>
                                        <td><?php echo $category['name']; ?></td>
                                        <td><?php echo $category['sort']; ?></td>
                                        <td><div class="<?php echo News::getColorNews($category['status'])?>"><?php echo Category::getStatusCategory($category['status']); ?></div></td>
                                        <td class="hidden">
                                            <a href="category/update/<?php echo $category['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td>
                                            <a href="category/delete/<?php echo $category['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить категорию ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </table>
                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <div class="row">

            <?php if (is_array($categoryList)): ?>
                <?php foreach ($categoryList as $category): ?>

                    <div class="col-md-4">
                        <a href="/admin/category/view/<?php echo $category['id']?>">
                            <div class="box bg-category" style="background: url('/upload/category_img/bg-category-<?php echo $category['id']?>.jpg') no-repeat; background-size: cover; height: 210px; background-color: rgba(0, 0, 0, 0.4); background-blend-mode: overlay;">
                                <h2 style="margin: 0; padding-top: 65px; text-align: center; color: #fff;"><?php echo $category['name']?></h2>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>

        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<div class="modal modal_create_category fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить новую категорию</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
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
                            <label for="name_cat" class="col-sm-3 control-label">Название</label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name_cat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">Порядковый номер</label>
                            <div class="col-sm-4">
                                <input type="text" name="sort" class="form-control" id="sort" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="exampleInputFile">Загрузите изображения</label>
                            <div class="col-sm-4">
                                <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 335х195 px" name="image" id="exampleInputFile">
                            </div>
                        </div>
                        <button name="create" class="btn btn-primary pull-right">Сохранить</button>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена</button>

                    </form>
                </div>

            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

