<?php 
class Admin_model extends CI_Model
{
    public function authuser($postdata)
    {
        $this->db->where('username',$postdata['a_email']);
        $this->db->where('password',$postdata['a_pass']);
        $query = $this->db->get('a_user');
        if($query->num_rows() > 0)
        {
            $csrf = bin2hex(random_bytes(32));
            $_SESSION['csrf'] = $csrf;
            $respose = array(
                'status' => 'success',
                'redirect_to' => ''.base_url().'home'
            );
            echo json_encode($respose);
        }
        else
        {
            $respose = array(
                'status' => 'err',
                'message' => 'Wrong email or password'
            );
            echo json_encode($respose);
        }
    }   
}
