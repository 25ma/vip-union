<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vipshop\b2c\common\api;

class HttpHeader {
	
	static $_TSPEC;
	public $operation = null;
	public $sourceSys = null;
	public $transId = null;
	public $transTimestamp = null;
	public $operatorName = null;
	public $clientIp = null;
	public $appVersion = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operation'
			),
			2 => array(
			'var' => 'sourceSys'
			),
			3 => array(
			'var' => 'transId'
			),
			4 => array(
			'var' => 'transTimestamp'
			),
			5 => array(
			'var' => 'operatorName'
			),
			6 => array(
			'var' => 'clientIp'
			),
			7 => array(
			'var' => 'appVersion'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operation'])){
				
				$this->operation = $vals['operation'];
			}
			
			
			if (isset($vals['sourceSys'])){
				
				$this->sourceSys = $vals['sourceSys'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['transTimestamp'])){
				
				$this->transTimestamp = $vals['transTimestamp'];
			}
			
			
			if (isset($vals['operatorName'])){
				
				$this->operatorName = $vals['operatorName'];
			}
			
			
			if (isset($vals['clientIp'])){
				
				$this->clientIp = $vals['clientIp'];
			}
			
			
			if (isset($vals['appVersion'])){
				
				$this->appVersion = $vals['appVersion'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HttpHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("operation" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operation);
				
			}
			
			
			
			
			if ("sourceSys" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceSys);
				
			}
			
			
			
			
			if ("transId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transId);
				
			}
			
			
			
			
			if ("transTimestamp" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTimestamp); 
				
			}
			
			
			
			
			if ("operatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorName);
				
			}
			
			
			
			
			if ("clientIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientIp);
				
			}
			
			
			
			
			if ("appVersion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appVersion);
				
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
		
		if($this->operation !== null) {
			
			$xfer += $output->writeFieldBegin('operation');
			$xfer += $output->writeString($this->operation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceSys !== null) {
			
			$xfer += $output->writeFieldBegin('sourceSys');
			$xfer += $output->writeString($this->sourceSys);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transTimestamp !== null) {
			
			$xfer += $output->writeFieldBegin('transTimestamp');
			$xfer += $output->writeI64($this->transTimestamp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorName !== null) {
			
			$xfer += $output->writeFieldBegin('operatorName');
			$xfer += $output->writeString($this->operatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientIp !== null) {
			
			$xfer += $output->writeFieldBegin('clientIp');
			$xfer += $output->writeString($this->clientIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appVersion !== null) {
			
			$xfer += $output->writeFieldBegin('appVersion');
			$xfer += $output->writeString($this->appVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>