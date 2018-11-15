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
                                <th class="" width="50px"></th>
                                <th width="50px"></th>
                            </tr>
                            <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <tr>
                                        <td><?php echo $category['id']; ?></td>
                                        <td><?php echo $category['title']; ?></td>

                                        <td class="">
                                            <a href="/admin/achievement/international/<?php echo $category['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td>
                                            <a href="/admin/achievement/international/delete/<?php echo $category['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить категорию ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </table>
                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<div class="modal modal_create_category fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавити новий розділ</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">

                    <form id="form" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group hidden">
                            <input type="text" name="category" class="form-control" value="international">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label" onkeyup="translit()">Название</label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alias" class="col-sm-3 control-label">URL страницы</label>
                            <div class="col-sm-4">
                                <input type="text" name="alias" class="form-control" id="alias"  >
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <button name="add_category" class="btn btn-primary pull-right">Сохранить</button>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена
                            </button>
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

