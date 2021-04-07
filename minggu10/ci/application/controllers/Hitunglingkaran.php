<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lingkaran');
        $this->benchmark->mark('code_start');
        $this->benchmark->mark('one');
        $this->benchmark->mark('two');
    }

    function index()
    {
        $this->lingkaran->keliling('21');
        echo "<hr/>";
        $this->lingkaran->luas('14');

        $this->load->view('view_benchmarking');
        $this->benchmark->mark('three');
        $this->benchmark->mark('code_end');
    }
}
