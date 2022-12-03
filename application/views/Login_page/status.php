<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduction</title>
    <link rel="stylesheet" href="status.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
        <section class="vh-100 section">
            <div class="container-fluid py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-md-6 col-lg-4" id="container">
                                    <a href="../Signup2/Signup2.html" class="previous pt-5">&laquo; kembali</a>
                                    <form action=>
                                        <div id="judul" class="pb-4 mx-3">
                                            <h2 class="text-center">Apa status anda sekarang ?</h2>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="0">- Select -</option>
                                            <option value="1">Sekolah</option>
                                            <option value="2">Kuliah</option>
                                            <option value="3">Kerja</option>
                                            <option value="4">Pensiun</option>
                                        </select>
                                        <div class="container text-center" id="atur-button">
                                            <a href="../Salary/Pendapatan.html">
                                                <button class="btn1 rounded-pill"id = "button"type="button">Next</button>
                                            </a>
                                        </div>
                                </form>
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
                  var select = $('#inputGroupSelect01 option:selected').val();
                   if(select == "0") {
                    Swal.fire({
                      type: 'warning',
                      title: 'Oops...',
                      text: 'tolong pilih opsi !'
                    });
                  } 
                }); 
              });
        </script>
</body>
</html>