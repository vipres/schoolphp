<?php $this->view('includes.header'); ?>
<?php $this->view('includes.nav'); ?>
        <div class="container-fluid">
            <h1>This is Home</h1>
            <i class="fa-solid fa-user"></i>
        </div>
        <?php
           echo '<pre>';
           var_dump($data['rows']);
           echo '<pre>';
         
        ?>

<?php $this->view('includes.footer'); ?>
