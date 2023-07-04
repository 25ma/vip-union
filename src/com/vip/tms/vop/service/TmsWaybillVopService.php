<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;
interface TmsWaybillVopServiceIf{
	
	
	public function cancel_waybill(\com\vip\tms\vop\service\WaybillCancelRequest $waybill_cancel_request);
	
	public function create_waybill(\com\vip\tms\vop\service\WaybillCreateRequest $waybill_create_request);
	
	public function healthCheck();
	
	public function modify_waybill(\com\vip\tms\vop\service\WaybillModifyRequest $waybill_modify_request);
	
	public function query_store_send_info(\com\vip\tms\vop\service\StoreSendInfoQueryRequest $store_send_info_query_request);
	
	public function query_waybill(\com\vip\tms\vop\service\WaybillQueryRequest $waybill_query_request);
	
	public function query_waybill_for_carrier(\com\vip\tms\vop\service\WaybillQueryRequest $waybill_query_request);
	
	public function query_waybill_product_info(\com\vip\tms\vop\service\WaybillProductInfoQueryRequest $tms_waybill_service_query_request);
	
	public function receive_routing_code(\com\vip\tms\vop\service\RoutingCodeReceiveRequest $routing_code_receive_request);
	
}

class _TmsWaybillVopServiceClient extends \Osp\Base\OspStub implements \com\vip\tms\vop\service\TmsWaybillVopServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.tms.vop.service.TmsWaybillVopService", "1.0.0");
	}
	
	
	public function cancel_waybill(\com\vip\tms\vop\service\WaybillCancelRequest $waybill_cancel_request){
		
		$this->send_cancel_waybill( $waybill_cancel_request);
		return $this->recv_cancel_waybill();
	}
	
	public function send_cancel_waybill(\com\vip\tms\vop\service\WaybillCancelRequest $waybill_cancel_request){
		
		$this->initInvocation("cancel_waybill");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_cancel_waybill_args();
		
		$args->waybill_cancel_request = $waybill_cancel_request;
		
		$this->send_base($args);
	}
	
	public function recv_cancel_waybill(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_cancel_waybill_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function create_waybill(\com\vip\tms\vop\service\WaybillCreateRequest $waybill_create_request){
		
		$this->send_create_waybill( $waybill_create_request);
		return $this->recv_create_waybill();
	}
	
	public function send_create_waybill(\com\vip\tms\vop\service\WaybillCreateRequest $waybill_create_request){
		
		$this->initInvocation("create_waybill");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_create_waybill_args();
		
		$args->waybill_create_request = $waybill_create_request;
		
		$this->send_base($args);
	}
	
	public function recv_create_waybill(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_create_waybill_result();
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
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function modify_waybill(\com\vip\tms\vop\service\WaybillModifyRequest $waybill_modify_request){
		
		$this->send_modify_waybill( $waybill_modify_request);
		return $this->recv_modify_waybill();
	}
	
	public function send_modify_waybill(\com\vip\tms\vop\service\WaybillModifyRequest $waybill_modify_request){
		
		$this->initInvocation("modify_waybill");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_modify_waybill_args();
		
		$args->waybill_modify_request = $waybill_modify_request;
		
		$this->send_base($args);
	}
	
	public function recv_modify_waybill(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_modify_waybill_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function query_store_send_info(\com\vip\tms\vop\service\StoreSendInfoQueryRequest $store_send_info_query_request){
		
		$this->send_query_store_send_info( $store_send_info_query_request);
		return $this->recv_query_store_send_info();
	}
	
	public function send_query_store_send_info(\com\vip\tms\vop\service\StoreSendInfoQueryRequest $store_send_info_query_request){
		
		$this->initInvocation("query_store_send_info");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_query_store_send_info_args();
		
		$args->store_send_info_query_request = $store_send_info_query_request;
		
		$this->send_base($args);
	}
	
	public function recv_query_store_send_info(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_query_store_send_info_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function query_waybill(\com\vip\tms\vop\service\WaybillQueryRequest $waybill_query_request){
		
		$this->send_query_waybill( $waybill_query_request);
		return $this->recv_query_waybill();
	}
	
	public function send_query_waybill(\com\vip\tms\vop\service\WaybillQueryRequest $waybill_query_request){
		
		$this->initInvocation("query_waybill");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_query_waybill_args();
		
		$args->waybill_query_request = $waybill_query_request;
		
		$this->send_base($args);
	}
	
	public function recv_query_waybill(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_query_waybill_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function query_waybill_for_carrier(\com\vip\tms\vop\service\WaybillQueryRequest $waybill_query_request){
		
		$this->send_query_waybill_for_carrier( $waybill_query_request);
		return $this->recv_query_waybill_for_carrier();
	}
	
	public function send_query_waybill_for_carrier(\com\vip\tms\vop\service\WaybillQueryRequest $waybill_query_request){
		
		$this->initInvocation("query_waybill_for_carrier");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_query_waybill_for_carrier_args();
		
		$args->waybill_query_request = $waybill_query_request;
		
		$this->send_base($args);
	}
	
	public function recv_query_waybill_for_carrier(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_query_waybill_for_carrier_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function query_waybill_product_info(\com\vip\tms\vop\service\WaybillProductInfoQueryRequest $tms_waybill_service_query_request){
		
		$this->send_query_waybill_product_info( $tms_waybill_service_query_request);
		return $this->recv_query_waybill_product_info();
	}
	
	public function send_query_waybill_product_info(\com\vip\tms\vop\service\WaybillProductInfoQueryRequest $tms_waybill_service_query_request){
		
		$this->initInvocation("query_waybill_product_info");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_query_waybill_product_info_args();
		
		$args->tms_waybill_service_query_request = $tms_waybill_service_query_request;
		
		$this->send_base($args);
	}
	
	public function recv_query_waybill_product_info(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_query_waybill_product_info_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receive_routing_code(\com\vip\tms\vop\service\RoutingCodeReceiveRequest $routing_code_receive_request){
		
		$this->send_receive_routing_code( $routing_code_receive_request);
		return $this->recv_receive_routing_code();
	}
	
	public function send_receive_routing_code(\com\vip\tms\vop\service\RoutingCodeReceiveRequest $routing_code_receive_request){
		
		$this->initInvocation("receive_routing_code");
		$args = new \com\vip\tms\vop\service\TmsWaybillVopService_receive_routing_code_args();
		
		$args->routing_code_receive_request = $routing_code_receive_request;
		
		$this->send_base($args);
	}
	
	public function recv_receive_routing_code(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillVopService_receive_routing_code_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TmsWaybillVopService_cancel_waybill_args {
	
	static $_TSPEC;
	public $waybill_cancel_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_cancel_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_cancel_request'])){
				
				$this->waybill_cancel_request = $vals['waybill_cancel_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_cancel_request = new \com\vip\tms\vop\service\WaybillCancelRequest();
			$this->waybill_cancel_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_cancel_request');
		
		if (!is_object($this->waybill_cancel_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_cancel_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_create_waybill_args {
	
	static $_TSPEC;
	public $waybill_create_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_create_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_create_request'])){
				
				$this->waybill_create_request = $vals['waybill_create_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_create_request = new \com\vip\tms\vop\service\WaybillCreateRequest();
			$this->waybill_create_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_create_request');
		
		if (!is_object($this->waybill_create_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_create_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_healthCheck_args {
	
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




class TmsWaybillVopService_modify_waybill_args {
	
	static $_TSPEC;
	public $waybill_modify_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_modify_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_modify_request'])){
				
				$this->waybill_modify_request = $vals['waybill_modify_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_modify_request = new \com\vip\tms\vop\service\WaybillModifyRequest();
			$this->waybill_modify_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_modify_request');
		
		if (!is_object($this->waybill_modify_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_modify_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_query_store_send_info_args {
	
	static $_TSPEC;
	public $store_send_info_query_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_send_info_query_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_send_info_query_request'])){
				
				$this->store_send_info_query_request = $vals['store_send_info_query_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->store_send_info_query_request = new \com\vip\tms\vop\service\StoreSendInfoQueryRequest();
			$this->store_send_info_query_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('store_send_info_query_request');
		
		if (!is_object($this->store_send_info_query_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->store_send_info_query_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_query_waybill_args {
	
	static $_TSPEC;
	public $waybill_query_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_query_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_query_request'])){
				
				$this->waybill_query_request = $vals['waybill_query_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_query_request = new \com\vip\tms\vop\service\WaybillQueryRequest();
			$this->waybill_query_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_query_request');
		
		if (!is_object($this->waybill_query_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_query_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_query_waybill_for_carrier_args {
	
	static $_TSPEC;
	public $waybill_query_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_query_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_query_request'])){
				
				$this->waybill_query_request = $vals['waybill_query_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_query_request = new \com\vip\tms\vop\service\WaybillQueryRequest();
			$this->waybill_query_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_query_request');
		
		if (!is_object($this->waybill_query_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_query_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_query_waybill_product_info_args {
	
	static $_TSPEC;
	public $tms_waybill_service_query_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_waybill_service_query_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_waybill_service_query_request'])){
				
				$this->tms_waybill_service_query_request = $vals['tms_waybill_service_query_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tms_waybill_service_query_request = new \com\vip\tms\vop\service\WaybillProductInfoQueryRequest();
			$this->tms_waybill_service_query_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tms_waybill_service_query_request');
		
		if (!is_object($this->tms_waybill_service_query_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tms_waybill_service_query_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_receive_routing_code_args {
	
	static $_TSPEC;
	public $routing_code_receive_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'routing_code_receive_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['routing_code_receive_request'])){
				
				$this->routing_code_receive_request = $vals['routing_code_receive_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->routing_code_receive_request = new \com\vip\tms\vop\service\RoutingCodeReceiveRequest();
			$this->routing_code_receive_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('routing_code_receive_request');
		
		if (!is_object($this->routing_code_receive_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->routing_code_receive_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillVopService_cancel_waybill_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillCancelResponse();
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




class TmsWaybillVopService_create_waybill_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillCreateResponse();
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




class TmsWaybillVopService_healthCheck_result {
	
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




class TmsWaybillVopService_modify_waybill_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillModifyResponse();
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




class TmsWaybillVopService_query_store_send_info_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\StoreSendInfoQueryResponse();
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




class TmsWaybillVopService_query_waybill_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillQueryResponse();
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




class TmsWaybillVopService_query_waybill_for_carrier_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillQueryResponse();
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




class TmsWaybillVopService_query_waybill_product_info_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillProductInfoQueryResponse();
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




class TmsWaybillVopService_receive_routing_code_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\RoutingCodeReceiveResponse();
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