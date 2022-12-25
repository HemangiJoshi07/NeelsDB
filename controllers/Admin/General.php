<?php
class General extends My_Controller
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
	       		$method = "Render_form";
	       		
	       	}
	   		$this->$method();
	        }
	}
	public function Render_form()
	{
		$this->data['general']=$this->My_Model->findall('general',array('id'=>"1"),1);
	
     	$this->load->view('Admin/general_form',$this->data);
	}
	public function Creator_form($formdata)
	{
		$this->form_validation->set_rules('phone_no','Phone No','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('twitter','Twitter','required');
		$this->form_validation->set_rules('facebook','Facebook','required');
		$this->form_validation->set_rules('pinterest','Pinterest','required');
		$this->form_validation->set_rules('footer_text','Footer Text','required');

		 if($this->form_validation->run()==FALSE)
		 {
		 	$this->data['error']['phone_no']=form_error('phone_no');
		 	$this->data['error']['email']=form_error('email');
		 	$this->data['error']['address']=form_error('address');
		 	$this->data['error']['twitter']=form_error('twitter');
		 	$this->data['error']['facebook']=form_error('facebook');
		 	$this->data['error']['pinterest']=form_error('pinterest');
		 	$this->data['error']['footer_text']=form_error('footer_text');

		 	$this->Render_form();
		 }else{
		 	$data=array(
		 		'phone_no'=>$formdata['phone_no'],
		 		'email'=>$formdata['email'],
		 		'address'=>$formdata['address'],
		 		'twitter'=>$formdata['twitter'],
		 		'facebook'=>$formdata['facebook'],
		 		'pinterest'=>$formdata['pinterest'],
		 		'footer_text'=>$formdata['footer_text'],
		 	);
		 	//_pre($data);
		 	$update=$this->My_Model->update_data('general',$data,array('id'=>"1"));
		 	redirect(base_url('Admin/general?id=1'));
		}

	}
}	
