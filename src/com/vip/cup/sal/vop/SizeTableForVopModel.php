<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class SizeTableForVopModel {
	
	static $_TSPEC;
	public $id = null;
	public $type = null;
	public $html = null;
	public $tips = null;
	public $delFlag = null;
	public $createdTime = null;
	public $createdBy = null;
	public $lastUpdatedTime = null;
	public $lastUpdatedBy = null;
	public $details = null;
	public $vendorId = null;
	public $recommendInfo = null;
	public $jsonData = null;
	public $sizeTypeId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'html'
			),
			4 => array(
			'var' => 'tips'
			),
			5 => array(
			'var' => 'delFlag'
			),
			6 => array(
			'var' => 'createdTime'
			),
			7 => array(
			'var' => 'createdBy'
			),
			8 => array(
			'var' => 'lastUpdatedTime'
			),
			9 => array(
			'var' => 'lastUpdatedBy'
			),
			10 => array(
			'var' => 'details'
			),
			11 => array(
			'var' => 'vendorId'
			),
			12 => array(
			'var' => 'recommendInfo'
			),
			13 => array(
			'var' => 'jsonData'
			),
			14 => array(
			'var' => 'sizeTypeId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['html'])){
				
				$this->html = $vals['html'];
			}
			
			
			if (isset($vals['tips'])){
				
				$this->tips = $vals['tips'];
			}
			
			
			if (isset($vals['delFlag'])){
				
				$this->delFlag = $vals['delFlag'];
			}
			
			
			if (isset($vals['createdTime'])){
				
				$this->createdTime = $vals['createdTime'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['lastUpdatedTime'])){
				
				$this->lastUpdatedTime = $vals['lastUpdatedTime'];
			}
			
			
			if (isset($vals['lastUpdatedBy'])){
				
				$this->lastUpdatedBy = $vals['lastUpdatedBy'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['recommendInfo'])){
				
				$this->recommendInfo = $vals['recommendInfo'];
			}
			
			
			if (isset($vals['jsonData'])){
				
				$this->jsonData = $vals['jsonData'];
			}
			
			
			if (isset($vals['sizeTypeId'])){
				
				$this->sizeTypeId = $vals['sizeTypeId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeTableForVopModel';
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
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->type); 
				
			}
			
			
			
			
			if ("html" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->html);
				
			}
			
			
			
			
			if ("tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tips);
				
			}
			
			
			
			
			if ("delFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->delFlag); 
				
			}
			
			
			
			
			if ("createdTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdTime); 
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdBy); 
				
			}
			
			
			
			
			if ("lastUpdatedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedTime); 
				
			}
			
			
			
			
			if ("lastUpdatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedBy); 
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = 0;
						$input->readI64($key0); 
						
						$val0 = null;
						
						$val0 = new \com\vip\cup\sal\vop\SizeDetailForVopModel();
						$val0->read($input);
						
						$this->details[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("recommendInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recommendInfo);
				
			}
			
			
			
			
			if ("jsonData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jsonData);
				
			}
			
			
			
			
			if ("sizeTypeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sizeTypeId); 
				
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
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeI16($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->html !== null) {
			
			$xfer += $output->writeFieldBegin('html');
			$xfer += $output->writeString($this->html);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tips !== null) {
			
			$xfer += $output->writeFieldBegin('tips');
			$xfer += $output->writeString($this->tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delFlag !== null) {
			
			$xfer += $output->writeFieldBegin('delFlag');
			$xfer += $output->writeI16($this->delFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTime !== null) {
			
			$xfer += $output->writeFieldBegin('createdTime');
			$xfer += $output->writeI64($this->createdTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeI64($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedTime');
			$xfer += $output->writeI64($this->lastUpdatedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedBy');
			$xfer += $output->writeI64($this->lastUpdatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->details !== null) {
			
			$xfer += $output->writeFieldBegin('details');
			
			if (!is_array($this->details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->details as $kiter0 => $viter0){
				
				$xfer += $output->writeI64($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recommendInfo !== null) {
			
			$xfer += $output->writeFieldBegin('recommendInfo');
			$xfer += $output->writeString($this->recommendInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jsonData !== null) {
			
			$xfer += $output->writeFieldBegin('jsonData');
			$xfer += $output->writeString($this->jsonData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeTypeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeTypeId');
			$xfer += $output->writeI32($this->sizeTypeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>