@extends('home')
@section('product-list')
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 14rem;">
                    <img height="200px" class="card-img-top" src="{{asset('storage/'.$product->image)}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-text text-left">{{$product->name}}</h3>
                        <p class="item-txt-online">{{$product->price}} VND</p>
                        <p class="card-text">{{substr($product->description,0,30) . '...' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

