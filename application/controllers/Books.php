<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function index()
	{
		$this->load->view('booksHomeView');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->output->enable_profiler();
	}

	public function booksHome() { 
		$this->load->view('booksHomeView'); // goes to page 2
	}
	public function booksadd() {
		$this->load->view("addBookAndReviewView.php"); // goes to page 3
	}
	public function bookreview() {
		$this->load->view("bookReviewView.php"); // goes to page 4
	}
	public function userreviews() { 
		$this->load->view("userReviewsView.php");  // goes to page 5
	}

}
