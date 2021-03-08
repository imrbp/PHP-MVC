<?php

class About extends Controller 
{

    public function index($nama = 'Made', $job = 'Mahasiswa', $age = 30)
    {
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['judul'] = "About Me";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = "Page";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
