<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipEffectiveFirstRightsActivity {
	
	static $_TSPEC;
	public $isEffective = null;
	public $svipFirstRightsActivityModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'isEffective'
			),
			2 => array(
			'var' => 'svipFirstRightsActivityModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['isEffective'])){
				
				$this->isEffective = $vals['isEffective'];
			}
			
			
			if (isset($vals['svipFirstRightsActivityModel'])){
				
				$this->svipFirstRightsActivityModel = $vals['svipFirstRightsActivityModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipEffectiveFirstRightsActivity';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("isEffective" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isEffective);
				
			}
			
			
			
			
			if ("svipFirstRightsActivityModel" == $schemeField){
				
				$needSkip = false;
				
				$this->svipFirstRightsActivityModel = new \com\vip\svip\osp\service\SvipFirstRightsActivityModel();
				$this->svipFirstRightsActivityModel->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('isEffective');
		$xfer += $output->writeBool($this->isEffective);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->svipFirstRightsActivityModel !== null) {
			
			$xfer += $output->writeFieldBegin('svipFirstRightsActivityModel');
			
			if (!is_object($this->svipFirstRightsActivityModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->svipFirstRightsActivityModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>