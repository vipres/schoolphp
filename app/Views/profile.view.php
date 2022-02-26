<?php $this->view('includes.header'); ?>
<?php $this->view('includes.nav'); ?>


    <div class="container-fluid p-4 mt-3 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes.breadcrumb'); ?>

        <div class="row">
            <div class="col-2">
                <img src="<?=ROOT?>img/user_female.jpg" alt="" class="border border-primary d-block mx-auto rounded-circle" style="width: 150px;">
            </div>
            <div class="col-10 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>First Name</th><td>Mary</td></tr>
                    <tr><th>Last Name</th><td>Mary Pili</td></tr>
                    <tr><th>Gender</th><td>Female</td></tr>
                </table>
            </div>
        </div>
        <div class="">

        </div>
    </div>

<?php $this->view('includes.footer'); ?>
