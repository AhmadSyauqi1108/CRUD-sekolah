
@include('header')
@include('navbar')
@include('sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard v2</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total User</span>
                            <span class="info-box-number">
                            {{count($dataSiswa)}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Kelas</span>
                            <span class="info-box-number">
                            {{count($dataKelas)}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-university"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Jurusan</span>
                            <span class="info-box-number">
                            {{count($dataJurusan)}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('footer')