@extends('layouts.layout')
@section('title', 'Главная' )
@section('content')
    <form action="{{ route('box.store') }}" method="post">
        @csrf
        <input type="text" name="title">Введите название
        <button type="submit">Создать БД</button>
    </form>
    @if($errors->any())
        <h4>{{$errors}}</h4>
    @endif
    @foreach($boxes as $box)
        <a href="{{ route('box.show', $box) }}">{{ $box->title }}</a>
    @endforeach
@endsection
