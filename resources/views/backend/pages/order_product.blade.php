@extends("backend.layouts.app")

@section("page_content")
<div class="main-content col-12">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            
            <!-- end page title -->

            <div class="row ">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order Product</h5>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-nowrap align-middle table-borderless mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th scope="col">Product Title</th>
                                            <th scope="col">Item Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="{{asset($product->products_image)}}" alt="" class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-15 primary">{{$product->title}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->quantity }}</td>
                                            <td>
                                                <div class="text-warning fs-15">
                                                    <a href="{{route("order.confarm",['id' => $product->id])}}" class="btn btn-primary">Order Now</a>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 
@endsection