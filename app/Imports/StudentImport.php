<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use DB;

class StudentImport implements ToModel,WithStartRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        db::table('t_students')
        ->insert([
            'student_number' => trim($row[0])
            , 'lastname' => trim($row[1])
            , 'firstname' => trim($row[2])
            , 'middlename' => trim($row[3])
            , 'year_and_section' => trim($row[4])
            , 'sex' => trim($row[5])
            , 'gwa' => trim($row[6])
            , 'scholarship_type_id' => db::table('r_scholarship_type')->where('scholarship_name',$row[7])->value('scholarship_type_id')      
        ]);
    }

    public function startRow():int
    {
        return 3;
    }

    // public function rules(): array
    // {
    //     return [
    //         'student_number' => 'required|string',
    //         'lastname' => 'required|string',
    //         'firstname' => 'required|string',
    //         'middlename' => 'required|string',
    //         'year_and_section' => 'required|string',
    //         'sex' => 'required|string',
    //         'gwa' => 'required|string',
    //         'scholarship_type_id' => 'required|string',
    //         // so on
    //     ];
    // }

}
