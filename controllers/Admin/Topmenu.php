<?php
class Topmenu extends My_Controller
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
		$fetchdata['fetch']=$this->My_Model->findall('topmenu',array(),3);
		$this->load->view('Admin/topmenu_menage',$fetchdata);
    }
	public function Render_form()
	{
		//_pre('123');
		if(isset($this->segment[4]))
		{
			$this->data['topmenu']=$this->My_Model->findall('topmenu',array('id'=>$this->segment[4]),1);
			//_pre($this->data['topmenu']);
		}
		$this->load->view('Admin/topmenu_form',$this->data);
	}
	public function Creator_form($formdata)
	{
		if(isset($this->segment[4]))
		{
			$this->data['topmenu']=$this->My_Model->findall('topmenu',array('id'=>$this->segment[4]),1);
		}

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('is_active','Is Active','required');
		$this->form_validation->set_rules('display_order','Display Order','required');

		if($this->form_validation->run()== FALSE)
		{
			$this->data['error']['name']=form_error('name');
			$this->data['error']['is_active']=form_error('is_active');
			$this->data['error']['display_order']=form_error('display_order');

			$this->Render_form();
		}
		else
		{
			$data=array(

				'name'=>$formdata['name'],
				'is_active'=>$formdata['is_active'],
				'display_order'=>$formdata['display_order'],
			);
			if(isset($this->segment[4]))
			{
				$update=$this->My_Model->update_data('topmenu',$data,array('id'=>$this->segment[4]));
				$id=2;
			}
			else
			{
				$this->My_Model->add_data('topmenu',$data);
				$id=1;
			}
			redirect(base_url('Admin/topmenu?id='.$id));
		}
	}
	public function Render_delete()
	{
		if(isset($this->segment[4]))
		{
			$this->My_Model->delete_data('topmenu',array('id'=>$this->segment[4]));
		}
		redirect(base_url('Admin/topmenu/?id=3'));
	}
}	
?>