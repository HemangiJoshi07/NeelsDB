<?php 
class Testimonial extends My_Controller
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
	$fetchdata['fetch']=$this->My_Model->findall('testimonial',array(),3);
	$this->load->view('Admin/testimonial_menage',$fetchdata);
	}
	public function Render_form()
	{
		if(isset($this->segment[4]))
		{
			$this->data['testimonial']=$this->My_Model->findall('testimonial',array('id'=>$this->segment[4]),1);
		}
		$this->load->view('Admin/testimonial_form',$this->data);

	}
	public function Creator_form($formdata)
	{
		if(isset($this->segment[4]))
		{
			$this->data['testimonial']=$this->My_Model->findall('testimonial',array('id'=>$this->segment[4]),1);
		}

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('display_order','Display_Order','required');
		$this->form_validation->set_rules('description','Description','required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->data['error']['name'] = form_error('name');
			$this->data['error']['designation'] = form_error('designation');
			$this->data['error']['display_order'] = form_error('display_order');
			$this->data['error']['description'] = form_error('description');
			
			$this->Render_form();
		}
		else
		{
			$data=array(
				'name' => $formdata['name'],
				'designation' => $formdata['designation'],
				'display_order' => $formdata['display_order'],
				'description' => $formdata['description'],
			);

		if(isset($this->segment[4]))
		{
			$update=$this->My_Model->update_data('testimonial',$data,array('id'=>$this->segment[4]));
			$id=2;
		}
		else{

			$this->My_Model->add_data('testimonial',$data);
			$id=1;
		}
			redirect(base_url('Admin/testimonial?id='.$id));
		}	
	}
	public function Render_delete()
	{
		if(isset($this->segment[4]))
		{
			$this->My_Model->delete_data('testimonial',array('id'=>$this->segment[4]));
		}
		redirect(base_url('Admin/testimonial?id=3'));
	}
	
}	
	
	


