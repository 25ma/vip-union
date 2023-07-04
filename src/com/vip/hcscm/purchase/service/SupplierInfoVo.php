<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class SupplierInfoVo {
	
	static $_TSPEC;
	public $caller = null;
	public $operator = null;
	public $cargoOwner = null;
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
	public $legalRepresentativeIdcardFrontPic = null;
	public $legalRepresentativeIdcardBackPic = null;
	public $taxRegistrationPic = null;
	public $businessLicense = null;
	public $lawPersonPic = null;
	public $unincorporatedPaymentAuthorizationCertificatePic = null;
	public $openAccountAuthPic = null;
	public $otherPic = null;
	public $signContractStatus = null;
	public $beginContractValidityTime = null;
	public $endContractValidityTime = null;
	public $contractCode = null;
	public $contractScanPic = null;
	public $quoteCurrency = null;
	public $settlementCurrency = null;
	public $postageType = null;
	public $settlementSpot = null;
	public $settlementType = null;
	public $settlementPeriod = null;
	public $payeeIdcardFrontPic = null;
	public $payeeIdcardBackPic = null;
	public $payeeAccountStatementPic = null;
	public $supplierOnlineShopParamList = null;
	public $supplierContactInfoParamList = null;
	public $supplierSettlementParamList = null;
	public $founder = null;
	public $updater = null;
	public $usePlatform = null;
	public $purChannel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10001 => array(
			'var' => 'caller'
			),
			10002 => array(
			'var' => 'operator'
			),
			10003 => array(
			'var' => 'cargoOwner'
			),
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
			28 => array(
			'var' => 'legalRepresentativeIdcardFrontPic'
			),
			29 => array(
			'var' => 'legalRepresentativeIdcardBackPic'
			),
			30 => array(
			'var' => 'taxRegistrationPic'
			),
			31 => array(
			'var' => 'businessLicense'
			),
			32 => array(
			'var' => 'lawPersonPic'
			),
			33 => array(
			'var' => 'unincorporatedPaymentAuthorizationCertificatePic'
			),
			34 => array(
			'var' => 'openAccountAuthPic'
			),
			35 => array(
			'var' => 'otherPic'
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
			40 => array(
			'var' => 'contractScanPic'
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
			47 => array(
			'var' => 'payeeIdcardFrontPic'
			),
			48 => array(
			'var' => 'payeeIdcardBackPic'
			),
			49 => array(
			'var' => 'payeeAccountStatementPic'
			),
			50 => array(
			'var' => 'supplierOnlineShopParamList'
			),
			51 => array(
			'var' => 'supplierContactInfoParamList'
			),
			52 => array(
			'var' => 'supplierSettlementParamList'
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
			
			
			if (isset($vals['caller'])){
				
				$this->caller = $vals['caller'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['cargoOwner'])){
				
				$this->cargoOwner = $vals['cargoOwner'];
			}
			
			
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
			
			
			if (isset($vals['legalRepresentativeIdcardFrontPic'])){
				
				$this->legalRepresentativeIdcardFrontPic = $vals['legalRepresentativeIdcardFrontPic'];
			}
			
			
			if (isset($vals['legalRepresentativeIdcardBackPic'])){
				
				$this->legalRepresentativeIdcardBackPic = $vals['legalRepresentativeIdcardBackPic'];
			}
			
			
			if (isset($vals['taxRegistrationPic'])){
				
				$this->taxRegistrationPic = $vals['taxRegistrationPic'];
			}
			
			
			if (isset($vals['businessLicense'])){
				
				$this->businessLicense = $vals['businessLicense'];
			}
			
			
			if (isset($vals['lawPersonPic'])){
				
				$this->lawPersonPic = $vals['lawPersonPic'];
			}
			
			
			if (isset($vals['unincorporatedPaymentAuthorizationCertificatePic'])){
				
				$this->unincorporatedPaymentAuthorizationCertificatePic = $vals['unincorporatedPaymentAuthorizationCertificatePic'];
			}
			
			
			if (isset($vals['openAccountAuthPic'])){
				
				$this->openAccountAuthPic = $vals['openAccountAuthPic'];
			}
			
			
			if (isset($vals['otherPic'])){
				
				$this->otherPic = $vals['otherPic'];
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
			
			
			if (isset($vals['contractScanPic'])){
				
				$this->contractScanPic = $vals['contractScanPic'];
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
			
			
			if (isset($vals['payeeIdcardFrontPic'])){
				
				$this->payeeIdcardFrontPic = $vals['payeeIdcardFrontPic'];
			}
			
			
			if (isset($vals['payeeIdcardBackPic'])){
				
				$this->payeeIdcardBackPic = $vals['payeeIdcardBackPic'];
			}
			
			
			if (isset($vals['payeeAccountStatementPic'])){
				
				$this->payeeAccountStatementPic = $vals['payeeAccountStatementPic'];
			}
			
			
			if (isset($vals['supplierOnlineShopParamList'])){
				
				$this->supplierOnlineShopParamList = $vals['supplierOnlineShopParamList'];
			}
			
			
			if (isset($vals['supplierContactInfoParamList'])){
				
				$this->supplierContactInfoParamList = $vals['supplierContactInfoParamList'];
			}
			
			
			if (isset($vals['supplierSettlementParamList'])){
				
				$this->supplierSettlementParamList = $vals['supplierSettlementParamList'];
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
		
		return 'SupplierInfoVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("caller" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->caller);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("cargoOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cargoOwner);
				
			}
			
			
			
			
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
			
			
			
			
			if ("legalRepresentativeIdcardFrontPic" == $schemeField){
				
				$needSkip = false;
				
				$this->legalRepresentativeIdcardFrontPic = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->legalRepresentativeIdcardFrontPic[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("legalRepresentativeIdcardBackPic" == $schemeField){
				
				$needSkip = false;
				
				$this->legalRepresentativeIdcardBackPic = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->legalRepresentativeIdcardBackPic[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("taxRegistrationPic" == $schemeField){
				
				$needSkip = false;
				
				$this->taxRegistrationPic = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->taxRegistrationPic[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("businessLicense" == $schemeField){
				
				$needSkip = false;
				
				$this->businessLicense = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->businessLicense[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("lawPersonPic" == $schemeField){
				
				$needSkip = false;
				
				$this->lawPersonPic = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->lawPersonPic[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("unincorporatedPaymentAuthorizationCertificatePic" == $schemeField){
				
				$needSkip = false;
				
				$this->unincorporatedPaymentAuthorizationCertificatePic = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readString($elem5);
						
						$this->unincorporatedPaymentAuthorizationCertificatePic[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("openAccountAuthPic" == $schemeField){
				
				$needSkip = false;
				
				$this->openAccountAuthPic = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						$input->readString($elem6);
						
						$this->openAccountAuthPic[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("otherPic" == $schemeField){
				
				$needSkip = false;
				
				$this->otherPic = array();
				$_size7 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem7 = null;
						$input->readString($elem7);
						
						$this->otherPic[$_size7++] = $elem7;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
			
			
			
			
			if ("contractScanPic" == $schemeField){
				
				$needSkip = false;
				
				$this->contractScanPic = array();
				$_size8 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem8 = null;
						$input->readString($elem8);
						
						$this->contractScanPic[$_size8++] = $elem8;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
			
			
			
			
			if ("payeeIdcardFrontPic" == $schemeField){
				
				$needSkip = false;
				
				$this->payeeIdcardFrontPic = array();
				$_size9 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem9 = null;
						$input->readString($elem9);
						
						$this->payeeIdcardFrontPic[$_size9++] = $elem9;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("payeeIdcardBackPic" == $schemeField){
				
				$needSkip = false;
				
				$this->payeeIdcardBackPic = array();
				$_size10 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem10 = null;
						$input->readString($elem10);
						
						$this->payeeIdcardBackPic[$_size10++] = $elem10;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("payeeAccountStatementPic" == $schemeField){
				
				$needSkip = false;
				
				$this->payeeAccountStatementPic = array();
				$_size11 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem11 = null;
						$input->readString($elem11);
						
						$this->payeeAccountStatementPic[$_size11++] = $elem11;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("supplierOnlineShopParamList" == $schemeField){
				
				$needSkip = false;
				
				$this->supplierOnlineShopParamList = array();
				$_size12 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem12 = null;
						
						$elem12 = new \com\vip\hcscm\purchase\service\CreateSupplierOnlineShopParam();
						$elem12->read($input);
						
						$this->supplierOnlineShopParamList[$_size12++] = $elem12;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("supplierContactInfoParamList" == $schemeField){
				
				$needSkip = false;
				
				$this->supplierContactInfoParamList = array();
				$_size13 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem13 = null;
						
						$elem13 = new \com\vip\hcscm\purchase\service\CreateSupplierContactInfoParam();
						$elem13->read($input);
						
						$this->supplierContactInfoParamList[$_size13++] = $elem13;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("supplierSettlementParamList" == $schemeField){
				
				$needSkip = false;
				
				$this->supplierSettlementParamList = array();
				$_size14 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem14 = null;
						
						$elem14 = new \com\vip\hcscm\purchase\service\CreateSupplierSettlementParam();
						$elem14->read($input);
						
						$this->supplierSettlementParamList[$_size14++] = $elem14;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('caller');
		$xfer += $output->writeString($this->caller);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operator');
		$xfer += $output->writeString($this->operator);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cargoOwner !== null) {
			
			$xfer += $output->writeFieldBegin('cargoOwner');
			$xfer += $output->writeString($this->cargoOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->legalRepresentativeIdcardFrontPic !== null) {
			
			$xfer += $output->writeFieldBegin('legalRepresentativeIdcardFrontPic');
			
			if (!is_array($this->legalRepresentativeIdcardFrontPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->legalRepresentativeIdcardFrontPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalRepresentativeIdcardBackPic !== null) {
			
			$xfer += $output->writeFieldBegin('legalRepresentativeIdcardBackPic');
			
			if (!is_array($this->legalRepresentativeIdcardBackPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->legalRepresentativeIdcardBackPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRegistrationPic !== null) {
			
			$xfer += $output->writeFieldBegin('taxRegistrationPic');
			
			if (!is_array($this->taxRegistrationPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->taxRegistrationPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessLicense !== null) {
			
			$xfer += $output->writeFieldBegin('businessLicense');
			
			if (!is_array($this->businessLicense)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->businessLicense as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lawPersonPic !== null) {
			
			$xfer += $output->writeFieldBegin('lawPersonPic');
			
			if (!is_array($this->lawPersonPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->lawPersonPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unincorporatedPaymentAuthorizationCertificatePic !== null) {
			
			$xfer += $output->writeFieldBegin('unincorporatedPaymentAuthorizationCertificatePic');
			
			if (!is_array($this->unincorporatedPaymentAuthorizationCertificatePic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->unincorporatedPaymentAuthorizationCertificatePic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openAccountAuthPic !== null) {
			
			$xfer += $output->writeFieldBegin('openAccountAuthPic');
			
			if (!is_array($this->openAccountAuthPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->openAccountAuthPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->otherPic !== null) {
			
			$xfer += $output->writeFieldBegin('otherPic');
			
			if (!is_array($this->otherPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->otherPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		if($this->contractScanPic !== null) {
			
			$xfer += $output->writeFieldBegin('contractScanPic');
			
			if (!is_array($this->contractScanPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->contractScanPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		if($this->payeeIdcardFrontPic !== null) {
			
			$xfer += $output->writeFieldBegin('payeeIdcardFrontPic');
			
			if (!is_array($this->payeeIdcardFrontPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->payeeIdcardFrontPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payeeIdcardBackPic !== null) {
			
			$xfer += $output->writeFieldBegin('payeeIdcardBackPic');
			
			if (!is_array($this->payeeIdcardBackPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->payeeIdcardBackPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payeeAccountStatementPic !== null) {
			
			$xfer += $output->writeFieldBegin('payeeAccountStatementPic');
			
			if (!is_array($this->payeeAccountStatementPic)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->payeeAccountStatementPic as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierOnlineShopParamList !== null) {
			
			$xfer += $output->writeFieldBegin('supplierOnlineShopParamList');
			
			if (!is_array($this->supplierOnlineShopParamList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->supplierOnlineShopParamList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('supplierContactInfoParamList');
		
		if (!is_array($this->supplierContactInfoParamList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->supplierContactInfoParamList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->supplierSettlementParamList !== null) {
			
			$xfer += $output->writeFieldBegin('supplierSettlementParamList');
			
			if (!is_array($this->supplierSettlementParamList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->supplierSettlementParamList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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