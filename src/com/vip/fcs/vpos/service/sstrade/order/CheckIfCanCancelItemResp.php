<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\sstrade\order;

class CheckIfCanCancelItemResp {
	
	static $_TSPEC;
	public $orderNum = null;
	public $skuCode = null;
	public $amount = null;
	public $canCancelSkuNum = null;
	public $applySkuNum = null;
	public $denyMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderNum'
			),
			2 => array(
			'var' => 'skuCode'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'canCancelSkuNum'
			),
			5 => array(
			'var' => 'applySkuNum'
			),
			6 => array(
			'var' => 'denyMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['skuCode'])){
				
				$this->skuCode = $vals['skuCode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['canCancelSkuNum'])){
				
				$this->canCancelSkuNum = $vals['canCancelSkuNum'];
			}
			
			
			if (isset($vals['applySkuNum'])){
				
				$this->applySkuNum = $vals['applySkuNum'];
			}
			
			
			if (isset($vals['denyMessage'])){
				
				$this->denyMessage = $vals['denyMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckIfCanCancelItemResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("skuCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuCode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("canCancelSkuNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->canCancelSkuNum); 
				
			}
			
			
			
			
			if ("applySkuNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->applySkuNum); 
				
			}
			
			
			
			
			if ("denyMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->denyMessage);
				
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
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuCode !== null) {
			
			$xfer += $output->writeFieldBegin('skuCode');
			$xfer += $output->writeString($this->skuCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canCancelSkuNum !== null) {
			
			$xfer += $output->writeFieldBegin('canCancelSkuNum');
			$xfer += $output->writeI32($this->canCancelSkuNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applySkuNum !== null) {
			
			$xfer += $output->writeFieldBegin('applySkuNum');
			$xfer += $output->writeI32($this->applySkuNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->denyMessage !== null) {
			
			$xfer += $output->writeFieldBegin('denyMessage');
			$xfer += $output->writeString($this->denyMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>