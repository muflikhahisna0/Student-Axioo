<?php

namespace App\Controllers;

use App\Models\StudentModel;
// use \namespace\mPDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Student extends BaseController
{
    protected $studentModel;
    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }
    public function index()
    {

        // $student = $this->studentModel->findAll();
        $currentPage = $this->request->getVar('page_student') ? $this->request->getVar('page_student') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) { //kalo ada keyword
            $student = $this->studentModel->search($keyword); //cari students di studentModel fungsi search dg param  keyword
        } else { //kalo tidak ada keyword tampilkan semua data studentModel
            $student = $this->studentModel;
        }

        $data = [
            'title' => 'Student',
            // 'student' => $this->studentModel->getStudent(),
            'student' => $student->paginate(2, 'student'),
            'pager' => $this->studentModel->pager,
            'currentPage' => $currentPage,
            //'student' => $this->studentModel->getStudent()
        ];

        return view('student/liststudent', $data);
    }

    public function detail($slug)
    {


        $data = [
            'title' => 'Students Detail',
            'student' => $this->studentModel->getStudent($slug)
        ];

        if (empty($data['student'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('student' . $slug . 'tidak ditemukan');
        }

        return view('student/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Tambah Data student',
            'validation' => \Config\Services::validation()
        ];

        return view('student/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required|is_unique[liststudent.name]',
            'school' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'grade' => 'required',
            'department' => 'required',

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/student/create')->withInput()->with('validation', $validation);
        }

        session()->setFlashdata('pesan', 'Data telah berhasil ditambahkan');

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->studentModel->save([
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'school' => $this->request->getVar('school'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'grade' => $this->request->getVar('grade'),
            'department' => $this->request->getVar('department')
        ]);
        return redirect()->to('/student');
    }

    public function delete($id)
    {
        $this->studentModel->delete($id);
        session()->setFlashdata('pesan', 'Data telah berhasil dihapus');
        return redirect()->to('/student');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Update Data',
            'validation' => \Config\Services::validation(),
            'student' => $this->studentModel->getStudent($slug)
        ];

        return view('student/edit', $data);
    }

    public function update($id)
    {
        $studentLama = $this->studentModel->getStudent($this->request->getVar('slug'));
        if ($studentLama['name'] == $this->request->getVar('name')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[liststudent.name]';
        }

        if (!$this->validate([
            'name' => $rule_name,
            'school' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'grade' => 'required',
            'department' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/student/edit' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->studentModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'school' => $this->request->getVar('school'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'grade' => $this->request->getVar('grade'),
            'department' => $this->request->getVar('department'),
        ]);
        session()->setFlashdata('pesan', 'Data telah berhasil diupdate');
        return redirect()->to('/student');
    }


    public function excel()
    {
        $student = new StudentModel();
        $dataStudent = $student->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Name')
            ->setCellValue('B1', 'School')
            ->setCellValue('C1', 'Email')
            ->setCellValue('D1', 'Phone')
            ->setCellValue('E1', 'Grade')
            ->setCellValue('F1', 'Department');

        $column = 2;
        // tulis data student ke cell
        foreach ($dataStudent as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['name'])
                ->setCellValue('B' . $column, $data['school'])
                ->setCellValue('C' . $column, $data['email'])
                ->setCellValue('D' . $column, $data['phone'])
                ->setCellValue('E' . $column, $data['grade'])
                ->setCellValue('F' . $column, $data['department']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Siswa';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function pdf()
    {
        $data = [
            'title' => 'Students Detail',
            'student' => $this->studentModel->getStudent()
        ];
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('student/pdf', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
