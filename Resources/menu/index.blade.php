@extends('layout.main')

    @section('title', 'Menu')
    @section('heading-1', 'Menu')
        
    @section('Container')
        
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Menu Food & Beverage</h3>
                  </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deksripsi</th>
                                <th>Harga</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td>rice.png</td>
                                <td>Fried Rice</td>
                                <td>Mie Ayam</td>
                                <td>Dskripsi</td>
                                <td>Rp.10,000</td>
                                <td>
                                    <a href="/hapusData/ " class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                                    <a href="/formUbah/ " class="btn btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>      
        </div>  

    @endsection