<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\service;
interface ReturnDiffOperateOspServiceIf{
	
	
	public function healthCheck();
	
	public function returnDiffAddSimple(\com\vip\vis\vreturn\api\vo\request\ReturnDiffAddParamModel $returnDiffAddParam);
	
	public function updateDiffTranNo(\com\vip\vis\vreturn\api\vo\request\ReturnDiffUpdateParamModel $updateParamModel);
	
}

class _ReturnDiffOperateOspServiceClient extends \Osp\Base\OspStub implements \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.vreturn.api.service.ReturnDiffOperateOspService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function returnDiffAddSimple(\com\vip\vis\vreturn\api\vo\request\ReturnDiffAddParamModel $returnDiffAddParam){
		
		$this->send_returnDiffAddSimple( $returnDiffAddParam);
		return $this->recv_returnDiffAddSimple();
	}
	
	public function send_returnDiffAddSimple(\com\vip\vis\vreturn\api\vo\request\ReturnDiffAddParamModel $returnDiffAddParam){
		
		$this->initInvocation("returnDiffAddSimple");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspService_returnDiffAddSimple_args();
		
		$args->returnDiffAddParam = $returnDiffAddParam;
		
		$this->send_base($args);
	}
	
	public function recv_returnDiffAddSimple(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspService_returnDiffAddSimple_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateDiffTranNo(\com\vip\vis\vreturn\api\vo\request\ReturnDiffUpdateParamModel $updateParamModel){
		
		$this->send_updateDiffTranNo( $updateParamModel);
		return $this->recv_updateDiffTranNo();
	}
	
	public function send_updateDiffTranNo(\com\vip\vis\vreturn\api\vo\request\ReturnDiffUpdateParamModel $updateParamModel){
		
		$this->initInvocation("updateDiffTranNo");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspService_updateDiffTranNo_args();
		
		$args->updateParamModel = $updateParamModel;
		
		$this->send_base($args);
	}
	
	public function recv_updateDiffTranNo(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffOperateOspService_updateDiffTranNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ReturnDiffOperateOspService_healthCheck_args {
	
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




class ReturnDiffOperateOspService_returnDiffAddSimple_args {
	
	static $_TSPEC;
	public $returnDiffAddParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnDiffAddParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnDiffAddParam'])){
				
				$this->returnDiffAddParam = $vals['returnDiffAddParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->returnDiffAddParam = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffAddParamModel();
			$this->returnDiffAddParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('returnDiffAddParam');
		
		if (!is_object($this->returnDiffAddParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->returnDiffAddParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffOperateOspService_updateDiffTranNo_args {
	
	static $_TSPEC;
	public $updateParamModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateParamModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateParamModel'])){
				
				$this->updateParamModel = $vals['updateParamModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateParamModel = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffUpdateParamModel();
			$this->updateParamModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('updateParamModel');
		
		if (!is_object($this->updateParamModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->updateParamModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffOperateOspService_healthCheck_result {
	
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




class ReturnDiffOperateOspService_returnDiffAddSimple_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffResponseModel();
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




class ReturnDiffOperateOspService_updateDiffTranNo_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffUpdateResultModel();
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