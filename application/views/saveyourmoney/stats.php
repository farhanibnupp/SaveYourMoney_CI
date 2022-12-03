<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Statistik</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   
    <!-- Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <script defer src="https://kit.fontawesome.com/c0546daaac.js" crossorigin="anonymous"></script>


    <!-- T Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?=base_url('saveyourmoney/dashboard');?>" class="nav-item nav-link"><i class="fas fa-home me-2"></i>Dashboard</a>
                    <a href="<?=base_url('saveyourmoney/stats');?>" class="nav-item nav-link active"><i class="fa-solid fa-chart-line me-2"></i>Statistik</a>
                    <a href="<?=base_url('saveyourmoney/settings');?>" class="nav-item nav-link "><i class="fa-solid fa-gear me-2"></i>Settings</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="<?=base_url('internal/dashboard');?>" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
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


            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Pendapatan</p>
                                <form>
                                    <input class="form-control border-0" type=" " value="Rp5000.000"readonly>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Pengeluaran</p>
                                <h6 class="mt-3">Rp530.000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Maksimal Pengeluaran</p>
                                <h6 class="mt-3">Rp2.000.000</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Sisa Pendapatan</p>
                                <h6 class="mt-3">Rp4.470.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart -->
            
            <div class="container-fluid pt-4 px-4">
                <div class="row ">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Statistik Pengeluaran</h6>
                            
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
      
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            
                            <script>
                                const ctx = document.getElementById('myChart');
                            
                                new Chart(ctx, {
                                    animationEnabled: true,
                                    type: 'line',
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

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    
    <script src="<?=base_url('assets/');?>js/main.js"></script>
</body>

</html>
