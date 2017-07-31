<?php
class Test extends CI_Controller {
    public function index() {
        echo "This is default function.";
    }
    public function hello() {
        echo "This is hello function.";
    }
    public function view()  {
        $this->load->helper('utility_helper');
        $data["title"] = "I love Julie";
        $this->load->view("test", $data);
    }
}


?>
