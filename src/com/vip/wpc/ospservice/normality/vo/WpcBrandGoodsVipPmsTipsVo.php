<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\normality\vo;

class WpcBrandGoodsVipPmsTipsVo {
	
	static $_TSPEC;
	public $type = null;
	public $typeId = null;
	public $msg = null;
	public $shortMsg = null;
	public $activityNo = null;
	public $activityMainNo = null;
	public $shortMsgList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			3200 => array(
			'var' => 'type'
			),
			3201 => array(
			'var' => 'typeId'
			),
			3202 => array(
			'var' => 'msg'
			),
			3203 => array(
			'var' => 'shortMsg'
			),
			3204 => array(
			'var' => 'activityNo'
			),
			3205 => array(
			'var' => 'activityMainNo'
			),
			3206 => array(
			'var' => 'shortMsgList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['typeId'])){
				
				$this->typeId = $vals['typeId'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['shortMsg'])){
				
				$this->shortMsg = $vals['shortMsg'];
			}
			
			
			if (isset($vals['activityNo'])){
				
				$this->activityNo = $vals['activityNo'];
			}
			
			
			if (isset($vals['activityMainNo'])){
				
				$this->activityMainNo = $vals['activityMainNo'];
			}
			
			
			if (isset($vals['shortMsgList'])){
				
				$this->shortMsgList = $vals['shortMsgList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcBrandGoodsVipPmsTipsVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("typeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->typeId); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("shortMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortMsg);
				
			}
			
			
			
			
			if ("activityNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityNo);
				
			}
			
			
			
			
			if ("activityMainNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityMainNo);
				
			}
			
			
			
			
			if ("shortMsgList" == $schemeField){
				
				$needSkip = false;
				
				$this->shortMsgList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->shortMsgList[$_size0++] = $elem0;
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
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->typeId !== null) {
			
			$xfer += $output->writeFieldBegin('typeId');
			$xfer += $output->writeI32($this->typeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shortMsg !== null) {
			
			$xfer += $output->writeFieldBegin('shortMsg');
			$xfer += $output->writeString($this->shortMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityNo !== null) {
			
			$xfer += $output->writeFieldBegin('activityNo');
			$xfer += $output->writeString($this->activityNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityMainNo !== null) {
			
			$xfer += $output->writeFieldBegin('activityMainNo');
			$xfer += $output->writeString($this->activityMainNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shortMsgList !== null) {
			
			$xfer += $output->writeFieldBegin('shortMsgList');
			
			if (!is_array($this->shortMsgList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shortMsgList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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