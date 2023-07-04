<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\service;
interface ReturnDiffInterOspServiceIf{
	
	
	public function createReturnDifference(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterParamModel $paramModel);
	
	public function getReturnDiffInterDetailByParams(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterDetailListParamModel $paramModel);
	
	public function getReturnDiffInterListByParams(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterListParamModel $paramModel);
	
	public function healthCheck();
	
	public function summitReturnDifference( $vendor_id, $trans_id, $return_sn);
	
	public function updateReturnDifference( $vendor_id, $rv_difference_no, $status, $transport_no);
	
}

class _ReturnDiffInterOspServiceClient extends \Osp\Base\OspStub implements \com\vip\vis\vreturn\api\service\ReturnDiffInterOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.vreturn.api.service.ReturnDiffInterOspService", "1.0.0");
	}
	
	
	public function createReturnDifference(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterParamModel $paramModel){
		
		$this->send_createReturnDifference( $paramModel);
		return $this->recv_createReturnDifference();
	}
	
	public function send_createReturnDifference(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterParamModel $paramModel){
		
		$this->initInvocation("createReturnDifference");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_createReturnDifference_args();
		
		$args->paramModel = $paramModel;
		
		$this->send_base($args);
	}
	
	public function recv_createReturnDifference(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_createReturnDifference_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnDiffInterDetailByParams(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterDetailListParamModel $paramModel){
		
		$this->send_getReturnDiffInterDetailByParams( $paramModel);
		return $this->recv_getReturnDiffInterDetailByParams();
	}
	
	public function send_getReturnDiffInterDetailByParams(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterDetailListParamModel $paramModel){
		
		$this->initInvocation("getReturnDiffInterDetailByParams");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_getReturnDiffInterDetailByParams_args();
		
		$args->paramModel = $paramModel;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnDiffInterDetailByParams(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_getReturnDiffInterDetailByParams_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnDiffInterListByParams(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterListParamModel $paramModel){
		
		$this->send_getReturnDiffInterListByParams( $paramModel);
		return $this->recv_getReturnDiffInterListByParams();
	}
	
	public function send_getReturnDiffInterListByParams(\com\vip\vis\vreturn\api\vo\request\ReturnDiffInterListParamModel $paramModel){
		
		$this->initInvocation("getReturnDiffInterListByParams");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_getReturnDiffInterListByParams_args();
		
		$args->paramModel = $paramModel;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnDiffInterListByParams(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_getReturnDiffInterListByParams_result();
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
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function summitReturnDifference( $vendor_id, $trans_id, $return_sn){
		
		$this->send_summitReturnDifference( $vendor_id, $trans_id, $return_sn);
		return $this->recv_summitReturnDifference();
	}
	
	public function send_summitReturnDifference( $vendor_id, $trans_id, $return_sn){
		
		$this->initInvocation("summitReturnDifference");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_summitReturnDifference_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->trans_id = $trans_id;
		
		$args->return_sn = $return_sn;
		
		$this->send_base($args);
	}
	
	public function recv_summitReturnDifference(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_summitReturnDifference_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateReturnDifference( $vendor_id, $rv_difference_no, $status, $transport_no){
		
		$this->send_updateReturnDifference( $vendor_id, $rv_difference_no, $status, $transport_no);
		return $this->recv_updateReturnDifference();
	}
	
	public function send_updateReturnDifference( $vendor_id, $rv_difference_no, $status, $transport_no){
		
		$this->initInvocation("updateReturnDifference");
		$args = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_updateReturnDifference_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->rv_difference_no = $rv_difference_no;
		
		$args->status = $status;
		
		$args->transport_no = $transport_no;
		
		$this->send_base($args);
	}
	
	public function recv_updateReturnDifference(){
		
		$result = new \com\vip\vis\vreturn\api\service\ReturnDiffInterOspService_updateReturnDifference_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ReturnDiffInterOspService_createReturnDifference_args {
	
	static $_TSPEC;
	public $paramModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'paramModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['paramModel'])){
				
				$this->paramModel = $vals['paramModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->paramModel = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffInterParamModel();
			$this->paramModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('paramModel');
		
		if (!is_object($this->paramModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->paramModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffInterOspService_getReturnDiffInterDetailByParams_args {
	
	static $_TSPEC;
	public $paramModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'paramModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['paramModel'])){
				
				$this->paramModel = $vals['paramModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->paramModel = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffInterDetailListParamModel();
			$this->paramModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('paramModel');
		
		if (!is_object($this->paramModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->paramModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffInterOspService_getReturnDiffInterListByParams_args {
	
	static $_TSPEC;
	public $paramModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'paramModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['paramModel'])){
				
				$this->paramModel = $vals['paramModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->paramModel = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffInterListParamModel();
			$this->paramModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('paramModel');
		
		if (!is_object($this->paramModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->paramModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffInterOspService_healthCheck_args {
	
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




class ReturnDiffInterOspService_summitReturnDifference_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $trans_id = null;
	public $return_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'trans_id'
			),
			3 => array(
			'var' => 'return_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->trans_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->return_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeString($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffInterOspService_updateReturnDifference_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $rv_difference_no = null;
	public $status = null;
	public $transport_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'rv_difference_no'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'transport_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['rv_difference_no'])){
				
				$this->rv_difference_no = $vals['rv_difference_no'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->rv_difference_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->status); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transport_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rv_difference_no');
		$xfer += $output->writeString($this->rv_difference_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReturnDiffInterOspService_createReturnDifference_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterResponseModel();
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




class ReturnDiffInterOspService_getReturnDiffInterDetailByParams_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterDetailResult();
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




class ReturnDiffInterOspService_getReturnDiffInterListByParams_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterListResult();
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




class ReturnDiffInterOspService_healthCheck_result {
	
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




class ReturnDiffInterOspService_summitReturnDifference_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterResponseModel();
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




class ReturnDiffInterOspService_updateReturnDifference_result {
	
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
			
			
			$this->success = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterResponseModel();
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