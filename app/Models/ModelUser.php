<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{

    public function getUser()
    {
       $builder = $this->db->table('`user`');
       return $builder->get();
    }
    public function insertData($data)
    {
        $this->db->table('user')->insert($data);
    }
    public function deleteuser($id)
    {
        return $this->db->table('user')->delete(['id' => $id]);
    }
    
    
    public function updateuser($data, $id)
{
    return $this->db->table('user')->update($data, ['id' => $id]);
}

    public function ceklogin($username)
    {
        return $this->db->table('user')->where(array('username' => $username))->get()->getRowArray();
    }

}
?>