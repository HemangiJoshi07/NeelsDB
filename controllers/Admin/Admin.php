<?php 
class Admin extends My_Controller
{
	public function index()
	{
		$this->load->view('Admin/index');
	}
	public function login()
	{
		$this->form_validation->set_rules('username','UserName','required');
		$this->form_validation->set_rules('password','PassWord','required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('Admin/index');

		}else{
			if($this->input->post('Submit'))
			{
				
				$data=array("username"=>$this->input->post("username"),
			                "password"=>$this->input->post("password"));
				$result["data"]=$this->My_Model->findAll('admin',$data,2);
				//_pre($result["data"]);
				if($result["data"]==1){
					$this->session->set_userdata('admin_nelsdb',1);
					redirect('Admin/dashboard');
				}else
				{
					$result["id"]="Invalid username and password";
					$this->load->view('Admin/index',$result);
				}
			}
		}
	}	
	public function dashboard()
	{
		$this->data['category']=$this->My_Model->findall('category',array(),2);
		$this->data['product']=$this->My_Model->findall('product',array(),2);
		$this->load->view('Admin/dashboard',$this->data);
	}
	public function logout()
	{
		$this->session->unset_userdata('admin_nelsdb');
		return redirect('Admin');
	}
	public function change_password()
	{
		$this->data['admin']=$this->My_Model->findall('admin',array('password'),1);
		//_pre($this->data['admin']['password']);
		if(isset($_POST['Submit'])){
			$this->form_validation->set_rules('password','Old PassWord','required');
			$this->form_validation->set_rules('pwd','New PassWord','required');
			$this->form_validation->set_rules('cnpwd','Confirm PassWord','required|matches[pwd]');

			if($this->form_validation->run()==FALSE)
			{
				$this->data['error']['password']=form_error('password');
				$this->data['error']['pwd']=form_error('pwd');
				$this->data['error']['cnpwd']=form_error('cnpwd');

				$this->load->view('Admin/change_password',$this->data);
			}
			else{
				if($_POST['password']==$this->data['admin']['password'])
				{
				  	$data=array
				    ('password'=>$this->input->post('pwd'),
				    );
				    $updte=$this->My_Model->update_data('admin',$data,array());
				    $id=2;
				    redirect(base_url('Admin/change_password?id='.$id));
				}
				else{
					$id=1;
					redirect(base_url('Admin/change_password?id='.$id));
				}
			}	
		}else{
			$this->load->view('Admin/change_password',$this->data);
		}
	}
}	 