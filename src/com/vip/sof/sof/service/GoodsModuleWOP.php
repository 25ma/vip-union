<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GoodsModuleWOP {
	
	static $_TSPEC;
	public $pos = null;
	public $good_name = null;
	public $brand_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pos'
			),
			2 => array(
			'var' => 'good_name'
			),
			3 => array(
			'var' => 'brand_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pos'])){
				
				$this->pos = $vals['pos'];
			}
			
			
			if (isset($vals['good_name'])){
				
				$this->good_name = $vals['good_name'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsModuleWOP';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pos" == $schemeField){
				
				$needSkip = false;
				
				$this->pos = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->pos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("good_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_name);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
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
		
		if($this->pos !== null) {
			
			$xfer += $output->writeFieldBegin('pos');
			
			if (!is_array($this->pos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->pos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_name !== null) {
			
			$xfer += $output->writeFieldBegin('good_name');
			$xfer += $output->writeString($this->good_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>