<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\ExportEmployee;
use Excel;
use PDF;
class EmployeeController extends Controller
{
    //
    public function addEmp()
    {
       $emp=[
           ["name"=>'arun','email'=>'arun@gmail.com',"phone"=>"12345567",'salary'=>'20000','department'=>'Accounts'],
           ["name"=>'varun','email'=>'varun@gmail.com',"phone"=>"12345567",'salary'=>'20000','department'=>'Maketing'],
           ["name"=>'tharun','email'=>'tharun@gmail.com',"phone"=>"12345567",'salary'=>'20500','department'=>'Quality'],
           ["name"=>'aruns','email'=>'aruns@gmail.com',"phone"=>"12345567",'salary'=>'20200','department'=>'Tester']
       ];
       Employee::insert($emp);
       return "inserted all Records";
    }

    //excel
    public function exportExcel()
    {
        # code...
        return Excel::download(new ExportEmployee,'emplist.xlsx');
    }
    
    public function exportCsv()
    {
        # code...
        return Excel::download(new ExportEmployee,'emplist.csv');
    }
    //pdf
    public function getemp()
    {
       $total=Employee::all();
       return view('employee',['total'=>$total]);
    }
    public function pdfs()
    {
      $total=Employee::all();
      $pdf=PDF::loadview('employee',compact('total'));
    return $pdf->download('emp.pdf');
    }
}
