<div classs="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-6">
                <h2 class="text-capitalize">Notice list</h2>
            </div>
            <div class="col-6 text-right">
                <a href="/admin/notice/add" class="btn btn-outline-primary mb-2"><i class="fa-solid fa-plus"></i> add</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="resultdatatable">
                        <thead>
                            <tr class="text-white text-center" style="background-color:#44a2d2;">
                                <th>id</th>
                                <th>notices</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>today 10th class results has declared</td>
                                <td>
                                    <form>
                                        <div class="form-group form-check m-0">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        </div>
                                    </form>

                                </td>
                                <td>
                                    <a href=""><i class="fa-sharp fa-solid fa-pen-to-square text-success"></i></a>
                                    <a href="" onclick="alert('you want to delete this subject')"><i class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>