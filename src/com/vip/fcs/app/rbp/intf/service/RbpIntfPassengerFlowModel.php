<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\intf\service;

class RbpIntfPassengerFlowModel {
	
	static $_TSPEC;
	public $serialNumber = null;
	public $appSource = null;
	public $mallNo = null;
	public $inNum = null;
	public $shopNumber = null;
	public $countStartTime = null;
	public $countEndTime = null;
	public $isMallFlow = null;
	
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
			'var' => 'inNum'
			),
			5 => array(
			'var' => 'shopNumber'
			),
			6 => array(
			'var' => 'countStartTime'
			),
			7 => array(
			'var' => 'countEndTime'
			),
			8 => array(
			'var' => 'isMallFlow'
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
			
			
			if (isset($vals['inNum'])){
				
				$this->inNum = $vals['inNum'];
			}
			
			
			if (isset($vals['shopNumber'])){
				
				$this->shopNumber = $vals['shopNumber'];
			}
			
			
			if (isset($vals['countStartTime'])){
				
				$this->countStartTime = $vals['countStartTime'];
			}
			
			
			if (isset($vals['countEndTime'])){
				
				$this->countEndTime = $vals['countEndTime'];
			}
			
			
			if (isset($vals['isMallFlow'])){
				
				$this->isMallFlow = $vals['isMallFlow'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpIntfPassengerFlowModel';
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
			
			
			
			
			if ("inNum" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->inNum); 
				
			}
			
			
			
			
			if ("shopNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopNumber);
				
			}
			
			
			
			
			if ("countStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->countStartTime); 
				
			}
			
			
			
			
			if ("countEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->countEndTime); 
				
			}
			
			
			
			
			if ("isMallFlow" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isMallFlow);
				
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
		
		$xfer += $output->writeFieldBegin('inNum');
		$xfer += $output->writeI64($this->inNum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->shopNumber !== null) {
			
			$xfer += $output->writeFieldBegin('shopNumber');
			$xfer += $output->writeString($this->shopNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('countStartTime');
		$xfer += $output->writeI64($this->countStartTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('countEndTime');
		$xfer += $output->writeI64($this->countEndTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isMallFlow !== null) {
			
			$xfer += $output->writeFieldBegin('isMallFlow');
			$xfer += $output->writeString($this->isMallFlow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>