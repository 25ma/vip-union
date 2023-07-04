<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class RefuseResult {
	
	static $_TSPEC;
	public $refuse_quantity = null;
	public $refuse_reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refuse_quantity'
			),
			2 => array(
			'var' => 'refuse_reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refuse_quantity'])){
				
				$this->refuse_quantity = $vals['refuse_quantity'];
			}
			
			
			if (isset($vals['refuse_reason'])){
				
				$this->refuse_reason = $vals['refuse_reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefuseResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refuse_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refuse_quantity); 
				
			}
			
			
			
			
			if ("refuse_reason" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refuse_reason); 
				
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
		
		$xfer += $output->writeFieldBegin('refuse_quantity');
		$xfer += $output->writeI32($this->refuse_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refuse_reason');
		$xfer += $output->writeI32($this->refuse_reason);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>