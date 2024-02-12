<form method="post" action="/student-import" enctype="multipart/form-data">
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
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>born</th>
            <th>birth</th>
            <th>nik</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach ($students as $student)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->born }}</td>
                <td>{{ $student->birth }}</td>
                <td>{{ $student->nik }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
