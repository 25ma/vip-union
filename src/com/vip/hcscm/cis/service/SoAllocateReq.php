<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SoAllocateReq {
	
	static $_TSPEC;
	public $soNo = null;
	public $modifyType = null;
	public $rdcCode = null;
	public $storeCode = null;
	public $salesChannel = null;
	public $channelSoNo = null;
	public $parentSoNo = null;
	public $payTime = null;
	public $qty = null;
	public $details = null;
	public $confirmTime = null;
	public $orderType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNo'
			),
			2 => array(
			'var' => 'modifyType'
			),
			3 => array(
			'var' => 'rdcCode'
			),
			4 => array(
			'var' => 'storeCode'
			),
			5 => array(
			'var' => 'salesChannel'
			),
			6 => array(
			'var' => 'channelSoNo'
			),
			7 => array(
			'var' => 'parentSoNo'
			),
			8 => array(
			'var' => 'payTime'
			),
			9 => array(
			'var' => 'qty'
			),
			10 => array(
			'var' => 'details'
			),
			11 => array(
			'var' => 'confirmTime'
			),
			12 => array(
			'var' => 'orderType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNo'])){
				
				$this->soNo = $vals['soNo'];
			}
			
			
			if (isset($vals['modifyType'])){
				
				$this->modifyType = $vals['modifyType'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['salesChannel'])){
				
				$this->salesChannel = $vals['salesChannel'];
			}
			
			
			if (isset($vals['channelSoNo'])){
				
				$this->channelSoNo = $vals['channelSoNo'];
			}
			
			
			if (isset($vals['parentSoNo'])){
				
				$this->parentSoNo = $vals['parentSoNo'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
			if (isset($vals['confirmTime'])){
				
				$this->confirmTime = $vals['confirmTime'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SoAllocateReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("soNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->soNo);
				
			}
			
			
			
			
			if ("modifyType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\hcscm\cis\service\SoAllocateModifyTypeEnum::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->modifyType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("salesChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesChannel);
				
			}
			
			
			
			
			if ("channelSoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelSoNo);
				
			}
			
			
			
			
			if ("parentSoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentSoNo);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->qty); 
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\SoAllocateDetail();
						$elem0->read($input);
						
						$this->details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("confirmTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->confirmTime); 
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderType); 
				
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
		
		$xfer += $output->writeFieldBegin('soNo');
		$xfer += $output->writeString($this->soNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('modifyType');
		
		$em = new \com\vip\hcscm\cis\service\SoAllocateModifyTypeEnum; 
		$output->writeString($em::$__names[$this->modifyType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rdcCode');
		$xfer += $output->writeString($this->rdcCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('salesChannel');
		$xfer += $output->writeString($this->salesChannel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->channelSoNo !== null) {
			
			$xfer += $output->writeFieldBegin('channelSoNo');
			$xfer += $output->writeString($this->channelSoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentSoNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentSoNo');
			$xfer += $output->writeString($this->parentSoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI64($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->details !== null) {
			
			$xfer += $output->writeFieldBegin('details');
			
			if (!is_array($this->details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmTime !== null) {
			
			$xfer += $output->writeFieldBegin('confirmTime');
			$xfer += $output->writeI64($this->confirmTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeI32($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>