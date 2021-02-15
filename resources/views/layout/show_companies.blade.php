@extends('layout.menu')


@section('content')
    <p>This is my body content.</p>



    @foreach($companies as $company)
    <div class="container">
    <div class="d-inline bg-primary text-white">{{$company->company_name}} </div>
    <div class="d-inline bg-dark text-white"> {{$company->company_address}}</div>
    </div>
    @endforeach

@endsection
