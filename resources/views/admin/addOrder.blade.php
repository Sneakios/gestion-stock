@extends('layouts.appAdmin')

@section('content')

    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add Order </h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('CreateOrder')}}" >
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Order information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="product-name">Provider name:</label>
                                    <select type="text" id="input-category" class="form-control"  name="name" >
                                        @foreach ($providers as $provider)
                                        <option value="{{$provider->id}}">{{$provider->name}}</option>
                                       @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-reference">Product Category</label>
                                    <select type="text" id="input-category" class="form-control"  name="product" >
                                        @foreach ($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->nameCat}}</option>
                                       @endforeach
                                   
                                    </select>                               
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-price">Amount</label>
                                    <input required type="text" id="input-price" class="form-control" placeholder="amount" name="amount">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                 
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <textarea required rows="4" class="form-control" placeholder="description .." name="description" id="input-description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                          
                      

                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Description -->

                    <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
        </div>
    </div>
@endsection
