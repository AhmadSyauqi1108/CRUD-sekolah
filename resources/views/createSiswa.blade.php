@include('header')
@include('navbar')
@include('sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Create Siswa</h3>
                    <a href="/data-siswa" class="btn btn-outline-primary float-right"><i class="fa fa-arrow-left"></i> back</a>
                    <button class="btn btn-outline-primary float-right" style="margin-right: 10px;" onclick="saveSiswa()"><i class="fas fa-save"></i> Save</button>
                </div>
                <div class="card-body">
                    <form action="/store-siswa" method="post" id="formSiswa">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="text" class="form-control" placeholder="NIS" name="nis" id="nis">
                                </div>
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" placeholder="Nama Siswa" name="nama" id="nama>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" id="alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis_kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" value="L" checked>
                                        <label class="form-check-label">laki Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" value="P">
                                        <label class="form-check-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tingkat</label>
                                            <select name="tingkat" id="tingkat" class="form-control">
                                                <option value="1">I</option>
                                                <option value="2">II</option>
                                                <option value="3">III</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="kelas" id="kelas" class="form-control"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/*">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@if(Session::has('success'))
<div class="modal fade {{ Session::has('success') ? 'show' : '' }}" style="{{Session::has('success') ? 'display: block;' : ''}}}}" id="modal-success">
    <div class="modal-dialog">
        <div class="modal-content bg-success">
            <div class="modal-header">
                <h4 class="modal-title">Success</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal" onclick="hidepopup()">Close</button>
            </div>
        </div>
    </div>
</div>
@endif
@if(Session::has('failed'))
<div class="modal fade show" style="display:block;" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Failed</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#kelas').select2({
        ajax :{
            url: '/data-kelas/getKelas',
            dataType: 'json',
            type: 'get',
            data: function(param){
                var data = {
                    _token: '{{ csrf_token() }}',
                    tingkat: $('#tingkat').val(),
                    kelas: param.term
                }
                return data;
            },
            processResults: function(data){
                return {
                    results: data.kelas
                }
            }
        }
    })

    function saveSiswa(){
        var nis = $('#nis').val();
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var kelas = $('#kelas;').val();
        var foto = $('#foto').val();
        var failed = 0;
        if(nis == '' || nama == '' || $alamat =='' || $kelas == '' || $foto == ''){
            failed++
        }
        if (failed == 0) {
            $('#formSiswa').submit();
        } else {

        }
    }
</script>
@include('footer')
