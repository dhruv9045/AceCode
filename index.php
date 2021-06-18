<!DOCTYPE html>
<!-- Fontfaces CSS-->  <!-- Bootstrap CSS-->   <!-- Main CSS-->
<?php include'./public/head.php'; ?>
<style>
.center {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>

<body class="animsition" >

    <div class="page-wrapper" style="background-color:white" >
        
	<div class="cards"style="background-color:black;margin-left:20%;margin-right:20%;margin-top:7%;padding:20px;">
        
		<div class="container">
		<div class="row">
		
		<div class="card-body card-block col-md-7">
		<div class="card-header" style="color:white;">
			<strong>Welcome back!</strong> 
			<br>
			We're so excited to see you again!
		</div>
			<form action="" method="post" class="form-horizontal">
			
				<div class="row form-group">
			 
					 <div class="col-12 col-md-12">
						 <label for="hf-email" class=" form-control-label">EMAIL OR PHONE NUMBER </label>
						 <input type="email" id="hf-email" name="hf-email" placeholder="Enter Email" class="form-control">
					 </div>

				</div>
													
				<div class="row form-group">
				
						<div class="col-12 col-md-12">
							<label for="hf-password" class=" form-control-label">Password</label>
							<input type="password" id="hf-password" name="hf-password" placeholder="Enter Password"	class="form-control">
						</div>
				
				</div>

				<a href="#"> Forgot your password?</a>
				 

				<div style="margin-top:10px;">
					<input type="submit" name="submit" value="Login" class="btn btn-primary  col-12 col-md-12"/>
				</div>
				
				<div style="margin-top:10px;">
				<span  class="psw">Need an account? <a href="#">Register</a></span>
				</div>

			</form>
			
		
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4" style="padding:10px;">
				<div class="row justify-content-center " style="padding: 15%;">
				<div class="" style="padding: 8px; border-radius: 4px; background: rgb(255, 255, 255);" title="https://djhjd">
				<canvas width="160" height="160" style="display: none;"></canvas>
				<img alt="Scan me!" src="data:image/png;base64,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" style="display: block;"></div><div class="qrCodeOverlay-qgtlTP"><img src="/assets/36d4b341723daffd4a372e1b19591da1.png" alt="">
			</div>
		</div>
		<h3 class="row justify-content-center">Log in with QR Code</h3>
		<div class="row justify-content-center">Scan this with the <strong>Selfex mobile app</strong> to log in instantly.
				</div>
		</div>
		</div>
		</div>
	</div>
	

		
  </div>
	
	<!-- Jquery JS--> <!-- Main JS-->
    <?php include'./public/js.php'; ?>

</body>




							
							