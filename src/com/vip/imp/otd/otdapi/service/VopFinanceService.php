<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\imp\otd\otdapi\service;
interface VopFinanceServiceIf{
	
	
	public function getFinanceRecord( $advertiser_id, $account_type, $start_date, $end_date, $page_index, $page_size);
	
	public function healthCheck();
	
}

class _VopFinanceServiceClient extends \Osp\Base\OspStub implements \com\vip\imp\otd\otdapi\service\VopFinanceServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.imp.otd.otdapi.service.VopFinanceService", "1.0.0");
	}
	
	
	public function getFinanceRecord( $advertiser_id, $account_type, $start_date, $end_date, $page_index, $page_size){
		
		$this->send_getFinanceRecord( $advertiser_id, $account_type, $start_date, $end_date, $page_index, $page_size);
		return $this->recv_getFinanceRecord();
	}
	
	public function send_getFinanceRecord( $advertiser_id, $account_type, $start_date, $end_date, $page_index, $page_size){
		
		$this->initInvocation("getFinanceRecord");
		$args = new \com\vip\imp\otd\otdapi\service\VopFinanceService_getFinanceRecord_args();
		
		$args->advertiser_id = $advertiser_id;
		
		$args->account_type = $account_type;
		
		$args->start_date = $start_date;
		
		$args->end_date = $end_date;
		
		$args->page_index = $page_index;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_getFinanceRecord(){
		
		$result = new \com\vip\imp\otd\otdapi\service\VopFinanceService_getFinanceRecord_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\imp\otd\otdapi\service\VopFinanceService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\imp\otd\otdapi\service\VopFinanceService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VopFinanceService_getFinanceRecord_args {
	
	static $_TSPEC;
	public $advertiser_id = null;
	public $account_type = null;
	public $start_date = null;
	public $end_date = null;
	public $page_index = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'advertiser_id'
			),
			2 => array(
			'var' => 'account_type'
			),
			3 => array(
			'var' => 'start_date'
			),
			4 => array(
			'var' => 'end_date'
			),
			5 => array(
			'var' => 'page_index'
			),
			6 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['advertiser_id'])){
				
				$this->advertiser_id = $vals['advertiser_id'];
			}
			
			
			if (isset($vals['account_type'])){
				
				$this->account_type = $vals['account_type'];
			}
			
			
			if (isset($vals['start_date'])){
				
				$this->start_date = $vals['start_date'];
			}
			
			
			if (isset($vals['end_date'])){
				
				$this->end_date = $vals['end_date'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->advertiser_id);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\imp\otd\otdapi\service\VopAccountType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->account_type = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->start_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->end_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_index); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->advertiser_id !== null) {
			
			$xfer += $output->writeFieldBegin('advertiser_id');
			$xfer += $output->writeString($this->advertiser_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->account_type !== null) {
			
			$xfer += $output->writeFieldBegin('account_type');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopAccountType; 
			$output->writeString($em::$__names[$this->account_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_date');
			$xfer += $output->writeString($this->start_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_date');
			$xfer += $output->writeString($this->end_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VopFinanceService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VopFinanceService_getFinanceRecord_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\imp\otd\otdapi\service\VopFinancesModel();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VopFinanceService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>