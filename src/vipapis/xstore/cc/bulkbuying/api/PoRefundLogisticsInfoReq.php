<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoRefundLogisticsInfoReq {
	
	static $_TSPEC;
	public $refundNo = null;
	public $logisticsNo = null;
	public $boxQty = null;
	public $prodVolume = null;
	public $prodWeight = null;
	public $carrierType = null;
	public $carrierCode = null;
	public $carrierName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refundNo'
			),
			2 => array(
			'var' => 'logisticsNo'
			),
			3 => array(
			'var' => 'boxQty'
			),
			4 => array(
			'var' => 'prodVolume'
			),
			5 => array(
			'var' => 'prodWeight'
			),
			6 => array(
			'var' => 'carrierType'
			),
			7 => array(
			'var' => 'carrierCode'
			),
			8 => array(
			'var' => 'carrierName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refundNo'])){
				
				$this->refundNo = $vals['refundNo'];
			}
			
			
			if (isset($vals['logisticsNo'])){
				
				$this->logisticsNo = $vals['logisticsNo'];
			}
			
			
			if (isset($vals['boxQty'])){
				
				$this->boxQty = $vals['boxQty'];
			}
			
			
			if (isset($vals['prodVolume'])){
				
				$this->prodVolume = $vals['prodVolume'];
			}
			
			
			if (isset($vals['prodWeight'])){
				
				$this->prodWeight = $vals['prodWeight'];
			}
			
			
			if (isset($vals['carrierType'])){
				
				$this->carrierType = $vals['carrierType'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoRefundLogisticsInfoReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refundNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundNo);
				
			}
			
			
			
			
			if ("logisticsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logisticsNo);
				
			}
			
			
			
			
			if ("boxQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->boxQty); 
				
			}
			
			
			
			
			if ("prodVolume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodVolume);
				
			}
			
			
			
			
			if ("prodWeight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodWeight);
				
			}
			
			
			
			
			if ("carrierType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->carrierType); 
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
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
		
		$xfer += $output->writeFieldBegin('refundNo');
		$xfer += $output->writeString($this->refundNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('logisticsNo');
		$xfer += $output->writeString($this->logisticsNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->boxQty !== null) {
			
			$xfer += $output->writeFieldBegin('boxQty');
			$xfer += $output->writeI32($this->boxQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodVolume !== null) {
			
			$xfer += $output->writeFieldBegin('prodVolume');
			$xfer += $output->writeString($this->prodVolume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodWeight !== null) {
			
			$xfer += $output->writeFieldBegin('prodWeight');
			$xfer += $output->writeString($this->prodWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrierType');
		$xfer += $output->writeByte($this->carrierType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>