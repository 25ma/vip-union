<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\goods\vo;

class WpcGoodsSizeVO {
	
	static $_TSPEC;
	public $sizeId = null;
	public $name = null;
	public $price = null;
	public $color = null;
	public $sizeIdStr = null;
	public $returnReasonId = null;
	public $returnReasonRemark = null;
	public $reasonList = null;
	public $imageList = null;
	public $returnPrimaryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			5001 => array(
			'var' => 'sizeId'
			),
			5002 => array(
			'var' => 'name'
			),
			5003 => array(
			'var' => 'price'
			),
			5004 => array(
			'var' => 'color'
			),
			5005 => array(
			'var' => 'sizeIdStr'
			),
			5006 => array(
			'var' => 'returnReasonId'
			),
			5007 => array(
			'var' => 'returnReasonRemark'
			),
			5008 => array(
			'var' => 'reasonList'
			),
			5009 => array(
			'var' => 'imageList'
			),
			5010 => array(
			'var' => 'returnPrimaryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['sizeIdStr'])){
				
				$this->sizeIdStr = $vals['sizeIdStr'];
			}
			
			
			if (isset($vals['returnReasonId'])){
				
				$this->returnReasonId = $vals['returnReasonId'];
			}
			
			
			if (isset($vals['returnReasonRemark'])){
				
				$this->returnReasonRemark = $vals['returnReasonRemark'];
			}
			
			
			if (isset($vals['reasonList'])){
				
				$this->reasonList = $vals['reasonList'];
			}
			
			
			if (isset($vals['imageList'])){
				
				$this->imageList = $vals['imageList'];
			}
			
			
			if (isset($vals['returnPrimaryId'])){
				
				$this->returnPrimaryId = $vals['returnPrimaryId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcGoodsSizeVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("sizeIdStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeIdStr);
				
			}
			
			
			
			
			if ("returnReasonId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnReasonId);
				
			}
			
			
			
			
			if ("returnReasonRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnReasonRemark);
				
			}
			
			
			
			
			if ("reasonList" == $schemeField){
				
				$needSkip = false;
				
				$this->reasonList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\order\vo\WpcReturnReasonVO();
						$elem0->read($input);
						
						$this->reasonList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("imageList" == $schemeField){
				
				$needSkip = false;
				
				$this->imageList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->imageList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("returnPrimaryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnPrimaryId);
				
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
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeI64($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeIdStr !== null) {
			
			$xfer += $output->writeFieldBegin('sizeIdStr');
			$xfer += $output->writeString($this->sizeIdStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReasonId !== null) {
			
			$xfer += $output->writeFieldBegin('returnReasonId');
			$xfer += $output->writeString($this->returnReasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReasonRemark !== null) {
			
			$xfer += $output->writeFieldBegin('returnReasonRemark');
			$xfer += $output->writeString($this->returnReasonRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonList !== null) {
			
			$xfer += $output->writeFieldBegin('reasonList');
			
			if (!is_array($this->reasonList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reasonList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageList !== null) {
			
			$xfer += $output->writeFieldBegin('imageList');
			
			if (!is_array($this->imageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->imageList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnPrimaryId !== null) {
			
			$xfer += $output->writeFieldBegin('returnPrimaryId');
			$xfer += $output->writeString($this->returnPrimaryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>