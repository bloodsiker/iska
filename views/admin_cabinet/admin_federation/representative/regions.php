<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Федерація -> Представники в регіонах</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-user">
                            <thead>
                            <tr class="bg-gray">
                                <th width="50px">ID</th>
                                <th>Область</th>
                                <th>Представник</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($regions)): ?>
                                <?php foreach ($regions as $region): ?>
                                    <tr>
                                        <td><?=$region['id']; ?></td>
                                        <td><?=$region['name_list']; ?></td>
                                        <td><?=$region['representative']; ?></td>
                                        <td>
                                            <a href="/admin/federation/regions-club/<?=$region['id']; ?>"><i class="fa fa-plus" data-toggle="tooltip" title="Добавити спортивний клуб"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        <!-- Main row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php' ?>

