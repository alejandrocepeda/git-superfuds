

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Provider</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('provider.product.update') }}">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Products') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <select class="form-control" id="product_id" name="product_id">
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>

                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <input id="quantity" type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus>

                                    @if ($errors->has('quantity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lot Number') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <input id="lot_number" type="text" class="form-control" name="lot_number" value="{{ old('lot_number') }}" required autofocus>

                                    @if ($errors->has('lot_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lot_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Expiration Date') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    
                                <input value="{{ date('Y-m-d') }}" id="expiration_date" type="date" class="form-control" name="expiration_date">

                                    
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
    
                            
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection