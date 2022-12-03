<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $judul ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/login_css/login.css')?>">
</head>
<body>
  <section class="vh-100 section">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="<?php echo base_url('assets/login_css/moneyfinal.png')?>" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
                </div>
                <!-- isi -->
                <div class="col-md-6 col-lg-7 px-5 pt-5 align-items-center justify-content-center">
                    <form action=>
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <h1 id = "text1"><?php echo $judul ?></h1>
                      </div>
                      <h5 class="font-weight-lighter mb-3 pb-3" id = "text2"><?php echo "Aplikasi pengatur keuangan anda"?></h5>
                      <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg">
                        <label class="form-label" for="email">Email address</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg">
                        <label class="form-label" for="password">Password</label>
                      </div>
                      <div class="pt-1 mb-4">
                        <button  class="btn1 rounded-pill"id = "button"type="button" onclick="window.location.href='https://www.w3docs.com';" >Login</button>
                      </div>
                      <p class="font-weight-lighter">Belum punya akun? <a href="<?php echo base_url('index.php/Login/registration') ?>" style="color: #393f81;">Register</a></p>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </section>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
      <script>
        $(document).ready(function() {
  
          $("#button").click( function() {
            var email = $("#email").val();
            var password = $("#password").val();
  
             if(email.length == "") {
  
              Swal.fire({
                type: 'warning',
                title: 'Oops...',
                text: 'email !'
              });
  
            } else if(password.length == "") {
              Swal.fire({
                type: 'warning',
                title: 'Oops...',
                text: 'Password Wajib Diisi !'
              });
            }
						
          }); 
        });
      </script>
</body>
</html>
