@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <a class="btn btn-secondary" href="{{ route('wifi.index') }}">Back</a>
                        <span style="display: inline-flex; align-items: center;">{{ __('Create Wifi') }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('wifi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Ruang:</strong>
                                        <input type="text" name="ruang" class="form-control" placeholder="Lab IPA" />
                                        @error('ruang')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Devices:</strong>
                                        <input type="text" name="devices" class="form-control" placeholder="TL WA511G" />
                                        @error('devices')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Network:</strong>
                                        <input type="text" name="network" class="form-control"
                                            placeholder="192.168.1.0/24" />
                                        @error('network')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>SSID:</strong>
                                        <input type="text" name="ssid" class="form-control"
                                            placeholder="Portal Sransa (Lab IPA)" />
                                        @error('ssid')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Parent:</strong>
                                        <input type="text" name="parent" class="form-control"
                                            placeholder="Router TU(Mikrotik)" />
                                        @error('parent')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Preview:</strong>
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
