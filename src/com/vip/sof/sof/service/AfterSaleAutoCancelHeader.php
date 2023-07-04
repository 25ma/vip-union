<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleAutoCancelHeader {
	
	static $_TSPEC;
	public $orderSn = null;
	public $orderTime = null;
	public $cancelTime = null;
	public $receiver = null;
	public $cellphone = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'orderTime'
			),
			3 => array(
			'var' => 'cancelTime'
			),
			4 => array(
			'var' => 'receiver'
			),
			5 => array(
			'var' => 'cellphone'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderTime'])){
				
				$this->orderTime = $vals['orderTime'];
			}
			
			
			if (isset($vals['cancelTime'])){
				
				$this->cancelTime = $vals['cancelTime'];
			}
			
			
			if (isset($vals['receiver'])){
				
				$this->receiver = $vals['receiver'];
			}
			
			
			if (isset($vals['cellphone'])){
				
				$this->cellphone = $vals['cellphone'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleAutoCancelHeader';
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
			
			
			
			
			if ("orderTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderTime);
				
			}
			
			
			
			
			if ("cancelTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelTime);
				
			}
			
			
			
			
			if ("receiver" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver);
				
			}
			
			
			
			
			if ("cellphone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cellphone);
				
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
		
		
		if($this->orderTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeString($this->orderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelTime !== null) {
			
			$xfer += $output->writeFieldBegin('cancelTime');
			$xfer += $output->writeString($this->cancelTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver !== null) {
			
			$xfer += $output->writeFieldBegin('receiver');
			$xfer += $output->writeString($this->receiver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cellphone !== null) {
			
			$xfer += $output->writeFieldBegin('cellphone');
			$xfer += $output->writeString($this->cellphone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>