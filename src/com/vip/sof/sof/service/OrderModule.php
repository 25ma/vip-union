<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderModule {
	
	static $_TSPEC;
	public $vendorIds = null;
	public $stats = null;
	public $orderSns = null;
	public $saleTypes = null;
	public $buyer = null;
	public $mobile = null;
	public $needInvoice = null;
	public $invoiceStatus = null;
	public $isExport = null;
	public $lessLastModifiedTime = null;
	public $greaterLastModifiedTime = null;
	public $lessAddTime = null;
	public $greaterAddTime = null;
	public $popTrackStat = null;
	public $carriersCode = null;
	public $storeId = null;
	public $invoiceType = null;
	public $waitingRefuse = null;
	public $storeIdList = null;
	public $encryptFlag = null;
	public $yunPeiType = null;
	public $wareHouse = null;
	public $orderType = null;
	public $orderBizFlag = null;
	public $isHistoryLabel = null;
	public $labelCode = null;
	public $lessControlInvalidTime = null;
	public $greaterControlInvalidTime = null;
	public $lessPayTime = null;
	public $greaterPayTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorIds'
			),
			2 => array(
			'var' => 'stats'
			),
			3 => array(
			'var' => 'orderSns'
			),
			4 => array(
			'var' => 'saleTypes'
			),
			5 => array(
			'var' => 'buyer'
			),
			6 => array(
			'var' => 'mobile'
			),
			7 => array(
			'var' => 'needInvoice'
			),
			8 => array(
			'var' => 'invoiceStatus'
			),
			9 => array(
			'var' => 'isExport'
			),
			10 => array(
			'var' => 'lessLastModifiedTime'
			),
			11 => array(
			'var' => 'greaterLastModifiedTime'
			),
			12 => array(
			'var' => 'lessAddTime'
			),
			13 => array(
			'var' => 'greaterAddTime'
			),
			14 => array(
			'var' => 'popTrackStat'
			),
			15 => array(
			'var' => 'carriersCode'
			),
			16 => array(
			'var' => 'storeId'
			),
			17 => array(
			'var' => 'invoiceType'
			),
			18 => array(
			'var' => 'waitingRefuse'
			),
			19 => array(
			'var' => 'storeIdList'
			),
			20 => array(
			'var' => 'encryptFlag'
			),
			21 => array(
			'var' => 'yunPeiType'
			),
			22 => array(
			'var' => 'wareHouse'
			),
			23 => array(
			'var' => 'orderType'
			),
			24 => array(
			'var' => 'orderBizFlag'
			),
			25 => array(
			'var' => 'isHistoryLabel'
			),
			26 => array(
			'var' => 'labelCode'
			),
			27 => array(
			'var' => 'lessControlInvalidTime'
			),
			28 => array(
			'var' => 'greaterControlInvalidTime'
			),
			29 => array(
			'var' => 'lessPayTime'
			),
			30 => array(
			'var' => 'greaterPayTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorIds'])){
				
				$this->vendorIds = $vals['vendorIds'];
			}
			
			
			if (isset($vals['stats'])){
				
				$this->stats = $vals['stats'];
			}
			
			
			if (isset($vals['orderSns'])){
				
				$this->orderSns = $vals['orderSns'];
			}
			
			
			if (isset($vals['saleTypes'])){
				
				$this->saleTypes = $vals['saleTypes'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['needInvoice'])){
				
				$this->needInvoice = $vals['needInvoice'];
			}
			
			
			if (isset($vals['invoiceStatus'])){
				
				$this->invoiceStatus = $vals['invoiceStatus'];
			}
			
			
			if (isset($vals['isExport'])){
				
				$this->isExport = $vals['isExport'];
			}
			
			
			if (isset($vals['lessLastModifiedTime'])){
				
				$this->lessLastModifiedTime = $vals['lessLastModifiedTime'];
			}
			
			
			if (isset($vals['greaterLastModifiedTime'])){
				
				$this->greaterLastModifiedTime = $vals['greaterLastModifiedTime'];
			}
			
			
			if (isset($vals['lessAddTime'])){
				
				$this->lessAddTime = $vals['lessAddTime'];
			}
			
			
			if (isset($vals['greaterAddTime'])){
				
				$this->greaterAddTime = $vals['greaterAddTime'];
			}
			
			
			if (isset($vals['popTrackStat'])){
				
				$this->popTrackStat = $vals['popTrackStat'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['waitingRefuse'])){
				
				$this->waitingRefuse = $vals['waitingRefuse'];
			}
			
			
			if (isset($vals['storeIdList'])){
				
				$this->storeIdList = $vals['storeIdList'];
			}
			
			
			if (isset($vals['encryptFlag'])){
				
				$this->encryptFlag = $vals['encryptFlag'];
			}
			
			
			if (isset($vals['yunPeiType'])){
				
				$this->yunPeiType = $vals['yunPeiType'];
			}
			
			
			if (isset($vals['wareHouse'])){
				
				$this->wareHouse = $vals['wareHouse'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['orderBizFlag'])){
				
				$this->orderBizFlag = $vals['orderBizFlag'];
			}
			
			
			if (isset($vals['isHistoryLabel'])){
				
				$this->isHistoryLabel = $vals['isHistoryLabel'];
			}
			
			
			if (isset($vals['labelCode'])){
				
				$this->labelCode = $vals['labelCode'];
			}
			
			
			if (isset($vals['lessControlInvalidTime'])){
				
				$this->lessControlInvalidTime = $vals['lessControlInvalidTime'];
			}
			
			
			if (isset($vals['greaterControlInvalidTime'])){
				
				$this->greaterControlInvalidTime = $vals['greaterControlInvalidTime'];
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
		
		return 'OrderModule';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorIds" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorIds = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->vendorIds[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("stats" == $schemeField){
				
				$needSkip = false;
				
				$this->stats = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->stats[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("orderSns" == $schemeField){
				
				$needSkip = false;
				
				$this->orderSns = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->orderSns[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("saleTypes" == $schemeField){
				
				$needSkip = false;
				
				$this->saleTypes = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->saleTypes[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("needInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->needInvoice);
				
			}
			
			
			
			
			if ("invoiceStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceStatus);
				
			}
			
			
			
			
			if ("isExport" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isExport);
				
			}
			
			
			
			
			if ("lessLastModifiedTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessLastModifiedTime);
				
			}
			
			
			
			
			if ("greaterLastModifiedTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterLastModifiedTime);
				
			}
			
			
			
			
			if ("lessAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessAddTime);
				
			}
			
			
			
			
			if ("greaterAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterAddTime);
				
			}
			
			
			
			
			if ("popTrackStat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->popTrackStat);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("waitingRefuse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->waitingRefuse);
				
			}
			
			
			
			
			if ("storeIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->storeIdList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->storeIdList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("encryptFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->encryptFlag); 
				
			}
			
			
			
			
			if ("yunPeiType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->yunPeiType); 
				
			}
			
			
			
			
			if ("wareHouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wareHouse);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("orderBizFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderBizFlag);
				
			}
			
			
			
			
			if ("isHistoryLabel" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isHistoryLabel); 
				
			}
			
			
			
			
			if ("labelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->labelCode);
				
			}
			
			
			
			
			if ("lessControlInvalidTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessControlInvalidTime);
				
			}
			
			
			
			
			if ("greaterControlInvalidTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterControlInvalidTime);
				
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
		
		if($this->vendorIds !== null) {
			
			$xfer += $output->writeFieldBegin('vendorIds');
			
			if (!is_array($this->vendorIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->vendorIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stats !== null) {
			
			$xfer += $output->writeFieldBegin('stats');
			
			if (!is_array($this->stats)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->stats as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSns !== null) {
			
			$xfer += $output->writeFieldBegin('orderSns');
			
			if (!is_array($this->orderSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->orderSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleTypes !== null) {
			
			$xfer += $output->writeFieldBegin('saleTypes');
			
			if (!is_array($this->saleTypes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->saleTypes as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('needInvoice');
			$xfer += $output->writeString($this->needInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceStatus !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceStatus');
			$xfer += $output->writeString($this->invoiceStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isExport !== null) {
			
			$xfer += $output->writeFieldBegin('isExport');
			$xfer += $output->writeString($this->isExport);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lessLastModifiedTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessLastModifiedTime');
			$xfer += $output->writeString($this->lessLastModifiedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterLastModifiedTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterLastModifiedTime');
			$xfer += $output->writeString($this->greaterLastModifiedTime);
			
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
		
		
		if($this->popTrackStat !== null) {
			
			$xfer += $output->writeFieldBegin('popTrackStat');
			$xfer += $output->writeString($this->popTrackStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->waitingRefuse !== null) {
			
			$xfer += $output->writeFieldBegin('waitingRefuse');
			$xfer += $output->writeString($this->waitingRefuse);
			
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
		
		
		if($this->encryptFlag !== null) {
			
			$xfer += $output->writeFieldBegin('encryptFlag');
			$xfer += $output->writeI32($this->encryptFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yunPeiType !== null) {
			
			$xfer += $output->writeFieldBegin('yunPeiType');
			$xfer += $output->writeI32($this->yunPeiType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wareHouse !== null) {
			
			$xfer += $output->writeFieldBegin('wareHouse');
			$xfer += $output->writeString($this->wareHouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderBizFlag !== null) {
			
			$xfer += $output->writeFieldBegin('orderBizFlag');
			$xfer += $output->writeString($this->orderBizFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHistoryLabel !== null) {
			
			$xfer += $output->writeFieldBegin('isHistoryLabel');
			$xfer += $output->writeByte($this->isHistoryLabel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->labelCode !== null) {
			
			$xfer += $output->writeFieldBegin('labelCode');
			$xfer += $output->writeString($this->labelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lessControlInvalidTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessControlInvalidTime');
			$xfer += $output->writeString($this->lessControlInvalidTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterControlInvalidTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterControlInvalidTime');
			$xfer += $output->writeString($this->greaterControlInvalidTime);
			
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