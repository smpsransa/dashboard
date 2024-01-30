@extends('layouts.app')
@vite(['resources/css/table.css'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <span style="display: inline-flex; align-items: center;">{{ __('CCTV') }}</span>
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
                                            <a id={{ $item->id }} class="btn btn-info"
                                                href="{{ $item->address }}">view</a>
                                            <a id={{ $item->id }} class="btn btn-success"
                                                href="{{ route('cctv.edit', $item->id) }}">edit</a>
                                            <form action="{{ route('cctv.destroy', $item->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
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
