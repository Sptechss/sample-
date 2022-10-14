<div classs="row">
    <div class="col-sm-12">
        <?= alertMsg()?>
        <div class="row">
            <div class="col-6">
                <h2 class="text-capitalize">class list</h2>
            </div>
            <div class="col-6 text-right">
                <a href="/admin/studentclass/add" class="btn btn-outline-primary mb-2"><i class="fa-solid fa-plus"></i> add</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="resultdatatable">
                        <thead>
                            <tr class="text-white text-center" style="background-color:#44a2d2;">
                                <th>id</th>
                                <th>class</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($stdclass as $cls) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $cls['class'] ?></td>
                                    <td>
                                        <a href="/admin/studentclass/add/<?= $cls['id'] ?>"><i class="fa-sharp fa-solid fa-pen-to-square text-success"></i></a>
                                        <a href="/admin/studentclass/delete/<?= $cls['id'] ?>" onclick="alert('you want to delete this subject')"><i class="fa-solid fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>