@extends('layouts.appAdmin')

@section('content')

    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Add Provider </h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('AddProvider')}}" enctype="multipart/form-data">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Provider information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="product-name">Provider name:</label>
                                    <input required type="text" id="product-name" class="form-control" placeholder="provider name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-reference">Mobile</label>
                                    <input required type="text" id="input-reference" class="form-control" placeholder="mobile" name="mobile">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-price">Email</label>
                                    <input required type="text" id="input-price" class="form-control" placeholder="email" name="email">
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
                                    <label class="form-control-label" for="input-description">Location</label>
                                    <textarea required rows="4" class="form-control" placeholder="location .." name="location" id="input-description"></textarea>
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
