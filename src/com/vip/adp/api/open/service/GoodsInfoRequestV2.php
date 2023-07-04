<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GoodsInfoRequestV2 {
	
	static $_TSPEC;
	public $channelType = null;
	public $requestId = null;
	public $queryReputation = null;
	public $queryStoreServiceCapability = null;
	public $sourceType = null;
	public $jxCode = null;
	public $queryStock = null;
	public $queryActivity = null;
	public $queryPrepay = null;
	public $commonParams = null;
	public $vendorCode = null;
	public $chanTag = null;
	public $queryExclusiveCoupon = null;
	public $queryCpsInfo = null;
	public $queryFuturePrice = null;
	public $pageSize = null;
	public $offset = null;
	public $batchNo = null;
	public $openId = null;
	public $realCall = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelType'
			),
			2 => array(
			'var' => 'requestId'
			),
			3 => array(
			'var' => 'queryReputation'
			),
			4 => array(
			'var' => 'queryStoreServiceCapability'
			),
			5 => array(
			'var' => 'sourceType'
			),
			6 => array(
			'var' => 'jxCode'
			),
			7 => array(
			'var' => 'queryStock'
			),
			8 => array(
			'var' => 'queryActivity'
			),
			9 => array(
			'var' => 'queryPrepay'
			),
			10 => array(
			'var' => 'commonParams'
			),
			11 => array(
			'var' => 'vendorCode'
			),
			12 => array(
			'var' => 'chanTag'
			),
			13 => array(
			'var' => 'queryExclusiveCoupon'
			),
			14 => array(
			'var' => 'queryCpsInfo'
			),
			15 => array(
			'var' => 'queryFuturePrice'
			),
			16 => array(
			'var' => 'pageSize'
			),
			17 => array(
			'var' => 'offset'
			),
			18 => array(
			'var' => 'batchNo'
			),
			19 => array(
			'var' => 'openId'
			),
			20 => array(
			'var' => 'realCall'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelType'])){
				
				$this->channelType = $vals['channelType'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['queryReputation'])){
				
				$this->queryReputation = $vals['queryReputation'];
			}
			
			
			if (isset($vals['queryStoreServiceCapability'])){
				
				$this->queryStoreServiceCapability = $vals['queryStoreServiceCapability'];
			}
			
			
			if (isset($vals['sourceType'])){
				
				$this->sourceType = $vals['sourceType'];
			}
			
			
			if (isset($vals['jxCode'])){
				
				$this->jxCode = $vals['jxCode'];
			}
			
			
			if (isset($vals['queryStock'])){
				
				$this->queryStock = $vals['queryStock'];
			}
			
			
			if (isset($vals['queryActivity'])){
				
				$this->queryActivity = $vals['queryActivity'];
			}
			
			
			if (isset($vals['queryPrepay'])){
				
				$this->queryPrepay = $vals['queryPrepay'];
			}
			
			
			if (isset($vals['commonParams'])){
				
				$this->commonParams = $vals['commonParams'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
			if (isset($vals['queryExclusiveCoupon'])){
				
				$this->queryExclusiveCoupon = $vals['queryExclusiveCoupon'];
			}
			
			
			if (isset($vals['queryCpsInfo'])){
				
				$this->queryCpsInfo = $vals['queryCpsInfo'];
			}
			
			
			if (isset($vals['queryFuturePrice'])){
				
				$this->queryFuturePrice = $vals['queryFuturePrice'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['realCall'])){
				
				$this->realCall = $vals['realCall'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsInfoRequestV2';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channelType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->channelType); 
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("queryReputation" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryReputation);
				
			}
			
			
			
			
			if ("queryStoreServiceCapability" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryStoreServiceCapability);
				
			}
			
			
			
			
			if ("sourceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sourceType); 
				
			}
			
			
			
			
			if ("jxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jxCode);
				
			}
			
			
			
			
			if ("queryStock" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryStock);
				
			}
			
			
			
			
			if ("queryActivity" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryActivity);
				
			}
			
			
			
			
			if ("queryPrepay" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryPrepay);
				
			}
			
			
			
			
			if ("commonParams" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParams = new \com\vip\adp\api\open\service\CommonParams();
				$this->commonParams->read($input);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
			}
			
			
			
			
			if ("queryExclusiveCoupon" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryExclusiveCoupon);
				
			}
			
			
			
			
			if ("queryCpsInfo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->queryCpsInfo); 
				
			}
			
			
			
			
			if ("queryFuturePrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryFuturePrice);
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("offset" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->offset); 
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("realCall" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->realCall);
				
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
		
		if($this->channelType !== null) {
			
			$xfer += $output->writeFieldBegin('channelType');
			$xfer += $output->writeI32($this->channelType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->queryReputation !== null) {
			
			$xfer += $output->writeFieldBegin('queryReputation');
			$xfer += $output->writeBool($this->queryReputation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryStoreServiceCapability !== null) {
			
			$xfer += $output->writeFieldBegin('queryStoreServiceCapability');
			$xfer += $output->writeBool($this->queryStoreServiceCapability);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceType !== null) {
			
			$xfer += $output->writeFieldBegin('sourceType');
			$xfer += $output->writeI32($this->sourceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jxCode !== null) {
			
			$xfer += $output->writeFieldBegin('jxCode');
			$xfer += $output->writeString($this->jxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryStock !== null) {
			
			$xfer += $output->writeFieldBegin('queryStock');
			$xfer += $output->writeBool($this->queryStock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryActivity !== null) {
			
			$xfer += $output->writeFieldBegin('queryActivity');
			$xfer += $output->writeBool($this->queryActivity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryPrepay !== null) {
			
			$xfer += $output->writeFieldBegin('queryPrepay');
			$xfer += $output->writeBool($this->queryPrepay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commonParams !== null) {
			
			$xfer += $output->writeFieldBegin('commonParams');
			
			if (!is_object($this->commonParams)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->commonParams->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryExclusiveCoupon !== null) {
			
			$xfer += $output->writeFieldBegin('queryExclusiveCoupon');
			$xfer += $output->writeBool($this->queryExclusiveCoupon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryCpsInfo !== null) {
			
			$xfer += $output->writeFieldBegin('queryCpsInfo');
			$xfer += $output->writeI32($this->queryCpsInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryFuturePrice !== null) {
			
			$xfer += $output->writeFieldBegin('queryFuturePrice');
			$xfer += $output->writeBool($this->queryFuturePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI64($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realCall !== null) {
			
			$xfer += $output->writeFieldBegin('realCall');
			$xfer += $output->writeBool($this->realCall);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>