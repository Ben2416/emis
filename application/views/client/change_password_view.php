<!-- Page -->
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
     data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
        <div class="brand">
            <img class="brand-img" src="<?php echo base_url(); ?>assets/logo.png" alt="...">
        </div>
        <p>Please change your temporary password</p>

        <?php echo form_open(base_url().'client/login/changePassword'); ?><!--<form method="post" role="form">-->
        <div class="form-group form-material floating">
            <input type="password" class="form-control empty" id="inputEmail" name="oldpass" autocomplete="off">
            <label class="floating-label" for="inputEmail">Old Password</label>
            <span class="text-danger"><?php echo form_error('oldpass'); ?></span>
        </div>
        <div class="form-group form-material floating">
            <input type="password" class="form-control empty" id="inputEmail" name="newpass" autocomplete="off">
            <label class="floating-label" for="inputEmail">New Password</label>
            <span class="text-danger"><?php echo form_error('newpass'); ?></span>
        </div>
        <div class="form-group form-material floating">
            <input type="password" class="form-control empty" id="inputEmail" name="conpass" autocomplete="off">
            <label class="floating-label" for="inputEmail">Confirm Password</label>
            <span class="text-danger"><?php echo form_error('conpass'); ?></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="change_password_btn" value="Change Your Password">Change Your Password</button>
        </div>
        </form>
        <p>To <a href="<?php echo base_url().'client/';?>login">Login</a> | To <a href="<?php echo base_url().'client/';?>register">Register</a></p>

        <footer class="page-copyright page-copyright-inverse">
            <p>WEBSITE BY o3interactive Technologies</p>
            <p>© 2017. All RIGHT RESERVED.</p>

        </footer>
    </div>
</div>
<!-- End Page -->