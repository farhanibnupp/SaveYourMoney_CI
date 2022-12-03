<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Settings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fontawesome -->
    <script defer src="https://kit.fontawesome.com/c0546daaac.js" crossorigin="anonymous"></script>

    <!-- Stylesheet -->
    <link href="<?=base_url('assets/');?>css/style.css" rel="stylesheet">
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
                        <span>user</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?=base_url('saveyourmoney/dashboard');?>" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Dashboard</a>
                    <a href="<?=base_url('saveyourmoney/stats');?>" class="nav-item nav-link "><i class="fa-solid fa-chart-line me-2"></i></i>Statistik</a>
                    <a href="<?=base_url('saveyourmoney/settings');?>" class="nav-item nav-link active"><i class="fa-solid fa-gear me-2"></i>Settings</a>
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
              
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <!-- <div class="row g-4"> -->
                    <div class="col-sm-12 justify-content-center">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="Nama-Lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="Nama-Lengkap">
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Mahasiswa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Pegawai
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios3" value="option3">
                                            <label class="form-check-label" for="gridRadios3">
                                                Pensiunan
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3">
                                    <label for="datepicker" class="form-label">Tanggal Lahir</label>
                                    <div class="input-group date">
                                        <input type="date" class="form-control" id="datepicker" placeholder="DD/MM/YY">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Javascript -->
    <script src="<?=base_url('assets/');?>js/main.js"></script>
    </div>
</body>
        