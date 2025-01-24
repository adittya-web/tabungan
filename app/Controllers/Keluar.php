<?php

namespace App\Controllers;

use App\Models\ModelKeluar;

class Keluar extends BaseController
{
    public function index()
    {
        $model = new ModelKeluar();
        $data['keluar'] = $model->getkeluar()->getResultArray();
        echo view('keluar/vkeluar', $data);
    }

    public function save()
    {
        $model = new ModelKeluar();  // Pastikan nama model sesuai (bukan ModelKaryawan)
        $data = array(

            'idkeluar'     => $this->request->getPost('idkeluar'),
            'kegiatan'   => $this->request->getPost('kegiatan'),
            'tglkeluar'   => $this->request->getPost('tglkeluar'),
            'jumlahkeluar'        => $this->request->getPost('jumlahkeluar'),
        );
            // Simpan data ke database
            $model->insertData($data);
            return redirect()->to('/keluar');
        
    }

    public function delete()
    {
        $model = new ModelKeluar();
        $id = $this->request->getPost('idkeluar');
        
        if ($model->deletekeluar($id)) {
            return redirect()->to('/keluar/index');
        } else {
            return redirect()->back()->with('error', 'Delete failed');
        }
    }

    public function laporanpengurus()
    {
        $model = new Modelpengurus();
        $data['data'] = $model->getlaporanpengurus()->getResultArray();
        echo view('pengurus/cetaklaporanpengurus',$data);
    }
    
}    
?>
