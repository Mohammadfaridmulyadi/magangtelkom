<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LopTens</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/my-login.css">
    <style>
        .my-login-page .brind {
            width: 300px;
            height: 110px;
            overflow: hidden;
            border-radius: 10%;
            margin: 15px auto;
            position: relative;
            z-index: 1;
        }

        .my-login-page .brind img {
            width: 100%;
        }
    </style>
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brind">
                    <img src="<?php echo base_url()?>/assets/photo/tellkom.png" class="img-fluid" >
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
                            <?php if ($this->input->get('error') == 1): ?>
                                <div class="alert alert-danger">Username atau password salah.</div>
                            <?php elseif ($this->input->get('error') == 2): ?>
                                <div class="error">Anda tidak memiliki aturan yang valid.</div>
                            <?php endif; ?>
							<form method="POST" class="my-login-validation" novalidate="" action="<?php echo base_url('user/login/process') ?>">
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Username Salah
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password Kosong
							    	</div>
								</div>

                                <div class="form-group">
                                    <div class="input-group mb-3 mt-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="rule">Rule</label>
                                    </div>
                                    <select class="custom-select" id="rule" name="rule">
                                        <option selected></option>
                                        <option value="Acount Manager">Account Manager</option>
                                        <option value="support">Support</option>
                                    </select>
                                    </div>
                                </div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
							</form>
						</div>
                    </div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; BIGEST eaa eaaa eaa eaaaa
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php echo base_url()?>/assets/js/my-login.js"></script>
</body>
</html>
