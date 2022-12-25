<?php
class Cms_page extends My_Controller
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
		$fetchdata['fetch']=$this->My_Model->findall('cms_page',array(),3);
		$this->load->view('Admin/cms_page_menage',$fetchdata);
	}

	public function Render_form()
	{
		if(isset($this->segment[4]))
		{
			$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>$this->segment[4]),1);
		}
		//_pre('123');
		$this->load->view('Admin/cms_page_form',$this->data);
	}
	public function Creator_form($formdata)
	{
		
		if(isset($this->segment[4]))
		{
			$this->data['cms_page']=$this->My_Model->findall('cms_page',array('id'=>$this->segment[4]),1);
			//_pre($this->data['cms_page']);
		}

		$this->form_validation->set_rules('page_name','Page Name','required');
		$this->form_validation->set_rules('page_title','Page Title','required');
		$this->form_validation->set_rules('meta_title','Meta Title','required');
		$this->form_validation->set_rules('meta_keyword','Meta Keyword','required');
		$this->form_validation->set_rules('meta_desc','Meta Desc','required');
		$this->form_validation->set_rules('title','Title','required');

		 if($this->form_validation->run()==FALSE)
		 {
		 	$this->data['error']['page_name']=form_error('page_name');
		 	$this->data['error']['page_title']=form_error('page_title');
		 	$this->data['error']['meta_title']=form_error('meta_title');
		 	$this->data['error']['meta_keyword']=form_error('meta_keyword');
		 	$this->data['error']['meta_desc']=form_error('meta_desc');
		 	$this->data['error']['title']=form_error('title');

		 	$this->Render_form();
		 }else{
		 	$data=array(
		 		'page_name'=>$formdata['page_name'],
		 		'page_title'=>$formdata['page_title'],
		 		'meta_title'=>$formdata['meta_title'],
		 		'meta_keyword'=>$formdata['meta_keyword'],
		 		'meta_desc'=>$formdata['meta_desc'],
		 		'page_desc'=>$formdata['page_desc'],
		 		'title'=>$formdata['title'],
		 	);
		 	//_pre($data);
		 	if(isset($this->segment[4]))
		 	{
		 		$update=$this->My_Model->update_data('cms_page',$data,array('id'=>$this->segment[4]));
		 		redirect(base_url('Admin/cms_page/?id=1'));
		 	}
		 	
		}

	}
}	
