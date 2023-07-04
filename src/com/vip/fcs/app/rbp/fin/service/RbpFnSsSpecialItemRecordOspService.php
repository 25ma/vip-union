<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\fin\service;
interface RbpFnSsSpecialItemRecordOspServiceIf{
	
	
	public function healthCheck();
	
	public function postSpecialItemData(\com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordModel $model);
	
}

class _RbpFnSsSpecialItemRecordOspServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.app.rbp.fin.service.RbpFnSsSpecialItemRecordOspService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function postSpecialItemData(\com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordModel $model){
		
		$this->send_postSpecialItemData( $model);
		return $this->recv_postSpecialItemData();
	}
	
	public function send_postSpecialItemData(\com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordModel $model){
		
		$this->initInvocation("postSpecialItemData");
		$args = new \com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordOspService_postSpecialItemData_args();
		
		$args->model = $model;
		
		$this->send_base($args);
	}
	
	public function recv_postSpecialItemData(){
		
		$result = new \com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordOspService_postSpecialItemData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class RbpFnSsSpecialItemRecordOspService_healthCheck_args {
	
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




class RbpFnSsSpecialItemRecordOspService_postSpecialItemData_args {
	
	static $_TSPEC;
	public $model = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'model'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['model'])){
				
				$this->model = $vals['model'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->model = new \com\vip\fcs\app\rbp\fin\service\RbpFnSsSpecialItemRecordModel();
			$this->model->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('model');
		
		if (!is_object($this->model)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->model->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RbpFnSsSpecialItemRecordOspService_healthCheck_result {
	
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




class RbpFnSsSpecialItemRecordOspService_postSpecialItemData_result {
	
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
			
			
			$this->success = new \com\vip\fcs\app\rbp\fin\service\RbpRespStatusModel();
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