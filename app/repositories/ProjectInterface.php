<?php

app\repositories;

interface ProjectInterface{

    public function getAll();
    public function getById($id);
    public function insert(Project $model);
    public function update(Project $model);
    public function delete($id);
}