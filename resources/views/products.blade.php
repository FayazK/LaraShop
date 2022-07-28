@extends('layout')

@section('title','Products')


@section('body')
    <ul>
        @foreach($products as $item)
            <li>{{$item->title}}</li>
        @endforeach
    </ul>
@endsection

