@extends('layouts.front-home')
@section('extra-css')
<link rel="stylesheet" href="{{asset('frontend/css/buyproducts.css')}}">
@endsection

@section('content')

<section class="all_buy_products_area">
    <div class="container">

        <div class="row">

         <div class="col-md-3">
        <div class="sidebar">
            <h3>According to category</h3>
            <ul style="list-style: none;color: black">
                <li><a href="{{route('buy-products')}}">All Products</a></li>
                @foreach ($categories as $category)
                    <li><a href="{{ route('buy-products', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach


            </ul>
        </div>

         </div>
            <!-- end sidebar -->
        <div class="col-md-9">

            <div class="products-header">
                <h3 class="bph shadow text-center">{{ $categoryName }}</h3>
                <div>
                    <strong>Price: </strong>
                    <a href="{{ route('buy-products', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('buy-products', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>

                </div>
            </div>


            <div class="products">
                @forelse ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.buy.show', $product->slug) }}"><img width="100" height="100" src="{{asset('frontend/img/products/'. $product->image)}}" alt="product"></a>
                        <a href="{{ route('shop.buy.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->price}} Taka</div>
                    </div>
                @empty
                    <div style="text-align: left">No items found</div>
                    </div>
                @endforelse
          <!-- end products -->

            {{--{{$products->links()}}--}}
            <div style="" class="spacer"></div>
            {{ $products->appends(request()->input())->links() }}
            </div>
            </div>

        </div>


</section>

@stop
