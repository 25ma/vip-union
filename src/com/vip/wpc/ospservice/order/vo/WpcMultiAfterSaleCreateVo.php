<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcMultiAfterSaleCreateVo {
	
	static $_TSPEC;
	public $returnId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2101 => array(
			'var' => 'returnId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnId'])){
				
				$this->returnId = $vals['returnId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcMultiAfterSaleCreateVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnId);
				
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
		
		if($this->returnId !== null) {
			
			$xfer += $output->writeFieldBegin('returnId');
			$xfer += $output->writeString($this->returnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>