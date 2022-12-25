<?php 
class Home_banner extends My_Controller
{
   public function index()
   {
	   	
	   	if(count($_POST) > 0)
	   	{
	   		$method = 'Creator_'.$this->input->post('action');
	   		$this->$method($_POST); 

	   	}else{  
	   		if(isset($this->segment[3]))
	       	{
	       		$method = "Render_". str_replace("-", "_", $this->segment[3]);
	       		
	       	}else{
	       		$method = "Render_index";
	       		
	       	}
	   		$this->$method();
	        }
   }
   public function Render_index()
   {
	
	$fetchdata['fetch']=$this->My_Model->findall('home_banner',array(),3);
	$this->load->view('Admin/managehomebanner',$fetchdata);
	}
	public function Render_form()
	{
		if(isset($this->segment[4]))
		{
			$this->data['home_banner']=$this->My_Model->findall('home_banner',array('id'=>$this->segment[4]),1);
		}
		$this->load->view('Admin/addhomebanner',$this->data);
	}
	public function Creator_form($formdata)
	{
		
		if(isset($this->segment[4]))
		{
			$this->data['home_banner']=$this->My_Model->findall('home_banner',array('id'=>$this->segment[4]),1);
		}
		$path = "public/image/home_banner/";

		$this->form_validation->set_rules('lebel','Lebel','required');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('image','Image',"callback_image_upload[$path]");
		$this->form_validation->set_rules('discription','discription','required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->data['error']['lebel'] = form_error('lebel');
			$this->data['error']['title'] = form_error('title');
			$this->data['error']['image'] = form_error('image');
			$this->data['error']['discription'] = form_error('discription');
			
			$this->Render_form();
		}
		else
		{
			$data=array(
				'lebel' => $formdata['lebel'],
				'title' => $formdata['title'],
				'image' => $this->image_path1,
				'discription' => $formdata['discription'],
			);
			//_pre($data);
			if(isset($this->segment[4]))
			{
				$update=$this->My_Model->update_data('home_banner',$data,array('id'=>$this->segment[4]));
				$id=2;
			}else
			{
				$this->My_Model->add_data('home_banner',$data);
				$id=1;
			}
			redirect(base_url('Admin/home_banner/?id='.$id));
		}	
	}
	public function Render_delete()
	{
		if(isset($this->segment[4]))
		{
			$this->My_Model->delete_data('home_banner',array('id'=>$this->segment[4]));
		}
		redirect(base_url('Admin/home_banner?id=3'));
	}
	
	public function image_upload($str,$path)
	{
		if($_FILES["image"]["name"]!=""){
		$config['file_name'] =time()."".$_FILES["image"]["name"];
		$config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['remove_spaces'] = TRUE;
        $this->upload->initialize($config); 
        $this->load->library('upload',$config);
           	if ( ! $this->upload->do_upload('image'))
            {
            	$this->form_validation->set_message('image_upload',$this->upload->display_errors());
               	return FALSE;  
            }
            else
            {
                $this->image_path1=$path.$this->upload->file_name;
            	return TRUE; 
            }
    	}
    	else{
    		if($this->input->post("old_image")!=""){
    			$this->image_path1=$this->input->post("old_image");
    			return TRUE;
    		}else{
    			return FALSE;
    		}
    	}
	}
	
}	
	
	


