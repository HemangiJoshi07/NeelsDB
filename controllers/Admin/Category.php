<?php
class Category extends My_Controller
{
	public function index()
	{
		if(count($_POST) > 0)
		{
			$method='Creator_'.$this->input->post('action');
			$this->$method($_POST);
		}
		else
		{
			if(isset($this->segment[3]))
			{
				$method='Render_'.str_replace("-","_",$this->segment[3]);
			}
			else{
				$method= 'Render_index';
			}
			$this->$method();
		}
	}
	public function Render_index()
	{
		$fetchdata['controller']=$this;
		$fetchdata['fetch']=$this->My_Model->findall('category',array(),3);
		//_pre($fetchdata['fetch']);
		$this->load->view('Admin/category_menage',$fetchdata);
	}

	public function Render_form()
	{
		$this->data['topmenu']=$this->My_Model->findall('topmenu',array('is_active'=>1),3,'',array('id','name'));
		//_pre($this->data['topmenu']);
		if(isset($this->segment[4]))
		{
			$this->data['category']=$this->My_Model->findall('category',array('id'=>$this->segment[4]),1);
			//_pre($this->data['category']);
		}
		$this->load->view('Admin/category_form',$this->data);
	}
	public function Creator_form($formdata)
	{

		if(isset($this->segment[4]))
		{
			$this->data['category']=$this->My_Model->findall('category',array('id'=>$this->segment[4]),1);
		}
		$path = "public/image/category/";

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('url_keyword','Url_Keyword','required');
		$this->form_validation->set_rules('top_menu_id','Top_Menu_Id','required');
		$this->form_validation->set_rules('meta_title','Meta_Title','required');
		$this->form_validation->set_rules('meta_keyword','Meta_Keyword','required');
		$this->form_validation->set_rules('meta_desc','Meta_Desc','required');
		$this->form_validation->set_rules('is_active','Is_active','required');
		$this->form_validation->set_rules('image','Image',"callback_image_upload[$path]");
		$this->form_validation->set_rules('display_order','Display_Order','required');
		

		if($this->form_validation->run() == FALSE)
		{
			$this->data['error']['name'] = form_error('name');
			$this->data['error']['url_keyword'] = form_error('url_keyword');
			//$this->data['error']['top_menu_id'] = form_error('top_menu_id');
			$this->data['error']['meta_title'] = form_error('meta_title');
			$this->data['error']['meta_keyword'] = form_error('meta_keyword');
			$this->data['error']['meta_desc'] = form_error('meta_desc');
			$this->data['error']['is_active'] = form_error('is_active');
			$this->data['error']['image'] = form_error('image');
			$this->data['error']['display_order'] = form_error('display_order');
			
			$this->Render_form();
		}
		else
		{
			$data=array(
				'name' => $formdata['name'],
				'url_keyword' => $formdata['url_keyword'],
				'top_menu_id' => $formdata['top_menu_id'],
				'meta_title' => $formdata['meta_title'],
				'meta_keyword' => $formdata['meta_keyword'],
				'meta_desc' => $formdata['meta_desc'],
				'is_active' => $formdata['is_active'],
				'image' => $this->image_path1,
				'display_order' => $formdata['display_order'],
			);
			//_pre($data);
			if(isset($this->segment[4]))
			{
				$update=$this->My_Model->update_data('category',$data,array('id'=>$this->segment[4]));
				$id=2;
			}
			else{
				$this->My_Model->add_data('category',$data);
				$id=1;
			}
			redirect(base_url('Admin/category/?id='.$id));
		}
	}	
	public function Render_delete()
	{
		if(isset($this->segment[4]))
		{
			$this->My_Model->delete_data('category',array('id'=>$this->segment[4]));
		}
		redirect(base_url('Admin/category/?id=3'));
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
?> 
