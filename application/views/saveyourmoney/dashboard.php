<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/') ; ?>css/bootstrap.min.css" rel="stylesheet">


    <!-- Fontawesome -->
    <script defer src="https://kit.fontawesome.com/c0546daaac.js" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/') ; ?>css/style.css" rel="stylesheet">
</head>

<body data-new-gr-c-s-check-loaded="14.1087.0" data-gr-ext-installed="">
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?=base_url('internal/dashboard');?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">saveyourmoney</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?=base_url('assets/');?>img/ganteng.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Rizqi Abdillah</h6>
                        <span> user </span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?=base_url('saveyourmoney/dashboard');?>" class="nav-item nav-link active"><i class="fa fa-home me-2" aria-hidden="true"></i>Dashboard</a>
                    <a href="<?=base_url('saveyourmoney/stats');?>" class="nav-item nav-link"><i class="fa-solid fa-chart-line me-2"></i>Statistik</a>
                    <a href="<?=base_url('saveyourmoney/settings');?>" class="nav-item nav-link "><i class="fa-solid fa-gear me-2"></i>Settings</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="<?=base_url('internal/dashboard');?>" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?=base_url('assets/');?>img/ganteng.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Rizqi Abdillah</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="<?=base_url('saveyourmoney/settings');?>" class="dropdown-item">Settings</a>
                            <a href="login.html" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3 ">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 pt-4">
                            
                            <div class="ms-3 pb-3 justify-content-center">
                                <p class="mb-2 ms-5 ">Pendapatan</p>
                                <form>
                                    <input class="form-control border-0" type=" " value="Rp5.000.000" readonly="">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-3">
                            
                            <div class="justify-content-center pb-1">
                                <p class="mb-2 ms-5">Pengeluaran</p>
                                
                                <form>
                                    <input class="form-control border-0" type=" " value=" " placeholder="pengeluaran">
                                    <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom" id="dashboard button"><i class="fa-solid fa-plus"></i></button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3 ">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 pt-4 pb-4">
                            
                            <div class="ms-3 pb-3 justify-content-center">
                                <p class="mb-2  ms-0">Maks. Pengeluaran perhari</p>
                                <form>
                                    <input class="form-control border-0" type=" " value="Rp100.000" readonly="">
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-6 col-xl-3 ">
                        <div class="bg-light rounded d-flex align-items-center justify-content-center p-4 pt-4">
                            
                            <div class="ms-3 pb-3 justify-content-center">
                                <p class="mb-2 ms-4 ">Sisa Pendapatan</p>
                                <form>
                                    <input class="form-control border-0" type=" " value="Rp3.900.000" readonly="">
                                </form>
                            </div>
                        </div>
                    </div></div>
            </div>

            
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded bg-light"><p class="border-none mb-1 mt-1 rounded pb-1 pt-1" id="dashboard-name">Sedang</p></button>
                </div>
                            
                        <div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1" id="dashboard-text">Untuk mencapai “sangat bagus” anda bisa mengeluarkan pendapatan anda sebanyak</p></button>
                    </div><div class="d-flex align-items-center justify-content-center mb-4 bg-light">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1" id="dashboard-text">Rp. 100.000/ Hari</p></button>
                    </div></div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1 rounded pt-1 pb-1" id="dashboard-name">Bagus</p></button>
                    </div>
                            
                        <div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1" id="dashboard-text">Untuk mencapai “sangat bagus” anda bisa mengeluarkan pendapatan anda sebanyak</p></button>
                    </div><div class="d-flex align-items-center justify-content-center mb-4 bg-light">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1" id="dashboard-text">Rp. 100.000/ Hari</p></button>
                    </div></div>
                    </div><div class="col-sm-12 col-xl-4">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1 rounded pt-1 pb-1" id="dashboard-name">Sangat Bagus</p></button>
                        </div>
                            
                        <div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1 bg-light" id="dashboard-text">Untuk mencapai “sangat bagus” anda bisa mengeluarkan pendapatan anda sebanyak</p></button>
                            </div><div class="d-flex align-items-center justify-content-center mb-4">
                                
                                
                            <button class="container-fluid border-0 col-sm-15 col-xl-15 rounded-bottom bg-light"><p class="border-none mb-1 mt-1" id="dashboard-text">Rp. 100.000/ Hari</p></button>
                        </div></div>
                    </div>
                </div>
            </div>
            <!-- Chart -->
            <div class="container-fluid pt-4 px-4">
                <div class="row ">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Statistik Pengeluaran</h6>
                            
                            <div>
                                <canvas id="myChart" width="40" height="20" style="display: block; box-sizing: border-box; height: 16px; width: 32px;"></canvas>
                            </div>
      
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            
                            <script>
                                const ctx = document.getElementById('myChart');
                            
                                new Chart(ctx, {
                                    animationEnabled: true,
                                    type: 'bar',
                                data: {
                                    labels: ['1 Nov','2 Nov', '3 Nov', '4 Nov', '5 Nov', '6 Nov'],
                                    datasets: [{
                                    label: 'Pengeluaran',
                                    data: [
                                        300000,160000,250000,270000,120000,175000,130000,110000],
                                    borderWidth: 5
                                    }]
                                },
                                options: {
                                    scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                    }
                                }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="<?=base_url('assets/');?>js/main.js"></script>
















</body>
</html>
