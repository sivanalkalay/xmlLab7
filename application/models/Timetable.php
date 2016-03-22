<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Timetable extends MY_Model {
    
    protected $xml=null; 
    protected $timetable=null;
  
    protected $days = array();
    protected $periods = array();
    protected $courses = array();
    
    
    
    	public function __construct()
	{
		parent::__construct();
		
		$this->xml = simplexml_load_file(DATAPATH . 'timetable.xml');
		
                foreach ($this->xml->days->day as $day) {
                    foreach ($day->slot as $slot) {
                        
                    $record = array();
                }
                }
                
		
		
		
	}
}

 class Booking extends MY_Model
{
	public $whichday = "";
	public $time = "";
	public $whichcourse = "";
	// Constructor
	public function __construct($detail=null)
	{
		parent::__construct();
		$this->whichday = (String) $detail['whichday'];
		$this->time = (String) $detail['time'];
		$this->whichcourse = (String) $detail['whichcourse'];
	}
}