<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\intf\service;

class RbpIntfCarFlowModel {
	
	static $_TSPEC;
	public $serialNumber = null;
	public $appSource = null;
	public $mallNo = null;
	public $carQuantity = null;
	public $parkTime = null;
	public $carNo = null;
	public $channelName = null;
	public $parkType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serialNumber'
			),
			2 => array(
			'var' => 'appSource'
			),
			3 => array(
			'var' => 'mallNo'
			),
			4 => array(
			'var' => 'carQuantity'
			),
			5 => array(
			'var' => 'parkTime'
			),
			6 => array(
			'var' => 'carNo'
			),
			7 => array(
			'var' => 'channelName'
			),
			8 => array(
			'var' => 'parkType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serialNumber'])){
				
				$this->serialNumber = $vals['serialNumber'];
			}
			
			
			if (isset($vals['appSource'])){
				
				$this->appSource = $vals['appSource'];
			}
			
			
			if (isset($vals['mallNo'])){
				
				$this->mallNo = $vals['mallNo'];
			}
			
			
			if (isset($vals['carQuantity'])){
				
				$this->carQuantity = $vals['carQuantity'];
			}
			
			
			if (isset($vals['parkTime'])){
				
				$this->parkTime = $vals['parkTime'];
			}
			
			
			if (isset($vals['carNo'])){
				
				$this->carNo = $vals['carNo'];
			}
			
			
			if (isset($vals['channelName'])){
				
				$this->channelName = $vals['channelName'];
			}
			
			
			if (isset($vals['parkType'])){
				
				$this->parkType = $vals['parkType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpIntfCarFlowModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serialNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNumber);
				
			}
			
			
			
			
			if ("appSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appSource);
				
			}
			
			
			
			
			if ("mallNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mallNo);
				
			}
			
			
			
			
			if ("carQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->carQuantity); 
				
			}
			
			
			
			
			if ("parkTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parkTime); 
				
			}
			
			
			
			
			if ("carNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carNo);
				
			}
			
			
			
			
			if ("channelName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelName);
				
			}
			
			
			
			
			if ("parkType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parkType);
				
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
		
		$xfer += $output->writeFieldBegin('serialNumber');
		$xfer += $output->writeString($this->serialNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appSource');
		$xfer += $output->writeString($this->appSource);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mallNo');
		$xfer += $output->writeString($this->mallNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carQuantity');
		$xfer += $output->writeI64($this->carQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('parkTime');
		$xfer += $output->writeI64($this->parkTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carNo !== null) {
			
			$xfer += $output->writeFieldBegin('carNo');
			$xfer += $output->writeString($this->carNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelName !== null) {
			
			$xfer += $output->writeFieldBegin('channelName');
			$xfer += $output->writeString($this->channelName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('parkType');
		$xfer += $output->writeString($this->parkType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>