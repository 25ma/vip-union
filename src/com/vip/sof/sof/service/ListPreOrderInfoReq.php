<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ListPreOrderInfoReq {
	
	static $_TSPEC;
	public $uid = null;
	public $lessAddTime = null;
	public $greaterAddTime = null;
	public $pageInfo = null;
	public $storeId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'uid'
			),
			2 => array(
			'var' => 'lessAddTime'
			),
			3 => array(
			'var' => 'greaterAddTime'
			),
			4 => array(
			'var' => 'pageInfo'
			),
			5 => array(
			'var' => 'storeId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['uid'])){
				
				$this->uid = $vals['uid'];
			}
			
			
			if (isset($vals['lessAddTime'])){
				
				$this->lessAddTime = $vals['lessAddTime'];
			}
			
			
			if (isset($vals['greaterAddTime'])){
				
				$this->greaterAddTime = $vals['greaterAddTime'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ListPreOrderInfoReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("uid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->uid); 
				
			}
			
			
			
			
			if ("lessAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessAddTime);
				
			}
			
			
			
			
			if ("greaterAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterAddTime);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
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
		
		$xfer += $output->writeFieldBegin('uid');
		$xfer += $output->writeI32($this->uid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lessAddTime');
		$xfer += $output->writeString($this->lessAddTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('greaterAddTime');
		$xfer += $output->writeString($this->greaterAddTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageInfo');
		
		if (!is_object($this->pageInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>