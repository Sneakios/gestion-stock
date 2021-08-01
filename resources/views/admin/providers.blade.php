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
                        <a href="{{route('CreateProvider')}}"><button class="btn btn-primary">Add Provider</button></a>


                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">ID</th>
                                <th scope="col" class="sort" data-sort="reference">Name</th>
                                <th scope="col" class="sort" data-sort="name">Mobile </th>
                                <th scope="col" class="sort" data-sort="price">Location</th>
                                <th scope="col" class="sort" data-sort="price">Mobile</th>

                                <th scope="col" class="sort" data-sort="state">Action </th>


                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach ($providers as $provider)
                            <tr>
                            <td >{{$provider->id}}</td>
                            <td >{{$provider->name}}</td>
                            <td >{{$provider->mobile}} </td>
                            <td >{{$provider->location}} </td>
                            <td >{{$provider->mobile}}</td>
                            
                            <td ><form method="POST" action="{{URL('DeleteProvider/'.$provider->id)}}">
                                @csrf
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>     
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
