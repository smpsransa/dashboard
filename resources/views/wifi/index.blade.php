@extends('layouts.app')
@section('content')
<div class="flex-grow-1 d-flex mh-100 container-lg">
    <div class="w-100 card">
        <div class="d-flex justify-content-between card-header ">
            <span style="display: inline-flex; align-items: center; font-weight:bold;">{{ __('Wifi') }}</span>
            @if (!Auth::guest())
            <a class="btn btn-success" href="{{ route('wifi.create') }}">Registering Wifi</a>
            @endif
        </div>
        <div class="tableFixHead overflow-y-auto">
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Ruang</th>
                        <th>Devices</th>
                        <th>SSID</th>
                        <th>Network</th>
                        <th>Parent</th>
                        @if (!Auth::guest())
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wifi as $item)
                    <tr>
                        <td class="fit">{{ $loop->index + 1 }}</td>
                        <td class="fit">{{ $item->ruang }}</td>
                        <td class="fit">{{ $item->devices }}</td>
                        <td class="fit">{{ $item->ssid }}</td>
                        <td class="fit">{{ $item->network }}</td>
                        <td class="fit">{{ $item->parent }}</td>
                        @if (!Auth::guest())
                        <td class="fit">
                            <a id={{ $item->id }} class="btn btn-info" href="{{ route('wifi.show', $item->id) }}">view</a>
                            <a id={{ $item->id }} class="btn btn-success" href="{{ route('wifi.edit', $item->id) }}">edit</a>
                            <form action="{{ route('wifi.destroy', $item->id) }}" method="POST" style="display:inline;">
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