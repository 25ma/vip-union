<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;
interface OmAfterSaleOrderOspServiceIf{
	
	
	public function healthCheck();
	
	public function orderImport(\com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderModel $orderModel);
	
	public function queryOrderDetail(\com\vip\fcs\osp\om\intfc\service\OmIntOrderInHeaderIdAndOrderNumReqModel $reqModel);
	
}

class _OmAfterSaleOrderOspServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.osp.om.intfc.service.OmAfterSaleOrderOspService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function orderImport(\com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderModel $orderModel){
		
		$this->send_orderImport( $orderModel);
		return $this->recv_orderImport();
	}
	
	public function send_orderImport(\com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderModel $orderModel){
		
		$this->initInvocation("orderImport");
		$args = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspService_orderImport_args();
		
		$args->orderModel = $orderModel;
		
		$this->send_base($args);
	}
	
	public function recv_orderImport(){
		
		$result = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspService_orderImport_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryOrderDetail(\com\vip\fcs\osp\om\intfc\service\OmIntOrderInHeaderIdAndOrderNumReqModel $reqModel){
		
		$this->send_queryOrderDetail( $reqModel);
		return $this->recv_queryOrderDetail();
	}
	
	public function send_queryOrderDetail(\com\vip\fcs\osp\om\intfc\service\OmIntOrderInHeaderIdAndOrderNumReqModel $reqModel){
		
		$this->initInvocation("queryOrderDetail");
		$args = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspService_queryOrderDetail_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_queryOrderDetail(){
		
		$result = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderOspService_queryOrderDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class OmAfterSaleOrderOspService_healthCheck_args {
	
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




class OmAfterSaleOrderOspService_orderImport_args {
	
	static $_TSPEC;
	public $orderModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderModel'])){
				
				$this->orderModel = $vals['orderModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderModel = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderModel();
			$this->orderModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderModel');
		
		if (!is_object($this->orderModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->orderModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmAfterSaleOrderOspService_queryOrderDetail_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\osp\om\intfc\service\OmIntOrderInHeaderIdAndOrderNumReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmAfterSaleOrderOspService_healthCheck_result {
	
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




class OmAfterSaleOrderOspService_orderImport_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\om\intfc\service\GeneralResponse();
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




class OmAfterSaleOrderOspService_queryOrderDetail_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\om\intfc\service\OmAfterSaleOrderDetail();
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