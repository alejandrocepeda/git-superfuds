

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Inventory</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                       
                            @csrf
                            
                            
                            <table class="table">
                                <thead>
                                    <th>Id Product</th>
                                    <th>Id Name</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </thead>
                                
                                @foreach($inventory as $row)
                                <tr>
                                    <td>{{ $row->product_id }}</td>
                                    <td>{{ $row->products['name'] }}</td>
                                    <td>{{ $row->quantity }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success">Generar Factura</button>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                           
    
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection