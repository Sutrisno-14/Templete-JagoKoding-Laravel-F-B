@extends('layout.main')

    @section('title', 'List F & B')
    @section('heading-1', 'List F & B')
        
    @section('Container')
        
        <div class="container">
            <div class="row">

                @foreach ($data as $menu)
                <div class="col-md-3 " >
                    <div class="card p-4">
                        <img src="F4.jpg" alt="" class="card-img-top h-50 ">
                        <div class="card-body h-50 text-center">
                            <h5 class="m-2">Mie Ayam</h5>
                            <p class="card-text m-3">Telur + Bakso + Ayam Suwir + Pangsit</p>
                            <p class="m-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </p>
                            <div class="justify-content-between">
                                <a href="" class="btn btn-primary">Rp.10,000</a>
                                <a href="" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>    
                @endforeach
                
                
            </div>
        </div>


    @endsection