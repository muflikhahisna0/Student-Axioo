<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table    = 'liststudent';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['name', 'school', 'email', 'phone', 'grade', 'department', 'slug'];

    public function getStudent($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('liststudent');
        // $builder->like('name', 'keyword');
        // return $builder;

        return $this->table('liststudent')->like('name', $keyword)->orLike('school', $keyword);
    }
}
