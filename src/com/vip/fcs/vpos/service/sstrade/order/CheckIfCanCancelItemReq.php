<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\sstrade\order;

class CheckIfCanCancelItemReq {
	
	static $_TSPEC;
	public $skuCode = null;
	public $applySkuNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuCode'
			),
			2 => array(
			'var' => 'applySkuNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuCode'])){
				
				$this->skuCode = $vals['skuCode'];
			}
			
			
			if (isset($vals['applySkuNum'])){
				
				$this->applySkuNum = $vals['applySkuNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckIfCanCancelItemReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("skuCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuCode);
				
			}
			
			
			
			
			if ("applySkuNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->applySkuNum); 
				
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
		
		if($this->skuCode !== null) {
			
			$xfer += $output->writeFieldBegin('skuCode');
			$xfer += $output->writeString($this->skuCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applySkuNum !== null) {
			
			$xfer += $output->writeFieldBegin('applySkuNum');
			$xfer += $output->writeI32($this->applySkuNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>