<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\act\ug\service;

class CheckInResult {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $act_user_tags = null;
	public $coupons = null;
	public $detailState = null;
	public $groupType = null;
	public $groupId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'act_user_tags'
			),
			4 => array(
			'var' => 'coupons'
			),
			5 => array(
			'var' => 'detailState'
			),
			6 => array(
			'var' => 'groupType'
			),
			7 => array(
			'var' => 'groupId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['act_user_tags'])){
				
				$this->act_user_tags = $vals['act_user_tags'];
			}
			
			
			if (isset($vals['coupons'])){
				
				$this->coupons = $vals['coupons'];
			}
			
			
			if (isset($vals['detailState'])){
				
				$this->detailState = $vals['detailState'];
			}
			
			
			if (isset($vals['groupType'])){
				
				$this->groupType = $vals['groupType'];
			}
			
			
			if (isset($vals['groupId'])){
				
				$this->groupId = $vals['groupId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckInResult';
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
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("act_user_tags" == $schemeField){
				
				$needSkip = false;
				
				$this->act_user_tags = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->act_user_tags[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("coupons" == $schemeField){
				
				$needSkip = false;
				
				$this->coupons = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\osp\act\ug\service\Coupon();
						$elem1->read($input);
						
						$this->coupons[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("detailState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->detailState); 
				
			}
			
			
			
			
			if ("groupType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->groupType); 
				
			}
			
			
			
			
			if ("groupId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupId);
				
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
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->act_user_tags !== null) {
			
			$xfer += $output->writeFieldBegin('act_user_tags');
			
			if (!is_array($this->act_user_tags)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->act_user_tags as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupons !== null) {
			
			$xfer += $output->writeFieldBegin('coupons');
			
			if (!is_array($this->coupons)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->coupons as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailState !== null) {
			
			$xfer += $output->writeFieldBegin('detailState');
			$xfer += $output->writeI32($this->detailState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->groupType !== null) {
			
			$xfer += $output->writeFieldBegin('groupType');
			$xfer += $output->writeI32($this->groupType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->groupId !== null) {
			
			$xfer += $output->writeFieldBegin('groupId');
			$xfer += $output->writeString($this->groupId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>