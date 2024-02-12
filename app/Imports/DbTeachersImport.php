<?php

namespace App\Imports;

use App\Models\DbClass;
use App\Models\DbTeacher;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;

class DbTeachersImport implements OnEachRow
{
    protected  $extension;

    public function __construct($extension)
    {
        $this->extension = $extension;
    }

    private function checkExtension($dateTime)
    {
        switch ($this->extension) {
            case 'csv':
                return Carbon::createFromFormat('d/m/Y', $dateTime);
                break;
            case 'xlsx':
            case 'xsl':
                return \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($dateTime)->format('Y-m-d');
                break;
        }
    }

    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();

        $teacher = DbTeacher::firstOrCreate([
            'name' => $row[1],
            'gender' => $row[2],
            'nip' => $row[3],
            'born' => $row[4],
            'birth' => $this->checkExtension($row[5]),
            'address' => $row[6],
            'status' => $row[7],
            'assign' => $row[8],
        ]);
        DbClass::where('id', '=', $row[0])->update(array('hr_teacher' => $teacher->id));
    }
}
