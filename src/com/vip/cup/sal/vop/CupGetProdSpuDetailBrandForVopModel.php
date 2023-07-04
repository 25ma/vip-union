<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupGetProdSpuDetailBrandForVopModel {
	
	static $_TSPEC;
	public $brandId = null;
	public $brandEnName = null;
	public $brandCnName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandId'
			),
			2 => array(
			'var' => 'brandEnName'
			),
			3 => array(
			'var' => 'brandCnName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandEnName'])){
				
				$this->brandEnName = $vals['brandEnName'];
			}
			
			
			if (isset($vals['brandCnName'])){
				
				$this->brandCnName = $vals['brandCnName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupGetProdSpuDetailBrandForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("brandEnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandEnName);
				
			}
			
			
			
			
			if ("brandCnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCnName);
				
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
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandEnName !== null) {
			
			$xfer += $output->writeFieldBegin('brandEnName');
			$xfer += $output->writeString($this->brandEnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCnName !== null) {
			
			$xfer += $output->writeFieldBegin('brandCnName');
			$xfer += $output->writeString($this->brandCnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>