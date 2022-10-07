<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">
 <!-- Page Wrapper -->
 
<!-- Nav-design start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" 
     data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false"aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
       Dashboard
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
    </div>     
  </div>
 </div>
</nav>


<!-- Nav-design close -->
<!-- =============================================================== -->


<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Recenturesoft <br />
          <span style="color: hsl(218, 81%, 75%)">Infotech Pvt Ltd</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          "Recenturesoft Infotech Pvt Ltd is a Leading Software Development Company in India that Offers the Best Custom Software Development, eCommerce Website Development, Mobile App Development and SEO Services."
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">

          <div class="card-body px-4 py-5 px-md-5" style="text-align: start;">

            <!-- Form Making -->
             <?= form_open('admin/register/index')?>
              
              <!-- User input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="username">User Name</label>
                <?= form_input(array(
                                      'type'=>'text',
                                      'id'=>'username',
                                      'class'=>'form-control',
                                      'name'=>'uname'
                                        ));?>

              </div>
               <div class="form-outline mb-4">
                <?= form_error('uname'); ?>
               </div>
               
              <!-- User input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="fname">First Name</label>
                <?= form_input(array(
                                      'type'=>'text',
                                      'id'=>'fname',
                                      'class'=>'form-control',
                                      'name'=>'fname',
                                      
                                        ));?>

              </div>
               <div class="form-outline mb-4">
                <?= form_error('fname'); ?>
               </div>
               

              <div class="form-outline mb-4">
                <label class="form-label" for="lname">Last Name</label>
                <?= form_input(array(
                                      'type'=>'text',
                                      'id'=>'lname',
                                      'class'=>'form-control',
                                      'name'=>'lname'
                                        ));?>

              </div>
               <div class="form-outline mb-4">
                <?= form_error('lname'); ?>
               </div>
                
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <?= form_input(array(
                                      'type'=>'email',
                                      'id'=>'email',
                                      'class'=>'form-control',
                                      'name'=>'email'
                                        ));?>

              </div>
               <div class="form-outline mb-4">
                <?= form_error('email'); ?>
               </div>



              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4" name="password">Password</label>
                <?= form_password(array(
                                        'type'=>'password',
                                          'id'=>'password',
                                          'name'=>'password',
                                          'class'=>'form-control'
                                        ));?>              
              </div>
              <div class="form-outline mb-4">
                <?= form_error('password'); ?>
              </div>
              
              <div class="form-outline mb-4">
                <label class="form-label" for="cpassword" name="cpassword">Conform password</label>
                <?= form_input(array(
                                      'type'=>'text',
                                      'id'=>'cpassword',
                                      'class'=>'form-control',
                                      'name'=>'cpassword'
                                        ));?>

              </div>
               <div class="form-outline mb-4">
                <?= form_error('cpassword'); ?>
               </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" name="register">
                Register
              </button>
              <?= form_close()?>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>