<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleAutoRefundHeader {
	
	static $_TSPEC;
	public $orderSn = null;
	public $backSn = null;
	public $transportNo = null;
	public $returnTime = null;
	public $autoRefundTime = null;
	
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
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'returnTime'
			),
			5 => array(
			'var' => 'autoRefundTime'
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
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['returnTime'])){
				
				$this->returnTime = $vals['returnTime'];
			}
			
			
			if (isset($vals['autoRefundTime'])){
				
				$this->autoRefundTime = $vals['autoRefundTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleAutoRefundHeader';
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
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("returnTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnTime);
				
			}
			
			
			
			
			if ("autoRefundTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoRefundTime);
				
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
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnTime');
			$xfer += $output->writeString($this->returnTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefundTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefundTime');
			$xfer += $output->writeString($this->autoRefundTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>