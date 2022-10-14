<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form method="post" action="/admin/Subjects/add<?= (isset($id))? '/' .$id:''?>">
                    <div class="form-group">
                        <label for="my-input">subject1</label>
                        <input id="my-input" class="form-control" type="text" name="subjects" value="<?= (isset($old_data))? $old_data['subjects']:''?>">
                    </div>
                    
                    <select name="class_id" class="form-control">
                        <?php
                        foreach ($studentclass as $class) {?>
                        <option value="<?= $class['id']?>" <?= (isset($old_data) && $old_data['class_id'] == $class['id'])? 'selected':''?>>
                        <?= $class['class']?></option>
                        <?php }?>
                    </select>
                    <div class="form-group mt-2">
                        <button class="btn" style="background-color:#44a2d2;color:white">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>