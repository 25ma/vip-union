<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;
interface BillVendorFeeVopServiceIf{
	
	
	public function callback_bill_vendor_fee_info(\com\vip\top\fbs\vop\service\CallbackBillVendorFeeInfoRequest $request);
	
	public function get_bill_vendor_fee_info(\com\vip\top\fbs\vop\service\GetBillVendorFeeInfoRequest $request);
	
	public function get_bill_vendor_fee_info_by_batch(\com\vip\top\fbs\vop\service\GetBillVendorFeeInfoByBatchRequest $request);
	
	public function healthCheck();
	
}

class _BillVendorFeeVopServiceClient extends \Osp\Base\OspStub implements \com\vip\top\fbs\vop\service\BillVendorFeeVopServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.top.fbs.vop.service.BillVendorFeeVopService", "1.0.0");
	}
	
	
	public function callback_bill_vendor_fee_info(\com\vip\top\fbs\vop\service\CallbackBillVendorFeeInfoRequest $request){
		
		$this->send_callback_bill_vendor_fee_info( $request);
		return $this->recv_callback_bill_vendor_fee_info();
	}
	
	public function send_callback_bill_vendor_fee_info(\com\vip\top\fbs\vop\service\CallbackBillVendorFeeInfoRequest $request){
		
		$this->initInvocation("callback_bill_vendor_fee_info");
		$args = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_callback_bill_vendor_fee_info_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_callback_bill_vendor_fee_info(){
		
		$result = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_callback_bill_vendor_fee_info_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function get_bill_vendor_fee_info(\com\vip\top\fbs\vop\service\GetBillVendorFeeInfoRequest $request){
		
		$this->send_get_bill_vendor_fee_info( $request);
		return $this->recv_get_bill_vendor_fee_info();
	}
	
	public function send_get_bill_vendor_fee_info(\com\vip\top\fbs\vop\service\GetBillVendorFeeInfoRequest $request){
		
		$this->initInvocation("get_bill_vendor_fee_info");
		$args = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_get_bill_vendor_fee_info_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_get_bill_vendor_fee_info(){
		
		$result = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_get_bill_vendor_fee_info_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function get_bill_vendor_fee_info_by_batch(\com\vip\top\fbs\vop\service\GetBillVendorFeeInfoByBatchRequest $request){
		
		$this->send_get_bill_vendor_fee_info_by_batch( $request);
		return $this->recv_get_bill_vendor_fee_info_by_batch();
	}
	
	public function send_get_bill_vendor_fee_info_by_batch(\com\vip\top\fbs\vop\service\GetBillVendorFeeInfoByBatchRequest $request){
		
		$this->initInvocation("get_bill_vendor_fee_info_by_batch");
		$args = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_get_bill_vendor_fee_info_by_batch_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_get_bill_vendor_fee_info_by_batch(){
		
		$result = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_get_bill_vendor_fee_info_by_batch_result();
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
		$args = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\top\fbs\vop\service\BillVendorFeeVopService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class BillVendorFeeVopService_callback_bill_vendor_fee_info_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\top\fbs\vop\service\CallbackBillVendorFeeInfoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class BillVendorFeeVopService_get_bill_vendor_fee_info_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\top\fbs\vop\service\GetBillVendorFeeInfoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class BillVendorFeeVopService_get_bill_vendor_fee_info_by_batch_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\top\fbs\vop\service\GetBillVendorFeeInfoByBatchRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class BillVendorFeeVopService_healthCheck_args {
	
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




class BillVendorFeeVopService_callback_bill_vendor_fee_info_result {
	
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
			
			
			$this->success = new \com\vip\top\fbs\vop\service\CallbackBillVendorFeeInfoResponse();
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




class BillVendorFeeVopService_get_bill_vendor_fee_info_result {
	
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
			
			
			$this->success = new \com\vip\top\fbs\vop\service\GetBillVendorFeeInfoResponse();
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




class BillVendorFeeVopService_get_bill_vendor_fee_info_by_batch_result {
	
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
			
			
			$this->success = new \com\vip\top\fbs\vop\service\GetBillVendorFeeInfoResponse();
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




class BillVendorFeeVopService_healthCheck_result {
	
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