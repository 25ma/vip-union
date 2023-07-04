<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;
interface CuxGlPeriodBalancesServiceIf{
	
	
	public function healthCheck();
	
	public function queryBalancesList( $page, $length, $periodName, $token);
	
}

class _CuxGlPeriodBalancesServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.osp.ebs.gl.service.CuxGlPeriodBalancesService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryBalancesList( $page, $length, $periodName, $token){
		
		$this->send_queryBalancesList( $page, $length, $periodName, $token);
		return $this->recv_queryBalancesList();
	}
	
	public function send_queryBalancesList( $page, $length, $periodName, $token){
		
		$this->initInvocation("queryBalancesList");
		$args = new \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesService_queryBalancesList_args();
		
		$args->page = $page;
		
		$args->length = $length;
		
		$args->periodName = $periodName;
		
		$args->token = $token;
		
		$this->send_base($args);
	}
	
	public function recv_queryBalancesList(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesService_queryBalancesList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class CuxGlPeriodBalancesService_healthCheck_args {
	
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




class CuxGlPeriodBalancesService_queryBalancesList_args {
	
	static $_TSPEC;
	public $page = null;
	public $length = null;
	public $periodName = null;
	public $token = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			2 => array(
			'var' => 'length'
			),
			3 => array(
			'var' => 'periodName'
			),
			4 => array(
			'var' => 'token'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['token'])){
				
				$this->token = $vals['token'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->length); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->periodName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->token);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('length');
		$xfer += $output->writeI32($this->length);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->token !== null) {
			
			$xfer += $output->writeFieldBegin('token');
			$xfer += $output->writeString($this->token);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CuxGlPeriodBalancesService_healthCheck_result {
	
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




class CuxGlPeriodBalancesService_queryBalancesList_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\CuxGlPeriodBalancesResp();
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