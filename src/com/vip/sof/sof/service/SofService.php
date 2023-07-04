<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;
interface SofServiceIf{
	
	
	public function afterSaleConfirmReceipt(\com\vip\sof\sof\service\AfterSaleConfirmReceiptParam $param);
	
	public function afterSaleExport(\com\vip\sof\sof\service\AfterSaleListSearchParam $param);
	
	public function agreeTaxInformation();
	
	public function auditCancelApply(\com\vip\sof\sof\service\CancelApplyAuditParam $param);
	
	public function autoPassedAllOvertimeCancelApplyAudit();
	
	public function autoPassedWOPOvertimeCancelApplyAudit();
	
	public function autoRefuseCron(\com\vip\sof\sof\service\CronParam $param);
	
	public function cancelAutoApply(\com\vip\sof\sof\service\CancelAutoApplyParam $param);
	
	public function cancelAutoApplyForWOP(\com\vip\sof\sof\service\CancelAutoApplyParam $param);
	
	public function cancelHtsAutoApply(\com\vip\sof\sof\service\CronParam $param);
	
	public function checkErrorInvoiceFromVEI(\com\vip\sof\sof\service\CheckInvoiceFromVEIParam $param);
	
	public function checkInvoiceFromVEI(\com\vip\sof\sof\service\CheckInvoiceFromVEIParam $param);
	
	public function checkInvoiceUrl(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param);
	
	public function checkTrustInvoiceAckFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param);
	
	public function checkTrustInvoiceFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param);
	
	public function checkTrustStatusInvoiceFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param);
	
	public function cipStatistics( $opStat, $opParam);
	
	public function createMpProblemOrderCron(\com\vip\sof\sof\service\CronParam $param);
	
	public function doExternalRefuseResult(\com\vip\sof\sof\service\RefuseParam $param);
	
	public function doRefuseCron(\com\vip\sof\sof\service\CronParam $param);
	
	public function doRefusePushPackFlagCron(\com\vip\sof\sof\service\CronParam $param);
	
	public function doRefuseResult(\com\vip\sof\sof\service\RefuseParam $param);
	
	public function doReturnInpackCron(\com\vip\sof\sof\service\CronParam $param);
	
	public function doReturnUnpackCron(\com\vip\sof\sof\service\CronParam $param);
	
	public function editorTransportNo(\com\vip\sof\sof\service\TransportInfo $param);
	
	public function exportAutoCancelList(\com\vip\sof\sof\service\AutoCancelType $autoCancelType);
	
	public function exportAutoRefundList(\com\vip\sof\sof\service\AutoRefundType $autoRefundType);
	
	public function exportInvoiceList(\com\vip\sof\sof\service\InvoiceListParam $param);
	
	public function exportOrderList(\com\vip\sof\sof\service\ExportOrderParam $param);
	
	public function getAfterSaleDetail(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam);
	
	public function getAfterSaleInfo(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam);
	
	public function getAfterSaleList(\com\vip\sof\sof\service\AfterSaleListSearchParam $afterSaleListSearchParam);
	
	public function getAfterSaleListForAutoCancel(\com\vip\sof\sof\service\AutoCancelType $autoCancelType);
	
	public function getAfterSaleListForAutoRefund(\com\vip\sof\sof\service\AutoRefundType $autoRefundType);
	
	public function getAfterSaleOpLog(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam);
	
	public function getCancelOperationLogList(\com\vip\sof\sof\service\CancelOperationParam $param);
	
	public function getCarriersList();
	
	public function getEnumBaseInfoList(\com\vip\sof\sof\service\EnumBaseInfoParam $param);
	
	public function getExceptionalOrdersList(\com\vip\sof\sof\service\ExceptionalOrdersSearchParam $exceptionalOrdersSearchParam);
	
	public function getImportInvoiceErrFile(\com\vip\sof\sof\service\InvoiceImportParam $param);
	
	public function getInvoiceList(\com\vip\sof\sof\service\InvoiceListParam $param);
	
	public function getOrderInfoList( $orderSnList);
	
	public function getOrderTransportRegisterList( $orderSnList);
	
	public function getPackageDetail(\com\vip\sof\sof\service\AfterSalePackageInfoSearchParam $param);
	
	public function getPrintSoList(\com\vip\sof\sof\service\GetPrintSoListParam $param);
	
	public function getPrintTemplet(\com\vip\sof\sof\service\GetPrintSoListParam $param);
	
	public function getRefuseInfo(\com\vip\sof\sof\service\RefuseInfoParam $param);
	
	public function getSignedLog(\com\vip\sof\sof\service\OrderParam $param);
	
	public function getStoreOverseasByStoreId();
	
	public function getSupHTSCancelOrders( $maxCount);
	
	public function getSupHTSOrders( $maxCount);
	
	public function getTmsSoTransport(\com\vip\sof\sof\service\TmsGetSoTransportParam $tmsGetSoTransportParam);
	
	public function getTrusteeshipStatus();
	
	public function getWOPCancelOrders( $max_count, $less_last_modified_time, $greater_last_modified_time, $start_num);
	
	public function getWorkOrderList( $storeId, $orderSn);
	
	public function grayscale( $param);
	
	public function healthCheck();
	
	public function htsCancelAutoAduit(\com\vip\sof\sof\service\CronParam $param);
	
	public function importInvoice(\com\vip\sof\sof\service\InvoiceImportParam $param);
	
	public function isWhiteListStore( $intfName, $storeId);
	
	public function notifyTrusteeshipStatus(\com\vip\sof\sof\service\TrusteeshipStatusInfo $notifyTrusteeshipStatusReq);
	
	public function opAfterSaleInfo(\com\vip\sof\sof\service\AfterSaleOpParam $afterSaleOpParam);
	
	public function opAfterSaleOnePiece(\com\vip\sof\sof\service\AfterSaleOnePieceOpParam $afterSaleOnePieceOpParam);
	
	public function pullOfcAfterSale(\com\vip\sof\sof\service\CronParam $param);
	
	public function pushCancelInfoToOrder(\com\vip\sof\sof\service\CancelOrderParam $param);
	
	public function pushChangeInvoiceTypeToOrder(\com\vip\sof\sof\service\PushChangeInvoiceTypeToOrderParam $param);
	
	public function pushFullLinkData(\com\vip\sof\sof\service\CronParam $param);
	
	public function pushInvoiceToVEI(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param);
	
	public function pushOfcTrackCron(\com\vip\sof\sof\service\PushOfcTransportCron $pushOfcTransportCron);
	
	public function pushOrderAfterSale(\com\vip\sof\sof\service\CronParam $param);
	
	public function pushOrderServiceGuaranteeApply(\com\vip\sof\sof\service\CronParam $param);
	
	public function pushPopOrderTransportInfoToB2c(\com\vip\sof\sof\service\PushPopOrderTransportInfoToB2cParam $param);
	
	public function pushSesFee(\com\vip\sof\sof\service\PushSesFeeParam $param);
	
	public function pushSignInfoToOrder(\com\vip\sof\sof\service\PushSignInfoParam $param);
	
	public function pushTmsAfterSale(\com\vip\sof\sof\service\CronParam $param);
	
	public function pushTmsTrackInfo(\com\vip\sof\sof\service\TmsPushTrackParam $param);
	
	public function pushTransportSignRefuseToFullLink(\com\vip\sof\sof\service\CronParam $param);
	
	public function queryCancelInfo(\com\vip\sof\sof\service\CancelQueryParam $param);
	
	public function queryCancelInfoForVup(\com\vip\sof\sof\service\CancelQueryParam $param);
	
	public function queryCancelInfoList(\com\vip\sof\sof\service\CancelListQueryParam $param);
	
	public function revokeCancelApply(\com\vip\sof\sof\service\RevokeCancelApplyReq $req);
	
	public function saveAfterSaleInfo( $afterSalePullInfo);
	
	public function saveCancelArbitrate(\com\vip\sof\sof\service\CancelArbitrateParam $param);
	
	public function saveSoHeaderInfo(\com\vip\sof\sof\service\SaveSoHeaderParam $param);
	
	public function saveTmsSoTransportFlag(\com\vip\sof\sof\service\TmsSoTransportSavedParam $tmsSoTransportSavedParam);
	
	public function sendNewsAlert(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param);
	
	public function setSUPHTSStatus( $syncListStatus);
	
	public function setSupHTSCancelOrders( $htsList);
	
	public function subscribeHTSResult( $htsResult);
	
	public function syncInvoiceStatus(\com\vip\sof\sof\service\PushSignInfoParam $param);
	
	public function transferLastDayData(\com\vip\sof\sof\service\PushSignInfoParam $param);
	
	public function updateInvoiceType(\com\vip\sof\sof\service\InvoiceImportParam $param);
	
	public function uploadInvoiceUrl(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param);
	
	public function vopImportInvoice(\com\vip\sof\sof\service\VOPInvoiceImportParam $param);
	
	public function vopUpdateInvoiceType(\com\vip\sof\sof\service\VOPInvoiceImportParam $param);
	
}

class _SofServiceClient extends \Osp\Base\OspStub implements \com\vip\sof\sof\service\SofServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.sof.sof.service.SofService", "1.0.10");
	}
	
	
	public function afterSaleConfirmReceipt(\com\vip\sof\sof\service\AfterSaleConfirmReceiptParam $param){
		
		$this->send_afterSaleConfirmReceipt( $param);
		return $this->recv_afterSaleConfirmReceipt();
	}
	
	public function send_afterSaleConfirmReceipt(\com\vip\sof\sof\service\AfterSaleConfirmReceiptParam $param){
		
		$this->initInvocation("afterSaleConfirmReceipt");
		$args = new \com\vip\sof\sof\service\SofService_afterSaleConfirmReceipt_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_afterSaleConfirmReceipt(){
		
		$result = new \com\vip\sof\sof\service\SofService_afterSaleConfirmReceipt_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function afterSaleExport(\com\vip\sof\sof\service\AfterSaleListSearchParam $param){
		
		$this->send_afterSaleExport( $param);
		return $this->recv_afterSaleExport();
	}
	
	public function send_afterSaleExport(\com\vip\sof\sof\service\AfterSaleListSearchParam $param){
		
		$this->initInvocation("afterSaleExport");
		$args = new \com\vip\sof\sof\service\SofService_afterSaleExport_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_afterSaleExport(){
		
		$result = new \com\vip\sof\sof\service\SofService_afterSaleExport_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function agreeTaxInformation(){
		
		$this->send_agreeTaxInformation();
		return $this->recv_agreeTaxInformation();
	}
	
	public function send_agreeTaxInformation(){
		
		$this->initInvocation("agreeTaxInformation");
		$args = new \com\vip\sof\sof\service\SofService_agreeTaxInformation_args();
		
		$this->send_base($args);
	}
	
	public function recv_agreeTaxInformation(){
		
		$result = new \com\vip\sof\sof\service\SofService_agreeTaxInformation_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function auditCancelApply(\com\vip\sof\sof\service\CancelApplyAuditParam $param){
		
		$this->send_auditCancelApply( $param);
		return $this->recv_auditCancelApply();
	}
	
	public function send_auditCancelApply(\com\vip\sof\sof\service\CancelApplyAuditParam $param){
		
		$this->initInvocation("auditCancelApply");
		$args = new \com\vip\sof\sof\service\SofService_auditCancelApply_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_auditCancelApply(){
		
		$result = new \com\vip\sof\sof\service\SofService_auditCancelApply_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function autoPassedAllOvertimeCancelApplyAudit(){
		
		$this->send_autoPassedAllOvertimeCancelApplyAudit();
		return $this->recv_autoPassedAllOvertimeCancelApplyAudit();
	}
	
	public function send_autoPassedAllOvertimeCancelApplyAudit(){
		
		$this->initInvocation("autoPassedAllOvertimeCancelApplyAudit");
		$args = new \com\vip\sof\sof\service\SofService_autoPassedAllOvertimeCancelApplyAudit_args();
		
		$this->send_base($args);
	}
	
	public function recv_autoPassedAllOvertimeCancelApplyAudit(){
		
		$result = new \com\vip\sof\sof\service\SofService_autoPassedAllOvertimeCancelApplyAudit_result();
		$this->receive_base($result);
		
	}
	
	
	public function autoPassedWOPOvertimeCancelApplyAudit(){
		
		$this->send_autoPassedWOPOvertimeCancelApplyAudit();
		return $this->recv_autoPassedWOPOvertimeCancelApplyAudit();
	}
	
	public function send_autoPassedWOPOvertimeCancelApplyAudit(){
		
		$this->initInvocation("autoPassedWOPOvertimeCancelApplyAudit");
		$args = new \com\vip\sof\sof\service\SofService_autoPassedWOPOvertimeCancelApplyAudit_args();
		
		$this->send_base($args);
	}
	
	public function recv_autoPassedWOPOvertimeCancelApplyAudit(){
		
		$result = new \com\vip\sof\sof\service\SofService_autoPassedWOPOvertimeCancelApplyAudit_result();
		$this->receive_base($result);
		
	}
	
	
	public function autoRefuseCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_autoRefuseCron( $param);
		return $this->recv_autoRefuseCron();
	}
	
	public function send_autoRefuseCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("autoRefuseCron");
		$args = new \com\vip\sof\sof\service\SofService_autoRefuseCron_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_autoRefuseCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_autoRefuseCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelAutoApply(\com\vip\sof\sof\service\CancelAutoApplyParam $param){
		
		$this->send_cancelAutoApply( $param);
		return $this->recv_cancelAutoApply();
	}
	
	public function send_cancelAutoApply(\com\vip\sof\sof\service\CancelAutoApplyParam $param){
		
		$this->initInvocation("cancelAutoApply");
		$args = new \com\vip\sof\sof\service\SofService_cancelAutoApply_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_cancelAutoApply(){
		
		$result = new \com\vip\sof\sof\service\SofService_cancelAutoApply_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelAutoApplyForWOP(\com\vip\sof\sof\service\CancelAutoApplyParam $param){
		
		$this->send_cancelAutoApplyForWOP( $param);
		return $this->recv_cancelAutoApplyForWOP();
	}
	
	public function send_cancelAutoApplyForWOP(\com\vip\sof\sof\service\CancelAutoApplyParam $param){
		
		$this->initInvocation("cancelAutoApplyForWOP");
		$args = new \com\vip\sof\sof\service\SofService_cancelAutoApplyForWOP_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_cancelAutoApplyForWOP(){
		
		$result = new \com\vip\sof\sof\service\SofService_cancelAutoApplyForWOP_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelHtsAutoApply(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_cancelHtsAutoApply( $param);
		return $this->recv_cancelHtsAutoApply();
	}
	
	public function send_cancelHtsAutoApply(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("cancelHtsAutoApply");
		$args = new \com\vip\sof\sof\service\SofService_cancelHtsAutoApply_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_cancelHtsAutoApply(){
		
		$result = new \com\vip\sof\sof\service\SofService_cancelHtsAutoApply_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkErrorInvoiceFromVEI(\com\vip\sof\sof\service\CheckInvoiceFromVEIParam $param){
		
		$this->send_checkErrorInvoiceFromVEI( $param);
		return $this->recv_checkErrorInvoiceFromVEI();
	}
	
	public function send_checkErrorInvoiceFromVEI(\com\vip\sof\sof\service\CheckInvoiceFromVEIParam $param){
		
		$this->initInvocation("checkErrorInvoiceFromVEI");
		$args = new \com\vip\sof\sof\service\SofService_checkErrorInvoiceFromVEI_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_checkErrorInvoiceFromVEI(){
		
		$result = new \com\vip\sof\sof\service\SofService_checkErrorInvoiceFromVEI_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkInvoiceFromVEI(\com\vip\sof\sof\service\CheckInvoiceFromVEIParam $param){
		
		$this->send_checkInvoiceFromVEI( $param);
		return $this->recv_checkInvoiceFromVEI();
	}
	
	public function send_checkInvoiceFromVEI(\com\vip\sof\sof\service\CheckInvoiceFromVEIParam $param){
		
		$this->initInvocation("checkInvoiceFromVEI");
		$args = new \com\vip\sof\sof\service\SofService_checkInvoiceFromVEI_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_checkInvoiceFromVEI(){
		
		$result = new \com\vip\sof\sof\service\SofService_checkInvoiceFromVEI_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkInvoiceUrl(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->send_checkInvoiceUrl( $param);
		return $this->recv_checkInvoiceUrl();
	}
	
	public function send_checkInvoiceUrl(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->initInvocation("checkInvoiceUrl");
		$args = new \com\vip\sof\sof\service\SofService_checkInvoiceUrl_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_checkInvoiceUrl(){
		
		$result = new \com\vip\sof\sof\service\SofService_checkInvoiceUrl_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkTrustInvoiceAckFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param){
		
		$this->send_checkTrustInvoiceAckFromVEI( $param);
		return $this->recv_checkTrustInvoiceAckFromVEI();
	}
	
	public function send_checkTrustInvoiceAckFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param){
		
		$this->initInvocation("checkTrustInvoiceAckFromVEI");
		$args = new \com\vip\sof\sof\service\SofService_checkTrustInvoiceAckFromVEI_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_checkTrustInvoiceAckFromVEI(){
		
		$result = new \com\vip\sof\sof\service\SofService_checkTrustInvoiceAckFromVEI_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkTrustInvoiceFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param){
		
		$this->send_checkTrustInvoiceFromVEI( $param);
		return $this->recv_checkTrustInvoiceFromVEI();
	}
	
	public function send_checkTrustInvoiceFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param){
		
		$this->initInvocation("checkTrustInvoiceFromVEI");
		$args = new \com\vip\sof\sof\service\SofService_checkTrustInvoiceFromVEI_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_checkTrustInvoiceFromVEI(){
		
		$result = new \com\vip\sof\sof\service\SofService_checkTrustInvoiceFromVEI_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkTrustStatusInvoiceFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param){
		
		$this->send_checkTrustStatusInvoiceFromVEI( $param);
		return $this->recv_checkTrustStatusInvoiceFromVEI();
	}
	
	public function send_checkTrustStatusInvoiceFromVEI(\com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam $param){
		
		$this->initInvocation("checkTrustStatusInvoiceFromVEI");
		$args = new \com\vip\sof\sof\service\SofService_checkTrustStatusInvoiceFromVEI_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_checkTrustStatusInvoiceFromVEI(){
		
		$result = new \com\vip\sof\sof\service\SofService_checkTrustStatusInvoiceFromVEI_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cipStatistics( $opStat, $opParam){
		
		$this->send_cipStatistics( $opStat, $opParam);
		return $this->recv_cipStatistics();
	}
	
	public function send_cipStatistics( $opStat, $opParam){
		
		$this->initInvocation("cipStatistics");
		$args = new \com\vip\sof\sof\service\SofService_cipStatistics_args();
		
		$args->opStat = $opStat;
		
		$args->opParam = $opParam;
		
		$this->send_base($args);
	}
	
	public function recv_cipStatistics(){
		
		$result = new \com\vip\sof\sof\service\SofService_cipStatistics_result();
		$this->receive_base($result);
		
	}
	
	
	public function createMpProblemOrderCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_createMpProblemOrderCron( $param);
		return $this->recv_createMpProblemOrderCron();
	}
	
	public function send_createMpProblemOrderCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("createMpProblemOrderCron");
		$args = new \com\vip\sof\sof\service\SofService_createMpProblemOrderCron_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_createMpProblemOrderCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_createMpProblemOrderCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doExternalRefuseResult(\com\vip\sof\sof\service\RefuseParam $param){
		
		$this->send_doExternalRefuseResult( $param);
		return $this->recv_doExternalRefuseResult();
	}
	
	public function send_doExternalRefuseResult(\com\vip\sof\sof\service\RefuseParam $param){
		
		$this->initInvocation("doExternalRefuseResult");
		$args = new \com\vip\sof\sof\service\SofService_doExternalRefuseResult_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_doExternalRefuseResult(){
		
		$result = new \com\vip\sof\sof\service\SofService_doExternalRefuseResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doRefuseCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_doRefuseCron( $param);
		return $this->recv_doRefuseCron();
	}
	
	public function send_doRefuseCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("doRefuseCron");
		$args = new \com\vip\sof\sof\service\SofService_doRefuseCron_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_doRefuseCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_doRefuseCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doRefusePushPackFlagCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_doRefusePushPackFlagCron( $param);
		return $this->recv_doRefusePushPackFlagCron();
	}
	
	public function send_doRefusePushPackFlagCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("doRefusePushPackFlagCron");
		$args = new \com\vip\sof\sof\service\SofService_doRefusePushPackFlagCron_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_doRefusePushPackFlagCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_doRefusePushPackFlagCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doRefuseResult(\com\vip\sof\sof\service\RefuseParam $param){
		
		$this->send_doRefuseResult( $param);
		return $this->recv_doRefuseResult();
	}
	
	public function send_doRefuseResult(\com\vip\sof\sof\service\RefuseParam $param){
		
		$this->initInvocation("doRefuseResult");
		$args = new \com\vip\sof\sof\service\SofService_doRefuseResult_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_doRefuseResult(){
		
		$result = new \com\vip\sof\sof\service\SofService_doRefuseResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doReturnInpackCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_doReturnInpackCron( $param);
		return $this->recv_doReturnInpackCron();
	}
	
	public function send_doReturnInpackCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("doReturnInpackCron");
		$args = new \com\vip\sof\sof\service\SofService_doReturnInpackCron_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_doReturnInpackCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_doReturnInpackCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doReturnUnpackCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_doReturnUnpackCron( $param);
		return $this->recv_doReturnUnpackCron();
	}
	
	public function send_doReturnUnpackCron(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("doReturnUnpackCron");
		$args = new \com\vip\sof\sof\service\SofService_doReturnUnpackCron_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_doReturnUnpackCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_doReturnUnpackCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editorTransportNo(\com\vip\sof\sof\service\TransportInfo $param){
		
		$this->send_editorTransportNo( $param);
		return $this->recv_editorTransportNo();
	}
	
	public function send_editorTransportNo(\com\vip\sof\sof\service\TransportInfo $param){
		
		$this->initInvocation("editorTransportNo");
		$args = new \com\vip\sof\sof\service\SofService_editorTransportNo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_editorTransportNo(){
		
		$result = new \com\vip\sof\sof\service\SofService_editorTransportNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportAutoCancelList(\com\vip\sof\sof\service\AutoCancelType $autoCancelType){
		
		$this->send_exportAutoCancelList( $autoCancelType);
		return $this->recv_exportAutoCancelList();
	}
	
	public function send_exportAutoCancelList(\com\vip\sof\sof\service\AutoCancelType $autoCancelType){
		
		$this->initInvocation("exportAutoCancelList");
		$args = new \com\vip\sof\sof\service\SofService_exportAutoCancelList_args();
		
		$args->autoCancelType = $autoCancelType;
		
		$this->send_base($args);
	}
	
	public function recv_exportAutoCancelList(){
		
		$result = new \com\vip\sof\sof\service\SofService_exportAutoCancelList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportAutoRefundList(\com\vip\sof\sof\service\AutoRefundType $autoRefundType){
		
		$this->send_exportAutoRefundList( $autoRefundType);
		return $this->recv_exportAutoRefundList();
	}
	
	public function send_exportAutoRefundList(\com\vip\sof\sof\service\AutoRefundType $autoRefundType){
		
		$this->initInvocation("exportAutoRefundList");
		$args = new \com\vip\sof\sof\service\SofService_exportAutoRefundList_args();
		
		$args->autoRefundType = $autoRefundType;
		
		$this->send_base($args);
	}
	
	public function recv_exportAutoRefundList(){
		
		$result = new \com\vip\sof\sof\service\SofService_exportAutoRefundList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportInvoiceList(\com\vip\sof\sof\service\InvoiceListParam $param){
		
		$this->send_exportInvoiceList( $param);
		return $this->recv_exportInvoiceList();
	}
	
	public function send_exportInvoiceList(\com\vip\sof\sof\service\InvoiceListParam $param){
		
		$this->initInvocation("exportInvoiceList");
		$args = new \com\vip\sof\sof\service\SofService_exportInvoiceList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_exportInvoiceList(){
		
		$result = new \com\vip\sof\sof\service\SofService_exportInvoiceList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportOrderList(\com\vip\sof\sof\service\ExportOrderParam $param){
		
		$this->send_exportOrderList( $param);
		return $this->recv_exportOrderList();
	}
	
	public function send_exportOrderList(\com\vip\sof\sof\service\ExportOrderParam $param){
		
		$this->initInvocation("exportOrderList");
		$args = new \com\vip\sof\sof\service\SofService_exportOrderList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_exportOrderList(){
		
		$result = new \com\vip\sof\sof\service\SofService_exportOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAfterSaleDetail(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam){
		
		$this->send_getAfterSaleDetail( $afterSaleInfoSearchParam);
		return $this->recv_getAfterSaleDetail();
	}
	
	public function send_getAfterSaleDetail(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam){
		
		$this->initInvocation("getAfterSaleDetail");
		$args = new \com\vip\sof\sof\service\SofService_getAfterSaleDetail_args();
		
		$args->afterSaleInfoSearchParam = $afterSaleInfoSearchParam;
		
		$this->send_base($args);
	}
	
	public function recv_getAfterSaleDetail(){
		
		$result = new \com\vip\sof\sof\service\SofService_getAfterSaleDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAfterSaleInfo(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam){
		
		$this->send_getAfterSaleInfo( $afterSaleInfoSearchParam);
		return $this->recv_getAfterSaleInfo();
	}
	
	public function send_getAfterSaleInfo(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam){
		
		$this->initInvocation("getAfterSaleInfo");
		$args = new \com\vip\sof\sof\service\SofService_getAfterSaleInfo_args();
		
		$args->afterSaleInfoSearchParam = $afterSaleInfoSearchParam;
		
		$this->send_base($args);
	}
	
	public function recv_getAfterSaleInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_getAfterSaleInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAfterSaleList(\com\vip\sof\sof\service\AfterSaleListSearchParam $afterSaleListSearchParam){
		
		$this->send_getAfterSaleList( $afterSaleListSearchParam);
		return $this->recv_getAfterSaleList();
	}
	
	public function send_getAfterSaleList(\com\vip\sof\sof\service\AfterSaleListSearchParam $afterSaleListSearchParam){
		
		$this->initInvocation("getAfterSaleList");
		$args = new \com\vip\sof\sof\service\SofService_getAfterSaleList_args();
		
		$args->afterSaleListSearchParam = $afterSaleListSearchParam;
		
		$this->send_base($args);
	}
	
	public function recv_getAfterSaleList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getAfterSaleList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAfterSaleListForAutoCancel(\com\vip\sof\sof\service\AutoCancelType $autoCancelType){
		
		$this->send_getAfterSaleListForAutoCancel( $autoCancelType);
		return $this->recv_getAfterSaleListForAutoCancel();
	}
	
	public function send_getAfterSaleListForAutoCancel(\com\vip\sof\sof\service\AutoCancelType $autoCancelType){
		
		$this->initInvocation("getAfterSaleListForAutoCancel");
		$args = new \com\vip\sof\sof\service\SofService_getAfterSaleListForAutoCancel_args();
		
		$args->autoCancelType = $autoCancelType;
		
		$this->send_base($args);
	}
	
	public function recv_getAfterSaleListForAutoCancel(){
		
		$result = new \com\vip\sof\sof\service\SofService_getAfterSaleListForAutoCancel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAfterSaleListForAutoRefund(\com\vip\sof\sof\service\AutoRefundType $autoRefundType){
		
		$this->send_getAfterSaleListForAutoRefund( $autoRefundType);
		return $this->recv_getAfterSaleListForAutoRefund();
	}
	
	public function send_getAfterSaleListForAutoRefund(\com\vip\sof\sof\service\AutoRefundType $autoRefundType){
		
		$this->initInvocation("getAfterSaleListForAutoRefund");
		$args = new \com\vip\sof\sof\service\SofService_getAfterSaleListForAutoRefund_args();
		
		$args->autoRefundType = $autoRefundType;
		
		$this->send_base($args);
	}
	
	public function recv_getAfterSaleListForAutoRefund(){
		
		$result = new \com\vip\sof\sof\service\SofService_getAfterSaleListForAutoRefund_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAfterSaleOpLog(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam){
		
		$this->send_getAfterSaleOpLog( $afterSaleInfoSearchParam);
		return $this->recv_getAfterSaleOpLog();
	}
	
	public function send_getAfterSaleOpLog(\com\vip\sof\sof\service\AfterSaleInfoSearchParam $afterSaleInfoSearchParam){
		
		$this->initInvocation("getAfterSaleOpLog");
		$args = new \com\vip\sof\sof\service\SofService_getAfterSaleOpLog_args();
		
		$args->afterSaleInfoSearchParam = $afterSaleInfoSearchParam;
		
		$this->send_base($args);
	}
	
	public function recv_getAfterSaleOpLog(){
		
		$result = new \com\vip\sof\sof\service\SofService_getAfterSaleOpLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCancelOperationLogList(\com\vip\sof\sof\service\CancelOperationParam $param){
		
		$this->send_getCancelOperationLogList( $param);
		return $this->recv_getCancelOperationLogList();
	}
	
	public function send_getCancelOperationLogList(\com\vip\sof\sof\service\CancelOperationParam $param){
		
		$this->initInvocation("getCancelOperationLogList");
		$args = new \com\vip\sof\sof\service\SofService_getCancelOperationLogList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getCancelOperationLogList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getCancelOperationLogList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarriersList(){
		
		$this->send_getCarriersList();
		return $this->recv_getCarriersList();
	}
	
	public function send_getCarriersList(){
		
		$this->initInvocation("getCarriersList");
		$args = new \com\vip\sof\sof\service\SofService_getCarriersList_args();
		
		$this->send_base($args);
	}
	
	public function recv_getCarriersList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getCarriersList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getEnumBaseInfoList(\com\vip\sof\sof\service\EnumBaseInfoParam $param){
		
		$this->send_getEnumBaseInfoList( $param);
		return $this->recv_getEnumBaseInfoList();
	}
	
	public function send_getEnumBaseInfoList(\com\vip\sof\sof\service\EnumBaseInfoParam $param){
		
		$this->initInvocation("getEnumBaseInfoList");
		$args = new \com\vip\sof\sof\service\SofService_getEnumBaseInfoList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getEnumBaseInfoList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getEnumBaseInfoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExceptionalOrdersList(\com\vip\sof\sof\service\ExceptionalOrdersSearchParam $exceptionalOrdersSearchParam){
		
		$this->send_getExceptionalOrdersList( $exceptionalOrdersSearchParam);
		return $this->recv_getExceptionalOrdersList();
	}
	
	public function send_getExceptionalOrdersList(\com\vip\sof\sof\service\ExceptionalOrdersSearchParam $exceptionalOrdersSearchParam){
		
		$this->initInvocation("getExceptionalOrdersList");
		$args = new \com\vip\sof\sof\service\SofService_getExceptionalOrdersList_args();
		
		$args->exceptionalOrdersSearchParam = $exceptionalOrdersSearchParam;
		
		$this->send_base($args);
	}
	
	public function recv_getExceptionalOrdersList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getExceptionalOrdersList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getImportInvoiceErrFile(\com\vip\sof\sof\service\InvoiceImportParam $param){
		
		$this->send_getImportInvoiceErrFile( $param);
		return $this->recv_getImportInvoiceErrFile();
	}
	
	public function send_getImportInvoiceErrFile(\com\vip\sof\sof\service\InvoiceImportParam $param){
		
		$this->initInvocation("getImportInvoiceErrFile");
		$args = new \com\vip\sof\sof\service\SofService_getImportInvoiceErrFile_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getImportInvoiceErrFile(){
		
		$result = new \com\vip\sof\sof\service\SofService_getImportInvoiceErrFile_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInvoiceList(\com\vip\sof\sof\service\InvoiceListParam $param){
		
		$this->send_getInvoiceList( $param);
		return $this->recv_getInvoiceList();
	}
	
	public function send_getInvoiceList(\com\vip\sof\sof\service\InvoiceListParam $param){
		
		$this->initInvocation("getInvoiceList");
		$args = new \com\vip\sof\sof\service\SofService_getInvoiceList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getInvoiceList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getInvoiceList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderInfoList( $orderSnList){
		
		$this->send_getOrderInfoList( $orderSnList);
		return $this->recv_getOrderInfoList();
	}
	
	public function send_getOrderInfoList( $orderSnList){
		
		$this->initInvocation("getOrderInfoList");
		$args = new \com\vip\sof\sof\service\SofService_getOrderInfoList_args();
		
		$args->orderSnList = $orderSnList;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderInfoList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getOrderInfoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderTransportRegisterList( $orderSnList){
		
		$this->send_getOrderTransportRegisterList( $orderSnList);
		return $this->recv_getOrderTransportRegisterList();
	}
	
	public function send_getOrderTransportRegisterList( $orderSnList){
		
		$this->initInvocation("getOrderTransportRegisterList");
		$args = new \com\vip\sof\sof\service\SofService_getOrderTransportRegisterList_args();
		
		$args->orderSnList = $orderSnList;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderTransportRegisterList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getOrderTransportRegisterList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPackageDetail(\com\vip\sof\sof\service\AfterSalePackageInfoSearchParam $param){
		
		$this->send_getPackageDetail( $param);
		return $this->recv_getPackageDetail();
	}
	
	public function send_getPackageDetail(\com\vip\sof\sof\service\AfterSalePackageInfoSearchParam $param){
		
		$this->initInvocation("getPackageDetail");
		$args = new \com\vip\sof\sof\service\SofService_getPackageDetail_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getPackageDetail(){
		
		$result = new \com\vip\sof\sof\service\SofService_getPackageDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPrintSoList(\com\vip\sof\sof\service\GetPrintSoListParam $param){
		
		$this->send_getPrintSoList( $param);
		return $this->recv_getPrintSoList();
	}
	
	public function send_getPrintSoList(\com\vip\sof\sof\service\GetPrintSoListParam $param){
		
		$this->initInvocation("getPrintSoList");
		$args = new \com\vip\sof\sof\service\SofService_getPrintSoList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getPrintSoList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getPrintSoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPrintTemplet(\com\vip\sof\sof\service\GetPrintSoListParam $param){
		
		$this->send_getPrintTemplet( $param);
		return $this->recv_getPrintTemplet();
	}
	
	public function send_getPrintTemplet(\com\vip\sof\sof\service\GetPrintSoListParam $param){
		
		$this->initInvocation("getPrintTemplet");
		$args = new \com\vip\sof\sof\service\SofService_getPrintTemplet_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getPrintTemplet(){
		
		$result = new \com\vip\sof\sof\service\SofService_getPrintTemplet_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getRefuseInfo(\com\vip\sof\sof\service\RefuseInfoParam $param){
		
		$this->send_getRefuseInfo( $param);
		return $this->recv_getRefuseInfo();
	}
	
	public function send_getRefuseInfo(\com\vip\sof\sof\service\RefuseInfoParam $param){
		
		$this->initInvocation("getRefuseInfo");
		$args = new \com\vip\sof\sof\service\SofService_getRefuseInfo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getRefuseInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_getRefuseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSignedLog(\com\vip\sof\sof\service\OrderParam $param){
		
		$this->send_getSignedLog( $param);
		return $this->recv_getSignedLog();
	}
	
	public function send_getSignedLog(\com\vip\sof\sof\service\OrderParam $param){
		
		$this->initInvocation("getSignedLog");
		$args = new \com\vip\sof\sof\service\SofService_getSignedLog_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getSignedLog(){
		
		$result = new \com\vip\sof\sof\service\SofService_getSignedLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStoreOverseasByStoreId(){
		
		$this->send_getStoreOverseasByStoreId();
		return $this->recv_getStoreOverseasByStoreId();
	}
	
	public function send_getStoreOverseasByStoreId(){
		
		$this->initInvocation("getStoreOverseasByStoreId");
		$args = new \com\vip\sof\sof\service\SofService_getStoreOverseasByStoreId_args();
		
		$this->send_base($args);
	}
	
	public function recv_getStoreOverseasByStoreId(){
		
		$result = new \com\vip\sof\sof\service\SofService_getStoreOverseasByStoreId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSupHTSCancelOrders( $maxCount){
		
		$this->send_getSupHTSCancelOrders( $maxCount);
		return $this->recv_getSupHTSCancelOrders();
	}
	
	public function send_getSupHTSCancelOrders( $maxCount){
		
		$this->initInvocation("getSupHTSCancelOrders");
		$args = new \com\vip\sof\sof\service\SofService_getSupHTSCancelOrders_args();
		
		$args->maxCount = $maxCount;
		
		$this->send_base($args);
	}
	
	public function recv_getSupHTSCancelOrders(){
		
		$result = new \com\vip\sof\sof\service\SofService_getSupHTSCancelOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSupHTSOrders( $maxCount){
		
		$this->send_getSupHTSOrders( $maxCount);
		return $this->recv_getSupHTSOrders();
	}
	
	public function send_getSupHTSOrders( $maxCount){
		
		$this->initInvocation("getSupHTSOrders");
		$args = new \com\vip\sof\sof\service\SofService_getSupHTSOrders_args();
		
		$args->maxCount = $maxCount;
		
		$this->send_base($args);
	}
	
	public function recv_getSupHTSOrders(){
		
		$result = new \com\vip\sof\sof\service\SofService_getSupHTSOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTmsSoTransport(\com\vip\sof\sof\service\TmsGetSoTransportParam $tmsGetSoTransportParam){
		
		$this->send_getTmsSoTransport( $tmsGetSoTransportParam);
		return $this->recv_getTmsSoTransport();
	}
	
	public function send_getTmsSoTransport(\com\vip\sof\sof\service\TmsGetSoTransportParam $tmsGetSoTransportParam){
		
		$this->initInvocation("getTmsSoTransport");
		$args = new \com\vip\sof\sof\service\SofService_getTmsSoTransport_args();
		
		$args->tmsGetSoTransportParam = $tmsGetSoTransportParam;
		
		$this->send_base($args);
	}
	
	public function recv_getTmsSoTransport(){
		
		$result = new \com\vip\sof\sof\service\SofService_getTmsSoTransport_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTrusteeshipStatus(){
		
		$this->send_getTrusteeshipStatus();
		return $this->recv_getTrusteeshipStatus();
	}
	
	public function send_getTrusteeshipStatus(){
		
		$this->initInvocation("getTrusteeshipStatus");
		$args = new \com\vip\sof\sof\service\SofService_getTrusteeshipStatus_args();
		
		$this->send_base($args);
	}
	
	public function recv_getTrusteeshipStatus(){
		
		$result = new \com\vip\sof\sof\service\SofService_getTrusteeshipStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWOPCancelOrders( $max_count, $less_last_modified_time, $greater_last_modified_time, $start_num){
		
		$this->send_getWOPCancelOrders( $max_count, $less_last_modified_time, $greater_last_modified_time, $start_num);
		return $this->recv_getWOPCancelOrders();
	}
	
	public function send_getWOPCancelOrders( $max_count, $less_last_modified_time, $greater_last_modified_time, $start_num){
		
		$this->initInvocation("getWOPCancelOrders");
		$args = new \com\vip\sof\sof\service\SofService_getWOPCancelOrders_args();
		
		$args->max_count = $max_count;
		
		$args->less_last_modified_time = $less_last_modified_time;
		
		$args->greater_last_modified_time = $greater_last_modified_time;
		
		$args->start_num = $start_num;
		
		$this->send_base($args);
	}
	
	public function recv_getWOPCancelOrders(){
		
		$result = new \com\vip\sof\sof\service\SofService_getWOPCancelOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWorkOrderList( $storeId, $orderSn){
		
		$this->send_getWorkOrderList( $storeId, $orderSn);
		return $this->recv_getWorkOrderList();
	}
	
	public function send_getWorkOrderList( $storeId, $orderSn){
		
		$this->initInvocation("getWorkOrderList");
		$args = new \com\vip\sof\sof\service\SofService_getWorkOrderList_args();
		
		$args->storeId = $storeId;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getWorkOrderList(){
		
		$result = new \com\vip\sof\sof\service\SofService_getWorkOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function grayscale( $param){
		
		$this->send_grayscale( $param);
		return $this->recv_grayscale();
	}
	
	public function send_grayscale( $param){
		
		$this->initInvocation("grayscale");
		$args = new \com\vip\sof\sof\service\SofService_grayscale_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_grayscale(){
		
		$result = new \com\vip\sof\sof\service\SofService_grayscale_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\sof\sof\service\SofService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\sof\sof\service\SofService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function htsCancelAutoAduit(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_htsCancelAutoAduit( $param);
		return $this->recv_htsCancelAutoAduit();
	}
	
	public function send_htsCancelAutoAduit(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("htsCancelAutoAduit");
		$args = new \com\vip\sof\sof\service\SofService_htsCancelAutoAduit_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_htsCancelAutoAduit(){
		
		$result = new \com\vip\sof\sof\service\SofService_htsCancelAutoAduit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function importInvoice(\com\vip\sof\sof\service\InvoiceImportParam $param){
		
		$this->send_importInvoice( $param);
		return $this->recv_importInvoice();
	}
	
	public function send_importInvoice(\com\vip\sof\sof\service\InvoiceImportParam $param){
		
		$this->initInvocation("importInvoice");
		$args = new \com\vip\sof\sof\service\SofService_importInvoice_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_importInvoice(){
		
		$result = new \com\vip\sof\sof\service\SofService_importInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isWhiteListStore( $intfName, $storeId){
		
		$this->send_isWhiteListStore( $intfName, $storeId);
		return $this->recv_isWhiteListStore();
	}
	
	public function send_isWhiteListStore( $intfName, $storeId){
		
		$this->initInvocation("isWhiteListStore");
		$args = new \com\vip\sof\sof\service\SofService_isWhiteListStore_args();
		
		$args->intfName = $intfName;
		
		$args->storeId = $storeId;
		
		$this->send_base($args);
	}
	
	public function recv_isWhiteListStore(){
		
		$result = new \com\vip\sof\sof\service\SofService_isWhiteListStore_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function notifyTrusteeshipStatus(\com\vip\sof\sof\service\TrusteeshipStatusInfo $notifyTrusteeshipStatusReq){
		
		$this->send_notifyTrusteeshipStatus( $notifyTrusteeshipStatusReq);
		return $this->recv_notifyTrusteeshipStatus();
	}
	
	public function send_notifyTrusteeshipStatus(\com\vip\sof\sof\service\TrusteeshipStatusInfo $notifyTrusteeshipStatusReq){
		
		$this->initInvocation("notifyTrusteeshipStatus");
		$args = new \com\vip\sof\sof\service\SofService_notifyTrusteeshipStatus_args();
		
		$args->notifyTrusteeshipStatusReq = $notifyTrusteeshipStatusReq;
		
		$this->send_base($args);
	}
	
	public function recv_notifyTrusteeshipStatus(){
		
		$result = new \com\vip\sof\sof\service\SofService_notifyTrusteeshipStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function opAfterSaleInfo(\com\vip\sof\sof\service\AfterSaleOpParam $afterSaleOpParam){
		
		$this->send_opAfterSaleInfo( $afterSaleOpParam);
		return $this->recv_opAfterSaleInfo();
	}
	
	public function send_opAfterSaleInfo(\com\vip\sof\sof\service\AfterSaleOpParam $afterSaleOpParam){
		
		$this->initInvocation("opAfterSaleInfo");
		$args = new \com\vip\sof\sof\service\SofService_opAfterSaleInfo_args();
		
		$args->afterSaleOpParam = $afterSaleOpParam;
		
		$this->send_base($args);
	}
	
	public function recv_opAfterSaleInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_opAfterSaleInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function opAfterSaleOnePiece(\com\vip\sof\sof\service\AfterSaleOnePieceOpParam $afterSaleOnePieceOpParam){
		
		$this->send_opAfterSaleOnePiece( $afterSaleOnePieceOpParam);
		return $this->recv_opAfterSaleOnePiece();
	}
	
	public function send_opAfterSaleOnePiece(\com\vip\sof\sof\service\AfterSaleOnePieceOpParam $afterSaleOnePieceOpParam){
		
		$this->initInvocation("opAfterSaleOnePiece");
		$args = new \com\vip\sof\sof\service\SofService_opAfterSaleOnePiece_args();
		
		$args->afterSaleOnePieceOpParam = $afterSaleOnePieceOpParam;
		
		$this->send_base($args);
	}
	
	public function recv_opAfterSaleOnePiece(){
		
		$result = new \com\vip\sof\sof\service\SofService_opAfterSaleOnePiece_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pullOfcAfterSale(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_pullOfcAfterSale( $param);
		return $this->recv_pullOfcAfterSale();
	}
	
	public function send_pullOfcAfterSale(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("pullOfcAfterSale");
		$args = new \com\vip\sof\sof\service\SofService_pullOfcAfterSale_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pullOfcAfterSale(){
		
		$result = new \com\vip\sof\sof\service\SofService_pullOfcAfterSale_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushCancelInfoToOrder(\com\vip\sof\sof\service\CancelOrderParam $param){
		
		$this->send_pushCancelInfoToOrder( $param);
		return $this->recv_pushCancelInfoToOrder();
	}
	
	public function send_pushCancelInfoToOrder(\com\vip\sof\sof\service\CancelOrderParam $param){
		
		$this->initInvocation("pushCancelInfoToOrder");
		$args = new \com\vip\sof\sof\service\SofService_pushCancelInfoToOrder_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushCancelInfoToOrder(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushCancelInfoToOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushChangeInvoiceTypeToOrder(\com\vip\sof\sof\service\PushChangeInvoiceTypeToOrderParam $param){
		
		$this->send_pushChangeInvoiceTypeToOrder( $param);
		return $this->recv_pushChangeInvoiceTypeToOrder();
	}
	
	public function send_pushChangeInvoiceTypeToOrder(\com\vip\sof\sof\service\PushChangeInvoiceTypeToOrderParam $param){
		
		$this->initInvocation("pushChangeInvoiceTypeToOrder");
		$args = new \com\vip\sof\sof\service\SofService_pushChangeInvoiceTypeToOrder_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushChangeInvoiceTypeToOrder(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushChangeInvoiceTypeToOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushFullLinkData(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_pushFullLinkData( $param);
		return $this->recv_pushFullLinkData();
	}
	
	public function send_pushFullLinkData(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("pushFullLinkData");
		$args = new \com\vip\sof\sof\service\SofService_pushFullLinkData_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushFullLinkData(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushFullLinkData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushInvoiceToVEI(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->send_pushInvoiceToVEI( $param);
		return $this->recv_pushInvoiceToVEI();
	}
	
	public function send_pushInvoiceToVEI(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->initInvocation("pushInvoiceToVEI");
		$args = new \com\vip\sof\sof\service\SofService_pushInvoiceToVEI_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushInvoiceToVEI(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushInvoiceToVEI_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOfcTrackCron(\com\vip\sof\sof\service\PushOfcTransportCron $pushOfcTransportCron){
		
		$this->send_pushOfcTrackCron( $pushOfcTransportCron);
		return $this->recv_pushOfcTrackCron();
	}
	
	public function send_pushOfcTrackCron(\com\vip\sof\sof\service\PushOfcTransportCron $pushOfcTransportCron){
		
		$this->initInvocation("pushOfcTrackCron");
		$args = new \com\vip\sof\sof\service\SofService_pushOfcTrackCron_args();
		
		$args->pushOfcTransportCron = $pushOfcTransportCron;
		
		$this->send_base($args);
	}
	
	public function recv_pushOfcTrackCron(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushOfcTrackCron_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOrderAfterSale(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_pushOrderAfterSale( $param);
		return $this->recv_pushOrderAfterSale();
	}
	
	public function send_pushOrderAfterSale(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("pushOrderAfterSale");
		$args = new \com\vip\sof\sof\service\SofService_pushOrderAfterSale_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushOrderAfterSale(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushOrderAfterSale_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOrderServiceGuaranteeApply(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_pushOrderServiceGuaranteeApply( $param);
		return $this->recv_pushOrderServiceGuaranteeApply();
	}
	
	public function send_pushOrderServiceGuaranteeApply(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("pushOrderServiceGuaranteeApply");
		$args = new \com\vip\sof\sof\service\SofService_pushOrderServiceGuaranteeApply_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushOrderServiceGuaranteeApply(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushOrderServiceGuaranteeApply_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushPopOrderTransportInfoToB2c(\com\vip\sof\sof\service\PushPopOrderTransportInfoToB2cParam $param){
		
		$this->send_pushPopOrderTransportInfoToB2c( $param);
		return $this->recv_pushPopOrderTransportInfoToB2c();
	}
	
	public function send_pushPopOrderTransportInfoToB2c(\com\vip\sof\sof\service\PushPopOrderTransportInfoToB2cParam $param){
		
		$this->initInvocation("pushPopOrderTransportInfoToB2c");
		$args = new \com\vip\sof\sof\service\SofService_pushPopOrderTransportInfoToB2c_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushPopOrderTransportInfoToB2c(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushPopOrderTransportInfoToB2c_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushSesFee(\com\vip\sof\sof\service\PushSesFeeParam $param){
		
		$this->send_pushSesFee( $param);
		return $this->recv_pushSesFee();
	}
	
	public function send_pushSesFee(\com\vip\sof\sof\service\PushSesFeeParam $param){
		
		$this->initInvocation("pushSesFee");
		$args = new \com\vip\sof\sof\service\SofService_pushSesFee_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushSesFee(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushSesFee_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushSignInfoToOrder(\com\vip\sof\sof\service\PushSignInfoParam $param){
		
		$this->send_pushSignInfoToOrder( $param);
		return $this->recv_pushSignInfoToOrder();
	}
	
	public function send_pushSignInfoToOrder(\com\vip\sof\sof\service\PushSignInfoParam $param){
		
		$this->initInvocation("pushSignInfoToOrder");
		$args = new \com\vip\sof\sof\service\SofService_pushSignInfoToOrder_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushSignInfoToOrder(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushSignInfoToOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushTmsAfterSale(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_pushTmsAfterSale( $param);
		return $this->recv_pushTmsAfterSale();
	}
	
	public function send_pushTmsAfterSale(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("pushTmsAfterSale");
		$args = new \com\vip\sof\sof\service\SofService_pushTmsAfterSale_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushTmsAfterSale(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushTmsAfterSale_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushTmsTrackInfo(\com\vip\sof\sof\service\TmsPushTrackParam $param){
		
		$this->send_pushTmsTrackInfo( $param);
		return $this->recv_pushTmsTrackInfo();
	}
	
	public function send_pushTmsTrackInfo(\com\vip\sof\sof\service\TmsPushTrackParam $param){
		
		$this->initInvocation("pushTmsTrackInfo");
		$args = new \com\vip\sof\sof\service\SofService_pushTmsTrackInfo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushTmsTrackInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushTmsTrackInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushTransportSignRefuseToFullLink(\com\vip\sof\sof\service\CronParam $param){
		
		$this->send_pushTransportSignRefuseToFullLink( $param);
		return $this->recv_pushTransportSignRefuseToFullLink();
	}
	
	public function send_pushTransportSignRefuseToFullLink(\com\vip\sof\sof\service\CronParam $param){
		
		$this->initInvocation("pushTransportSignRefuseToFullLink");
		$args = new \com\vip\sof\sof\service\SofService_pushTransportSignRefuseToFullLink_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_pushTransportSignRefuseToFullLink(){
		
		$result = new \com\vip\sof\sof\service\SofService_pushTransportSignRefuseToFullLink_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryCancelInfo(\com\vip\sof\sof\service\CancelQueryParam $param){
		
		$this->send_queryCancelInfo( $param);
		return $this->recv_queryCancelInfo();
	}
	
	public function send_queryCancelInfo(\com\vip\sof\sof\service\CancelQueryParam $param){
		
		$this->initInvocation("queryCancelInfo");
		$args = new \com\vip\sof\sof\service\SofService_queryCancelInfo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_queryCancelInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_queryCancelInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryCancelInfoForVup(\com\vip\sof\sof\service\CancelQueryParam $param){
		
		$this->send_queryCancelInfoForVup( $param);
		return $this->recv_queryCancelInfoForVup();
	}
	
	public function send_queryCancelInfoForVup(\com\vip\sof\sof\service\CancelQueryParam $param){
		
		$this->initInvocation("queryCancelInfoForVup");
		$args = new \com\vip\sof\sof\service\SofService_queryCancelInfoForVup_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_queryCancelInfoForVup(){
		
		$result = new \com\vip\sof\sof\service\SofService_queryCancelInfoForVup_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryCancelInfoList(\com\vip\sof\sof\service\CancelListQueryParam $param){
		
		$this->send_queryCancelInfoList( $param);
		return $this->recv_queryCancelInfoList();
	}
	
	public function send_queryCancelInfoList(\com\vip\sof\sof\service\CancelListQueryParam $param){
		
		$this->initInvocation("queryCancelInfoList");
		$args = new \com\vip\sof\sof\service\SofService_queryCancelInfoList_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_queryCancelInfoList(){
		
		$result = new \com\vip\sof\sof\service\SofService_queryCancelInfoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function revokeCancelApply(\com\vip\sof\sof\service\RevokeCancelApplyReq $req){
		
		$this->send_revokeCancelApply( $req);
		return $this->recv_revokeCancelApply();
	}
	
	public function send_revokeCancelApply(\com\vip\sof\sof\service\RevokeCancelApplyReq $req){
		
		$this->initInvocation("revokeCancelApply");
		$args = new \com\vip\sof\sof\service\SofService_revokeCancelApply_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_revokeCancelApply(){
		
		$result = new \com\vip\sof\sof\service\SofService_revokeCancelApply_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveAfterSaleInfo( $afterSalePullInfo){
		
		$this->send_saveAfterSaleInfo( $afterSalePullInfo);
		return $this->recv_saveAfterSaleInfo();
	}
	
	public function send_saveAfterSaleInfo( $afterSalePullInfo){
		
		$this->initInvocation("saveAfterSaleInfo");
		$args = new \com\vip\sof\sof\service\SofService_saveAfterSaleInfo_args();
		
		$args->afterSalePullInfo = $afterSalePullInfo;
		
		$this->send_base($args);
	}
	
	public function recv_saveAfterSaleInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_saveAfterSaleInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveCancelArbitrate(\com\vip\sof\sof\service\CancelArbitrateParam $param){
		
		$this->send_saveCancelArbitrate( $param);
		return $this->recv_saveCancelArbitrate();
	}
	
	public function send_saveCancelArbitrate(\com\vip\sof\sof\service\CancelArbitrateParam $param){
		
		$this->initInvocation("saveCancelArbitrate");
		$args = new \com\vip\sof\sof\service\SofService_saveCancelArbitrate_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_saveCancelArbitrate(){
		
		$result = new \com\vip\sof\sof\service\SofService_saveCancelArbitrate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveSoHeaderInfo(\com\vip\sof\sof\service\SaveSoHeaderParam $param){
		
		$this->send_saveSoHeaderInfo( $param);
		return $this->recv_saveSoHeaderInfo();
	}
	
	public function send_saveSoHeaderInfo(\com\vip\sof\sof\service\SaveSoHeaderParam $param){
		
		$this->initInvocation("saveSoHeaderInfo");
		$args = new \com\vip\sof\sof\service\SofService_saveSoHeaderInfo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_saveSoHeaderInfo(){
		
		$result = new \com\vip\sof\sof\service\SofService_saveSoHeaderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveTmsSoTransportFlag(\com\vip\sof\sof\service\TmsSoTransportSavedParam $tmsSoTransportSavedParam){
		
		$this->send_saveTmsSoTransportFlag( $tmsSoTransportSavedParam);
		return $this->recv_saveTmsSoTransportFlag();
	}
	
	public function send_saveTmsSoTransportFlag(\com\vip\sof\sof\service\TmsSoTransportSavedParam $tmsSoTransportSavedParam){
		
		$this->initInvocation("saveTmsSoTransportFlag");
		$args = new \com\vip\sof\sof\service\SofService_saveTmsSoTransportFlag_args();
		
		$args->tmsSoTransportSavedParam = $tmsSoTransportSavedParam;
		
		$this->send_base($args);
	}
	
	public function recv_saveTmsSoTransportFlag(){
		
		$result = new \com\vip\sof\sof\service\SofService_saveTmsSoTransportFlag_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sendNewsAlert(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->send_sendNewsAlert( $param);
		return $this->recv_sendNewsAlert();
	}
	
	public function send_sendNewsAlert(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->initInvocation("sendNewsAlert");
		$args = new \com\vip\sof\sof\service\SofService_sendNewsAlert_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_sendNewsAlert(){
		
		$result = new \com\vip\sof\sof\service\SofService_sendNewsAlert_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setSUPHTSStatus( $syncListStatus){
		
		$this->send_setSUPHTSStatus( $syncListStatus);
		return $this->recv_setSUPHTSStatus();
	}
	
	public function send_setSUPHTSStatus( $syncListStatus){
		
		$this->initInvocation("setSUPHTSStatus");
		$args = new \com\vip\sof\sof\service\SofService_setSUPHTSStatus_args();
		
		$args->syncListStatus = $syncListStatus;
		
		$this->send_base($args);
	}
	
	public function recv_setSUPHTSStatus(){
		
		$result = new \com\vip\sof\sof\service\SofService_setSUPHTSStatus_result();
		$this->receive_base($result);
		
	}
	
	
	public function setSupHTSCancelOrders( $htsList){
		
		$this->send_setSupHTSCancelOrders( $htsList);
		return $this->recv_setSupHTSCancelOrders();
	}
	
	public function send_setSupHTSCancelOrders( $htsList){
		
		$this->initInvocation("setSupHTSCancelOrders");
		$args = new \com\vip\sof\sof\service\SofService_setSupHTSCancelOrders_args();
		
		$args->htsList = $htsList;
		
		$this->send_base($args);
	}
	
	public function recv_setSupHTSCancelOrders(){
		
		$result = new \com\vip\sof\sof\service\SofService_setSupHTSCancelOrders_result();
		$this->receive_base($result);
		
	}
	
	
	public function subscribeHTSResult( $htsResult){
		
		$this->send_subscribeHTSResult( $htsResult);
		return $this->recv_subscribeHTSResult();
	}
	
	public function send_subscribeHTSResult( $htsResult){
		
		$this->initInvocation("subscribeHTSResult");
		$args = new \com\vip\sof\sof\service\SofService_subscribeHTSResult_args();
		
		$args->htsResult = $htsResult;
		
		$this->send_base($args);
	}
	
	public function recv_subscribeHTSResult(){
		
		$result = new \com\vip\sof\sof\service\SofService_subscribeHTSResult_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncInvoiceStatus(\com\vip\sof\sof\service\PushSignInfoParam $param){
		
		$this->send_syncInvoiceStatus( $param);
		return $this->recv_syncInvoiceStatus();
	}
	
	public function send_syncInvoiceStatus(\com\vip\sof\sof\service\PushSignInfoParam $param){
		
		$this->initInvocation("syncInvoiceStatus");
		$args = new \com\vip\sof\sof\service\SofService_syncInvoiceStatus_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_syncInvoiceStatus(){
		
		$result = new \com\vip\sof\sof\service\SofService_syncInvoiceStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferLastDayData(\com\vip\sof\sof\service\PushSignInfoParam $param){
		
		$this->send_transferLastDayData( $param);
		return $this->recv_transferLastDayData();
	}
	
	public function send_transferLastDayData(\com\vip\sof\sof\service\PushSignInfoParam $param){
		
		$this->initInvocation("transferLastDayData");
		$args = new \com\vip\sof\sof\service\SofService_transferLastDayData_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_transferLastDayData(){
		
		$result = new \com\vip\sof\sof\service\SofService_transferLastDayData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInvoiceType(\com\vip\sof\sof\service\InvoiceImportParam $param){
		
		$this->send_updateInvoiceType( $param);
		return $this->recv_updateInvoiceType();
	}
	
	public function send_updateInvoiceType(\com\vip\sof\sof\service\InvoiceImportParam $param){
		
		$this->initInvocation("updateInvoiceType");
		$args = new \com\vip\sof\sof\service\SofService_updateInvoiceType_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_updateInvoiceType(){
		
		$result = new \com\vip\sof\sof\service\SofService_updateInvoiceType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadInvoiceUrl(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->send_uploadInvoiceUrl( $param);
		return $this->recv_uploadInvoiceUrl();
	}
	
	public function send_uploadInvoiceUrl(\com\vip\sof\sof\service\PushInvoiceToVEIParam $param){
		
		$this->initInvocation("uploadInvoiceUrl");
		$args = new \com\vip\sof\sof\service\SofService_uploadInvoiceUrl_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_uploadInvoiceUrl(){
		
		$result = new \com\vip\sof\sof\service\SofService_uploadInvoiceUrl_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vopImportInvoice(\com\vip\sof\sof\service\VOPInvoiceImportParam $param){
		
		$this->send_vopImportInvoice( $param);
		return $this->recv_vopImportInvoice();
	}
	
	public function send_vopImportInvoice(\com\vip\sof\sof\service\VOPInvoiceImportParam $param){
		
		$this->initInvocation("vopImportInvoice");
		$args = new \com\vip\sof\sof\service\SofService_vopImportInvoice_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_vopImportInvoice(){
		
		$result = new \com\vip\sof\sof\service\SofService_vopImportInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vopUpdateInvoiceType(\com\vip\sof\sof\service\VOPInvoiceImportParam $param){
		
		$this->send_vopUpdateInvoiceType( $param);
		return $this->recv_vopUpdateInvoiceType();
	}
	
	public function send_vopUpdateInvoiceType(\com\vip\sof\sof\service\VOPInvoiceImportParam $param){
		
		$this->initInvocation("vopUpdateInvoiceType");
		$args = new \com\vip\sof\sof\service\SofService_vopUpdateInvoiceType_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_vopUpdateInvoiceType(){
		
		$result = new \com\vip\sof\sof\service\SofService_vopUpdateInvoiceType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class SofService_afterSaleConfirmReceipt_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\AfterSaleConfirmReceiptParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_afterSaleExport_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\AfterSaleListSearchParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_agreeTaxInformation_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_auditCancelApply_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelApplyAuditParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_autoPassedAllOvertimeCancelApplyAudit_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_autoPassedWOPOvertimeCancelApplyAudit_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_autoRefuseCron_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cancelAutoApply_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelAutoApplyParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cancelAutoApplyForWOP_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelAutoApplyParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cancelHtsAutoApply_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkErrorInvoiceFromVEI_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CheckInvoiceFromVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkInvoiceFromVEI_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CheckInvoiceFromVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkInvoiceUrl_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushInvoiceToVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkTrustInvoiceAckFromVEI_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkTrustInvoiceFromVEI_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkTrustStatusInvoiceFromVEI_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CheckTrustInvoiceFromVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cipStatistics_args {
	
	static $_TSPEC;
	public $opStat = null;
	public $opParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'opStat'
			),
			2 => array(
			'var' => 'opParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['opStat'])){
				
				$this->opStat = $vals['opStat'];
			}
			
			
			if (isset($vals['opParam'])){
				
				$this->opParam = $vals['opParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readByte($this->opStat); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->opParam);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->opStat !== null) {
			
			$xfer += $output->writeFieldBegin('opStat');
			$xfer += $output->writeByte($this->opStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opParam !== null) {
			
			$xfer += $output->writeFieldBegin('opParam');
			$xfer += $output->writeString($this->opParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_createMpProblemOrderCron_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doExternalRefuseResult_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\RefuseParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doRefuseCron_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doRefusePushPackFlagCron_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doRefuseResult_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\RefuseParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doReturnInpackCron_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doReturnUnpackCron_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_editorTransportNo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\TransportInfo();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportAutoCancelList_args {
	
	static $_TSPEC;
	public $autoCancelType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoCancelType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoCancelType'])){
				
				$this->autoCancelType = $vals['autoCancelType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->autoCancelType = new \com\vip\sof\sof\service\AutoCancelType();
			$this->autoCancelType->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->autoCancelType !== null) {
			
			$xfer += $output->writeFieldBegin('autoCancelType');
			
			if (!is_object($this->autoCancelType)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->autoCancelType->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportAutoRefundList_args {
	
	static $_TSPEC;
	public $autoRefundType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoRefundType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoRefundType'])){
				
				$this->autoRefundType = $vals['autoRefundType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->autoRefundType = new \com\vip\sof\sof\service\AutoRefundType();
			$this->autoRefundType->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->autoRefundType !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefundType');
			
			if (!is_object($this->autoRefundType)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->autoRefundType->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportInvoiceList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\InvoiceListParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportOrderList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\ExportOrderParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleDetail_args {
	
	static $_TSPEC;
	public $afterSaleInfoSearchParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleInfoSearchParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleInfoSearchParam'])){
				
				$this->afterSaleInfoSearchParam = $vals['afterSaleInfoSearchParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSaleInfoSearchParam = new \com\vip\sof\sof\service\AfterSaleInfoSearchParam();
			$this->afterSaleInfoSearchParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSaleInfoSearchParam !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleInfoSearchParam');
			
			if (!is_object($this->afterSaleInfoSearchParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleInfoSearchParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleInfo_args {
	
	static $_TSPEC;
	public $afterSaleInfoSearchParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleInfoSearchParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleInfoSearchParam'])){
				
				$this->afterSaleInfoSearchParam = $vals['afterSaleInfoSearchParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSaleInfoSearchParam = new \com\vip\sof\sof\service\AfterSaleInfoSearchParam();
			$this->afterSaleInfoSearchParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSaleInfoSearchParam !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleInfoSearchParam');
			
			if (!is_object($this->afterSaleInfoSearchParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleInfoSearchParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleList_args {
	
	static $_TSPEC;
	public $afterSaleListSearchParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleListSearchParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleListSearchParam'])){
				
				$this->afterSaleListSearchParam = $vals['afterSaleListSearchParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSaleListSearchParam = new \com\vip\sof\sof\service\AfterSaleListSearchParam();
			$this->afterSaleListSearchParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSaleListSearchParam !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleListSearchParam');
			
			if (!is_object($this->afterSaleListSearchParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleListSearchParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleListForAutoCancel_args {
	
	static $_TSPEC;
	public $autoCancelType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoCancelType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoCancelType'])){
				
				$this->autoCancelType = $vals['autoCancelType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->autoCancelType = new \com\vip\sof\sof\service\AutoCancelType();
			$this->autoCancelType->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->autoCancelType !== null) {
			
			$xfer += $output->writeFieldBegin('autoCancelType');
			
			if (!is_object($this->autoCancelType)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->autoCancelType->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleListForAutoRefund_args {
	
	static $_TSPEC;
	public $autoRefundType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoRefundType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoRefundType'])){
				
				$this->autoRefundType = $vals['autoRefundType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->autoRefundType = new \com\vip\sof\sof\service\AutoRefundType();
			$this->autoRefundType->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->autoRefundType !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefundType');
			
			if (!is_object($this->autoRefundType)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->autoRefundType->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleOpLog_args {
	
	static $_TSPEC;
	public $afterSaleInfoSearchParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleInfoSearchParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleInfoSearchParam'])){
				
				$this->afterSaleInfoSearchParam = $vals['afterSaleInfoSearchParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSaleInfoSearchParam = new \com\vip\sof\sof\service\AfterSaleInfoSearchParam();
			$this->afterSaleInfoSearchParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSaleInfoSearchParam !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleInfoSearchParam');
			
			if (!is_object($this->afterSaleInfoSearchParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleInfoSearchParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getCancelOperationLogList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelOperationParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getCarriersList_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getEnumBaseInfoList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\EnumBaseInfoParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getExceptionalOrdersList_args {
	
	static $_TSPEC;
	public $exceptionalOrdersSearchParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'exceptionalOrdersSearchParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['exceptionalOrdersSearchParam'])){
				
				$this->exceptionalOrdersSearchParam = $vals['exceptionalOrdersSearchParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->exceptionalOrdersSearchParam = new \com\vip\sof\sof\service\ExceptionalOrdersSearchParam();
			$this->exceptionalOrdersSearchParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->exceptionalOrdersSearchParam !== null) {
			
			$xfer += $output->writeFieldBegin('exceptionalOrdersSearchParam');
			
			if (!is_object($this->exceptionalOrdersSearchParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->exceptionalOrdersSearchParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getImportInvoiceErrFile_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\InvoiceImportParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getInvoiceList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\InvoiceListParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getOrderInfoList_args {
	
	static $_TSPEC;
	public $orderSnList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSnList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderSnList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orderSnList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('orderSnList');
			
			if (!is_array($this->orderSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderSnList as $iter0){
				
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




class SofService_getOrderTransportRegisterList_args {
	
	static $_TSPEC;
	public $orderSnList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSnList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderSnList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->orderSnList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('orderSnList');
			
			if (!is_array($this->orderSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderSnList as $iter0){
				
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




class SofService_getPackageDetail_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\AfterSalePackageInfoSearchParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getPrintSoList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\GetPrintSoListParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getPrintTemplet_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\GetPrintSoListParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getRefuseInfo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\RefuseInfoParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getSignedLog_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\OrderParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getStoreOverseasByStoreId_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getSupHTSCancelOrders_args {
	
	static $_TSPEC;
	public $maxCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxCount'])){
				
				$this->maxCount = $vals['maxCount'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->maxCount); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->maxCount !== null) {
			
			$xfer += $output->writeFieldBegin('maxCount');
			$xfer += $output->writeI32($this->maxCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getSupHTSOrders_args {
	
	static $_TSPEC;
	public $maxCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxCount'])){
				
				$this->maxCount = $vals['maxCount'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->maxCount); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->maxCount !== null) {
			
			$xfer += $output->writeFieldBegin('maxCount');
			$xfer += $output->writeI32($this->maxCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getTmsSoTransport_args {
	
	static $_TSPEC;
	public $tmsGetSoTransportParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsGetSoTransportParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsGetSoTransportParam'])){
				
				$this->tmsGetSoTransportParam = $vals['tmsGetSoTransportParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsGetSoTransportParam = new \com\vip\sof\sof\service\TmsGetSoTransportParam();
			$this->tmsGetSoTransportParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tmsGetSoTransportParam !== null) {
			
			$xfer += $output->writeFieldBegin('tmsGetSoTransportParam');
			
			if (!is_object($this->tmsGetSoTransportParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsGetSoTransportParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getTrusteeshipStatus_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getWOPCancelOrders_args {
	
	static $_TSPEC;
	public $max_count = null;
	public $less_last_modified_time = null;
	public $greater_last_modified_time = null;
	public $start_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'max_count'
			),
			2 => array(
			'var' => 'less_last_modified_time'
			),
			3 => array(
			'var' => 'greater_last_modified_time'
			),
			4 => array(
			'var' => 'start_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['max_count'])){
				
				$this->max_count = $vals['max_count'];
			}
			
			
			if (isset($vals['less_last_modified_time'])){
				
				$this->less_last_modified_time = $vals['less_last_modified_time'];
			}
			
			
			if (isset($vals['greater_last_modified_time'])){
				
				$this->greater_last_modified_time = $vals['greater_last_modified_time'];
			}
			
			
			if (isset($vals['start_num'])){
				
				$this->start_num = $vals['start_num'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->max_count); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->less_last_modified_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->greater_last_modified_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->start_num); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->max_count !== null) {
			
			$xfer += $output->writeFieldBegin('max_count');
			$xfer += $output->writeI32($this->max_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->less_last_modified_time !== null) {
			
			$xfer += $output->writeFieldBegin('less_last_modified_time');
			$xfer += $output->writeString($this->less_last_modified_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greater_last_modified_time !== null) {
			
			$xfer += $output->writeFieldBegin('greater_last_modified_time');
			$xfer += $output->writeString($this->greater_last_modified_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_num !== null) {
			
			$xfer += $output->writeFieldBegin('start_num');
			$xfer += $output->writeI32($this->start_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getWorkOrderList_args {
	
	static $_TSPEC;
	public $storeId = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->storeId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_grayscale_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->param);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			$xfer += $output->writeString($this->param);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_htsCancelAutoAduit_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_importInvoice_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\InvoiceImportParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_isWhiteListStore_args {
	
	static $_TSPEC;
	public $intfName = null;
	public $storeId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'intfName'
			),
			2 => array(
			'var' => 'storeId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['intfName'])){
				
				$this->intfName = $vals['intfName'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->intfName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storeId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->intfName !== null) {
			
			$xfer += $output->writeFieldBegin('intfName');
			$xfer += $output->writeString($this->intfName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_notifyTrusteeshipStatus_args {
	
	static $_TSPEC;
	public $notifyTrusteeshipStatusReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'notifyTrusteeshipStatusReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['notifyTrusteeshipStatusReq'])){
				
				$this->notifyTrusteeshipStatusReq = $vals['notifyTrusteeshipStatusReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->notifyTrusteeshipStatusReq = new \com\vip\sof\sof\service\TrusteeshipStatusInfo();
			$this->notifyTrusteeshipStatusReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->notifyTrusteeshipStatusReq !== null) {
			
			$xfer += $output->writeFieldBegin('notifyTrusteeshipStatusReq');
			
			if (!is_object($this->notifyTrusteeshipStatusReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->notifyTrusteeshipStatusReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_opAfterSaleInfo_args {
	
	static $_TSPEC;
	public $afterSaleOpParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleOpParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleOpParam'])){
				
				$this->afterSaleOpParam = $vals['afterSaleOpParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSaleOpParam = new \com\vip\sof\sof\service\AfterSaleOpParam();
			$this->afterSaleOpParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSaleOpParam !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleOpParam');
			
			if (!is_object($this->afterSaleOpParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleOpParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_opAfterSaleOnePiece_args {
	
	static $_TSPEC;
	public $afterSaleOnePieceOpParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleOnePieceOpParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleOnePieceOpParam'])){
				
				$this->afterSaleOnePieceOpParam = $vals['afterSaleOnePieceOpParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSaleOnePieceOpParam = new \com\vip\sof\sof\service\AfterSaleOnePieceOpParam();
			$this->afterSaleOnePieceOpParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSaleOnePieceOpParam !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleOnePieceOpParam');
			
			if (!is_object($this->afterSaleOnePieceOpParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleOnePieceOpParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pullOfcAfterSale_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushCancelInfoToOrder_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelOrderParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushChangeInvoiceTypeToOrder_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushChangeInvoiceTypeToOrderParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushFullLinkData_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushInvoiceToVEI_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushInvoiceToVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushOfcTrackCron_args {
	
	static $_TSPEC;
	public $pushOfcTransportCron = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pushOfcTransportCron'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pushOfcTransportCron'])){
				
				$this->pushOfcTransportCron = $vals['pushOfcTransportCron'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pushOfcTransportCron = new \com\vip\sof\sof\service\PushOfcTransportCron();
			$this->pushOfcTransportCron->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pushOfcTransportCron !== null) {
			
			$xfer += $output->writeFieldBegin('pushOfcTransportCron');
			
			if (!is_object($this->pushOfcTransportCron)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pushOfcTransportCron->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushOrderAfterSale_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushOrderServiceGuaranteeApply_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushPopOrderTransportInfoToB2c_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushPopOrderTransportInfoToB2cParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushSesFee_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushSesFeeParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushSignInfoToOrder_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushSignInfoParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushTmsAfterSale_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushTmsTrackInfo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\TmsPushTrackParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushTransportSignRefuseToFullLink_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CronParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_queryCancelInfo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelQueryParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_queryCancelInfoForVup_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelQueryParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_queryCancelInfoList_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelListQueryParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_revokeCancelApply_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\sof\sof\service\RevokeCancelApplyReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveAfterSaleInfo_args {
	
	static $_TSPEC;
	public $afterSalePullInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSalePullInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSalePullInfo'])){
				
				$this->afterSalePullInfo = $vals['afterSalePullInfo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->afterSalePullInfo = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\AfterSalePullInfo();
					$elem0->read($input);
					
					$this->afterSalePullInfo[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->afterSalePullInfo !== null) {
			
			$xfer += $output->writeFieldBegin('afterSalePullInfo');
			
			if (!is_array($this->afterSalePullInfo)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSalePullInfo as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveCancelArbitrate_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\CancelArbitrateParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveSoHeaderInfo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\SaveSoHeaderParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveTmsSoTransportFlag_args {
	
	static $_TSPEC;
	public $tmsSoTransportSavedParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsSoTransportSavedParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsSoTransportSavedParam'])){
				
				$this->tmsSoTransportSavedParam = $vals['tmsSoTransportSavedParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsSoTransportSavedParam = new \com\vip\sof\sof\service\TmsSoTransportSavedParam();
			$this->tmsSoTransportSavedParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tmsSoTransportSavedParam !== null) {
			
			$xfer += $output->writeFieldBegin('tmsSoTransportSavedParam');
			
			if (!is_object($this->tmsSoTransportSavedParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsSoTransportSavedParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_sendNewsAlert_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushInvoiceToVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_setSUPHTSStatus_args {
	
	static $_TSPEC;
	public $syncListStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'syncListStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['syncListStatus'])){
				
				$this->syncListStatus = $vals['syncListStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->syncListStatus = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\SyncHTSSoStatus();
					$elem0->read($input);
					
					$this->syncListStatus[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->syncListStatus !== null) {
			
			$xfer += $output->writeFieldBegin('syncListStatus');
			
			if (!is_array($this->syncListStatus)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->syncListStatus as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_setSupHTSCancelOrders_args {
	
	static $_TSPEC;
	public $htsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htsList'])){
				
				$this->htsList = $vals['htsList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htsList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\HTSCancelInfo();
					$elem1->read($input);
					
					$this->htsList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htsList !== null) {
			
			$xfer += $output->writeFieldBegin('htsList');
			
			if (!is_array($this->htsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->htsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_subscribeHTSResult_args {
	
	static $_TSPEC;
	public $htsResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htsResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htsResult'])){
				
				$this->htsResult = $vals['htsResult'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htsResult = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\SyncHTSSoResult();
					$elem1->read($input);
					
					$this->htsResult[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htsResult !== null) {
			
			$xfer += $output->writeFieldBegin('htsResult');
			
			if (!is_array($this->htsResult)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->htsResult as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_syncInvoiceStatus_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushSignInfoParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_transferLastDayData_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushSignInfoParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_updateInvoiceType_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\InvoiceImportParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_uploadInvoiceUrl_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\PushInvoiceToVEIParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_vopImportInvoice_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\VOPInvoiceImportParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_vopUpdateInvoiceType_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\sof\sof\service\VOPInvoiceImportParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_afterSaleConfirmReceipt_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\OpReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_afterSaleExport_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\ExportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_agreeTaxInformation_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
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




class SofService_auditCancelApply_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelApplyAuditResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_autoPassedAllOvertimeCancelApplyAudit_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_autoPassedWOPOvertimeCancelApplyAudit_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_autoRefuseCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cancelAutoApply_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelAutoApplyResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cancelAutoApplyForWOP_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelAutoApplyResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cancelHtsAutoApply_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkErrorInvoiceFromVEI_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkInvoiceFromVEI_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkInvoiceUrl_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkTrustInvoiceAckFromVEI_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkTrustInvoiceFromVEI_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_checkTrustStatusInvoiceFromVEI_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_cipStatistics_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_createMpProblemOrderCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doExternalRefuseResult_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\RefuseResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doRefuseCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doRefusePushPackFlagCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doRefuseResult_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\RefuseResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doReturnInpackCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_doReturnUnpackCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_editorTransportNo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\UpdateTransportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportAutoCancelList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\ExportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportAutoRefundList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\ExportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportInvoiceList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\ExportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_exportOrderList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\ExportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleDetail_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\AfterSaleDetail();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\AfterSaleInfoRet();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\AfterSaleHeaderListRet();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleListForAutoCancel_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\AfterSaleAutoCancelListRet();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleListForAutoRefund_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\AfterSaleAutoRefundListRet();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getAfterSaleOpLog_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\AfterSaleOpLog();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getCancelOperationLogList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\CancelOperationLog();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getCarriersList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\CarriersCodeShortname();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getEnumBaseInfoList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\EnumBaseInfoResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getExceptionalOrdersList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\ExceptionalOrdersListRet();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getImportInvoiceErrFile_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\InvoiceImportFileResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getInvoiceList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\InvoiceListResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getOrderInfoList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\OrderInfoList();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getOrderTransportRegisterList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\OrderTransportRegister();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getPackageDetail_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\AfterSaleInfoRet();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getPrintSoList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\PrintInfo();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getPrintTemplet_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\GetPrintTempletResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getRefuseInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\RefuseInfoResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getSignedLog_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\SignedLog();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getStoreOverseasByStoreId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readByte($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeByte($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getSupHTSCancelOrders_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\HTSCancelInfo();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getSupHTSOrders_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\SyncHTSSoInfo();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getTmsSoTransport_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\TmsSoTransportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getTrusteeshipStatus_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\GetTrusteeshipInfoResponseModel();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getWOPCancelOrders_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\HTSCancelInfoWOP();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_getWorkOrderList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\ProblemOrder();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_grayscale_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_htsCancelAutoAduit_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_importInvoice_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\InvoiceImportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_isWhiteListStore_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readByte($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeByte($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_notifyTrusteeshipStatus_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_opAfterSaleInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\OpReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_opAfterSaleOnePiece_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\OpReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pullOfcAfterSale_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushCancelInfoToOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelOrderResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushChangeInvoiceTypeToOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushFullLinkData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushInvoiceToVEI_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushOfcTrackCron_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\PushSignInfoResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushOrderAfterSale_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushOrderServiceGuaranteeApply_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushPopOrderTransportInfoToB2c_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\PushPopOrderTransportInfoToB2cResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushSesFee_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushSignInfoToOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\PushSignInfoResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushTmsAfterSale_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushTmsTrackInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\TmsPushTrackResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_pushTransportSignRefuseToFullLink_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_queryCancelInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelQueryResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_queryCancelInfoForVup_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelQueryResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_queryCancelInfoList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\CancelListResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_revokeCancelApply_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\RevokeCancelApplyResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveAfterSaleInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\AfterSalePullSavedResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveCancelArbitrate_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveSoHeaderInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\SaveSoHeaderResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_saveTmsSoTransportFlag_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\TmsSoTransportSavedResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_sendNewsAlert_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_setSUPHTSStatus_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_setSupHTSCancelOrders_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_subscribeHTSResult_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_syncInvoiceStatus_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_transferLastDayData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_updateInvoiceType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\sof\sof\service\InvoiceImportResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_uploadInvoiceUrl_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_vopImportInvoice_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sof\sof\service\FailInvoiceDetail();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SofService_vopUpdateInvoiceType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sof\sof\service\FailInvoiceDetail();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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