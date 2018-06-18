<h2>Login form</h2>

<?php $attributes=array('id'=>'login form','class'=>'form_horizontal'); ?>

<?php echo form_open('users/login',$attributes);?>

<div class="form-group">

<?php echo form_label('username');?>

<?php

$data=array(
    'class'=>'form-control',
    'name'=>'username',
    'placeholder'=>'Enter username'
)
?>
<?php echo form_input($data);?>

</div>

<div class="form-group">

<?php echo form_label('password');?>

<?php

$data=array(
    'class'=>'form-control',
    'name'=>'password',
    'placeholder'=>'Enter password'
)
?>
<?php echo form_password($data);?>

</div>

<div class="form-group">

<?php

$data=array(
    'class'=>'btn btn-primary',
    'name'=>'submit',
    'value'=>'Login'
)
?>
<?php echo form_submit($data);?>

</div>

<?php echo form_close();?>