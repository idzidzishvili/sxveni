<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="<?= base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<style>
html,body{background-image: url('<?= base_url('assets/images/sxveni-head.svg');?>'); background-size: center; background-repeat: no-repeat; height: 100%; font-family: sans-serif;  }  
.layer{position: absolute;top:0;left:0;right:0;bottom:0;background-color:#1f1f1ff2;}  
.container{height: 100%; align-content: center;}    
.card{height: 300px; margin-top: auto; margin-bottom: auto;  width: 400px; background-color: rgba(0,0,0,0.5) !important;border-radius:5px}    
.card-header {background-color:#B33936}
.card-header h3{color: white; text-align: center; }
.card-body{display:flex; border-top: 1px #656363 solid;flex-direction:column; justify-content:center;}
.login_btn{color: black; background-color: #B33936; color:#FEFEFE; width: 140px;}
.alert {padding: .5rem .6rem;margin-bottom: 0;}
</style>
</head>
<body>
<div class="layer"></div>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Admin Login</h3>
			</div>
			<div class="card-body">
            <?php echo form_open('auth/login');?>               
               <?php if ($this->session->flashdata('loginerror')) : ?>
                  <div class="input-group form-group mb-3">
                     <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <?php echo $this->session->flashdata('loginerror'); ?>
                     </div>
                  </div>
               <?php endif; ?>            
					<div class="input-group form-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="username">
               </div>               
					<div class="input-group form-group mb-3">
						<input type="password" class="form-control" name="password" placeholder="password">
               </div>               
					<div class="form-group">
						<input type="submit" value="ავტორიზაცია" class="btn float-right login_btn">
               </div>               
            <?php echo form_close();?>
			</div>
		</div>
	</div>
</div>
</body>
</html>