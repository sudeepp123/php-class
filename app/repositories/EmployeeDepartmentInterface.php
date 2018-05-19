<?php

app\repositories;

interface EmployeeDepartmentInterface{

    public function getAll();
    public function getById($id);
    public function insert(EmployeeDepartment $model);
    public function update(EmployeeDepartment $model);
    public function delete($id);
}