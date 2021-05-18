
<?php

  $this->load->view("template/header.php");
  $this->load->view("template/navbar.php");
 ?>

      <div class="card" style="min-width: 800px;margin: 0 auto">

    					<div class="card-header">
                <h1>Login </h1>
    					</div>
    					<div class="card-body">

    						<form method="post">
                  <div class="form-group">
    								<label for="email">Email </label>
    								<input class="form-control <?php echo form_error('uemail') ? 'is-invalid':'' ?>"
    								 type="text" name="uemail" />
    								<div class="invalid-feedback">
    									<?php echo form_error('uemail') ?>
    								</div>
    							</div>
                  <div class="form-group">
                    <label for="password">Passowrd </label>
                    <input class="form-control <?php echo form_error('upassword') ? 'is-invalid':'' ?>"
                     type="text" name="upassword" />
                    <div class="invalid-feedback">
                      <?php echo form_error('upassword') ?>
                    </div>
                  </div>

    							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
    						</form>

    					</div>
      </div>
<?php
  $this->load->view("template/footer.php");
 ?>
