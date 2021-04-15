@extends('layouts.daftar', ['title' => 'PPDB | List Pendaftaran'])

@section('content')

<div class="container-fluid">
  <br>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Formulir Pendaftaran</button>

  <br>
  
  @if ($message = Session::get('success'))
        <br>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{ $message }}!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  @endif

  <br>

  <h3>List Pendaftaran</h3>

  <div class="row">
        <div class="col-md-12">
              <div class="main-card mb-3 card card-body">
                    <div class="table-responsive">
                          <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="myTable">
                                <thead>
                                      <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Asal Sekolah</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                      </tr>
                                </thead>
                                <tbody>
                                    @foreach($daftar as $items)
                                      <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $items->nis }}</td>
                                            <td>{{ $items->nama }}</td>
                                            <td>{{ $items->jk }}</td>
                                            <td>{{ $items->tempat_lahir }}</td>
                                            <td>{{ $items->tanggal_lahir }}</td>
                                            <td>{{ $items->alamat }}</td>
                                            <td>{{ $items->asal_sekolah }}</td>
                                            <td>{{ $items->kelas }}</td>
                                            <td>{{ $items->jurusan }}</td>
                                            <td>
                                                  <form action="{{ route('admin.daftar.destroy', $items->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                                              Hapus
                                                        </button>
                                                        <a href="{{ route('admin.daftar.edit', $items->id) }}" class="btn-wide btn btn-outline-success">
                                                              Edit
                                                        </a>
                                                  </form>
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

{{-- MODAL --}}
<div class="modal fade" id="exampleModal" tabindex="-3" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
        <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('admin.daftar.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                          <div class="row">
                                <div class="mb-3 col-md-6">
                                      <label for="nis" class="form-label">NIS</label>
                                      <input type="text" class="form-control" name="nis" id="nis" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                      <label for="nama" class="form-label">Nama</label>
                                      <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                          </div>
                          <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" class="form-select" id="jk" required>
                                          <option>Pilih</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                      <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required>
                                </div>
                          </div>

                          <div class="row">
                                <div class="mb-3 col-md-6">
                                      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                      <label for="alamat" class="form-label">Alamat</label>
                                      <input type="text" class="form-control" name="alamat" id="alamat" required>
                                </div>
                          </div>

                          <div class="row">
                                <div class="mb-3 col-md-6">
                                      <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                      <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                      <label for="kelas" class="form-label">Kelas</label>
                                      <input type="text" class="form-control" name="kelas" id="kelas" required>
                                </div>
                          </div>

                          <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <select name="jurusan" class="form-select" id="jurusan" required>
                                          <option>Pilih</option>
                                          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                          <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                          <option value="Multimedia">Multimedia</option>
                                          <option value="Otomotisasi Tata Kelola Perkantoran">Otomotisasi Tata Kelola Perkantoran</option>
                                          <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                                          <option value="Perhotelan">Perhotelan</option>
                                          <option value="Tata Boga">Tata Boga</option>
                                    </select>
                                </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
              </form>
        </div>
  </div>
</div>

@endsection