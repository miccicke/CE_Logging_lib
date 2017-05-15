<?php
/**
 * CodeIgniter Logging Library
 *
 * Copyright (C) 2012-2017 Salvatore Miccicke <salvator@plan-9.com>
 *
 * @category    Applications
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @copyright   Salvatore Miccicke & Plan-9.net 2012-2017
 * @author      salvatore miccicke <salvator@plan-9.com>
 * @version     1.1
 */

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 
class logging {
	
	// Load CodeIgniter Resources
	protected $CI;
	public function __construct()
    {
        $this->_ci =& get_instance();
		// Load database driver
        $this->_ci->load->database();
        // Load config file
        $this->_ci->load->config('logging');
        $this->_log_table_name = ($this->_ci->config->item('log_table_name')) ? $this->_ci->config->item('log_table_name') : 'logging'; 
	}
	
	// write message to the log file
	public function lwrite($data) {
		$this->_ci->db->insert($this->_log_table_name, $data);
	}
	
}

/* End of file logging.php */

?>