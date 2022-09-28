<div classs="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <h3>Students class list</h3>
            </div>
            <div class="col-sm-6 text-right">
                <a href="/admin/studentclass/add" class="btn btn-primary mb-2">add</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-white" style="background-color:#44a2d2;">
                            <th>id</th>
                            <th>class name</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($stdclass as $cls) {?>
                        <tr>
                            <td><?= $i++?></td>
                            <td><?= $cls['class']?></td>
                            <td>
                            <a href="/admin/studentclass/add/<?= $cls['id']?>" class="btn btn-success">edit</a>
                            <a href="/admin/studentclass/delete/<?= $cls['id']?>" class="btn btn-danger" onclick="alert('you want to delete this subject')">delete</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


