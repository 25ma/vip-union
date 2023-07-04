<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;
interface ProblemOrderAbnormalReportServiceForVopIf{
	
	
	public function cancelWorkOrderForVop(\com\vip\vis\problemorder\service\CancelWorkOrderRequestForVop $param);
	
	public function createCollectAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxCollectAbnormalRequestForVop $param);
	
	public function createOrderAbnoramlJitForVop(\com\vip\vis\problemorder\service\CreateJitOrderAbnormalRequestForVop $param);
	
	public function createOrderAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxOrderAbnormalRequestForVop $param);
	
	public function createSendGoodsAbnoramlJitForVop(\com\vip\vis\problemorder\service\CreateJitSendGoodsAbnormalRequestForVop $param);
	
	public function createSendGoodsAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxSendGoodsAbnormalRequestForVop $param);
	
	public function healthCheck();
	
	public function listCategory4WorkOrderForVop(\com\vip\vis\problemorder\service\ProblemOrderCategoryParamForVop $param);
	
	public function queryDetailForVop(\com\vip\vis\problemorder\service\QueryDetailRequestForVop $param);
	
	public function queryListForVop(\com\vip\vis\problemorder\service\QueryListRequestForVop $param);
	
}

class _ProblemOrderAbnormalReportServiceForVopClient extends \Osp\Base\OspStub implements \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVopIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.problemorder.service.ProblemOrderAbnormalReportServiceForVop", "1.0.0");
	}
	
	
	public function cancelWorkOrderForVop(\com\vip\vis\problemorder\service\CancelWorkOrderRequestForVop $param){
		
		$this->send_cancelWorkOrderForVop( $param);
		return $this->recv_cancelWorkOrderForVop();
	}
	
	public function send_cancelWorkOrderForVop(\com\vip\vis\problemorder\service\CancelWorkOrderRequestForVop $param){
		
		$this->initInvocation("cancelWorkOrderForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_cancelWorkOrderForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_cancelWorkOrderForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_cancelWorkOrderForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createCollectAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxCollectAbnormalRequestForVop $param){
		
		$this->send_createCollectAbnoramlJitxForVop( $param);
		return $this->recv_createCollectAbnoramlJitxForVop();
	}
	
	public function send_createCollectAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxCollectAbnormalRequestForVop $param){
		
		$this->initInvocation("createCollectAbnoramlJitxForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createCollectAbnoramlJitxForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_createCollectAbnoramlJitxForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createCollectAbnoramlJitxForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createOrderAbnoramlJitForVop(\com\vip\vis\problemorder\service\CreateJitOrderAbnormalRequestForVop $param){
		
		$this->send_createOrderAbnoramlJitForVop( $param);
		return $this->recv_createOrderAbnoramlJitForVop();
	}
	
	public function send_createOrderAbnoramlJitForVop(\com\vip\vis\problemorder\service\CreateJitOrderAbnormalRequestForVop $param){
		
		$this->initInvocation("createOrderAbnoramlJitForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_createOrderAbnoramlJitForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createOrderAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxOrderAbnormalRequestForVop $param){
		
		$this->send_createOrderAbnoramlJitxForVop( $param);
		return $this->recv_createOrderAbnoramlJitxForVop();
	}
	
	public function send_createOrderAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxOrderAbnormalRequestForVop $param){
		
		$this->initInvocation("createOrderAbnoramlJitxForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitxForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_createOrderAbnoramlJitxForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitxForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSendGoodsAbnoramlJitForVop(\com\vip\vis\problemorder\service\CreateJitSendGoodsAbnormalRequestForVop $param){
		
		$this->send_createSendGoodsAbnoramlJitForVop( $param);
		return $this->recv_createSendGoodsAbnoramlJitForVop();
	}
	
	public function send_createSendGoodsAbnoramlJitForVop(\com\vip\vis\problemorder\service\CreateJitSendGoodsAbnormalRequestForVop $param){
		
		$this->initInvocation("createSendGoodsAbnoramlJitForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_createSendGoodsAbnoramlJitForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSendGoodsAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxSendGoodsAbnormalRequestForVop $param){
		
		$this->send_createSendGoodsAbnoramlJitxForVop( $param);
		return $this->recv_createSendGoodsAbnoramlJitxForVop();
	}
	
	public function send_createSendGoodsAbnoramlJitxForVop(\com\vip\vis\problemorder\service\CreateJitxSendGoodsAbnormalRequestForVop $param){
		
		$this->initInvocation("createSendGoodsAbnoramlJitxForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitxForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_createSendGoodsAbnoramlJitxForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitxForVop_result();
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
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listCategory4WorkOrderForVop(\com\vip\vis\problemorder\service\ProblemOrderCategoryParamForVop $param){
		
		$this->send_listCategory4WorkOrderForVop( $param);
		return $this->recv_listCategory4WorkOrderForVop();
	}
	
	public function send_listCategory4WorkOrderForVop(\com\vip\vis\problemorder\service\ProblemOrderCategoryParamForVop $param){
		
		$this->initInvocation("listCategory4WorkOrderForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_listCategory4WorkOrderForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_listCategory4WorkOrderForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_listCategory4WorkOrderForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryDetailForVop(\com\vip\vis\problemorder\service\QueryDetailRequestForVop $param){
		
		$this->send_queryDetailForVop( $param);
		return $this->recv_queryDetailForVop();
	}
	
	public function send_queryDetailForVop(\com\vip\vis\problemorder\service\QueryDetailRequestForVop $param){
		
		$this->initInvocation("queryDetailForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_queryDetailForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_queryDetailForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_queryDetailForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryListForVop(\com\vip\vis\problemorder\service\QueryListRequestForVop $param){
		
		$this->send_queryListForVop( $param);
		return $this->recv_queryListForVop();
	}
	
	public function send_queryListForVop(\com\vip\vis\problemorder\service\QueryListRequestForVop $param){
		
		$this->initInvocation("queryListForVop");
		$args = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_queryListForVop_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_queryListForVop(){
		
		$result = new \com\vip\vis\problemorder\service\ProblemOrderAbnormalReportServiceForVop_queryListForVop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProblemOrderAbnormalReportServiceForVop_cancelWorkOrderForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\CancelWorkOrderRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_createCollectAbnoramlJitxForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\CreateJitxCollectAbnormalRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\CreateJitOrderAbnormalRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitxForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\CreateJitxOrderAbnormalRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\CreateJitSendGoodsAbnormalRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitxForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\CreateJitxSendGoodsAbnormalRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_healthCheck_args {
	
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




class ProblemOrderAbnormalReportServiceForVop_listCategory4WorkOrderForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\ProblemOrderCategoryParamForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_queryDetailForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\QueryDetailRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_queryListForVop_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\vis\problemorder\service\QueryListRequestForVop();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProblemOrderAbnormalReportServiceForVop_cancelWorkOrderForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\GenericResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_createCollectAbnoramlJitxForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\CreateJitxCollectAbnormalResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\CreateJitOrderAbnormalResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_createOrderAbnoramlJitxForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\CreateJitxOrderAbnormalResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\CreateJitSendGoodsAbnormalResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_createSendGoodsAbnoramlJitxForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\CreateJitxSendGoodsAbnormalResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_healthCheck_result {
	
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




class ProblemOrderAbnormalReportServiceForVop_listCategory4WorkOrderForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\ProblemOrderCategoryModelForVopResponse();
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




class ProblemOrderAbnormalReportServiceForVop_queryDetailForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\QueryDetailResponseForVop();
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




class ProblemOrderAbnormalReportServiceForVop_queryListForVop_result {
	
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
			
			
			$this->success = new \com\vip\vis\problemorder\service\QueryListResponseForVop();
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