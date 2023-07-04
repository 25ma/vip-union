<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\inner\cipher\test;

class Obj {
	
	static $_TSPEC;
	public $a = null;
	public $b = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'a'
			),
			2 => array(
			'var' => 'b'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['a'])){
				
				$this->a = $vals['a'];
			}
			
			
			if (isset($vals['b'])){
				
				$this->b = $vals['b'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Obj';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("a" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->a);
				
			}
			
			
			
			
			if ("b" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b); 
				
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
		
		$xfer += $output->writeFieldBegin('a');
		$xfer += $output->writeString($this->a);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('b');
		$xfer += $output->writeI32($this->b);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>