<div classs="row">
    <div class="col-sm-12">
        <?= alertMsg() ?>
        <div class="row">
            <div class="col-6">
                <h2 class="text-capitalize">students list</h2>
            </div>
            <div class="col-6 text-right">
                <a href="/admin/students/add" class="btn btn-outline-primary mb-2"><i class="fa-solid fa-plus"></i>  Add</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered "  id="resultdatatable">
                    <thead>
                        <tr class="text-white" style="background-color:#44a2d2;">
                            <th>id</th>
                            <th>name</th>
                            <th>class</th>
                            <th>rollno</th>
                            <th>email</th>
                            <th>gender</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($students as $std) { ?>

                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $std['name'] ?></td>
                                <td><?= $std['class_id'] ?></td>
                                <td><?= $std['rollno'] ?></td>
                                <td><?= $std['email'] ?></td>
                                <td><?= $std['gender'] ?></td>
                                <td>
                                    <a href="/admin/students/add/<?= $std['id'] ?>" ><i class="fa-sharp fa-solid fa-pen-to-square text-success"></i></a>
                                    <a href="/admin/students/delete/<?= $std['id'] ?>"><i class="fa-solid fa-trash text-danger"></i></a>
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


