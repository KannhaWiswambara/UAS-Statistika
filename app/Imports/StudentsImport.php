<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'student_id' => $row[0],
            'name' => $row[1],
            'gpa' => $row[2],
        ]);
    }
    public function rules(): array
    {
        return [
            '0' => Rule::unique('students', 'student_id'),
        ];
    }
}
