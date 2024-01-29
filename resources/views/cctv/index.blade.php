@extends('layouts.app')
@vite(['resources/css/table.css'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">{{ __('CCTV') }}
                        <a class="btn btn-success" href="{{ route('cctv.create') }}">Registering CCTV</a>
                    </div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th class="stretch">Nama</th>
                                    <th class="stretch">Alamat</th>
                                    <th class="fit">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cctv as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <a id={{ $item->id }} class="btn btn-success"
                                                href="route('cctv.edit')">edit</a>

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
