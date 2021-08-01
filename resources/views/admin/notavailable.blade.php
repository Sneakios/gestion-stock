@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
            <div class="col">
                <div class="table align-items-center table-flush">
                    <div class="card-header bg-transparent border-0">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">ID</th>
                                <th scope="col" class="sort" data-sort="reference">Reference </th>
                                <th scope="col" class="sort" data-sort="name">Name </th>
                                <th scope="col" class="sort" data-sort="price">Price (DT)</th>
                                <th scope="col" class="sort" data-sort="price">Date</th>
                                <th scope="col" class="sort" data-sort="state">Action </th>


                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach ($products as $product)
                            <tr>
                            <td >{{$product->id}}</td>
                            <td >{{$product->reference}} </td>
                            <td >{{$product->name}} </td>
                            <td >{{$product->price}}</td>
                            <td >{{$product->added_at}}</td>
                            
                            <td ><form method="POST" action="{{URL('Available/'.$product->id)}}">
                                @csrf
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>Available</button>     
                            </form> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
