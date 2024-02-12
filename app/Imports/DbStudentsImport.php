<?php

namespace App\Imports;

use App\Models\DbStudent;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class DbStudentsImport implements ToModel
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

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DbStudent([
            'class_id' => $row[0],
            'name' => $row[1],
            'gender' => $row[2],
            'nisn' => $row[3],
            'born' => $row[4],
            'birth' => $this->checkExtension($row[5]),
            'nik' => $row[6],
            'address' => $row[7],
            'father' => $row[8],
            'mother' => $row[9],
            //
        ]);
    }
}
