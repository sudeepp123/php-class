<?php

app\repositories;

interface ProjectFollowupInterface{

    public function getAll();
    public function getById($id);
    public function insert(ProjectFollowup $model);
    public function update(ProjectFollowup $model);
    public function delete($id);
}