<!-- include head.blade.php -->
<!-- bagian head.blade.php -->

@include('layouts.head')

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- bagian topnavbar.blade.php-->
        @include('layouts.topnavbar')
        <!-- include topnavbar.blade.php -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- bagian sidenavbar.blade.php -->
        @include('layouts.sidenavbar')
        <!-- include sidenavbar.blade.php -->

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Edit Peminjam</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit-Peminjam</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!--   -->
                                <!--  form add buku -->
                                <!--   -->
                                <form class="form-horizontal formm-material mx-2" method="POST" id="add-peminjam" action="/update-peminjam">
                                    @csrf
                                    
                                    <input type="hidden" value="{{$peminjam->id}}" name="id">
                                    
                                    <!--   -->
                                    <!--  input nama peminjam -->
                                    <!--   -->

                                    <div class="form-group">
                                        <label for="nama-peminjam" class="col-md-12 mb-0">Nama Peminjam</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control ps-8 form-control-line" id="nama-peminjam" name="nama_peminjam" value="{{$peminjam->nama}}" required autofocus readonly>
                                        </div>
                                    </div>
                                    <!--   -->
                                    <!--  input kontak peminjam -->
                                    <!--   -->
                                    <div class="form-group">
                                        <label for="kontak" class="">Kontak</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control ps-8 form-control-line" id="kontak" name="kontak" value="{{$peminjam->kontak}}" readonly>
                                        </div>
                                    </div>
                                    <!--   -->
                                    <!--  input judul buku yang dipinjam-->
                                    <!--   -->
                                    <div class="form-group">
                                        <label for="list-jenis">Judul buku</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="judul_buku" id="list-jenis" class="form-select shadow-none ps-0 border-0 form-control-line" readonly>
                                                <option value="{{$peminjam->judul_buku}}">{{$peminjam->judul_buku}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <!-- input denda jika ada -->
                                    <div class="form-group">
                                        <label for="denda" class="">Denda</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control ps-8 form-control-line" id="denda" name="denda">
                                        </div>
                                    </div>

                                    <!--  -->

                                    <div class="form-group">
                                        <label for="list-status">Status</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="status" id="list-status" class="form-select shadow-none ps-0 border-0 form-control-line">
                                                <option value="dipinjam" selected>dipinjam</option>
                                                <option value="kembali">kembali</option>
                                                <option value="telat">telat</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-primary" form="add-peminjam" type="submit">Update data</button>
                                <a href="/daftar-peminjam" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2022 Kelompok  <a href="https://www.wrappixel.com/">1 </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>