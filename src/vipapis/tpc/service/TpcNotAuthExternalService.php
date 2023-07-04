<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\tpc\service;
interface TpcNotAuthExternalServiceIf{
	
	
	public function estimatedArrivalTime(\com\vip\tpc\api\model\EstimatedArrivalTimeRequest $estimatedArrivalTimeRequest);
	
	public function fetchReturnedOrderByVendorId(\com\vip\tpc\api\model\FetchReturnedOrderByVendorIdRequest $fetchReturnedOrderByVendorIdRequest);
	
	public function getReturnAddressNoAuth(\com\vip\tpc\api\model\GetReturnAddressNoAuthRequest $request);
	
	public function healthCheck();
	
	public function transportNoInfoDirect(\com\vip\tpc\api\model\TransportInfoDirectRequest $request);
	
	public function uploadCarrierBill(\com\vip\tpc\api\model\UploadCarrierBillRequest $carrierBillCheckRequest);
	
}

class _TpcNotAuthExternalServiceClient extends \Osp\Base\OspStub implements \vipapis\tpc\service\TpcNotAuthExternalServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.tpc.service.TpcNotAuthExternalService", "1.0.0");
	}
	
	
	public function estimatedArrivalTime(\com\vip\tpc\api\model\EstimatedArrivalTimeRequest $estimatedArrivalTimeRequest){
		
		$this->send_estimatedArrivalTime( $estimatedArrivalTimeRequest);
		return $this->recv_estimatedArrivalTime();
	}
	
	public function send_estimatedArrivalTime(\com\vip\tpc\api\model\EstimatedArrivalTimeRequest $estimatedArrivalTimeRequest){
		
		$this->initInvocation("estimatedArrivalTime");
		$args = new \vipapis\tpc\service\TpcNotAuthExternalService_estimatedArrivalTime_args();
		
		$args->estimatedArrivalTimeRequest = $estimatedArrivalTimeRequest;
		
		$this->send_base($args);
	}
	
	public function recv_estimatedArrivalTime(){
		
		$result = new \vipapis\tpc\service\TpcNotAuthExternalService_estimatedArrivalTime_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function fetchReturnedOrderByVendorId(\com\vip\tpc\api\model\FetchReturnedOrderByVendorIdRequest $fetchReturnedOrderByVendorIdRequest){
		
		$this->send_fetchReturnedOrderByVendorId( $fetchReturnedOrderByVendorIdRequest);
		return $this->recv_fetchReturnedOrderByVendorId();
	}
	
	public function send_fetchReturnedOrderByVendorId(\com\vip\tpc\api\model\FetchReturnedOrderByVendorIdRequest $fetchReturnedOrderByVendorIdRequest){
		
		$this->initInvocation("fetchReturnedOrderByVendorId");
		$args = new \vipapis\tpc\service\TpcNotAuthExternalService_fetchReturnedOrderByVendorId_args();
		
		$args->fetchReturnedOrderByVendorIdRequest = $fetchReturnedOrderByVendorIdRequest;
		
		$this->send_base($args);
	}
	
	public function recv_fetchReturnedOrderByVendorId(){
		
		$result = new \vipapis\tpc\service\TpcNotAuthExternalService_fetchReturnedOrderByVendorId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnAddressNoAuth(\com\vip\tpc\api\model\GetReturnAddressNoAuthRequest $request){
		
		$this->send_getReturnAddressNoAuth( $request);
		return $this->recv_getReturnAddressNoAuth();
	}
	
	public function send_getReturnAddressNoAuth(\com\vip\tpc\api\model\GetReturnAddressNoAuthRequest $request){
		
		$this->initInvocation("getReturnAddressNoAuth");
		$args = new \vipapis\tpc\service\TpcNotAuthExternalService_getReturnAddressNoAuth_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnAddressNoAuth(){
		
		$result = new \vipapis\tpc\service\TpcNotAuthExternalService_getReturnAddressNoAuth_result();
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
		$args = new \vipapis\tpc\service\TpcNotAuthExternalService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\tpc\service\TpcNotAuthExternalService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transportNoInfoDirect(\com\vip\tpc\api\model\TransportInfoDirectRequest $request){
		
		$this->send_transportNoInfoDirect( $request);
		return $this->recv_transportNoInfoDirect();
	}
	
	public function send_transportNoInfoDirect(\com\vip\tpc\api\model\TransportInfoDirectRequest $request){
		
		$this->initInvocation("transportNoInfoDirect");
		$args = new \vipapis\tpc\service\TpcNotAuthExternalService_transportNoInfoDirect_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_transportNoInfoDirect(){
		
		$result = new \vipapis\tpc\service\TpcNotAuthExternalService_transportNoInfoDirect_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadCarrierBill(\com\vip\tpc\api\model\UploadCarrierBillRequest $carrierBillCheckRequest){
		
		$this->send_uploadCarrierBill( $carrierBillCheckRequest);
		return $this->recv_uploadCarrierBill();
	}
	
	public function send_uploadCarrierBill(\com\vip\tpc\api\model\UploadCarrierBillRequest $carrierBillCheckRequest){
		
		$this->initInvocation("uploadCarrierBill");
		$args = new \vipapis\tpc\service\TpcNotAuthExternalService_uploadCarrierBill_args();
		
		$args->carrierBillCheckRequest = $carrierBillCheckRequest;
		
		$this->send_base($args);
	}
	
	public function recv_uploadCarrierBill(){
		
		$result = new \vipapis\tpc\service\TpcNotAuthExternalService_uploadCarrierBill_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TpcNotAuthExternalService_estimatedArrivalTime_args {
	
	static $_TSPEC;
	public $estimatedArrivalTimeRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'estimatedArrivalTimeRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['estimatedArrivalTimeRequest'])){
				
				$this->estimatedArrivalTimeRequest = $vals['estimatedArrivalTimeRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->estimatedArrivalTimeRequest = new \com\vip\tpc\api\model\EstimatedArrivalTimeRequest();
			$this->estimatedArrivalTimeRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->estimatedArrivalTimeRequest !== null) {
			
			$xfer += $output->writeFieldBegin('estimatedArrivalTimeRequest');
			
			if (!is_object($this->estimatedArrivalTimeRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->estimatedArrivalTimeRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcNotAuthExternalService_fetchReturnedOrderByVendorId_args {
	
	static $_TSPEC;
	public $fetchReturnedOrderByVendorIdRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fetchReturnedOrderByVendorIdRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fetchReturnedOrderByVendorIdRequest'])){
				
				$this->fetchReturnedOrderByVendorIdRequest = $vals['fetchReturnedOrderByVendorIdRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->fetchReturnedOrderByVendorIdRequest = new \com\vip\tpc\api\model\FetchReturnedOrderByVendorIdRequest();
			$this->fetchReturnedOrderByVendorIdRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->fetchReturnedOrderByVendorIdRequest !== null) {
			
			$xfer += $output->writeFieldBegin('fetchReturnedOrderByVendorIdRequest');
			
			if (!is_object($this->fetchReturnedOrderByVendorIdRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->fetchReturnedOrderByVendorIdRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcNotAuthExternalService_getReturnAddressNoAuth_args {
	
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
			
			
			$this->request = new \com\vip\tpc\api\model\GetReturnAddressNoAuthRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcNotAuthExternalService_healthCheck_args {
	
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




class TpcNotAuthExternalService_transportNoInfoDirect_args {
	
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
			
			
			$this->request = new \com\vip\tpc\api\model\TransportInfoDirectRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcNotAuthExternalService_uploadCarrierBill_args {
	
	static $_TSPEC;
	public $carrierBillCheckRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierBillCheckRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierBillCheckRequest'])){
				
				$this->carrierBillCheckRequest = $vals['carrierBillCheckRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->carrierBillCheckRequest = new \com\vip\tpc\api\model\UploadCarrierBillRequest();
			$this->carrierBillCheckRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->carrierBillCheckRequest !== null) {
			
			$xfer += $output->writeFieldBegin('carrierBillCheckRequest');
			
			if (!is_object($this->carrierBillCheckRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->carrierBillCheckRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcNotAuthExternalService_estimatedArrivalTime_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\EstimatedArrivalTimeResponse();
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




class TpcNotAuthExternalService_fetchReturnedOrderByVendorId_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\FetchReturnedOrderByVendorIdResponse();
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




class TpcNotAuthExternalService_getReturnAddressNoAuth_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\GetReturnAddressNoAuthResponse();
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




class TpcNotAuthExternalService_healthCheck_result {
	
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




class TpcNotAuthExternalService_transportNoInfoDirect_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\TransportInfoDirectResponse();
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




class TpcNotAuthExternalService_uploadCarrierBill_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\UploadCarrierBillResponse();
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