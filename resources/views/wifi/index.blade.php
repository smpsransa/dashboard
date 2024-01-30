@extends('layouts.app')
@vite(['resources/css/table.css'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <span style="display: inline-flex; align-items: center;">{{ __('Wifi') }}</span>
                        <a class="btn btn-success" href="{{ route('wifi.create') }}">Registering Wifi</a>
                    </div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th class="stretch">Ruang</th>
                                    <th class="stretch">Devices</th>
                                    <th class="stretch">SSID</th>
                                    <th class="stretch">Network</th>
                                    <th class="fit">Parent</th>
                                    <th class="fit">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wifi as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->ruang }}</td>
                                        <td>{{ $item->devices }}</td>
                                        <td>{{ $item->ssid }}</td>
                                        <td>{{ $item->network }}</td>
                                        <td>{{ $item->parent }}</td>
                                        <td>
                                            <a id={{ $item->id }} class="btn btn-info"
                                                href="{{ route('wifi.show', $item->id) }}">view</a>
                                            <a id={{ $item->id }} class="btn btn-success"
                                                href="{{ route('wifi.edit', $item->id) }}">edit</a>
                                            <form action="{{ route('wifi.destroy', $item->id) }}" method="POST"
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
