<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets/css/bootstrap.min.css'>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">   
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('users/login_view');  ?>
        </div>
        <div class="col-md-9">
            <?php $this->load->view($main_view);  ?>
        </div>
    </div>
    </div>
</body>
</html>