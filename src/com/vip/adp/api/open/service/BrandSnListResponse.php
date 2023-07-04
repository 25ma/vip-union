<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class BrandSnListResponse {
	
	static $_TSPEC;
	public $brandSnList = null;
	public $total = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandSnList'
			),
			2 => array(
			'var' => 'total'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandSnList'])){
				
				$this->brandSnList = $vals['brandSnList'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandSnListResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandSnList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandSnList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->brandSnList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
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
		
		if($this->brandSnList !== null) {
			
			$xfer += $output->writeFieldBegin('brandSnList');
			
			if (!is_array($this->brandSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandSnList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>