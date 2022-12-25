<?php
class Home extends My_Controller
{
	public function index(){
		$this->data['home_banner']=$this->My_Model->findall('home_banner',array(),1);
		$this->data['product']=$this->My_Model->findall('product',array('is_active'=>1,'is_display_home'=>1),3);
		$this->data['testimonial']=$this->My_Model->findall('testimonial',array(),3);
		$this->data['office_environment']=$this->My_Model->findall('office_environment',array(),3);
		$this->load->view('index',$this->data);
	}
	public function category(){
		$this->data['category']=$this->My_Model->findall('category',array('url_keyword'=>$this->segment[2]),1);
		$this->data['product']=$this->My_Model->findall('product',array('category_id'=>$this->data['category']['id']),3);
		$this->load->view('category',$this->data);
	}
	public function product(){
	 
		$this->data['category']=$this->My_Model->findall('category',array('url_keyword'=>$this->segment[2]),1);
		$this->data['product']=$this->My_Model->findall('product',array('url_keyword'=>$this->segment[3]),1);
		$this->data['product_img']=$this->My_Model->findall('product',array('category_id'=>$this->data['category']['id']),3);
		$this->load->view('product',$this->data);
	}	
	public function about(){
		$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>2),1);
		$this->load->view('about',$this->data);
	}
	public function privacy_policy(){
		$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>3),1);
		$this->load->view('privacy_policy',$this->data);
	}
	public function refund_process(){
		$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>4),1);
		$this->load->view('refund_process',$this->data);
	}
	public function contact(){
		$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>5),1);
		if(isset($_POST['submit']))
		{
			$this->form_validation->set_rules('message','Message','required');
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('subject','Subject','required');
			if($this->form_validation->run()==False)
			{
				$this->data['error']['message']=form_error('message');
				$this->data['error']['name']=form_error('name');
				$this->data['error']['email']=form_error('email');
				$this->data['error']['subject']=form_error('subject');
				$this->load->view('contact',$this->data);
			}
			else
			{
				$from['general']=$this->My_Model->findall('general',array('id'=>1),1,'',array('id','email'));
				$message=$this->input->post('message');
				$name=$this->input->post('name');
				$email=$this->input->post('email');
				$subject=$this->input->post('subject');
				$this->email->from('$from','$name');
				$this->email->to('$email');
				$this->email->subject('$subject');
				$this->email->message('$message');
				if($this->email->send())
				{
					$id=1;
				}
				else
				{
					$id=2;
				}
				redirect(base_url('contact/?id='.$id));
			}
		}else{
			$this->load->view('contact',$this->data);
		}	
	}
	public function inquiry()
	{
		$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>7),1);
		$this->data['product']=$this->My_Model->findall('product',array('id'=>$this->segment[2]),1);
		
		if(isset($_POST['submit']))
		{

			$this->form_validation->set_rules('message','Message','required');
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('subject','Subject','required');

			if($this->form_validation->run()==False)
			{
				$this->data['error']['message']=form_error('message');
				$this->data['error']['name']=form_error('name');
				$this->data['error']['email']=form_error('email');
				$this->data['error']['subject']=form_error('subject');
				$this->load->view('inquiry',$this->data);
			}
			else
			{
				$from['general']=$this->My_Model->findall('general',array('id'=>1),1,'',array('id','email'));
				    $name=$this->input->post("name");
				    $em=$this->input->post("email");
				    $subject=$this->input->post("subject");
				    $message=$this->input->post("message");
			    	$this->email->from('$from','$name');
					$this->email->to('$em');
					$this->email->subject('$subject');
					$this->email->message('$message');
				if($this->email->send())
				{
					$id=1;
				}
				else
				{
					$id=2;
				} 
				redirect(base_url('inquiry').'/'.$this->data['product']['id'].'/'.'?id='.$id);
			}	
		}else{
			$this->load->view('inquiry',$this->data);
		}
	}
}	

?>