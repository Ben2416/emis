<!-- Page -->
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
     data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
        <div class="brand">
            <img class="brand-img" src="<?php echo base_url(); ?>assets/logo.png" alt="...">
        </div>
        <p>Please select your preferred loan category</p>

        <?php echo form_open(base_url().'client/login/loanCategory'); ?><!--<form method="post" role="form">-->
        <div class="form-group form-material floating" style="margin-top: 20px;">
			<select class="form-control" name="loancat">
				<option value="">&nbsp;</option>
				<option value="Undergraduate" <?php echo  set_select('loancat', 'Undergraduate'); ?>>Undergraduate Loan</option>
				<option value="Postgraduate" <?php echo  set_select('loancat', 'Postgraduate'); ?>>Postgraduate Loan</option>
				<option value="Health" <?php echo  set_select('loancat', 'Health'); ?>>Health Studies Loan</option>
				<option value="Law" <?php echo  set_select('loancat', 'Law'); ?>>Law Student Loan</option>
			</select>
			<label class="floating-label" for="inputSex" style="margin-left: 15px;">Loan Category</label>
			<span class="text-danger"><?php echo form_error('loancat'); ?></span>
		</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="loan_category_btn" value="Change Your Password">Set Loan Category</button>
        </div>
        </form>
        <p>To <a href="<?php echo base_url().'client/';?>login">Login</a> | To <a href="<?php echo base_url().'client/register';?>register">Register</a></p>

        <footer class="page-copyright page-copyright-inverse">
            <p>WEBSITE BY o3interactive Technologies</p>
            <p>© 2017. All RIGHT RESERVED.</p>

        </footer>
    </div>
</div>
<!-- End Page -->