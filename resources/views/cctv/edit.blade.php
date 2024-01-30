@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <a class="btn btn-success" href="{{ route('cctv.index') }}">Back</a>
                        <span style="display: inline-flex; align-items: center;">{{ __('Edit CCTV') }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cctv.update', $cctv->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Inisial CCTV:</strong>
                                        <input type="text" name="name" value="{{ $cctv->name }}"
                                            class="form-control" placeholder="[lokasi]-[nama]">
                                        @error('name')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Link CCTV:</strong>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="http://example.com/channel/001/001" value="{{ $cctv->address }}">
                                        @error('address')
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
