<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mercan Medikal</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

@include("admin.sidebar")
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            @include("admin/navbar")


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1>Kullanıcılar</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <a href="{{url("/create")}}" class="btn btn-sm btn-outline-danger">Yeni Ekle</a>
                    </div>
                </div>
            </div>
            <h2>Yeni Kullanıcı Ekle</h2>
            <div class="table-responsive">
                <form action="{{url("/user")}}" method="POST">
                    @csrf
                <div class="col-lg-6">
                    <label for="name" class="form-label">Ad Soyad Giriniz</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad Giriniz" value="">
                </div>
                <div class="col-lg-6">
                    <label for="email" class="form-label">E-mail Giriniz</label>
                    <input type="email" class="form-control" id="email " name="email " placeholder="E-mail  Giriniz">
                </div>

                    <div class="row"></div>
                    <div class="col-lg-6">
                        <label for="password" class="form-label">Şifre Giriniz</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Şifre Giriniz">
                    </div>


                    <div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success mt-3">KAYDET</button>
                    </div>


                </form>




            </div>

            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>


    <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
    </div>
</div>

</body>
@include("admin.footer")
</html>

