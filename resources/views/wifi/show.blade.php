@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <a class="btn btn-secondary" href="{{ route('wifi.index') }}">Back</a>
                        <span
                            style="display: inline-flex; align-items: center;">{{ __($wifi->id . '. ' . $wifi->ruang) }}</span>
                    </div>
                    <div class="card-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td style="font-weight: bold;">Ruang:</td>
                                    <td>{{ $wifi->ruang }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Devices:</td>
                                    <td>{{ $wifi->devices }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Parent:</td>
                                    <td>{{ $wifi->parent }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Network:</td>
                                    <td>{{ $wifi->network }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">SSID:</td>
                                    <td>{{ $wifi->ssid }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Preview:</td>
                                    <td><img src="{{ $wifi->preview_url }}" alt="preview-{{ $wifi->id }}" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
