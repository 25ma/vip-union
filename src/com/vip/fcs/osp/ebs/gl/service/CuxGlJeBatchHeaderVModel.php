<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class CuxGlJeBatchHeaderVModel {
	
	static $_TSPEC;
	public $jeBatchId = null;
	public $batchName = null;
	public $batchStatus = null;
	public $statusVerified = null;
	public $batchActualFlag = null;
	public $averageJournalFlag = null;
	public $budgetaryControlStatus = null;
	public $approvalStatusCode = null;
	public $batchDefaultEffectiveDate = null;
	public $defaultPeriodName = null;
	public $batchEarliestPostableDate = null;
	public $batchPostedDate = null;
	public $batchDateCreated = null;
	public $batchDescription = null;
	public $batchRunningTotalDr = null;
	public $batchRunningTotalCr = null;
	public $batchRunningTotalAcctDr = null;
	public $batchRunningTotalAcctCr = null;
	public $parentJeBatchId = null;
	public $orgId = null;
	public $postedBy = null;
	public $chartOfAccountsId = null;
	public $periodSetName = null;
	public $accountedPeriodType = null;
	public $approverEmployeeId = null;
	public $jeHeaderId = null;
	public $ledgerId = null;
	public $jeCategory = null;
	public $jeSource = null;
	public $periodName = null;
	public $headerName = null;
	public $currencyCode = null;
	public $headerStatus = null;
	public $headerDateCreated = null;
	public $accrualRevFlag = null;
	public $multiBalSegFlag = null;
	public $headerActualFlag = null;
	public $headerDefaultEffectiveDate = null;
	public $balancedJeFlag = null;
	public $uniqueDate = null;
	public $headerEarliestPostableDate = null;
	public $headerPostedDate = null;
	public $accrualRevEffectiveDate = null;
	public $accrualRevPeriodName = null;
	public $accrualRevStatus = null;
	public $accrualRevJeHeaderId = null;
	public $accrualRevChangeSignFlag = null;
	public $headerDescription = null;
	public $headerRunningTotalDr = null;
	public $headerRunningTotalCr = null;
	public $headerRunningTotalAcctDr = null;
	public $headerRunningTotalAcctCr = null;
	public $currencyConversionRate = null;
	public $currencyConversionType = null;
	public $currencyConversionDate = null;
	public $externalReference = null;
	public $parentJeHeaderId = null;
	public $reversedJeHeaderId = null;
	public $docSequenceValue = null;
	public $jeFromSlaFlag = null;
	public $createBy = null;
	public $updateBy = null;
	public $cuxGlJeLinesVModel = null;
	public $id = null;
	public $reverseType = null;
	public $revHeaderCount = null;
	public $lineCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'jeBatchId'
			),
			2 => array(
			'var' => 'batchName'
			),
			3 => array(
			'var' => 'batchStatus'
			),
			4 => array(
			'var' => 'statusVerified'
			),
			5 => array(
			'var' => 'batchActualFlag'
			),
			6 => array(
			'var' => 'averageJournalFlag'
			),
			7 => array(
			'var' => 'budgetaryControlStatus'
			),
			8 => array(
			'var' => 'approvalStatusCode'
			),
			9 => array(
			'var' => 'batchDefaultEffectiveDate'
			),
			10 => array(
			'var' => 'defaultPeriodName'
			),
			11 => array(
			'var' => 'batchEarliestPostableDate'
			),
			12 => array(
			'var' => 'batchPostedDate'
			),
			13 => array(
			'var' => 'batchDateCreated'
			),
			14 => array(
			'var' => 'batchDescription'
			),
			15 => array(
			'var' => 'batchRunningTotalDr'
			),
			16 => array(
			'var' => 'batchRunningTotalCr'
			),
			17 => array(
			'var' => 'batchRunningTotalAcctDr'
			),
			18 => array(
			'var' => 'batchRunningTotalAcctCr'
			),
			19 => array(
			'var' => 'parentJeBatchId'
			),
			20 => array(
			'var' => 'orgId'
			),
			21 => array(
			'var' => 'postedBy'
			),
			22 => array(
			'var' => 'chartOfAccountsId'
			),
			23 => array(
			'var' => 'periodSetName'
			),
			24 => array(
			'var' => 'accountedPeriodType'
			),
			25 => array(
			'var' => 'approverEmployeeId'
			),
			26 => array(
			'var' => 'jeHeaderId'
			),
			27 => array(
			'var' => 'ledgerId'
			),
			28 => array(
			'var' => 'jeCategory'
			),
			29 => array(
			'var' => 'jeSource'
			),
			30 => array(
			'var' => 'periodName'
			),
			31 => array(
			'var' => 'headerName'
			),
			32 => array(
			'var' => 'currencyCode'
			),
			33 => array(
			'var' => 'headerStatus'
			),
			34 => array(
			'var' => 'headerDateCreated'
			),
			35 => array(
			'var' => 'accrualRevFlag'
			),
			36 => array(
			'var' => 'multiBalSegFlag'
			),
			37 => array(
			'var' => 'headerActualFlag'
			),
			38 => array(
			'var' => 'headerDefaultEffectiveDate'
			),
			39 => array(
			'var' => 'balancedJeFlag'
			),
			40 => array(
			'var' => 'uniqueDate'
			),
			41 => array(
			'var' => 'headerEarliestPostableDate'
			),
			42 => array(
			'var' => 'headerPostedDate'
			),
			43 => array(
			'var' => 'accrualRevEffectiveDate'
			),
			44 => array(
			'var' => 'accrualRevPeriodName'
			),
			45 => array(
			'var' => 'accrualRevStatus'
			),
			46 => array(
			'var' => 'accrualRevJeHeaderId'
			),
			47 => array(
			'var' => 'accrualRevChangeSignFlag'
			),
			48 => array(
			'var' => 'headerDescription'
			),
			49 => array(
			'var' => 'headerRunningTotalDr'
			),
			50 => array(
			'var' => 'headerRunningTotalCr'
			),
			51 => array(
			'var' => 'headerRunningTotalAcctDr'
			),
			52 => array(
			'var' => 'headerRunningTotalAcctCr'
			),
			53 => array(
			'var' => 'currencyConversionRate'
			),
			54 => array(
			'var' => 'currencyConversionType'
			),
			55 => array(
			'var' => 'currencyConversionDate'
			),
			56 => array(
			'var' => 'externalReference'
			),
			57 => array(
			'var' => 'parentJeHeaderId'
			),
			58 => array(
			'var' => 'reversedJeHeaderId'
			),
			59 => array(
			'var' => 'docSequenceValue'
			),
			60 => array(
			'var' => 'jeFromSlaFlag'
			),
			61 => array(
			'var' => 'createBy'
			),
			62 => array(
			'var' => 'updateBy'
			),
			63 => array(
			'var' => 'cuxGlJeLinesVModel'
			),
			64 => array(
			'var' => 'id'
			),
			65 => array(
			'var' => 'reverseType'
			),
			66 => array(
			'var' => 'revHeaderCount'
			),
			67 => array(
			'var' => 'lineCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['jeBatchId'])){
				
				$this->jeBatchId = $vals['jeBatchId'];
			}
			
			
			if (isset($vals['batchName'])){
				
				$this->batchName = $vals['batchName'];
			}
			
			
			if (isset($vals['batchStatus'])){
				
				$this->batchStatus = $vals['batchStatus'];
			}
			
			
			if (isset($vals['statusVerified'])){
				
				$this->statusVerified = $vals['statusVerified'];
			}
			
			
			if (isset($vals['batchActualFlag'])){
				
				$this->batchActualFlag = $vals['batchActualFlag'];
			}
			
			
			if (isset($vals['averageJournalFlag'])){
				
				$this->averageJournalFlag = $vals['averageJournalFlag'];
			}
			
			
			if (isset($vals['budgetaryControlStatus'])){
				
				$this->budgetaryControlStatus = $vals['budgetaryControlStatus'];
			}
			
			
			if (isset($vals['approvalStatusCode'])){
				
				$this->approvalStatusCode = $vals['approvalStatusCode'];
			}
			
			
			if (isset($vals['batchDefaultEffectiveDate'])){
				
				$this->batchDefaultEffectiveDate = $vals['batchDefaultEffectiveDate'];
			}
			
			
			if (isset($vals['defaultPeriodName'])){
				
				$this->defaultPeriodName = $vals['defaultPeriodName'];
			}
			
			
			if (isset($vals['batchEarliestPostableDate'])){
				
				$this->batchEarliestPostableDate = $vals['batchEarliestPostableDate'];
			}
			
			
			if (isset($vals['batchPostedDate'])){
				
				$this->batchPostedDate = $vals['batchPostedDate'];
			}
			
			
			if (isset($vals['batchDateCreated'])){
				
				$this->batchDateCreated = $vals['batchDateCreated'];
			}
			
			
			if (isset($vals['batchDescription'])){
				
				$this->batchDescription = $vals['batchDescription'];
			}
			
			
			if (isset($vals['batchRunningTotalDr'])){
				
				$this->batchRunningTotalDr = $vals['batchRunningTotalDr'];
			}
			
			
			if (isset($vals['batchRunningTotalCr'])){
				
				$this->batchRunningTotalCr = $vals['batchRunningTotalCr'];
			}
			
			
			if (isset($vals['batchRunningTotalAcctDr'])){
				
				$this->batchRunningTotalAcctDr = $vals['batchRunningTotalAcctDr'];
			}
			
			
			if (isset($vals['batchRunningTotalAcctCr'])){
				
				$this->batchRunningTotalAcctCr = $vals['batchRunningTotalAcctCr'];
			}
			
			
			if (isset($vals['parentJeBatchId'])){
				
				$this->parentJeBatchId = $vals['parentJeBatchId'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['postedBy'])){
				
				$this->postedBy = $vals['postedBy'];
			}
			
			
			if (isset($vals['chartOfAccountsId'])){
				
				$this->chartOfAccountsId = $vals['chartOfAccountsId'];
			}
			
			
			if (isset($vals['periodSetName'])){
				
				$this->periodSetName = $vals['periodSetName'];
			}
			
			
			if (isset($vals['accountedPeriodType'])){
				
				$this->accountedPeriodType = $vals['accountedPeriodType'];
			}
			
			
			if (isset($vals['approverEmployeeId'])){
				
				$this->approverEmployeeId = $vals['approverEmployeeId'];
			}
			
			
			if (isset($vals['jeHeaderId'])){
				
				$this->jeHeaderId = $vals['jeHeaderId'];
			}
			
			
			if (isset($vals['ledgerId'])){
				
				$this->ledgerId = $vals['ledgerId'];
			}
			
			
			if (isset($vals['jeCategory'])){
				
				$this->jeCategory = $vals['jeCategory'];
			}
			
			
			if (isset($vals['jeSource'])){
				
				$this->jeSource = $vals['jeSource'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['headerName'])){
				
				$this->headerName = $vals['headerName'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['headerStatus'])){
				
				$this->headerStatus = $vals['headerStatus'];
			}
			
			
			if (isset($vals['headerDateCreated'])){
				
				$this->headerDateCreated = $vals['headerDateCreated'];
			}
			
			
			if (isset($vals['accrualRevFlag'])){
				
				$this->accrualRevFlag = $vals['accrualRevFlag'];
			}
			
			
			if (isset($vals['multiBalSegFlag'])){
				
				$this->multiBalSegFlag = $vals['multiBalSegFlag'];
			}
			
			
			if (isset($vals['headerActualFlag'])){
				
				$this->headerActualFlag = $vals['headerActualFlag'];
			}
			
			
			if (isset($vals['headerDefaultEffectiveDate'])){
				
				$this->headerDefaultEffectiveDate = $vals['headerDefaultEffectiveDate'];
			}
			
			
			if (isset($vals['balancedJeFlag'])){
				
				$this->balancedJeFlag = $vals['balancedJeFlag'];
			}
			
			
			if (isset($vals['uniqueDate'])){
				
				$this->uniqueDate = $vals['uniqueDate'];
			}
			
			
			if (isset($vals['headerEarliestPostableDate'])){
				
				$this->headerEarliestPostableDate = $vals['headerEarliestPostableDate'];
			}
			
			
			if (isset($vals['headerPostedDate'])){
				
				$this->headerPostedDate = $vals['headerPostedDate'];
			}
			
			
			if (isset($vals['accrualRevEffectiveDate'])){
				
				$this->accrualRevEffectiveDate = $vals['accrualRevEffectiveDate'];
			}
			
			
			if (isset($vals['accrualRevPeriodName'])){
				
				$this->accrualRevPeriodName = $vals['accrualRevPeriodName'];
			}
			
			
			if (isset($vals['accrualRevStatus'])){
				
				$this->accrualRevStatus = $vals['accrualRevStatus'];
			}
			
			
			if (isset($vals['accrualRevJeHeaderId'])){
				
				$this->accrualRevJeHeaderId = $vals['accrualRevJeHeaderId'];
			}
			
			
			if (isset($vals['accrualRevChangeSignFlag'])){
				
				$this->accrualRevChangeSignFlag = $vals['accrualRevChangeSignFlag'];
			}
			
			
			if (isset($vals['headerDescription'])){
				
				$this->headerDescription = $vals['headerDescription'];
			}
			
			
			if (isset($vals['headerRunningTotalDr'])){
				
				$this->headerRunningTotalDr = $vals['headerRunningTotalDr'];
			}
			
			
			if (isset($vals['headerRunningTotalCr'])){
				
				$this->headerRunningTotalCr = $vals['headerRunningTotalCr'];
			}
			
			
			if (isset($vals['headerRunningTotalAcctDr'])){
				
				$this->headerRunningTotalAcctDr = $vals['headerRunningTotalAcctDr'];
			}
			
			
			if (isset($vals['headerRunningTotalAcctCr'])){
				
				$this->headerRunningTotalAcctCr = $vals['headerRunningTotalAcctCr'];
			}
			
			
			if (isset($vals['currencyConversionRate'])){
				
				$this->currencyConversionRate = $vals['currencyConversionRate'];
			}
			
			
			if (isset($vals['currencyConversionType'])){
				
				$this->currencyConversionType = $vals['currencyConversionType'];
			}
			
			
			if (isset($vals['currencyConversionDate'])){
				
				$this->currencyConversionDate = $vals['currencyConversionDate'];
			}
			
			
			if (isset($vals['externalReference'])){
				
				$this->externalReference = $vals['externalReference'];
			}
			
			
			if (isset($vals['parentJeHeaderId'])){
				
				$this->parentJeHeaderId = $vals['parentJeHeaderId'];
			}
			
			
			if (isset($vals['reversedJeHeaderId'])){
				
				$this->reversedJeHeaderId = $vals['reversedJeHeaderId'];
			}
			
			
			if (isset($vals['docSequenceValue'])){
				
				$this->docSequenceValue = $vals['docSequenceValue'];
			}
			
			
			if (isset($vals['jeFromSlaFlag'])){
				
				$this->jeFromSlaFlag = $vals['jeFromSlaFlag'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['updateBy'])){
				
				$this->updateBy = $vals['updateBy'];
			}
			
			
			if (isset($vals['cuxGlJeLinesVModel'])){
				
				$this->cuxGlJeLinesVModel = $vals['cuxGlJeLinesVModel'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['reverseType'])){
				
				$this->reverseType = $vals['reverseType'];
			}
			
			
			if (isset($vals['revHeaderCount'])){
				
				$this->revHeaderCount = $vals['revHeaderCount'];
			}
			
			
			if (isset($vals['lineCount'])){
				
				$this->lineCount = $vals['lineCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CuxGlJeBatchHeaderVModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("jeBatchId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->jeBatchId); 
				
			}
			
			
			
			
			if ("batchName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchName);
				
			}
			
			
			
			
			if ("batchStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchStatus);
				
			}
			
			
			
			
			if ("statusVerified" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusVerified);
				
			}
			
			
			
			
			if ("batchActualFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchActualFlag);
				
			}
			
			
			
			
			if ("averageJournalFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->averageJournalFlag);
				
			}
			
			
			
			
			if ("budgetaryControlStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->budgetaryControlStatus);
				
			}
			
			
			
			
			if ("approvalStatusCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalStatusCode);
				
			}
			
			
			
			
			if ("batchDefaultEffectiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->batchDefaultEffectiveDate);
				
			}
			
			
			
			
			if ("defaultPeriodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defaultPeriodName);
				
			}
			
			
			
			
			if ("batchEarliestPostableDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->batchEarliestPostableDate);
				
			}
			
			
			
			
			if ("batchPostedDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->batchPostedDate);
				
			}
			
			
			
			
			if ("batchDateCreated" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->batchDateCreated);
				
			}
			
			
			
			
			if ("batchDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchDescription);
				
			}
			
			
			
			
			if ("batchRunningTotalDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->batchRunningTotalDr);
				
			}
			
			
			
			
			if ("batchRunningTotalCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->batchRunningTotalCr);
				
			}
			
			
			
			
			if ("batchRunningTotalAcctDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->batchRunningTotalAcctDr);
				
			}
			
			
			
			
			if ("batchRunningTotalAcctCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->batchRunningTotalAcctCr);
				
			}
			
			
			
			
			if ("parentJeBatchId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentJeBatchId); 
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orgId); 
				
			}
			
			
			
			
			if ("postedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->postedBy); 
				
			}
			
			
			
			
			if ("chartOfAccountsId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->chartOfAccountsId); 
				
			}
			
			
			
			
			if ("periodSetName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodSetName);
				
			}
			
			
			
			
			if ("accountedPeriodType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountedPeriodType);
				
			}
			
			
			
			
			if ("approverEmployeeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->approverEmployeeId); 
				
			}
			
			
			
			
			if ("jeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->jeHeaderId); 
				
			}
			
			
			
			
			if ("ledgerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ledgerId); 
				
			}
			
			
			
			
			if ("jeCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jeCategory);
				
			}
			
			
			
			
			if ("jeSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jeSource);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("headerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->headerName);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("headerStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->headerStatus);
				
			}
			
			
			
			
			if ("headerDateCreated" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerDateCreated);
				
			}
			
			
			
			
			if ("accrualRevFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevFlag);
				
			}
			
			
			
			
			if ("multiBalSegFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->multiBalSegFlag);
				
			}
			
			
			
			
			if ("headerActualFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->headerActualFlag);
				
			}
			
			
			
			
			if ("headerDefaultEffectiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerDefaultEffectiveDate);
				
			}
			
			
			
			
			if ("balancedJeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->balancedJeFlag);
				
			}
			
			
			
			
			if ("uniqueDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uniqueDate);
				
			}
			
			
			
			
			if ("headerEarliestPostableDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerEarliestPostableDate);
				
			}
			
			
			
			
			if ("headerPostedDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerPostedDate);
				
			}
			
			
			
			
			if ("accrualRevEffectiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accrualRevEffectiveDate);
				
			}
			
			
			
			
			if ("accrualRevPeriodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevPeriodName);
				
			}
			
			
			
			
			if ("accrualRevStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevStatus);
				
			}
			
			
			
			
			if ("accrualRevJeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accrualRevJeHeaderId); 
				
			}
			
			
			
			
			if ("accrualRevChangeSignFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevChangeSignFlag);
				
			}
			
			
			
			
			if ("headerDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->headerDescription);
				
			}
			
			
			
			
			if ("headerRunningTotalDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->headerRunningTotalDr);
				
			}
			
			
			
			
			if ("headerRunningTotalCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->headerRunningTotalCr);
				
			}
			
			
			
			
			if ("headerRunningTotalAcctDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->headerRunningTotalAcctDr);
				
			}
			
			
			
			
			if ("headerRunningTotalAcctCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->headerRunningTotalAcctCr);
				
			}
			
			
			
			
			if ("currencyConversionRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->currencyConversionRate);
				
			}
			
			
			
			
			if ("currencyConversionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyConversionType);
				
			}
			
			
			
			
			if ("currencyConversionDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->currencyConversionDate);
				
			}
			
			
			
			
			if ("externalReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externalReference);
				
			}
			
			
			
			
			if ("parentJeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentJeHeaderId); 
				
			}
			
			
			
			
			if ("reversedJeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reversedJeHeaderId); 
				
			}
			
			
			
			
			if ("docSequenceValue" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->docSequenceValue); 
				
			}
			
			
			
			
			if ("jeFromSlaFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jeFromSlaFlag);
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createBy); 
				
			}
			
			
			
			
			if ("updateBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateBy); 
				
			}
			
			
			
			
			if ("cuxGlJeLinesVModel" == $schemeField){
				
				$needSkip = false;
				
				$this->cuxGlJeLinesVModel = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\ebs\gl\service\CuxGlJeLinesVModel();
						$elem0->read($input);
						
						$this->cuxGlJeLinesVModel[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("reverseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reverseType);
				
			}
			
			
			
			
			if ("revHeaderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->revHeaderCount); 
				
			}
			
			
			
			
			if ("lineCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lineCount); 
				
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
		
		if($this->jeBatchId !== null) {
			
			$xfer += $output->writeFieldBegin('jeBatchId');
			$xfer += $output->writeI64($this->jeBatchId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchName !== null) {
			
			$xfer += $output->writeFieldBegin('batchName');
			$xfer += $output->writeString($this->batchName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchStatus !== null) {
			
			$xfer += $output->writeFieldBegin('batchStatus');
			$xfer += $output->writeString($this->batchStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusVerified !== null) {
			
			$xfer += $output->writeFieldBegin('statusVerified');
			$xfer += $output->writeString($this->statusVerified);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchActualFlag !== null) {
			
			$xfer += $output->writeFieldBegin('batchActualFlag');
			$xfer += $output->writeString($this->batchActualFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->averageJournalFlag !== null) {
			
			$xfer += $output->writeFieldBegin('averageJournalFlag');
			$xfer += $output->writeString($this->averageJournalFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->budgetaryControlStatus !== null) {
			
			$xfer += $output->writeFieldBegin('budgetaryControlStatus');
			$xfer += $output->writeString($this->budgetaryControlStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalStatusCode !== null) {
			
			$xfer += $output->writeFieldBegin('approvalStatusCode');
			$xfer += $output->writeString($this->approvalStatusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchDefaultEffectiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('batchDefaultEffectiveDate');
			$xfer += $output->writeI64($this->batchDefaultEffectiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defaultPeriodName !== null) {
			
			$xfer += $output->writeFieldBegin('defaultPeriodName');
			$xfer += $output->writeString($this->defaultPeriodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchEarliestPostableDate !== null) {
			
			$xfer += $output->writeFieldBegin('batchEarliestPostableDate');
			$xfer += $output->writeI64($this->batchEarliestPostableDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchPostedDate !== null) {
			
			$xfer += $output->writeFieldBegin('batchPostedDate');
			$xfer += $output->writeI64($this->batchPostedDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchDateCreated !== null) {
			
			$xfer += $output->writeFieldBegin('batchDateCreated');
			$xfer += $output->writeI64($this->batchDateCreated);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchDescription !== null) {
			
			$xfer += $output->writeFieldBegin('batchDescription');
			$xfer += $output->writeString($this->batchDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchRunningTotalDr !== null) {
			
			$xfer += $output->writeFieldBegin('batchRunningTotalDr');
			$xfer += $output->writeDouble($this->batchRunningTotalDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchRunningTotalCr !== null) {
			
			$xfer += $output->writeFieldBegin('batchRunningTotalCr');
			$xfer += $output->writeDouble($this->batchRunningTotalCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchRunningTotalAcctDr !== null) {
			
			$xfer += $output->writeFieldBegin('batchRunningTotalAcctDr');
			$xfer += $output->writeDouble($this->batchRunningTotalAcctDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchRunningTotalAcctCr !== null) {
			
			$xfer += $output->writeFieldBegin('batchRunningTotalAcctCr');
			$xfer += $output->writeDouble($this->batchRunningTotalAcctCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentJeBatchId !== null) {
			
			$xfer += $output->writeFieldBegin('parentJeBatchId');
			$xfer += $output->writeI64($this->parentJeBatchId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeI64($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postedBy !== null) {
			
			$xfer += $output->writeFieldBegin('postedBy');
			$xfer += $output->writeI64($this->postedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chartOfAccountsId !== null) {
			
			$xfer += $output->writeFieldBegin('chartOfAccountsId');
			$xfer += $output->writeI64($this->chartOfAccountsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodSetName !== null) {
			
			$xfer += $output->writeFieldBegin('periodSetName');
			$xfer += $output->writeString($this->periodSetName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountedPeriodType !== null) {
			
			$xfer += $output->writeFieldBegin('accountedPeriodType');
			$xfer += $output->writeString($this->accountedPeriodType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approverEmployeeId !== null) {
			
			$xfer += $output->writeFieldBegin('approverEmployeeId');
			$xfer += $output->writeI64($this->approverEmployeeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('jeHeaderId');
			$xfer += $output->writeI64($this->jeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ledgerId !== null) {
			
			$xfer += $output->writeFieldBegin('ledgerId');
			$xfer += $output->writeI64($this->ledgerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeCategory !== null) {
			
			$xfer += $output->writeFieldBegin('jeCategory');
			$xfer += $output->writeString($this->jeCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeSource !== null) {
			
			$xfer += $output->writeFieldBegin('jeSource');
			$xfer += $output->writeString($this->jeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerName !== null) {
			
			$xfer += $output->writeFieldBegin('headerName');
			$xfer += $output->writeString($this->headerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerStatus !== null) {
			
			$xfer += $output->writeFieldBegin('headerStatus');
			$xfer += $output->writeString($this->headerStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerDateCreated !== null) {
			
			$xfer += $output->writeFieldBegin('headerDateCreated');
			$xfer += $output->writeI64($this->headerDateCreated);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevFlag !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevFlag');
			$xfer += $output->writeString($this->accrualRevFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->multiBalSegFlag !== null) {
			
			$xfer += $output->writeFieldBegin('multiBalSegFlag');
			$xfer += $output->writeString($this->multiBalSegFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerActualFlag !== null) {
			
			$xfer += $output->writeFieldBegin('headerActualFlag');
			$xfer += $output->writeString($this->headerActualFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerDefaultEffectiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('headerDefaultEffectiveDate');
			$xfer += $output->writeI64($this->headerDefaultEffectiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->balancedJeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('balancedJeFlag');
			$xfer += $output->writeString($this->balancedJeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uniqueDate !== null) {
			
			$xfer += $output->writeFieldBegin('uniqueDate');
			$xfer += $output->writeString($this->uniqueDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerEarliestPostableDate !== null) {
			
			$xfer += $output->writeFieldBegin('headerEarliestPostableDate');
			$xfer += $output->writeI64($this->headerEarliestPostableDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerPostedDate !== null) {
			
			$xfer += $output->writeFieldBegin('headerPostedDate');
			$xfer += $output->writeI64($this->headerPostedDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevEffectiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevEffectiveDate');
			$xfer += $output->writeI64($this->accrualRevEffectiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevPeriodName !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevPeriodName');
			$xfer += $output->writeString($this->accrualRevPeriodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevStatus !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevStatus');
			$xfer += $output->writeString($this->accrualRevStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevJeHeaderId');
			$xfer += $output->writeI64($this->accrualRevJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevChangeSignFlag !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevChangeSignFlag');
			$xfer += $output->writeString($this->accrualRevChangeSignFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerDescription !== null) {
			
			$xfer += $output->writeFieldBegin('headerDescription');
			$xfer += $output->writeString($this->headerDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerRunningTotalDr !== null) {
			
			$xfer += $output->writeFieldBegin('headerRunningTotalDr');
			$xfer += $output->writeDouble($this->headerRunningTotalDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerRunningTotalCr !== null) {
			
			$xfer += $output->writeFieldBegin('headerRunningTotalCr');
			$xfer += $output->writeDouble($this->headerRunningTotalCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerRunningTotalAcctDr !== null) {
			
			$xfer += $output->writeFieldBegin('headerRunningTotalAcctDr');
			$xfer += $output->writeDouble($this->headerRunningTotalAcctDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerRunningTotalAcctCr !== null) {
			
			$xfer += $output->writeFieldBegin('headerRunningTotalAcctCr');
			$xfer += $output->writeDouble($this->headerRunningTotalAcctCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyConversionRate !== null) {
			
			$xfer += $output->writeFieldBegin('currencyConversionRate');
			$xfer += $output->writeDouble($this->currencyConversionRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyConversionType !== null) {
			
			$xfer += $output->writeFieldBegin('currencyConversionType');
			$xfer += $output->writeString($this->currencyConversionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyConversionDate !== null) {
			
			$xfer += $output->writeFieldBegin('currencyConversionDate');
			$xfer += $output->writeI64($this->currencyConversionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externalReference !== null) {
			
			$xfer += $output->writeFieldBegin('externalReference');
			$xfer += $output->writeString($this->externalReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('parentJeHeaderId');
			$xfer += $output->writeI64($this->parentJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reversedJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('reversedJeHeaderId');
			$xfer += $output->writeI64($this->reversedJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->docSequenceValue !== null) {
			
			$xfer += $output->writeFieldBegin('docSequenceValue');
			$xfer += $output->writeI64($this->docSequenceValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeFromSlaFlag !== null) {
			
			$xfer += $output->writeFieldBegin('jeFromSlaFlag');
			$xfer += $output->writeString($this->jeFromSlaFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeI64($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateBy !== null) {
			
			$xfer += $output->writeFieldBegin('updateBy');
			$xfer += $output->writeI64($this->updateBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cuxGlJeLinesVModel !== null) {
			
			$xfer += $output->writeFieldBegin('cuxGlJeLinesVModel');
			
			if (!is_array($this->cuxGlJeLinesVModel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cuxGlJeLinesVModel as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reverseType !== null) {
			
			$xfer += $output->writeFieldBegin('reverseType');
			$xfer += $output->writeString($this->reverseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->revHeaderCount !== null) {
			
			$xfer += $output->writeFieldBegin('revHeaderCount');
			$xfer += $output->writeI64($this->revHeaderCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineCount !== null) {
			
			$xfer += $output->writeFieldBegin('lineCount');
			$xfer += $output->writeI64($this->lineCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>