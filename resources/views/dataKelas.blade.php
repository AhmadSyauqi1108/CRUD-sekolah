
@include('header')
@include('navbar')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kelas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Kelas</li>
                    </ol>
                </div>
            </div>
            </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Kelas</h3>
                    </div>
                    <button type="button" class="btn btn-block btn-outline-primary btn-sm">Create Kelas</button>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Program Keahlian</th>
                            <th>Tingkat</th>
                            <th>Keterangan</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php 
                                $no = 1 
                            @endphp
                            @foreach($dataKelas as $kelas)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$kelas->nama_kelas}}</td>
                                    <td>{{$kelas->jurusan->nama_jurusan}}</td>
                                    <td>{{$kelas->tingkat}}</td>
                                    <td>{{$kelas->jurusan->keterangan}}</td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-outline-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('footer')

