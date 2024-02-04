@extends('layouts.app')
@section('content')
<div class="flex-grow-1 d-flex mh-100 container-lg">
    <div class="w-100 card">
        <div class="d-flex justify-content-between card-header ">
            <span style="display: inline-flex; align-items: center; font-weight:bold;">{{ __('Layanan Digital') }}</span>
            @if (!Auth::guest())
            <a class="btn btn-success" href="{{ route('service.create') }}">Tambah Layanan</a>
            @endif
        </div>
        <div class="tableFixHead overflow-y-auto">
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Alamat</th>
                        <th>Keterangan</th>
                        @if (!Auth::guest())
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                    <tr>
                        <td class="fit">{{ $loop->index + 1 }}</td>
                        <td class="fit">{{ $item->url }}</td>
                        <td class="stretch">{{ $item->description }}</td>
                        @if (!Auth::guest())
                        <td class="fit">
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
@endsection