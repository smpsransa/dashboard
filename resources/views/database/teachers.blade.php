<form method="post" action="/teacher-import" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-body">
            {{ csrf_field() }}
            <label>Pilih file excel</label>
            <div class="form-group">
                <input type="file" name="file" required="required">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Import</button>
        </div>
    </div>
</form>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>nip</th>
            <th>NIS</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->nip }}</td>
                <td>{{ $teacher->address }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
