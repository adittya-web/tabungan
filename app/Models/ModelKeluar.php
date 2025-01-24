<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKeluar extends Model
{
    protected $table = 'keluar'; // Nama tabel
    protected $primaryKey = 'idkeluar';
    protected $allowedFields = ['kegiatan','tglkeluar','jumlahkeluar'];

    public function getkeluar()
    {
       $builder = $this->db->table('keluar');
       return $builder->get();
    }
    public function insertData($data)
    {
        $this->db->table('keluar')->insert($data);
    }
    public function deletekeluar($id)
    {
       $query = $this->db->table('keluar')->delete(array('idkeluar' => $id));
       return $query;
    }
}
