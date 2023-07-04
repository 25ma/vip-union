<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class UrlGenRequest {
	
	static $_TSPEC;
	public $targetType = null;
	public $targetValueList = null;
	public $evokeQuickApp = null;
	public $genShortUrl = null;
	public $openId = null;
	public $realCall = null;
	public $platform = null;
	public $adCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'targetType'
			),
			2 => array(
			'var' => 'targetValueList'
			),
			3 => array(
			'var' => 'evokeQuickApp'
			),
			4 => array(
			'var' => 'genShortUrl'
			),
			5 => array(
			'var' => 'openId'
			),
			6 => array(
			'var' => 'realCall'
			),
			7 => array(
			'var' => 'platform'
			),
			8 => array(
			'var' => 'adCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['targetType'])){
				
				$this->targetType = $vals['targetType'];
			}
			
			
			if (isset($vals['targetValueList'])){
				
				$this->targetValueList = $vals['targetValueList'];
			}
			
			
			if (isset($vals['evokeQuickApp'])){
				
				$this->evokeQuickApp = $vals['evokeQuickApp'];
			}
			
			
			if (isset($vals['genShortUrl'])){
				
				$this->genShortUrl = $vals['genShortUrl'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['realCall'])){
				
				$this->realCall = $vals['realCall'];
			}
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
			if (isset($vals['adCode'])){
				
				$this->adCode = $vals['adCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UrlGenRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("targetType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->targetType);
				
			}
			
			
			
			
			if ("targetValueList" == $schemeField){
				
				$needSkip = false;
				
				$this->targetValueList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->targetValueList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("evokeQuickApp" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->evokeQuickApp);
				
			}
			
			
			
			
			if ("genShortUrl" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->genShortUrl);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("realCall" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->realCall);
				
			}
			
			
			
			
			if ("platform" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->platform); 
				
			}
			
			
			
			
			if ("adCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adCode);
				
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
		
		if($this->targetType !== null) {
			
			$xfer += $output->writeFieldBegin('targetType');
			$xfer += $output->writeString($this->targetType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->targetValueList !== null) {
			
			$xfer += $output->writeFieldBegin('targetValueList');
			
			if (!is_array($this->targetValueList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->targetValueList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->evokeQuickApp !== null) {
			
			$xfer += $output->writeFieldBegin('evokeQuickApp');
			$xfer += $output->writeBool($this->evokeQuickApp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->genShortUrl !== null) {
			
			$xfer += $output->writeFieldBegin('genShortUrl');
			$xfer += $output->writeBool($this->genShortUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realCall !== null) {
			
			$xfer += $output->writeFieldBegin('realCall');
			$xfer += $output->writeBool($this->realCall);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platform !== null) {
			
			$xfer += $output->writeFieldBegin('platform');
			$xfer += $output->writeI32($this->platform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adCode !== null) {
			
			$xfer += $output->writeFieldBegin('adCode');
			$xfer += $output->writeString($this->adCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>