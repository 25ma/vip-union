<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vipshop\b2c\vorder\api;
interface VopCallbackServiceIf{
	
	
	public function QxReChargeCallback(\com\vipshop\b2c\common\api\HttpHeader $requestHeader,\com\vipshop\b2c\vorder\api\request\QxRechargeCallbackReq $req);
	
	public function healthCheck();
	
}

class _VopCallbackServiceClient extends \Osp\Base\OspStub implements \com\vipshop\b2c\vorder\api\VopCallbackServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vipshop.b2c.vorder.api.VopCallbackService", "1.0.0");
	}
	
	
	public function QxReChargeCallback(\com\vipshop\b2c\common\api\HttpHeader $requestHeader,\com\vipshop\b2c\vorder\api\request\QxRechargeCallbackReq $req){
		
		$this->send_QxReChargeCallback( $requestHeader, $req);
		return $this->recv_QxReChargeCallback();
	}
	
	public function send_QxReChargeCallback(\com\vipshop\b2c\common\api\HttpHeader $requestHeader,\com\vipshop\b2c\vorder\api\request\QxRechargeCallbackReq $req){
		
		$this->initInvocation("QxReChargeCallback");
		$args = new \com\vipshop\b2c\vorder\api\VopCallbackService_QxReChargeCallback_args();
		
		$args->requestHeader = $requestHeader;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_QxReChargeCallback(){
		
		$result = new \com\vipshop\b2c\vorder\api\VopCallbackService_QxReChargeCallback_result();
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
		$args = new \com\vipshop\b2c\vorder\api\VopCallbackService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vipshop\b2c\vorder\api\VopCallbackService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VopCallbackService_QxReChargeCallback_args {
	
	static $_TSPEC;
	public $requestHeader = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestHeader'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestHeader'])){
				
				$this->requestHeader = $vals['requestHeader'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->requestHeader = new \com\vipshop\b2c\common\api\HttpHeader();
			$this->requestHeader->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vipshop\b2c\vorder\api\request\QxRechargeCallbackReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->requestHeader !== null) {
			
			$xfer += $output->writeFieldBegin('requestHeader');
			
			if (!is_object($this->requestHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->requestHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VopCallbackService_healthCheck_args {
	
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




class VopCallbackService_QxReChargeCallback_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VopCallbackService_healthCheck_result {
	
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