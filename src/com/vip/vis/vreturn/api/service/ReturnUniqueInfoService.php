<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\service;
interface ReturnUniqueInfoServiceIf{
	
	
	public function getReturnItemInfo(\com\vip\vis\vreturn\api\vo\request\ReturnInfoVOPRequestParam $param);
	
	public function healthCheck();
	
}

class _ReturnUniqueInfoServiceClient extends \Osp\Base\OspStub implements \com\vip\vis\vreturn\api\service\ReturnUniqueInfoServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.vreturn.api.service.ReturnUniqueInfoService", "1.0.0");
	}
	
	
	public function getReturnItemInfo(\com\vip\vis\vreturn\api\vo\request\ReturnInfoVOPRequestParam $param){
		
		$this->send_getReturnItemInfo( $param);
		return $this->recv_getReturnItemInfo();
	}
	
	public function send_getReturnItemInfo(\com\vip\vis\vreturn\api\vo\request\ReturnInfoVOPRequestParam $param){
		
		$this->initInvocation("getReturnItemInfo");
		$args = new \com\vip\vis\vreturn\api\service\ReturnUniqueInfoService_getReturnItemInfo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnItemInfo(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnUniqueInfoService_getReturnItemInfo_result();
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
		$args = new \com\vip\vis\vreturn\api\service\ReturnUniqueInfoService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnUniqueInfoService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ReturnUniqueInfoService_getReturnItemInfo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\vreturn\api\vo\request\ReturnInfoVOPRequestParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnUniqueInfoService_healthCheck_args {
	
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




class ReturnUniqueInfoService_getReturnItemInfo_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\VendorReturnUniqueResult();
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




class ReturnUniqueInfoService_healthCheck_result {
	
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