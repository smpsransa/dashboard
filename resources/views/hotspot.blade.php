@extends('layouts.app')

@section('content')
<div style="height: 100%;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <pre>{{json_encode($response[0],JSON_PRETTY_PRINT)}}</pre>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection