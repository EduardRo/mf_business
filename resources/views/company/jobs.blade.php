@extends('layout.menu')
@section('content')
<h1>Press Releases</h1>
<div class="card-body grid gap-2 grid-cols-1">
<h2>{{$companyname}}</h2>


@foreach($companyjobs as $job)

    
<div class="box-border padding-2 md:box-content text-white font-200 bg-blue-300 px-2 py-2">
    <h2>{{$job->job_name}}</h2>
    <p>{{$job->job_level}}</p>
    <p>{{$job->job_type}}</p>
    <p>{{$job->job_description}}</p>
    <p>{{$job->job_responsabilities}}</p>
    <p>{{$job->job_skills}}</p>
    <p>{{$job->job_things_nice_to_have}}</p>
    <form class="image-upload" method="get" action="/jobs/" enctype="multipart/form-data">
    @csrf

    <div class="form-group">

        
        <input type="text" value={{ $job->company_id }} name="cid" class="form-control" hidden />
        <input type="text" value={{ $job->id }} name="jid" class="form-control" hidden />
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary btn-lg">Vizualizeaza</button>
        </div>
    </div>
    </form>
    <a href="{{ url('/jobs/' . $job->id) }}" class="btn btn-xs btn-info pull-right">Vizualizeaza</a>
    
</div>
@endforeach
</div>
@endsection