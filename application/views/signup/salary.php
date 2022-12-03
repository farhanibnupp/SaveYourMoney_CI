<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="<?= base_url('assets/') ; ?>css/salary.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   
</head>
<body>
  <section>
    <section class="vh-100 section">
      <div class="container-fluid py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
              <div class="col-xl-10">
                  <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4"id="container">
                      <a href="../Signup2/Signup2.html" class="previous pt-5">&laquo; kembali</a>
                        <form action="../MaksimalPengeluaran/Maksimal.html">
                          <div id="judul">
                            <h4 class="text-center">Berapa pendapat anda dalam satu bulan ?</h4>
                          </div>
                            <div class="form-group lebar-input text-center atur-input">
                                <input type="text" class="form-control" id="rupiah" placeholder="pendapat dalam satu bulan">
                            </div>
                            <div class="container text-center"id="atur-button">
                                <button type="submit" class="btn1 rounded-pill"id ="lebar-button">Next</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
  </section>
    <script type = text/javascript src="<?= base_url('assets/js/') ; ?>rupiah.js"></script>  
</body>
</html>
