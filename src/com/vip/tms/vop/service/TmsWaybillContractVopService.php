<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;
interface TmsWaybillContractVopServiceIf{
	
	
	public function apply_waybill_contract(\com\vip\tms\vop\service\WaybillContractApplyRequest $waybill_contract_apply_request);
	
	public function cancel_waybill_contract(\com\vip\tms\vop\service\WaybillContractCancelRequest $waybill_contract_cancel_request);
	
	public function complete_waybill_contract(\com\vip\tms\vop\service\WaybillContractCompleteRequest $waybill_contract_complete_request);
	
	public function feedback_waybill_contract(\com\vip\tms\vop\service\WaybillContractFeedbackRequest $waybill_contract_feedback_request);
	
	public function healthCheck();
	
	public function query_waybill_balance(\com\vip\tms\vop\service\WaybillBalanceQueryRequest $waybill_balance_query_request);
	
	public function query_waybill_contract_list(\com\vip\tms\vop\service\WaybillContractQueryRequest $waybill_contract_query_request);
	
}

class _TmsWaybillContractVopServiceClient extends \Osp\Base\OspStub implements \com\vip\tms\vop\service\TmsWaybillContractVopServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.tms.vop.service.TmsWaybillContractVopService", "1.0.0");
	}
	
	
	public function apply_waybill_contract(\com\vip\tms\vop\service\WaybillContractApplyRequest $waybill_contract_apply_request){
		
		$this->send_apply_waybill_contract( $waybill_contract_apply_request);
		return $this->recv_apply_waybill_contract();
	}
	
	public function send_apply_waybill_contract(\com\vip\tms\vop\service\WaybillContractApplyRequest $waybill_contract_apply_request){
		
		$this->initInvocation("apply_waybill_contract");
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_apply_waybill_contract_args();
		
		$args->waybill_contract_apply_request = $waybill_contract_apply_request;
		
		$this->send_base($args);
	}
	
	public function recv_apply_waybill_contract(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_apply_waybill_contract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancel_waybill_contract(\com\vip\tms\vop\service\WaybillContractCancelRequest $waybill_contract_cancel_request){
		
		$this->send_cancel_waybill_contract( $waybill_contract_cancel_request);
		return $this->recv_cancel_waybill_contract();
	}
	
	public function send_cancel_waybill_contract(\com\vip\tms\vop\service\WaybillContractCancelRequest $waybill_contract_cancel_request){
		
		$this->initInvocation("cancel_waybill_contract");
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_cancel_waybill_contract_args();
		
		$args->waybill_contract_cancel_request = $waybill_contract_cancel_request;
		
		$this->send_base($args);
	}
	
	public function recv_cancel_waybill_contract(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_cancel_waybill_contract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function complete_waybill_contract(\com\vip\tms\vop\service\WaybillContractCompleteRequest $waybill_contract_complete_request){
		
		$this->send_complete_waybill_contract( $waybill_contract_complete_request);
		return $this->recv_complete_waybill_contract();
	}
	
	public function send_complete_waybill_contract(\com\vip\tms\vop\service\WaybillContractCompleteRequest $waybill_contract_complete_request){
		
		$this->initInvocation("complete_waybill_contract");
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_complete_waybill_contract_args();
		
		$args->waybill_contract_complete_request = $waybill_contract_complete_request;
		
		$this->send_base($args);
	}
	
	public function recv_complete_waybill_contract(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_complete_waybill_contract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function feedback_waybill_contract(\com\vip\tms\vop\service\WaybillContractFeedbackRequest $waybill_contract_feedback_request){
		
		$this->send_feedback_waybill_contract( $waybill_contract_feedback_request);
		return $this->recv_feedback_waybill_contract();
	}
	
	public function send_feedback_waybill_contract(\com\vip\tms\vop\service\WaybillContractFeedbackRequest $waybill_contract_feedback_request){
		
		$this->initInvocation("feedback_waybill_contract");
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_feedback_waybill_contract_args();
		
		$args->waybill_contract_feedback_request = $waybill_contract_feedback_request;
		
		$this->send_base($args);
	}
	
	public function recv_feedback_waybill_contract(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_feedback_waybill_contract_result();
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
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function query_waybill_balance(\com\vip\tms\vop\service\WaybillBalanceQueryRequest $waybill_balance_query_request){
		
		$this->send_query_waybill_balance( $waybill_balance_query_request);
		return $this->recv_query_waybill_balance();
	}
	
	public function send_query_waybill_balance(\com\vip\tms\vop\service\WaybillBalanceQueryRequest $waybill_balance_query_request){
		
		$this->initInvocation("query_waybill_balance");
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_query_waybill_balance_args();
		
		$args->waybill_balance_query_request = $waybill_balance_query_request;
		
		$this->send_base($args);
	}
	
	public function recv_query_waybill_balance(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_query_waybill_balance_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function query_waybill_contract_list(\com\vip\tms\vop\service\WaybillContractQueryRequest $waybill_contract_query_request){
		
		$this->send_query_waybill_contract_list( $waybill_contract_query_request);
		return $this->recv_query_waybill_contract_list();
	}
	
	public function send_query_waybill_contract_list(\com\vip\tms\vop\service\WaybillContractQueryRequest $waybill_contract_query_request){
		
		$this->initInvocation("query_waybill_contract_list");
		$args = new \com\vip\tms\vop\service\TmsWaybillContractVopService_query_waybill_contract_list_args();
		
		$args->waybill_contract_query_request = $waybill_contract_query_request;
		
		$this->send_base($args);
	}
	
	public function recv_query_waybill_contract_list(){
		
		$result = new \com\vip\tms\vop\service\TmsWaybillContractVopService_query_waybill_contract_list_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TmsWaybillContractVopService_apply_waybill_contract_args {
	
	static $_TSPEC;
	public $waybill_contract_apply_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_contract_apply_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_contract_apply_request'])){
				
				$this->waybill_contract_apply_request = $vals['waybill_contract_apply_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_contract_apply_request = new \com\vip\tms\vop\service\WaybillContractApplyRequest();
			$this->waybill_contract_apply_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_contract_apply_request');
		
		if (!is_object($this->waybill_contract_apply_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_contract_apply_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillContractVopService_cancel_waybill_contract_args {
	
	static $_TSPEC;
	public $waybill_contract_cancel_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_contract_cancel_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_contract_cancel_request'])){
				
				$this->waybill_contract_cancel_request = $vals['waybill_contract_cancel_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_contract_cancel_request = new \com\vip\tms\vop\service\WaybillContractCancelRequest();
			$this->waybill_contract_cancel_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_contract_cancel_request');
		
		if (!is_object($this->waybill_contract_cancel_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_contract_cancel_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillContractVopService_complete_waybill_contract_args {
	
	static $_TSPEC;
	public $waybill_contract_complete_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_contract_complete_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_contract_complete_request'])){
				
				$this->waybill_contract_complete_request = $vals['waybill_contract_complete_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_contract_complete_request = new \com\vip\tms\vop\service\WaybillContractCompleteRequest();
			$this->waybill_contract_complete_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_contract_complete_request');
		
		if (!is_object($this->waybill_contract_complete_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_contract_complete_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillContractVopService_feedback_waybill_contract_args {
	
	static $_TSPEC;
	public $waybill_contract_feedback_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_contract_feedback_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_contract_feedback_request'])){
				
				$this->waybill_contract_feedback_request = $vals['waybill_contract_feedback_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_contract_feedback_request = new \com\vip\tms\vop\service\WaybillContractFeedbackRequest();
			$this->waybill_contract_feedback_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_contract_feedback_request');
		
		if (!is_object($this->waybill_contract_feedback_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_contract_feedback_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillContractVopService_healthCheck_args {
	
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




class TmsWaybillContractVopService_query_waybill_balance_args {
	
	static $_TSPEC;
	public $waybill_balance_query_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_balance_query_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_balance_query_request'])){
				
				$this->waybill_balance_query_request = $vals['waybill_balance_query_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_balance_query_request = new \com\vip\tms\vop\service\WaybillBalanceQueryRequest();
			$this->waybill_balance_query_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_balance_query_request');
		
		if (!is_object($this->waybill_balance_query_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_balance_query_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillContractVopService_query_waybill_contract_list_args {
	
	static $_TSPEC;
	public $waybill_contract_query_request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_contract_query_request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_contract_query_request'])){
				
				$this->waybill_contract_query_request = $vals['waybill_contract_query_request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->waybill_contract_query_request = new \com\vip\tms\vop\service\WaybillContractQueryRequest();
			$this->waybill_contract_query_request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('waybill_contract_query_request');
		
		if (!is_object($this->waybill_contract_query_request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_contract_query_request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TmsWaybillContractVopService_apply_waybill_contract_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\TmsResponseHeader();
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




class TmsWaybillContractVopService_cancel_waybill_contract_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\TmsResponseHeader();
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




class TmsWaybillContractVopService_complete_waybill_contract_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\TmsResponseHeader();
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




class TmsWaybillContractVopService_feedback_waybill_contract_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\TmsResponseHeader();
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




class TmsWaybillContractVopService_healthCheck_result {
	
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




class TmsWaybillContractVopService_query_waybill_balance_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillBalanceQueryResponse();
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




class TmsWaybillContractVopService_query_waybill_contract_list_result {
	
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
			
			
			$this->success = new \com\vip\tms\vop\service\WaybillContractQueryResponse();
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