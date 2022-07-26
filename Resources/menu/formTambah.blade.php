 
@extends('layout.main')


@section('title','Tambah Menu')


@section('Container')

    <div class="col d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Tambah Menu</h3>
                </div>
                <!-- /.card-header -->

                @if (session('msg'))
                    <h3 class="text-center">{{ session('msg') }}</h3>
                @endif

                <!-- form start -->
                <form action="{{ url('/tambahData') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">Nama Menu</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
  
                    <div class="form-group">
                      <label for="Deskripsi">Deskrips</label>
                      <input type="text" class="form-control" id="Deskripsi" name="deskripsi">
                    </div>
  
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="kategori_id">
                        <option>Pilih kategori menu</option>

                        @php
                            $kategori = App\Models\Kategori::get();
                        @endphp

                        @foreach($kategori as $key)

                        <option value="{{ $key->id }}">
                            {{ $key->nama }}
                        </option>
                        
                        @endforeach

                      </select>
                </div>

                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="ex. 5000">
                    </div>  
  
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="foto" name="foto">
                          <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                      </div>
                    </div>
                
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                  </div>
                </form>
                
            </div>
        </div>
    </div>

@endsection