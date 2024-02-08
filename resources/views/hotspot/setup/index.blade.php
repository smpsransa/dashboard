@extends('layouts.hotspot')

@section('content')
    <div class="h-100 card">
        <div class="d-flex justify-content-end card-header">
            <span class="d-inline-flex align-items-center">{{ __('Hotspot Setup') }}</span>
        </div>
        <div class="card-body overflow-y-auto">
            <div id="package_install" class="col card border-success mb-3">
                <div class="card-header bg-transparent border-success">Please follow these instruction</div>
                <div class="card-body text-success">
                    <ul>
                        <li>download package</li>
                        <li>import package</li>
                        <li>reboot</li>
                        <li>open <a href="http://{{ $ros->host }}/userman">userman</a></li>
                        <li>or check System > package > userman</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
