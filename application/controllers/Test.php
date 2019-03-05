<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index()
    {
        $this->db->select('json')->from('talleres')->where("estatus",1);
        $query = $this->db->get();

        if ($query->num_rows() > 0 )
        {
            $data = $query->result_array()[0];
            $res = json_decode(($data["json"]));
            //$res2 = $data["features"];
            //echo $res->features;
            foreach ($res->features as $value) {
                //echo $value->geometry->coordinates[0];
                echo $value->geometry->type;
            }
        }else{
            return "";
        }
        
        //$this->load->view('welcome_message');
    }
}
