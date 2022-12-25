<?php
class Product extends My_Controller
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
		$fetchdata['fetch']=$this->My_Model->findall('product',array(),3);
		$this->load->view('Admin/product_menage',$fetchdata);
	}

	public function Render_form()
	{
		$this->data['category']=$this->My_Model->findall('category',array('is_active'=>1),3,'',array('id','name'));
		//_pre($this->data['category']);
		if(isset($this->segment[4]))
		{
			$this->data['product']=$this->My_Model->findall('product',array('id'=>$this->segment[4]),1,array('display_order','asc'));
		
		}
		$this->load->view('Admin/product_form',$this->data);
	}
	public function Creator_form($formdata)
	{
		if(isset($this->segment[4]))
		{

			$this->data['product']=$this->My_Model->findall('product',array('id'=>$this->segment[4]),1);
		}
		
		$path = "public/image/product/";

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('url_keyword','Url Keyword','required');
		$this->form_validation->set_rules('category_id','Category Id','required');
		$this->form_validation->set_rules('image','Image',"callback_image_upload[$path]");
		$this->form_validation->set_rules('meta_title','Meta Title','required');
		$this->form_validation->set_rules('meta_keyword','Meta Keyword','required');
		$this->form_validation->set_rules('meta_desc','Meta Desc','required');
		$this->form_validation->set_rules('is_display_footer','Is Display Footer','required');
		$this->form_validation->set_rules('is_display_home','Is Display Home','required');
		$this->form_validation->set_rules('is_active','Is Active','required');
		$this->form_validation->set_rules('product_code','Product Code','required');
		$this->form_validation->set_rules('product_type','Product Type','required');
		$this->form_validation->set_rules('delivery_time','Delivery Time','required');
		$this->form_validation->set_rules('small_desc','Small Desc','required');
		$this->form_validation->set_rules('display_order','Display Order','required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->data['error']['name']=form_error('name');
			$this->data['error']['url_keyword']=form_error('url_keyword');
			$this->data['error']['category_id']=form_error('category_id');
			$this->data['error']['image']=form_error('image');
			$this->data['error']['meta_title']=form_error('meta_title');
			$this->data['error']['meta_keyword']=form_error('meta_keyword');
			$this->data['error']['meta_desc']=form_error('meta_desc');
			$this->data['error']['is_display_footer']=form_error('is_display_footer');
			$this->data['error']['is_display_home']=form_error('is_display_home');
			$this->data['error']['is_active']=form_error('is_active');
			$this->data['error']['product_code']=form_error('product_code');
			$this->data['error']['product_type']=form_error('product_type');
			$this->data['error']['delivery_time']=form_error('delivery_time');
			$this->data['error']['small_desc']=form_error('small_desc');
			$this->data['error']['display_order']=form_error('display_order');
			$this->data['error']['description']=form_error('description');

			$this->Render_form();
		}
		else
		{
			$data=array(
				'name'=>$formdata['name'],
				'url_keyword'=>$formdata['url_keyword'],
				'category_id'=>$formdata['category_id'],
				'image'=>$this->image_path1,
				'meta_title'=>$formdata['meta_title'],
				'meta_keyword'=>$formdata['meta_keyword'],
				'meta_desc'=>$formdata['meta_desc'],
				'is_display_footer'=>$formdata['is_display_footer'],
				'is_display_home'=>$formdata['is_display_home'],
				'is_active'=>$formdata['is_active'],
				'product_code'=>$formdata['product_code'],
				'product_type'=>$formdata['product_type'],
				'delivery_time'=>$formdata['delivery_time'],
				'small_desc'=>$formdata['small_desc'],
				'display_order'=>$formdata['display_order'],
				'description'=>$formdata['description'],
			);
			if(isset($this->segment[4]))
			{
				$update=$this->My_Model->update_data('product',$data,array('id'=>$this->segment[4]));
				$id=2;
			}
			else
			{
				$this->My_Model->add_data('product',$data);
				$id=1;
			}
			redirect(base_url('Admin/product?id='.$id));
		}
	}
	public function Render_delete()
	{
		if(isset($this->segment[4]))
		{
		$this->My_Model->delete_data('product',array('id'=>$this->segment[4]));
		}
		redirect(base_url('Admin/product?id=3'));
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