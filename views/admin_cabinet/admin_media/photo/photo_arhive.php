<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список фото-альбомов в архиве</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-banners no_sort">
                            <thead>
                            <tr class="bg-orange">
                                <th>Обложка</th>
                                <th width="30px">ID</th>
                                <th>Название альбома</th>
                                <th width="30px">Сортировка</th>
                                <th width="70px">Действия</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($albumList)): ?>
                                <?php foreach ($albumList as $album): ?>
                                    <tr>
                                        <td width="140"><img width="140" src="<?php echo $album['path'] . $album['img']?>" alt=""></td>
                                        <td><?php echo $album['id']?></td>
                                        <td><?php echo $album['title']?></td>
                                        <td style="text-align: center"><?php echo $album['sort']?></td>
                                        <td><a href="photo/update/<?php echo $album['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            &nbsp;
                                            <a href="photo/<?php echo $album['id']; ?>" data-toggle="tooltip" title="Добавить фото"><i
                                                    class="glyphicon glyphicon-plus"></i></a>
                                            &nbsp;
                                            <a href="photo/delete-album/<?php echo $album['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить фото-альбом ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
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


<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

