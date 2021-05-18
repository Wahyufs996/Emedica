<?php

  $this->load->view("template/header.php");
  $this->load->view("template/navbar.php");
 ?>


  			<div class="card" style="min-width:800px;margin:auto">
					<div class="card-header">

            <a href="<?php echo site_url('vaksin/tambah') ?>"
             class="btn btn-success">Tambah</a>
           </div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" width="100%" cellspacing="0">
								<thead>
									<tr>
                    <th>No.</th>
										<th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<tr>
                    <td> 1</td>
										<td>Adi Pamungkas</td>
                    <td>adipam@gmail.com</td>
                    <td>Aktif</td>
                    <td>
                      <a class="btn btn-success" href="#">Non Aktifkan</a>
                      <a class="btn btn-warning" href="#">Aktifkan</a>
                    </td>

								
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

<?php
  $this->load->view("template/footer.php");
 ?>
