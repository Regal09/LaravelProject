
@extends('master')
@section("content")

<div class="custom-products">
    <div class="col-sm-10">
      <div class="trending-wrapper">
      <h4>Result for products</h4>
      @foreach($products as $item )
      <div class="row searched-item cart-devider">
        <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
          <img class="trending-img" src="{{$item-> gallery}}">
          </a>
        </div>
        <div class="col-sm-4">
          <div class="">
            <h2>{{$item->name}}</h2>
            <h5>{{$item->description}}</h5>
          </div>
        </div>
        <div class="col-sm-3">
          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>
        </div>

  </div>
  @endforeach
</div>
</div>
</div>



@endsection
