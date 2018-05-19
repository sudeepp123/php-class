<?php

app\repositories;

interface EmployeeInterface{

    public function getAll();
    public function getById($id);
    public function insert(Employee $model);
    public function update(Employee $model);
    public function delete($id);
}