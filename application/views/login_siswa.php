<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view('_partials/head.php'); ?>
	</head>
	<center>
		<body>
			<div class="container">
				<h1>Login</h1>
				<p>Masuk ke Dashboard</p>
				<?php if($this->session->flashdata('message_login_error')): ?>
					<div class="invalid-feedback">
						<?= $this->session->flashdata('message_login_error') ?>
					</div>
				<?php endif ?>
				<form action="" method="post" style="max-width: 600px;">
					<table>
						<tr>
							<div>
								<td>
									<label for="Nama">Nama*</label>
								</td>
								<td>
									<input type="text" name="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>" placeholder="Masukan Nama" value="<?= set_value('nama') ?>" required/>
									<div class="invalid-feedback">
										<?= form_error('nama') ?>
									</div>
								</td>				
							</div>
						</tr>
						<tr>
							<div>
								<td>
									<label for="nis">NISN*</label>
								</td>
								<td>
									<input type="nis" name="nis" class="<?= form_error('nis') ? 'invalid' : '' ?>" placeholder="Masukan nis" value="<?= set_value('nis') ?>" required />
									<div class="invalid-feedback">
										<?= form_error('nis') ?>
									</div>
								</td>
							</div>
						</tr>
						<tr>
							<td></td>
							<td>
								<div>
									<input type="submit" class="button button-primary" value="Login">
								</div>
							</td>
						</tr>
					</table>	
				</form>
			</div>
			<a href="<?= site_url('auth/login')?>">Petugas? Masuk sebagai petugas</a>
			<?php $this->load->view('_partials/footer.php');?>
		</body>
	</center>
</html>