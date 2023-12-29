<!doctype html>
<html lang="en">
  <head>
  	<title>Insta App</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url('/aset/css/style.css')?>">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
          <img  class="img logo rounded-circle mb-5" src="<?=user()->user_image?>" alt=""> 
          <?=user()->username?>
	        <ul class="list-unstyled components mb-5">
	          <li>
	              <a href="<?=base_url('/')?>">Home </a>
	          </li>
            <li>
	              <a href="<?=base_url('/pos/create')?>">Post</a>
	          </li>
	          <li>
	              <a href="#">Profile</a>
	          </li>
	          <li>
	              <a href="<?=base_url('logout')?>">Logout</a>
	          </li>
	        </ul>
	        <div class="footer">
	        	<p>
						  Copyright &copy; All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/bagashaka/" target="_blank">Bagashaka</a>
						 </p>
	        </div>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('/')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/pos')?>">My Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('logout')?>">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        
    <?= $this->renderSection('content');?>     
      </div>
		</div>

    <script src="<?=base_url('/aset/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('/aset/js/popper.js')?>"></script>
    <script src="<?=base_url('/aset/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('/aset/js/main.js')?>"></script>
  </body>
</html>

