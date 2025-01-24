<?php
namespace App\Controllers;

use App\Models\ModelMasuk;

class Masuk extends BaseController
{

    public function index()
    {
        $model = new ModelMasuk();
        $data['masuk'] = $model->getmasuk()->getResultArray();
        echo view('masuk/vmasuk', $data);
    }

    public function delete()
    {
        $model = new ModelMasuk();
        $id = $this->request->getPost('idmasuk');
        $model->deletemasuk($id); // Menggunakan $idpemasukan
        return redirect()->to('/masuk'); // Pastikan rute ini sesuai
    }

    public function update() {

        $model = new ModelMasuk();
        $id = $this->request->getPost('idmasuk');
        $data = [
            'namamasuk'   => $this->request->getPost('namamasuk'),
            'tglmasuk'   => $this->request->getPost('tglmasuk'),
            'jumlah'        => $this->request->getPost('jumlah'),
        ];
    
        $model->updatemasuk ($data, $id);
    
        return redirect()->to('/masuk')->with('success', 'Data berhasil diperbarui');
    }
    

    public function save()
    {
        $model = new ModelMasuk();  // Pastikan nama model sesuai (bukan ModelKaryawan)
        $data = array(

            'idmasuk'     => $this->request->getPost('idproduk'),
            'namamasuk'   => $this->request->getPost('namamasuk'),
            'tglmasuk'   => $this->request->getPost('tglmasuk'),
            'jumlah'        => $this->request->getPost('jumlah'),
        );
            // Simpan data ke database
            $model->insertData($data);
            return redirect()->to('/masuk');
        
    }

    public function laporanpemasukan()
    {
        $model = new Modelpemasukan();
        $data['data'] = $model->getlaporanpemasukan()->getResultArray();
        echo view('kas/cetak_laporan',$data);
    }

    public function laporanperperiode()
    {
        echo view('kas/vlaporanpemasukan');
    }

    public function cetaklaporanperperiode()
    {
        $model = new ModelPemasukan();
    
        // Ambil nilai dari input form
        $tbla = $this->request->getPost('tanggal_awal');
        $tblb = $this->request->getPost('tanggal_akhir');
    
        // Panggil method model dengan variabel yang benar
        $query = $model->getLaporanperperiode($tbla, $tblb)->getResultArray();
    
        // Kirim data ke view
        $data = [
            'tgla' => $tbla, // Ubah ke $tbla
            'tglb' => $tblb, // Ubah ke $tblb
            'data' => $query
        ];
        echo view('kas/cetaklaporanpertanggal', $data);
    }

    public function laporanperakun()
    {
        echo view('kas/vlaporanperakun');
    }

    public function cetaklaporanperakun()
    {
        $model = new ModelPemasukan();
    
        // Ambil data dari form POST atau set nilai default jika kosong
        $jenis = $this->request->getPost('idakun') ?? '';
    
        // Panggil method model dengan parameter yang benar
        $query = $model->getlaporanperakun($jenis)->getResultArray();
    
        // Kirim data ke view
        $data = [
            'jenis' => $jenis, // Pastikan jenis dikirim ke view
            'data' => $query
        ];
        echo view('kas/cetaklaporanperakun', $data);
    }
    
    

}
