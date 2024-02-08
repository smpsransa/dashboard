@extends('layouts.hotspot')

@section('content')
    <div class="h-100 card">
        <div class="d-flex justify-content-end card-header">
            <span class="d-inline-flex align-items-center">{{ __('Hotspot Setup') }}</span>
        </div>
        <div class="card-body overflow-y-auto">
            <div id="mikrotik_hotspot" class="col card border-success mb-3">
                <div class="card-header bg-transparent border-success">2. Hotspot</div>
                <div class="card-body text-success">
                    <div class="form-group">
                        <label for="hs_name">name</label>
                        <input type="text" class="form-control" id="hs_name" placeholder="hotspot1"
                            value="{{ $hs->name }}">
                    </div>
                    <div class="form-group">
                        <label for="hs_iface">iface</label>
                        <input type="text" class="form-control" id="hs_iface" placeholder="etherX"
                            value="{{ $hs->interface }}">
                    </div>
                    <div class="form-group">
                        <label for="hs_pool">pool</label>
                        <input type="password" class="form-control" id="hs_pool" placeholder="hs-pool-1"
                            value="{{ $hs->{'address-pool'} }}">
                    </div>
                    <div class="form-group">
                        <label for="hs_profile">profile</label>
                        <input type="email" class="form-control" id="hs_profile" placeholder="hsprof1"
                            value="{{ $hs->profile }}">
                    </div>
                </div>
                <div class="card-footer bg-transparent border-success d-flex justify-content-end gap-2">
                    <button class="btn btn-danger" onclick="alert('danger!!')">reset</button>
                    <button class="btn btn-{{ $hs->disabled ? 'primary' : 'warning' }}"
                        onclick="alert('danger!!')">{{ $hs->disabled ? 'click to enable' : 'disable' }}</button>
                    <button class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection
