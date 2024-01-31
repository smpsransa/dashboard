@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <a class="btn btn-secondary" href="{{ route('service.index') }}">Back</a>
                        <span style="display: inline-flex; align-items: center;">{{ __('Initiate Services') }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Alamat:</strong>
                                        <input type="text" name="url" class="form-control"
                                            placeholder="https://smpsransa.sch.id" />
                                        @error('url')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-2 col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>keterangan:</strong>
                                        <textarea type="text" name="description" class="form-control" placeholder="Halaman Resmi SMP N 1 Srandakan"></textarea>
                                        @error('description')
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
