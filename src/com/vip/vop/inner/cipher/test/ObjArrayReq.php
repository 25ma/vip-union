<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\inner\cipher\test;

class ObjArrayReq {
	
	static $_TSPEC;
	public $a = null;
	public $objList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'a'
			),
			2 => array(
			'var' => 'objList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['a'])){
				
				$this->a = $vals['a'];
			}
			
			
			if (isset($vals['objList'])){
				
				$this->objList = $vals['objList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ObjArrayReq';
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
			
			
			
			
			if ("objList" == $schemeField){
				
				$needSkip = false;
				
				$this->objList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\inner\cipher\test\Obj();
						$elem1->read($input);
						
						$this->objList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('a');
		$xfer += $output->writeString($this->a);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('objList');
		
		if (!is_array($this->objList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->objList as $iter0){
			
			
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