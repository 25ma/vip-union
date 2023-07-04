<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class ItemSourceDetailResp {
	
	static $_TSPEC;
	public $globalId = null;
	public $seqNo = null;
	public $po = null;
	public $status = null;
	public $billNumber = null;
	public $accountant = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $defCode = null;
	public $brand = null;
	public $targetAmount = null;
	public $amount = null;
	public $incurredPo = null;
	public $storehouse = null;
	public $returnedPoNo = null;
	public $returnedPoCorp = null;
	public $arrangeReturnedAmount = null;
	public $comments = null;
	public $remark = null;
	public $processFlag = null;
	public $auditor = null;
	public $auditDate = null;
	public $checker = null;
	public $checkDate = null;
	public $finished = null;
	public $item = null;
	public $logisticsDeductedAmount = null;
	public $deductDate = null;
	public $deductWay = null;
	public $deductInvoice = null;
	public $deductInvoiceDate = null;
	public $creationDate = null;
	public $lastUpdatedBy = null;
	public $lastUpdatedDate = null;
	public $operationType = null;
	public $creatorName = null;
	public $busiAssistantId = null;
	public $busiAssistantName = null;
	public $dept = null;
	public $onlineDate = null;
	public $orgId = null;
	public $orgName = null;
	public $finalOrgId = null;
	public $finalOrgName = null;
	public $cooperationType = null;
	public $cooperationTypeName = null;
	public $initDeductWay = null;
	public $cancelReason = null;
	public $auditorName = null;
	public $arAmount = null;
	public $actualCpsAmount = null;
	public $compensateTime = null;
	public $diffAmount = null;
	public $feeItem = null;
	public $feeDef = null;
	public $feeDesc = null;
	public $ebsReceiptNo = null;
	public $source = null;
	public $importKey = null;
	public $sourceType = null;
	public $so = null;
	public $commissionProportion = null;
	public $brandId = null;
	public $extraScale = null;
	public $type = null;
	public $taxRate = null;
	public $targetCurrencyCode = null;
	public $currencyCode = null;
	public $invoiceDate = null;
	public $currencyName = null;
	public $approveStatus = null;
	public $invoiceCreateBy = null;
	public $invoiceCreateNickname = null;
	public $scheduleId = null;
	public $electronicReceiptNo = null;
	public $isCreateReceipt = null;
	public $writeOffStatus = null;
	public $isHideReceipt = null;
	public $writeOffItemSourcesId = null;
	public $invoiceAccountDate = null;
	public $standardAmount = null;
	public $targetExchangeRate = null;
	public $bindBillNumber = null;
	public $taxCode = null;
	public $defCodeBase = null;
	public $brandSn = null;
	public $deptCode = null;
	public $warrantyBillNumber = null;
	public $warrantyRate = null;
	public $warrantyExpireDate = null;
	public $defCodeClass = null;
	public $costCentre = null;
	public $maxAmountPrice = null;
	public $maxAmountRuleId = null;
	public $maxAmountPriority = null;
	public $billType = null;
	public $itemNo = null;
	public $itemDesc = null;
	public $itemPriceAdjustQuantity = null;
	public $itemPriceAdjustAmount = null;
	public $priceAdjustClosingDate = null;
	public $priceAdjustStartDateActive = null;
	public $priceAdjustEndDateActive = null;
	public $oaNo = null;
	public $fid = null;
	public $expId = null;
	public $expLineId = null;
	public $priceAdjustHeaderId = null;
	public $offsetBillNumber = null;
	public $extOrderNum = null;
	public $quantity = null;
	public $returnDocNo = null;
	public $itemSize = null;
	public $vendorGoodsNo = null;
	public $brandCode = null;
	public $brandName = null;
	public $poDeliveryType = null;
	public $poDeliveryTypeName = null;
	public $poWarehouseType = null;
	public $grossMarginRate = null;
	public $isDeleted = null;
	public $isFilled = null;
	public $pickupNumber = null;
	public $deliverNumber = null;
	public $lackQuantity = null;
	public $lackPrice = null;
	public $systemPrice = null;
	public $actualPrice = null;
	public $overtimes = null;
	public $workNumber = null;
	public $returnDiffNumber = null;
	public $vendorFeeback = null;
	public $claimReason = null;
	public $lhNumber = null;
	public $cancelDate = null;
	public $outOfStockReason = null;
	public $priceDiffType = null;
	public $categoryFirst = null;
	public $categorySecond = null;
	public $categoryThird = null;
	public $poTotalPrice = null;
	public $payableQuantity = null;
	public $accountingDeptId = null;
	public $taxNo = null;
	public $specialTaxClass = null;
	public $specialTaxName = null;
	public $dimension = null;
	public $expenseDiffQuantity = null;
	public $belongPeriod = null;
	public $timelyDeliveryRate = null;
	public $executionMode = null;
	public $inflowTime = null;
	public $appointmentTime = null;
	public $actualTime = null;
	public $delayQuantity = null;
	public $timeoutInterval = null;
	public $repairOrderQuantity = null;
	public $repairOrderSn = null;
	public $billTargetAmount = null;
	public $dupSendOrderNo = null;
	public $dupSendTime = null;
	public $dupSendDeliverNo = null;
	public $warehouseExt = null;
	public $settlementPrice = null;
	public $reviewer = null;
	public $workOrderType = null;
	public $orderDate = null;
	public $violationDate = null;
	public $missedReason = null;
	public $missedAmount = null;
	public $cancelAmount = null;
	public $originExpId = null;
	public $signTime = null;
	public $extPoDeliveryTypeName = null;
	public $extSumVendorFavPrice = null;
	public $extSumFavPrice = null;
	public $extWarehouseExt = null;
	public $extGrossMarginRate = null;
	public $extBasePrice = null;
	public $extBillTaxPrice = null;
	public $extOrderPrice = null;
	public $extNetPrice = null;
	public $scheduleDepartmentId = null;
	public $rateMid = null;
	public $origAmount = null;
	public $newAmount = null;
	public $applyId = null;
	public $applySeq = null;
	public $insureTypeName = null;
	public $vendorRate = null;
	public $insureDirection = null;
	public $exchangeFlag = null;
	public $referenceNumber = null;
	public $applyTime = null;
	public $insuredAmount = null;
	public $actParentNo = null;
	public $vendorSyncTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'globalId'
			),
			5 => array(
			'var' => 'seqNo'
			),
			6 => array(
			'var' => 'po'
			),
			7 => array(
			'var' => 'status'
			),
			8 => array(
			'var' => 'billNumber'
			),
			9 => array(
			'var' => 'accountant'
			),
			10 => array(
			'var' => 'vendorCode'
			),
			11 => array(
			'var' => 'vendorName'
			),
			12 => array(
			'var' => 'defCode'
			),
			13 => array(
			'var' => 'brand'
			),
			14 => array(
			'var' => 'targetAmount'
			),
			15 => array(
			'var' => 'amount'
			),
			16 => array(
			'var' => 'incurredPo'
			),
			17 => array(
			'var' => 'storehouse'
			),
			18 => array(
			'var' => 'returnedPoNo'
			),
			19 => array(
			'var' => 'returnedPoCorp'
			),
			20 => array(
			'var' => 'arrangeReturnedAmount'
			),
			21 => array(
			'var' => 'comments'
			),
			22 => array(
			'var' => 'remark'
			),
			23 => array(
			'var' => 'processFlag'
			),
			24 => array(
			'var' => 'auditor'
			),
			25 => array(
			'var' => 'auditDate'
			),
			26 => array(
			'var' => 'checker'
			),
			27 => array(
			'var' => 'checkDate'
			),
			28 => array(
			'var' => 'finished'
			),
			29 => array(
			'var' => 'item'
			),
			30 => array(
			'var' => 'logisticsDeductedAmount'
			),
			31 => array(
			'var' => 'deductDate'
			),
			32 => array(
			'var' => 'deductWay'
			),
			33 => array(
			'var' => 'deductInvoice'
			),
			34 => array(
			'var' => 'deductInvoiceDate'
			),
			36 => array(
			'var' => 'creationDate'
			),
			37 => array(
			'var' => 'lastUpdatedBy'
			),
			38 => array(
			'var' => 'lastUpdatedDate'
			),
			40 => array(
			'var' => 'operationType'
			),
			41 => array(
			'var' => 'creatorName'
			),
			42 => array(
			'var' => 'busiAssistantId'
			),
			43 => array(
			'var' => 'busiAssistantName'
			),
			44 => array(
			'var' => 'dept'
			),
			45 => array(
			'var' => 'onlineDate'
			),
			46 => array(
			'var' => 'orgId'
			),
			47 => array(
			'var' => 'orgName'
			),
			48 => array(
			'var' => 'finalOrgId'
			),
			49 => array(
			'var' => 'finalOrgName'
			),
			50 => array(
			'var' => 'cooperationType'
			),
			51 => array(
			'var' => 'cooperationTypeName'
			),
			52 => array(
			'var' => 'initDeductWay'
			),
			53 => array(
			'var' => 'cancelReason'
			),
			54 => array(
			'var' => 'auditorName'
			),
			55 => array(
			'var' => 'arAmount'
			),
			56 => array(
			'var' => 'actualCpsAmount'
			),
			57 => array(
			'var' => 'compensateTime'
			),
			58 => array(
			'var' => 'diffAmount'
			),
			59 => array(
			'var' => 'feeItem'
			),
			60 => array(
			'var' => 'feeDef'
			),
			61 => array(
			'var' => 'feeDesc'
			),
			62 => array(
			'var' => 'ebsReceiptNo'
			),
			63 => array(
			'var' => 'source'
			),
			64 => array(
			'var' => 'importKey'
			),
			65 => array(
			'var' => 'sourceType'
			),
			66 => array(
			'var' => 'so'
			),
			67 => array(
			'var' => 'commissionProportion'
			),
			68 => array(
			'var' => 'brandId'
			),
			69 => array(
			'var' => 'extraScale'
			),
			70 => array(
			'var' => 'type'
			),
			71 => array(
			'var' => 'taxRate'
			),
			72 => array(
			'var' => 'targetCurrencyCode'
			),
			73 => array(
			'var' => 'currencyCode'
			),
			74 => array(
			'var' => 'invoiceDate'
			),
			75 => array(
			'var' => 'currencyName'
			),
			76 => array(
			'var' => 'approveStatus'
			),
			77 => array(
			'var' => 'invoiceCreateBy'
			),
			78 => array(
			'var' => 'invoiceCreateNickname'
			),
			79 => array(
			'var' => 'scheduleId'
			),
			80 => array(
			'var' => 'electronicReceiptNo'
			),
			81 => array(
			'var' => 'isCreateReceipt'
			),
			82 => array(
			'var' => 'writeOffStatus'
			),
			83 => array(
			'var' => 'isHideReceipt'
			),
			84 => array(
			'var' => 'writeOffItemSourcesId'
			),
			85 => array(
			'var' => 'invoiceAccountDate'
			),
			86 => array(
			'var' => 'standardAmount'
			),
			87 => array(
			'var' => 'targetExchangeRate'
			),
			88 => array(
			'var' => 'bindBillNumber'
			),
			89 => array(
			'var' => 'taxCode'
			),
			90 => array(
			'var' => 'defCodeBase'
			),
			91 => array(
			'var' => 'brandSn'
			),
			92 => array(
			'var' => 'deptCode'
			),
			93 => array(
			'var' => 'warrantyBillNumber'
			),
			94 => array(
			'var' => 'warrantyRate'
			),
			95 => array(
			'var' => 'warrantyExpireDate'
			),
			96 => array(
			'var' => 'defCodeClass'
			),
			97 => array(
			'var' => 'costCentre'
			),
			98 => array(
			'var' => 'maxAmountPrice'
			),
			99 => array(
			'var' => 'maxAmountRuleId'
			),
			100 => array(
			'var' => 'maxAmountPriority'
			),
			101 => array(
			'var' => 'billType'
			),
			102 => array(
			'var' => 'itemNo'
			),
			103 => array(
			'var' => 'itemDesc'
			),
			104 => array(
			'var' => 'itemPriceAdjustQuantity'
			),
			105 => array(
			'var' => 'itemPriceAdjustAmount'
			),
			106 => array(
			'var' => 'priceAdjustClosingDate'
			),
			107 => array(
			'var' => 'priceAdjustStartDateActive'
			),
			108 => array(
			'var' => 'priceAdjustEndDateActive'
			),
			109 => array(
			'var' => 'oaNo'
			),
			110 => array(
			'var' => 'fid'
			),
			111 => array(
			'var' => 'expId'
			),
			112 => array(
			'var' => 'expLineId'
			),
			113 => array(
			'var' => 'priceAdjustHeaderId'
			),
			114 => array(
			'var' => 'offsetBillNumber'
			),
			115 => array(
			'var' => 'extOrderNum'
			),
			116 => array(
			'var' => 'quantity'
			),
			117 => array(
			'var' => 'returnDocNo'
			),
			118 => array(
			'var' => 'itemSize'
			),
			119 => array(
			'var' => 'vendorGoodsNo'
			),
			120 => array(
			'var' => 'brandCode'
			),
			121 => array(
			'var' => 'brandName'
			),
			122 => array(
			'var' => 'poDeliveryType'
			),
			123 => array(
			'var' => 'poDeliveryTypeName'
			),
			124 => array(
			'var' => 'poWarehouseType'
			),
			125 => array(
			'var' => 'grossMarginRate'
			),
			126 => array(
			'var' => 'isDeleted'
			),
			127 => array(
			'var' => 'isFilled'
			),
			128 => array(
			'var' => 'pickupNumber'
			),
			129 => array(
			'var' => 'deliverNumber'
			),
			130 => array(
			'var' => 'lackQuantity'
			),
			131 => array(
			'var' => 'lackPrice'
			),
			132 => array(
			'var' => 'systemPrice'
			),
			133 => array(
			'var' => 'actualPrice'
			),
			134 => array(
			'var' => 'overtimes'
			),
			135 => array(
			'var' => 'workNumber'
			),
			136 => array(
			'var' => 'returnDiffNumber'
			),
			137 => array(
			'var' => 'vendorFeeback'
			),
			138 => array(
			'var' => 'claimReason'
			),
			139 => array(
			'var' => 'lhNumber'
			),
			140 => array(
			'var' => 'cancelDate'
			),
			141 => array(
			'var' => 'outOfStockReason'
			),
			142 => array(
			'var' => 'priceDiffType'
			),
			143 => array(
			'var' => 'categoryFirst'
			),
			144 => array(
			'var' => 'categorySecond'
			),
			145 => array(
			'var' => 'categoryThird'
			),
			146 => array(
			'var' => 'poTotalPrice'
			),
			147 => array(
			'var' => 'payableQuantity'
			),
			148 => array(
			'var' => 'accountingDeptId'
			),
			149 => array(
			'var' => 'taxNo'
			),
			150 => array(
			'var' => 'specialTaxClass'
			),
			151 => array(
			'var' => 'specialTaxName'
			),
			152 => array(
			'var' => 'dimension'
			),
			153 => array(
			'var' => 'expenseDiffQuantity'
			),
			154 => array(
			'var' => 'belongPeriod'
			),
			155 => array(
			'var' => 'timelyDeliveryRate'
			),
			156 => array(
			'var' => 'executionMode'
			),
			157 => array(
			'var' => 'inflowTime'
			),
			158 => array(
			'var' => 'appointmentTime'
			),
			159 => array(
			'var' => 'actualTime'
			),
			160 => array(
			'var' => 'delayQuantity'
			),
			161 => array(
			'var' => 'timeoutInterval'
			),
			162 => array(
			'var' => 'repairOrderQuantity'
			),
			163 => array(
			'var' => 'repairOrderSn'
			),
			164 => array(
			'var' => 'billTargetAmount'
			),
			165 => array(
			'var' => 'dupSendOrderNo'
			),
			166 => array(
			'var' => 'dupSendTime'
			),
			167 => array(
			'var' => 'dupSendDeliverNo'
			),
			168 => array(
			'var' => 'warehouseExt'
			),
			169 => array(
			'var' => 'settlementPrice'
			),
			170 => array(
			'var' => 'reviewer'
			),
			171 => array(
			'var' => 'workOrderType'
			),
			172 => array(
			'var' => 'orderDate'
			),
			173 => array(
			'var' => 'violationDate'
			),
			174 => array(
			'var' => 'missedReason'
			),
			175 => array(
			'var' => 'missedAmount'
			),
			176 => array(
			'var' => 'cancelAmount'
			),
			177 => array(
			'var' => 'originExpId'
			),
			178 => array(
			'var' => 'signTime'
			),
			179 => array(
			'var' => 'extPoDeliveryTypeName'
			),
			180 => array(
			'var' => 'extSumVendorFavPrice'
			),
			181 => array(
			'var' => 'extSumFavPrice'
			),
			182 => array(
			'var' => 'extWarehouseExt'
			),
			183 => array(
			'var' => 'extGrossMarginRate'
			),
			184 => array(
			'var' => 'extBasePrice'
			),
			185 => array(
			'var' => 'extBillTaxPrice'
			),
			186 => array(
			'var' => 'extOrderPrice'
			),
			187 => array(
			'var' => 'extNetPrice'
			),
			188 => array(
			'var' => 'scheduleDepartmentId'
			),
			189 => array(
			'var' => 'rateMid'
			),
			190 => array(
			'var' => 'origAmount'
			),
			191 => array(
			'var' => 'newAmount'
			),
			192 => array(
			'var' => 'applyId'
			),
			193 => array(
			'var' => 'applySeq'
			),
			194 => array(
			'var' => 'insureTypeName'
			),
			195 => array(
			'var' => 'vendorRate'
			),
			196 => array(
			'var' => 'insureDirection'
			),
			197 => array(
			'var' => 'exchangeFlag'
			),
			198 => array(
			'var' => 'referenceNumber'
			),
			199 => array(
			'var' => 'applyTime'
			),
			200 => array(
			'var' => 'insuredAmount'
			),
			201 => array(
			'var' => 'actParentNo'
			),
			202 => array(
			'var' => 'vendorSyncTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['billNumber'])){
				
				$this->billNumber = $vals['billNumber'];
			}
			
			
			if (isset($vals['accountant'])){
				
				$this->accountant = $vals['accountant'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['defCode'])){
				
				$this->defCode = $vals['defCode'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['targetAmount'])){
				
				$this->targetAmount = $vals['targetAmount'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['incurredPo'])){
				
				$this->incurredPo = $vals['incurredPo'];
			}
			
			
			if (isset($vals['storehouse'])){
				
				$this->storehouse = $vals['storehouse'];
			}
			
			
			if (isset($vals['returnedPoNo'])){
				
				$this->returnedPoNo = $vals['returnedPoNo'];
			}
			
			
			if (isset($vals['returnedPoCorp'])){
				
				$this->returnedPoCorp = $vals['returnedPoCorp'];
			}
			
			
			if (isset($vals['arrangeReturnedAmount'])){
				
				$this->arrangeReturnedAmount = $vals['arrangeReturnedAmount'];
			}
			
			
			if (isset($vals['comments'])){
				
				$this->comments = $vals['comments'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['processFlag'])){
				
				$this->processFlag = $vals['processFlag'];
			}
			
			
			if (isset($vals['auditor'])){
				
				$this->auditor = $vals['auditor'];
			}
			
			
			if (isset($vals['auditDate'])){
				
				$this->auditDate = $vals['auditDate'];
			}
			
			
			if (isset($vals['checker'])){
				
				$this->checker = $vals['checker'];
			}
			
			
			if (isset($vals['checkDate'])){
				
				$this->checkDate = $vals['checkDate'];
			}
			
			
			if (isset($vals['finished'])){
				
				$this->finished = $vals['finished'];
			}
			
			
			if (isset($vals['item'])){
				
				$this->item = $vals['item'];
			}
			
			
			if (isset($vals['logisticsDeductedAmount'])){
				
				$this->logisticsDeductedAmount = $vals['logisticsDeductedAmount'];
			}
			
			
			if (isset($vals['deductDate'])){
				
				$this->deductDate = $vals['deductDate'];
			}
			
			
			if (isset($vals['deductWay'])){
				
				$this->deductWay = $vals['deductWay'];
			}
			
			
			if (isset($vals['deductInvoice'])){
				
				$this->deductInvoice = $vals['deductInvoice'];
			}
			
			
			if (isset($vals['deductInvoiceDate'])){
				
				$this->deductInvoiceDate = $vals['deductInvoiceDate'];
			}
			
			
			if (isset($vals['creationDate'])){
				
				$this->creationDate = $vals['creationDate'];
			}
			
			
			if (isset($vals['lastUpdatedBy'])){
				
				$this->lastUpdatedBy = $vals['lastUpdatedBy'];
			}
			
			
			if (isset($vals['lastUpdatedDate'])){
				
				$this->lastUpdatedDate = $vals['lastUpdatedDate'];
			}
			
			
			if (isset($vals['operationType'])){
				
				$this->operationType = $vals['operationType'];
			}
			
			
			if (isset($vals['creatorName'])){
				
				$this->creatorName = $vals['creatorName'];
			}
			
			
			if (isset($vals['busiAssistantId'])){
				
				$this->busiAssistantId = $vals['busiAssistantId'];
			}
			
			
			if (isset($vals['busiAssistantName'])){
				
				$this->busiAssistantName = $vals['busiAssistantName'];
			}
			
			
			if (isset($vals['dept'])){
				
				$this->dept = $vals['dept'];
			}
			
			
			if (isset($vals['onlineDate'])){
				
				$this->onlineDate = $vals['onlineDate'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['orgName'])){
				
				$this->orgName = $vals['orgName'];
			}
			
			
			if (isset($vals['finalOrgId'])){
				
				$this->finalOrgId = $vals['finalOrgId'];
			}
			
			
			if (isset($vals['finalOrgName'])){
				
				$this->finalOrgName = $vals['finalOrgName'];
			}
			
			
			if (isset($vals['cooperationType'])){
				
				$this->cooperationType = $vals['cooperationType'];
			}
			
			
			if (isset($vals['cooperationTypeName'])){
				
				$this->cooperationTypeName = $vals['cooperationTypeName'];
			}
			
			
			if (isset($vals['initDeductWay'])){
				
				$this->initDeductWay = $vals['initDeductWay'];
			}
			
			
			if (isset($vals['cancelReason'])){
				
				$this->cancelReason = $vals['cancelReason'];
			}
			
			
			if (isset($vals['auditorName'])){
				
				$this->auditorName = $vals['auditorName'];
			}
			
			
			if (isset($vals['arAmount'])){
				
				$this->arAmount = $vals['arAmount'];
			}
			
			
			if (isset($vals['actualCpsAmount'])){
				
				$this->actualCpsAmount = $vals['actualCpsAmount'];
			}
			
			
			if (isset($vals['compensateTime'])){
				
				$this->compensateTime = $vals['compensateTime'];
			}
			
			
			if (isset($vals['diffAmount'])){
				
				$this->diffAmount = $vals['diffAmount'];
			}
			
			
			if (isset($vals['feeItem'])){
				
				$this->feeItem = $vals['feeItem'];
			}
			
			
			if (isset($vals['feeDef'])){
				
				$this->feeDef = $vals['feeDef'];
			}
			
			
			if (isset($vals['feeDesc'])){
				
				$this->feeDesc = $vals['feeDesc'];
			}
			
			
			if (isset($vals['ebsReceiptNo'])){
				
				$this->ebsReceiptNo = $vals['ebsReceiptNo'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['importKey'])){
				
				$this->importKey = $vals['importKey'];
			}
			
			
			if (isset($vals['sourceType'])){
				
				$this->sourceType = $vals['sourceType'];
			}
			
			
			if (isset($vals['so'])){
				
				$this->so = $vals['so'];
			}
			
			
			if (isset($vals['commissionProportion'])){
				
				$this->commissionProportion = $vals['commissionProportion'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['extraScale'])){
				
				$this->extraScale = $vals['extraScale'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['targetCurrencyCode'])){
				
				$this->targetCurrencyCode = $vals['targetCurrencyCode'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['invoiceDate'])){
				
				$this->invoiceDate = $vals['invoiceDate'];
			}
			
			
			if (isset($vals['currencyName'])){
				
				$this->currencyName = $vals['currencyName'];
			}
			
			
			if (isset($vals['approveStatus'])){
				
				$this->approveStatus = $vals['approveStatus'];
			}
			
			
			if (isset($vals['invoiceCreateBy'])){
				
				$this->invoiceCreateBy = $vals['invoiceCreateBy'];
			}
			
			
			if (isset($vals['invoiceCreateNickname'])){
				
				$this->invoiceCreateNickname = $vals['invoiceCreateNickname'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['electronicReceiptNo'])){
				
				$this->electronicReceiptNo = $vals['electronicReceiptNo'];
			}
			
			
			if (isset($vals['isCreateReceipt'])){
				
				$this->isCreateReceipt = $vals['isCreateReceipt'];
			}
			
			
			if (isset($vals['writeOffStatus'])){
				
				$this->writeOffStatus = $vals['writeOffStatus'];
			}
			
			
			if (isset($vals['isHideReceipt'])){
				
				$this->isHideReceipt = $vals['isHideReceipt'];
			}
			
			
			if (isset($vals['writeOffItemSourcesId'])){
				
				$this->writeOffItemSourcesId = $vals['writeOffItemSourcesId'];
			}
			
			
			if (isset($vals['invoiceAccountDate'])){
				
				$this->invoiceAccountDate = $vals['invoiceAccountDate'];
			}
			
			
			if (isset($vals['standardAmount'])){
				
				$this->standardAmount = $vals['standardAmount'];
			}
			
			
			if (isset($vals['targetExchangeRate'])){
				
				$this->targetExchangeRate = $vals['targetExchangeRate'];
			}
			
			
			if (isset($vals['bindBillNumber'])){
				
				$this->bindBillNumber = $vals['bindBillNumber'];
			}
			
			
			if (isset($vals['taxCode'])){
				
				$this->taxCode = $vals['taxCode'];
			}
			
			
			if (isset($vals['defCodeBase'])){
				
				$this->defCodeBase = $vals['defCodeBase'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['deptCode'])){
				
				$this->deptCode = $vals['deptCode'];
			}
			
			
			if (isset($vals['warrantyBillNumber'])){
				
				$this->warrantyBillNumber = $vals['warrantyBillNumber'];
			}
			
			
			if (isset($vals['warrantyRate'])){
				
				$this->warrantyRate = $vals['warrantyRate'];
			}
			
			
			if (isset($vals['warrantyExpireDate'])){
				
				$this->warrantyExpireDate = $vals['warrantyExpireDate'];
			}
			
			
			if (isset($vals['defCodeClass'])){
				
				$this->defCodeClass = $vals['defCodeClass'];
			}
			
			
			if (isset($vals['costCentre'])){
				
				$this->costCentre = $vals['costCentre'];
			}
			
			
			if (isset($vals['maxAmountPrice'])){
				
				$this->maxAmountPrice = $vals['maxAmountPrice'];
			}
			
			
			if (isset($vals['maxAmountRuleId'])){
				
				$this->maxAmountRuleId = $vals['maxAmountRuleId'];
			}
			
			
			if (isset($vals['maxAmountPriority'])){
				
				$this->maxAmountPriority = $vals['maxAmountPriority'];
			}
			
			
			if (isset($vals['billType'])){
				
				$this->billType = $vals['billType'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDesc'])){
				
				$this->itemDesc = $vals['itemDesc'];
			}
			
			
			if (isset($vals['itemPriceAdjustQuantity'])){
				
				$this->itemPriceAdjustQuantity = $vals['itemPriceAdjustQuantity'];
			}
			
			
			if (isset($vals['itemPriceAdjustAmount'])){
				
				$this->itemPriceAdjustAmount = $vals['itemPriceAdjustAmount'];
			}
			
			
			if (isset($vals['priceAdjustClosingDate'])){
				
				$this->priceAdjustClosingDate = $vals['priceAdjustClosingDate'];
			}
			
			
			if (isset($vals['priceAdjustStartDateActive'])){
				
				$this->priceAdjustStartDateActive = $vals['priceAdjustStartDateActive'];
			}
			
			
			if (isset($vals['priceAdjustEndDateActive'])){
				
				$this->priceAdjustEndDateActive = $vals['priceAdjustEndDateActive'];
			}
			
			
			if (isset($vals['oaNo'])){
				
				$this->oaNo = $vals['oaNo'];
			}
			
			
			if (isset($vals['fid'])){
				
				$this->fid = $vals['fid'];
			}
			
			
			if (isset($vals['expId'])){
				
				$this->expId = $vals['expId'];
			}
			
			
			if (isset($vals['expLineId'])){
				
				$this->expLineId = $vals['expLineId'];
			}
			
			
			if (isset($vals['priceAdjustHeaderId'])){
				
				$this->priceAdjustHeaderId = $vals['priceAdjustHeaderId'];
			}
			
			
			if (isset($vals['offsetBillNumber'])){
				
				$this->offsetBillNumber = $vals['offsetBillNumber'];
			}
			
			
			if (isset($vals['extOrderNum'])){
				
				$this->extOrderNum = $vals['extOrderNum'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['returnDocNo'])){
				
				$this->returnDocNo = $vals['returnDocNo'];
			}
			
			
			if (isset($vals['itemSize'])){
				
				$this->itemSize = $vals['itemSize'];
			}
			
			
			if (isset($vals['vendorGoodsNo'])){
				
				$this->vendorGoodsNo = $vals['vendorGoodsNo'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['poDeliveryType'])){
				
				$this->poDeliveryType = $vals['poDeliveryType'];
			}
			
			
			if (isset($vals['poDeliveryTypeName'])){
				
				$this->poDeliveryTypeName = $vals['poDeliveryTypeName'];
			}
			
			
			if (isset($vals['poWarehouseType'])){
				
				$this->poWarehouseType = $vals['poWarehouseType'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['isFilled'])){
				
				$this->isFilled = $vals['isFilled'];
			}
			
			
			if (isset($vals['pickupNumber'])){
				
				$this->pickupNumber = $vals['pickupNumber'];
			}
			
			
			if (isset($vals['deliverNumber'])){
				
				$this->deliverNumber = $vals['deliverNumber'];
			}
			
			
			if (isset($vals['lackQuantity'])){
				
				$this->lackQuantity = $vals['lackQuantity'];
			}
			
			
			if (isset($vals['lackPrice'])){
				
				$this->lackPrice = $vals['lackPrice'];
			}
			
			
			if (isset($vals['systemPrice'])){
				
				$this->systemPrice = $vals['systemPrice'];
			}
			
			
			if (isset($vals['actualPrice'])){
				
				$this->actualPrice = $vals['actualPrice'];
			}
			
			
			if (isset($vals['overtimes'])){
				
				$this->overtimes = $vals['overtimes'];
			}
			
			
			if (isset($vals['workNumber'])){
				
				$this->workNumber = $vals['workNumber'];
			}
			
			
			if (isset($vals['returnDiffNumber'])){
				
				$this->returnDiffNumber = $vals['returnDiffNumber'];
			}
			
			
			if (isset($vals['vendorFeeback'])){
				
				$this->vendorFeeback = $vals['vendorFeeback'];
			}
			
			
			if (isset($vals['claimReason'])){
				
				$this->claimReason = $vals['claimReason'];
			}
			
			
			if (isset($vals['lhNumber'])){
				
				$this->lhNumber = $vals['lhNumber'];
			}
			
			
			if (isset($vals['cancelDate'])){
				
				$this->cancelDate = $vals['cancelDate'];
			}
			
			
			if (isset($vals['outOfStockReason'])){
				
				$this->outOfStockReason = $vals['outOfStockReason'];
			}
			
			
			if (isset($vals['priceDiffType'])){
				
				$this->priceDiffType = $vals['priceDiffType'];
			}
			
			
			if (isset($vals['categoryFirst'])){
				
				$this->categoryFirst = $vals['categoryFirst'];
			}
			
			
			if (isset($vals['categorySecond'])){
				
				$this->categorySecond = $vals['categorySecond'];
			}
			
			
			if (isset($vals['categoryThird'])){
				
				$this->categoryThird = $vals['categoryThird'];
			}
			
			
			if (isset($vals['poTotalPrice'])){
				
				$this->poTotalPrice = $vals['poTotalPrice'];
			}
			
			
			if (isset($vals['payableQuantity'])){
				
				$this->payableQuantity = $vals['payableQuantity'];
			}
			
			
			if (isset($vals['accountingDeptId'])){
				
				$this->accountingDeptId = $vals['accountingDeptId'];
			}
			
			
			if (isset($vals['taxNo'])){
				
				$this->taxNo = $vals['taxNo'];
			}
			
			
			if (isset($vals['specialTaxClass'])){
				
				$this->specialTaxClass = $vals['specialTaxClass'];
			}
			
			
			if (isset($vals['specialTaxName'])){
				
				$this->specialTaxName = $vals['specialTaxName'];
			}
			
			
			if (isset($vals['dimension'])){
				
				$this->dimension = $vals['dimension'];
			}
			
			
			if (isset($vals['expenseDiffQuantity'])){
				
				$this->expenseDiffQuantity = $vals['expenseDiffQuantity'];
			}
			
			
			if (isset($vals['belongPeriod'])){
				
				$this->belongPeriod = $vals['belongPeriod'];
			}
			
			
			if (isset($vals['timelyDeliveryRate'])){
				
				$this->timelyDeliveryRate = $vals['timelyDeliveryRate'];
			}
			
			
			if (isset($vals['executionMode'])){
				
				$this->executionMode = $vals['executionMode'];
			}
			
			
			if (isset($vals['inflowTime'])){
				
				$this->inflowTime = $vals['inflowTime'];
			}
			
			
			if (isset($vals['appointmentTime'])){
				
				$this->appointmentTime = $vals['appointmentTime'];
			}
			
			
			if (isset($vals['actualTime'])){
				
				$this->actualTime = $vals['actualTime'];
			}
			
			
			if (isset($vals['delayQuantity'])){
				
				$this->delayQuantity = $vals['delayQuantity'];
			}
			
			
			if (isset($vals['timeoutInterval'])){
				
				$this->timeoutInterval = $vals['timeoutInterval'];
			}
			
			
			if (isset($vals['repairOrderQuantity'])){
				
				$this->repairOrderQuantity = $vals['repairOrderQuantity'];
			}
			
			
			if (isset($vals['repairOrderSn'])){
				
				$this->repairOrderSn = $vals['repairOrderSn'];
			}
			
			
			if (isset($vals['billTargetAmount'])){
				
				$this->billTargetAmount = $vals['billTargetAmount'];
			}
			
			
			if (isset($vals['dupSendOrderNo'])){
				
				$this->dupSendOrderNo = $vals['dupSendOrderNo'];
			}
			
			
			if (isset($vals['dupSendTime'])){
				
				$this->dupSendTime = $vals['dupSendTime'];
			}
			
			
			if (isset($vals['dupSendDeliverNo'])){
				
				$this->dupSendDeliverNo = $vals['dupSendDeliverNo'];
			}
			
			
			if (isset($vals['warehouseExt'])){
				
				$this->warehouseExt = $vals['warehouseExt'];
			}
			
			
			if (isset($vals['settlementPrice'])){
				
				$this->settlementPrice = $vals['settlementPrice'];
			}
			
			
			if (isset($vals['reviewer'])){
				
				$this->reviewer = $vals['reviewer'];
			}
			
			
			if (isset($vals['workOrderType'])){
				
				$this->workOrderType = $vals['workOrderType'];
			}
			
			
			if (isset($vals['orderDate'])){
				
				$this->orderDate = $vals['orderDate'];
			}
			
			
			if (isset($vals['violationDate'])){
				
				$this->violationDate = $vals['violationDate'];
			}
			
			
			if (isset($vals['missedReason'])){
				
				$this->missedReason = $vals['missedReason'];
			}
			
			
			if (isset($vals['missedAmount'])){
				
				$this->missedAmount = $vals['missedAmount'];
			}
			
			
			if (isset($vals['cancelAmount'])){
				
				$this->cancelAmount = $vals['cancelAmount'];
			}
			
			
			if (isset($vals['originExpId'])){
				
				$this->originExpId = $vals['originExpId'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['extPoDeliveryTypeName'])){
				
				$this->extPoDeliveryTypeName = $vals['extPoDeliveryTypeName'];
			}
			
			
			if (isset($vals['extSumVendorFavPrice'])){
				
				$this->extSumVendorFavPrice = $vals['extSumVendorFavPrice'];
			}
			
			
			if (isset($vals['extSumFavPrice'])){
				
				$this->extSumFavPrice = $vals['extSumFavPrice'];
			}
			
			
			if (isset($vals['extWarehouseExt'])){
				
				$this->extWarehouseExt = $vals['extWarehouseExt'];
			}
			
			
			if (isset($vals['extGrossMarginRate'])){
				
				$this->extGrossMarginRate = $vals['extGrossMarginRate'];
			}
			
			
			if (isset($vals['extBasePrice'])){
				
				$this->extBasePrice = $vals['extBasePrice'];
			}
			
			
			if (isset($vals['extBillTaxPrice'])){
				
				$this->extBillTaxPrice = $vals['extBillTaxPrice'];
			}
			
			
			if (isset($vals['extOrderPrice'])){
				
				$this->extOrderPrice = $vals['extOrderPrice'];
			}
			
			
			if (isset($vals['extNetPrice'])){
				
				$this->extNetPrice = $vals['extNetPrice'];
			}
			
			
			if (isset($vals['scheduleDepartmentId'])){
				
				$this->scheduleDepartmentId = $vals['scheduleDepartmentId'];
			}
			
			
			if (isset($vals['rateMid'])){
				
				$this->rateMid = $vals['rateMid'];
			}
			
			
			if (isset($vals['origAmount'])){
				
				$this->origAmount = $vals['origAmount'];
			}
			
			
			if (isset($vals['newAmount'])){
				
				$this->newAmount = $vals['newAmount'];
			}
			
			
			if (isset($vals['applyId'])){
				
				$this->applyId = $vals['applyId'];
			}
			
			
			if (isset($vals['applySeq'])){
				
				$this->applySeq = $vals['applySeq'];
			}
			
			
			if (isset($vals['insureTypeName'])){
				
				$this->insureTypeName = $vals['insureTypeName'];
			}
			
			
			if (isset($vals['vendorRate'])){
				
				$this->vendorRate = $vals['vendorRate'];
			}
			
			
			if (isset($vals['insureDirection'])){
				
				$this->insureDirection = $vals['insureDirection'];
			}
			
			
			if (isset($vals['exchangeFlag'])){
				
				$this->exchangeFlag = $vals['exchangeFlag'];
			}
			
			
			if (isset($vals['referenceNumber'])){
				
				$this->referenceNumber = $vals['referenceNumber'];
			}
			
			
			if (isset($vals['applyTime'])){
				
				$this->applyTime = $vals['applyTime'];
			}
			
			
			if (isset($vals['insuredAmount'])){
				
				$this->insuredAmount = $vals['insuredAmount'];
			}
			
			
			if (isset($vals['actParentNo'])){
				
				$this->actParentNo = $vals['actParentNo'];
			}
			
			
			if (isset($vals['vendorSyncTime'])){
				
				$this->vendorSyncTime = $vals['vendorSyncTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ItemSourceDetailResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("billNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNumber);
				
			}
			
			
			
			
			if ("accountant" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountant);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("defCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defCode);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("targetAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->targetAmount);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("incurredPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->incurredPo);
				
			}
			
			
			
			
			if ("storehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storehouse);
				
			}
			
			
			
			
			if ("returnedPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnedPoNo);
				
			}
			
			
			
			
			if ("returnedPoCorp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnedPoCorp);
				
			}
			
			
			
			
			if ("arrangeReturnedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->arrangeReturnedAmount);
				
			}
			
			
			
			
			if ("comments" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->comments);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("processFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->processFlag); 
				
			}
			
			
			
			
			if ("auditor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditor);
				
			}
			
			
			
			
			if ("auditDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->auditDate);
				
			}
			
			
			
			
			if ("checker" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->checker);
				
			}
			
			
			
			
			if ("checkDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->checkDate);
				
			}
			
			
			
			
			if ("finished" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->finished);
				
			}
			
			
			
			
			if ("item" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item);
				
			}
			
			
			
			
			if ("logisticsDeductedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->logisticsDeductedAmount);
				
			}
			
			
			
			
			if ("deductDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deductDate);
				
			}
			
			
			
			
			if ("deductWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deductWay);
				
			}
			
			
			
			
			if ("deductInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deductInvoice);
				
			}
			
			
			
			
			if ("deductInvoiceDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deductInvoiceDate);
				
			}
			
			
			
			
			if ("creationDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->creationDate);
				
			}
			
			
			
			
			if ("lastUpdatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedBy); 
				
			}
			
			
			
			
			if ("lastUpdatedDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedDate);
				
			}
			
			
			
			
			if ("operationType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->operationType); 
				
			}
			
			
			
			
			if ("creatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creatorName);
				
			}
			
			
			
			
			if ("busiAssistantId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->busiAssistantId);
				
			}
			
			
			
			
			if ("busiAssistantName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->busiAssistantName);
				
			}
			
			
			
			
			if ("dept" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept);
				
			}
			
			
			
			
			if ("onlineDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineDate);
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orgId); 
				
			}
			
			
			
			
			if ("orgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgName);
				
			}
			
			
			
			
			if ("finalOrgId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->finalOrgId); 
				
			}
			
			
			
			
			if ("finalOrgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->finalOrgName);
				
			}
			
			
			
			
			if ("cooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperationType);
				
			}
			
			
			
			
			if ("cooperationTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperationTypeName);
				
			}
			
			
			
			
			if ("initDeductWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->initDeductWay);
				
			}
			
			
			
			
			if ("cancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelReason);
				
			}
			
			
			
			
			if ("auditorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditorName);
				
			}
			
			
			
			
			if ("arAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->arAmount);
				
			}
			
			
			
			
			if ("actualCpsAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualCpsAmount);
				
			}
			
			
			
			
			if ("compensateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->compensateTime);
				
			}
			
			
			
			
			if ("diffAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->diffAmount);
				
			}
			
			
			
			
			if ("feeItem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeItem);
				
			}
			
			
			
			
			if ("feeDef" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeDef);
				
			}
			
			
			
			
			if ("feeDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeDesc);
				
			}
			
			
			
			
			if ("ebsReceiptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ebsReceiptNo);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("importKey" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->importKey); 
				
			}
			
			
			
			
			if ("sourceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceType);
				
			}
			
			
			
			
			if ("so" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->so);
				
			}
			
			
			
			
			if ("commissionProportion" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->commissionProportion);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("extraScale" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extraScale);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxRate);
				
			}
			
			
			
			
			if ("targetCurrencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->targetCurrencyCode);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("invoiceDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->invoiceDate);
				
			}
			
			
			
			
			if ("currencyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyName);
				
			}
			
			
			
			
			if ("approveStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approveStatus);
				
			}
			
			
			
			
			if ("invoiceCreateBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->invoiceCreateBy); 
				
			}
			
			
			
			
			if ("invoiceCreateNickname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCreateNickname);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("electronicReceiptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->electronicReceiptNo);
				
			}
			
			
			
			
			if ("isCreateReceipt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isCreateReceipt);
				
			}
			
			
			
			
			if ("writeOffStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->writeOffStatus);
				
			}
			
			
			
			
			if ("isHideReceipt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isHideReceipt);
				
			}
			
			
			
			
			if ("writeOffItemSourcesId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->writeOffItemSourcesId); 
				
			}
			
			
			
			
			if ("invoiceAccountDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceAccountDate);
				
			}
			
			
			
			
			if ("standardAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->standardAmount);
				
			}
			
			
			
			
			if ("targetExchangeRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->targetExchangeRate);
				
			}
			
			
			
			
			if ("bindBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bindBillNumber);
				
			}
			
			
			
			
			if ("taxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxCode);
				
			}
			
			
			
			
			if ("defCodeBase" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defCodeBase);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("deptCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deptCode);
				
			}
			
			
			
			
			if ("warrantyBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warrantyBillNumber);
				
			}
			
			
			
			
			if ("warrantyRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->warrantyRate);
				
			}
			
			
			
			
			if ("warrantyExpireDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->warrantyExpireDate);
				
			}
			
			
			
			
			if ("defCodeClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defCodeClass);
				
			}
			
			
			
			
			if ("costCentre" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->costCentre);
				
			}
			
			
			
			
			if ("maxAmountPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->maxAmountPrice);
				
			}
			
			
			
			
			if ("maxAmountRuleId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->maxAmountRuleId); 
				
			}
			
			
			
			
			if ("maxAmountPriority" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->maxAmountPriority); 
				
			}
			
			
			
			
			if ("billType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billType);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDesc);
				
			}
			
			
			
			
			if ("itemPriceAdjustQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->itemPriceAdjustQuantity);
				
			}
			
			
			
			
			if ("itemPriceAdjustAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->itemPriceAdjustAmount);
				
			}
			
			
			
			
			if ("priceAdjustClosingDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceAdjustClosingDate);
				
			}
			
			
			
			
			if ("priceAdjustStartDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceAdjustStartDateActive);
				
			}
			
			
			
			
			if ("priceAdjustEndDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceAdjustEndDateActive);
				
			}
			
			
			
			
			if ("oaNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oaNo);
				
			}
			
			
			
			
			if ("fid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fid);
				
			}
			
			
			
			
			if ("expId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expId);
				
			}
			
			
			
			
			if ("expLineId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expLineId); 
				
			}
			
			
			
			
			if ("priceAdjustHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceAdjustHeaderId);
				
			}
			
			
			
			
			if ("offsetBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offsetBillNumber);
				
			}
			
			
			
			
			if ("extOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderNum);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->quantity);
				
			}
			
			
			
			
			if ("returnDocNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnDocNo);
				
			}
			
			
			
			
			if ("itemSize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemSize);
				
			}
			
			
			
			
			if ("vendorGoodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorGoodsNo);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("poDeliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryType);
				
			}
			
			
			
			
			if ("poDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryTypeName);
				
			}
			
			
			
			
			if ("poWarehouseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poWarehouseType);
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossMarginRate);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
			}
			
			
			
			
			if ("isFilled" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isFilled); 
				
			}
			
			
			
			
			if ("pickupNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickupNumber);
				
			}
			
			
			
			
			if ("deliverNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverNumber);
				
			}
			
			
			
			
			if ("lackQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->lackQuantity);
				
			}
			
			
			
			
			if ("lackPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->lackPrice);
				
			}
			
			
			
			
			if ("systemPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->systemPrice);
				
			}
			
			
			
			
			if ("actualPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualPrice);
				
			}
			
			
			
			
			if ("overtimes" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->overtimes); 
				
			}
			
			
			
			
			if ("workNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workNumber);
				
			}
			
			
			
			
			if ("returnDiffNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnDiffNumber);
				
			}
			
			
			
			
			if ("vendorFeeback" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorFeeback);
				
			}
			
			
			
			
			if ("claimReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->claimReason);
				
			}
			
			
			
			
			if ("lhNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lhNumber);
				
			}
			
			
			
			
			if ("cancelDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cancelDate);
				
			}
			
			
			
			
			if ("outOfStockReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outOfStockReason);
				
			}
			
			
			
			
			if ("priceDiffType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceDiffType);
				
			}
			
			
			
			
			if ("categoryFirst" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryFirst);
				
			}
			
			
			
			
			if ("categorySecond" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categorySecond);
				
			}
			
			
			
			
			if ("categoryThird" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryThird);
				
			}
			
			
			
			
			if ("poTotalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poTotalPrice);
				
			}
			
			
			
			
			if ("payableQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableQuantity);
				
			}
			
			
			
			
			if ("accountingDeptId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountingDeptId);
				
			}
			
			
			
			
			if ("taxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxNo);
				
			}
			
			
			
			
			if ("specialTaxClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialTaxClass);
				
			}
			
			
			
			
			if ("specialTaxName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialTaxName);
				
			}
			
			
			
			
			if ("dimension" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dimension);
				
			}
			
			
			
			
			if ("expenseDiffQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->expenseDiffQuantity);
				
			}
			
			
			
			
			if ("belongPeriod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->belongPeriod);
				
			}
			
			
			
			
			if ("timelyDeliveryRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->timelyDeliveryRate);
				
			}
			
			
			
			
			if ("executionMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->executionMode);
				
			}
			
			
			
			
			if ("inflowTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->inflowTime);
				
			}
			
			
			
			
			if ("appointmentTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->appointmentTime);
				
			}
			
			
			
			
			if ("actualTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actualTime);
				
			}
			
			
			
			
			if ("delayQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->delayQuantity);
				
			}
			
			
			
			
			if ("timeoutInterval" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timeoutInterval);
				
			}
			
			
			
			
			if ("repairOrderQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->repairOrderQuantity);
				
			}
			
			
			
			
			if ("repairOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->repairOrderSn);
				
			}
			
			
			
			
			if ("billTargetAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billTargetAmount);
				
			}
			
			
			
			
			if ("dupSendOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dupSendOrderNo);
				
			}
			
			
			
			
			if ("dupSendTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dupSendTime);
				
			}
			
			
			
			
			if ("dupSendDeliverNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dupSendDeliverNo);
				
			}
			
			
			
			
			if ("warehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseExt);
				
			}
			
			
			
			
			if ("settlementPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->settlementPrice);
				
			}
			
			
			
			
			if ("reviewer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reviewer);
				
			}
			
			
			
			
			if ("workOrderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workOrderType);
				
			}
			
			
			
			
			if ("orderDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderDate);
				
			}
			
			
			
			
			if ("violationDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->violationDate);
				
			}
			
			
			
			
			if ("missedReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->missedReason);
				
			}
			
			
			
			
			if ("missedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->missedAmount);
				
			}
			
			
			
			
			if ("cancelAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->cancelAmount);
				
			}
			
			
			
			
			if ("originExpId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originExpId);
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTime);
				
			}
			
			
			
			
			if ("extPoDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extPoDeliveryTypeName);
				
			}
			
			
			
			
			if ("extSumVendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumVendorFavPrice);
				
			}
			
			
			
			
			if ("extSumFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumFavPrice);
				
			}
			
			
			
			
			if ("extWarehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extWarehouseExt);
				
			}
			
			
			
			
			if ("extGrossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extGrossMarginRate);
				
			}
			
			
			
			
			if ("extBasePrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBasePrice);
				
			}
			
			
			
			
			if ("extBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBillTaxPrice);
				
			}
			
			
			
			
			if ("extOrderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extOrderPrice);
				
			}
			
			
			
			
			if ("extNetPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extNetPrice);
				
			}
			
			
			
			
			if ("scheduleDepartmentId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleDepartmentId);
				
			}
			
			
			
			
			if ("rateMid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rateMid);
				
			}
			
			
			
			
			if ("origAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->origAmount);
				
			}
			
			
			
			
			if ("newAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->newAmount);
				
			}
			
			
			
			
			if ("applyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyId);
				
			}
			
			
			
			
			if ("applySeq" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->applySeq); 
				
			}
			
			
			
			
			if ("insureTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insureTypeName);
				
			}
			
			
			
			
			if ("vendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendorRate);
				
			}
			
			
			
			
			if ("insureDirection" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->insureDirection);
				
			}
			
			
			
			
			if ("exchangeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeFlag);
				
			}
			
			
			
			
			if ("referenceNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceNumber);
				
			}
			
			
			
			
			if ("applyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->applyTime);
				
			}
			
			
			
			
			if ("insuredAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->insuredAmount);
				
			}
			
			
			
			
			if ("actParentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actParentNo);
				
			}
			
			
			
			
			if ("vendorSyncTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorSyncTime);
				
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
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqNo !== null) {
			
			$xfer += $output->writeFieldBegin('seqNo');
			$xfer += $output->writeString($this->seqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billNumber !== null) {
			
			$xfer += $output->writeFieldBegin('billNumber');
			$xfer += $output->writeString($this->billNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountant !== null) {
			
			$xfer += $output->writeFieldBegin('accountant');
			$xfer += $output->writeString($this->accountant);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defCode !== null) {
			
			$xfer += $output->writeFieldBegin('defCode');
			$xfer += $output->writeString($this->defCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->targetAmount !== null) {
			
			$xfer += $output->writeFieldBegin('targetAmount');
			$xfer += $output->writeDouble($this->targetAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeDouble($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->incurredPo !== null) {
			
			$xfer += $output->writeFieldBegin('incurredPo');
			$xfer += $output->writeString($this->incurredPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storehouse !== null) {
			
			$xfer += $output->writeFieldBegin('storehouse');
			$xfer += $output->writeString($this->storehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnedPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnedPoNo');
			$xfer += $output->writeString($this->returnedPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnedPoCorp !== null) {
			
			$xfer += $output->writeFieldBegin('returnedPoCorp');
			$xfer += $output->writeString($this->returnedPoCorp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrangeReturnedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('arrangeReturnedAmount');
			$xfer += $output->writeDouble($this->arrangeReturnedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->comments !== null) {
			
			$xfer += $output->writeFieldBegin('comments');
			$xfer += $output->writeString($this->comments);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processFlag !== null) {
			
			$xfer += $output->writeFieldBegin('processFlag');
			$xfer += $output->writeI64($this->processFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditor !== null) {
			
			$xfer += $output->writeFieldBegin('auditor');
			$xfer += $output->writeString($this->auditor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditDate !== null) {
			
			$xfer += $output->writeFieldBegin('auditDate');
			$xfer += $output->writeI64($this->auditDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->checker !== null) {
			
			$xfer += $output->writeFieldBegin('checker');
			$xfer += $output->writeString($this->checker);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->checkDate !== null) {
			
			$xfer += $output->writeFieldBegin('checkDate');
			$xfer += $output->writeI64($this->checkDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finished !== null) {
			
			$xfer += $output->writeFieldBegin('finished');
			$xfer += $output->writeString($this->finished);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item !== null) {
			
			$xfer += $output->writeFieldBegin('item');
			$xfer += $output->writeString($this->item);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logisticsDeductedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('logisticsDeductedAmount');
			$xfer += $output->writeDouble($this->logisticsDeductedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductDate !== null) {
			
			$xfer += $output->writeFieldBegin('deductDate');
			$xfer += $output->writeI64($this->deductDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductWay !== null) {
			
			$xfer += $output->writeFieldBegin('deductWay');
			$xfer += $output->writeString($this->deductWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('deductInvoice');
			$xfer += $output->writeString($this->deductInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductInvoiceDate !== null) {
			
			$xfer += $output->writeFieldBegin('deductInvoiceDate');
			$xfer += $output->writeI64($this->deductInvoiceDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creationDate !== null) {
			
			$xfer += $output->writeFieldBegin('creationDate');
			$xfer += $output->writeI64($this->creationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedBy');
			$xfer += $output->writeI64($this->lastUpdatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedDate !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedDate');
			$xfer += $output->writeI64($this->lastUpdatedDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operationType !== null) {
			
			$xfer += $output->writeFieldBegin('operationType');
			$xfer += $output->writeByte($this->operationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creatorName !== null) {
			
			$xfer += $output->writeFieldBegin('creatorName');
			$xfer += $output->writeString($this->creatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->busiAssistantId !== null) {
			
			$xfer += $output->writeFieldBegin('busiAssistantId');
			$xfer += $output->writeString($this->busiAssistantId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->busiAssistantName !== null) {
			
			$xfer += $output->writeFieldBegin('busiAssistantName');
			$xfer += $output->writeString($this->busiAssistantName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept !== null) {
			
			$xfer += $output->writeFieldBegin('dept');
			$xfer += $output->writeString($this->dept);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineDate !== null) {
			
			$xfer += $output->writeFieldBegin('onlineDate');
			$xfer += $output->writeI64($this->onlineDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeI64($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgName !== null) {
			
			$xfer += $output->writeFieldBegin('orgName');
			$xfer += $output->writeString($this->orgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalOrgId !== null) {
			
			$xfer += $output->writeFieldBegin('finalOrgId');
			$xfer += $output->writeI64($this->finalOrgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalOrgName !== null) {
			
			$xfer += $output->writeFieldBegin('finalOrgName');
			$xfer += $output->writeString($this->finalOrgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationType');
			$xfer += $output->writeString($this->cooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationTypeName');
			$xfer += $output->writeString($this->cooperationTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->initDeductWay !== null) {
			
			$xfer += $output->writeFieldBegin('initDeductWay');
			$xfer += $output->writeString($this->initDeductWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('cancelReason');
			$xfer += $output->writeString($this->cancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditorName !== null) {
			
			$xfer += $output->writeFieldBegin('auditorName');
			$xfer += $output->writeString($this->auditorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arAmount !== null) {
			
			$xfer += $output->writeFieldBegin('arAmount');
			$xfer += $output->writeDouble($this->arAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualCpsAmount !== null) {
			
			$xfer += $output->writeFieldBegin('actualCpsAmount');
			$xfer += $output->writeDouble($this->actualCpsAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->compensateTime !== null) {
			
			$xfer += $output->writeFieldBegin('compensateTime');
			$xfer += $output->writeI64($this->compensateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diffAmount !== null) {
			
			$xfer += $output->writeFieldBegin('diffAmount');
			$xfer += $output->writeDouble($this->diffAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeItem !== null) {
			
			$xfer += $output->writeFieldBegin('feeItem');
			$xfer += $output->writeString($this->feeItem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeDef !== null) {
			
			$xfer += $output->writeFieldBegin('feeDef');
			$xfer += $output->writeString($this->feeDef);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeDesc !== null) {
			
			$xfer += $output->writeFieldBegin('feeDesc');
			$xfer += $output->writeString($this->feeDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebsReceiptNo !== null) {
			
			$xfer += $output->writeFieldBegin('ebsReceiptNo');
			$xfer += $output->writeString($this->ebsReceiptNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->importKey !== null) {
			
			$xfer += $output->writeFieldBegin('importKey');
			$xfer += $output->writeI64($this->importKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceType !== null) {
			
			$xfer += $output->writeFieldBegin('sourceType');
			$xfer += $output->writeString($this->sourceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->so !== null) {
			
			$xfer += $output->writeFieldBegin('so');
			$xfer += $output->writeString($this->so);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionProportion !== null) {
			
			$xfer += $output->writeFieldBegin('commissionProportion');
			$xfer += $output->writeDouble($this->commissionProportion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extraScale !== null) {
			
			$xfer += $output->writeFieldBegin('extraScale');
			$xfer += $output->writeDouble($this->extraScale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeDouble($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->targetCurrencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('targetCurrencyCode');
			$xfer += $output->writeString($this->targetCurrencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDate !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDate');
			$xfer += $output->writeI64($this->invoiceDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyName !== null) {
			
			$xfer += $output->writeFieldBegin('currencyName');
			$xfer += $output->writeString($this->currencyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approveStatus !== null) {
			
			$xfer += $output->writeFieldBegin('approveStatus');
			$xfer += $output->writeString($this->approveStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCreateBy !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCreateBy');
			$xfer += $output->writeI64($this->invoiceCreateBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCreateNickname !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCreateNickname');
			$xfer += $output->writeString($this->invoiceCreateNickname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeString($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->electronicReceiptNo !== null) {
			
			$xfer += $output->writeFieldBegin('electronicReceiptNo');
			$xfer += $output->writeString($this->electronicReceiptNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCreateReceipt !== null) {
			
			$xfer += $output->writeFieldBegin('isCreateReceipt');
			$xfer += $output->writeString($this->isCreateReceipt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->writeOffStatus !== null) {
			
			$xfer += $output->writeFieldBegin('writeOffStatus');
			$xfer += $output->writeString($this->writeOffStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHideReceipt !== null) {
			
			$xfer += $output->writeFieldBegin('isHideReceipt');
			$xfer += $output->writeString($this->isHideReceipt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->writeOffItemSourcesId !== null) {
			
			$xfer += $output->writeFieldBegin('writeOffItemSourcesId');
			$xfer += $output->writeI64($this->writeOffItemSourcesId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAccountDate !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAccountDate');
			$xfer += $output->writeString($this->invoiceAccountDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standardAmount !== null) {
			
			$xfer += $output->writeFieldBegin('standardAmount');
			$xfer += $output->writeDouble($this->standardAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->targetExchangeRate !== null) {
			
			$xfer += $output->writeFieldBegin('targetExchangeRate');
			$xfer += $output->writeDouble($this->targetExchangeRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('bindBillNumber');
			$xfer += $output->writeString($this->bindBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxCode');
			$xfer += $output->writeString($this->taxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defCodeBase !== null) {
			
			$xfer += $output->writeFieldBegin('defCodeBase');
			$xfer += $output->writeString($this->defCodeBase);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deptCode !== null) {
			
			$xfer += $output->writeFieldBegin('deptCode');
			$xfer += $output->writeString($this->deptCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warrantyBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('warrantyBillNumber');
			$xfer += $output->writeString($this->warrantyBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warrantyRate !== null) {
			
			$xfer += $output->writeFieldBegin('warrantyRate');
			$xfer += $output->writeDouble($this->warrantyRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warrantyExpireDate !== null) {
			
			$xfer += $output->writeFieldBegin('warrantyExpireDate');
			$xfer += $output->writeI64($this->warrantyExpireDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defCodeClass !== null) {
			
			$xfer += $output->writeFieldBegin('defCodeClass');
			$xfer += $output->writeString($this->defCodeClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->costCentre !== null) {
			
			$xfer += $output->writeFieldBegin('costCentre');
			$xfer += $output->writeString($this->costCentre);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxAmountPrice !== null) {
			
			$xfer += $output->writeFieldBegin('maxAmountPrice');
			$xfer += $output->writeDouble($this->maxAmountPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxAmountRuleId !== null) {
			
			$xfer += $output->writeFieldBegin('maxAmountRuleId');
			$xfer += $output->writeI64($this->maxAmountRuleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxAmountPriority !== null) {
			
			$xfer += $output->writeFieldBegin('maxAmountPriority');
			$xfer += $output->writeI64($this->maxAmountPriority);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billType !== null) {
			
			$xfer += $output->writeFieldBegin('billType');
			$xfer += $output->writeString($this->billType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('itemDesc');
			$xfer += $output->writeString($this->itemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemPriceAdjustQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('itemPriceAdjustQuantity');
			$xfer += $output->writeDouble($this->itemPriceAdjustQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemPriceAdjustAmount !== null) {
			
			$xfer += $output->writeFieldBegin('itemPriceAdjustAmount');
			$xfer += $output->writeDouble($this->itemPriceAdjustAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustClosingDate !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustClosingDate');
			$xfer += $output->writeI64($this->priceAdjustClosingDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustStartDateActive !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustStartDateActive');
			$xfer += $output->writeI64($this->priceAdjustStartDateActive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustEndDateActive !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustEndDateActive');
			$xfer += $output->writeI64($this->priceAdjustEndDateActive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oaNo !== null) {
			
			$xfer += $output->writeFieldBegin('oaNo');
			$xfer += $output->writeString($this->oaNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fid !== null) {
			
			$xfer += $output->writeFieldBegin('fid');
			$xfer += $output->writeString($this->fid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expId !== null) {
			
			$xfer += $output->writeFieldBegin('expId');
			$xfer += $output->writeString($this->expId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expLineId !== null) {
			
			$xfer += $output->writeFieldBegin('expLineId');
			$xfer += $output->writeI64($this->expLineId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustHeaderId');
			$xfer += $output->writeString($this->priceAdjustHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offsetBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('offsetBillNumber');
			$xfer += $output->writeString($this->offsetBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderNum');
			$xfer += $output->writeString($this->extOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeDouble($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnDocNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnDocNo');
			$xfer += $output->writeString($this->returnDocNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemSize !== null) {
			
			$xfer += $output->writeFieldBegin('itemSize');
			$xfer += $output->writeString($this->itemSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorGoodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorGoodsNo');
			$xfer += $output->writeString($this->vendorGoodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCode !== null) {
			
			$xfer += $output->writeFieldBegin('brandCode');
			$xfer += $output->writeString($this->brandCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryType');
			$xfer += $output->writeString($this->poDeliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryTypeName');
			$xfer += $output->writeString($this->poDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poWarehouseType !== null) {
			
			$xfer += $output->writeFieldBegin('poWarehouseType');
			$xfer += $output->writeString($this->poWarehouseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeDouble($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeByte($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isFilled !== null) {
			
			$xfer += $output->writeFieldBegin('isFilled');
			$xfer += $output->writeByte($this->isFilled);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickupNumber !== null) {
			
			$xfer += $output->writeFieldBegin('pickupNumber');
			$xfer += $output->writeString($this->pickupNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverNumber !== null) {
			
			$xfer += $output->writeFieldBegin('deliverNumber');
			$xfer += $output->writeString($this->deliverNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lackQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('lackQuantity');
			$xfer += $output->writeDouble($this->lackQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lackPrice !== null) {
			
			$xfer += $output->writeFieldBegin('lackPrice');
			$xfer += $output->writeDouble($this->lackPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->systemPrice !== null) {
			
			$xfer += $output->writeFieldBegin('systemPrice');
			$xfer += $output->writeDouble($this->systemPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualPrice !== null) {
			
			$xfer += $output->writeFieldBegin('actualPrice');
			$xfer += $output->writeDouble($this->actualPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->overtimes !== null) {
			
			$xfer += $output->writeFieldBegin('overtimes');
			$xfer += $output->writeByte($this->overtimes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workNumber !== null) {
			
			$xfer += $output->writeFieldBegin('workNumber');
			$xfer += $output->writeString($this->workNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnDiffNumber !== null) {
			
			$xfer += $output->writeFieldBegin('returnDiffNumber');
			$xfer += $output->writeString($this->returnDiffNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorFeeback !== null) {
			
			$xfer += $output->writeFieldBegin('vendorFeeback');
			$xfer += $output->writeString($this->vendorFeeback);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->claimReason !== null) {
			
			$xfer += $output->writeFieldBegin('claimReason');
			$xfer += $output->writeString($this->claimReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lhNumber !== null) {
			
			$xfer += $output->writeFieldBegin('lhNumber');
			$xfer += $output->writeString($this->lhNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelDate !== null) {
			
			$xfer += $output->writeFieldBegin('cancelDate');
			$xfer += $output->writeI64($this->cancelDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outOfStockReason !== null) {
			
			$xfer += $output->writeFieldBegin('outOfStockReason');
			$xfer += $output->writeString($this->outOfStockReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceDiffType !== null) {
			
			$xfer += $output->writeFieldBegin('priceDiffType');
			$xfer += $output->writeString($this->priceDiffType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryFirst !== null) {
			
			$xfer += $output->writeFieldBegin('categoryFirst');
			$xfer += $output->writeString($this->categoryFirst);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categorySecond !== null) {
			
			$xfer += $output->writeFieldBegin('categorySecond');
			$xfer += $output->writeString($this->categorySecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryThird !== null) {
			
			$xfer += $output->writeFieldBegin('categoryThird');
			$xfer += $output->writeString($this->categoryThird);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poTotalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poTotalPrice');
			$xfer += $output->writeDouble($this->poTotalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('payableQuantity');
			$xfer += $output->writeDouble($this->payableQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountingDeptId !== null) {
			
			$xfer += $output->writeFieldBegin('accountingDeptId');
			$xfer += $output->writeString($this->accountingDeptId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxNo');
			$xfer += $output->writeString($this->taxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialTaxClass !== null) {
			
			$xfer += $output->writeFieldBegin('specialTaxClass');
			$xfer += $output->writeString($this->specialTaxClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialTaxName !== null) {
			
			$xfer += $output->writeFieldBegin('specialTaxName');
			$xfer += $output->writeString($this->specialTaxName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dimension !== null) {
			
			$xfer += $output->writeFieldBegin('dimension');
			$xfer += $output->writeString($this->dimension);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expenseDiffQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('expenseDiffQuantity');
			$xfer += $output->writeDouble($this->expenseDiffQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->belongPeriod !== null) {
			
			$xfer += $output->writeFieldBegin('belongPeriod');
			$xfer += $output->writeString($this->belongPeriod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timelyDeliveryRate !== null) {
			
			$xfer += $output->writeFieldBegin('timelyDeliveryRate');
			$xfer += $output->writeDouble($this->timelyDeliveryRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->executionMode !== null) {
			
			$xfer += $output->writeFieldBegin('executionMode');
			$xfer += $output->writeString($this->executionMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inflowTime !== null) {
			
			$xfer += $output->writeFieldBegin('inflowTime');
			$xfer += $output->writeI64($this->inflowTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentTime');
			$xfer += $output->writeI64($this->appointmentTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualTime !== null) {
			
			$xfer += $output->writeFieldBegin('actualTime');
			$xfer += $output->writeI64($this->actualTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delayQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('delayQuantity');
			$xfer += $output->writeDouble($this->delayQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeoutInterval !== null) {
			
			$xfer += $output->writeFieldBegin('timeoutInterval');
			$xfer += $output->writeString($this->timeoutInterval);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->repairOrderQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('repairOrderQuantity');
			$xfer += $output->writeDouble($this->repairOrderQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->repairOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('repairOrderSn');
			$xfer += $output->writeString($this->repairOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTargetAmount !== null) {
			
			$xfer += $output->writeFieldBegin('billTargetAmount');
			$xfer += $output->writeDouble($this->billTargetAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dupSendOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('dupSendOrderNo');
			$xfer += $output->writeString($this->dupSendOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dupSendTime !== null) {
			
			$xfer += $output->writeFieldBegin('dupSendTime');
			$xfer += $output->writeI64($this->dupSendTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dupSendDeliverNo !== null) {
			
			$xfer += $output->writeFieldBegin('dupSendDeliverNo');
			$xfer += $output->writeString($this->dupSendDeliverNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseExt');
			$xfer += $output->writeString($this->warehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementPrice !== null) {
			
			$xfer += $output->writeFieldBegin('settlementPrice');
			$xfer += $output->writeDouble($this->settlementPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reviewer !== null) {
			
			$xfer += $output->writeFieldBegin('reviewer');
			$xfer += $output->writeString($this->reviewer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workOrderType !== null) {
			
			$xfer += $output->writeFieldBegin('workOrderType');
			$xfer += $output->writeString($this->workOrderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDate !== null) {
			
			$xfer += $output->writeFieldBegin('orderDate');
			$xfer += $output->writeI64($this->orderDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->violationDate !== null) {
			
			$xfer += $output->writeFieldBegin('violationDate');
			$xfer += $output->writeI64($this->violationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->missedReason !== null) {
			
			$xfer += $output->writeFieldBegin('missedReason');
			$xfer += $output->writeString($this->missedReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->missedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('missedAmount');
			$xfer += $output->writeDouble($this->missedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelAmount !== null) {
			
			$xfer += $output->writeFieldBegin('cancelAmount');
			$xfer += $output->writeDouble($this->cancelAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originExpId !== null) {
			
			$xfer += $output->writeFieldBegin('originExpId');
			$xfer += $output->writeString($this->originExpId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeI64($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPoDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('extPoDeliveryTypeName');
			$xfer += $output->writeString($this->extPoDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumVendorFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumVendorFavPrice');
			$xfer += $output->writeDouble($this->extSumVendorFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumFavPrice');
			$xfer += $output->writeDouble($this->extSumFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extWarehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('extWarehouseExt');
			$xfer += $output->writeString($this->extWarehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extGrossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('extGrossMarginRate');
			$xfer += $output->writeDouble($this->extGrossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBasePrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBasePrice');
			$xfer += $output->writeDouble($this->extBasePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBillTaxPrice');
			$xfer += $output->writeDouble($this->extBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderPrice');
			$xfer += $output->writeDouble($this->extOrderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extNetPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extNetPrice');
			$xfer += $output->writeDouble($this->extNetPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleDepartmentId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleDepartmentId');
			$xfer += $output->writeString($this->scheduleDepartmentId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rateMid !== null) {
			
			$xfer += $output->writeFieldBegin('rateMid');
			$xfer += $output->writeString($this->rateMid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origAmount !== null) {
			
			$xfer += $output->writeFieldBegin('origAmount');
			$xfer += $output->writeDouble($this->origAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newAmount !== null) {
			
			$xfer += $output->writeFieldBegin('newAmount');
			$xfer += $output->writeDouble($this->newAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyId !== null) {
			
			$xfer += $output->writeFieldBegin('applyId');
			$xfer += $output->writeString($this->applyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applySeq !== null) {
			
			$xfer += $output->writeFieldBegin('applySeq');
			$xfer += $output->writeI32($this->applySeq);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insureTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('insureTypeName');
			$xfer += $output->writeString($this->insureTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRate');
			$xfer += $output->writeDouble($this->vendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insureDirection !== null) {
			
			$xfer += $output->writeFieldBegin('insureDirection');
			$xfer += $output->writeString($this->insureDirection);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeFlag');
			$xfer += $output->writeString($this->exchangeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceNumber !== null) {
			
			$xfer += $output->writeFieldBegin('referenceNumber');
			$xfer += $output->writeString($this->referenceNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyTime !== null) {
			
			$xfer += $output->writeFieldBegin('applyTime');
			$xfer += $output->writeI64($this->applyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuredAmount !== null) {
			
			$xfer += $output->writeFieldBegin('insuredAmount');
			$xfer += $output->writeDouble($this->insuredAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actParentNo !== null) {
			
			$xfer += $output->writeFieldBegin('actParentNo');
			$xfer += $output->writeString($this->actParentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSyncTime !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSyncTime');
			$xfer += $output->writeI64($this->vendorSyncTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>