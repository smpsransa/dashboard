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
        <div id="mikrotik_api" class="col card border-success mb-3">
            <div class="card-header bg-transparent border-success d-flex justify-content-between">
                <span class="d-inline-flex align-items-center">1. Mikrotik API</span>
                <div>
                </div>
            </div>
            <div class="card-body text-success">
                <div class="form-group">
                    <label for="ros_host">host</label>
                    <input type="text" class="form-control" id="ros_host" placeholder="192.168.88.1" value="{{ $ros->host }}">
                </div>
                <div class="form-group">
                    <label for="ros_user">user</label>
                    <input type="text" class="form-control" id="ros_user" placeholder="admin" value="{{ $ros->user }}">
                </div>
                <div class="form-group">
                    <label for="ros_pass">pass</label>
                    <input type="password" class="form-control" id="ros_pass" placeholder="" value="{{ $ros->pass }}">
                </div>
                <div class="form-group">
                    <label for="ros_port">port</label>
                    <input type="email" class="form-control" id="ros_port" placeholder="8728" value="{{ $ros->port }}">
                </div>
            </div>
            <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                <button class="btn btn-success">Update</button>
            </div>
        </div>
        <div class="col d-flex flex-row my-auto justify-content-center">
            <i class="h1 bi bi-arrow-down-circle-fill"></i>
        </div>
        <div class="container row gap-3 mx-auto mb-3">
            <div id="package_install" class="col card border-success">
                <div class="card-header bg-transparent border-success">2. Userman Admin (optional)</div>
                <div class="card-body text-success">
                    <div class="form-group">
                        <label for="userman_login">user</label>
                        <input type="text" class="form-control" id="userman_login" placeholder="admin" value="{{ $customer[0]['login'] }}">
                    </div>
                    <div class="form-group">
                        <label for="userman_passw">pass</label>
                        <input type="text" class="form-control" id="userman_passw" placeholder="" value="{{ $customer[0]['password'] }}">
                    </div>
                    <div class="form-group">
                        <label for="userman_info">Identity</label>
                        <input type="text" class="form-control" id="userman_info" placeholder="SMP N 1 Srandakan" value="{{ $customer[0]['company'] }}">
                    </div>
                </div>
                <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                    <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                    <button class="btn btn-success">Update</button>
                </div>
            </div>
            <div id="package_install" class="col card border-success">
                <div class="card-header bg-transparent border-success">3. Link Userman to Hotspot(mikrotik)</div>
                <div class="card-body text-success">
                    <div class="form-group">
                        <label for="userman_name">name</label>
                        <input type="text" class="form-control" id="userman_name" placeholder="hotspot" value="{{ $router[0]['name'] }}">
                    </div>
                    <div class="form-group">
                        <label for="userman_address">address</label>
                        <input type="text" class="form-control" id="userman_address" placeholder="127.0.0.1" value="{{ $router[0]['ip-address'] }}">
                    </div>
                    <div class="form-group">
                        <label for="userman_secret">secret</label>
                        <input type="text" class="form-control" id="userman_secret" placeholder="" value="{{ $router[0]['shared-secret'] }}">
                    </div>

                </div>
                <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                    <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                    <button class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
        <div class="col d-flex flex-row my-auto justify-content-center">
            <i class="h1 bi bi-arrow-down-circle-fill"></i>
        </div>
        <div id="mikrotik_hotspot" class="col card border-success mb-3">
            <div class="card-header bg-transparent border-success">4. Hotspot</div>
            <div class="card-body text-success">
                <div class="form-group">
                    <label for="ros_host">host</label>
                    <input type="text" class="form-control" id="ros_host" placeholder="192.168.88.1" value="{{ $ros->host }}">
                </div>
                <div class="form-group">
                    <label for="ros_user">user</label>
                    <input type="text" class="form-control" id="ros_user" placeholder="admin" value="{{ $ros->user }}">
                </div>
                <div class="form-group">
                    <label for="ros_pass">pass</label>
                    <input type="password" class="form-control" id="ros_pass" placeholder="" value="{{ $ros->pass }}">
                </div>
                <div class="form-group">
                    <label for="ros_port">port</label>
                    <input type="email" class="form-control" id="ros_port" placeholder="8728" value="{{ $ros->port }}">
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