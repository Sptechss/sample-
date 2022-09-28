<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
            <form method="post" action="/admin/studentclass/add<?= (isset($id))? '/' .$id:''?>">
                    <div class="form-group">
                        <label for="my-input">class</label>
                        <input id="my-input" class="form-control" type="text" name="class" placeholder="Enter the subject" value="<?= (isset($old_data))? $old_data['class']:''?>">
                    </div>
                    <button class="btn btn-primary btn-block">save</button>
                </form>
            </div>
        </div>
    </div>
</div>

