<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class VipCardGlobalConfigModel {
	
	static $_TSPEC;
	public $passwordThreshold = null;
	public $upgradeSwitch = null;
	public $cardNumberLimit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'passwordThreshold'
			),
			2 => array(
			'var' => 'upgradeSwitch'
			),
			3 => array(
			'var' => 'cardNumberLimit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['passwordThreshold'])){
				
				$this->passwordThreshold = $vals['passwordThreshold'];
			}
			
			
			if (isset($vals['upgradeSwitch'])){
				
				$this->upgradeSwitch = $vals['upgradeSwitch'];
			}
			
			
			if (isset($vals['cardNumberLimit'])){
				
				$this->cardNumberLimit = $vals['cardNumberLimit'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCardGlobalConfigModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("passwordThreshold" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->passwordThreshold);
				
			}
			
			
			
			
			if ("upgradeSwitch" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->upgradeSwitch); 
				
			}
			
			
			
			
			if ("cardNumberLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cardNumberLimit); 
				
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
		
		$xfer += $output->writeFieldBegin('passwordThreshold');
		$xfer += $output->writeDouble($this->passwordThreshold);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('upgradeSwitch');
		$xfer += $output->writeI32($this->upgradeSwitch);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cardNumberLimit');
		$xfer += $output->writeI32($this->cardNumberLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>