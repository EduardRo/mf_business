@extends('layout.menu')
@section('content')

    <div class="card-body grid gap-2 grid-cols-1">
        <div class="card">
            <div class="card-header bg-info">
                <h6 class="text-white">{{ $presentation->company_name }}</h6>
            </div>

            <div class="box-border padding-2 md:box-content text-white font-200 bg-blue-300 px-2 py-2">
                
                <p>Descriere: {{ $presentation->company_description }}</p>
                <p>Servicii:  {{ $presentation->company_services }}</p>

                <p>Management Team: {{ $presentation->company_management_team }}</p>
                <p>Addresa: {{ $presentation->company_address }}</p>
                <p>Contact: {{ $presentation->company_contact }}</p>



            </div>

        </div>
    </div>
@endsection
