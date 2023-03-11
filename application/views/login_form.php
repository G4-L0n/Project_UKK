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
									<label for="name">Username*</label>
								</td>
								<td>
									<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username" value="<?= set_value('username') ?>" required/>
									<div class="invalid-feedback">
										<?= form_error('username') ?>
									</div>
								</td>				
							</div>
						</tr>
						<tr>
							<div>
								<td>
									<label for="password">Password*</label>
								</td>
								<td>
									<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required />
									<div class="invalid-feedback">
										<?= form_error('password') ?>
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
			<a href="<?= site_url('auth/siswa')?>">Bukan Petugas? Masuk sebagai siswa</a>
			<?php $this->load->view('_partials/footer.php');?>
		</body>
	</center>
</html>