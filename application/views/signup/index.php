<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/registration_css/registration.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="m-md-5">
        <div class="container justify-content-center" >
          <div class="row justify-content-center ">
              <div class="col-sm-6 col-md-6 col-lg-4"id="container">
                <div id="judul">
                  <h6 class="text-center">SaveYourMoney</h6>
                  <h3 class="text-center">Create Account</h3>
                </div>
                  <form href ="">
                      <div class="form-group pt-2 pb-2">
                          <input type="text" class="form-control" id="Name"placeholder="Name">
                        </div>
                        <div class="form-group pt-2 pb-2">
                          <input type="email" class="form-control" id="Email"placeholder="Email">
                        </div>
                        <div class="form-group pt-2 pb-2">
                          <input type="password" class="form-control" id="password"placeholder="Password">
                        </div>
                        <div class="form-group pt-2 pb-2 input-group date">
                            <input id="datepicker" class="form-control" id="datepicker"placeholder="Date of birth">
                        </div>
                        <div class="container text-center"id="atur-button">
                            <button type ="button" class="btn1 rounded-pill "id ="btn"id ="lebar-button">Sign up</button>
                            <p class="font-weight-lighter" style="color: #393f81;">sudah punya akun? <a href="<?php echo base_url('index.php/Login')?>" style="color: #393f81;">Login</a></p>
                        </div>
                  </form>
              </div>
            </div>
        </div>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
        <script>
            $(document).ready(function() {
              $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
            $("#btn").click( function() {
              var nama = $("#Name").val();
              var email = $("#Email").val();
              var password = $("#password").val();
              var tgl = $("#datepicker").val();
              if(nama.length == "") {
                Swal.fire({
                  type: 'warning',
                  title: 'Oops...',
                  text: 'Nama wajib diisi !'
                });
    
              } else if(email.length == "") {
                Swal.fire({
                  type: 'warning',
                  title: 'Oops...',
                  text: 'Email Wajib Diisi !'
                });

              }else if(password.length == "") {
                Swal.fire({
                  type: 'warning',
                  title: 'Oops...',
                  text: 'Password Wajib Diisi !'
                });

              }else if(tgl.length == "") {
                Swal.fire({
                  type: 'warning',
                  title: 'Oops...',
                  text: 'tanggal lahir Wajib Diisi !'
                });
              }else{
                $('#btn').click(function() {
                  window.location.href='../Status/status2.html';
                });
              }
            }); 
          });
        </script>
</body>
</html>