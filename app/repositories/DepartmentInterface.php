<?php

app\repositories;

interface DepartmentInterface{

    public function getAll();
    public function getById($id);
    public function insert(Department $model);
    public function update(Department $model);
    public function delete($id);
}