<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CommonTransportNoResult {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersCode = null;
	public $opResult = null;
	public $orderSn = null;
	public $errorMsg = null;
	public $newTransportNo = null;
	public $newCarriersCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersCode'
			),
			3 => array(
			'var' => 'opResult'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'errorMsg'
			),
			6 => array(
			'var' => 'newTransportNo'
			),
			7 => array(
			'var' => 'newCarriersCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['opResult'])){
				
				$this->opResult = $vals['opResult'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
			if (isset($vals['newTransportNo'])){
				
				$this->newTransportNo = $vals['newTransportNo'];
			}
			
			
			if (isset($vals['newCarriersCode'])){
				
				$this->newCarriersCode = $vals['newCarriersCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CommonTransportNoResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("opResult" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->opResult); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
			}
			
			
			
			
			if ("newTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newTransportNo);
				
			}
			
			
			
			
			if ("newCarriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newCarriersCode);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opResult !== null) {
			
			$xfer += $output->writeFieldBegin('opResult');
			$xfer += $output->writeByte($this->opResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('newTransportNo');
			$xfer += $output->writeString($this->newTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCarriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('newCarriersCode');
			$xfer += $output->writeString($this->newCarriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>