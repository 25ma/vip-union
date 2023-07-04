<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GenVipUrlRequest {
	
	static $_TSPEC;
	public $urlList = null;
	public $chanTag = null;
	public $requestId = null;
	public $statParam = null;
	public $urlGenRequest = null;
	public $adCode = null;
	public $isVendorUser = null;
	public $queryHiddenCouponPage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'urlList'
			),
			2 => array(
			'var' => 'chanTag'
			),
			3 => array(
			'var' => 'requestId'
			),
			4 => array(
			'var' => 'statParam'
			),
			5 => array(
			'var' => 'urlGenRequest'
			),
			6 => array(
			'var' => 'adCode'
			),
			7 => array(
			'var' => 'isVendorUser'
			),
			8 => array(
			'var' => 'queryHiddenCouponPage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['urlList'])){
				
				$this->urlList = $vals['urlList'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['statParam'])){
				
				$this->statParam = $vals['statParam'];
			}
			
			
			if (isset($vals['urlGenRequest'])){
				
				$this->urlGenRequest = $vals['urlGenRequest'];
			}
			
			
			if (isset($vals['adCode'])){
				
				$this->adCode = $vals['adCode'];
			}
			
			
			if (isset($vals['isVendorUser'])){
				
				$this->isVendorUser = $vals['isVendorUser'];
			}
			
			
			if (isset($vals['queryHiddenCouponPage'])){
				
				$this->queryHiddenCouponPage = $vals['queryHiddenCouponPage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GenVipUrlRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("urlList" == $schemeField){
				
				$needSkip = false;
				
				$this->urlList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->urlList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("statParam" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statParam);
				
			}
			
			
			
			
			if ("urlGenRequest" == $schemeField){
				
				$needSkip = false;
				
				$this->urlGenRequest = new \com\vip\adp\api\open\service\UrlGenRequest();
				$this->urlGenRequest->read($input);
				
			}
			
			
			
			
			if ("adCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adCode);
				
			}
			
			
			
			
			if ("isVendorUser" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isVendorUser);
				
			}
			
			
			
			
			if ("queryHiddenCouponPage" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryHiddenCouponPage);
				
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
		
		if($this->urlList !== null) {
			
			$xfer += $output->writeFieldBegin('urlList');
			
			if (!is_array($this->urlList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->urlList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statParam !== null) {
			
			$xfer += $output->writeFieldBegin('statParam');
			$xfer += $output->writeString($this->statParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->urlGenRequest !== null) {
			
			$xfer += $output->writeFieldBegin('urlGenRequest');
			
			if (!is_object($this->urlGenRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->urlGenRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adCode !== null) {
			
			$xfer += $output->writeFieldBegin('adCode');
			$xfer += $output->writeString($this->adCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVendorUser !== null) {
			
			$xfer += $output->writeFieldBegin('isVendorUser');
			$xfer += $output->writeBool($this->isVendorUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryHiddenCouponPage !== null) {
			
			$xfer += $output->writeFieldBegin('queryHiddenCouponPage');
			$xfer += $output->writeBool($this->queryHiddenCouponPage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>