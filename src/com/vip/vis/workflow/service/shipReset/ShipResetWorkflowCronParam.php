<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service\shipReset;

class ShipResetWorkflowCronParam {
	
	static $_TSPEC;
	public $appName = null;
	public $count = null;
	public $pushType = null;
	public $retryMaxCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'count'
			),
			3 => array(
			'var' => 'pushType'
			),
			4 => array(
			'var' => 'retryMaxCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['pushType'])){
				
				$this->pushType = $vals['pushType'];
			}
			
			
			if (isset($vals['retryMaxCount'])){
				
				$this->retryMaxCount = $vals['retryMaxCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipResetWorkflowCronParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("pushType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pushType);
				
			}
			
			
			
			
			if ("retryMaxCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->retryMaxCount); 
				
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pushType !== null) {
			
			$xfer += $output->writeFieldBegin('pushType');
			$xfer += $output->writeString($this->pushType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retryMaxCount !== null) {
			
			$xfer += $output->writeFieldBegin('retryMaxCount');
			$xfer += $output->writeI32($this->retryMaxCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>