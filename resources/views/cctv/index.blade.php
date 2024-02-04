@extends('layouts.app')
@section('content')
<div class="flex-grow-1 d-flex mh-100 container-lg">
    <div class="w-100 card">
        <div class="d-flex justify-content-between card-header ">
            <span style="display: inline-flex; align-items: center; font-weight:bold;">{{ __('CCTV') }}</span>
            <a class="btn btn-success" href="{{ route('cctv.create') }}">Registering CCTV</a>
        </div>
        <div class="tableFixHead overflow-y-auto">
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($cctv as $item)
                    <tr>
                        <td class="fit">{{ $loop->index + 1 }}</td>
                        <td class="fit">{{ $item->name }}</td>
                        <td class="stretch">{{ $item->address }}</td>
                        <td class="fit">
                            <a id={{ $item->id }} class="btn btn-info" href="{{ $item->address }}">view</a>
                            <a id={{ $item->id }} class="btn btn-success" href="{{ route('cctv.edit', $item->id) }}">edit</a>
                            <form action="{{ route('cctv.destroy', $item->id) }}" method="POST" style="display:inline;">
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
@endsection