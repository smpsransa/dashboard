@extends('layouts.hotspot')

@section('content')
    <div class="h-100 card">
        <div class="d-flex justify-content-end card-header">
            <span class="d-inline-flex align-items-center">{{ __('Hotspot Setup') }}</span>
        </div>
        <div class="card-body overflow-y-auto">
            <div class="container row gap-3 mx-auto mb-3">
                <div id="package_install" class="col card border-success">
                    <div class="card-header bg-transparent border-success">3. Userman Admin (optional)</div>
                    <div class="card-body text-success">
                        <div class="form-group">
                            <label for="userman_login">user</label>
                            <input type="text" class="form-control" id="userman_login" placeholder="admin"
                                value="{{ $customer[0]['login'] }}">
                        </div>
                        <div class="form-group">
                            <label for="userman_passw">pass</label>
                            <input type="password" class="form-control" id="userman_passw" placeholder=""
                                value="{{ $customer[0]['password'] }}">
                        </div>
                        <div class="form-group">
                            <label for="userman_info">Identity</label>
                            <input type="text" class="form-control" id="userman_info" placeholder="SMP N 1 Srandakan"
                                value="{{ $customer[0]['company'] }}">
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                        <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                        <button class="btn btn-success">Update</button>
                    </div>
                </div>
                <div id="package_install" class="col card border-success">
                    <div class="card-header bg-transparent border-success">4. Link Userman to Hotspot(mikrotik)</div>
                    <div class="card-body text-success">
                        <div class="form-group">
                            <label for="userman_name">name</label>
                            <input type="text" class="form-control" id="userman_name" placeholder="hotspot"
                                value="{{ $router[0]['name'] }}">
                        </div>
                        <div class="form-group">
                            <label for="userman_address">address</label>
                            <input type="text" class="form-control" id="userman_address" placeholder="127.0.0.1"
                                value="{{ $router[0]['ip-address'] }}">
                        </div>
                        <div class="form-group">
                            <label for="userman_secret">secret</label>
                            <input type="password" class="form-control" id="userman_secret" placeholder=""
                                value="{{ $router[0]['shared-secret'] }}">
                        </div>

                    </div>
                    <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                        <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                        <button class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
