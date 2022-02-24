
        <div class="container-fluid">
            <div class="mt-5 p-4 mx-auto shadow rounded w-100" style="max-width: 340px;">
                <h2 class="text-center">My School</h2>
                <img src="<?=ASSET."img/logo.png"?>" alt="" class="border border-primary d-block mx-auto rounded-circle" style="width:200px">
                <h3>Add User</h3>
                <div class="mb-3">
                  <label for="name" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="First Name" autofocus>
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label">LastName</label>
                  <input type="email" class="form-control" name="lastname" id="lastname"  placeholder="Last Name" autofocus>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Email" autofocus>
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                    <option>--Select a Gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="rank" class="form-label">Rank</label>
                  <select class="form-control" name="rank" id="rank">
                    <option value="">--Select a Rank--</option>
                    <option value="student">Student</option>
                    <option value="reception">Reception</option>
                    <option value="lecturer">Lecturer</option>
                    <option value="admin">Admin</option>
                    <option value="super_admin">Super Admin</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="text" class="form-control" name="password" id="password"  placeholder="Password">
                </div>
                <div class="mb-4">
                  <label for="password2" class="form-label">Confirm Password</label>
                  <input type="text" class="form-control" name="password2" id="password2"  placeholder="Retype Password">
                </div>
                <div class="mb-3">

                    <div class="d-grid gap-3 col-9 mx-auto">
                    <button class="btn btn-primary" type="button">Save</button>
                    <button class="btn btn-danger" type="button">Cancel</button>
                    </div>

                </div>
            </div>
        </div>


