<?php 
class Office_environment extends My_Controller
{
	public function index()
	{
		if(count($_POST) > 0)
		{
			$method = 'Creator_'.$this->input->post('action');
			$this->$method($_POST);
		}else
		{
			if(isset($this->segment[3])){
				$method = 'Render_'.str_replace("-","_",$this->segment[3]);
			}else
			{
				$method = "Render_index";
			}
			$this->$method();
		}
	}
	public function Render_index()
	{
		$fetchdata['fetch']=$this->My_Model->findall('office_environment',array(),3);
		$this->load->view('Admin/office_environment_menage',$fetchdata);
	}
	public function Render_form()
	{
		if(isset($this->segment[4]))
		{
			$this->data['office_environment']=$this->My_Model->findall('office_environment',array('id'=>$this->segment[4]),1);
		}
		$this->load->view('Admin/office_environment_form',$this->data);
	}
	public function Creator_form($formdata)
	{
		if(isset($this->segment[4]))
		{
			$this->data['office_environment']=$this->My_Model->findall('office_environment',array('id'=>$this->segment[4]),1);
		}

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('display_order','Display_Order','required');
		$this->form_validation->set_rules('discription','Discription','required');

         if($this->form_validation->run() == FALSE)
         {
         	$this->data['error']['title']=form_error('title');
         	$this->data['error']['display_order']=form_error('display_order');
         	$this->data['error']['discription']=form_error('discription');
            
            $this->Render_form();
        }
        else
        {
        	$data=array(
        		'title'=>$formdata['title'],
        		'display_order'=>$formdata['display_order'],
        		'discription'=>$formdata['discription'],
        	);
        	if(isset($this->segment[4]))
        	{
				$update=$this->My_Model->update_data('office_environment',$data,array('id'=>$this->segment[4]));
				$id=2;
		    }else
		     {
        		$this->My_Model->add_data('office_environment',$data);
        		$id=1;
        	 }
        	redirect(base_url('Admin/office_environment?id='.$id));
        	}
	}
	public function Render_delete()
	{
		if(isset($this->segment[4]))
		{
			$this->My_Model->delete_data('office_environment',array('id'=>$this->segment[4]));
		}
		redirect(base_url('Admin/office_environment?id=3'));
	}
}
?>