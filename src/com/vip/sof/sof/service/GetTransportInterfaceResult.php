<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GetTransportInterfaceResult {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersName = null;
	public $carriersCode = null;
	public $stat = null;
	public $receiverProvince = null;
	public $receiverCity = null;
	public $receiverCounty = null;
	public $orderInfoList = null;
	public $packageType = null;
	public $transportNoType = null;
	public $parentTransportNo = null;
	public $state = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersName'
			),
			3 => array(
			'var' => 'carriersCode'
			),
			4 => array(
			'var' => 'stat'
			),
			5 => array(
			'var' => 'receiverProvince'
			),
			6 => array(
			'var' => 'receiverCity'
			),
			7 => array(
			'var' => 'receiverCounty'
			),
			8 => array(
			'var' => 'orderInfoList'
			),
			9 => array(
			'var' => 'packageType'
			),
			10 => array(
			'var' => 'transportNoType'
			),
			11 => array(
			'var' => 'parentTransportNo'
			),
			12 => array(
			'var' => 'state'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['receiverProvince'])){
				
				$this->receiverProvince = $vals['receiverProvince'];
			}
			
			
			if (isset($vals['receiverCity'])){
				
				$this->receiverCity = $vals['receiverCity'];
			}
			
			
			if (isset($vals['receiverCounty'])){
				
				$this->receiverCounty = $vals['receiverCounty'];
			}
			
			
			if (isset($vals['orderInfoList'])){
				
				$this->orderInfoList = $vals['orderInfoList'];
			}
			
			
			if (isset($vals['packageType'])){
				
				$this->packageType = $vals['packageType'];
			}
			
			
			if (isset($vals['transportNoType'])){
				
				$this->transportNoType = $vals['transportNoType'];
			}
			
			
			if (isset($vals['parentTransportNo'])){
				
				$this->parentTransportNo = $vals['parentTransportNo'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTransportInterfaceResult';
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
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stat); 
				
			}
			
			
			
			
			if ("receiverProvince" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverProvince);
				
			}
			
			
			
			
			if ("receiverCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverCity);
				
			}
			
			
			
			
			if ("receiverCounty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverCounty);
				
			}
			
			
			
			
			if ("orderInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderInfoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\GetHebaoOrderResult();
						$elem1->read($input);
						
						$this->orderInfoList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->packageType); 
				
			}
			
			
			
			
			if ("transportNoType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportNoType); 
				
			}
			
			
			
			
			if ("parentTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentTransportNo);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
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
		
		
		if($this->carriersName !== null) {
			
			$xfer += $output->writeFieldBegin('carriersName');
			$xfer += $output->writeString($this->carriersName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeByte($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverProvince !== null) {
			
			$xfer += $output->writeFieldBegin('receiverProvince');
			$xfer += $output->writeString($this->receiverProvince);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverCity !== null) {
			
			$xfer += $output->writeFieldBegin('receiverCity');
			$xfer += $output->writeString($this->receiverCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverCounty !== null) {
			
			$xfer += $output->writeFieldBegin('receiverCounty');
			$xfer += $output->writeString($this->receiverCounty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('orderInfoList');
			
			if (!is_array($this->orderInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageType !== null) {
			
			$xfer += $output->writeFieldBegin('packageType');
			$xfer += $output->writeByte($this->packageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNoType !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoType');
			$xfer += $output->writeByte($this->transportNoType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentTransportNo');
			$xfer += $output->writeString($this->parentTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>