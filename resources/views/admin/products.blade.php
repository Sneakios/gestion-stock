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
                        <a href="{{route('addProduct')}}"><button class="btn btn-primary">Add Products</button></a>


                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered yajra-datatable">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">ID</th>
                                <th scope="col" class="sort" data-sort="reference">Reference </th>
                                <th scope="col" class="sort" data-sort="name">Name </th>
                                <th scope="col" class="sort" data-sort="price">Price (DT)</th>
                                <th scope="col" class="sort" data-sort="state">State </th>
                                <th scope="col" class="sort" data-sort="state">Date </th>


                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
