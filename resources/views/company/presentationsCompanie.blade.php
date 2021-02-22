@extends('layout.menu')
@section('content')

    <div class="container">
        {{ $companies }}

        <h1>{{ $name }}</h1>
        <h1>{{ $userid }}</h1>

    </div>

@endsection
