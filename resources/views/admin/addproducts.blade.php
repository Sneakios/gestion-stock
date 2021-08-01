@extends('layouts.appAdmin')

@section('content')

    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add Product </h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('CreateProduct')}}" enctype="multipart/form-data">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Product information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="product-name">Product name:</label>
                                    <input required type="text" id="product-name" class="form-control" placeholder="product name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-reference">Reference</label>
                                    <input required type="text" id="input-reference" class="form-control" placeholder="reference" name="reference">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-price">Price</label>
                                    <input required type="text" id="input-price" class="form-control" placeholder="price" name="price">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-price">State</label>
                                    <select type="text" id="input-category" class="form-control"  name="state" >
                                        <option value="Available">Available</option>
                                        <option value="Out of order">Out of order</option>
                                   
                                    </select>
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

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="product-picture">Product name:</label>
                                    <input required type="file" id="product-picture" class="form-control btn btn-success"  name="picture">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-category">Category</label>
                                    <select type="text" id="input-category" class="form-control"  name="category">
                                        @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->nameCat}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

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
