<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMasuk extends Model
{
    protected $table = 'masuk'; // Nama tabel
    protected $primaryKey = 'idmasuk';
    protected $allowedFields = ['namamasuk','tglmasuk', 'jumlah'];

    public function getmasuk()
    {
       $builder = $this->db->table('masuk');
       return $builder->get();
    }

    public function insertData($data)
    {
        $this->db->table('masuk')->insert($data);
    }

    public function deletemasuk($id)
    {
        $query = $this->db->table('masuk')->delete(array('idmasuk' => $id));
        return $query;
    }

    public function updatemasuk($data, $id)
{
    $query = $this->db->table('masuk')->update($data, array('idmasuk' => $id));
}

public function TotalProduk()
{
    return $this->db->table('produk')->countAllResults();
}
}
