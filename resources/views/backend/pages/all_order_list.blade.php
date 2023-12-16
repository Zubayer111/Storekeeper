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
                                <h5 class="card-title flex-grow-1 mb-0">Manage Product</h5>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-nowrap align-middle table-borderless mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th scope="col">Product Title</th>
                                            <th scope="col">Product Image</th>
                                            <th scope="col">Total Price</th>
                                            <th scope="col">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            
                                        <tr>
                                            <td>{{$product->title}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="{{asset($product->products_image)}}" alt="" class="img-fluid d-block">
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->quantity }}</td>
                                            
                                            
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