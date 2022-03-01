        <div class="container">

            <div class="col-sm-5 mt-5 p-4 mx-auto shadow rounded w-100">
                <h2 class="text-center">My School</h2>
                <img src="<?=ASSET."img/logo.png"?>" alt="" class="border border-primary d-block mx-auto rounded-circle" style="width:200px">
                <h3>Add User</h3>
               <?php $form = \app\Core\Form\Form::begin('', "post") ?>
               <?php echo $form->field($model, 'name', 'Name')?>

               <?php echo $form->field($model, 'lastname', 'Last Name')?>
               <?php echo $form->field($model, 'email', 'Email')->emailField()?>
                <div class="mb-3">
                  <label for="gender" class="form-label <?php $model->hasError('gender') ? ' is-invalid': '' ?>">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                    <option>--Select a Gender--</option>
                    <option value="male" <?= $model->gender == "male" ? "selected" : ""  ?>>Male</option>
                    <option value="female" <?= $model->gender == "female" ? "selected" : ""  ?>>Female</option>
                  </select>
                  <?php $model->getFirstError('gender') ? '<div class="invalid-feedback">'.$model->getFirstError('gender').'</div>' : '' ?>
                </div>
                <div class="mb-3">
                  <label for="role" class="form-label">Role</label>
                  <select class="form-control" name="role" id="role">
                    <option value="">--Select a Role--</option>
                    <option value="student" <?= $model->role == "student" ? "selected" : ""  ?>>Student</option>
                    <option value="reception" <?= $model->role == "reception" ? "selected" : ""  ?>>Reception</option>
                    <option value="lecturer" <?= $model->role == "lecturer" ? "selected" : ""  ?>>Lecturer</option>
                    <option value="admin"<?= $model->role == "role" ? "selected" : ""  ?>>Admin</option>
                    <option value="super_admin" <?= $model->role == "super_admin" ? "selected" : ""  ?>>Super Admin</option>
                  </select>
                </div>
                <?php echo $form->field($model, 'password', 'Password')->passwordField()?>
                <?php echo $form->field($model, 'passwordConfirm', 'Password Confirm')->passwordField()?>
                <div class="mb-3">

                    <div class="d-grid gap-3 col-9 mx-auto">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-danger" type="button">Cancel</button>
                    </div>

                </div>
                <?php $form = \app\Core\Form\Form::end() ?>
            </div>

        </div>


