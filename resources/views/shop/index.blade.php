@extends('layouts.master') <!--allows to extend from a base layout-->

@section('title') <!--section command which sets which place in the layout function to place this partial-->
    Laravel Shopping Cart
@endsection <!--must use endsection so laravel knows when 'title'(the hook in master) section ends.-->

@section('content') <!--section command which sets which place in the layout function to place this partial-->
<h1>It works!</h1>
@endsection <!--must use endsection so laravel knows when 'content'(the hook in master) section ends.-->