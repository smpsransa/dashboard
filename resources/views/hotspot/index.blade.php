@extends('layouts.hotspot')

@section('content')
<div class="d-flex flex-grow-1 mh-100 card">
  <div class="d-flex justify-content-end card-header">
    {{ __('Hotspot') }}
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
          <tr>
            <th class="border-0 rounded-start">IP Address</th>
            <th class="border-0">In-Interface</th>
            <th class="border-0 rounded-end">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ((array)$response as $item)
          <!-- Item -->
          <tr>
            <td class="border-0 font-weight-bold">{{ $item['address'] ?? '' }}</td>
            <td class="border-0 font-weight-bold">{{ $item['interface'] ?? '' }}</td>
            <td class="border-0 font-weight-bold">{{ $item['comment'] ?? '' }}</td>
          </tr>
          <!-- End of Item -->
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection