<?php

namespace App\Controllers;

use App\Models\EmployeesModel; //import from EmployeesModel

class EmployeesController extends BaseController{

    public function index(){
        // return view('employees/index');
        $employeesModel = model(EmployeesModel::class);
        // $employees = $employeesModel->findAll();
        $employees = $employeesModel->orderBy('id', 'DESC')->findAll();
        return view('employees/index', ['employees' => $employees]);
    }

    public function create(){
        return view('employees/add_form');
    }


    // Store Method or save to DB
    public function store(){
        // return view('employees/create');
        helper('form');

        // GET: show form
        if ($this->request->getMethod(true) !== 'POST') {
        return view('employees/create');
        }

            $rules = [
                    'last_name' => 'required|max_length[50]|min_length[2]',
                    'first_name' => 'required|max_length[50]|min_length[2]',
                    'middle_name' => 'permit_empty|max_length[50]|min_length[2]',
                    'birthday' => 'required|valid_date',
                ];

                
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Save to DB
        $post = $this->request->getPost(['first_name','last_name','middle_name','birthday']);

        $model = new EmployeesModel();
        $model->save($post);

        return redirect()->to('/employees')->with('success', 'Employee created successfully!');

    }


    // edit employee
    public function edit($id){
        helper('form');
        $model = new EmployeesModel();
        $employee = $model->find($id);
        if(!$employee){
            return redirect()->to('/employees');
        }
        return view('employees/edit_form', ['employee' => $employee]);
    }


    public function update(){
        helper('form');
        $rules = [
                    'last_name' => 'required|max_length[50]|min_length[2]',
                    'first_name' => 'required|max_length[50]|min_length[2]',
                    'middle_name' => 'permit_empty|max_length[50]|min_length[2]',
                    'birthday' => 'required|valid_date',
                ];

        if (! $this->validate($rules)) {
            return view('employees/edit_form', [
                'validation' => $this->validator,
                'employee' => $this->request->getPost()
            ]);
        }

        $data = $this->request->getPost(['first_name','last_name','middle_name','birthday']);
        $id = $this->request->getPost('id');
        
        $model = new EmployeesModel();
        $model->update($id, $data);

        return redirect()->to('/employees')->with('success', 'Employee updated successfully!');
    }

    public function delete($id){
        $model = new EmployeesModel();
        $employee = $model->find($id);

        // check if employee exists
        if(!$employee){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Employee not found');
        }
        // delete employee
        $model->delete($id);
        return redirect()->to('/employees')->with('success', "Employee with ID $id deleted successfully!");
    }



    public function test(){
        echo "Employees Test Method is working";
    }

}
