<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\ofc\tp\biz\service\deductionorder;
interface ModifyDeductionOrderBizServiceIf{
	
	
	public function healthCheck();
	
	public function notifyDeductionOrderRecycleResult(\com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderRecycleResultReq $req);
	
	public function notifyDeductionOrderReturnRefundResult(\com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderReturnRefundResultReq $req);
	
}

class _ModifyDeductionOrderBizServiceClient extends \Osp\Base\OspStub implements \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.ofc.tp.biz.service.deductionorder.ModifyDeductionOrderBizService", "1.0.26");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function notifyDeductionOrderRecycleResult(\com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderRecycleResultReq $req){
		
		$this->send_notifyDeductionOrderRecycleResult( $req);
		return $this->recv_notifyDeductionOrderRecycleResult();
	}
	
	public function send_notifyDeductionOrderRecycleResult(\com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderRecycleResultReq $req){
		
		$this->initInvocation("notifyDeductionOrderRecycleResult");
		$args = new \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizService_notifyDeductionOrderRecycleResult_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_notifyDeductionOrderRecycleResult(){
		
		$result = new \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizService_notifyDeductionOrderRecycleResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function notifyDeductionOrderReturnRefundResult(\com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderReturnRefundResultReq $req){
		
		$this->send_notifyDeductionOrderReturnRefundResult( $req);
		return $this->recv_notifyDeductionOrderReturnRefundResult();
	}
	
	public function send_notifyDeductionOrderReturnRefundResult(\com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderReturnRefundResultReq $req){
		
		$this->initInvocation("notifyDeductionOrderReturnRefundResult");
		$args = new \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizService_notifyDeductionOrderReturnRefundResult_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_notifyDeductionOrderReturnRefundResult(){
		
		$result = new \com\vip\ofc\tp\biz\service\deductionorder\ModifyDeductionOrderBizService_notifyDeductionOrderReturnRefundResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ModifyDeductionOrderBizService_healthCheck_args {
	
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




class ModifyDeductionOrderBizService_notifyDeductionOrderRecycleResult_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderRecycleResultReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
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




class ModifyDeductionOrderBizService_notifyDeductionOrderReturnRefundResult_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\ofc\tp\biz\service\deductionorder\request\NotifyDeductionOrderReturnRefundResultReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
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




class ModifyDeductionOrderBizService_healthCheck_result {
	
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




class ModifyDeductionOrderBizService_notifyDeductionOrderRecycleResult_result {
	
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
			
			
			$this->success = new \com\vip\ofc\tp\biz\service\deductionorder\response\NotifyDeductionOrderRecycleResultResp();
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




class ModifyDeductionOrderBizService_notifyDeductionOrderReturnRefundResult_result {
	
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
			
			
			$this->success = new \com\vip\ofc\tp\biz\service\deductionorder\response\NotifyDeductionOrderReturnRefundResultResp();
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