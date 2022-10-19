<?php
class formsiswa extends CI_Controller
{
    public function index()
 {
    $this->load->view('viewform');
 }

    public function cetak()
 {
    $data = [
    'nama' => $this->input->post('nama'),
    'nis' => $this->input->post('nis'),
    'kelas' => $this->input->post('kelas'),
    'tgllahir' => $this->input->post('tgllahir'),
    'tempatlahir' => $this->input->post('tempatlahir'),
    'alamat' => $this->input->post('alamat'),
    'jenkel' => $this->input->post('jenkel'),
    'agama' => $this->input->post('agama'),
    ];

    $this->load->view('viewsiswa', $data);
 }
}