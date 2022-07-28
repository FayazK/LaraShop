@extends('layout')

@section('title','Create Product')


@section('body')
<form action="{{route('product.save')}}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control">

    <label for="description">Description</label>
    <input type="text" name="description" id="description" class="form-control">

    <label for="price">Price</label>
    <input type="number" name="price" id="price" class="form-control">

    <input type="submit"  value="Insert Product" class="btn btn-primary">
</form>
@endsection
