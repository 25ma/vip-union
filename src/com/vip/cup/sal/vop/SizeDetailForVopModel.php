<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class SizeDetailForVopModel {
	
	static $_TSPEC;
	public $id = null;
	public $name = null;
	public $propertyValues = null;
	public $dimension = null;
	public $createdBy = null;
	public $createdTime = null;
	public $lastUpdatedBy = null;
	public $lastUpdatedTime = null;
	public $delFlag = null;
	public $sizeDetailOrder = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'propertyValues'
			),
			4 => array(
			'var' => 'dimension'
			),
			5 => array(
			'var' => 'createdBy'
			),
			6 => array(
			'var' => 'createdTime'
			),
			7 => array(
			'var' => 'lastUpdatedBy'
			),
			8 => array(
			'var' => 'lastUpdatedTime'
			),
			9 => array(
			'var' => 'delFlag'
			),
			10 => array(
			'var' => 'sizeDetailOrder'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['propertyValues'])){
				
				$this->propertyValues = $vals['propertyValues'];
			}
			
			
			if (isset($vals['dimension'])){
				
				$this->dimension = $vals['dimension'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['createdTime'])){
				
				$this->createdTime = $vals['createdTime'];
			}
			
			
			if (isset($vals['lastUpdatedBy'])){
				
				$this->lastUpdatedBy = $vals['lastUpdatedBy'];
			}
			
			
			if (isset($vals['lastUpdatedTime'])){
				
				$this->lastUpdatedTime = $vals['lastUpdatedTime'];
			}
			
			
			if (isset($vals['delFlag'])){
				
				$this->delFlag = $vals['delFlag'];
			}
			
			
			if (isset($vals['sizeDetailOrder'])){
				
				$this->sizeDetailOrder = $vals['sizeDetailOrder'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeDetailForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("propertyValues" == $schemeField){
				
				$needSkip = false;
				
				$this->propertyValues = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->propertyValues[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("dimension" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dimension);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdBy); 
				
			}
			
			
			
			
			if ("createdTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdTime); 
				
			}
			
			
			
			
			if ("lastUpdatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedBy); 
				
			}
			
			
			
			
			if ("lastUpdatedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedTime); 
				
			}
			
			
			
			
			if ("delFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->delFlag); 
				
			}
			
			
			
			
			if ("sizeDetailOrder" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sizeDetailOrder); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->propertyValues !== null) {
			
			$xfer += $output->writeFieldBegin('propertyValues');
			
			if (!is_array($this->propertyValues)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->propertyValues as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dimension !== null) {
			
			$xfer += $output->writeFieldBegin('dimension');
			$xfer += $output->writeString($this->dimension);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeI64($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTime !== null) {
			
			$xfer += $output->writeFieldBegin('createdTime');
			$xfer += $output->writeI64($this->createdTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedBy');
			$xfer += $output->writeI64($this->lastUpdatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedTime');
			$xfer += $output->writeI64($this->lastUpdatedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delFlag !== null) {
			
			$xfer += $output->writeFieldBegin('delFlag');
			$xfer += $output->writeI16($this->delFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeDetailOrder !== null) {
			
			$xfer += $output->writeFieldBegin('sizeDetailOrder');
			$xfer += $output->writeI32($this->sizeDetailOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>