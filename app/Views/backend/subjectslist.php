<div classs="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <h3>Students subject list</h3>
            </div>
            <div class="col-sm-6 text-right">
                <a href="/admin/subjects/add" class="btn  mb-2" style="background-color:#44a2d2;color:white">Add</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-white" style="background-color:#44a2d2;">
                            <th>id</th>
                            <th>subjects</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($subjects as $sub) {?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $sub['subject']?></td>
                            <td>
                                <a href="/admin/subjects/add/<?= $sub['id']?>" class="btn btn-success">Edit</a>
                                <a href="/admin/subjects/delete/<?= $sub['id']?>" class="btn btn-danger" onclick="alert('you want to delete subject')">Delete</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>