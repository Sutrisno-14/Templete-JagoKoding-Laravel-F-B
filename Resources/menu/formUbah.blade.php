@extends('layout.main')


    @section('title','Form Ubah')

    @section('heading-1','Form Ubah')


    @section('Container')

        <div class="col d-flex justify-content-center">

            <div class="col-md-6">
                <div class="card card-primary">

                    <div class="card-header">
                      <h3 class="card-title">Update Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nisn">NISN</label>
                          <input type="nisn" class="form-control" id="nisn" name="nisn">
                        </div>
      
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="nama" class="form-control" id="nama" name="nama">
                        </div>
      
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="Laki-laki">
                              <label class="form-check-label" for="L" >Laki-laki</label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="Perempuan">
                              <label class="form-check-label" for="P">Perempuan</label>
                          </div>
                        </div>
    
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="alamat" class="form-control" id="alamat" name="alamat">
                        </div>  
      
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="foto" name="foto">
                              <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                          </div>
                        </div>
                    
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        <button type="reset" class="btn btn-warning" name="simpan">Reset</button>
                      </div>
                    </form>
                    
                </div>
            </div>
        </div>

    @endsection