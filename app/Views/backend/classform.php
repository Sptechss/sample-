<h2 class="text-capitalize"> class form</h2>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
            <form method="post" action="/admin/studentclass/add<?= (isset($id))? '/' .$id:''?>">
                    <div class="form-group">
                        <label for="my-input">class</label>
                        <input id="my-input" class="form-control" type="text" name="class" placeholder="Enter the class" value="<?= (isset($old_data))? $old_data['class']:''?>">
                    </div>
                    <button class="btn btn-primary btn-block">save</button>
                </form>
            </div>
        </div>
    </div>
</div>

