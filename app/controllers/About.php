<?php

class About extends Controller{
    public function index($name = 'Alfi', $job = 'smiling', $hobby = 'catting')
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['hobby'] = $hobby; 
        $data['title'] = 'Index - About'; 
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['title'] = 'Page - About'; 
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}