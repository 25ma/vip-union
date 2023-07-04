<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class OfflinePoDetail {
	
	static $_TSPEC;
	public $itemNo = null;
	public $purchaseType = null;
	public $warehouseCode = null;
	public $vendorCode = null;
	public $itemDesc = null;
	public $brandSn = null;
	public $brandName = null;
	public $brandNameEn = null;
	public $cat1Code = null;
	public $cat2Code = null;
	public $cat3Code = null;
	public $po = null;
	public $poCreateTime = null;
	public $poEndTime = null;
	public $dept1Code = null;
	public $dept1Name = null;
	public $dept2Code = null;
	public $dept2Name = null;
	public $dept3Code = null;
	public $dept3Name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'itemNo'
			),
			2 => array(
			'var' => 'purchaseType'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'vendorCode'
			),
			5 => array(
			'var' => 'itemDesc'
			),
			6 => array(
			'var' => 'brandSn'
			),
			7 => array(
			'var' => 'brandName'
			),
			8 => array(
			'var' => 'brandNameEn'
			),
			9 => array(
			'var' => 'cat1Code'
			),
			10 => array(
			'var' => 'cat2Code'
			),
			11 => array(
			'var' => 'cat3Code'
			),
			12 => array(
			'var' => 'po'
			),
			13 => array(
			'var' => 'poCreateTime'
			),
			14 => array(
			'var' => 'poEndTime'
			),
			15 => array(
			'var' => 'dept1Code'
			),
			16 => array(
			'var' => 'dept1Name'
			),
			17 => array(
			'var' => 'dept2Code'
			),
			18 => array(
			'var' => 'dept2Name'
			),
			19 => array(
			'var' => 'dept3Code'
			),
			20 => array(
			'var' => 'dept3Name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['purchaseType'])){
				
				$this->purchaseType = $vals['purchaseType'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['itemDesc'])){
				
				$this->itemDesc = $vals['itemDesc'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandNameEn'])){
				
				$this->brandNameEn = $vals['brandNameEn'];
			}
			
			
			if (isset($vals['cat1Code'])){
				
				$this->cat1Code = $vals['cat1Code'];
			}
			
			
			if (isset($vals['cat2Code'])){
				
				$this->cat2Code = $vals['cat2Code'];
			}
			
			
			if (isset($vals['cat3Code'])){
				
				$this->cat3Code = $vals['cat3Code'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['poCreateTime'])){
				
				$this->poCreateTime = $vals['poCreateTime'];
			}
			
			
			if (isset($vals['poEndTime'])){
				
				$this->poEndTime = $vals['poEndTime'];
			}
			
			
			if (isset($vals['dept1Code'])){
				
				$this->dept1Code = $vals['dept1Code'];
			}
			
			
			if (isset($vals['dept1Name'])){
				
				$this->dept1Name = $vals['dept1Name'];
			}
			
			
			if (isset($vals['dept2Code'])){
				
				$this->dept2Code = $vals['dept2Code'];
			}
			
			
			if (isset($vals['dept2Name'])){
				
				$this->dept2Name = $vals['dept2Name'];
			}
			
			
			if (isset($vals['dept3Code'])){
				
				$this->dept3Code = $vals['dept3Code'];
			}
			
			
			if (isset($vals['dept3Name'])){
				
				$this->dept3Name = $vals['dept3Name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfflinePoDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("purchaseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseType);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("itemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDesc);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandNameEn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandNameEn);
				
			}
			
			
			
			
			if ("cat1Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat1Code);
				
			}
			
			
			
			
			if ("cat2Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat2Code);
				
			}
			
			
			
			
			if ("cat3Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat3Code);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("poCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->poCreateTime);
				
			}
			
			
			
			
			if ("poEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->poEndTime);
				
			}
			
			
			
			
			if ("dept1Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept1Code);
				
			}
			
			
			
			
			if ("dept1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept1Name);
				
			}
			
			
			
			
			if ("dept2Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept2Code);
				
			}
			
			
			
			
			if ("dept2Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept2Name);
				
			}
			
			
			
			
			if ("dept3Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept3Code);
				
			}
			
			
			
			
			if ("dept3Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept3Name);
				
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
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseType !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseType');
			$xfer += $output->writeString($this->purchaseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('itemDesc');
			$xfer += $output->writeString($this->itemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandNameEn !== null) {
			
			$xfer += $output->writeFieldBegin('brandNameEn');
			$xfer += $output->writeString($this->brandNameEn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat1Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat1Code');
			$xfer += $output->writeString($this->cat1Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat2Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat2Code');
			$xfer += $output->writeString($this->cat2Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat3Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat3Code');
			$xfer += $output->writeString($this->cat3Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('poCreateTime');
			$xfer += $output->writeI64($this->poCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('poEndTime');
			$xfer += $output->writeI64($this->poEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept1Code !== null) {
			
			$xfer += $output->writeFieldBegin('dept1Code');
			$xfer += $output->writeString($this->dept1Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept1Name !== null) {
			
			$xfer += $output->writeFieldBegin('dept1Name');
			$xfer += $output->writeString($this->dept1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept2Code !== null) {
			
			$xfer += $output->writeFieldBegin('dept2Code');
			$xfer += $output->writeString($this->dept2Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept2Name !== null) {
			
			$xfer += $output->writeFieldBegin('dept2Name');
			$xfer += $output->writeString($this->dept2Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept3Code !== null) {
			
			$xfer += $output->writeFieldBegin('dept3Code');
			$xfer += $output->writeString($this->dept3Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept3Name !== null) {
			
			$xfer += $output->writeFieldBegin('dept3Name');
			$xfer += $output->writeString($this->dept3Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>