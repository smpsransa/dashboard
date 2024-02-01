@extends('layouts.app')
@vite(['resources/css/table.css'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <span style="display: inline-flex; align-items: center;">{{ __('Wifi') }}</span>
                        @if (!Auth::guest())
                            <a class="btn btn-success" href="{{ route('wifi.create') }}">Registering Wifi</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th class="stretch">account</th>
                                    <th class="stretch">user</th>
                                    <th class="stretch">pass</th>
                                    @if (!Auth::guest())
                                        <th class="fit">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($response as $user)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['password'] }}</td>
                                        <td>{{ $user['.id'] }}</td>
                                        @if (!Auth::guest())
                                            <td>
                                                {{-- <a id={{ $user->id }} class="btn btn-info" href="{{ route('wifi.show', $user->id) }}">view</a>
                                    <a id={{ $user->id }} class="btn btn-success" href="{{ route('wifi.edit', $user->id) }}">edit</a>
                                    <form action="{{ route('wifi.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form> --}}
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
