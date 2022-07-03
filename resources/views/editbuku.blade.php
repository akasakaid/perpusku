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
                        <h3 class="page-title mb-0 p-0">Edit Buku</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit-Buku</li>
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
                                <form class="form-horizontal formm-material mx-2" method="POST" id="add-book" action="/update-buku">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$buku->id}}">
                                    <!--   -->
                                    <!--  input judul buku -->
                                    <!--   -->
                                    <div class="form-group">
                                        <label for="judul-buku" class="col-md-12 mb-0">Judul buku</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control ps-8 form-control-line" id="judul-buku" name="nama_buku" value="{{$buku->nama_buku}}" required autofocus>
                                        </div>
                                    </div>
                                    <!--   -->
                                    <!--  input kode buku -->
                                    <!--   -->
                                    <div class="form-group">
                                        <label for="kode-buku" class="">Kode buku</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control ps-8 form-control-line" id="kode-buku" name="kode_buku" value="{{$buku->kode_buku}}" required>
                                        </div>
                                    </div>
                                    <!--   -->
                                    <!--  input jenis buku -->
                                    <!--   -->
                                    <div class="form-group">
                                        <label for="list-jenis">Jenis buku</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name="jenis_buku" id="list-jenis" class="form-select shadow-none ps-0 border-0 form-control-line">
                                                @foreach ($jenis as $i)
                                                @if ($i->nama_jenis == $buku->jenis_buku)
                                                    <option selected value="{{$i->nama_jenis}}">{{$i->nama_jenis}}</option>
                                                @else
                                                    <option value="{{$i->nama_jenis}}">{{$i->nama_jenis}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--   -->
                                    <!--  input keterangan  -->
                                    <!--   -->
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$buku->keterangan}}" required>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-primary" form="add-book" type="submit">Update data</button>
                                <a href="/daftar-buku" class="btn btn-danger">Kembali</a>
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
    <script src="{{ asset('/assets/plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/js/sidebarmenu.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--Custom JavaScript -->
    <script src="{{ asset('/js/pages/dashboards/dashboard1.js')}}"></script>
    <script src="{{ asset('/js/custom.js')}}"></script>
</body>
</html>