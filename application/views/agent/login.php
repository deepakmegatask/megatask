<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Agent Login</title>
	<link rel="icon" href="<?php echo base_url();?>assets/images/logo.png" type="image/gif" sizes="16x16">

	<!-- Custom fonts for this template-->
 	<link href="<?php echo base_url(); ?>assets/agent/css/all.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
 	<link href="<?php echo base_url(); ?>assets/agent/css/custom.css" rel="stylesheet" type="text/css" />

</head>
<style>
    body
    {
        background-image: url('<?php echo base_url()?>assets/images/login-back.jpg');
        background-repeat: no-repeat;
        background-size: cover;background-position: center;
    }
    .card{
        background-color: #ffffff3d;
    }
    
     
</style>
<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="login-logo">
                                            <a href="<?php echo base_url();?>"><img style="width: 90px;" src="<?php echo base_url();?>assets/images/logo.png" class="img-fluid"></a>
                                            <!-- <a href="#" class='text-white' >Al-Eizba</a> -->
                                          </div>
                                        <h1 class="h4 text-white mb-4">Agent Login</h1>

                                        <?php $this->load->helper('form'); ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                                </div>
                                            </div>
                                            <?php
                                            $this->load->helper('form');
                                            $error = $this->session->flashdata('error');
                                            if($error)
                                            {
                                                ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $error; ?>                    
                                                </div>
                                            <?php }
                                            $success = $this->session->flashdata('success');
                                            if($success)
                                            {
                                                ?>
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $success; ?>                    
                                                </div>
                                            <?php } ?>
                                    </div>
                                    <form class="user" action="<?php echo base_url(); ?>agent/login/loginMe" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="password" required >
                                        </div>
                                         
                                         <button type="submit" class="btn btn-primary btn-user btn-block" value="Sign In" >Login</button>
                                        
                                         
                                    </form>
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/agent/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/agent/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/agent/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/agent/js/custome.js"></script>

</body>

</html>