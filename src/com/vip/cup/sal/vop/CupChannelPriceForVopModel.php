<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupChannelPriceForVopModel {
	
	static $_TSPEC;
	public $distributionPrice = null;
	public $distributionCurrency = null;
	public $suggestRetailPrice = null;
	public $marketPrice = null;
	public $effectiveStartTime = null;
	public $effectiveEndTime = null;
	public $priceTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'distributionPrice'
			),
			2 => array(
			'var' => 'distributionCurrency'
			),
			3 => array(
			'var' => 'suggestRetailPrice'
			),
			4 => array(
			'var' => 'marketPrice'
			),
			5 => array(
			'var' => 'effectiveStartTime'
			),
			6 => array(
			'var' => 'effectiveEndTime'
			),
			7 => array(
			'var' => 'priceTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['distributionPrice'])){
				
				$this->distributionPrice = $vals['distributionPrice'];
			}
			
			
			if (isset($vals['distributionCurrency'])){
				
				$this->distributionCurrency = $vals['distributionCurrency'];
			}
			
			
			if (isset($vals['suggestRetailPrice'])){
				
				$this->suggestRetailPrice = $vals['suggestRetailPrice'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['effectiveStartTime'])){
				
				$this->effectiveStartTime = $vals['effectiveStartTime'];
			}
			
			
			if (isset($vals['effectiveEndTime'])){
				
				$this->effectiveEndTime = $vals['effectiveEndTime'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupChannelPriceForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("distributionPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->distributionPrice);
				
			}
			
			
			
			
			if ("distributionCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->distributionCurrency);
				
			}
			
			
			
			
			if ("suggestRetailPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestRetailPrice);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marketPrice);
				
			}
			
			
			
			
			if ("effectiveStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effectiveStartTime);
				
			}
			
			
			
			
			if ("effectiveEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effectiveEndTime);
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime); 
				
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
		
		if($this->distributionPrice !== null) {
			
			$xfer += $output->writeFieldBegin('distributionPrice');
			$xfer += $output->writeString($this->distributionPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributionCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('distributionCurrency');
			$xfer += $output->writeString($this->distributionCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestRetailPrice !== null) {
			
			$xfer += $output->writeFieldBegin('suggestRetailPrice');
			$xfer += $output->writeString($this->suggestRetailPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeString($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effectiveStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('effectiveStartTime');
			$xfer += $output->writeI64($this->effectiveStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effectiveEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('effectiveEndTime');
			$xfer += $output->writeI64($this->effectiveEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>