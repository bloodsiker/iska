<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-md-4">
                <div class="box " style="background: url('/upload/category_img/bg-category-<?php echo $categoryId['id']?>.jpg') no-repeat; background-size: cover; height: 210px; color: #fff;">
                    <h2 style="margin: 0; padding-top: 55px; text-align: center"><?php echo $categoryId['name']?></h2>
                </div>
            </div>

            <?php if($categoryId['parent_id'] == 0):?>
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Список подкатегорий</h3>
                        <div class="box-tools">
                            <!-- если последняя категория, то скрываем кнопку-->
                            <?php if($categoryId['last'] == 0):?>
                            <div class="input-group input-group-sm" style="width: 80px;">
                                <a href="" data-toggle="modal" data-target=".modal_create_category" class="btn btn-sm btn-primary"><i class="fa fa-plus">&nbsp;</i>Добавить</a>
                            </div>
                            <?php endif;?>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table-bordered table">
                            <tr>
                                <th>Название категории</th>
                                <th>Порядковый номер</th>
                                <th>Статус</th>
                                <th width="50px" class=""></th>
                                <th width="50px" class=""></th>
                            </tr>
                            <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <tr>
                                        <td><?php echo $category['name']; ?></td>
                                        <td><?php echo $category['sort']; ?></td>
                                        <td><?php echo Category::getStatusCategory($category['status']); ?></td>
                                        <td class="">
                                            <a href="/admin/category/view/<?php echo $category['id']; ?>" data-toggle="tooltip" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td class="">
                                            <a href="/admin/category/delete/<?php echo $category['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить категорию ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </table>
                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>

            <?php endif;?>

        </div><!-- /.row -->



        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список баннеров в категории</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_banner" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Добавить</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table  class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>#</th>
                                <th>Изображение</th>

                                <th width="250px">Статус</th>
                                <th width="100px">Порядок</th>
                                <th width="50px"></th>
                                <th width="50px"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($bannersList)): ?>
                                <?php foreach ($bannersList as $banner): ?>
                                    <tr>
                                        <td><?php echo $banner['id']?></td>
                                        <td><img width="120" src="/upload/slider/slider-<?php echo $banner['id']?>.jpg" style="display: block" alt=""></td>

                                        <td><div class="<?php echo Banner::getColorBanner($banner['status']); ?>"><?php echo Banner::getStatusBanner($banner['status']); ?></div></td>
                                        <td><?php echo $banner['sort']; ?></td>
                                        <td><a href="/admin/banner/update/<?php echo $banner['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td>
                                            <a href="/admin/banner/delete/<?php echo $banner['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить баннер ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
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



        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border bg-red" onclick="diplay_hide('#category_info');return false;" style="cursor: pointer">
                        <h3 class="box-title">Редактировать категорию "
                            <?php
                            if($categoryId['parent_id'] != 0){
                                echo Category::getNameCategoryById($categoryId['parent_id']);
                                echo " \ ";
                                echo $categoryId['name'];

                            } else {
                                echo $categoryId['name'];
                            }

                            ?> "
                            &nbsp;<i class="fa fa-edit"></i>
                        </h3>
                        <div class="box-tools">
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body" id="category_info" style="display: none">
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group hidden">
                                    <label for="exampleInputPassword1">Название</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                                        <input type="text" name="category_id" class="form-control" value="<?php echo $categoryId['id']?>" placeholder="Название">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Статус</label>
                                    <select name="status" class="form-control">
                                        <option <?php if ($categoryId['status'] == 1) echo ' selected="selected"'; ?> value="1">Отображена</option>
                                        <option <?php if ($categoryId['status'] == 0) echo ' selected="selected"'; ?> value="0">Скрыта</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Название</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                                        <input type="text" name="name" class="form-control" value="<?php echo $categoryId['name']?>" placeholder="Название">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Порядок</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                        <input type="text" name="sort" class="form-control" value="<?php echo $categoryId['sort']?>" placeholder="Порядок">
                                    </div>
                                </div>

                                <div class="form-group hidden">
                                    <div class="input-group">
                                        Последняя категория <input type="checkbox" name="last" <?php if($categoryId['last'] == 1) echo 'checked'?> value="1">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <img src="/upload/category_img/bg-category-<?php echo $categoryId['id']?>.jpg" width="200" alt="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Загрузите изображения</label>
                                    <div class="input-group">
                                        <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 335х195 px" name="image" id="exampleInputFile">
                                    </div>
                                </div>

                                <div class="form-group button-group clearfix">
                                    <button name="update_category" class="btn btn-primary pull-right">Применить</button>
                                    <button type="button" class="btn btn-default pull-right" onclick="diplay_hide('#category_info');return false;">Отмена</button>
                                </div>

                            </div><!-- /.box-body -->
                        </form>
                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->



        <?php if($categoryId['last'] == 0):?>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Описание категории "
                            <?php
                            if($categoryId['parent_id'] != 0){
                                echo Category::getNameCategoryById($categoryId['parent_id']);
                                echo " \ ";
                                echo $categoryId['name'];
                            } else {
                                echo $categoryId['name'];
                            }

                            ?>
                            "
                        </h3>
                        <div class="box-tools">
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form action="" method="post">
                            <div class="form-group clearfix">
                                <label for="comment" class="col-sm-12 control-label">Текст описания</label>
                                <div class="col-sm-12">
                                    <textarea name="description" id="comment" cols="30" rows="10"><?php echo $categoryId['description']?></textarea>
                                </div>
                            </div>
                            <div style="height: 10px">&nbsp;</div>
                            <div class="form-group button-group clearfix">
                                <button name="update" class="btn btn-primary pull-right">Применить</button>
                                &nbsp;
                                <a href="" onclick="window.history.back();" class="btn btn-default pull-right">Назад
                                </a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <?php endif;?>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<div class="modal modal_create_banner fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить новый баннер в категорию</h4>
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
                        <div class="form-group hidden">
                            <label for="name_cat" class="col-sm-3 control-label">Id</label>
                            <div class="col-sm-4">
                                <input type="text" name="category_id" class="form-control" value="<?php echo $categoryId['id']?>">
                            </div>
                        </div>
                        <div class="form-group hidden">
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
                        <div class="form-group hidden">
                            <label for="sort" class="col-sm-3 control-label">Текст на баннере</label>
                            <div class="col-sm-9">
                                <textarea name="text" cols="90" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3" for="exampleInputFile">Загрузите изображения</label>
                            <div class="col-sm-4">
                                <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 1920х1200 px" name="image" id="exampleInputFile">
                            </div>
                        </div>
                        <div class="form-group button-group clearfix">
                            <button name="create_banner" class="btn btn-primary pull-right">Сохранить</button>
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

<div class="modal modal_create_category fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить новую категорию</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group hidden">
                                <label for="name_cat" class="col-sm-3 control-label">Id</label>
                                <div class="col-sm-4">
                                    <input type="text" name="parent_id" class="form-control" value="<?php echo $categoryId['id']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Статус</label>
                                <select name="status" class="form-control">
                                    <option value="1">Отображена</option>
                                    <option value="0">Скрыта</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Название</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Название">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Порядок</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                    <input type="text" name="sort" class="form-control" placeholder="Порядок">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Загрузите изображения</label>
                                <div class="input-group">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 335х195 px" name="image" id="exampleInputFile">
                                </div>
                            </div>


                            <div class="form-group hidden">
                                <div class="input-group">
                                    Последняя категория <input type="checkbox" name="last" value="1">
                                </div>
                            </div>

                            <div class="form-group hidden">
                                <label for="exampleInputFile">Загрузите изображения</label>
                                <input type="file" name="image" id="exampleInputFile">
                            </div>

                        </div><!-- /.box-body -->

                        <div class="form-group button-group clearfix">
                            <input type="submit" name="create" class="btn btn-primary pull-right" value="Добавить">
                            <button type="button" class="btn btn-success pull-right" data-dismiss="modal" aria-label="Close">Отмена</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php if ($result): ?>
    <div class="result-update wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <?php echo $result; ?>
    </div>
<?php endif; ?>

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

