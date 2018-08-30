<?php
class helloworld extends CI_Controller{
    
    public function index()
    {
        $this->load->model('mymodel');
        $data = $this->mymodel->GetMahasiswa('mahasiswa');
        $data = array('data' => $data);
        $this->load->view('data_mahasiswa', $data);
    }
    
    public function add_data()
    {
        $this->load->view('form_add');
    }
    
    public function insert()
    {
        $this->load->model('mymodel');
        $data = array(
            'no_induk' => $this->input->post('no_induk'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
                     );
        $data = $this->mymodel->insert('mahasiswa', $data);
        redirect(base_url(),'refresh');
    }
    
    public function delete($no_induk)
    {
       $no_induk = array('no_induk' => $no_induk);
       $this->load->model('mymodel');
       $this->mymodel->delete('mahasiswa',$no_induk);
       redirect(base_url(), 'refresh');
    }
    
    public function edit($no_induk)
    {
        $this->load->model('mymodel');
        $siswa = $this->mymodel->GetWhere('mahasiswa',array('no_induk'=> $no_induk));
        $data  = array(
            'no_induk' => $siswa[0]['no_induk'],
            'nama' => $siswa[0]['nama'],
            'alamat' => $siswa[0]['alamat'],
            );
        $this->load->view('form_edit', $data);
    }
    
    public function update()
    {
        $no_induk = $this->input->post('ni');
        $nama     = $this->input->post('nama');
        $alamat   = $this->input->post('alamat');
        if (isset($_POST['submit'])){
            $data = [
                'nama' => $nama,
                'alamat' => $alamat
                    ];
            $this->db->where('no_induk', $no_induk);
            $this->db->update('mahasiswa', $data);
            redirect(base_url(), 'refresh');
        }
    }
}
