<?php
namespace App\Models;
use CodeIgniter\Model;
class EmployeesModel extends Model{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'middle_name', 'birthday'];
    protected $returnType = 'array';
}