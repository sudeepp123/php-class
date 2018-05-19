[PHP_TAG]

[NAMESPACE];

interface [CLASS_NAME]Interface{

    public function getAll();
    public function getById($id);
    public function insert([CLASS_NAME] $model);
    public function update([CLASS_NAME] $model);
    public function delete($id);
}