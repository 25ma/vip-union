<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class RedeliverItem {
	
	static $_TSPEC;
	public $parts_type = null;
	public $amount = null;
	public $desc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'parts_type'
			),
			2 => array(
			'var' => 'amount'
			),
			3 => array(
			'var' => 'desc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parts_type'])){
				
				$this->parts_type = $vals['parts_type'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RedeliverItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("parts_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parts_type);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
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
		
		if($this->parts_type !== null) {
			
			$xfer += $output->writeFieldBegin('parts_type');
			$xfer += $output->writeString($this->parts_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>