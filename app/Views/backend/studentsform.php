<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form method="post" action="/admin/students/add<?= (isset($id))? '/' .$id:''?>">
                    <div class="form-group">
                        <label for="my-input">class</label>
                       <select class="form-control" name="class_id">
                        <option>select class</option>
                        <?php foreach ($class as $cls) {?>
                        <option value="<?= $cls['id']?>"<?= (isset($old_data) && $old_data['class_id'] == $cls['id'])?'selected':''?>>
                        <?= $cls['class']?></option>
                        <?php }?>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="my-input">name</label>
                        <input id="my-input" class="form-control" type="text" name="name"  value="<?= (isset($old_data))? $old_data['name']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="my-input">rollno</label>
                        <input id="my-input" class="form-control" type="number" name="rollno" value="<?= (isset($old_data))? $old_data['rollno']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="my-input">email</label>
                        <input id="my-input" class="form-control" type="email" name="email" value="<?= (isset($old_data))? $old_data['email']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="my-input">gender</label>
                       <select class="form-control" name="gender">
                        <option>select gender</option>
                        <option <?= (isset($old_data) && $old_data['gender'] == "male")?'selected':''?>>male</option>
                        <option <?= (isset($old_data) && $old_data['gender'] == "female")?'selected':''?>>female</option>
                        <option <?= (isset($old_data) && $old_data['gender'] == "other")?'selected':''?>>other</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <button class="btn" style="background-color:#44a2d2;color:white">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>