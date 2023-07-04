<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\service;
interface VendorReturnConfirmOspServiceIf{
	
	
	public function healthCheck();
	
	public function returnConfirmBySn( $return_sn_list);
	
	public function returnConfirmForVendor(\com\vip\vis\vreturn\api\vo\request\ReturnConfirmParam $returnConfirmParam);
	
	public function saveReturnInputInfo(\com\vip\vis\vreturn\api\vo\request\ReturnInParam $returnInParam);
	
}

class _VendorReturnConfirmOspServiceClient extends \Osp\Base\OspStub implements \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.vreturn.api.service.VendorReturnConfirmOspService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function returnConfirmBySn( $return_sn_list){
		
		$this->send_returnConfirmBySn( $return_sn_list);
		return $this->recv_returnConfirmBySn();
	}
	
	public function send_returnConfirmBySn( $return_sn_list){
		
		$this->initInvocation("returnConfirmBySn");
		$args = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_returnConfirmBySn_args();
		
		$args->return_sn_list = $return_sn_list;
		
		$this->send_base($args);
	}
	
	public function recv_returnConfirmBySn(){
		
		$result = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_returnConfirmBySn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function returnConfirmForVendor(\com\vip\vis\vreturn\api\vo\request\ReturnConfirmParam $returnConfirmParam){
		
		$this->send_returnConfirmForVendor( $returnConfirmParam);
		return $this->recv_returnConfirmForVendor();
	}
	
	public function send_returnConfirmForVendor(\com\vip\vis\vreturn\api\vo\request\ReturnConfirmParam $returnConfirmParam){
		
		$this->initInvocation("returnConfirmForVendor");
		$args = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_returnConfirmForVendor_args();
		
		$args->returnConfirmParam = $returnConfirmParam;
		
		$this->send_base($args);
	}
	
	public function recv_returnConfirmForVendor(){
		
		$result = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_returnConfirmForVendor_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveReturnInputInfo(\com\vip\vis\vreturn\api\vo\request\ReturnInParam $returnInParam){
		
		$this->send_saveReturnInputInfo( $returnInParam);
		return $this->recv_saveReturnInputInfo();
	}
	
	public function send_saveReturnInputInfo(\com\vip\vis\vreturn\api\vo\request\ReturnInParam $returnInParam){
		
		$this->initInvocation("saveReturnInputInfo");
		$args = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_saveReturnInputInfo_args();
		
		$args->returnInParam = $returnInParam;
		
		$this->send_base($args);
	}
	
	public function recv_saveReturnInputInfo(){
		
		$result = new \com\vip\vis\vreturn\api\service\VendorReturnConfirmOspService_saveReturnInputInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VendorReturnConfirmOspService_healthCheck_args {
	
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




class VendorReturnConfirmOspService_returnConfirmBySn_args {
	
	static $_TSPEC;
	public $return_sn_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_sn_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_sn_list'])){
				
				$this->return_sn_list = $vals['return_sn_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->return_sn_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->return_sn_list[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('return_sn_list');
		
		if (!is_array($this->return_sn_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->return_sn_list as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorReturnConfirmOspService_returnConfirmForVendor_args {
	
	static $_TSPEC;
	public $returnConfirmParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnConfirmParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnConfirmParam'])){
				
				$this->returnConfirmParam = $vals['returnConfirmParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->returnConfirmParam = new \com\vip\vis\vreturn\api\vo\request\ReturnConfirmParam();
			$this->returnConfirmParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('returnConfirmParam');
		
		if (!is_object($this->returnConfirmParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->returnConfirmParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorReturnConfirmOspService_saveReturnInputInfo_args {
	
	static $_TSPEC;
	public $returnInParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnInParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnInParam'])){
				
				$this->returnInParam = $vals['returnInParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->returnInParam = new \com\vip\vis\vreturn\api\vo\request\ReturnInParam();
			$this->returnInParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('returnInParam');
		
		if (!is_object($this->returnInParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->returnInParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorReturnConfirmOspService_healthCheck_result {
	
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




class VendorReturnConfirmOspService_returnConfirmBySn_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnConfirmResponseResultModel();
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




class VendorReturnConfirmOspService_returnConfirmForVendor_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnConfirmResultModel();
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




class VendorReturnConfirmOspService_saveReturnInputInfo_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnConfirmResultModel();
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