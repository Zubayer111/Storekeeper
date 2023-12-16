@extends("backend.layouts.app")
@section("page_content")

    <h2>Create Order</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route("orders.place")}}" method="post">
        @csrf
        <div class="live-preview">
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="nameInput" class="form-label">Product title</label>
                    </div>
                    <div class="col-lg-9">
                        <p>{{$product->title}}</p>
                        @error("title")
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="nameInput" class="form-label">Product title</label>
                    </div>
                    <div class="col-lg-9">
                        <p>{{$product->title}}</p>
                        @error("title")
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    
                </div>
                
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="dateInput" class="form-label">Price</label>
                    </div>
                    <div class="col-lg-9">
                        <p>{{$product->price}}</p>
                        @error("price")
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                   
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="timeInput" class="form-label">Image</label>
                    </div>
                    <div class="col-lg-9">
                        <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                            <img src="{{asset($product->products_image)}}" alt="" class="img-fluid d-block">
                        </div>
                        @error("products_image")
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <label for="leaveemails" class="form-label">Quantity</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="number" class="form-control" name="quantity" >
                        @error("quantity")
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    
                </div>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
@endsection