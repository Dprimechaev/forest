@extends('layouts.layout')
@section('title', 'Главная' )
@section('content')
    <a href="{{ route('box.create') }}">Создать БД</a>
    @foreach($boxes as $box)
        <a href="{{ route('card.index', ['box_id' => $box->id]) }}">{{ $box->title }}</a>
    @endforeach
@endsection
