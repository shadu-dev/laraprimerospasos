@extends('dashboard.layout')
@section('content')
<h1>{{ $category->title }}</h1>
<a href="{{ route('category.index') }}">Volver</a>
@endsection