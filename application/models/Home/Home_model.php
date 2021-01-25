<?php 
class Home_model extends CI_Model 
{
    public function createcat($postdata)
    {
        $data = array(
            'cat_name' => ucfirst($postdata['category_name'])
        );
        $this->db->insert('a_cat',$data);
        if($this->db->affected_rows() > 0)
        {
            $id = $this->db->insert_id();

            $this->db->where('id',$id);
            $this->db->set('show_order',$id);
            $this->db->update('a_cat');

            $res = array(
                'status' => 'success'
            );  
            echo json_encode($res);
        }
    }
    public function getcat_count()
    {
        $query = $this->db->get('a_cat');
        $count = $query->num_rows();
        return $count;
    }
    public function getcatdata()
    {
        $this->db->order_by('show_order','asc');
        $query = $this->db->get('a_cat');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function updateslider($postdata)
    {
        $extension=array("jpeg","jpg","png","gif");
        $filepath = [];
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            $final_name = str_replace(' ', '', $newFileName);
            if (!file_exists('uploads/sliders/')) {
                mkdir('uploads/sliders/', 0777, true);
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/sliders/".$final_name);
                array_push($filepath,$final_name);
            }
            else
            {
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/sliders/".$final_name);
                array_push($filepath,$final_name);
            }
            
        }
        foreach($filepath as $row)
        {
            $data = array(
                'sliders_path' => $row
            );
            $this->db->insert('a_slider',$data);
        }
        $res = array(
            'status' => 'success'
        );
        echo json_encode($res);
    }
    public function updateaboutheaderslide($postdata)
    {
        $extension=array("jpeg","jpg","png","gif");
        $filepath = [];
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            $final_name = str_replace(' ', '', $newFileName);
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/About/".$final_name);
            array_push($filepath,$final_name);
        }
        foreach($filepath as $row)
        {
            $data = array(
                'sliders_path' => $row
            );
            $this->db->insert('a_about_slider',$data);
        }
        $res = array(
            'status' => 'success'
        );
        echo json_encode($res);
    }
    public function getslider_data()
    {
        $query = $this->db->get('a_slider');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getslider_data_count()
    {
        $query = $this->db->get('a_slider');
        if($query->num_rows() > 0)
        {
            $result = $query->num_rows();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getaboutslider()
    {
        $query = $this->db->get('a_about_slider');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function updatehomeslider($postdata)
    {
        $target_dir = "uploads/sliders/";
        $target_file = $target_dir . basename($_FILES["files"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["files"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
                // Upadting database 
                $this->db->where('sliders_path',$postdata['oldimgname']);
                $this->db->set('sliders_path',$_FILES["files"]["name"]);
                $this->db->update('a_slider');
                if($this->db->affected_rows() > 0 )
                {
                    $res = array(
                        'status' => 'success'
                    );
                    echo json_encode($res);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    public function updateaboutslider($postdata)
    {
        $target_dir = "uploads/About/";
        $target_file = $target_dir . basename($_FILES["files"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["files"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
                // Upadting database 
                $this->db->where('sliders_path',$postdata['oldimgname']);
                $this->db->set('sliders_path',$_FILES["files"]["name"]);
                $this->db->update('a_about_slider');
                if($this->db->affected_rows() > 0 )
                {
                    $res = array(
                        'status' => 'success'
                    );
                    echo json_encode($res);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    public function deleteslider($postdata)
    {
        $this->db->where('sliders_path',$postdata['imgname']);
        $this->db->delete('a_slider');
        if($this->db->affected_rows() > 0 )
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
    public function deleteaboutslider($postdata)
    {
        $this->db->where('sliders_path',$postdata['imgname']);
        $this->db->delete('a_about_slider');
        if($this->db->affected_rows() > 0 )
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
    public function updatecontact($postdata)
    {
        $data = array(
            'contact_number' => $postdata['contact']
        );
        $this->db->insert('a_contact',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
    public function getcontact_data()
    {
        $query = $this->db->get('a_contact');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getaddress_data()
    {
        $query = $this->db->get('a_address');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getgooglemarker()
    {
        $query = $this->db->get('a_gurl');
        if($query->num_rows() > 0)
        {
            $result = $query->row_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getemail()
    {
        $query = $this->db->get('a_email');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        } 
    }
    public function updateaddress($postdata)
    {
        $query = $this->db->get('a_address');
        if($query->num_rows() > 0)
        {
            // Update
            $this->db->truncate('a_address');
            $data = array(
                'a_address' => $postdata['address']
            );
            $this->db->insert('a_address',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
        else
        {
            $data = array(
                'a_address' => $postdata['address']
            );
            $this->db->insert('a_address',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
        
    }
    public function updategoogleurl($postdata)
    {
        $query = $this->db->get('a_gurl');
        if($query->num_rows() > 0)
        {
            // Update
            $this->db->truncate('a_gurl');
            $data = array(
                'a_gurl' => $postdata['g_url']
            );
            $this->db->insert('a_gurl',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
        else
        {
            // Insert
            $data = array(
                'a_gurl' => $postdata['g_url']
            );
            $this->db->insert('a_gurl',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
    }
    public function updatemail($postdata)
    {
        $data = array(
            'a_email' => $postdata['email']
        );
        $this->db->insert('a_email',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
    public function aboutusdata($postdata)
    {
        $query = $this->db->get('a_about');
        if($query->num_rows() > 0)
        {
            // Update
            $this->db->truncate('a_about');
            $data = array(
                'subtitle' => $postdata['sub_about'],
                'description' => $postdata['about_pub']
            );
            $this->db->insert('a_about',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
        else
        {
            // Insert
            $data = array(
                'subtitle' => $postdata['sub_about'],
                'description' => $postdata['about_pub']
            );
            $this->db->insert('a_about',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
    }
    public function getabouttextdata()
    {
        $query = $this->db->get('a_about');
        if($query->num_rows() > 0)
        {
            $result = $query->row_array();
            return $result;
        }
        else
        {
            return false;
        } 
    }
    public function getbookcat()
    {
        $query = $this->db->get('a_cat');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function uploadbook($postdata)
    {
        // Upload img first
        $extension=array("jpeg","jpg","png","gif");
        $filepath = [];
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            $final_name = str_replace(' ', '', $newFileName);
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/Books/".$final_name);
            array_push($filepath,$final_name);
        }
        $data = array(
            'book_title'        => $postdata['book_title'],
            'book_cat'          => $postdata['book_cat'],
            'book_desc'         => $postdata['book_desc'],
            'book_cost'         => $postdata['book_cost'],
            'book_amz_url'      => $postdata['book_amz_url'],
            'book_weight'       => $postdata['book_weight'],
            'book_page_count'   => $postdata['book_page_count'],
            'created_at'        => time(),
            'book_img_path'     => implode(',',$filepath)
        );
        $this->db->insert('a_book_data',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function getbookcount()
    {
        $query = $this->db->get('a_book_data');
        $count = $query->num_rows();
        return $count;
    }
    public function getbookdata()
    {
        $sql = "SELECT a_book_data.id as book_id,a_book_data.book_title,a_book_data.book_cat,a_book_data.book_desc,a_book_data.book_cost,a_book_data.book_amz_url,a_book_data.book_img_path,a_cat.cat_name,a_book_data.book_weight,a_book_data.book_page_count FROM a_book_data JOIN a_cat ON a_book_data.book_cat = a_cat.id";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getbookdatahome()
    {
        $sql = "SELECT a_book_data.id as book_id,a_book_data.book_title,a_book_data.book_cat,a_book_data.book_desc,a_book_data.book_cost,a_book_data.book_amz_url,a_book_data.book_img_path,a_cat.cat_name,a_book_data.book_weight,a_book_data.book_page_count FROM a_book_data JOIN a_cat ON a_book_data.book_cat = a_cat.id LIMIT 10";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getbookdatabasedid($id)
    {
        $sql = "SELECT a_book_data.id as book_id,a_book_data.book_title,a_book_data.book_cat,a_book_data.book_desc,a_book_data.book_cost,a_book_data.book_amz_url,a_book_data.book_img_path,a_cat.cat_name,a_book_data.book_weight,a_book_data.book_page_count FROM a_book_data JOIN a_cat ON a_book_data.book_cat = a_cat.id WHERE a_book_data.id ='".$id."'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->row_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getallbooks()
    {
        $sql = "SELECT a_book_data.id as book_id,a_book_data.book_title,a_book_data.book_cat,a_book_data.book_desc,a_book_data.book_cost,a_book_data.book_amz_url,a_book_data.book_img_path,a_cat.cat_name,a_book_data.book_weight,a_book_data.book_page_count FROM a_book_data JOIN a_cat ON a_book_data.book_cat = a_cat.id";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getcallbookscat($id)
    {
        $sql = "SELECT a_book_data.id as book_id,a_book_data.book_title,a_book_data.book_cat,a_book_data.book_desc,a_book_data.book_cost,a_book_data.book_amz_url,a_book_data.book_img_path,a_cat.cat_name,a_book_data.book_weight,a_book_data.book_page_count FROM a_book_data JOIN a_cat ON a_book_data.book_cat = a_cat.id WHERE a_cat.id ='".$id."'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function deletebook($postdata)
    {
        $this->db->where('id',$postdata['bookid']);
        $this->db->delete('a_book_data');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function editbook($postdata)
    {
        $extension=array("jpeg","jpg","png","gif");
        $filepath = [];
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            $final_name = str_replace(' ', '', $newFileName);
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/Books/".$final_name);
            array_push($filepath,$final_name);
        }
        $data = array(
            'book_title'    => $postdata['book_title'],
            'book_cat'      => $postdata['book_cat'],
            'book_desc'     => $postdata['book_desc'],
            'book_cost'     => $postdata['book_cost'],
            'book_amz_url'  => $postdata['book_amz_url'],
            'book_weight'       => $postdata['book_weight'],
            'book_page_count'   => $postdata['book_page_count'],
            'created_at'    => time(),
            'book_img_path'     => implode(',',$filepath)
        );
        $this->db->where('id',$postdata['bookid']);
        $this->db->update('a_book_data',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function getbookdataedit($postdata)
    {
        $sql = "SELECT a_book_data.id as book_id,a_book_data.book_title,a_book_data.book_cat,a_book_data.book_desc,a_book_data.book_cost,a_book_data.book_amz_url,a_book_data.book_img_path,a_cat.cat_name,a_book_data.book_weight,a_book_data.book_page_count FROM a_book_data JOIN a_cat ON a_book_data.book_cat = a_cat.id WHERE a_book_data.id ='".$postdata['bookid']."'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->row_array();
            echo json_encode($result);
        }
        else
        {
            return false;
        }
    }
    public function updatecontactnumber($postdata)
    {
        $this->db->where('contact_number',$postdata['current']);
        $this->db->set('contact_number',$postdata['contact']);
        $this->db->update('a_contact');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function updateemaildata($postdata)
    {
        $this->db->where('a_email',$postdata['current']);
        $this->db->set('a_email',$postdata['email']);
        $this->db->update('a_email');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function deletenumber($postdata)
    {
        $this->db->where('contact_number',$postdata['current']);
        $this->db->delete('a_contact');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function deleteemail($postdata)
    {
        $this->db->where('a_email',$postdata['current']);
        $this->db->delete('a_email');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function editcategoryname($postdata)
    {
        $this->db->where('id',$postdata['currentcatid']);
        $this->db->set('cat_name',$postdata['category_name']);
        $this->db->update('a_cat');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function deletecat($postdata)
    {
        $this->db->where('id',$postdata['catid']);
        $this->db->delete('a_cat');
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status'    => 'success'
            );
            echo json_encode($res);
        }
    }
    public function uporder($postdata)
    {
        $this->db->where('id',$postdata['currentid']-1);
        $query = $this->db->get('a_cat');
        $result = $query->row_array();
        $previous_id = $result['id'];
        $currentid = $postdata['currentid'];
        $this->db->where('id',$currentid);
        $this->db->set('show_order',$previous_id);
        $this->db->update('a_cat');
        $this->db->where('id',$previous_id);
        $this->db->set('show_order',$currentid);
        $this->db->update('a_cat');

        $res = array(
            'status'    => 'success'
        );
        echo json_encode($res);
    }
    public function downorder($postdata)
    {
        $this->db->where('id',$postdata['currentid']+1);
        $query = $this->db->get('a_cat');
        $result = $query->row_array();
        $previous_id = $result['id'];
        $currentid = $postdata['currentid'];
        $this->db->where('id',$currentid);
        $this->db->set('show_order',$previous_id);
        $this->db->update('a_cat');
        $this->db->where('id',$previous_id);
        $this->db->set('show_order',$currentid);
        $this->db->update('a_cat');

        $res = array(
            'status'    => 'success'
        );
        echo json_encode($res);
    }
}
