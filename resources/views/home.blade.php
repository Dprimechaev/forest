@extends('layouts.layout')
@section('title', 'Главная' )
@section('content')
    @foreach($boxes as $box)
        <a href="{{ route('card.index', ['box_id' => $box->id]) }}">{{ $box->title }}</a>
    @endforeach
@endsection
