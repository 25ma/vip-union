<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class BrandDetailResponse {
	
	static $_TSPEC;
	public $brandDetail = null;
	public $brandDetailList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandDetail'
			),
			2 => array(
			'var' => 'brandDetailList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandDetail'])){
				
				$this->brandDetail = $vals['brandDetail'];
			}
			
			
			if (isset($vals['brandDetailList'])){
				
				$this->brandDetailList = $vals['brandDetailList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandDetailResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandDetail" == $schemeField){
				
				$needSkip = false;
				
				$this->brandDetail = new \com\vip\adp\api\open\service\BrandDetailModel();
				$this->brandDetail->read($input);
				
			}
			
			
			
			
			if ("brandDetailList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandDetailList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\adp\api\open\service\BrandDetailModel();
						$elem1->read($input);
						
						$this->brandDetailList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->brandDetail !== null) {
			
			$xfer += $output->writeFieldBegin('brandDetail');
			
			if (!is_object($this->brandDetail)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->brandDetail->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandDetailList !== null) {
			
			$xfer += $output->writeFieldBegin('brandDetailList');
			
			if (!is_array($this->brandDetailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandDetailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>