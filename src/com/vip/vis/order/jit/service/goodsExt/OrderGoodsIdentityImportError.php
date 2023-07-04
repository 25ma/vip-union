<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\goodsExt;

class OrderGoodsIdentityImportError {
	
	static $_TSPEC;
	public $seq = null;
	public $errMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seq'
			),
			2 => array(
			'var' => 'errMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seq'])){
				
				$this->seq = $vals['seq'];
			}
			
			
			if (isset($vals['errMsg'])){
				
				$this->errMsg = $vals['errMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoodsIdentityImportError';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seq" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->seq); 
				
			}
			
			
			
			
			if ("errMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errMsg);
				
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
		
		$xfer += $output->writeFieldBegin('seq');
		$xfer += $output->writeI32($this->seq);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->errMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errMsg');
			$xfer += $output->writeString($this->errMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>