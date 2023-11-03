@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Kết quả tìm kiếm</h2>
@foreach($search_product as $key => $product) 
    <div class="col-sm-4">
        <div class="product-image-wrapper">
             
            <div class="single-products">
                    <div class="productinfo text-center">
                        <p>{{$product->product_name}}</p>
                        <p>{{$product->product_desc}}</p>
                    </div>             
            </div>
            
        </div>
    </div>
    </div>
@endforeach
</div><!--features_items-->
@endsection