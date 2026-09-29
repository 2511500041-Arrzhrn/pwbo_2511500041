<?php

class About extends Controller {
    public function index($nama = 'Arr', $pekerjaan = 'Tidur')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}