@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <a class="btn btn-secondary" href="{{ route('wifi.index') }}">Back</a>
                        <span
                            style="display: inline-flex; align-items: center;">{{ __('Edit Wifi: ' . $wifi->ruang) }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('wifi.update', $wifi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Ruang:</strong>
                                        <input type="text" name="ruang" class="form-control" placeholder="Lab IPA"
                                            value="{{ $wifi->ruang }}" />
                                        @error('ruang')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Devices:</strong>
                                        <input type="text" name="devices" class="form-control" placeholder="TL WA511G"
                                            value="{{ $wifi->devices }}" />
                                        @error('devices')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Network:</strong>
                                        <input type="text" name="network" class="form-control"
                                            placeholder="192.168.1.0/24" value="{{ $wifi->network }}" />
                                        @error('network')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>SSID:</strong>
                                        <input type="text" name="ssid" class="form-control"
                                            placeholder="Portal Sransa (Lab IPA)" value="{{ $wifi->ssid }}" />
                                        @error('ssid')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Parent:</strong>
                                        <input type="text" name="parent" class="form-control"
                                            placeholder="Router TU(Mikrotik)" value="{{ $wifi->parent }}" />
                                        @error('parent')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Preview:</strong>
                                        <img src="{{ $wifi->preview_url }}" alt="preview">
                                        <input type="file" name="preview_url" class="form-control" />
                                        @error('preview_url')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="mt-2 btn btn-primary ml-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
