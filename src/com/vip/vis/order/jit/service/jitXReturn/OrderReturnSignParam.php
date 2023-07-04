<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class OrderReturnSignParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $backSn = null;
	public $userTransportNo = null;
	public $sizeSn = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'backSn'
			),
			3 => array(
			'var' => 'userTransportNo'
			),
			4 => array(
			'var' => 'sizeSn'
			),
			5 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['userTransportNo'])){
				
				$this->userTransportNo = $vals['userTransportNo'];
			}
			
			
			if (isset($vals['sizeSn'])){
				
				$this->sizeSn = $vals['sizeSn'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderReturnSignParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("userTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userTransportNo);
				
			}
			
			
			
			
			if ("sizeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeSn);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('userTransportNo');
			$xfer += $output->writeString($this->userTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeSn !== null) {
			
			$xfer += $output->writeFieldBegin('sizeSn');
			$xfer += $output->writeString($this->sizeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>