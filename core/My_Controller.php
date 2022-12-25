<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public $data   =  [];
    function __construct(){
        parent::__construct();        
        error_reporting(1);
        // date_default_timezone_set('Asia/Kolkata');
        $this->data             = array();
        $this->data['isAdmin']  = false;
        $this->segment          = $this->uri->segment_array();
        $this->data['segment']  = $this->uri->segment_array();  
        $this->image_path1      = '';
        $this->data['topmenu_header']  = $this->My_Model->findall('topmenu',array(),3);
        $this->data['category_header'] = $this->My_Model->findall('category',array(),3);
        $this->data['general']=$this->My_Model->findall('general',array(),1);
        $this->data['product_footer'] = $this->My_Model->findall('product',array('is_active'=>1,'is_display_footer'=>1),3,'','',5);
        $this->data['controller']=$this;
   }    
    public function render($page)
    {
        $this->data['page'] = $page;
        return $this->load->view('front/layout/front.layout.php',$this->data);
    }

    public function topmenu_name($id='')
    {
      $this->data['topmenu']=$this->My_Model->findall('topmenu',array('id'=>$id),1,'',array('id','name'));
     ///_pre($this->data['topmenu']);
      return $this->data['topmenu']['name'];
    }
    public function cate_name($id='')
    {
      $this->data['category']=$this->My_Model->findall('category',array('id'=>$id),1,'',array('id','name'));
      ///_pre($this->data['category']);
      return $this->data['category']['name'];
    }
    public function cat_urlkeyword($id='')
    {
        $this->data['category']=$this->My_Model->findall('category',array('id'=>$id),1,'',array('url_keyword'));
        return $this->data['category']['url_keyword'];
    }
    
}
?>
