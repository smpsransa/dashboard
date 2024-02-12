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
                    <form action="{{ route('setup.api.reset') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">reset</button>
                    </form>
                </div>
                <form action="/setup/api" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card-body text-success">
                        <div class="form-group">
                            <label for="ros_host">host</label>
                            <input name="host" type="text" class="form-control" id="ros_host"
                                placeholder="192.168.88.1" value="{{ $ros->host }}">
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="ros_user">user</label>
                                <input name="user" type="text" class="form-control" id="ros_user" placeholder="admin"
                                    value="{{ $ros->user }}">
                            </div>
                            <div class="col">
                                <label for="ros_pass">pass</label>
                                <input name="pass" type="password" class="form-control" id="ros_pass" placeholder=""
                                    value="{{ $ros->pass }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="ros_port">port</label>
                                <input name="port" type="number" class="form-control" id="ros_port" placeholder="8728"
                                    value="{{ $ros->port }}" />
                            </div>
                            <div class="col">
                                <label for="ros_version">version</label>
                                <input name="version" type="number" class="form-control" id="ros_version" placeholder="6"
                                    value="{{ $ros->version }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
