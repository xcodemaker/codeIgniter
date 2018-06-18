<p class='bg-success'>

<?php if($this->session->flashdata('login_success')): ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif; ?>

</p>

<p class='bg-danger'>

<?php if($this->session->flashdata('login_failed')): ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif; ?>

</p>


<?php
echo '<h1>this is home view</h1>';