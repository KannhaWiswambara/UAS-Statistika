<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\Student;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class PdfController extends Controller
{
    public function create_pdf()
    {
        $student = Student::all();
        // $dataPertama = $ss
        $pdf = PDF::loadview('pages.PDF', ['students' => $student]);
        return $pdf->download('student-data.pdf');
    }

    public function export_excel()
    {
        return Excel::download(new StudentsExport, 'student.xlsx');
    }

    public function create(){
        return view('pages.inputexcel');
    }

    public function import_excel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        Excel::import(new StudentsImport, $file);
        return redirect()->route('student-data.index')->with('success', 'Data Succesfully imported!');
    }
}
