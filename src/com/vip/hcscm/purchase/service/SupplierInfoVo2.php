<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class SupplierInfoVo2 {
	
	static $_TSPEC;
	public $id = null;
	public $code = null;
	public $shortName = null;
	public $name = null;
	public $source = null;
	public $supplierLevel = null;
	public $supplierType = null;
	public $recommender = null;
	public $directSend = null;
	public $deliveryDays = null;
	public $siteUrl = null;
	public $beginHolidayTime = null;
	public $endHolidayTime = null;
	public $buyer = null;
	public $enableStatus = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $district = null;
	public $detailAddress = null;
	public $merchandiser = null;
	public $taxRegistrationNo = null;
	public $businessLicenseNo = null;
	public $companyRegisteredAddress = null;
	public $registeredCapital = null;
	public $legalRepresentative = null;
	public $legalRepresentativeIdcard = null;
	public $signContractStatus = null;
	public $beginContractValidityTime = null;
	public $endContractValidityTime = null;
	public $contractCode = null;
	public $quoteCurrency = null;
	public $settlementCurrency = null;
	public $postageType = null;
	public $settlementSpot = null;
	public $settlementType = null;
	public $settlementPeriod = null;
	public $founder = null;
	public $updater = null;
	public $usePlatform = null;
	public $purChannel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'code'
			),
			3 => array(
			'var' => 'shortName'
			),
			4 => array(
			'var' => 'name'
			),
			5 => array(
			'var' => 'source'
			),
			6 => array(
			'var' => 'supplierLevel'
			),
			7 => array(
			'var' => 'supplierType'
			),
			8 => array(
			'var' => 'recommender'
			),
			9 => array(
			'var' => 'directSend'
			),
			10 => array(
			'var' => 'deliveryDays'
			),
			11 => array(
			'var' => 'siteUrl'
			),
			12 => array(
			'var' => 'beginHolidayTime'
			),
			13 => array(
			'var' => 'endHolidayTime'
			),
			14 => array(
			'var' => 'buyer'
			),
			15 => array(
			'var' => 'enableStatus'
			),
			16 => array(
			'var' => 'country'
			),
			17 => array(
			'var' => 'province'
			),
			18 => array(
			'var' => 'city'
			),
			19 => array(
			'var' => 'district'
			),
			20 => array(
			'var' => 'detailAddress'
			),
			21 => array(
			'var' => 'merchandiser'
			),
			22 => array(
			'var' => 'taxRegistrationNo'
			),
			23 => array(
			'var' => 'businessLicenseNo'
			),
			24 => array(
			'var' => 'companyRegisteredAddress'
			),
			25 => array(
			'var' => 'registeredCapital'
			),
			26 => array(
			'var' => 'legalRepresentative'
			),
			27 => array(
			'var' => 'legalRepresentativeIdcard'
			),
			36 => array(
			'var' => 'signContractStatus'
			),
			37 => array(
			'var' => 'beginContractValidityTime'
			),
			38 => array(
			'var' => 'endContractValidityTime'
			),
			39 => array(
			'var' => 'contractCode'
			),
			41 => array(
			'var' => 'quoteCurrency'
			),
			42 => array(
			'var' => 'settlementCurrency'
			),
			43 => array(
			'var' => 'postageType'
			),
			44 => array(
			'var' => 'settlementSpot'
			),
			45 => array(
			'var' => 'settlementType'
			),
			46 => array(
			'var' => 'settlementPeriod'
			),
			53 => array(
			'var' => 'founder'
			),
			54 => array(
			'var' => 'updater'
			),
			55 => array(
			'var' => 'usePlatform'
			),
			56 => array(
			'var' => 'purChannel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['shortName'])){
				
				$this->shortName = $vals['shortName'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['supplierLevel'])){
				
				$this->supplierLevel = $vals['supplierLevel'];
			}
			
			
			if (isset($vals['supplierType'])){
				
				$this->supplierType = $vals['supplierType'];
			}
			
			
			if (isset($vals['recommender'])){
				
				$this->recommender = $vals['recommender'];
			}
			
			
			if (isset($vals['directSend'])){
				
				$this->directSend = $vals['directSend'];
			}
			
			
			if (isset($vals['deliveryDays'])){
				
				$this->deliveryDays = $vals['deliveryDays'];
			}
			
			
			if (isset($vals['siteUrl'])){
				
				$this->siteUrl = $vals['siteUrl'];
			}
			
			
			if (isset($vals['beginHolidayTime'])){
				
				$this->beginHolidayTime = $vals['beginHolidayTime'];
			}
			
			
			if (isset($vals['endHolidayTime'])){
				
				$this->endHolidayTime = $vals['endHolidayTime'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['enableStatus'])){
				
				$this->enableStatus = $vals['enableStatus'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['detailAddress'])){
				
				$this->detailAddress = $vals['detailAddress'];
			}
			
			
			if (isset($vals['merchandiser'])){
				
				$this->merchandiser = $vals['merchandiser'];
			}
			
			
			if (isset($vals['taxRegistrationNo'])){
				
				$this->taxRegistrationNo = $vals['taxRegistrationNo'];
			}
			
			
			if (isset($vals['businessLicenseNo'])){
				
				$this->businessLicenseNo = $vals['businessLicenseNo'];
			}
			
			
			if (isset($vals['companyRegisteredAddress'])){
				
				$this->companyRegisteredAddress = $vals['companyRegisteredAddress'];
			}
			
			
			if (isset($vals['registeredCapital'])){
				
				$this->registeredCapital = $vals['registeredCapital'];
			}
			
			
			if (isset($vals['legalRepresentative'])){
				
				$this->legalRepresentative = $vals['legalRepresentative'];
			}
			
			
			if (isset($vals['legalRepresentativeIdcard'])){
				
				$this->legalRepresentativeIdcard = $vals['legalRepresentativeIdcard'];
			}
			
			
			if (isset($vals['signContractStatus'])){
				
				$this->signContractStatus = $vals['signContractStatus'];
			}
			
			
			if (isset($vals['beginContractValidityTime'])){
				
				$this->beginContractValidityTime = $vals['beginContractValidityTime'];
			}
			
			
			if (isset($vals['endContractValidityTime'])){
				
				$this->endContractValidityTime = $vals['endContractValidityTime'];
			}
			
			
			if (isset($vals['contractCode'])){
				
				$this->contractCode = $vals['contractCode'];
			}
			
			
			if (isset($vals['quoteCurrency'])){
				
				$this->quoteCurrency = $vals['quoteCurrency'];
			}
			
			
			if (isset($vals['settlementCurrency'])){
				
				$this->settlementCurrency = $vals['settlementCurrency'];
			}
			
			
			if (isset($vals['postageType'])){
				
				$this->postageType = $vals['postageType'];
			}
			
			
			if (isset($vals['settlementSpot'])){
				
				$this->settlementSpot = $vals['settlementSpot'];
			}
			
			
			if (isset($vals['settlementType'])){
				
				$this->settlementType = $vals['settlementType'];
			}
			
			
			if (isset($vals['settlementPeriod'])){
				
				$this->settlementPeriod = $vals['settlementPeriod'];
			}
			
			
			if (isset($vals['founder'])){
				
				$this->founder = $vals['founder'];
			}
			
			
			if (isset($vals['updater'])){
				
				$this->updater = $vals['updater'];
			}
			
			
			if (isset($vals['usePlatform'])){
				
				$this->usePlatform = $vals['usePlatform'];
			}
			
			
			if (isset($vals['purChannel'])){
				
				$this->purChannel = $vals['purChannel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SupplierInfoVo2';
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
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("shortName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortName);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->source); 
				
			}
			
			
			
			
			if ("supplierLevel" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->supplierLevel); 
				
			}
			
			
			
			
			if ("supplierType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->supplierType); 
				
			}
			
			
			
			
			if ("recommender" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recommender);
				
			}
			
			
			
			
			if ("directSend" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->directSend); 
				
			}
			
			
			
			
			if ("deliveryDays" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryDays); 
				
			}
			
			
			
			
			if ("siteUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->siteUrl);
				
			}
			
			
			
			
			if ("beginHolidayTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->beginHolidayTime);
				
			}
			
			
			
			
			if ("endHolidayTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endHolidayTime);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("enableStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->enableStatus); 
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("detailAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailAddress);
				
			}
			
			
			
			
			if ("merchandiser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchandiser);
				
			}
			
			
			
			
			if ("taxRegistrationNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRegistrationNo);
				
			}
			
			
			
			
			if ("businessLicenseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessLicenseNo);
				
			}
			
			
			
			
			if ("companyRegisteredAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyRegisteredAddress);
				
			}
			
			
			
			
			if ("registeredCapital" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->registeredCapital);
				
			}
			
			
			
			
			if ("legalRepresentative" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalRepresentative);
				
			}
			
			
			
			
			if ("legalRepresentativeIdcard" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalRepresentativeIdcard);
				
			}
			
			
			
			
			if ("signContractStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signContractStatus); 
				
			}
			
			
			
			
			if ("beginContractValidityTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->beginContractValidityTime);
				
			}
			
			
			
			
			if ("endContractValidityTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endContractValidityTime);
				
			}
			
			
			
			
			if ("contractCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractCode);
				
			}
			
			
			
			
			if ("quoteCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->quoteCurrency); 
				
			}
			
			
			
			
			if ("settlementCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->settlementCurrency); 
				
			}
			
			
			
			
			if ("postageType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->postageType); 
				
			}
			
			
			
			
			if ("settlementSpot" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->settlementSpot); 
				
			}
			
			
			
			
			if ("settlementType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->settlementType); 
				
			}
			
			
			
			
			if ("settlementPeriod" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->settlementPeriod); 
				
			}
			
			
			
			
			if ("founder" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->founder);
				
			}
			
			
			
			
			if ("updater" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updater);
				
			}
			
			
			
			
			if ("usePlatform" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->usePlatform); 
				
			}
			
			
			
			
			if ("purChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purChannel);
				
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
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shortName !== null) {
			
			$xfer += $output->writeFieldBegin('shortName');
			$xfer += $output->writeString($this->shortName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeI64($this->source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('supplierLevel');
		$xfer += $output->writeI64($this->supplierLevel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('supplierType');
		$xfer += $output->writeI64($this->supplierType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->recommender !== null) {
			
			$xfer += $output->writeFieldBegin('recommender');
			$xfer += $output->writeString($this->recommender);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('directSend');
		$xfer += $output->writeI64($this->directSend);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->deliveryDays !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryDays');
			$xfer += $output->writeI64($this->deliveryDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->siteUrl !== null) {
			
			$xfer += $output->writeFieldBegin('siteUrl');
			$xfer += $output->writeString($this->siteUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginHolidayTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginHolidayTime');
			$xfer += $output->writeString($this->beginHolidayTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endHolidayTime !== null) {
			
			$xfer += $output->writeFieldBegin('endHolidayTime');
			$xfer += $output->writeString($this->endHolidayTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('enableStatus');
		$xfer += $output->writeI64($this->enableStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailAddress !== null) {
			
			$xfer += $output->writeFieldBegin('detailAddress');
			$xfer += $output->writeString($this->detailAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('merchandiser');
		$xfer += $output->writeString($this->merchandiser);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->taxRegistrationNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxRegistrationNo');
			$xfer += $output->writeString($this->taxRegistrationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessLicenseNo !== null) {
			
			$xfer += $output->writeFieldBegin('businessLicenseNo');
			$xfer += $output->writeString($this->businessLicenseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyRegisteredAddress !== null) {
			
			$xfer += $output->writeFieldBegin('companyRegisteredAddress');
			$xfer += $output->writeString($this->companyRegisteredAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->registeredCapital !== null) {
			
			$xfer += $output->writeFieldBegin('registeredCapital');
			$xfer += $output->writeDouble($this->registeredCapital);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalRepresentative !== null) {
			
			$xfer += $output->writeFieldBegin('legalRepresentative');
			$xfer += $output->writeString($this->legalRepresentative);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalRepresentativeIdcard !== null) {
			
			$xfer += $output->writeFieldBegin('legalRepresentativeIdcard');
			$xfer += $output->writeString($this->legalRepresentativeIdcard);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signContractStatus !== null) {
			
			$xfer += $output->writeFieldBegin('signContractStatus');
			$xfer += $output->writeI64($this->signContractStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginContractValidityTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginContractValidityTime');
			$xfer += $output->writeString($this->beginContractValidityTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endContractValidityTime !== null) {
			
			$xfer += $output->writeFieldBegin('endContractValidityTime');
			$xfer += $output->writeString($this->endContractValidityTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractCode !== null) {
			
			$xfer += $output->writeFieldBegin('contractCode');
			$xfer += $output->writeString($this->contractCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quoteCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('quoteCurrency');
			$xfer += $output->writeI64($this->quoteCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('settlementCurrency');
			$xfer += $output->writeI64($this->settlementCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postageType !== null) {
			
			$xfer += $output->writeFieldBegin('postageType');
			$xfer += $output->writeI64($this->postageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementSpot !== null) {
			
			$xfer += $output->writeFieldBegin('settlementSpot');
			$xfer += $output->writeI64($this->settlementSpot);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementType !== null) {
			
			$xfer += $output->writeFieldBegin('settlementType');
			$xfer += $output->writeI64($this->settlementType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementPeriod !== null) {
			
			$xfer += $output->writeFieldBegin('settlementPeriod');
			$xfer += $output->writeI64($this->settlementPeriod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->founder !== null) {
			
			$xfer += $output->writeFieldBegin('founder');
			$xfer += $output->writeString($this->founder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updater !== null) {
			
			$xfer += $output->writeFieldBegin('updater');
			$xfer += $output->writeString($this->updater);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usePlatform !== null) {
			
			$xfer += $output->writeFieldBegin('usePlatform');
			$xfer += $output->writeI64($this->usePlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purChannel !== null) {
			
			$xfer += $output->writeFieldBegin('purChannel');
			$xfer += $output->writeString($this->purChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>