<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class CarrierTakingAwayGoodsExamineInfoGood {
	
	static $_TSPEC;
	public $good_name = null;
	public $barcode = null;
	public $examineInfos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'good_name'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'examineInfos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['good_name'])){
				
				$this->good_name = $vals['good_name'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['examineInfos'])){
				
				$this->examineInfos = $vals['examineInfos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierTakingAwayGoodsExamineInfoGood';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("good_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_name);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("examineInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->examineInfos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\CarrierTakingAwayGoodsExamineInfo();
						$elem0->read($input);
						
						$this->examineInfos[$_size0++] = $elem0;
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
		
		if($this->good_name !== null) {
			
			$xfer += $output->writeFieldBegin('good_name');
			$xfer += $output->writeString($this->good_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('examineInfos');
		
		if (!is_array($this->examineInfos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->examineInfos as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>