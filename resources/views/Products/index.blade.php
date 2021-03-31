@extends('layouts.app')
@section('title', 'Produk')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <a href="{{route('products.create')}}" class="btn btn-primary btn-circle">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </h6>
                        </div>
                        <div class="col-md">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Keterangan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                           <tbody>
                               @forelse ( $products as $product )
                               <tr>
                                <td class="align-middle">{{$product->nama_produk}}</td>
                                <td class="align-middle">{{$product->keterangan}}</td>
                                <td class="align-middle">{{$product->harga}}</td>
                                <td class="align-middle">{{$product->jumlah}}</td>
                                <td class="align-middle">
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-success btn-circle">
                                         <i class="fas fa-edit"></i>
                                     </a>
                                     {!! Form::open(['route' => ['products.destroy', $product->id], 'class' => 'd-inline-block', 'method' => 'delete']) !!}
                                         {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-circle'] )  }}
                                     {!! Form::close() !!}
                                </td>
                            </tr>
                               @empty
                                   <tr>
                                       <td colspan="5" class="text-center">Tidak Ada Produk Yang Tersedia</td>
                                   </tr>
                               @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
