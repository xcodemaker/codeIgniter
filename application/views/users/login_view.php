<?php if(!$this->session->userdata('logged_in')) :?>
<h2>Login form</h2>

<?php $attributes=array('id'=>'login form','class'=>'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

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

<?php echo form_label('Confirm password');?>

<?php

$data=array(
    'class'=>'form-control',
    'name'=>'confirm_password',
    'placeholder'=>'Confirm password'
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

<?php else:?>
<h2>Logout</h2>

<?php echo form_open('users/logout');?>

<?php if($this->session->userdata('username')); ?>

<?php echo "Hi ".$this->session->userdata('username')?> 

<div class="form-group">

<?php

$data=array(
    'class'=>'btn btn-primary',
    'name'=>'submit',
    'value'=>'Logout'
)
?>
<?php echo form_submit($data);?>

</div>

<?php echo form_close();?>
<?php endif;?>