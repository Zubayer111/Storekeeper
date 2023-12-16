@extends("backend.layouts.app")
@section("page_content")
<div class="col-xxl-6">
    <div class="col-xxl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Add Product Form</h4>
                
            </div><!-- end card header -->
            <div class="card-body">
                @if (session('success'))
                <div class=" alert alert-success">
                    {{session('success')}}
                </div>
                    
                @endif
                <div class="live-preview">
                    <form action="{{route("updete.project",["id"=>$product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nameInput" class="form-label">Product title</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="nameInput" name="title" value="{{$product->title}}">
                                @error("title")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="websiteUrl" class="form-label">Sort Description</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="websiteUrl" name="sort_description" value="{{$product->sort_description}}">
                                @error("sort_description")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="dateInput" class="form-label">Price</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" name="price" value="{{$product->price}}">
                                @error("price")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                           
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="leaveemails" class="form-label">Quantity</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                                @error("quantity")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Updete Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection