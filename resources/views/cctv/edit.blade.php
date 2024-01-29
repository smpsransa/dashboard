@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('CCTV') }}</div>
                    <div id="action">
                        <a class="btn btn-success" href="{{ route('cctv.create') }}">Registering CCTV</a>
                    </div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cctv as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <a id={{ $item->id }} class="btn btn-success"
                                                href="{{ route('cctv.edit') }}">edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
