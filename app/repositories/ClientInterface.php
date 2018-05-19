<?php

app\repositories;

interface ClientInterface{

    public function getAll();
    public function getById($id);
    public function insert(Client $model);
    public function update(Client $model);
    public function delete($id);
}