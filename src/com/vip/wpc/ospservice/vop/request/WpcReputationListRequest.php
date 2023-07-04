<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop\request;

class WpcReputationListRequest {
	
	static $_TSPEC;
	public $areaId = null;
	public $timestamp = null;
	public $vopChannelId = null;
	public $userNumber = null;
	public $page = null;
	public $pageSize = null;
	public $goodFullId = null;
	public $keyword = null;
	public $keyId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'areaId'
			),
			502 => array(
			'var' => 'timestamp'
			),
			503 => array(
			'var' => 'vopChannelId'
			),
			504 => array(
			'var' => 'userNumber'
			),
			505 => array(
			'var' => 'page'
			),
			506 => array(
			'var' => 'pageSize'
			),
			12001 => array(
			'var' => 'goodFullId'
			),
			12002 => array(
			'var' => 'keyword'
			),
			12003 => array(
			'var' => 'keyId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['vopChannelId'])){
				
				$this->vopChannelId = $vals['vopChannelId'];
			}
			
			
			if (isset($vals['userNumber'])){
				
				$this->userNumber = $vals['userNumber'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['keyword'])){
				
				$this->keyword = $vals['keyword'];
			}
			
			
			if (isset($vals['keyId'])){
				
				$this->keyId = $vals['keyId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReputationListRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timestamp);
				
			}
			
			
			
			
			if ("vopChannelId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vopChannelId);
				
			}
			
			
			
			
			if ("userNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNumber);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("goodFullId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodFullId);
				
			}
			
			
			
			
			if ("keyword" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keyword);
				
			}
			
			
			
			
			if ("keyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->keyId); 
				
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
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timestamp !== null) {
			
			$xfer += $output->writeFieldBegin('timestamp');
			$xfer += $output->writeString($this->timestamp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vopChannelId !== null) {
			
			$xfer += $output->writeFieldBegin('vopChannelId');
			$xfer += $output->writeString($this->vopChannelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userNumber !== null) {
			
			$xfer += $output->writeFieldBegin('userNumber');
			$xfer += $output->writeString($this->userNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodFullId');
		$xfer += $output->writeString($this->goodFullId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->keyword !== null) {
			
			$xfer += $output->writeFieldBegin('keyword');
			$xfer += $output->writeString($this->keyword);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->keyId !== null) {
			
			$xfer += $output->writeFieldBegin('keyId');
			$xfer += $output->writeI64($this->keyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>