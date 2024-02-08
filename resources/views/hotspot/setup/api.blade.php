@extends('layouts.hotspot')

@section('content')
    <div class="h-100 card">
        <div class="d-flex justify-content-end card-header">
            <span class="d-inline-flex align-items-center">{{ __('Hotspot Setup') }}</span>
        </div>
        <div class="card-body overflow-y-auto">
            <div id="mikrotik_api" class="col card border-success mb-3">
                <div class="card-header bg-transparent border-success d-flex justify-content-between">
                    <span class="d-inline-flex align-items-center">1. Mikrotik API</span>
                    <div>
                    </div>
                </div>
                <div class="card-body text-success">
                    <div class="form-group">
                        <label for="ros_host">host</label>
                        <input type="text" class="form-control" id="ros_host" placeholder="192.168.88.1"
                            value="{{ $ros->host }}">
                    </div>
                    <div class="form-group">
                        <label for="ros_user">user</label>
                        <input type="text" class="form-control" id="ros_user" placeholder="admin"
                            value="{{ $ros->user }}">
                    </div>
                    <div class="form-group">
                        <label for="ros_pass">pass</label>
                        <input type="password" class="form-control" id="ros_pass" placeholder=""
                            value="{{ $ros->pass }}">
                    </div>
                    <div class="form-group">
                        <label for="ros_port">port</label>
                        <input type="email" class="form-control" id="ros_port" placeholder="8728"
                            value="{{ $ros->port }}">
                    </div>
                </div>
                <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                    <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                    <button class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection
