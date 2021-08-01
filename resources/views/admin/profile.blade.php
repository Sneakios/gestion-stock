@extends('layouts.appAdmin')

@section('content')

    <div class="col-xl-12 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Settings </h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('SaveProfile')}}" enctype="multipart/form-data">
                    @csrf
                   
                    <h6 class="heading-small text-muted mb-4">Admin information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="product-name">Name:</label>
                                    <input required type="text" id="product-name" class="form-control" placeholder="provider name" name="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="col-md-10 col-md-offset-1">

                                    <img src="{{asset('assets/avatars/'.Auth::user()->avatar)}}" style="width:300px;height: 300px;border-radius: 50%;">
                                    
                                </div>
                    
                              
                                    <div style="width: 250px;">
                                        <input type="file" name="picture" style="margin-left: 45px;color: white;margin-top: 10px;">
                    
                            </div>

                            </div>
                          
                        </div>
                      
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->

                    <div class="pl-lg-4">
                   
                    <hr class="my-4" />
                    <!-- Description -->

                    <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
        </div>
    </div>
@endsection
