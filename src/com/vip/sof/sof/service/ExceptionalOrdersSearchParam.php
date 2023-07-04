<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ExceptionalOrdersSearchParam {
	
	static $_TSPEC;
	public $status = null;
	public $transportStatus = null;
	public $storeName = null;
	public $orderSn = null;
	public $transportNo = null;
	public $receiver = null;
	public $type = null;
	public $orderTimeBegin = null;
	public $orderTimeEnd = null;
	public $pageInfo = null;
	public $requestInfo = null;
	public $storeIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'status'
			),
			2 => array(
			'var' => 'transportStatus'
			),
			3 => array(
			'var' => 'storeName'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'receiver'
			),
			7 => array(
			'var' => 'type'
			),
			8 => array(
			'var' => 'orderTimeBegin'
			),
			9 => array(
			'var' => 'orderTimeEnd'
			),
			10 => array(
			'var' => 'pageInfo'
			),
			11 => array(
			'var' => 'requestInfo'
			),
			12 => array(
			'var' => 'storeIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['transportStatus'])){
				
				$this->transportStatus = $vals['transportStatus'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['receiver'])){
				
				$this->receiver = $vals['receiver'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['orderTimeBegin'])){
				
				$this->orderTimeBegin = $vals['orderTimeBegin'];
			}
			
			
			if (isset($vals['orderTimeEnd'])){
				
				$this->orderTimeEnd = $vals['orderTimeEnd'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['requestInfo'])){
				
				$this->requestInfo = $vals['requestInfo'];
			}
			
			
			if (isset($vals['storeIdList'])){
				
				$this->storeIdList = $vals['storeIdList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExceptionalOrdersSearchParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("transportStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatus);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("receiver" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->type); 
				
			}
			
			
			
			
			if ("orderTimeBegin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderTimeBegin);
				
			}
			
			
			
			
			if ("orderTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderTimeEnd);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("requestInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->requestInfo = new \com\vip\sof\sof\service\RequestInfo();
				$this->requestInfo->read($input);
				
			}
			
			
			
			
			if ("storeIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->storeIdList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->storeIdList[$_size1++] = $elem1;
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
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatus !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatus');
			$xfer += $output->writeString($this->transportStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver !== null) {
			
			$xfer += $output->writeFieldBegin('receiver');
			$xfer += $output->writeString($this->receiver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeByte($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTimeBegin !== null) {
			
			$xfer += $output->writeFieldBegin('orderTimeBegin');
			$xfer += $output->writeString($this->orderTimeBegin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('orderTimeEnd');
			$xfer += $output->writeString($this->orderTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageInfo !== null) {
			
			$xfer += $output->writeFieldBegin('pageInfo');
			
			if (!is_object($this->pageInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestInfo !== null) {
			
			$xfer += $output->writeFieldBegin('requestInfo');
			
			if (!is_object($this->requestInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->requestInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeIdList !== null) {
			
			$xfer += $output->writeFieldBegin('storeIdList');
			
			if (!is_array($this->storeIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeIdList as $iter0){
				
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