<?php namespace App\Models;

use CodeIgniter\Model;

class DomaineModel extends Model{
    protected $table = 'domaine';
    protected $primary_key = 'idDomaine';
    protected $returnType = 'array';
    protected $allowedFields = ['intitule'];
    protected $db;

    function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function getFields()
    {
        return $this->asArray()->findAll();
    }

    public function getField($id) {
        return $this->where('idDomaine', $id)
            ->get()->getRow();
    }

    public function edit_field($id, $data)
    {
        $this->db->table($this->table)->update($data, $id);
    }

    public function delete_field($id)
    {
        $this->db->table($this->table)->delete($id);
    }

}