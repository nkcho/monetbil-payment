<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

<?php
    include 'header.php';
?>
	<title>CI-NEWS login</title>

</head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="<?php echo base_url();?>Newspaper/login" method="post">

                        <div class="form-group">
                            <label>Enter username</label>
                            <input type="text" name='username' class='form-control ' />
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>

                        <div class="form-group">
                            <label>Enter password</label>
                            <input type="password" name='userpass' class='form-control ' />
                            <span class="text-danger"><?php echo form_error('userpass'); ?></span>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="submit" name='login' class='form-control ' value='SIGN IN' class='btn btn-success'  />
                                <?php $this->session->flashdata('error'); ?>
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </body>
</html>