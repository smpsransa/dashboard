@extends('layouts.app')
@vite(['resources/css/table.css'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <span style="display: inline-flex; align-items: center;">{{ __('Layanan Digital') }}</span>
                    @if (!Auth::guest())
                    <a class="btn btn-success" href="{{ route('service.create') }}">Tambah Layanan</a>
                    @endif
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th class="stretch">Alamat</th>
                                <th class="fit">Keterangan</th>
                                @if (!Auth::guest())
                                <th class="fit">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->url }}</td>
                                <td>{{ $item->description }}</td>
                                @if (!Auth::guest())
                                <td>
                                    <a id={{ $item->id }} class="btn btn-info" href="{{ filter_var($item->url, FILTER_VALIDATE_URL) ? $item->url : '//' . $item->url }}">view</a>
                                    <a id={{ $item->id }} class="btn btn-success" href="{{ route('service.edit', $item->id) }}">edit</a>
                                    <form action="{{ route('service.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                                @endif
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