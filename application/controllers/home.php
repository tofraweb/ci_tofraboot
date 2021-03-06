<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

    function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['section'] = "books";
      $data['pageTitle'] = 'This the books page';
      $this->load->view('inc/header', $data);
      $this->load->view('bootstrap/frontpage_view', $data);
      $this->load->view('inc/footer');
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }

  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }


}

?>
