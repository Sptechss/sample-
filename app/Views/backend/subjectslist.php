<div classs="row">
    <div class="col-sm-12">
        <?= alertMsg() ?>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="text-capitalize">Students subject list</h2>
            </div>
            <div class="col-sm-6 text-right">
                <a href="/admin/subjects/add" class="btn btn-outline-primary mb-2"><i class="fa-solid fa-plus"></i>  Add</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" id="resultdatatable">
                    <thead>
                        <tr class="text-white" style="background-color:#44a2d2;">
                            <th>id</th>
                            <th>class</th>
                            <th>subjects</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($subjects as $sub) {?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $sub['class_id']?></td>
                            <td><?= $sub['subjects']?></td>
                            <td>
                                <a href="/admin/subjects/add/<?= $sub['id']?>" ><i class="fa-sharp fa-solid fa-pen-to-square text-success"></i></a>
                                <a href="/admin/subjects/delete/<?= $sub['id']?>"  onclick="alert('you want to delete subject')"><i class="fa-solid fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>