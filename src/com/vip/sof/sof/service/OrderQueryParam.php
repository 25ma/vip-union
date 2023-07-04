<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderQueryParam {
	
	static $_TSPEC;
	public $type = null;
	public $requestInfo = null;
	public $pageInfo = null;
	public $lessAddTime = null;
	public $greaterAddTime = null;
	public $orderType = null;
	public $lessPayTime = null;
	public $greaterPayTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'requestInfo'
			),
			3 => array(
			'var' => 'pageInfo'
			),
			4 => array(
			'var' => 'lessAddTime'
			),
			5 => array(
			'var' => 'greaterAddTime'
			),
			6 => array(
			'var' => 'orderType'
			),
			7 => array(
			'var' => 'lessPayTime'
			),
			8 => array(
			'var' => 'greaterPayTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['requestInfo'])){
				
				$this->requestInfo = $vals['requestInfo'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['lessAddTime'])){
				
				$this->lessAddTime = $vals['lessAddTime'];
			}
			
			
			if (isset($vals['greaterAddTime'])){
				
				$this->greaterAddTime = $vals['greaterAddTime'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['lessPayTime'])){
				
				$this->lessPayTime = $vals['lessPayTime'];
			}
			
			
			if (isset($vals['greaterPayTime'])){
				
				$this->greaterPayTime = $vals['greaterPayTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("requestInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->requestInfo = new \com\vip\sof\sof\service\RequestInfo();
				$this->requestInfo->read($input);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("lessAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessAddTime);
				
			}
			
			
			
			
			if ("greaterAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterAddTime);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("lessPayTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessPayTime);
				
			}
			
			
			
			
			if ("greaterPayTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterPayTime);
				
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
			$xfer += $output->writeI32($this->type);
			
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
		
		
		if($this->pageInfo !== null) {
			
			$xfer += $output->writeFieldBegin('pageInfo');
			
			if (!is_object($this->pageInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lessAddTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessAddTime');
			$xfer += $output->writeString($this->lessAddTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterAddTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterAddTime');
			$xfer += $output->writeString($this->greaterAddTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lessPayTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessPayTime');
			$xfer += $output->writeString($this->lessPayTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterPayTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterPayTime');
			$xfer += $output->writeString($this->greaterPayTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>