

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Customer</div>

                    <div class="card-body">
                        @if (isset($error))
                            <div class="alert alert-danger" role="alert">
                                Quantity Error
                            </div>
                        @endif

                        @if (isset($status))
                            <div class="alert alert-success" role="alert">
                                    Successful purchase
                            </div>
                        @endif

                        <form method="GET" action="{{ route('customer.product.buy') }}">
                            @csrf
                            
                            @if (isset($products))
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Products') }}</label>
                                    
                                    <div class="col-md-6">
                                    

                                        <select class="form-control" id="product_id" name="product_id">
                                            @foreach($products as $row)
                                                <option {{ ($product == $row->id ? "selected":"") }} value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>

                                        
                                    </div>
                                </div>
                            @endif
                            
                            @if (isset($quantity))
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                    
                                    <div class="col-md-6">
                                        
                                        <input id="quantity" min="1" type="number" class="form-control" name="quantity" value="{{ $quantity }}" required autofocus>

                                        @if ($errors->has('quantity'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('quantity') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            @if (isset($price))
                                <div class="form-group row">
                                
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Unit Price') }}</label>
                                    <div class="col-md-6">
                                        <h2>@money($price)</h2>
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
                                    <div class="col-md-6">
                                        <h2>@money($total)</h2>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                   
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Buy') }}
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