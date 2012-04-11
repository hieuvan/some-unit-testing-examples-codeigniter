<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('Sample_model');
		$this->load->library('unit_test');
	}
	function index()
	{
	}
	function get_string($string='')
	{
		echo $this->unit->run($string, 'is_string');
		$result = $this->unit->result();
		if($result[0]['Result'] == 'Failed')
		{
			echo 'String input required';
		}
		else if($result[0]['Result'] == 'Passed')
		{
			echo 'Passed';
		}
	}
	function get_bool()
	{
		$bool = true;
		echo $this->unit->run($bool, 'is_bool');
		$result = $this->unit->result();
		if($result[0]['Result'] == 'Failed')
		{
			echo 'Boolean input required';
		}
		else if($result[0]['Result'] == 'Passed')
		{
			echo 'Passed';
		}
	}
	function get_int($int='')
	{
		echo $this->unit->run($int, 'is_int');
		$result = $this->unit->result();
		if($result[0]['Result'] == 'Failed')
		{
			echo 'Int input required';
		}
		else if($result[0]['Result'] == 'Passed')
		{
			echo 'Passed';
		}
	}
	function get_numeric($numeric='')
	{
		echo $this->unit->run($numeric, 'is_numeric');
		$result = $this->unit->result();
		if($result[0]['Result'] == 'Failed')
		{
			echo 'Numeric input required';
		}
		else if($result[0]['Result'] == 'Passed')
		{
			echo 'Passed';
		}
	}
	function get_double()
	{
		$double = 9.9;
		echo $this->unit->run($double, 'is_double');
		$result = $this->unit->result();
		if($result[0]['Result'] == 'Failed')
		{
			echo 'Double input required';
		}
		else if($result[0]['Result'] == 'Passed')
		{
			echo 'Passed';
		}
	}
	function get_array($id='')
	{
		$this->get_numeric($id);
		$data = $this->Sample_model->get_array($id);
		echo $this->unit->run($data, 'is_array');
	}
}
