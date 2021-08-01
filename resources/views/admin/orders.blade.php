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
                        <a href="{{route('addOrders')}}"><button class="btn btn-primary">Add Order</button></a>


                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">ID</th>
                                <th scope="col" class="sort" data-sort="reference">Name Provider</th>
                                <th scope="col" class="sort" data-sort="name">Product</th>
                                <th scope="col" class="sort" data-sort="price">Amount</th>                            
                                <th scope="col" class="sort" data-sort="date">Date</th>
                                <th scope="col" class="sort" data-sort="description">Description</th>

                                <th scope="col" class="sort" data-sort="state"> </th>


                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach ($orders as $order)
                            <tr>
                            <td >{{$order->id}}</td>
                            <td >{{$order->name}}</td>
                            <td >{{$order->product}} </td>
                            <td >{{$order->amount}} </td>
                            <td >{{$order->added_at}}</td>
                            <td >{{$order->description}}</td>
                            <td ><form method="POST" action="">
                                @csrf
                                @if($order->state=='waiting')
                            <button type="submit" class="btn btn-success" formaction="{{URL('AcceptOrder/'.$order->id)}}"><i class="fa fa-trash"></i>Arrived</button>     
                            <button type="submit" class="btn btn-danger" formaction="{{URL('DeleteOrder/'.$order->id)}}"><i class="fa fa-trash"></i>Decline</button>                                  
                              @else
                                 <label style="font-size: 30px;color:green">Arrived</label> 
                              @endif    
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
