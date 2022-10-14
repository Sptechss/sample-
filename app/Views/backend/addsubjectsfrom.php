<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="my-input">subject</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <select>
                        <?php
                        foreach ($vstudentclass as $class) {?>
                        <option><?= $class['class']?></option>
                        <?php }?>
                    </select>
                    <div class="form-group">
                        <button class="btn" style="background-color:#44a2d2;color:white">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>