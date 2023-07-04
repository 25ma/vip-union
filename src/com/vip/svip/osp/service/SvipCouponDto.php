<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipCouponDto {
	
	static $_TSPEC;
	public $code = null;
	public $id = null;
	public $rid = null;
	public $rcode = null;
	public $status = null;
	public $materialList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'id'
			),
			3 => array(
			'var' => 'rid'
			),
			4 => array(
			'var' => 'rcode'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'materialList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['rid'])){
				
				$this->rid = $vals['rid'];
			}
			
			
			if (isset($vals['rcode'])){
				
				$this->rcode = $vals['rcode'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['materialList'])){
				
				$this->materialList = $vals['materialList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipCouponDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("rid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rid); 
				
			}
			
			
			
			
			if ("rcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rcode);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("materialList" == $schemeField){
				
				$needSkip = false;
				
				$this->materialList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\RuleMaterial();
						$elem0->read($input);
						
						$this->materialList[$_size0++] = $elem0;
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rid !== null) {
			
			$xfer += $output->writeFieldBegin('rid');
			$xfer += $output->writeI64($this->rid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rcode !== null) {
			
			$xfer += $output->writeFieldBegin('rcode');
			$xfer += $output->writeString($this->rcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->materialList !== null) {
			
			$xfer += $output->writeFieldBegin('materialList');
			
			if (!is_array($this->materialList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->materialList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>