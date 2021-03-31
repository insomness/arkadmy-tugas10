@extends('layouts.app')
@section('title', 'Edit Produk')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <a href="{{route('products.index')}}" class="btn btn-primary btn-circle">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                  {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put']) !!}
                  @csrf
                        <div class="form-group">
                          {!! Form::label('nama_produk', 'Nama Produk') !!}
                          {!! Form::text('nama_produk', null, ['id' => 'nama_produk', 'placeholder' => 'Aqua 500ml', 'class' => 'form-control' . ($errors->has('nama_produk') ? ' is-invalid' : null), 'required']) !!}
                          @error('nama_produk') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                          {!! Form::label('keterangan', 'Keterangan') !!}
                          {!! Form::text('keterangan', null, ['id' => 'keterangan', 'placeholder' => 'Tidak Dingin', 'class' => 'form-control'. ($errors->has('keterangan') ? ' is-invalid' : null), 'required']) !!}
                          @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('harga', 'Harga') !!}
                            {!! Form::number('harga', null, ['id' => 'harga', 'placeholder' => '5000', 'class' => 'form-control'. ($errors->has('harga') ? ' is-invalid' : null), 'required']) !!}
                            @error('harga') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('jumlah', 'Jumlah') !!}
                            {!! Form::number('jumlah', null, ['id' => 'jumlah', 'placeholder' => '30', 'class' => 'form-control'. ($errors->has('jumlah') ? ' is-invalid' : null), 'required']) !!}
                            @error('jumlah') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
