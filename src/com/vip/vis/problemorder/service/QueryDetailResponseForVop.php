<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class QueryDetailResponseForVop {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $base_info = null;
	public $detail_info = null;
	public $order_infos = null;
	public $actual_delivery_nos = null;
	public $operate_logs = null;
	public $attachments = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'base_info'
			),
			4 => array(
			'var' => 'detail_info'
			),
			5 => array(
			'var' => 'order_infos'
			),
			6 => array(
			'var' => 'actual_delivery_nos'
			),
			7 => array(
			'var' => 'operate_logs'
			),
			8 => array(
			'var' => 'attachments'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['base_info'])){
				
				$this->base_info = $vals['base_info'];
			}
			
			
			if (isset($vals['detail_info'])){
				
				$this->detail_info = $vals['detail_info'];
			}
			
			
			if (isset($vals['order_infos'])){
				
				$this->order_infos = $vals['order_infos'];
			}
			
			
			if (isset($vals['actual_delivery_nos'])){
				
				$this->actual_delivery_nos = $vals['actual_delivery_nos'];
			}
			
			
			if (isset($vals['operate_logs'])){
				
				$this->operate_logs = $vals['operate_logs'];
			}
			
			
			if (isset($vals['attachments'])){
				
				$this->attachments = $vals['attachments'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryDetailResponseForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("base_info" == $schemeField){
				
				$needSkip = false;
				
				$this->base_info = new \com\vip\vis\problemorder\service\BaseInfoForVop();
				$this->base_info->read($input);
				
			}
			
			
			
			
			if ("detail_info" == $schemeField){
				
				$needSkip = false;
				
				$this->detail_info = new \com\vip\vis\problemorder\service\DetailInfoForVop();
				$this->detail_info->read($input);
				
			}
			
			
			
			
			if ("order_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->order_infos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\problemorder\service\AbnormalReportOrderInfoForVop();
						$elem0->read($input);
						
						$this->order_infos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("actual_delivery_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->actual_delivery_nos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\problemorder\service\ActualDeliveryNoForVop();
						$elem1->read($input);
						
						$this->actual_delivery_nos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("operate_logs" == $schemeField){
				
				$needSkip = false;
				
				$this->operate_logs = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\vis\problemorder\service\OperateLogForVop();
						$elem2->read($input);
						
						$this->operate_logs[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("attachments" == $schemeField){
				
				$needSkip = false;
				
				$this->attachments = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\vis\problemorder\service\AttachmentForVop();
						$elem3->read($input);
						
						$this->attachments[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->base_info !== null) {
			
			$xfer += $output->writeFieldBegin('base_info');
			
			if (!is_object($this->base_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->base_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail_info !== null) {
			
			$xfer += $output->writeFieldBegin('detail_info');
			
			if (!is_object($this->detail_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->detail_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_infos !== null) {
			
			$xfer += $output->writeFieldBegin('order_infos');
			
			if (!is_array($this->order_infos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_infos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_delivery_nos !== null) {
			
			$xfer += $output->writeFieldBegin('actual_delivery_nos');
			
			if (!is_array($this->actual_delivery_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->actual_delivery_nos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_logs !== null) {
			
			$xfer += $output->writeFieldBegin('operate_logs');
			
			if (!is_array($this->operate_logs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->operate_logs as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attachments !== null) {
			
			$xfer += $output->writeFieldBegin('attachments');
			
			if (!is_array($this->attachments)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attachments as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>