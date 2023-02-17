
@include('header')
@include('navbar')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa</li>
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
                    <div class="card-header clearfix">
                        <h3 class="card-title">Data Siswa</h3>
                        <a href="/create-siswa" class="btn btn-outline-primary float-right"><i class="fas fa-plus"></i> Create Siswa</a>
                    </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><b>No</b></th>
                                        <th><b>NIS</b></th>
                                        <th><b>NAMA SISWA</b></th>
                                        <th><b>JENIS KELAMIN</b></th>
                                        <th><b>ALAMAT</b></th>
                                        <th><b>KELAS</b></th>
                                        <th><b>JURUSAN</b></th>
                                        <th><b>AKSI</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $no = 1 
                                    @endphp
                                    @foreach($dataSiswa as $siswa)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$siswa->nis}}</td>
                                            <td>{{$siswa->nama}}</td>
                                            <td>{{$siswa->jenis_kelamin == "L" ? 'Laki Laki' : 'Perempuan'}}</td>
                                            <td>{{$siswa->alamat}}</td>
                                            <td>{{$siswa->kelas->nama_kelas}}</td>
                                            <td>{{$siswa->kelas->jurusan->nama_jurusan}}</td>
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

