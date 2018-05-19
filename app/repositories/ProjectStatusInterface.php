<?php

app\repositories;

interface ProjectStatusInterface{

    public function getAll();
    public function getById($id);
    public function insert(ProjectStatus $model);
    public function update(ProjectStatus $model);
    public function delete($id);
}