<?Php
//birds.php
class Opportunity extends CI_Controller{
  function index(){
    $this->load->view('birds_view');
  }
 
  function GetAllSkills(){
	  $this->load->model('birds_model');
	  $this->birds_model->get_all();
  }
  function opGetDynamicMasterData(){
    $this->load->model('birds_model');
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->birds_model->get_bird($q);
    }
  }
}