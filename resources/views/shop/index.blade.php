@extends('layouts.master') <!--allows to extend from a base layout-->

@section('title') <!--section command which sets which place in the layout function to place this partial-->
    Laravel Shopping Cart
@endsection <!--must use endsection so laravel knows when 'title'(the hook in master) section ends.-->

@section('content') <!--section command which sets which place in the layout function to place this partial-->
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="card">
        <img class="card-img-top" src="https://i5.walmartimages.com/asr/3ad45896-4a67-4a78-9262-03fed10a8e33_1.eb5085c1c65e3280dc6eb90354810cb4.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, adipisci eaque numquam eos nisi consectetur quisquam asperiores illo possimus debitis unde sapiente quas deleniti amet beatae? Culpa, praesentium perspiciatis. Provident.</p>
            <div>
              <div class="price pull-left">$12</div>
              <a href="#" class="btn btn-success pull-right">Go somewhere</a>
            </div> 
        </div>
    </div>
  </div>
</div>

@endsection <!--must use endsection so laravel knows when 'content'(the hook in master) section ends.-->