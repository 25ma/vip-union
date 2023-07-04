<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;
interface SvipOspServiceV2If{
	
	
	public function SearchSvipHistory(\com\vip\svip\osp\service\SearchSvipHistoryRequest $request);
	
	public function SvipCompensate(\com\vip\svip\osp\service\SvipCompensateParam $param);
	
	public function SvipCompensateByHand(\com\vip\svip\osp\service\SvipCompensateParam $param);
	
	public function batchCancel(\com\vip\svip\osp\service\BatchCancelRequest $request);
	
	public function batchCancelV2(\com\vip\svip\osp\service\BatchCancelRequestV2 $request);
	
	public function bindCouponForMonthCard( $couponId);
	
	public function bindCouponForMonthCardForMapi( $couponStr, $userId);
	
	public function bindTxUserAccount(\com\vip\svip\osp\service\BindTxAccRequest $request);
	
	public function bindVirtualCoupon( $actCode, $couponId);
	
	public function brandGiftDetailList(\com\vip\svip\osp\service\BrandGiftDetailRequest $request);
	
	public function buildUserMonthCardModelV1();
	
	public function buildUserMonthCardModelV2();
	
	public function cancelSvipIdentity(\com\vip\svip\osp\service\DoCancelRequest $request);
	
	public function cancelUserSvipAutoPay(\com\vip\svip\osp\service\CancelUserSvipAutoPayReq $cancelUserSvipAutoPayReq);
	
	public function checkFreeSVipLayerRightsLimit();
	
	public function checkFreeSvipRightsLimit();
	
	public function checkMonthCardLimit( $userId, $vpid,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest);
	
	public function checkMonthCardLimitForApp( $userId,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest);
	
	public function checkOneToManyRewardLimit( $actCode);
	
	public function checkTxAccLimit(\com\vip\svip\osp\service\CheckTxAccLimitRequest $request);
	
	public function checkUserPhone( $phone);
	
	public function checkXmlyRecharge( $openId);
	
	public function cleanUpUseBeforePay( $userId, $reason, $operator);
	
	public function closeSvipStartBeforePayContract( $userId, $contractSn, $closeType, $operator, $reason);
	
	public function closeSvipStartBeforePayContractByUser( $reason);
	
	public function compensateTxVideo(\com\vip\svip\osp\service\CompensateTxVideoRequest $request);
	
	public function createCaptchaFlow( $source, $data);
	
	public function createCaptchaFlowByOneToMany( $source, $data);
	
	public function createSubscribe( $actCode);
	
	public function createSvipStartBeforePayContract( $mobile_platform, $appName);
	
	public function createThirdSvipToken(\com\vip\svip\osp\service\ThirdCreatSvipTokenRequest $request);
	
	public function createUserSvipAutoPayContract( $platform);
	
	public function createUserUseBeforePayContract(\com\vip\svip\osp\service\CreateUserUseBeforePayContractRequest $req);
	
	public function dingDongdecryptMobile( $data);
	
	public function doCancelJob(\com\vip\svip\osp\service\DoCancelJobRequest $request);
	
	public function doCancelSvipUser(\com\vip\svip\osp\service\DoCancelRequest $request);
	
	public function draw(\com\vip\svip\osp\service\DrawRequest $request);
	
	public function existNoCloseStartBeforePayContract( $userId);
	
	public function existTakeAvailableRights( $actCode);
	
	public function getBindAccountInfo(\com\vip\svip\osp\service\GetBindAccountRequest $request);
	
	public function getBrandGiftIdList(\com\vip\svip\osp\service\BrandGiftRequest $request);
	
	public function getBuyLimitResult(\com\vip\svip\osp\service\BuyLimitRequestHeader $header,\com\vip\svip\osp\service\BuyLimitRequestParam $param);
	
	public function getGoodsIdByPickNo(\com\vip\svip\osp\service\GetGoodsIdByPickNoReq $request);
	
	public function getGroupValuesConf(\com\vip\svip\osp\service\GetGroupValuesRequest $request);
	
	public function getMonthCardInfo( $userId,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest);
	
	public function getMonthCardInfoByActCode( $actCodeList);
	
	public function getMonthCardStatusForLogout( $userId);
	
	public function getMonthCardUserJoinedInfoToCustomer( $userId, $limit, $offset);
	
	public function getOneToManyActInfo( $actCode);
	
	public function getOneToManyJoinInfo( $actCode);
	
	public function getOpGoodsDetailList(\com\vip\svip\osp\service\GetOpGoodsDetailRequest $request);
	
	public function getOpGoodsIds(\com\vip\svip\osp\service\GetOpGoodsIdRequest $request);
	
	public function getOrderRefundAmount(\com\vip\svip\osp\service\GetOrderRefundAmountRequest $request);
	
	public function getPackageGiftInfo();
	
	public function getPackageGiftInfoForTest( $userId, $ip);
	
	public function getPmsPriceByProductId(\com\vip\svip\osp\service\BrandGoodsPriceRequest $request);
	
	public function getStartBeforePayContractListByUid( $userId, $limit, $offset);
	
	public function getSubscribeNum( $actCode);
	
	public function getSumCount(\com\vip\svip\osp\service\GetSumCountRequest $request);
	
	public function getSvipAutoPayContractForCSC( $userId);
	
	public function getSvipBindInfo();
	
	public function getSvipBindInfoByOrderSn( $orderSn);
	
	public function getSvipBindInfoByUserId( $userId);
	
	public function getSvipEffectivepFirstRightsActivity();
	
	public function getSvipEquityInfo(\com\vip\svip\osp\service\SvipEquityInfoRequest $request);
	
	public function getSvipEquityInfoForShop( $savingCalVersion, $appName);
	
	public function getSvipFirstRightsActivityInfo();
	
	public function getSvipGoodsByMid(\com\vip\svip\osp\service\GetSvipGoodsRequest $request);
	
	public function getSvipGoodsDefaultPrice( $lv, $bizType, $userId);
	
	public function getSvipGoodsDetail(\com\vip\svip\osp\service\GetSvipGoodsDetailReq $request);
	
	public function getSvipGoodsInfoForOsp(\com\vip\svip\osp\service\GetSvipGoodsInfoForOspRequest $getSvipGoodsInfoForOspRequest);
	
	public function getSvipGoodsinfo( $bizList, $appName, $areaId, $fdcAreaId);
	
	public function getSvipInfo4AppClub(\com\vip\svip\osp\service\GetSvipInfo4AppClubRequest $request);
	
	public function getSvipMainInfo(\com\vip\svip\osp\service\BaseRequestHeader $header);
	
	public function getSvipOpenHistoryList( $limit, $offset);
	
	public function getSvipPrizeInfo( $actCode);
	
	public function getSvipPrizeInfoForTest( $userId, $actCode, $ip);
	
	public function getSvipRightsActInfo( $actCode);
	
	public function getSvipRightsInfo( $actCode, $rightsCode);
	
	public function getSvipRightsInfoWithoutCheck( $actCode, $rightsCode);
	
	public function getSvipRightsJoinRecordById( $id);
	
	public function getSvipRightsJoinRecordList( $page, $size);
	
	public function getSvipStartBeforePayContractByContractSn( $contract_sn);
	
	public function getSvipStartBeforePayContractForFront();
	
	public function getSvipStartBeforePayContractForOsp( $userId);
	
	public function getSvipStartBeforePayTotalSavedMoney(\com\vip\svip\osp\service\GetTotalSavedMoneyReq $getTotalSavedMoneyReq);
	
	public function getSvipState();
	
	public function getSvipUserHealth(\com\vip\svip\osp\service\GetSvipUserHealthReq $req);
	
	public function getSvipUserInfo(\com\vip\svip\osp\service\SvipUserLimitStateReq $req);
	
	public function getSvipUserStatusHistoryList( $userId, $limit, $offset);
	
	public function getSvipUserStatusHistoryListForFront();
	
	public function getTencentVipSvipCardInfo( $userId);
	
	public function getTheTimeSvipPrice(\com\vip\svip\osp\service\GetTheTimeSvipPrice $request);
	
	public function getThirdAccountInfoByOpenId( $openId, $bizType);
	
	public function getThirdAccountInfoByUnionLogin( $code, $bizType);
	
	public function getUnPayOrderInfo( $productId);
	
	public function getUnPayOrderInfoForMonthCard( $productId);
	
	public function getUnionSvipGoodsInfo(\com\vip\svip\osp\service\UnionSvipGoodsRequest $request);
	
	public function getUseBeforePayOrderList( $page);
	
	public function getUserActInfoToCustomer( $userId);
	
	public function getUserAttendInfo(\com\vip\svip\osp\service\UserAttendInfoRequest $request);
	
	public function getUserLastestMonthCard( $userIdList);
	
	public function getUserMobileEncrypt( $userId);
	
	public function getUserMonthCardAbacusResult(\com\vip\svip\osp\service\GetUserMonthCardInfoParam $param);
	
	public function getUserMonthCardForVipShop(\com\vip\svip\osp\service\GetUserMonthCardForVipShopRequestParam $getUserMonthCardForVipShopRequestParam);
	
	public function getUserMonthCardResultForNova();
	
	public function getUserRightsLatestMobile();
	
	public function getUserRightsSavedInfo();
	
	public function getUserSubscribeInfo( $actCode);
	
	public function getUserSvipAutoPayContractForFront();
	
	public function getUserSvipAutoPayContractForOsp( $userId);
	
	public function getUserSvipFirstRightsRecord();
	
	public function getUserSvipRightsJoinRecordList( $startDate, $endDate, $userId);
	
	public function getUserSvipRightsList( $actCode, $userId);
	
	public function getUserUseBeforePayContract();
	
	public function getUserUseBeforePayContractByUid( $userId);
	
	public function getUserUseBeforePayContractForCSC( $userId);
	
	public function getUserUseBeforePayContractForFront();
	
	public function giveUpSvipRights( $userId);
	
	public function healthCheck();
	
	public function isCancelSvipStartBeforePayContractByUser();
	
	public function isLimitPurchase(\com\vip\svip\osp\service\BuyLimitStateRequest $request);
	
	public function isSvipBanArea( $areaId);
	
	public function isSvipBuyLimit(\com\vip\svip\osp\service\BuyLimitRequestHeader $header,\com\vip\svip\osp\service\BuyLimitRequestParam $param);
	
	public function isSvipLimitUser(\com\vip\svip\osp\service\BuyLimitStateRequest $request);
	
	public function isSvipLimitUserByPhone(\com\vip\svip\osp\service\CheckSvipUserLimitByPhoneParam $request);
	
	public function isSvipStartBeforePayLimit();
	
	public function isUserBeforePayLimit();
	
	public function isWxuidEqPayuid( $wxOrderSn);
	
	public function joinSvipForTencentVideoSide(\com\vip\svip\osp\service\DoubleSvipRequest $request);
	
	public function joinTencentVideoMemberAtVipSide(\com\vip\svip\osp\service\DoubleSvipRequest $request);
	
	public function kugouDoubleVerify( $out_trade_no, $out_user_id);
	
	public function mobileOpenSvip(\com\vip\svip\osp\service\OpenSvipRequest $request);
	
	public function notifyCloseContractUserToPay();
	
	public function notifyFireContractUserToPay();
	
	public function notifyUserWillDeduct( $whiteList);
	
	public function offlineChannelTrySvip(\com\vip\svip\osp\service\SimpleRequestHeader $header,\com\vip\svip\osp\service\OfflineChannelInfo $channelInfo);
	
	public function oneToManyLimitCheck( $userId, $actCode);
	
	public function oneToManyLimitCheckForFront( $actCode, $mid);
	
	public function openFreeMonthCardForNova();
	
	public function openLimitCheck(\com\vip\svip\osp\service\OpenLimitRequest $request);
	
	public function openOneToManyForThirdComponent(\com\vip\svip\osp\service\OneToManyThirdInfoRequest $request);
	
	public function openSvipStartBeforePayContract( $userId, $contractSn);
	
	public function openSvipUseBeforePayContract( $userId, $contractSn, $wxContractSn, $operator);
	
	public function openUserSvipAutoPay( $userId, $contract_sn, $wx_order_sn);
	
	public function ospCheckFreeSvipRightsLimit(\com\vip\svip\osp\service\CheckFreeSvipRightsRequest $request);
	
	public function ospGetPrizeActInfoWithoutCheck(\com\vip\svip\osp\service\GetSvipPrizeInfoWithoutCheckRequest $request);
	
	public function ospGetSvipPrizeInfo(\com\vip\svip\osp\service\GetSvipPrizeInfoRequest $request);
	
	public function ospTakeSvipPrize( $actCode, $ip, $userId);
	
	public function prepareDoubleSvipAccess(\com\vip\svip\osp\service\DoubleSvipRequest $request);
	
	public function queryNotice();
	
	public function queryOneToManyQMusicOrderInfoToCustomer(\com\vip\svip\osp\service\QQMusicStatusParamModel $qqMusicStatusParamModel);
	
	public function queryQQMusicStatus( $userId);
	
	public function querySavedAmount( $userId, $start, $end);
	
	public function querySvipCouponInfo( $rcode);
	
	public function queryUnPayAutoOrderForNova();
	
	public function queryUnPayOrderUseVirtualCoupon();
	
	public function queryUserSvipSaveOrderList( $limit, $offset);
	
	public function queryUserSvipSaveOrderListByContractSn( $limit, $offset, $contractSn);
	
	public function queryUserSvipSaveOrderListForOsp( $limit, $offset, $userId);
	
	public function queryVirtualCoupon( $actCode, $couponType);
	
	public function receivePrize(\com\vip\svip\osp\service\ReceivePrizeRequest $request);
	
	public function receiveSvipCoupon(\com\vip\svip\osp\service\SvipCouponReceiveReq $svipCouponReceiveReq);
	
	public function receiveSvipCouponImportIdl(\com\vip\svip\osp\service\RemindQueryParam $param);
	
	public function recoverSvipFirstRights(\com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq $svipFirstRightsReduceOrRecoverReq);
	
	public function reduceSvipFirstRights(\com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq $svipFirstRightsReduceOrRecoverReq);
	
	public function rejoinTencentMember( $serial, $admin);
	
	public function repairData( $config, $bizType);
	
	public function resetCanceledPayMember( $userId, $source, $uniqueCode);
	
	public function retryFirstOpenRightsUdpFlow();
	
	public function retryOthersOperateRecord();
	
	public function retryProcessGifts();
	
	public function retrySendMsgToEbs( $msgIds);
	
	public function retrySvipExceptionLog();
	
	public function retrySvipOperate();
	
	public function scrapeAction(\com\vip\svip\osp\service\ScrapeActionRequest $request);
	
	public function searchSvipTXHistory(\com\vip\svip\osp\service\SearchSvipHistoryRequest $request);
	
	public function sendSaveMoneyRemindSms( $userId, $startDate);
	
	public function sendSvipFirstRightsExpireSms( $userId);
	
	public function setMonthCardLogoutStatus( $userId);
	
	public function specialMemberTrySvip(\com\vip\svip\osp\service\SimpleRequestHeader $header);
	
	public function startBeforePayAutoPay( $whiteList);
	
	public function startBeforePayAutoPayRetry();
	
	public function startBeforePayPreAutoPay( $whiteList);
	
	public function startBeforePayPreAutoPayRetry();
	
	public function svipAutoPayNoticePayStatus( $userId, $orderSn);
	
	public function svipCompensateForCommon(\com\vip\svip\osp\service\SvipCompensateParam $param);
	
	public function svipCompensateForCommonForBackground(\com\vip\svip\osp\service\SvipCompensateParam $param);
	
	public function svipRightsSendRegisterCode( $phone, $actCode, $rightsCode);
	
	public function svipUserOperate(\com\vip\svip\osp\service\SvipUserOperateInfoParam $info,\com\vip\svip\osp\service\SvipUserOperateSignCheck $signCheck);
	
	public function syncCancelResult();
	
	public function takeFreeSVipLayerRights();
	
	public function takeFreeSvipRights();
	
	public function takeOneToManyReward( $actCode);
	
	public function takePackageGift();
	
	public function takePackageGiftForTest( $userId, $ip);
	
	public function takeSvipPrize( $actCode);
	
	public function takeSvipPrizeForTest( $userId, $actCode, $ip);
	
	public function takeSvipRightsPrize(\com\vip\svip\osp\service\TakeSvipRightsPrizeReq $req);
	
	public function terminateContract( $contractSn);
	
	public function terminateContractForCSC( $userId, $contractSn, $reason, $operator);
	
	public function testSendMsgToEbs( $msg);
	
	public function thirdOpenLimitCheck(\com\vip\svip\osp\service\ThirdOpenLimitRequest $request);
	
	public function thirdOpenSvip(\com\vip\svip\osp\service\ThirdOpenSvipRequest $request);
	
	public function txGetSvipToken(\com\vip\svip\osp\service\TxGetTokenRequest $request);
	
	public function txOpenSvip(\com\vip\svip\osp\service\TxOpenSvipRequest $request);
	
	public function updateSvipFirstOpenStatus( $userId, $id);
	
	public function updateUseBeforePayContract( $userId, $contractSn, $orderSn, $status, $reason, $operator);
	
	public function vOrderCallMonthCard( $json);
	
	public function vOrderCallSvip( $json);
	
}

class _SvipOspServiceV2Client extends \Osp\Base\OspStub implements \com\vip\svip\osp\service\SvipOspServiceV2If{
	
	public function __construct(){
		
		parent::__construct("com.vip.svip.osp.service.SvipOspServiceV2", "1.0.0");
	}
	
	
	public function SearchSvipHistory(\com\vip\svip\osp\service\SearchSvipHistoryRequest $request){
		
		$this->send_SearchSvipHistory( $request);
		return $this->recv_SearchSvipHistory();
	}
	
	public function send_SearchSvipHistory(\com\vip\svip\osp\service\SearchSvipHistoryRequest $request){
		
		$this->initInvocation("SearchSvipHistory");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_SearchSvipHistory_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_SearchSvipHistory(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_SearchSvipHistory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function SvipCompensate(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->send_SvipCompensate( $param);
		return $this->recv_SvipCompensate();
	}
	
	public function send_SvipCompensate(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->initInvocation("SvipCompensate");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_SvipCompensate_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_SvipCompensate(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_SvipCompensate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function SvipCompensateByHand(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->send_SvipCompensateByHand( $param);
		return $this->recv_SvipCompensateByHand();
	}
	
	public function send_SvipCompensateByHand(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->initInvocation("SvipCompensateByHand");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_SvipCompensateByHand_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_SvipCompensateByHand(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_SvipCompensateByHand_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchCancel(\com\vip\svip\osp\service\BatchCancelRequest $request){
		
		$this->send_batchCancel( $request);
		return $this->recv_batchCancel();
	}
	
	public function send_batchCancel(\com\vip\svip\osp\service\BatchCancelRequest $request){
		
		$this->initInvocation("batchCancel");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_batchCancel_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_batchCancel(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_batchCancel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchCancelV2(\com\vip\svip\osp\service\BatchCancelRequestV2 $request){
		
		$this->send_batchCancelV2( $request);
		return $this->recv_batchCancelV2();
	}
	
	public function send_batchCancelV2(\com\vip\svip\osp\service\BatchCancelRequestV2 $request){
		
		$this->initInvocation("batchCancelV2");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_batchCancelV2_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_batchCancelV2(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_batchCancelV2_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function bindCouponForMonthCard( $couponId){
		
		$this->send_bindCouponForMonthCard( $couponId);
		return $this->recv_bindCouponForMonthCard();
	}
	
	public function send_bindCouponForMonthCard( $couponId){
		
		$this->initInvocation("bindCouponForMonthCard");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_bindCouponForMonthCard_args();
		
		$args->couponId = $couponId;
		
		$this->send_base($args);
	}
	
	public function recv_bindCouponForMonthCard(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_bindCouponForMonthCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function bindCouponForMonthCardForMapi( $couponStr, $userId){
		
		$this->send_bindCouponForMonthCardForMapi( $couponStr, $userId);
		return $this->recv_bindCouponForMonthCardForMapi();
	}
	
	public function send_bindCouponForMonthCardForMapi( $couponStr, $userId){
		
		$this->initInvocation("bindCouponForMonthCardForMapi");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_bindCouponForMonthCardForMapi_args();
		
		$args->couponStr = $couponStr;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_bindCouponForMonthCardForMapi(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_bindCouponForMonthCardForMapi_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function bindTxUserAccount(\com\vip\svip\osp\service\BindTxAccRequest $request){
		
		$this->send_bindTxUserAccount( $request);
		return $this->recv_bindTxUserAccount();
	}
	
	public function send_bindTxUserAccount(\com\vip\svip\osp\service\BindTxAccRequest $request){
		
		$this->initInvocation("bindTxUserAccount");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_bindTxUserAccount_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_bindTxUserAccount(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_bindTxUserAccount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function bindVirtualCoupon( $actCode, $couponId){
		
		$this->send_bindVirtualCoupon( $actCode, $couponId);
		return $this->recv_bindVirtualCoupon();
	}
	
	public function send_bindVirtualCoupon( $actCode, $couponId){
		
		$this->initInvocation("bindVirtualCoupon");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_bindVirtualCoupon_args();
		
		$args->actCode = $actCode;
		
		$args->couponId = $couponId;
		
		$this->send_base($args);
	}
	
	public function recv_bindVirtualCoupon(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_bindVirtualCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function brandGiftDetailList(\com\vip\svip\osp\service\BrandGiftDetailRequest $request){
		
		$this->send_brandGiftDetailList( $request);
		return $this->recv_brandGiftDetailList();
	}
	
	public function send_brandGiftDetailList(\com\vip\svip\osp\service\BrandGiftDetailRequest $request){
		
		$this->initInvocation("brandGiftDetailList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_brandGiftDetailList_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_brandGiftDetailList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_brandGiftDetailList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function buildUserMonthCardModelV1(){
		
		$this->send_buildUserMonthCardModelV1();
		return $this->recv_buildUserMonthCardModelV1();
	}
	
	public function send_buildUserMonthCardModelV1(){
		
		$this->initInvocation("buildUserMonthCardModelV1");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_buildUserMonthCardModelV1_args();
		
		$this->send_base($args);
	}
	
	public function recv_buildUserMonthCardModelV1(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_buildUserMonthCardModelV1_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function buildUserMonthCardModelV2(){
		
		$this->send_buildUserMonthCardModelV2();
		return $this->recv_buildUserMonthCardModelV2();
	}
	
	public function send_buildUserMonthCardModelV2(){
		
		$this->initInvocation("buildUserMonthCardModelV2");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_buildUserMonthCardModelV2_args();
		
		$this->send_base($args);
	}
	
	public function recv_buildUserMonthCardModelV2(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_buildUserMonthCardModelV2_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelSvipIdentity(\com\vip\svip\osp\service\DoCancelRequest $request){
		
		$this->send_cancelSvipIdentity( $request);
		return $this->recv_cancelSvipIdentity();
	}
	
	public function send_cancelSvipIdentity(\com\vip\svip\osp\service\DoCancelRequest $request){
		
		$this->initInvocation("cancelSvipIdentity");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_cancelSvipIdentity_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_cancelSvipIdentity(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_cancelSvipIdentity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelUserSvipAutoPay(\com\vip\svip\osp\service\CancelUserSvipAutoPayReq $cancelUserSvipAutoPayReq){
		
		$this->send_cancelUserSvipAutoPay( $cancelUserSvipAutoPayReq);
		return $this->recv_cancelUserSvipAutoPay();
	}
	
	public function send_cancelUserSvipAutoPay(\com\vip\svip\osp\service\CancelUserSvipAutoPayReq $cancelUserSvipAutoPayReq){
		
		$this->initInvocation("cancelUserSvipAutoPay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_cancelUserSvipAutoPay_args();
		
		$args->cancelUserSvipAutoPayReq = $cancelUserSvipAutoPayReq;
		
		$this->send_base($args);
	}
	
	public function recv_cancelUserSvipAutoPay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_cancelUserSvipAutoPay_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkFreeSVipLayerRightsLimit(){
		
		$this->send_checkFreeSVipLayerRightsLimit();
		return $this->recv_checkFreeSVipLayerRightsLimit();
	}
	
	public function send_checkFreeSVipLayerRightsLimit(){
		
		$this->initInvocation("checkFreeSVipLayerRightsLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkFreeSVipLayerRightsLimit_args();
		
		$this->send_base($args);
	}
	
	public function recv_checkFreeSVipLayerRightsLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkFreeSVipLayerRightsLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkFreeSvipRightsLimit(){
		
		$this->send_checkFreeSvipRightsLimit();
		return $this->recv_checkFreeSvipRightsLimit();
	}
	
	public function send_checkFreeSvipRightsLimit(){
		
		$this->initInvocation("checkFreeSvipRightsLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkFreeSvipRightsLimit_args();
		
		$this->send_base($args);
	}
	
	public function recv_checkFreeSvipRightsLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkFreeSvipRightsLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkMonthCardLimit( $userId, $vpid,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest){
		
		$this->send_checkMonthCardLimit( $userId, $vpid, $extRequest);
		return $this->recv_checkMonthCardLimit();
	}
	
	public function send_checkMonthCardLimit( $userId, $vpid,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest){
		
		$this->initInvocation("checkMonthCardLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkMonthCardLimit_args();
		
		$args->userId = $userId;
		
		$args->vpid = $vpid;
		
		$args->extRequest = $extRequest;
		
		$this->send_base($args);
	}
	
	public function recv_checkMonthCardLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkMonthCardLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkMonthCardLimitForApp( $userId,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest){
		
		$this->send_checkMonthCardLimitForApp( $userId, $extRequest);
		return $this->recv_checkMonthCardLimitForApp();
	}
	
	public function send_checkMonthCardLimitForApp( $userId,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest){
		
		$this->initInvocation("checkMonthCardLimitForApp");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkMonthCardLimitForApp_args();
		
		$args->userId = $userId;
		
		$args->extRequest = $extRequest;
		
		$this->send_base($args);
	}
	
	public function recv_checkMonthCardLimitForApp(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkMonthCardLimitForApp_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkOneToManyRewardLimit( $actCode){
		
		$this->send_checkOneToManyRewardLimit( $actCode);
		return $this->recv_checkOneToManyRewardLimit();
	}
	
	public function send_checkOneToManyRewardLimit( $actCode){
		
		$this->initInvocation("checkOneToManyRewardLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkOneToManyRewardLimit_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_checkOneToManyRewardLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkOneToManyRewardLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkTxAccLimit(\com\vip\svip\osp\service\CheckTxAccLimitRequest $request){
		
		$this->send_checkTxAccLimit( $request);
		return $this->recv_checkTxAccLimit();
	}
	
	public function send_checkTxAccLimit(\com\vip\svip\osp\service\CheckTxAccLimitRequest $request){
		
		$this->initInvocation("checkTxAccLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkTxAccLimit_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_checkTxAccLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkTxAccLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkUserPhone( $phone){
		
		$this->send_checkUserPhone( $phone);
		return $this->recv_checkUserPhone();
	}
	
	public function send_checkUserPhone( $phone){
		
		$this->initInvocation("checkUserPhone");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkUserPhone_args();
		
		$args->phone = $phone;
		
		$this->send_base($args);
	}
	
	public function recv_checkUserPhone(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkUserPhone_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkXmlyRecharge( $openId){
		
		$this->send_checkXmlyRecharge( $openId);
		return $this->recv_checkXmlyRecharge();
	}
	
	public function send_checkXmlyRecharge( $openId){
		
		$this->initInvocation("checkXmlyRecharge");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_checkXmlyRecharge_args();
		
		$args->openId = $openId;
		
		$this->send_base($args);
	}
	
	public function recv_checkXmlyRecharge(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_checkXmlyRecharge_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cleanUpUseBeforePay( $userId, $reason, $operator){
		
		$this->send_cleanUpUseBeforePay( $userId, $reason, $operator);
		return $this->recv_cleanUpUseBeforePay();
	}
	
	public function send_cleanUpUseBeforePay( $userId, $reason, $operator){
		
		$this->initInvocation("cleanUpUseBeforePay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_cleanUpUseBeforePay_args();
		
		$args->userId = $userId;
		
		$args->reason = $reason;
		
		$args->operator = $operator;
		
		$this->send_base($args);
	}
	
	public function recv_cleanUpUseBeforePay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_cleanUpUseBeforePay_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function closeSvipStartBeforePayContract( $userId, $contractSn, $closeType, $operator, $reason){
		
		$this->send_closeSvipStartBeforePayContract( $userId, $contractSn, $closeType, $operator, $reason);
		return $this->recv_closeSvipStartBeforePayContract();
	}
	
	public function send_closeSvipStartBeforePayContract( $userId, $contractSn, $closeType, $operator, $reason){
		
		$this->initInvocation("closeSvipStartBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_closeSvipStartBeforePayContract_args();
		
		$args->userId = $userId;
		
		$args->contractSn = $contractSn;
		
		$args->closeType = $closeType;
		
		$args->operator = $operator;
		
		$args->reason = $reason;
		
		$this->send_base($args);
	}
	
	public function recv_closeSvipStartBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_closeSvipStartBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function closeSvipStartBeforePayContractByUser( $reason){
		
		$this->send_closeSvipStartBeforePayContractByUser( $reason);
		return $this->recv_closeSvipStartBeforePayContractByUser();
	}
	
	public function send_closeSvipStartBeforePayContractByUser( $reason){
		
		$this->initInvocation("closeSvipStartBeforePayContractByUser");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_closeSvipStartBeforePayContractByUser_args();
		
		$args->reason = $reason;
		
		$this->send_base($args);
	}
	
	public function recv_closeSvipStartBeforePayContractByUser(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_closeSvipStartBeforePayContractByUser_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function compensateTxVideo(\com\vip\svip\osp\service\CompensateTxVideoRequest $request){
		
		$this->send_compensateTxVideo( $request);
		return $this->recv_compensateTxVideo();
	}
	
	public function send_compensateTxVideo(\com\vip\svip\osp\service\CompensateTxVideoRequest $request){
		
		$this->initInvocation("compensateTxVideo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_compensateTxVideo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_compensateTxVideo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_compensateTxVideo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createCaptchaFlow( $source, $data){
		
		$this->send_createCaptchaFlow( $source, $data);
		return $this->recv_createCaptchaFlow();
	}
	
	public function send_createCaptchaFlow( $source, $data){
		
		$this->initInvocation("createCaptchaFlow");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createCaptchaFlow_args();
		
		$args->source = $source;
		
		$args->data = $data;
		
		$this->send_base($args);
	}
	
	public function recv_createCaptchaFlow(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createCaptchaFlow_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createCaptchaFlowByOneToMany( $source, $data){
		
		$this->send_createCaptchaFlowByOneToMany( $source, $data);
		return $this->recv_createCaptchaFlowByOneToMany();
	}
	
	public function send_createCaptchaFlowByOneToMany( $source, $data){
		
		$this->initInvocation("createCaptchaFlowByOneToMany");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createCaptchaFlowByOneToMany_args();
		
		$args->source = $source;
		
		$args->data = $data;
		
		$this->send_base($args);
	}
	
	public function recv_createCaptchaFlowByOneToMany(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createCaptchaFlowByOneToMany_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSubscribe( $actCode){
		
		$this->send_createSubscribe( $actCode);
		return $this->recv_createSubscribe();
	}
	
	public function send_createSubscribe( $actCode){
		
		$this->initInvocation("createSubscribe");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createSubscribe_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_createSubscribe(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createSubscribe_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSvipStartBeforePayContract( $mobile_platform, $appName){
		
		$this->send_createSvipStartBeforePayContract( $mobile_platform, $appName);
		return $this->recv_createSvipStartBeforePayContract();
	}
	
	public function send_createSvipStartBeforePayContract( $mobile_platform, $appName){
		
		$this->initInvocation("createSvipStartBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createSvipStartBeforePayContract_args();
		
		$args->mobile_platform = $mobile_platform;
		
		$args->appName = $appName;
		
		$this->send_base($args);
	}
	
	public function recv_createSvipStartBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createSvipStartBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createThirdSvipToken(\com\vip\svip\osp\service\ThirdCreatSvipTokenRequest $request){
		
		$this->send_createThirdSvipToken( $request);
		return $this->recv_createThirdSvipToken();
	}
	
	public function send_createThirdSvipToken(\com\vip\svip\osp\service\ThirdCreatSvipTokenRequest $request){
		
		$this->initInvocation("createThirdSvipToken");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createThirdSvipToken_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_createThirdSvipToken(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createThirdSvipToken_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createUserSvipAutoPayContract( $platform){
		
		$this->send_createUserSvipAutoPayContract( $platform);
		return $this->recv_createUserSvipAutoPayContract();
	}
	
	public function send_createUserSvipAutoPayContract( $platform){
		
		$this->initInvocation("createUserSvipAutoPayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createUserSvipAutoPayContract_args();
		
		$args->platform = $platform;
		
		$this->send_base($args);
	}
	
	public function recv_createUserSvipAutoPayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createUserSvipAutoPayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createUserUseBeforePayContract(\com\vip\svip\osp\service\CreateUserUseBeforePayContractRequest $req){
		
		$this->send_createUserUseBeforePayContract( $req);
		return $this->recv_createUserUseBeforePayContract();
	}
	
	public function send_createUserUseBeforePayContract(\com\vip\svip\osp\service\CreateUserUseBeforePayContractRequest $req){
		
		$this->initInvocation("createUserUseBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_createUserUseBeforePayContract_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_createUserUseBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_createUserUseBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function dingDongdecryptMobile( $data){
		
		$this->send_dingDongdecryptMobile( $data);
		return $this->recv_dingDongdecryptMobile();
	}
	
	public function send_dingDongdecryptMobile( $data){
		
		$this->initInvocation("dingDongdecryptMobile");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_dingDongdecryptMobile_args();
		
		$args->data = $data;
		
		$this->send_base($args);
	}
	
	public function recv_dingDongdecryptMobile(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_dingDongdecryptMobile_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doCancelJob(\com\vip\svip\osp\service\DoCancelJobRequest $request){
		
		$this->send_doCancelJob( $request);
		return $this->recv_doCancelJob();
	}
	
	public function send_doCancelJob(\com\vip\svip\osp\service\DoCancelJobRequest $request){
		
		$this->initInvocation("doCancelJob");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_doCancelJob_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_doCancelJob(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_doCancelJob_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doCancelSvipUser(\com\vip\svip\osp\service\DoCancelRequest $request){
		
		$this->send_doCancelSvipUser( $request);
		return $this->recv_doCancelSvipUser();
	}
	
	public function send_doCancelSvipUser(\com\vip\svip\osp\service\DoCancelRequest $request){
		
		$this->initInvocation("doCancelSvipUser");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_doCancelSvipUser_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_doCancelSvipUser(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_doCancelSvipUser_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function draw(\com\vip\svip\osp\service\DrawRequest $request){
		
		$this->send_draw( $request);
		return $this->recv_draw();
	}
	
	public function send_draw(\com\vip\svip\osp\service\DrawRequest $request){
		
		$this->initInvocation("draw");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_draw_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_draw(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_draw_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function existNoCloseStartBeforePayContract( $userId){
		
		$this->send_existNoCloseStartBeforePayContract( $userId);
		return $this->recv_existNoCloseStartBeforePayContract();
	}
	
	public function send_existNoCloseStartBeforePayContract( $userId){
		
		$this->initInvocation("existNoCloseStartBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_existNoCloseStartBeforePayContract_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_existNoCloseStartBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_existNoCloseStartBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function existTakeAvailableRights( $actCode){
		
		$this->send_existTakeAvailableRights( $actCode);
		return $this->recv_existTakeAvailableRights();
	}
	
	public function send_existTakeAvailableRights( $actCode){
		
		$this->initInvocation("existTakeAvailableRights");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_existTakeAvailableRights_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_existTakeAvailableRights(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_existTakeAvailableRights_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBindAccountInfo(\com\vip\svip\osp\service\GetBindAccountRequest $request){
		
		$this->send_getBindAccountInfo( $request);
		return $this->recv_getBindAccountInfo();
	}
	
	public function send_getBindAccountInfo(\com\vip\svip\osp\service\GetBindAccountRequest $request){
		
		$this->initInvocation("getBindAccountInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getBindAccountInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getBindAccountInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getBindAccountInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBrandGiftIdList(\com\vip\svip\osp\service\BrandGiftRequest $request){
		
		$this->send_getBrandGiftIdList( $request);
		return $this->recv_getBrandGiftIdList();
	}
	
	public function send_getBrandGiftIdList(\com\vip\svip\osp\service\BrandGiftRequest $request){
		
		$this->initInvocation("getBrandGiftIdList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getBrandGiftIdList_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getBrandGiftIdList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getBrandGiftIdList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBuyLimitResult(\com\vip\svip\osp\service\BuyLimitRequestHeader $header,\com\vip\svip\osp\service\BuyLimitRequestParam $param){
		
		$this->send_getBuyLimitResult( $header, $param);
		return $this->recv_getBuyLimitResult();
	}
	
	public function send_getBuyLimitResult(\com\vip\svip\osp\service\BuyLimitRequestHeader $header,\com\vip\svip\osp\service\BuyLimitRequestParam $param){
		
		$this->initInvocation("getBuyLimitResult");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getBuyLimitResult_args();
		
		$args->header = $header;
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getBuyLimitResult(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getBuyLimitResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getGoodsIdByPickNo(\com\vip\svip\osp\service\GetGoodsIdByPickNoReq $request){
		
		$this->send_getGoodsIdByPickNo( $request);
		return $this->recv_getGoodsIdByPickNo();
	}
	
	public function send_getGoodsIdByPickNo(\com\vip\svip\osp\service\GetGoodsIdByPickNoReq $request){
		
		$this->initInvocation("getGoodsIdByPickNo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getGoodsIdByPickNo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getGoodsIdByPickNo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getGoodsIdByPickNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getGroupValuesConf(\com\vip\svip\osp\service\GetGroupValuesRequest $request){
		
		$this->send_getGroupValuesConf( $request);
		return $this->recv_getGroupValuesConf();
	}
	
	public function send_getGroupValuesConf(\com\vip\svip\osp\service\GetGroupValuesRequest $request){
		
		$this->initInvocation("getGroupValuesConf");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getGroupValuesConf_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getGroupValuesConf(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getGroupValuesConf_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMonthCardInfo( $userId,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest){
		
		$this->send_getMonthCardInfo( $userId, $extRequest);
		return $this->recv_getMonthCardInfo();
	}
	
	public function send_getMonthCardInfo( $userId,\com\vip\svip\osp\service\CheckMonthCardLimitExtRequest $extRequest){
		
		$this->initInvocation("getMonthCardInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardInfo_args();
		
		$args->userId = $userId;
		
		$args->extRequest = $extRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getMonthCardInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMonthCardInfoByActCode( $actCodeList){
		
		$this->send_getMonthCardInfoByActCode( $actCodeList);
		return $this->recv_getMonthCardInfoByActCode();
	}
	
	public function send_getMonthCardInfoByActCode( $actCodeList){
		
		$this->initInvocation("getMonthCardInfoByActCode");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardInfoByActCode_args();
		
		$args->actCodeList = $actCodeList;
		
		$this->send_base($args);
	}
	
	public function recv_getMonthCardInfoByActCode(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardInfoByActCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMonthCardStatusForLogout( $userId){
		
		$this->send_getMonthCardStatusForLogout( $userId);
		return $this->recv_getMonthCardStatusForLogout();
	}
	
	public function send_getMonthCardStatusForLogout( $userId){
		
		$this->initInvocation("getMonthCardStatusForLogout");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardStatusForLogout_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getMonthCardStatusForLogout(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardStatusForLogout_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMonthCardUserJoinedInfoToCustomer( $userId, $limit, $offset){
		
		$this->send_getMonthCardUserJoinedInfoToCustomer( $userId, $limit, $offset);
		return $this->recv_getMonthCardUserJoinedInfoToCustomer();
	}
	
	public function send_getMonthCardUserJoinedInfoToCustomer( $userId, $limit, $offset){
		
		$this->initInvocation("getMonthCardUserJoinedInfoToCustomer");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardUserJoinedInfoToCustomer_args();
		
		$args->userId = $userId;
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_getMonthCardUserJoinedInfoToCustomer(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getMonthCardUserJoinedInfoToCustomer_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOneToManyActInfo( $actCode){
		
		$this->send_getOneToManyActInfo( $actCode);
		return $this->recv_getOneToManyActInfo();
	}
	
	public function send_getOneToManyActInfo( $actCode){
		
		$this->initInvocation("getOneToManyActInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getOneToManyActInfo_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_getOneToManyActInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getOneToManyActInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOneToManyJoinInfo( $actCode){
		
		$this->send_getOneToManyJoinInfo( $actCode);
		return $this->recv_getOneToManyJoinInfo();
	}
	
	public function send_getOneToManyJoinInfo( $actCode){
		
		$this->initInvocation("getOneToManyJoinInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getOneToManyJoinInfo_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_getOneToManyJoinInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getOneToManyJoinInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOpGoodsDetailList(\com\vip\svip\osp\service\GetOpGoodsDetailRequest $request){
		
		$this->send_getOpGoodsDetailList( $request);
		return $this->recv_getOpGoodsDetailList();
	}
	
	public function send_getOpGoodsDetailList(\com\vip\svip\osp\service\GetOpGoodsDetailRequest $request){
		
		$this->initInvocation("getOpGoodsDetailList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getOpGoodsDetailList_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getOpGoodsDetailList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getOpGoodsDetailList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOpGoodsIds(\com\vip\svip\osp\service\GetOpGoodsIdRequest $request){
		
		$this->send_getOpGoodsIds( $request);
		return $this->recv_getOpGoodsIds();
	}
	
	public function send_getOpGoodsIds(\com\vip\svip\osp\service\GetOpGoodsIdRequest $request){
		
		$this->initInvocation("getOpGoodsIds");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getOpGoodsIds_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getOpGoodsIds(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getOpGoodsIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderRefundAmount(\com\vip\svip\osp\service\GetOrderRefundAmountRequest $request){
		
		$this->send_getOrderRefundAmount( $request);
		return $this->recv_getOrderRefundAmount();
	}
	
	public function send_getOrderRefundAmount(\com\vip\svip\osp\service\GetOrderRefundAmountRequest $request){
		
		$this->initInvocation("getOrderRefundAmount");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getOrderRefundAmount_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderRefundAmount(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getOrderRefundAmount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPackageGiftInfo(){
		
		$this->send_getPackageGiftInfo();
		return $this->recv_getPackageGiftInfo();
	}
	
	public function send_getPackageGiftInfo(){
		
		$this->initInvocation("getPackageGiftInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getPackageGiftInfo_args();
		
		$this->send_base($args);
	}
	
	public function recv_getPackageGiftInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getPackageGiftInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPackageGiftInfoForTest( $userId, $ip){
		
		$this->send_getPackageGiftInfoForTest( $userId, $ip);
		return $this->recv_getPackageGiftInfoForTest();
	}
	
	public function send_getPackageGiftInfoForTest( $userId, $ip){
		
		$this->initInvocation("getPackageGiftInfoForTest");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getPackageGiftInfoForTest_args();
		
		$args->userId = $userId;
		
		$args->ip = $ip;
		
		$this->send_base($args);
	}
	
	public function recv_getPackageGiftInfoForTest(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getPackageGiftInfoForTest_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPmsPriceByProductId(\com\vip\svip\osp\service\BrandGoodsPriceRequest $request){
		
		$this->send_getPmsPriceByProductId( $request);
		return $this->recv_getPmsPriceByProductId();
	}
	
	public function send_getPmsPriceByProductId(\com\vip\svip\osp\service\BrandGoodsPriceRequest $request){
		
		$this->initInvocation("getPmsPriceByProductId");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getPmsPriceByProductId_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getPmsPriceByProductId(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getPmsPriceByProductId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStartBeforePayContractListByUid( $userId, $limit, $offset){
		
		$this->send_getStartBeforePayContractListByUid( $userId, $limit, $offset);
		return $this->recv_getStartBeforePayContractListByUid();
	}
	
	public function send_getStartBeforePayContractListByUid( $userId, $limit, $offset){
		
		$this->initInvocation("getStartBeforePayContractListByUid");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getStartBeforePayContractListByUid_args();
		
		$args->userId = $userId;
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_getStartBeforePayContractListByUid(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getStartBeforePayContractListByUid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSubscribeNum( $actCode){
		
		$this->send_getSubscribeNum( $actCode);
		return $this->recv_getSubscribeNum();
	}
	
	public function send_getSubscribeNum( $actCode){
		
		$this->initInvocation("getSubscribeNum");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSubscribeNum_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSubscribeNum(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSubscribeNum_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSumCount(\com\vip\svip\osp\service\GetSumCountRequest $request){
		
		$this->send_getSumCount( $request);
		return $this->recv_getSumCount();
	}
	
	public function send_getSumCount(\com\vip\svip\osp\service\GetSumCountRequest $request){
		
		$this->initInvocation("getSumCount");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSumCount_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSumCount(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSumCount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipAutoPayContractForCSC( $userId){
		
		$this->send_getSvipAutoPayContractForCSC( $userId);
		return $this->recv_getSvipAutoPayContractForCSC();
	}
	
	public function send_getSvipAutoPayContractForCSC( $userId){
		
		$this->initInvocation("getSvipAutoPayContractForCSC");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipAutoPayContractForCSC_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipAutoPayContractForCSC(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipAutoPayContractForCSC_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipBindInfo(){
		
		$this->send_getSvipBindInfo();
		return $this->recv_getSvipBindInfo();
	}
	
	public function send_getSvipBindInfo(){
		
		$this->initInvocation("getSvipBindInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipBindInfo_args();
		
		$this->send_base($args);
	}
	
	public function recv_getSvipBindInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipBindInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipBindInfoByOrderSn( $orderSn){
		
		$this->send_getSvipBindInfoByOrderSn( $orderSn);
		return $this->recv_getSvipBindInfoByOrderSn();
	}
	
	public function send_getSvipBindInfoByOrderSn( $orderSn){
		
		$this->initInvocation("getSvipBindInfoByOrderSn");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipBindInfoByOrderSn_args();
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipBindInfoByOrderSn(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipBindInfoByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipBindInfoByUserId( $userId){
		
		$this->send_getSvipBindInfoByUserId( $userId);
		return $this->recv_getSvipBindInfoByUserId();
	}
	
	public function send_getSvipBindInfoByUserId( $userId){
		
		$this->initInvocation("getSvipBindInfoByUserId");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipBindInfoByUserId_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipBindInfoByUserId(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipBindInfoByUserId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipEffectivepFirstRightsActivity(){
		
		$this->send_getSvipEffectivepFirstRightsActivity();
		return $this->recv_getSvipEffectivepFirstRightsActivity();
	}
	
	public function send_getSvipEffectivepFirstRightsActivity(){
		
		$this->initInvocation("getSvipEffectivepFirstRightsActivity");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipEffectivepFirstRightsActivity_args();
		
		$this->send_base($args);
	}
	
	public function recv_getSvipEffectivepFirstRightsActivity(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipEffectivepFirstRightsActivity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipEquityInfo(\com\vip\svip\osp\service\SvipEquityInfoRequest $request){
		
		$this->send_getSvipEquityInfo( $request);
		return $this->recv_getSvipEquityInfo();
	}
	
	public function send_getSvipEquityInfo(\com\vip\svip\osp\service\SvipEquityInfoRequest $request){
		
		$this->initInvocation("getSvipEquityInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipEquityInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipEquityInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipEquityInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipEquityInfoForShop( $savingCalVersion, $appName){
		
		$this->send_getSvipEquityInfoForShop( $savingCalVersion, $appName);
		return $this->recv_getSvipEquityInfoForShop();
	}
	
	public function send_getSvipEquityInfoForShop( $savingCalVersion, $appName){
		
		$this->initInvocation("getSvipEquityInfoForShop");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipEquityInfoForShop_args();
		
		$args->savingCalVersion = $savingCalVersion;
		
		$args->appName = $appName;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipEquityInfoForShop(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipEquityInfoForShop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipFirstRightsActivityInfo(){
		
		$this->send_getSvipFirstRightsActivityInfo();
		return $this->recv_getSvipFirstRightsActivityInfo();
	}
	
	public function send_getSvipFirstRightsActivityInfo(){
		
		$this->initInvocation("getSvipFirstRightsActivityInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipFirstRightsActivityInfo_args();
		
		$this->send_base($args);
	}
	
	public function recv_getSvipFirstRightsActivityInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipFirstRightsActivityInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipGoodsByMid(\com\vip\svip\osp\service\GetSvipGoodsRequest $request){
		
		$this->send_getSvipGoodsByMid( $request);
		return $this->recv_getSvipGoodsByMid();
	}
	
	public function send_getSvipGoodsByMid(\com\vip\svip\osp\service\GetSvipGoodsRequest $request){
		
		$this->initInvocation("getSvipGoodsByMid");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsByMid_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipGoodsByMid(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsByMid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipGoodsDefaultPrice( $lv, $bizType, $userId){
		
		$this->send_getSvipGoodsDefaultPrice( $lv, $bizType, $userId);
		return $this->recv_getSvipGoodsDefaultPrice();
	}
	
	public function send_getSvipGoodsDefaultPrice( $lv, $bizType, $userId){
		
		$this->initInvocation("getSvipGoodsDefaultPrice");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsDefaultPrice_args();
		
		$args->lv = $lv;
		
		$args->bizType = $bizType;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipGoodsDefaultPrice(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsDefaultPrice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipGoodsDetail(\com\vip\svip\osp\service\GetSvipGoodsDetailReq $request){
		
		$this->send_getSvipGoodsDetail( $request);
		return $this->recv_getSvipGoodsDetail();
	}
	
	public function send_getSvipGoodsDetail(\com\vip\svip\osp\service\GetSvipGoodsDetailReq $request){
		
		$this->initInvocation("getSvipGoodsDetail");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsDetail_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipGoodsDetail(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipGoodsInfoForOsp(\com\vip\svip\osp\service\GetSvipGoodsInfoForOspRequest $getSvipGoodsInfoForOspRequest){
		
		$this->send_getSvipGoodsInfoForOsp( $getSvipGoodsInfoForOspRequest);
		return $this->recv_getSvipGoodsInfoForOsp();
	}
	
	public function send_getSvipGoodsInfoForOsp(\com\vip\svip\osp\service\GetSvipGoodsInfoForOspRequest $getSvipGoodsInfoForOspRequest){
		
		$this->initInvocation("getSvipGoodsInfoForOsp");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsInfoForOsp_args();
		
		$args->getSvipGoodsInfoForOspRequest = $getSvipGoodsInfoForOspRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipGoodsInfoForOsp(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsInfoForOsp_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipGoodsinfo( $bizList, $appName, $areaId, $fdcAreaId){
		
		$this->send_getSvipGoodsinfo( $bizList, $appName, $areaId, $fdcAreaId);
		return $this->recv_getSvipGoodsinfo();
	}
	
	public function send_getSvipGoodsinfo( $bizList, $appName, $areaId, $fdcAreaId){
		
		$this->initInvocation("getSvipGoodsinfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsinfo_args();
		
		$args->bizList = $bizList;
		
		$args->appName = $appName;
		
		$args->areaId = $areaId;
		
		$args->fdcAreaId = $fdcAreaId;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipGoodsinfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipGoodsinfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipInfo4AppClub(\com\vip\svip\osp\service\GetSvipInfo4AppClubRequest $request){
		
		$this->send_getSvipInfo4AppClub( $request);
		return $this->recv_getSvipInfo4AppClub();
	}
	
	public function send_getSvipInfo4AppClub(\com\vip\svip\osp\service\GetSvipInfo4AppClubRequest $request){
		
		$this->initInvocation("getSvipInfo4AppClub");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipInfo4AppClub_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipInfo4AppClub(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipInfo4AppClub_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipMainInfo(\com\vip\svip\osp\service\BaseRequestHeader $header){
		
		$this->send_getSvipMainInfo( $header);
		return $this->recv_getSvipMainInfo();
	}
	
	public function send_getSvipMainInfo(\com\vip\svip\osp\service\BaseRequestHeader $header){
		
		$this->initInvocation("getSvipMainInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipMainInfo_args();
		
		$args->header = $header;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipMainInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipMainInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipOpenHistoryList( $limit, $offset){
		
		$this->send_getSvipOpenHistoryList( $limit, $offset);
		return $this->recv_getSvipOpenHistoryList();
	}
	
	public function send_getSvipOpenHistoryList( $limit, $offset){
		
		$this->initInvocation("getSvipOpenHistoryList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipOpenHistoryList_args();
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipOpenHistoryList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipOpenHistoryList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipPrizeInfo( $actCode){
		
		$this->send_getSvipPrizeInfo( $actCode);
		return $this->recv_getSvipPrizeInfo();
	}
	
	public function send_getSvipPrizeInfo( $actCode){
		
		$this->initInvocation("getSvipPrizeInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipPrizeInfo_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipPrizeInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipPrizeInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipPrizeInfoForTest( $userId, $actCode, $ip){
		
		$this->send_getSvipPrizeInfoForTest( $userId, $actCode, $ip);
		return $this->recv_getSvipPrizeInfoForTest();
	}
	
	public function send_getSvipPrizeInfoForTest( $userId, $actCode, $ip){
		
		$this->initInvocation("getSvipPrizeInfoForTest");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipPrizeInfoForTest_args();
		
		$args->userId = $userId;
		
		$args->actCode = $actCode;
		
		$args->ip = $ip;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipPrizeInfoForTest(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipPrizeInfoForTest_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipRightsActInfo( $actCode){
		
		$this->send_getSvipRightsActInfo( $actCode);
		return $this->recv_getSvipRightsActInfo();
	}
	
	public function send_getSvipRightsActInfo( $actCode){
		
		$this->initInvocation("getSvipRightsActInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsActInfo_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipRightsActInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsActInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipRightsInfo( $actCode, $rightsCode){
		
		$this->send_getSvipRightsInfo( $actCode, $rightsCode);
		return $this->recv_getSvipRightsInfo();
	}
	
	public function send_getSvipRightsInfo( $actCode, $rightsCode){
		
		$this->initInvocation("getSvipRightsInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsInfo_args();
		
		$args->actCode = $actCode;
		
		$args->rightsCode = $rightsCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipRightsInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipRightsInfoWithoutCheck( $actCode, $rightsCode){
		
		$this->send_getSvipRightsInfoWithoutCheck( $actCode, $rightsCode);
		return $this->recv_getSvipRightsInfoWithoutCheck();
	}
	
	public function send_getSvipRightsInfoWithoutCheck( $actCode, $rightsCode){
		
		$this->initInvocation("getSvipRightsInfoWithoutCheck");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsInfoWithoutCheck_args();
		
		$args->actCode = $actCode;
		
		$args->rightsCode = $rightsCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipRightsInfoWithoutCheck(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsInfoWithoutCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipRightsJoinRecordById( $id){
		
		$this->send_getSvipRightsJoinRecordById( $id);
		return $this->recv_getSvipRightsJoinRecordById();
	}
	
	public function send_getSvipRightsJoinRecordById( $id){
		
		$this->initInvocation("getSvipRightsJoinRecordById");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsJoinRecordById_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipRightsJoinRecordById(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsJoinRecordById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipRightsJoinRecordList( $page, $size){
		
		$this->send_getSvipRightsJoinRecordList( $page, $size);
		return $this->recv_getSvipRightsJoinRecordList();
	}
	
	public function send_getSvipRightsJoinRecordList( $page, $size){
		
		$this->initInvocation("getSvipRightsJoinRecordList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsJoinRecordList_args();
		
		$args->page = $page;
		
		$args->size = $size;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipRightsJoinRecordList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipRightsJoinRecordList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipStartBeforePayContractByContractSn( $contract_sn){
		
		$this->send_getSvipStartBeforePayContractByContractSn( $contract_sn);
		return $this->recv_getSvipStartBeforePayContractByContractSn();
	}
	
	public function send_getSvipStartBeforePayContractByContractSn( $contract_sn){
		
		$this->initInvocation("getSvipStartBeforePayContractByContractSn");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayContractByContractSn_args();
		
		$args->contract_sn = $contract_sn;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipStartBeforePayContractByContractSn(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayContractByContractSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipStartBeforePayContractForFront(){
		
		$this->send_getSvipStartBeforePayContractForFront();
		return $this->recv_getSvipStartBeforePayContractForFront();
	}
	
	public function send_getSvipStartBeforePayContractForFront(){
		
		$this->initInvocation("getSvipStartBeforePayContractForFront");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayContractForFront_args();
		
		$this->send_base($args);
	}
	
	public function recv_getSvipStartBeforePayContractForFront(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayContractForFront_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipStartBeforePayContractForOsp( $userId){
		
		$this->send_getSvipStartBeforePayContractForOsp( $userId);
		return $this->recv_getSvipStartBeforePayContractForOsp();
	}
	
	public function send_getSvipStartBeforePayContractForOsp( $userId){
		
		$this->initInvocation("getSvipStartBeforePayContractForOsp");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayContractForOsp_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipStartBeforePayContractForOsp(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayContractForOsp_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipStartBeforePayTotalSavedMoney(\com\vip\svip\osp\service\GetTotalSavedMoneyReq $getTotalSavedMoneyReq){
		
		$this->send_getSvipStartBeforePayTotalSavedMoney( $getTotalSavedMoneyReq);
		return $this->recv_getSvipStartBeforePayTotalSavedMoney();
	}
	
	public function send_getSvipStartBeforePayTotalSavedMoney(\com\vip\svip\osp\service\GetTotalSavedMoneyReq $getTotalSavedMoneyReq){
		
		$this->initInvocation("getSvipStartBeforePayTotalSavedMoney");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayTotalSavedMoney_args();
		
		$args->getTotalSavedMoneyReq = $getTotalSavedMoneyReq;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipStartBeforePayTotalSavedMoney(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipStartBeforePayTotalSavedMoney_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipState(){
		
		$this->send_getSvipState();
		return $this->recv_getSvipState();
	}
	
	public function send_getSvipState(){
		
		$this->initInvocation("getSvipState");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipState_args();
		
		$this->send_base($args);
	}
	
	public function recv_getSvipState(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipState_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipUserHealth(\com\vip\svip\osp\service\GetSvipUserHealthReq $req){
		
		$this->send_getSvipUserHealth( $req);
		return $this->recv_getSvipUserHealth();
	}
	
	public function send_getSvipUserHealth(\com\vip\svip\osp\service\GetSvipUserHealthReq $req){
		
		$this->initInvocation("getSvipUserHealth");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserHealth_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipUserHealth(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserHealth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipUserInfo(\com\vip\svip\osp\service\SvipUserLimitStateReq $req){
		
		$this->send_getSvipUserInfo( $req);
		return $this->recv_getSvipUserInfo();
	}
	
	public function send_getSvipUserInfo(\com\vip\svip\osp\service\SvipUserLimitStateReq $req){
		
		$this->initInvocation("getSvipUserInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserInfo_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipUserInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipUserStatusHistoryList( $userId, $limit, $offset){
		
		$this->send_getSvipUserStatusHistoryList( $userId, $limit, $offset);
		return $this->recv_getSvipUserStatusHistoryList();
	}
	
	public function send_getSvipUserStatusHistoryList( $userId, $limit, $offset){
		
		$this->initInvocation("getSvipUserStatusHistoryList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserStatusHistoryList_args();
		
		$args->userId = $userId;
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_getSvipUserStatusHistoryList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserStatusHistoryList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSvipUserStatusHistoryListForFront(){
		
		$this->send_getSvipUserStatusHistoryListForFront();
		return $this->recv_getSvipUserStatusHistoryListForFront();
	}
	
	public function send_getSvipUserStatusHistoryListForFront(){
		
		$this->initInvocation("getSvipUserStatusHistoryListForFront");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserStatusHistoryListForFront_args();
		
		$this->send_base($args);
	}
	
	public function recv_getSvipUserStatusHistoryListForFront(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getSvipUserStatusHistoryListForFront_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTencentVipSvipCardInfo( $userId){
		
		$this->send_getTencentVipSvipCardInfo( $userId);
		return $this->recv_getTencentVipSvipCardInfo();
	}
	
	public function send_getTencentVipSvipCardInfo( $userId){
		
		$this->initInvocation("getTencentVipSvipCardInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getTencentVipSvipCardInfo_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getTencentVipSvipCardInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getTencentVipSvipCardInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTheTimeSvipPrice(\com\vip\svip\osp\service\GetTheTimeSvipPrice $request){
		
		$this->send_getTheTimeSvipPrice( $request);
		return $this->recv_getTheTimeSvipPrice();
	}
	
	public function send_getTheTimeSvipPrice(\com\vip\svip\osp\service\GetTheTimeSvipPrice $request){
		
		$this->initInvocation("getTheTimeSvipPrice");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getTheTimeSvipPrice_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getTheTimeSvipPrice(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getTheTimeSvipPrice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getThirdAccountInfoByOpenId( $openId, $bizType){
		
		$this->send_getThirdAccountInfoByOpenId( $openId, $bizType);
		return $this->recv_getThirdAccountInfoByOpenId();
	}
	
	public function send_getThirdAccountInfoByOpenId( $openId, $bizType){
		
		$this->initInvocation("getThirdAccountInfoByOpenId");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getThirdAccountInfoByOpenId_args();
		
		$args->openId = $openId;
		
		$args->bizType = $bizType;
		
		$this->send_base($args);
	}
	
	public function recv_getThirdAccountInfoByOpenId(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getThirdAccountInfoByOpenId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getThirdAccountInfoByUnionLogin( $code, $bizType){
		
		$this->send_getThirdAccountInfoByUnionLogin( $code, $bizType);
		return $this->recv_getThirdAccountInfoByUnionLogin();
	}
	
	public function send_getThirdAccountInfoByUnionLogin( $code, $bizType){
		
		$this->initInvocation("getThirdAccountInfoByUnionLogin");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getThirdAccountInfoByUnionLogin_args();
		
		$args->code = $code;
		
		$args->bizType = $bizType;
		
		$this->send_base($args);
	}
	
	public function recv_getThirdAccountInfoByUnionLogin(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getThirdAccountInfoByUnionLogin_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUnPayOrderInfo( $productId){
		
		$this->send_getUnPayOrderInfo( $productId);
		return $this->recv_getUnPayOrderInfo();
	}
	
	public function send_getUnPayOrderInfo( $productId){
		
		$this->initInvocation("getUnPayOrderInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUnPayOrderInfo_args();
		
		$args->productId = $productId;
		
		$this->send_base($args);
	}
	
	public function recv_getUnPayOrderInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUnPayOrderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUnPayOrderInfoForMonthCard( $productId){
		
		$this->send_getUnPayOrderInfoForMonthCard( $productId);
		return $this->recv_getUnPayOrderInfoForMonthCard();
	}
	
	public function send_getUnPayOrderInfoForMonthCard( $productId){
		
		$this->initInvocation("getUnPayOrderInfoForMonthCard");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUnPayOrderInfoForMonthCard_args();
		
		$args->productId = $productId;
		
		$this->send_base($args);
	}
	
	public function recv_getUnPayOrderInfoForMonthCard(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUnPayOrderInfoForMonthCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUnionSvipGoodsInfo(\com\vip\svip\osp\service\UnionSvipGoodsRequest $request){
		
		$this->send_getUnionSvipGoodsInfo( $request);
		return $this->recv_getUnionSvipGoodsInfo();
	}
	
	public function send_getUnionSvipGoodsInfo(\com\vip\svip\osp\service\UnionSvipGoodsRequest $request){
		
		$this->initInvocation("getUnionSvipGoodsInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUnionSvipGoodsInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getUnionSvipGoodsInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUnionSvipGoodsInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUseBeforePayOrderList( $page){
		
		$this->send_getUseBeforePayOrderList( $page);
		return $this->recv_getUseBeforePayOrderList();
	}
	
	public function send_getUseBeforePayOrderList( $page){
		
		$this->initInvocation("getUseBeforePayOrderList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUseBeforePayOrderList_args();
		
		$args->page = $page;
		
		$this->send_base($args);
	}
	
	public function recv_getUseBeforePayOrderList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUseBeforePayOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserActInfoToCustomer( $userId){
		
		$this->send_getUserActInfoToCustomer( $userId);
		return $this->recv_getUserActInfoToCustomer();
	}
	
	public function send_getUserActInfoToCustomer( $userId){
		
		$this->initInvocation("getUserActInfoToCustomer");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserActInfoToCustomer_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserActInfoToCustomer(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserActInfoToCustomer_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserAttendInfo(\com\vip\svip\osp\service\UserAttendInfoRequest $request){
		
		$this->send_getUserAttendInfo( $request);
		return $this->recv_getUserAttendInfo();
	}
	
	public function send_getUserAttendInfo(\com\vip\svip\osp\service\UserAttendInfoRequest $request){
		
		$this->initInvocation("getUserAttendInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserAttendInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getUserAttendInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserAttendInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserLastestMonthCard( $userIdList){
		
		$this->send_getUserLastestMonthCard( $userIdList);
		return $this->recv_getUserLastestMonthCard();
	}
	
	public function send_getUserLastestMonthCard( $userIdList){
		
		$this->initInvocation("getUserLastestMonthCard");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserLastestMonthCard_args();
		
		$args->userIdList = $userIdList;
		
		$this->send_base($args);
	}
	
	public function recv_getUserLastestMonthCard(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserLastestMonthCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserMobileEncrypt( $userId){
		
		$this->send_getUserMobileEncrypt( $userId);
		return $this->recv_getUserMobileEncrypt();
	}
	
	public function send_getUserMobileEncrypt( $userId){
		
		$this->initInvocation("getUserMobileEncrypt");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMobileEncrypt_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserMobileEncrypt(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMobileEncrypt_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserMonthCardAbacusResult(\com\vip\svip\osp\service\GetUserMonthCardInfoParam $param){
		
		$this->send_getUserMonthCardAbacusResult( $param);
		return $this->recv_getUserMonthCardAbacusResult();
	}
	
	public function send_getUserMonthCardAbacusResult(\com\vip\svip\osp\service\GetUserMonthCardInfoParam $param){
		
		$this->initInvocation("getUserMonthCardAbacusResult");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMonthCardAbacusResult_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_getUserMonthCardAbacusResult(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMonthCardAbacusResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserMonthCardForVipShop(\com\vip\svip\osp\service\GetUserMonthCardForVipShopRequestParam $getUserMonthCardForVipShopRequestParam){
		
		$this->send_getUserMonthCardForVipShop( $getUserMonthCardForVipShopRequestParam);
		return $this->recv_getUserMonthCardForVipShop();
	}
	
	public function send_getUserMonthCardForVipShop(\com\vip\svip\osp\service\GetUserMonthCardForVipShopRequestParam $getUserMonthCardForVipShopRequestParam){
		
		$this->initInvocation("getUserMonthCardForVipShop");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMonthCardForVipShop_args();
		
		$args->getUserMonthCardForVipShopRequestParam = $getUserMonthCardForVipShopRequestParam;
		
		$this->send_base($args);
	}
	
	public function recv_getUserMonthCardForVipShop(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMonthCardForVipShop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserMonthCardResultForNova(){
		
		$this->send_getUserMonthCardResultForNova();
		return $this->recv_getUserMonthCardResultForNova();
	}
	
	public function send_getUserMonthCardResultForNova(){
		
		$this->initInvocation("getUserMonthCardResultForNova");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMonthCardResultForNova_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserMonthCardResultForNova(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserMonthCardResultForNova_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserRightsLatestMobile(){
		
		$this->send_getUserRightsLatestMobile();
		return $this->recv_getUserRightsLatestMobile();
	}
	
	public function send_getUserRightsLatestMobile(){
		
		$this->initInvocation("getUserRightsLatestMobile");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserRightsLatestMobile_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserRightsLatestMobile(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserRightsLatestMobile_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserRightsSavedInfo(){
		
		$this->send_getUserRightsSavedInfo();
		return $this->recv_getUserRightsSavedInfo();
	}
	
	public function send_getUserRightsSavedInfo(){
		
		$this->initInvocation("getUserRightsSavedInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserRightsSavedInfo_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserRightsSavedInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserRightsSavedInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserSubscribeInfo( $actCode){
		
		$this->send_getUserSubscribeInfo( $actCode);
		return $this->recv_getUserSubscribeInfo();
	}
	
	public function send_getUserSubscribeInfo( $actCode){
		
		$this->initInvocation("getUserSubscribeInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSubscribeInfo_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_getUserSubscribeInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSubscribeInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserSvipAutoPayContractForFront(){
		
		$this->send_getUserSvipAutoPayContractForFront();
		return $this->recv_getUserSvipAutoPayContractForFront();
	}
	
	public function send_getUserSvipAutoPayContractForFront(){
		
		$this->initInvocation("getUserSvipAutoPayContractForFront");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipAutoPayContractForFront_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserSvipAutoPayContractForFront(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipAutoPayContractForFront_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserSvipAutoPayContractForOsp( $userId){
		
		$this->send_getUserSvipAutoPayContractForOsp( $userId);
		return $this->recv_getUserSvipAutoPayContractForOsp();
	}
	
	public function send_getUserSvipAutoPayContractForOsp( $userId){
		
		$this->initInvocation("getUserSvipAutoPayContractForOsp");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipAutoPayContractForOsp_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserSvipAutoPayContractForOsp(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipAutoPayContractForOsp_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserSvipFirstRightsRecord(){
		
		$this->send_getUserSvipFirstRightsRecord();
		return $this->recv_getUserSvipFirstRightsRecord();
	}
	
	public function send_getUserSvipFirstRightsRecord(){
		
		$this->initInvocation("getUserSvipFirstRightsRecord");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipFirstRightsRecord_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserSvipFirstRightsRecord(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipFirstRightsRecord_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserSvipRightsJoinRecordList( $startDate, $endDate, $userId){
		
		$this->send_getUserSvipRightsJoinRecordList( $startDate, $endDate, $userId);
		return $this->recv_getUserSvipRightsJoinRecordList();
	}
	
	public function send_getUserSvipRightsJoinRecordList( $startDate, $endDate, $userId){
		
		$this->initInvocation("getUserSvipRightsJoinRecordList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipRightsJoinRecordList_args();
		
		$args->startDate = $startDate;
		
		$args->endDate = $endDate;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserSvipRightsJoinRecordList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipRightsJoinRecordList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserSvipRightsList( $actCode, $userId){
		
		$this->send_getUserSvipRightsList( $actCode, $userId);
		return $this->recv_getUserSvipRightsList();
	}
	
	public function send_getUserSvipRightsList( $actCode, $userId){
		
		$this->initInvocation("getUserSvipRightsList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipRightsList_args();
		
		$args->actCode = $actCode;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserSvipRightsList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserSvipRightsList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserUseBeforePayContract(){
		
		$this->send_getUserUseBeforePayContract();
		return $this->recv_getUserUseBeforePayContract();
	}
	
	public function send_getUserUseBeforePayContract(){
		
		$this->initInvocation("getUserUseBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContract_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserUseBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserUseBeforePayContractByUid( $userId){
		
		$this->send_getUserUseBeforePayContractByUid( $userId);
		return $this->recv_getUserUseBeforePayContractByUid();
	}
	
	public function send_getUserUseBeforePayContractByUid( $userId){
		
		$this->initInvocation("getUserUseBeforePayContractByUid");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContractByUid_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserUseBeforePayContractByUid(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContractByUid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserUseBeforePayContractForCSC( $userId){
		
		$this->send_getUserUseBeforePayContractForCSC( $userId);
		return $this->recv_getUserUseBeforePayContractForCSC();
	}
	
	public function send_getUserUseBeforePayContractForCSC( $userId){
		
		$this->initInvocation("getUserUseBeforePayContractForCSC");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContractForCSC_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_getUserUseBeforePayContractForCSC(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContractForCSC_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserUseBeforePayContractForFront(){
		
		$this->send_getUserUseBeforePayContractForFront();
		return $this->recv_getUserUseBeforePayContractForFront();
	}
	
	public function send_getUserUseBeforePayContractForFront(){
		
		$this->initInvocation("getUserUseBeforePayContractForFront");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContractForFront_args();
		
		$this->send_base($args);
	}
	
	public function recv_getUserUseBeforePayContractForFront(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_getUserUseBeforePayContractForFront_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function giveUpSvipRights( $userId){
		
		$this->send_giveUpSvipRights( $userId);
		return $this->recv_giveUpSvipRights();
	}
	
	public function send_giveUpSvipRights( $userId){
		
		$this->initInvocation("giveUpSvipRights");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_giveUpSvipRights_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_giveUpSvipRights(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_giveUpSvipRights_result();
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
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isCancelSvipStartBeforePayContractByUser(){
		
		$this->send_isCancelSvipStartBeforePayContractByUser();
		return $this->recv_isCancelSvipStartBeforePayContractByUser();
	}
	
	public function send_isCancelSvipStartBeforePayContractByUser(){
		
		$this->initInvocation("isCancelSvipStartBeforePayContractByUser");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isCancelSvipStartBeforePayContractByUser_args();
		
		$this->send_base($args);
	}
	
	public function recv_isCancelSvipStartBeforePayContractByUser(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isCancelSvipStartBeforePayContractByUser_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isLimitPurchase(\com\vip\svip\osp\service\BuyLimitStateRequest $request){
		
		$this->send_isLimitPurchase( $request);
		return $this->recv_isLimitPurchase();
	}
	
	public function send_isLimitPurchase(\com\vip\svip\osp\service\BuyLimitStateRequest $request){
		
		$this->initInvocation("isLimitPurchase");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isLimitPurchase_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_isLimitPurchase(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isLimitPurchase_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isSvipBanArea( $areaId){
		
		$this->send_isSvipBanArea( $areaId);
		return $this->recv_isSvipBanArea();
	}
	
	public function send_isSvipBanArea( $areaId){
		
		$this->initInvocation("isSvipBanArea");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipBanArea_args();
		
		$args->areaId = $areaId;
		
		$this->send_base($args);
	}
	
	public function recv_isSvipBanArea(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipBanArea_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isSvipBuyLimit(\com\vip\svip\osp\service\BuyLimitRequestHeader $header,\com\vip\svip\osp\service\BuyLimitRequestParam $param){
		
		$this->send_isSvipBuyLimit( $header, $param);
		return $this->recv_isSvipBuyLimit();
	}
	
	public function send_isSvipBuyLimit(\com\vip\svip\osp\service\BuyLimitRequestHeader $header,\com\vip\svip\osp\service\BuyLimitRequestParam $param){
		
		$this->initInvocation("isSvipBuyLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipBuyLimit_args();
		
		$args->header = $header;
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_isSvipBuyLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipBuyLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isSvipLimitUser(\com\vip\svip\osp\service\BuyLimitStateRequest $request){
		
		$this->send_isSvipLimitUser( $request);
		return $this->recv_isSvipLimitUser();
	}
	
	public function send_isSvipLimitUser(\com\vip\svip\osp\service\BuyLimitStateRequest $request){
		
		$this->initInvocation("isSvipLimitUser");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipLimitUser_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_isSvipLimitUser(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipLimitUser_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isSvipLimitUserByPhone(\com\vip\svip\osp\service\CheckSvipUserLimitByPhoneParam $request){
		
		$this->send_isSvipLimitUserByPhone( $request);
		return $this->recv_isSvipLimitUserByPhone();
	}
	
	public function send_isSvipLimitUserByPhone(\com\vip\svip\osp\service\CheckSvipUserLimitByPhoneParam $request){
		
		$this->initInvocation("isSvipLimitUserByPhone");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipLimitUserByPhone_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_isSvipLimitUserByPhone(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipLimitUserByPhone_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isSvipStartBeforePayLimit(){
		
		$this->send_isSvipStartBeforePayLimit();
		return $this->recv_isSvipStartBeforePayLimit();
	}
	
	public function send_isSvipStartBeforePayLimit(){
		
		$this->initInvocation("isSvipStartBeforePayLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipStartBeforePayLimit_args();
		
		$this->send_base($args);
	}
	
	public function recv_isSvipStartBeforePayLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isSvipStartBeforePayLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isUserBeforePayLimit(){
		
		$this->send_isUserBeforePayLimit();
		return $this->recv_isUserBeforePayLimit();
	}
	
	public function send_isUserBeforePayLimit(){
		
		$this->initInvocation("isUserBeforePayLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isUserBeforePayLimit_args();
		
		$this->send_base($args);
	}
	
	public function recv_isUserBeforePayLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isUserBeforePayLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function isWxuidEqPayuid( $wxOrderSn){
		
		$this->send_isWxuidEqPayuid( $wxOrderSn);
		return $this->recv_isWxuidEqPayuid();
	}
	
	public function send_isWxuidEqPayuid( $wxOrderSn){
		
		$this->initInvocation("isWxuidEqPayuid");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_isWxuidEqPayuid_args();
		
		$args->wxOrderSn = $wxOrderSn;
		
		$this->send_base($args);
	}
	
	public function recv_isWxuidEqPayuid(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_isWxuidEqPayuid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function joinSvipForTencentVideoSide(\com\vip\svip\osp\service\DoubleSvipRequest $request){
		
		$this->send_joinSvipForTencentVideoSide( $request);
		return $this->recv_joinSvipForTencentVideoSide();
	}
	
	public function send_joinSvipForTencentVideoSide(\com\vip\svip\osp\service\DoubleSvipRequest $request){
		
		$this->initInvocation("joinSvipForTencentVideoSide");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_joinSvipForTencentVideoSide_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_joinSvipForTencentVideoSide(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_joinSvipForTencentVideoSide_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function joinTencentVideoMemberAtVipSide(\com\vip\svip\osp\service\DoubleSvipRequest $request){
		
		$this->send_joinTencentVideoMemberAtVipSide( $request);
		return $this->recv_joinTencentVideoMemberAtVipSide();
	}
	
	public function send_joinTencentVideoMemberAtVipSide(\com\vip\svip\osp\service\DoubleSvipRequest $request){
		
		$this->initInvocation("joinTencentVideoMemberAtVipSide");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_joinTencentVideoMemberAtVipSide_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_joinTencentVideoMemberAtVipSide(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_joinTencentVideoMemberAtVipSide_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function kugouDoubleVerify( $out_trade_no, $out_user_id){
		
		$this->send_kugouDoubleVerify( $out_trade_no, $out_user_id);
		return $this->recv_kugouDoubleVerify();
	}
	
	public function send_kugouDoubleVerify( $out_trade_no, $out_user_id){
		
		$this->initInvocation("kugouDoubleVerify");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_kugouDoubleVerify_args();
		
		$args->out_trade_no = $out_trade_no;
		
		$args->out_user_id = $out_user_id;
		
		$this->send_base($args);
	}
	
	public function recv_kugouDoubleVerify(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_kugouDoubleVerify_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function mobileOpenSvip(\com\vip\svip\osp\service\OpenSvipRequest $request){
		
		$this->send_mobileOpenSvip( $request);
		return $this->recv_mobileOpenSvip();
	}
	
	public function send_mobileOpenSvip(\com\vip\svip\osp\service\OpenSvipRequest $request){
		
		$this->initInvocation("mobileOpenSvip");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_mobileOpenSvip_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_mobileOpenSvip(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_mobileOpenSvip_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function notifyCloseContractUserToPay(){
		
		$this->send_notifyCloseContractUserToPay();
		return $this->recv_notifyCloseContractUserToPay();
	}
	
	public function send_notifyCloseContractUserToPay(){
		
		$this->initInvocation("notifyCloseContractUserToPay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_notifyCloseContractUserToPay_args();
		
		$this->send_base($args);
	}
	
	public function recv_notifyCloseContractUserToPay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_notifyCloseContractUserToPay_result();
		$this->receive_base($result);
		
	}
	
	
	public function notifyFireContractUserToPay(){
		
		$this->send_notifyFireContractUserToPay();
		return $this->recv_notifyFireContractUserToPay();
	}
	
	public function send_notifyFireContractUserToPay(){
		
		$this->initInvocation("notifyFireContractUserToPay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_notifyFireContractUserToPay_args();
		
		$this->send_base($args);
	}
	
	public function recv_notifyFireContractUserToPay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_notifyFireContractUserToPay_result();
		$this->receive_base($result);
		
	}
	
	
	public function notifyUserWillDeduct( $whiteList){
		
		$this->send_notifyUserWillDeduct( $whiteList);
		return $this->recv_notifyUserWillDeduct();
	}
	
	public function send_notifyUserWillDeduct( $whiteList){
		
		$this->initInvocation("notifyUserWillDeduct");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_notifyUserWillDeduct_args();
		
		$args->whiteList = $whiteList;
		
		$this->send_base($args);
	}
	
	public function recv_notifyUserWillDeduct(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_notifyUserWillDeduct_result();
		$this->receive_base($result);
		
	}
	
	
	public function offlineChannelTrySvip(\com\vip\svip\osp\service\SimpleRequestHeader $header,\com\vip\svip\osp\service\OfflineChannelInfo $channelInfo){
		
		$this->send_offlineChannelTrySvip( $header, $channelInfo);
		return $this->recv_offlineChannelTrySvip();
	}
	
	public function send_offlineChannelTrySvip(\com\vip\svip\osp\service\SimpleRequestHeader $header,\com\vip\svip\osp\service\OfflineChannelInfo $channelInfo){
		
		$this->initInvocation("offlineChannelTrySvip");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_offlineChannelTrySvip_args();
		
		$args->header = $header;
		
		$args->channelInfo = $channelInfo;
		
		$this->send_base($args);
	}
	
	public function recv_offlineChannelTrySvip(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_offlineChannelTrySvip_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function oneToManyLimitCheck( $userId, $actCode){
		
		$this->send_oneToManyLimitCheck( $userId, $actCode);
		return $this->recv_oneToManyLimitCheck();
	}
	
	public function send_oneToManyLimitCheck( $userId, $actCode){
		
		$this->initInvocation("oneToManyLimitCheck");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_oneToManyLimitCheck_args();
		
		$args->userId = $userId;
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_oneToManyLimitCheck(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_oneToManyLimitCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function oneToManyLimitCheckForFront( $actCode, $mid){
		
		$this->send_oneToManyLimitCheckForFront( $actCode, $mid);
		return $this->recv_oneToManyLimitCheckForFront();
	}
	
	public function send_oneToManyLimitCheckForFront( $actCode, $mid){
		
		$this->initInvocation("oneToManyLimitCheckForFront");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_oneToManyLimitCheckForFront_args();
		
		$args->actCode = $actCode;
		
		$args->mid = $mid;
		
		$this->send_base($args);
	}
	
	public function recv_oneToManyLimitCheckForFront(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_oneToManyLimitCheckForFront_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openFreeMonthCardForNova(){
		
		$this->send_openFreeMonthCardForNova();
		return $this->recv_openFreeMonthCardForNova();
	}
	
	public function send_openFreeMonthCardForNova(){
		
		$this->initInvocation("openFreeMonthCardForNova");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_openFreeMonthCardForNova_args();
		
		$this->send_base($args);
	}
	
	public function recv_openFreeMonthCardForNova(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_openFreeMonthCardForNova_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openLimitCheck(\com\vip\svip\osp\service\OpenLimitRequest $request){
		
		$this->send_openLimitCheck( $request);
		return $this->recv_openLimitCheck();
	}
	
	public function send_openLimitCheck(\com\vip\svip\osp\service\OpenLimitRequest $request){
		
		$this->initInvocation("openLimitCheck");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_openLimitCheck_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_openLimitCheck(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_openLimitCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openOneToManyForThirdComponent(\com\vip\svip\osp\service\OneToManyThirdInfoRequest $request){
		
		$this->send_openOneToManyForThirdComponent( $request);
		return $this->recv_openOneToManyForThirdComponent();
	}
	
	public function send_openOneToManyForThirdComponent(\com\vip\svip\osp\service\OneToManyThirdInfoRequest $request){
		
		$this->initInvocation("openOneToManyForThirdComponent");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_openOneToManyForThirdComponent_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_openOneToManyForThirdComponent(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_openOneToManyForThirdComponent_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openSvipStartBeforePayContract( $userId, $contractSn){
		
		$this->send_openSvipStartBeforePayContract( $userId, $contractSn);
		return $this->recv_openSvipStartBeforePayContract();
	}
	
	public function send_openSvipStartBeforePayContract( $userId, $contractSn){
		
		$this->initInvocation("openSvipStartBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_openSvipStartBeforePayContract_args();
		
		$args->userId = $userId;
		
		$args->contractSn = $contractSn;
		
		$this->send_base($args);
	}
	
	public function recv_openSvipStartBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_openSvipStartBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openSvipUseBeforePayContract( $userId, $contractSn, $wxContractSn, $operator){
		
		$this->send_openSvipUseBeforePayContract( $userId, $contractSn, $wxContractSn, $operator);
		return $this->recv_openSvipUseBeforePayContract();
	}
	
	public function send_openSvipUseBeforePayContract( $userId, $contractSn, $wxContractSn, $operator){
		
		$this->initInvocation("openSvipUseBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_openSvipUseBeforePayContract_args();
		
		$args->userId = $userId;
		
		$args->contractSn = $contractSn;
		
		$args->wxContractSn = $wxContractSn;
		
		$args->operator = $operator;
		
		$this->send_base($args);
	}
	
	public function recv_openSvipUseBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_openSvipUseBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openUserSvipAutoPay( $userId, $contract_sn, $wx_order_sn){
		
		$this->send_openUserSvipAutoPay( $userId, $contract_sn, $wx_order_sn);
		return $this->recv_openUserSvipAutoPay();
	}
	
	public function send_openUserSvipAutoPay( $userId, $contract_sn, $wx_order_sn){
		
		$this->initInvocation("openUserSvipAutoPay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_openUserSvipAutoPay_args();
		
		$args->userId = $userId;
		
		$args->contract_sn = $contract_sn;
		
		$args->wx_order_sn = $wx_order_sn;
		
		$this->send_base($args);
	}
	
	public function recv_openUserSvipAutoPay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_openUserSvipAutoPay_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ospCheckFreeSvipRightsLimit(\com\vip\svip\osp\service\CheckFreeSvipRightsRequest $request){
		
		$this->send_ospCheckFreeSvipRightsLimit( $request);
		return $this->recv_ospCheckFreeSvipRightsLimit();
	}
	
	public function send_ospCheckFreeSvipRightsLimit(\com\vip\svip\osp\service\CheckFreeSvipRightsRequest $request){
		
		$this->initInvocation("ospCheckFreeSvipRightsLimit");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_ospCheckFreeSvipRightsLimit_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_ospCheckFreeSvipRightsLimit(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_ospCheckFreeSvipRightsLimit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ospGetPrizeActInfoWithoutCheck(\com\vip\svip\osp\service\GetSvipPrizeInfoWithoutCheckRequest $request){
		
		$this->send_ospGetPrizeActInfoWithoutCheck( $request);
		return $this->recv_ospGetPrizeActInfoWithoutCheck();
	}
	
	public function send_ospGetPrizeActInfoWithoutCheck(\com\vip\svip\osp\service\GetSvipPrizeInfoWithoutCheckRequest $request){
		
		$this->initInvocation("ospGetPrizeActInfoWithoutCheck");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_ospGetPrizeActInfoWithoutCheck_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_ospGetPrizeActInfoWithoutCheck(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_ospGetPrizeActInfoWithoutCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ospGetSvipPrizeInfo(\com\vip\svip\osp\service\GetSvipPrizeInfoRequest $request){
		
		$this->send_ospGetSvipPrizeInfo( $request);
		return $this->recv_ospGetSvipPrizeInfo();
	}
	
	public function send_ospGetSvipPrizeInfo(\com\vip\svip\osp\service\GetSvipPrizeInfoRequest $request){
		
		$this->initInvocation("ospGetSvipPrizeInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_ospGetSvipPrizeInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_ospGetSvipPrizeInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_ospGetSvipPrizeInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ospTakeSvipPrize( $actCode, $ip, $userId){
		
		$this->send_ospTakeSvipPrize( $actCode, $ip, $userId);
		return $this->recv_ospTakeSvipPrize();
	}
	
	public function send_ospTakeSvipPrize( $actCode, $ip, $userId){
		
		$this->initInvocation("ospTakeSvipPrize");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_ospTakeSvipPrize_args();
		
		$args->actCode = $actCode;
		
		$args->ip = $ip;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_ospTakeSvipPrize(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_ospTakeSvipPrize_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function prepareDoubleSvipAccess(\com\vip\svip\osp\service\DoubleSvipRequest $request){
		
		$this->send_prepareDoubleSvipAccess( $request);
		return $this->recv_prepareDoubleSvipAccess();
	}
	
	public function send_prepareDoubleSvipAccess(\com\vip\svip\osp\service\DoubleSvipRequest $request){
		
		$this->initInvocation("prepareDoubleSvipAccess");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_prepareDoubleSvipAccess_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_prepareDoubleSvipAccess(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_prepareDoubleSvipAccess_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryNotice(){
		
		$this->send_queryNotice();
		return $this->recv_queryNotice();
	}
	
	public function send_queryNotice(){
		
		$this->initInvocation("queryNotice");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryNotice_args();
		
		$this->send_base($args);
	}
	
	public function recv_queryNotice(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryNotice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryOneToManyQMusicOrderInfoToCustomer(\com\vip\svip\osp\service\QQMusicStatusParamModel $qqMusicStatusParamModel){
		
		$this->send_queryOneToManyQMusicOrderInfoToCustomer( $qqMusicStatusParamModel);
		return $this->recv_queryOneToManyQMusicOrderInfoToCustomer();
	}
	
	public function send_queryOneToManyQMusicOrderInfoToCustomer(\com\vip\svip\osp\service\QQMusicStatusParamModel $qqMusicStatusParamModel){
		
		$this->initInvocation("queryOneToManyQMusicOrderInfoToCustomer");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryOneToManyQMusicOrderInfoToCustomer_args();
		
		$args->qqMusicStatusParamModel = $qqMusicStatusParamModel;
		
		$this->send_base($args);
	}
	
	public function recv_queryOneToManyQMusicOrderInfoToCustomer(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryOneToManyQMusicOrderInfoToCustomer_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryQQMusicStatus( $userId){
		
		$this->send_queryQQMusicStatus( $userId);
		return $this->recv_queryQQMusicStatus();
	}
	
	public function send_queryQQMusicStatus( $userId){
		
		$this->initInvocation("queryQQMusicStatus");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryQQMusicStatus_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_queryQQMusicStatus(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryQQMusicStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySavedAmount( $userId, $start, $end){
		
		$this->send_querySavedAmount( $userId, $start, $end);
		return $this->recv_querySavedAmount();
	}
	
	public function send_querySavedAmount( $userId, $start, $end){
		
		$this->initInvocation("querySavedAmount");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_querySavedAmount_args();
		
		$args->userId = $userId;
		
		$args->start = $start;
		
		$args->end = $end;
		
		$this->send_base($args);
	}
	
	public function recv_querySavedAmount(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_querySavedAmount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySvipCouponInfo( $rcode){
		
		$this->send_querySvipCouponInfo( $rcode);
		return $this->recv_querySvipCouponInfo();
	}
	
	public function send_querySvipCouponInfo( $rcode){
		
		$this->initInvocation("querySvipCouponInfo");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_querySvipCouponInfo_args();
		
		$args->rcode = $rcode;
		
		$this->send_base($args);
	}
	
	public function recv_querySvipCouponInfo(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_querySvipCouponInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryUnPayAutoOrderForNova(){
		
		$this->send_queryUnPayAutoOrderForNova();
		return $this->recv_queryUnPayAutoOrderForNova();
	}
	
	public function send_queryUnPayAutoOrderForNova(){
		
		$this->initInvocation("queryUnPayAutoOrderForNova");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUnPayAutoOrderForNova_args();
		
		$this->send_base($args);
	}
	
	public function recv_queryUnPayAutoOrderForNova(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUnPayAutoOrderForNova_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryUnPayOrderUseVirtualCoupon(){
		
		$this->send_queryUnPayOrderUseVirtualCoupon();
		return $this->recv_queryUnPayOrderUseVirtualCoupon();
	}
	
	public function send_queryUnPayOrderUseVirtualCoupon(){
		
		$this->initInvocation("queryUnPayOrderUseVirtualCoupon");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUnPayOrderUseVirtualCoupon_args();
		
		$this->send_base($args);
	}
	
	public function recv_queryUnPayOrderUseVirtualCoupon(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUnPayOrderUseVirtualCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryUserSvipSaveOrderList( $limit, $offset){
		
		$this->send_queryUserSvipSaveOrderList( $limit, $offset);
		return $this->recv_queryUserSvipSaveOrderList();
	}
	
	public function send_queryUserSvipSaveOrderList( $limit, $offset){
		
		$this->initInvocation("queryUserSvipSaveOrderList");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUserSvipSaveOrderList_args();
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_queryUserSvipSaveOrderList(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUserSvipSaveOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryUserSvipSaveOrderListByContractSn( $limit, $offset, $contractSn){
		
		$this->send_queryUserSvipSaveOrderListByContractSn( $limit, $offset, $contractSn);
		return $this->recv_queryUserSvipSaveOrderListByContractSn();
	}
	
	public function send_queryUserSvipSaveOrderListByContractSn( $limit, $offset, $contractSn){
		
		$this->initInvocation("queryUserSvipSaveOrderListByContractSn");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUserSvipSaveOrderListByContractSn_args();
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$args->contractSn = $contractSn;
		
		$this->send_base($args);
	}
	
	public function recv_queryUserSvipSaveOrderListByContractSn(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUserSvipSaveOrderListByContractSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryUserSvipSaveOrderListForOsp( $limit, $offset, $userId){
		
		$this->send_queryUserSvipSaveOrderListForOsp( $limit, $offset, $userId);
		return $this->recv_queryUserSvipSaveOrderListForOsp();
	}
	
	public function send_queryUserSvipSaveOrderListForOsp( $limit, $offset, $userId){
		
		$this->initInvocation("queryUserSvipSaveOrderListForOsp");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUserSvipSaveOrderListForOsp_args();
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_queryUserSvipSaveOrderListForOsp(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryUserSvipSaveOrderListForOsp_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryVirtualCoupon( $actCode, $couponType){
		
		$this->send_queryVirtualCoupon( $actCode, $couponType);
		return $this->recv_queryVirtualCoupon();
	}
	
	public function send_queryVirtualCoupon( $actCode, $couponType){
		
		$this->initInvocation("queryVirtualCoupon");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_queryVirtualCoupon_args();
		
		$args->actCode = $actCode;
		
		$args->couponType = $couponType;
		
		$this->send_base($args);
	}
	
	public function recv_queryVirtualCoupon(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_queryVirtualCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receivePrize(\com\vip\svip\osp\service\ReceivePrizeRequest $request){
		
		$this->send_receivePrize( $request);
		return $this->recv_receivePrize();
	}
	
	public function send_receivePrize(\com\vip\svip\osp\service\ReceivePrizeRequest $request){
		
		$this->initInvocation("receivePrize");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_receivePrize_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_receivePrize(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_receivePrize_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveSvipCoupon(\com\vip\svip\osp\service\SvipCouponReceiveReq $svipCouponReceiveReq){
		
		$this->send_receiveSvipCoupon( $svipCouponReceiveReq);
		return $this->recv_receiveSvipCoupon();
	}
	
	public function send_receiveSvipCoupon(\com\vip\svip\osp\service\SvipCouponReceiveReq $svipCouponReceiveReq){
		
		$this->initInvocation("receiveSvipCoupon");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_receiveSvipCoupon_args();
		
		$args->svipCouponReceiveReq = $svipCouponReceiveReq;
		
		$this->send_base($args);
	}
	
	public function recv_receiveSvipCoupon(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_receiveSvipCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveSvipCouponImportIdl(\com\vip\svip\osp\service\RemindQueryParam $param){
		
		$this->send_receiveSvipCouponImportIdl( $param);
		return $this->recv_receiveSvipCouponImportIdl();
	}
	
	public function send_receiveSvipCouponImportIdl(\com\vip\svip\osp\service\RemindQueryParam $param){
		
		$this->initInvocation("receiveSvipCouponImportIdl");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_receiveSvipCouponImportIdl_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_receiveSvipCouponImportIdl(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_receiveSvipCouponImportIdl_result();
		$this->receive_base($result);
		
	}
	
	
	public function recoverSvipFirstRights(\com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq $svipFirstRightsReduceOrRecoverReq){
		
		$this->send_recoverSvipFirstRights( $svipFirstRightsReduceOrRecoverReq);
		return $this->recv_recoverSvipFirstRights();
	}
	
	public function send_recoverSvipFirstRights(\com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq $svipFirstRightsReduceOrRecoverReq){
		
		$this->initInvocation("recoverSvipFirstRights");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_recoverSvipFirstRights_args();
		
		$args->svipFirstRightsReduceOrRecoverReq = $svipFirstRightsReduceOrRecoverReq;
		
		$this->send_base($args);
	}
	
	public function recv_recoverSvipFirstRights(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_recoverSvipFirstRights_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function reduceSvipFirstRights(\com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq $svipFirstRightsReduceOrRecoverReq){
		
		$this->send_reduceSvipFirstRights( $svipFirstRightsReduceOrRecoverReq);
		return $this->recv_reduceSvipFirstRights();
	}
	
	public function send_reduceSvipFirstRights(\com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq $svipFirstRightsReduceOrRecoverReq){
		
		$this->initInvocation("reduceSvipFirstRights");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_reduceSvipFirstRights_args();
		
		$args->svipFirstRightsReduceOrRecoverReq = $svipFirstRightsReduceOrRecoverReq;
		
		$this->send_base($args);
	}
	
	public function recv_reduceSvipFirstRights(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_reduceSvipFirstRights_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function rejoinTencentMember( $serial, $admin){
		
		$this->send_rejoinTencentMember( $serial, $admin);
		return $this->recv_rejoinTencentMember();
	}
	
	public function send_rejoinTencentMember( $serial, $admin){
		
		$this->initInvocation("rejoinTencentMember");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_rejoinTencentMember_args();
		
		$args->serial = $serial;
		
		$args->admin = $admin;
		
		$this->send_base($args);
	}
	
	public function recv_rejoinTencentMember(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_rejoinTencentMember_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function repairData( $config, $bizType){
		
		$this->send_repairData( $config, $bizType);
		return $this->recv_repairData();
	}
	
	public function send_repairData( $config, $bizType){
		
		$this->initInvocation("repairData");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_repairData_args();
		
		$args->config = $config;
		
		$args->bizType = $bizType;
		
		$this->send_base($args);
	}
	
	public function recv_repairData(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_repairData_result();
		$this->receive_base($result);
		
	}
	
	
	public function resetCanceledPayMember( $userId, $source, $uniqueCode){
		
		$this->send_resetCanceledPayMember( $userId, $source, $uniqueCode);
		return $this->recv_resetCanceledPayMember();
	}
	
	public function send_resetCanceledPayMember( $userId, $source, $uniqueCode){
		
		$this->initInvocation("resetCanceledPayMember");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_resetCanceledPayMember_args();
		
		$args->userId = $userId;
		
		$args->source = $source;
		
		$args->uniqueCode = $uniqueCode;
		
		$this->send_base($args);
	}
	
	public function recv_resetCanceledPayMember(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_resetCanceledPayMember_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function retryFirstOpenRightsUdpFlow(){
		
		$this->send_retryFirstOpenRightsUdpFlow();
		return $this->recv_retryFirstOpenRightsUdpFlow();
	}
	
	public function send_retryFirstOpenRightsUdpFlow(){
		
		$this->initInvocation("retryFirstOpenRightsUdpFlow");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_retryFirstOpenRightsUdpFlow_args();
		
		$this->send_base($args);
	}
	
	public function recv_retryFirstOpenRightsUdpFlow(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_retryFirstOpenRightsUdpFlow_result();
		$this->receive_base($result);
		
	}
	
	
	public function retryOthersOperateRecord(){
		
		$this->send_retryOthersOperateRecord();
		return $this->recv_retryOthersOperateRecord();
	}
	
	public function send_retryOthersOperateRecord(){
		
		$this->initInvocation("retryOthersOperateRecord");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_retryOthersOperateRecord_args();
		
		$this->send_base($args);
	}
	
	public function recv_retryOthersOperateRecord(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_retryOthersOperateRecord_result();
		$this->receive_base($result);
		
	}
	
	
	public function retryProcessGifts(){
		
		$this->send_retryProcessGifts();
		return $this->recv_retryProcessGifts();
	}
	
	public function send_retryProcessGifts(){
		
		$this->initInvocation("retryProcessGifts");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_retryProcessGifts_args();
		
		$this->send_base($args);
	}
	
	public function recv_retryProcessGifts(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_retryProcessGifts_result();
		$this->receive_base($result);
		
	}
	
	
	public function retrySendMsgToEbs( $msgIds){
		
		$this->send_retrySendMsgToEbs( $msgIds);
		return $this->recv_retrySendMsgToEbs();
	}
	
	public function send_retrySendMsgToEbs( $msgIds){
		
		$this->initInvocation("retrySendMsgToEbs");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_retrySendMsgToEbs_args();
		
		$args->msgIds = $msgIds;
		
		$this->send_base($args);
	}
	
	public function recv_retrySendMsgToEbs(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_retrySendMsgToEbs_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function retrySvipExceptionLog(){
		
		$this->send_retrySvipExceptionLog();
		return $this->recv_retrySvipExceptionLog();
	}
	
	public function send_retrySvipExceptionLog(){
		
		$this->initInvocation("retrySvipExceptionLog");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_retrySvipExceptionLog_args();
		
		$this->send_base($args);
	}
	
	public function recv_retrySvipExceptionLog(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_retrySvipExceptionLog_result();
		$this->receive_base($result);
		
	}
	
	
	public function retrySvipOperate(){
		
		$this->send_retrySvipOperate();
		return $this->recv_retrySvipOperate();
	}
	
	public function send_retrySvipOperate(){
		
		$this->initInvocation("retrySvipOperate");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_retrySvipOperate_args();
		
		$this->send_base($args);
	}
	
	public function recv_retrySvipOperate(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_retrySvipOperate_result();
		$this->receive_base($result);
		
	}
	
	
	public function scrapeAction(\com\vip\svip\osp\service\ScrapeActionRequest $request){
		
		$this->send_scrapeAction( $request);
		return $this->recv_scrapeAction();
	}
	
	public function send_scrapeAction(\com\vip\svip\osp\service\ScrapeActionRequest $request){
		
		$this->initInvocation("scrapeAction");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_scrapeAction_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_scrapeAction(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_scrapeAction_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function searchSvipTXHistory(\com\vip\svip\osp\service\SearchSvipHistoryRequest $request){
		
		$this->send_searchSvipTXHistory( $request);
		return $this->recv_searchSvipTXHistory();
	}
	
	public function send_searchSvipTXHistory(\com\vip\svip\osp\service\SearchSvipHistoryRequest $request){
		
		$this->initInvocation("searchSvipTXHistory");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_searchSvipTXHistory_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_searchSvipTXHistory(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_searchSvipTXHistory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sendSaveMoneyRemindSms( $userId, $startDate){
		
		$this->send_sendSaveMoneyRemindSms( $userId, $startDate);
		return $this->recv_sendSaveMoneyRemindSms();
	}
	
	public function send_sendSaveMoneyRemindSms( $userId, $startDate){
		
		$this->initInvocation("sendSaveMoneyRemindSms");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_sendSaveMoneyRemindSms_args();
		
		$args->userId = $userId;
		
		$args->startDate = $startDate;
		
		$this->send_base($args);
	}
	
	public function recv_sendSaveMoneyRemindSms(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_sendSaveMoneyRemindSms_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sendSvipFirstRightsExpireSms( $userId){
		
		$this->send_sendSvipFirstRightsExpireSms( $userId);
		return $this->recv_sendSvipFirstRightsExpireSms();
	}
	
	public function send_sendSvipFirstRightsExpireSms( $userId){
		
		$this->initInvocation("sendSvipFirstRightsExpireSms");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_sendSvipFirstRightsExpireSms_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_sendSvipFirstRightsExpireSms(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_sendSvipFirstRightsExpireSms_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setMonthCardLogoutStatus( $userId){
		
		$this->send_setMonthCardLogoutStatus( $userId);
		return $this->recv_setMonthCardLogoutStatus();
	}
	
	public function send_setMonthCardLogoutStatus( $userId){
		
		$this->initInvocation("setMonthCardLogoutStatus");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_setMonthCardLogoutStatus_args();
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_setMonthCardLogoutStatus(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_setMonthCardLogoutStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function specialMemberTrySvip(\com\vip\svip\osp\service\SimpleRequestHeader $header){
		
		$this->send_specialMemberTrySvip( $header);
		return $this->recv_specialMemberTrySvip();
	}
	
	public function send_specialMemberTrySvip(\com\vip\svip\osp\service\SimpleRequestHeader $header){
		
		$this->initInvocation("specialMemberTrySvip");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_specialMemberTrySvip_args();
		
		$args->header = $header;
		
		$this->send_base($args);
	}
	
	public function recv_specialMemberTrySvip(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_specialMemberTrySvip_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function startBeforePayAutoPay( $whiteList){
		
		$this->send_startBeforePayAutoPay( $whiteList);
		return $this->recv_startBeforePayAutoPay();
	}
	
	public function send_startBeforePayAutoPay( $whiteList){
		
		$this->initInvocation("startBeforePayAutoPay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayAutoPay_args();
		
		$args->whiteList = $whiteList;
		
		$this->send_base($args);
	}
	
	public function recv_startBeforePayAutoPay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayAutoPay_result();
		$this->receive_base($result);
		
	}
	
	
	public function startBeforePayAutoPayRetry(){
		
		$this->send_startBeforePayAutoPayRetry();
		return $this->recv_startBeforePayAutoPayRetry();
	}
	
	public function send_startBeforePayAutoPayRetry(){
		
		$this->initInvocation("startBeforePayAutoPayRetry");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayAutoPayRetry_args();
		
		$this->send_base($args);
	}
	
	public function recv_startBeforePayAutoPayRetry(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayAutoPayRetry_result();
		$this->receive_base($result);
		
	}
	
	
	public function startBeforePayPreAutoPay( $whiteList){
		
		$this->send_startBeforePayPreAutoPay( $whiteList);
		return $this->recv_startBeforePayPreAutoPay();
	}
	
	public function send_startBeforePayPreAutoPay( $whiteList){
		
		$this->initInvocation("startBeforePayPreAutoPay");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayPreAutoPay_args();
		
		$args->whiteList = $whiteList;
		
		$this->send_base($args);
	}
	
	public function recv_startBeforePayPreAutoPay(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayPreAutoPay_result();
		$this->receive_base($result);
		
	}
	
	
	public function startBeforePayPreAutoPayRetry(){
		
		$this->send_startBeforePayPreAutoPayRetry();
		return $this->recv_startBeforePayPreAutoPayRetry();
	}
	
	public function send_startBeforePayPreAutoPayRetry(){
		
		$this->initInvocation("startBeforePayPreAutoPayRetry");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayPreAutoPayRetry_args();
		
		$this->send_base($args);
	}
	
	public function recv_startBeforePayPreAutoPayRetry(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_startBeforePayPreAutoPayRetry_result();
		$this->receive_base($result);
		
	}
	
	
	public function svipAutoPayNoticePayStatus( $userId, $orderSn){
		
		$this->send_svipAutoPayNoticePayStatus( $userId, $orderSn);
		return $this->recv_svipAutoPayNoticePayStatus();
	}
	
	public function send_svipAutoPayNoticePayStatus( $userId, $orderSn){
		
		$this->initInvocation("svipAutoPayNoticePayStatus");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_svipAutoPayNoticePayStatus_args();
		
		$args->userId = $userId;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_svipAutoPayNoticePayStatus(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_svipAutoPayNoticePayStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function svipCompensateForCommon(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->send_svipCompensateForCommon( $param);
		return $this->recv_svipCompensateForCommon();
	}
	
	public function send_svipCompensateForCommon(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->initInvocation("svipCompensateForCommon");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_svipCompensateForCommon_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_svipCompensateForCommon(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_svipCompensateForCommon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function svipCompensateForCommonForBackground(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->send_svipCompensateForCommonForBackground( $param);
		return $this->recv_svipCompensateForCommonForBackground();
	}
	
	public function send_svipCompensateForCommonForBackground(\com\vip\svip\osp\service\SvipCompensateParam $param){
		
		$this->initInvocation("svipCompensateForCommonForBackground");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_svipCompensateForCommonForBackground_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_svipCompensateForCommonForBackground(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_svipCompensateForCommonForBackground_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function svipRightsSendRegisterCode( $phone, $actCode, $rightsCode){
		
		$this->send_svipRightsSendRegisterCode( $phone, $actCode, $rightsCode);
		return $this->recv_svipRightsSendRegisterCode();
	}
	
	public function send_svipRightsSendRegisterCode( $phone, $actCode, $rightsCode){
		
		$this->initInvocation("svipRightsSendRegisterCode");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_svipRightsSendRegisterCode_args();
		
		$args->phone = $phone;
		
		$args->actCode = $actCode;
		
		$args->rightsCode = $rightsCode;
		
		$this->send_base($args);
	}
	
	public function recv_svipRightsSendRegisterCode(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_svipRightsSendRegisterCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function svipUserOperate(\com\vip\svip\osp\service\SvipUserOperateInfoParam $info,\com\vip\svip\osp\service\SvipUserOperateSignCheck $signCheck){
		
		$this->send_svipUserOperate( $info, $signCheck);
		return $this->recv_svipUserOperate();
	}
	
	public function send_svipUserOperate(\com\vip\svip\osp\service\SvipUserOperateInfoParam $info,\com\vip\svip\osp\service\SvipUserOperateSignCheck $signCheck){
		
		$this->initInvocation("svipUserOperate");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_svipUserOperate_args();
		
		$args->info = $info;
		
		$args->signCheck = $signCheck;
		
		$this->send_base($args);
	}
	
	public function recv_svipUserOperate(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_svipUserOperate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncCancelResult(){
		
		$this->send_syncCancelResult();
		return $this->recv_syncCancelResult();
	}
	
	public function send_syncCancelResult(){
		
		$this->initInvocation("syncCancelResult");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_syncCancelResult_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncCancelResult(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_syncCancelResult_result();
		$this->receive_base($result);
		
	}
	
	
	public function takeFreeSVipLayerRights(){
		
		$this->send_takeFreeSVipLayerRights();
		return $this->recv_takeFreeSVipLayerRights();
	}
	
	public function send_takeFreeSVipLayerRights(){
		
		$this->initInvocation("takeFreeSVipLayerRights");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takeFreeSVipLayerRights_args();
		
		$this->send_base($args);
	}
	
	public function recv_takeFreeSVipLayerRights(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takeFreeSVipLayerRights_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takeFreeSvipRights(){
		
		$this->send_takeFreeSvipRights();
		return $this->recv_takeFreeSvipRights();
	}
	
	public function send_takeFreeSvipRights(){
		
		$this->initInvocation("takeFreeSvipRights");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takeFreeSvipRights_args();
		
		$this->send_base($args);
	}
	
	public function recv_takeFreeSvipRights(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takeFreeSvipRights_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takeOneToManyReward( $actCode){
		
		$this->send_takeOneToManyReward( $actCode);
		return $this->recv_takeOneToManyReward();
	}
	
	public function send_takeOneToManyReward( $actCode){
		
		$this->initInvocation("takeOneToManyReward");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takeOneToManyReward_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_takeOneToManyReward(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takeOneToManyReward_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takePackageGift(){
		
		$this->send_takePackageGift();
		return $this->recv_takePackageGift();
	}
	
	public function send_takePackageGift(){
		
		$this->initInvocation("takePackageGift");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takePackageGift_args();
		
		$this->send_base($args);
	}
	
	public function recv_takePackageGift(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takePackageGift_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takePackageGiftForTest( $userId, $ip){
		
		$this->send_takePackageGiftForTest( $userId, $ip);
		return $this->recv_takePackageGiftForTest();
	}
	
	public function send_takePackageGiftForTest( $userId, $ip){
		
		$this->initInvocation("takePackageGiftForTest");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takePackageGiftForTest_args();
		
		$args->userId = $userId;
		
		$args->ip = $ip;
		
		$this->send_base($args);
	}
	
	public function recv_takePackageGiftForTest(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takePackageGiftForTest_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takeSvipPrize( $actCode){
		
		$this->send_takeSvipPrize( $actCode);
		return $this->recv_takeSvipPrize();
	}
	
	public function send_takeSvipPrize( $actCode){
		
		$this->initInvocation("takeSvipPrize");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takeSvipPrize_args();
		
		$args->actCode = $actCode;
		
		$this->send_base($args);
	}
	
	public function recv_takeSvipPrize(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takeSvipPrize_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takeSvipPrizeForTest( $userId, $actCode, $ip){
		
		$this->send_takeSvipPrizeForTest( $userId, $actCode, $ip);
		return $this->recv_takeSvipPrizeForTest();
	}
	
	public function send_takeSvipPrizeForTest( $userId, $actCode, $ip){
		
		$this->initInvocation("takeSvipPrizeForTest");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takeSvipPrizeForTest_args();
		
		$args->userId = $userId;
		
		$args->actCode = $actCode;
		
		$args->ip = $ip;
		
		$this->send_base($args);
	}
	
	public function recv_takeSvipPrizeForTest(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takeSvipPrizeForTest_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function takeSvipRightsPrize(\com\vip\svip\osp\service\TakeSvipRightsPrizeReq $req){
		
		$this->send_takeSvipRightsPrize( $req);
		return $this->recv_takeSvipRightsPrize();
	}
	
	public function send_takeSvipRightsPrize(\com\vip\svip\osp\service\TakeSvipRightsPrizeReq $req){
		
		$this->initInvocation("takeSvipRightsPrize");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_takeSvipRightsPrize_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_takeSvipRightsPrize(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_takeSvipRightsPrize_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function terminateContract( $contractSn){
		
		$this->send_terminateContract( $contractSn);
		return $this->recv_terminateContract();
	}
	
	public function send_terminateContract( $contractSn){
		
		$this->initInvocation("terminateContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_terminateContract_args();
		
		$args->contractSn = $contractSn;
		
		$this->send_base($args);
	}
	
	public function recv_terminateContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_terminateContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function terminateContractForCSC( $userId, $contractSn, $reason, $operator){
		
		$this->send_terminateContractForCSC( $userId, $contractSn, $reason, $operator);
		return $this->recv_terminateContractForCSC();
	}
	
	public function send_terminateContractForCSC( $userId, $contractSn, $reason, $operator){
		
		$this->initInvocation("terminateContractForCSC");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_terminateContractForCSC_args();
		
		$args->userId = $userId;
		
		$args->contractSn = $contractSn;
		
		$args->reason = $reason;
		
		$args->operator = $operator;
		
		$this->send_base($args);
	}
	
	public function recv_terminateContractForCSC(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_terminateContractForCSC_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function testSendMsgToEbs( $msg){
		
		$this->send_testSendMsgToEbs( $msg);
		return $this->recv_testSendMsgToEbs();
	}
	
	public function send_testSendMsgToEbs( $msg){
		
		$this->initInvocation("testSendMsgToEbs");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_testSendMsgToEbs_args();
		
		$args->msg = $msg;
		
		$this->send_base($args);
	}
	
	public function recv_testSendMsgToEbs(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_testSendMsgToEbs_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function thirdOpenLimitCheck(\com\vip\svip\osp\service\ThirdOpenLimitRequest $request){
		
		$this->send_thirdOpenLimitCheck( $request);
		return $this->recv_thirdOpenLimitCheck();
	}
	
	public function send_thirdOpenLimitCheck(\com\vip\svip\osp\service\ThirdOpenLimitRequest $request){
		
		$this->initInvocation("thirdOpenLimitCheck");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_thirdOpenLimitCheck_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_thirdOpenLimitCheck(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_thirdOpenLimitCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function thirdOpenSvip(\com\vip\svip\osp\service\ThirdOpenSvipRequest $request){
		
		$this->send_thirdOpenSvip( $request);
		return $this->recv_thirdOpenSvip();
	}
	
	public function send_thirdOpenSvip(\com\vip\svip\osp\service\ThirdOpenSvipRequest $request){
		
		$this->initInvocation("thirdOpenSvip");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_thirdOpenSvip_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_thirdOpenSvip(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_thirdOpenSvip_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function txGetSvipToken(\com\vip\svip\osp\service\TxGetTokenRequest $request){
		
		$this->send_txGetSvipToken( $request);
		return $this->recv_txGetSvipToken();
	}
	
	public function send_txGetSvipToken(\com\vip\svip\osp\service\TxGetTokenRequest $request){
		
		$this->initInvocation("txGetSvipToken");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_txGetSvipToken_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_txGetSvipToken(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_txGetSvipToken_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function txOpenSvip(\com\vip\svip\osp\service\TxOpenSvipRequest $request){
		
		$this->send_txOpenSvip( $request);
		return $this->recv_txOpenSvip();
	}
	
	public function send_txOpenSvip(\com\vip\svip\osp\service\TxOpenSvipRequest $request){
		
		$this->initInvocation("txOpenSvip");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_txOpenSvip_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_txOpenSvip(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_txOpenSvip_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateSvipFirstOpenStatus( $userId, $id){
		
		$this->send_updateSvipFirstOpenStatus( $userId, $id);
		return $this->recv_updateSvipFirstOpenStatus();
	}
	
	public function send_updateSvipFirstOpenStatus( $userId, $id){
		
		$this->initInvocation("updateSvipFirstOpenStatus");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_updateSvipFirstOpenStatus_args();
		
		$args->userId = $userId;
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_updateSvipFirstOpenStatus(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_updateSvipFirstOpenStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateUseBeforePayContract( $userId, $contractSn, $orderSn, $status, $reason, $operator){
		
		$this->send_updateUseBeforePayContract( $userId, $contractSn, $orderSn, $status, $reason, $operator);
		return $this->recv_updateUseBeforePayContract();
	}
	
	public function send_updateUseBeforePayContract( $userId, $contractSn, $orderSn, $status, $reason, $operator){
		
		$this->initInvocation("updateUseBeforePayContract");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_updateUseBeforePayContract_args();
		
		$args->userId = $userId;
		
		$args->contractSn = $contractSn;
		
		$args->orderSn = $orderSn;
		
		$args->status = $status;
		
		$args->reason = $reason;
		
		$args->operator = $operator;
		
		$this->send_base($args);
	}
	
	public function recv_updateUseBeforePayContract(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_updateUseBeforePayContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vOrderCallMonthCard( $json){
		
		$this->send_vOrderCallMonthCard( $json);
		return $this->recv_vOrderCallMonthCard();
	}
	
	public function send_vOrderCallMonthCard( $json){
		
		$this->initInvocation("vOrderCallMonthCard");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_vOrderCallMonthCard_args();
		
		$args->json = $json;
		
		$this->send_base($args);
	}
	
	public function recv_vOrderCallMonthCard(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_vOrderCallMonthCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vOrderCallSvip( $json){
		
		$this->send_vOrderCallSvip( $json);
		return $this->recv_vOrderCallSvip();
	}
	
	public function send_vOrderCallSvip( $json){
		
		$this->initInvocation("vOrderCallSvip");
		$args = new \com\vip\svip\osp\service\SvipOspServiceV2_vOrderCallSvip_args();
		
		$args->json = $json;
		
		$this->send_base($args);
	}
	
	public function recv_vOrderCallSvip(){
		
		$result = new \com\vip\svip\osp\service\SvipOspServiceV2_vOrderCallSvip_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class SvipOspServiceV2_SearchSvipHistory_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\SearchSvipHistoryRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_SvipCompensate_args {
	
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
			
			
			$this->param = new \com\vip\svip\osp\service\SvipCompensateParam();
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




class SvipOspServiceV2_SvipCompensateByHand_args {
	
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
			
			
			$this->param = new \com\vip\svip\osp\service\SvipCompensateParam();
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




class SvipOspServiceV2_batchCancel_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BatchCancelRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_batchCancelV2_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BatchCancelRequestV2();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_bindCouponForMonthCard_args {
	
	static $_TSPEC;
	public $couponId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->couponId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponId');
		$xfer += $output->writeString($this->couponId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_bindCouponForMonthCardForMapi_args {
	
	static $_TSPEC;
	public $couponStr = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponStr'
			),
			2 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponStr'])){
				
				$this->couponStr = $vals['couponStr'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->couponStr);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponStr');
		$xfer += $output->writeString($this->couponStr);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_bindTxUserAccount_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BindTxAccRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_bindVirtualCoupon_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $couponId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'couponId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->couponId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actCode');
		$xfer += $output->writeString($this->actCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponId');
		$xfer += $output->writeString($this->couponId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_brandGiftDetailList_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BrandGiftDetailRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_buildUserMonthCardModelV1_args {
	
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




class SvipOspServiceV2_buildUserMonthCardModelV2_args {
	
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




class SvipOspServiceV2_cancelSvipIdentity_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DoCancelRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_cancelUserSvipAutoPay_args {
	
	static $_TSPEC;
	public $cancelUserSvipAutoPayReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cancelUserSvipAutoPayReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cancelUserSvipAutoPayReq'])){
				
				$this->cancelUserSvipAutoPayReq = $vals['cancelUserSvipAutoPayReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->cancelUserSvipAutoPayReq = new \com\vip\svip\osp\service\CancelUserSvipAutoPayReq();
			$this->cancelUserSvipAutoPayReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->cancelUserSvipAutoPayReq !== null) {
			
			$xfer += $output->writeFieldBegin('cancelUserSvipAutoPayReq');
			
			if (!is_object($this->cancelUserSvipAutoPayReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->cancelUserSvipAutoPayReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_checkFreeSVipLayerRightsLimit_args {
	
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




class SvipOspServiceV2_checkFreeSvipRightsLimit_args {
	
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




class SvipOspServiceV2_checkMonthCardLimit_args {
	
	static $_TSPEC;
	public $userId = null;
	public $vpid = null;
	public $extRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'vpid'
			),
			3 => array(
			'var' => 'extRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['vpid'])){
				
				$this->vpid = $vals['vpid'];
			}
			
			
			if (isset($vals['extRequest'])){
				
				$this->extRequest = $vals['extRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vpid);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->extRequest = new \com\vip\svip\osp\service\CheckMonthCardLimitExtRequest();
			$this->extRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vpid !== null) {
			
			$xfer += $output->writeFieldBegin('vpid');
			$xfer += $output->writeString($this->vpid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extRequest !== null) {
			
			$xfer += $output->writeFieldBegin('extRequest');
			
			if (!is_object($this->extRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->extRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_checkMonthCardLimitForApp_args {
	
	static $_TSPEC;
	public $userId = null;
	public $extRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'extRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['extRequest'])){
				
				$this->extRequest = $vals['extRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->extRequest = new \com\vip\svip\osp\service\CheckMonthCardLimitExtRequest();
			$this->extRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->extRequest !== null) {
			
			$xfer += $output->writeFieldBegin('extRequest');
			
			if (!is_object($this->extRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->extRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_checkOneToManyRewardLimit_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_checkTxAccLimit_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\CheckTxAccLimitRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_checkUserPhone_args {
	
	static $_TSPEC;
	public $phone = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'phone'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->phone);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_checkXmlyRecharge_args {
	
	static $_TSPEC;
	public $openId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'openId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->openId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_cleanUpUseBeforePay_args {
	
	static $_TSPEC;
	public $userId = null;
	public $reason = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'reason'
			),
			3 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->reason);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_closeSvipStartBeforePayContract_args {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	public $closeType = null;
	public $operator = null;
	public $reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			3 => array(
			'var' => 'closeType'
			),
			4 => array(
			'var' => 'operator'
			),
			5 => array(
			'var' => 'reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
			if (isset($vals['closeType'])){
				
				$this->closeType = $vals['closeType'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\svip\osp\service\CloseType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->closeType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->reason);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractSn');
		$xfer += $output->writeString($this->contractSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('closeType');
		
		$em = new \com\vip\svip\osp\service\CloseType; 
		$output->writeString($em::$__names[$this->closeType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operator');
		$xfer += $output->writeString($this->operator);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reason');
		$xfer += $output->writeString($this->reason);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_closeSvipStartBeforePayContractByUser_args {
	
	static $_TSPEC;
	public $reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->reason);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reason');
		$xfer += $output->writeString($this->reason);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_compensateTxVideo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\CompensateTxVideoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createCaptchaFlow_args {
	
	static $_TSPEC;
	public $source = null;
	public $data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'source'
			),
			3 => array(
			'var' => 'data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->data);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data !== null) {
			
			$xfer += $output->writeFieldBegin('data');
			$xfer += $output->writeString($this->data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createCaptchaFlowByOneToMany_args {
	
	static $_TSPEC;
	public $source = null;
	public $data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'source'
			),
			3 => array(
			'var' => 'data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->data);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data !== null) {
			
			$xfer += $output->writeFieldBegin('data');
			$xfer += $output->writeString($this->data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createSubscribe_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createSvipStartBeforePayContract_args {
	
	static $_TSPEC;
	public $mobile_platform = null;
	public $appName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mobile_platform'
			),
			2 => array(
			'var' => 'appName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mobile_platform'])){
				
				$this->mobile_platform = $vals['mobile_platform'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->mobile_platform); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('mobile_platform');
		$xfer += $output->writeI32($this->mobile_platform);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appName');
		$xfer += $output->writeString($this->appName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createThirdSvipToken_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\ThirdCreatSvipTokenRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createUserSvipAutoPayContract_args {
	
	static $_TSPEC;
	public $platform = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'platform'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->platform); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('platform');
		$xfer += $output->writeI32($this->platform);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_createUserUseBeforePayContract_args {
	
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
			
			
			$this->req = new \com\vip\svip\osp\service\CreateUserUseBeforePayContractRequest();
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




class SvipOspServiceV2_dingDongdecryptMobile_args {
	
	static $_TSPEC;
	public $data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->data);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->data !== null) {
			
			$xfer += $output->writeFieldBegin('data');
			$xfer += $output->writeString($this->data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_doCancelJob_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DoCancelJobRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_doCancelSvipUser_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DoCancelRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_draw_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DrawRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_existNoCloseStartBeforePayContract_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_existTakeAvailableRights_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actCode');
		$xfer += $output->writeString($this->actCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getBindAccountInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetBindAccountRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getBrandGiftIdList_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BrandGiftRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getBuyLimitResult_args {
	
	static $_TSPEC;
	public $header = null;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\svip\osp\service\BuyLimitRequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\svip\osp\service\BuyLimitRequestParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
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




class SvipOspServiceV2_getGoodsIdByPickNo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetGoodsIdByPickNoReq();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getGroupValuesConf_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetGroupValuesRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getMonthCardInfo_args {
	
	static $_TSPEC;
	public $userId = null;
	public $extRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'extRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['extRequest'])){
				
				$this->extRequest = $vals['extRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->extRequest = new \com\vip\svip\osp\service\CheckMonthCardLimitExtRequest();
			$this->extRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->extRequest !== null) {
			
			$xfer += $output->writeFieldBegin('extRequest');
			
			if (!is_object($this->extRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->extRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getMonthCardInfoByActCode_args {
	
	static $_TSPEC;
	public $actCodeList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCodeList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCodeList'])){
				
				$this->actCodeList = $vals['actCodeList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actCodeList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->actCodeList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('actCodeList');
		
		if (!is_array($this->actCodeList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actCodeList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getMonthCardStatusForLogout_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getMonthCardUserJoinedInfoToCustomer_args {
	
	static $_TSPEC;
	public $userId = null;
	public $limit = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'limit'
			),
			3 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getOneToManyActInfo_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getOneToManyJoinInfo_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getOpGoodsDetailList_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetOpGoodsDetailRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getOpGoodsIds_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetOpGoodsIdRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getOrderRefundAmount_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetOrderRefundAmountRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getPackageGiftInfo_args {
	
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




class SvipOspServiceV2_getPackageGiftInfoForTest_args {
	
	static $_TSPEC;
	public $userId = null;
	public $ip = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'ip'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ip);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getPmsPriceByProductId_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BrandGoodsPriceRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getStartBeforePayContractListByUid_args {
	
	static $_TSPEC;
	public $userId = null;
	public $limit = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'limit'
			),
			3 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSubscribeNum_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSumCount_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetSumCountRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipAutoPayContractForCSC_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipBindInfo_args {
	
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




class SvipOspServiceV2_getSvipBindInfoByOrderSn_args {
	
	static $_TSPEC;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
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




class SvipOspServiceV2_getSvipBindInfoByUserId_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipEffectivepFirstRightsActivity_args {
	
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




class SvipOspServiceV2_getSvipEquityInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\SvipEquityInfoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipEquityInfoForShop_args {
	
	static $_TSPEC;
	public $savingCalVersion = null;
	public $appName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'savingCalVersion'
			),
			2 => array(
			'var' => 'appName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['savingCalVersion'])){
				
				$this->savingCalVersion = $vals['savingCalVersion'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->savingCalVersion); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->savingCalVersion !== null) {
			
			$xfer += $output->writeFieldBegin('savingCalVersion');
			$xfer += $output->writeI32($this->savingCalVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipFirstRightsActivityInfo_args {
	
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




class SvipOspServiceV2_getSvipGoodsByMid_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetSvipGoodsRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipGoodsDefaultPrice_args {
	
	static $_TSPEC;
	public $lv = null;
	public $bizType = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'lv'
			),
			2 => array(
			'var' => 'bizType'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['lv'])){
				
				$this->lv = $vals['lv'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->lv);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->bizType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->lv !== null) {
			
			$xfer += $output->writeFieldBegin('lv');
			$xfer += $output->writeString($this->lv);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeI32($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipGoodsDetail_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetSvipGoodsDetailReq();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipGoodsInfoForOsp_args {
	
	static $_TSPEC;
	public $getSvipGoodsInfoForOspRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getSvipGoodsInfoForOspRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getSvipGoodsInfoForOspRequest'])){
				
				$this->getSvipGoodsInfoForOspRequest = $vals['getSvipGoodsInfoForOspRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getSvipGoodsInfoForOspRequest = new \com\vip\svip\osp\service\GetSvipGoodsInfoForOspRequest();
			$this->getSvipGoodsInfoForOspRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getSvipGoodsInfoForOspRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getSvipGoodsInfoForOspRequest');
			
			if (!is_object($this->getSvipGoodsInfoForOspRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getSvipGoodsInfoForOspRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipGoodsinfo_args {
	
	static $_TSPEC;
	public $bizList = null;
	public $appName = null;
	public $areaId = null;
	public $fdcAreaId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bizList'
			),
			2 => array(
			'var' => 'appName'
			),
			3 => array(
			'var' => 'areaId'
			),
			4 => array(
			'var' => 'fdcAreaId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bizList'])){
				
				$this->bizList = $vals['bizList'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['fdcAreaId'])){
				
				$this->fdcAreaId = $vals['fdcAreaId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->bizList);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->areaId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->fdcAreaId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->bizList !== null) {
			
			$xfer += $output->writeFieldBegin('bizList');
			$xfer += $output->writeString($this->bizList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fdcAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('fdcAreaId');
			$xfer += $output->writeString($this->fdcAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipInfo4AppClub_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetSvipInfo4AppClubRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipMainInfo_args {
	
	static $_TSPEC;
	public $header = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\svip\osp\service\BaseRequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipOpenHistoryList_args {
	
	static $_TSPEC;
	public $limit = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limit'
			),
			2 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipPrizeInfo_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipPrizeInfoForTest_args {
	
	static $_TSPEC;
	public $userId = null;
	public $actCode = null;
	public $ip = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'actCode'
			),
			3 => array(
			'var' => 'ip'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ip);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipRightsActInfo_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipRightsInfo_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $rightsCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'rightsCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['rightsCode'])){
				
				$this->rightsCode = $vals['rightsCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->rightsCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rightsCode !== null) {
			
			$xfer += $output->writeFieldBegin('rightsCode');
			$xfer += $output->writeString($this->rightsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipRightsInfoWithoutCheck_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $rightsCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'rightsCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['rightsCode'])){
				
				$this->rightsCode = $vals['rightsCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->rightsCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rightsCode !== null) {
			
			$xfer += $output->writeFieldBegin('rightsCode');
			$xfer += $output->writeString($this->rightsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipRightsJoinRecordById_args {
	
	static $_TSPEC;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipRightsJoinRecordList_args {
	
	static $_TSPEC;
	public $page = null;
	public $size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			2 => array(
			'var' => 'size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size');
		$xfer += $output->writeI32($this->size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipStartBeforePayContractByContractSn_args {
	
	static $_TSPEC;
	public $contract_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contract_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contract_sn'])){
				
				$this->contract_sn = $vals['contract_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->contract_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('contract_sn');
		$xfer += $output->writeString($this->contract_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipStartBeforePayContractForFront_args {
	
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




class SvipOspServiceV2_getSvipStartBeforePayContractForOsp_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipStartBeforePayTotalSavedMoney_args {
	
	static $_TSPEC;
	public $getTotalSavedMoneyReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getTotalSavedMoneyReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getTotalSavedMoneyReq'])){
				
				$this->getTotalSavedMoneyReq = $vals['getTotalSavedMoneyReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getTotalSavedMoneyReq = new \com\vip\svip\osp\service\GetTotalSavedMoneyReq();
			$this->getTotalSavedMoneyReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('getTotalSavedMoneyReq');
		
		if (!is_object($this->getTotalSavedMoneyReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->getTotalSavedMoneyReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipState_args {
	
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




class SvipOspServiceV2_getSvipUserHealth_args {
	
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
			
			
			$this->req = new \com\vip\svip\osp\service\GetSvipUserHealthReq();
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




class SvipOspServiceV2_getSvipUserInfo_args {
	
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
			
			
			$this->req = new \com\vip\svip\osp\service\SvipUserLimitStateReq();
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




class SvipOspServiceV2_getSvipUserStatusHistoryList_args {
	
	static $_TSPEC;
	public $userId = null;
	public $limit = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'limit'
			),
			3 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getSvipUserStatusHistoryListForFront_args {
	
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




class SvipOspServiceV2_getTencentVipSvipCardInfo_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getTheTimeSvipPrice_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetTheTimeSvipPrice();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getThirdAccountInfoByOpenId_args {
	
	static $_TSPEC;
	public $openId = null;
	public $bizType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'openId'
			),
			2 => array(
			'var' => 'bizType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->openId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->bizType); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeI32($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getThirdAccountInfoByUnionLogin_args {
	
	static $_TSPEC;
	public $code = null;
	public $bizType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'bizType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->bizType); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeI32($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUnPayOrderInfo_args {
	
	static $_TSPEC;
	public $productId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productId'])){
				
				$this->productId = $vals['productId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->productId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->productId !== null) {
			
			$xfer += $output->writeFieldBegin('productId');
			$xfer += $output->writeString($this->productId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUnPayOrderInfoForMonthCard_args {
	
	static $_TSPEC;
	public $productId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productId'])){
				
				$this->productId = $vals['productId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->productId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->productId !== null) {
			
			$xfer += $output->writeFieldBegin('productId');
			$xfer += $output->writeString($this->productId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUnionSvipGoodsInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\UnionSvipGoodsRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUseBeforePayOrderList_args {
	
	static $_TSPEC;
	public $page = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserActInfoToCustomer_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserAttendInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\UserAttendInfoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserLastestMonthCard_args {
	
	static $_TSPEC;
	public $userIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userIdList'])){
				
				$this->userIdList = $vals['userIdList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->userIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->userIdList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('userIdList');
		
		if (!is_array($this->userIdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->userIdList as $iter0){
			
			$xfer += $output->writeI64($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserMobileEncrypt_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserMonthCardAbacusResult_args {
	
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
			
			
			$this->param = new \com\vip\svip\osp\service\GetUserMonthCardInfoParam();
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




class SvipOspServiceV2_getUserMonthCardForVipShop_args {
	
	static $_TSPEC;
	public $getUserMonthCardForVipShopRequestParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getUserMonthCardForVipShopRequestParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getUserMonthCardForVipShopRequestParam'])){
				
				$this->getUserMonthCardForVipShopRequestParam = $vals['getUserMonthCardForVipShopRequestParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getUserMonthCardForVipShopRequestParam = new \com\vip\svip\osp\service\GetUserMonthCardForVipShopRequestParam();
			$this->getUserMonthCardForVipShopRequestParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('getUserMonthCardForVipShopRequestParam');
		
		if (!is_object($this->getUserMonthCardForVipShopRequestParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->getUserMonthCardForVipShopRequestParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserMonthCardResultForNova_args {
	
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




class SvipOspServiceV2_getUserRightsLatestMobile_args {
	
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




class SvipOspServiceV2_getUserRightsSavedInfo_args {
	
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




class SvipOspServiceV2_getUserSubscribeInfo_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserSvipAutoPayContractForFront_args {
	
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




class SvipOspServiceV2_getUserSvipAutoPayContractForOsp_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserSvipFirstRightsRecord_args {
	
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




class SvipOspServiceV2_getUserSvipRightsJoinRecordList_args {
	
	static $_TSPEC;
	public $startDate = null;
	public $endDate = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'startDate'
			),
			2 => array(
			'var' => 'endDate'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['startDate'])){
				
				$this->startDate = $vals['startDate'];
			}
			
			
			if (isset($vals['endDate'])){
				
				$this->endDate = $vals['endDate'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->startDate);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endDate);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->startDate !== null) {
			
			$xfer += $output->writeFieldBegin('startDate');
			$xfer += $output->writeI64($this->startDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDate !== null) {
			
			$xfer += $output->writeFieldBegin('endDate');
			$xfer += $output->writeI64($this->endDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserSvipRightsList_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserUseBeforePayContract_args {
	
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




class SvipOspServiceV2_getUserUseBeforePayContractByUid_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserUseBeforePayContractForCSC_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_getUserUseBeforePayContractForFront_args {
	
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




class SvipOspServiceV2_giveUpSvipRights_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_healthCheck_args {
	
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




class SvipOspServiceV2_isCancelSvipStartBeforePayContractByUser_args {
	
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




class SvipOspServiceV2_isLimitPurchase_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BuyLimitStateRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_isSvipBanArea_args {
	
	static $_TSPEC;
	public $areaId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'areaId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->areaId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_isSvipBuyLimit_args {
	
	static $_TSPEC;
	public $header = null;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\svip\osp\service\BuyLimitRequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\svip\osp\service\BuyLimitRequestParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
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




class SvipOspServiceV2_isSvipLimitUser_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\BuyLimitStateRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_isSvipLimitUserByPhone_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\CheckSvipUserLimitByPhoneParam();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_isSvipStartBeforePayLimit_args {
	
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




class SvipOspServiceV2_isUserBeforePayLimit_args {
	
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




class SvipOspServiceV2_isWxuidEqPayuid_args {
	
	static $_TSPEC;
	public $wxOrderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wxOrderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wxOrderSn'])){
				
				$this->wxOrderSn = $vals['wxOrderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->wxOrderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('wxOrderSn');
		$xfer += $output->writeString($this->wxOrderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_joinSvipForTencentVideoSide_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DoubleSvipRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_joinTencentVideoMemberAtVipSide_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DoubleSvipRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_kugouDoubleVerify_args {
	
	static $_TSPEC;
	public $out_trade_no = null;
	public $out_user_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'out_trade_no'
			),
			2 => array(
			'var' => 'out_user_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['out_trade_no'])){
				
				$this->out_trade_no = $vals['out_trade_no'];
			}
			
			
			if (isset($vals['out_user_id'])){
				
				$this->out_user_id = $vals['out_user_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->out_trade_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->out_user_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->out_trade_no !== null) {
			
			$xfer += $output->writeFieldBegin('out_trade_no');
			$xfer += $output->writeString($this->out_trade_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_user_id !== null) {
			
			$xfer += $output->writeFieldBegin('out_user_id');
			$xfer += $output->writeString($this->out_user_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_mobileOpenSvip_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\OpenSvipRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_notifyCloseContractUserToPay_args {
	
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




class SvipOspServiceV2_notifyFireContractUserToPay_args {
	
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




class SvipOspServiceV2_notifyUserWillDeduct_args {
	
	static $_TSPEC;
	public $whiteList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'whiteList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['whiteList'])){
				
				$this->whiteList = $vals['whiteList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->whiteList);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->whiteList !== null) {
			
			$xfer += $output->writeFieldBegin('whiteList');
			$xfer += $output->writeString($this->whiteList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_offlineChannelTrySvip_args {
	
	static $_TSPEC;
	public $header = null;
	public $channelInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'channelInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['channelInfo'])){
				
				$this->channelInfo = $vals['channelInfo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\svip\osp\service\SimpleRequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->channelInfo = new \com\vip\svip\osp\service\OfflineChannelInfo();
			$this->channelInfo->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channelInfo');
		
		if (!is_object($this->channelInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->channelInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_oneToManyLimitCheck_args {
	
	static $_TSPEC;
	public $userId = null;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_oneToManyLimitCheckForFront_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $mid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'mid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->mid);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_openFreeMonthCardForNova_args {
	
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




class SvipOspServiceV2_openLimitCheck_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\OpenLimitRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_openOneToManyForThirdComponent_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\OneToManyThirdInfoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_openSvipStartBeforePayContract_args {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractSn');
		$xfer += $output->writeString($this->contractSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_openSvipUseBeforePayContract_args {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	public $wxContractSn = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			3 => array(
			'var' => 'wxContractSn'
			),
			4 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
			if (isset($vals['wxContractSn'])){
				
				$this->wxContractSn = $vals['wxContractSn'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->wxContractSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contractSn !== null) {
			
			$xfer += $output->writeFieldBegin('contractSn');
			$xfer += $output->writeString($this->contractSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wxContractSn !== null) {
			
			$xfer += $output->writeFieldBegin('wxContractSn');
			$xfer += $output->writeString($this->wxContractSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_openUserSvipAutoPay_args {
	
	static $_TSPEC;
	public $userId = null;
	public $contract_sn = null;
	public $wx_order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contract_sn'
			),
			3 => array(
			'var' => 'wx_order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contract_sn'])){
				
				$this->contract_sn = $vals['contract_sn'];
			}
			
			
			if (isset($vals['wx_order_sn'])){
				
				$this->wx_order_sn = $vals['wx_order_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contract_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->wx_order_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contract_sn !== null) {
			
			$xfer += $output->writeFieldBegin('contract_sn');
			$xfer += $output->writeString($this->contract_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wx_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('wx_order_sn');
			$xfer += $output->writeString($this->wx_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_ospCheckFreeSvipRightsLimit_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\CheckFreeSvipRightsRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_ospGetPrizeActInfoWithoutCheck_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetSvipPrizeInfoWithoutCheckRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_ospGetSvipPrizeInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\GetSvipPrizeInfoRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_ospTakeSvipPrize_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $ip = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'ip'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ip);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actCode');
		$xfer += $output->writeString($this->actCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ip');
		$xfer += $output->writeString($this->ip);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_prepareDoubleSvipAccess_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\DoubleSvipRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_queryNotice_args {
	
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




class SvipOspServiceV2_queryOneToManyQMusicOrderInfoToCustomer_args {
	
	static $_TSPEC;
	public $qqMusicStatusParamModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'qqMusicStatusParamModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['qqMusicStatusParamModel'])){
				
				$this->qqMusicStatusParamModel = $vals['qqMusicStatusParamModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->qqMusicStatusParamModel = new \com\vip\svip\osp\service\QQMusicStatusParamModel();
			$this->qqMusicStatusParamModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->qqMusicStatusParamModel !== null) {
			
			$xfer += $output->writeFieldBegin('qqMusicStatusParamModel');
			
			if (!is_object($this->qqMusicStatusParamModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->qqMusicStatusParamModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_queryQQMusicStatus_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_querySavedAmount_args {
	
	static $_TSPEC;
	public $userId = null;
	public $start = null;
	public $end = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'start'
			),
			3 => array(
			'var' => 'end'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['start'])){
				
				$this->start = $vals['start'];
			}
			
			
			if (isset($vals['end'])){
				
				$this->end = $vals['end'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->start);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->end);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start !== null) {
			
			$xfer += $output->writeFieldBegin('start');
			$xfer += $output->writeI64($this->start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end !== null) {
			
			$xfer += $output->writeFieldBegin('end');
			$xfer += $output->writeI64($this->end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_querySvipCouponInfo_args {
	
	static $_TSPEC;
	public $rcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rcode'])){
				
				$this->rcode = $vals['rcode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->rcode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('rcode');
		$xfer += $output->writeString($this->rcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_queryUnPayAutoOrderForNova_args {
	
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




class SvipOspServiceV2_queryUnPayOrderUseVirtualCoupon_args {
	
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




class SvipOspServiceV2_queryUserSvipSaveOrderList_args {
	
	static $_TSPEC;
	public $limit = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limit'
			),
			2 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_queryUserSvipSaveOrderListByContractSn_args {
	
	static $_TSPEC;
	public $limit = null;
	public $offset = null;
	public $contractSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limit'
			),
			2 => array(
			'var' => 'offset'
			),
			3 => array(
			'var' => 'contractSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractSn');
		$xfer += $output->writeString($this->contractSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_queryUserSvipSaveOrderListForOsp_args {
	
	static $_TSPEC;
	public $limit = null;
	public $offset = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limit'
			),
			2 => array(
			'var' => 'offset'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI32($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_queryVirtualCoupon_args {
	
	static $_TSPEC;
	public $actCode = null;
	public $couponType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'couponType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['couponType'])){
				
				$this->couponType = $vals['couponType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->couponType); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actCode');
		$xfer += $output->writeString($this->actCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->couponType !== null) {
			
			$xfer += $output->writeFieldBegin('couponType');
			$xfer += $output->writeI32($this->couponType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_receivePrize_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\ReceivePrizeRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_receiveSvipCoupon_args {
	
	static $_TSPEC;
	public $svipCouponReceiveReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'svipCouponReceiveReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['svipCouponReceiveReq'])){
				
				$this->svipCouponReceiveReq = $vals['svipCouponReceiveReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->svipCouponReceiveReq = new \com\vip\svip\osp\service\SvipCouponReceiveReq();
			$this->svipCouponReceiveReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->svipCouponReceiveReq !== null) {
			
			$xfer += $output->writeFieldBegin('svipCouponReceiveReq');
			
			if (!is_object($this->svipCouponReceiveReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->svipCouponReceiveReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_receiveSvipCouponImportIdl_args {
	
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
			
			
			$this->param = new \com\vip\svip\osp\service\RemindQueryParam();
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




class SvipOspServiceV2_recoverSvipFirstRights_args {
	
	static $_TSPEC;
	public $svipFirstRightsReduceOrRecoverReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'svipFirstRightsReduceOrRecoverReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['svipFirstRightsReduceOrRecoverReq'])){
				
				$this->svipFirstRightsReduceOrRecoverReq = $vals['svipFirstRightsReduceOrRecoverReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->svipFirstRightsReduceOrRecoverReq = new \com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq();
			$this->svipFirstRightsReduceOrRecoverReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('svipFirstRightsReduceOrRecoverReq');
		
		if (!is_object($this->svipFirstRightsReduceOrRecoverReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->svipFirstRightsReduceOrRecoverReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_reduceSvipFirstRights_args {
	
	static $_TSPEC;
	public $svipFirstRightsReduceOrRecoverReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'svipFirstRightsReduceOrRecoverReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['svipFirstRightsReduceOrRecoverReq'])){
				
				$this->svipFirstRightsReduceOrRecoverReq = $vals['svipFirstRightsReduceOrRecoverReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->svipFirstRightsReduceOrRecoverReq = new \com\vip\svip\osp\service\SvipFirstRightsReduceOrRecoverReq();
			$this->svipFirstRightsReduceOrRecoverReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('svipFirstRightsReduceOrRecoverReq');
		
		if (!is_object($this->svipFirstRightsReduceOrRecoverReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->svipFirstRightsReduceOrRecoverReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_rejoinTencentMember_args {
	
	static $_TSPEC;
	public $serial = null;
	public $admin = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serial'
			),
			2 => array(
			'var' => 'admin'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serial'])){
				
				$this->serial = $vals['serial'];
			}
			
			
			if (isset($vals['admin'])){
				
				$this->admin = $vals['admin'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->serial);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->admin);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('serial');
		$xfer += $output->writeString($this->serial);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('admin');
		$xfer += $output->writeString($this->admin);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_repairData_args {
	
	static $_TSPEC;
	public $config = null;
	public $bizType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'config'
			),
			2 => array(
			'var' => 'bizType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['config'])){
				
				$this->config = $vals['config'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->config);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->bizType);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->config !== null) {
			
			$xfer += $output->writeFieldBegin('config');
			$xfer += $output->writeString($this->config);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeString($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_resetCanceledPayMember_args {
	
	static $_TSPEC;
	public $userId = null;
	public $source = null;
	public $uniqueCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'source'
			),
			3 => array(
			'var' => 'uniqueCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['uniqueCode'])){
				
				$this->uniqueCode = $vals['uniqueCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->source);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->uniqueCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uniqueCode !== null) {
			
			$xfer += $output->writeFieldBegin('uniqueCode');
			$xfer += $output->writeString($this->uniqueCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_retryFirstOpenRightsUdpFlow_args {
	
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




class SvipOspServiceV2_retryOthersOperateRecord_args {
	
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




class SvipOspServiceV2_retryProcessGifts_args {
	
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




class SvipOspServiceV2_retrySendMsgToEbs_args {
	
	static $_TSPEC;
	public $msgIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'msgIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['msgIds'])){
				
				$this->msgIds = $vals['msgIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->msgIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->msgIds[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('msgIds');
		
		if (!is_array($this->msgIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->msgIds as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_retrySvipExceptionLog_args {
	
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




class SvipOspServiceV2_retrySvipOperate_args {
	
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




class SvipOspServiceV2_scrapeAction_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\ScrapeActionRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_searchSvipTXHistory_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\SearchSvipHistoryRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_sendSaveMoneyRemindSms_args {
	
	static $_TSPEC;
	public $userId = null;
	public $startDate = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'startDate'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['startDate'])){
				
				$this->startDate = $vals['startDate'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->startDate);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('startDate');
		$xfer += $output->writeI64($this->startDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_sendSvipFirstRightsExpireSms_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_setMonthCardLogoutStatus_args {
	
	static $_TSPEC;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_specialMemberTrySvip_args {
	
	static $_TSPEC;
	public $header = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\svip\osp\service\SimpleRequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_startBeforePayAutoPay_args {
	
	static $_TSPEC;
	public $whiteList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'whiteList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['whiteList'])){
				
				$this->whiteList = $vals['whiteList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->whiteList);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->whiteList !== null) {
			
			$xfer += $output->writeFieldBegin('whiteList');
			$xfer += $output->writeString($this->whiteList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_startBeforePayAutoPayRetry_args {
	
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




class SvipOspServiceV2_startBeforePayPreAutoPay_args {
	
	static $_TSPEC;
	public $whiteList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'whiteList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['whiteList'])){
				
				$this->whiteList = $vals['whiteList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->whiteList);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->whiteList !== null) {
			
			$xfer += $output->writeFieldBegin('whiteList');
			$xfer += $output->writeString($this->whiteList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_startBeforePayPreAutoPayRetry_args {
	
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




class SvipOspServiceV2_svipAutoPayNoticePayStatus_args {
	
	static $_TSPEC;
	public $userId = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
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




class SvipOspServiceV2_svipCompensateForCommon_args {
	
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
			
			
			$this->param = new \com\vip\svip\osp\service\SvipCompensateParam();
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




class SvipOspServiceV2_svipCompensateForCommonForBackground_args {
	
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
			
			
			$this->param = new \com\vip\svip\osp\service\SvipCompensateParam();
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




class SvipOspServiceV2_svipRightsSendRegisterCode_args {
	
	static $_TSPEC;
	public $phone = null;
	public $actCode = null;
	public $rightsCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'phone'
			),
			3 => array(
			'var' => 'actCode'
			),
			4 => array(
			'var' => 'rightsCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['rightsCode'])){
				
				$this->rightsCode = $vals['rightsCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->phone);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->rightsCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rightsCode !== null) {
			
			$xfer += $output->writeFieldBegin('rightsCode');
			$xfer += $output->writeString($this->rightsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_svipUserOperate_args {
	
	static $_TSPEC;
	public $info = null;
	public $signCheck = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'info'
			),
			2 => array(
			'var' => 'signCheck'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['info'])){
				
				$this->info = $vals['info'];
			}
			
			
			if (isset($vals['signCheck'])){
				
				$this->signCheck = $vals['signCheck'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->info = new \com\vip\svip\osp\service\SvipUserOperateInfoParam();
			$this->info->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->signCheck = new \com\vip\svip\osp\service\SvipUserOperateSignCheck();
			$this->signCheck->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('info');
		
		if (!is_object($this->info)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->info->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('signCheck');
		
		if (!is_object($this->signCheck)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->signCheck->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_syncCancelResult_args {
	
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




class SvipOspServiceV2_takeFreeSVipLayerRights_args {
	
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




class SvipOspServiceV2_takeFreeSvipRights_args {
	
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




class SvipOspServiceV2_takeOneToManyReward_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_takePackageGift_args {
	
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




class SvipOspServiceV2_takePackageGiftForTest_args {
	
	static $_TSPEC;
	public $userId = null;
	public $ip = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'ip'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ip);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_takeSvipPrize_args {
	
	static $_TSPEC;
	public $actCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_takeSvipPrizeForTest_args {
	
	static $_TSPEC;
	public $userId = null;
	public $actCode = null;
	public $ip = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'actCode'
			),
			3 => array(
			'var' => 'ip'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->actCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ip);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_takeSvipRightsPrize_args {
	
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
			
			
			$this->req = new \com\vip\svip\osp\service\TakeSvipRightsPrizeReq();
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




class SvipOspServiceV2_terminateContract_args {
	
	static $_TSPEC;
	public $contractSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contractSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->contractSn !== null) {
			
			$xfer += $output->writeFieldBegin('contractSn');
			$xfer += $output->writeString($this->contractSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_terminateContractForCSC_args {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	public $reason = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			3 => array(
			'var' => 'reason'
			),
			4 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->reason);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contractSn !== null) {
			
			$xfer += $output->writeFieldBegin('contractSn');
			$xfer += $output->writeString($this->contractSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_testSendMsgToEbs_args {
	
	static $_TSPEC;
	public $msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->msg);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('msg');
		$xfer += $output->writeString($this->msg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_thirdOpenLimitCheck_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\ThirdOpenLimitRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_thirdOpenSvip_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\ThirdOpenSvipRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_txGetSvipToken_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\TxGetTokenRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_txOpenSvip_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\svip\osp\service\TxOpenSvipRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_updateSvipFirstOpenStatus_args {
	
	static $_TSPEC;
	public $userId = null;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_updateUseBeforePayContract_args {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	public $orderSn = null;
	public $status = null;
	public $reason = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'reason'
			),
			6 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->contractSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->status); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->reason);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contractSn !== null) {
			
			$xfer += $output->writeFieldBegin('contractSn');
			$xfer += $output->writeString($this->contractSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_vOrderCallMonthCard_args {
	
	static $_TSPEC;
	public $json = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'json'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['json'])){
				
				$this->json = $vals['json'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->json);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('json');
		$xfer += $output->writeString($this->json);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_vOrderCallSvip_args {
	
	static $_TSPEC;
	public $json = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'json'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['json'])){
				
				$this->json = $vals['json'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->json);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->json !== null) {
			
			$xfer += $output->writeFieldBegin('json');
			$xfer += $output->writeString($this->json);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SvipOspServiceV2_SearchSvipHistory_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\SearchSvipHistoryResult();
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




class SvipOspServiceV2_SvipCompensate_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_SvipCompensateByHand_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_batchCancel_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BatchCancelBaseResult();
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




class SvipOspServiceV2_batchCancelV2_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BatchCancelBaseResult();
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




class SvipOspServiceV2_bindCouponForMonthCard_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_bindCouponForMonthCardForMapi_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_bindTxUserAccount_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_bindVirtualCoupon_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BindBaseResult();
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




class SvipOspServiceV2_brandGiftDetailList_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\BrandGiftItem();
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




class SvipOspServiceV2_buildUserMonthCardModelV1_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\UserMonthCardInfo();
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




class SvipOspServiceV2_buildUserMonthCardModelV2_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\MonthCardUserCoupon();
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




class SvipOspServiceV2_cancelSvipIdentity_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_cancelUserSvipAutoPay_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_checkFreeSVipLayerRightsLimit_result {
	
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




class SvipOspServiceV2_checkFreeSvipRightsLimit_result {
	
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




class SvipOspServiceV2_checkMonthCardLimit_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_checkMonthCardLimitForApp_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\MonthCardLimitResult();
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




class SvipOspServiceV2_checkOneToManyRewardLimit_result {
	
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




class SvipOspServiceV2_checkTxAccLimit_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_checkUserPhone_result {
	
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




class SvipOspServiceV2_checkXmlyRecharge_result {
	
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




class SvipOspServiceV2_cleanUpUseBeforePay_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractBaseResult();
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




class SvipOspServiceV2_closeSvipStartBeforePayContract_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractBaseResult();
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




class SvipOspServiceV2_closeSvipStartBeforePayContractByUser_result {
	
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




class SvipOspServiceV2_compensateTxVideo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_createCaptchaFlow_result {
	
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




class SvipOspServiceV2_createCaptchaFlowByOneToMany_result {
	
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




class SvipOspServiceV2_createSubscribe_result {
	
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




class SvipOspServiceV2_createSvipStartBeforePayContract_result {
	
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




class SvipOspServiceV2_createThirdSvipToken_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ThirdCreatSvipTokenResponse();
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




class SvipOspServiceV2_createUserSvipAutoPayContract_result {
	
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




class SvipOspServiceV2_createUserUseBeforePayContract_result {
	
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




class SvipOspServiceV2_dingDongdecryptMobile_result {
	
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




class SvipOspServiceV2_doCancelJob_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_doCancelSvipUser_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_draw_result {
	
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




class SvipOspServiceV2_existNoCloseStartBeforePayContract_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipStartBeforePayJudgeResult();
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




class SvipOspServiceV2_existTakeAvailableRights_result {
	
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




class SvipOspServiceV2_getBindAccountInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\AccountInfoResult();
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




class SvipOspServiceV2_getBrandGiftIdList_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BrandGiftIdResult();
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




class SvipOspServiceV2_getBuyLimitResult_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BuyLimitResult();
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




class SvipOspServiceV2_getGoodsIdByPickNo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetGoodsIdByPickNoResult();
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




class SvipOspServiceV2_getGroupValuesConf_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\GroupValues();
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




class SvipOspServiceV2_getMonthCardInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\MonthCardInfoResult();
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




class SvipOspServiceV2_getMonthCardInfoByActCode_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\MonthCardInfo();
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




class SvipOspServiceV2_getMonthCardStatusForLogout_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_getMonthCardUserJoinedInfoToCustomer_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\MonthCardUserJoinedResult();
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




class SvipOspServiceV2_getOneToManyActInfo_result {
	
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




class SvipOspServiceV2_getOneToManyJoinInfo_result {
	
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




class SvipOspServiceV2_getOpGoodsDetailList_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetOpGoodsDetailResult();
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




class SvipOspServiceV2_getOpGoodsIds_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetOpGoodsIdResult();
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




class SvipOspServiceV2_getOrderRefundAmount_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\OrderRefundAmountModel();
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




class SvipOspServiceV2_getPackageGiftInfo_result {
	
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




class SvipOspServiceV2_getPackageGiftInfoForTest_result {
	
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




class SvipOspServiceV2_getPmsPriceByProductId_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BrandGoodsPriceResult();
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




class SvipOspServiceV2_getStartBeforePayContractListByUid_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractQueryResult();
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




class SvipOspServiceV2_getSubscribeNum_result {
	
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




class SvipOspServiceV2_getSumCount_result {
	
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




class SvipOspServiceV2_getSvipAutoPayContractForCSC_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\SvipAutoPayContractOrderInfo();
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




class SvipOspServiceV2_getSvipBindInfo_result {
	
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




class SvipOspServiceV2_getSvipBindInfoByOrderSn_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\SvipBindInfoV2();
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




class SvipOspServiceV2_getSvipBindInfoByUserId_result {
	
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
					
					$elem1 = new \com\vip\svip\osp\service\SvipBindInfo();
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




class SvipOspServiceV2_getSvipEffectivepFirstRightsActivity_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipEffectiveFirstRightsActivity();
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




class SvipOspServiceV2_getSvipEquityInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\EquityBaseInfoResult();
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




class SvipOspServiceV2_getSvipEquityInfoForShop_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\EquityBaseInfoResult();
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




class SvipOspServiceV2_getSvipFirstRightsActivityInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipFirstRightsActivityResult();
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




class SvipOspServiceV2_getSvipGoodsByMid_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetSvipGoodsResult();
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




class SvipOspServiceV2_getSvipGoodsDefaultPrice_result {
	
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




class SvipOspServiceV2_getSvipGoodsDetail_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetSvipGoodsDetailResult();
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




class SvipOspServiceV2_getSvipGoodsInfoForOsp_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipGoodsInfoOspResult();
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




class SvipOspServiceV2_getSvipGoodsinfo_result {
	
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




class SvipOspServiceV2_getSvipInfo4AppClub_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetSvipInfo4AppClubResult();
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




class SvipOspServiceV2_getSvipMainInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\KTBaseInfoResult();
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




class SvipOspServiceV2_getSvipOpenHistoryList_result {
	
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




class SvipOspServiceV2_getSvipPrizeInfo_result {
	
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




class SvipOspServiceV2_getSvipPrizeInfoForTest_result {
	
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




class SvipOspServiceV2_getSvipRightsActInfo_result {
	
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




class SvipOspServiceV2_getSvipRightsInfo_result {
	
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




class SvipOspServiceV2_getSvipRightsInfoWithoutCheck_result {
	
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




class SvipOspServiceV2_getSvipRightsJoinRecordById_result {
	
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




class SvipOspServiceV2_getSvipRightsJoinRecordList_result {
	
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




class SvipOspServiceV2_getSvipStartBeforePayContractByContractSn_result {
	
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




class SvipOspServiceV2_getSvipStartBeforePayContractForFront_result {
	
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




class SvipOspServiceV2_getSvipStartBeforePayContractForOsp_result {
	
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




class SvipOspServiceV2_getSvipStartBeforePayTotalSavedMoney_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetTotalSavedMoneyResult();
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




class SvipOspServiceV2_getSvipState_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipStateVo();
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




class SvipOspServiceV2_getSvipUserHealth_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipUserHealthResp();
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




class SvipOspServiceV2_getSvipUserInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipUserLimitStateResp();
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




class SvipOspServiceV2_getSvipUserStatusHistoryList_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\UserSvipStatusQueryResult();
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




class SvipOspServiceV2_getSvipUserStatusHistoryListForFront_result {
	
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




class SvipOspServiceV2_getTencentVipSvipCardInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\TencentSvipGoodsInfo();
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




class SvipOspServiceV2_getTheTimeSvipPrice_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetTheTimeSvipPriceResult();
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




class SvipOspServiceV2_getThirdAccountInfoByOpenId_result {
	
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




class SvipOspServiceV2_getThirdAccountInfoByUnionLogin_result {
	
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




class SvipOspServiceV2_getUnPayOrderInfo_result {
	
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




class SvipOspServiceV2_getUnPayOrderInfoForMonthCard_result {
	
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




class SvipOspServiceV2_getUnionSvipGoodsInfo_result {
	
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




class SvipOspServiceV2_getUseBeforePayOrderList_result {
	
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




class SvipOspServiceV2_getUserActInfoToCustomer_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\UserActInfoToCustomer();
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




class SvipOspServiceV2_getUserAttendInfo_result {
	
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




class SvipOspServiceV2_getUserLastestMonthCard_result {
	
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
					
					$elem0 = new \com\vip\svip\osp\service\UserLatestMonthCardResult();
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




class SvipOspServiceV2_getUserMobileEncrypt_result {
	
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




class SvipOspServiceV2_getUserMonthCardAbacusResult_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\UserMonthCardAbacusResult();
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




class SvipOspServiceV2_getUserMonthCardForVipShop_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\UserMonthCardAbacusResult();
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




class SvipOspServiceV2_getUserMonthCardResultForNova_result {
	
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




class SvipOspServiceV2_getUserRightsLatestMobile_result {
	
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




class SvipOspServiceV2_getUserRightsSavedInfo_result {
	
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




class SvipOspServiceV2_getUserSubscribeInfo_result {
	
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




class SvipOspServiceV2_getUserSvipAutoPayContractForFront_result {
	
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




class SvipOspServiceV2_getUserSvipAutoPayContractForOsp_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GetSvipAutoPayResult();
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




class SvipOspServiceV2_getUserSvipFirstRightsRecord_result {
	
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




class SvipOspServiceV2_getUserSvipRightsJoinRecordList_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipActRightsJoinRecordResult();
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




class SvipOspServiceV2_getUserSvipRightsList_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipActRightsResult();
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




class SvipOspServiceV2_getUserUseBeforePayContract_result {
	
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




class SvipOspServiceV2_getUserUseBeforePayContractByUid_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\UseBeforePayContractInfoResult();
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




class SvipOspServiceV2_getUserUseBeforePayContractForCSC_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\UserUseBeforePayContractInfoForCSC();
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




class SvipOspServiceV2_getUserUseBeforePayContractForFront_result {
	
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




class SvipOspServiceV2_giveUpSvipRights_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\GiveUpSvipRightsResult();
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




class SvipOspServiceV2_healthCheck_result {
	
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




class SvipOspServiceV2_isCancelSvipStartBeforePayContractByUser_result {
	
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




class SvipOspServiceV2_isLimitPurchase_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BuyLimitState();
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




class SvipOspServiceV2_isSvipBanArea_result {
	
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




class SvipOspServiceV2_isSvipBuyLimit_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BuyLimitResult();
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




class SvipOspServiceV2_isSvipLimitUser_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BuyLimitState();
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




class SvipOspServiceV2_isSvipLimitUserByPhone_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BuyLimitState();
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




class SvipOspServiceV2_isSvipStartBeforePayLimit_result {
	
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




class SvipOspServiceV2_isUserBeforePayLimit_result {
	
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




class SvipOspServiceV2_isWxuidEqPayuid_result {
	
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




class SvipOspServiceV2_joinSvipForTencentVideoSide_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\DoubleSvipCreateResponse();
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




class SvipOspServiceV2_joinTencentVideoMemberAtVipSide_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_kugouDoubleVerify_result {
	
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




class SvipOspServiceV2_mobileOpenSvip_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ThirdSvipOpenResponse();
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




class SvipOspServiceV2_notifyCloseContractUserToPay_result {
	
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




class SvipOspServiceV2_notifyFireContractUserToPay_result {
	
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




class SvipOspServiceV2_notifyUserWillDeduct_result {
	
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




class SvipOspServiceV2_offlineChannelTrySvip_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_oneToManyLimitCheck_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ThirdOpenLimitResponse();
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




class SvipOspServiceV2_oneToManyLimitCheckForFront_result {
	
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




class SvipOspServiceV2_openFreeMonthCardForNova_result {
	
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




class SvipOspServiceV2_openLimitCheck_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BuyLimitResult();
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




class SvipOspServiceV2_openOneToManyForThirdComponent_result {
	
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




class SvipOspServiceV2_openSvipStartBeforePayContract_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractBaseResult();
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




class SvipOspServiceV2_openSvipUseBeforePayContract_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractBaseResult();
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




class SvipOspServiceV2_openUserSvipAutoPay_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_ospCheckFreeSvipRightsLimit_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\CheckFreeSvipRightsResult();
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




class SvipOspServiceV2_ospGetPrizeActInfoWithoutCheck_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipPrizeActInfoBaseResult();
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




class SvipOspServiceV2_ospGetSvipPrizeInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipPrizeActInfoBaseResult();
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




class SvipOspServiceV2_ospTakeSvipPrize_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipTakePrizeBaseResult();
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




class SvipOspServiceV2_prepareDoubleSvipAccess_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\DoubleSvipStatus();
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




class SvipOspServiceV2_queryNotice_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipNoticeResult();
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




class SvipOspServiceV2_queryOneToManyQMusicOrderInfoToCustomer_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\QQMusicStatusResult();
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




class SvipOspServiceV2_queryQQMusicStatus_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\QQMusicStatusResult();
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




class SvipOspServiceV2_querySavedAmount_result {
	
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




class SvipOspServiceV2_querySvipCouponInfo_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipCouponDto();
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




class SvipOspServiceV2_queryUnPayAutoOrderForNova_result {
	
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




class SvipOspServiceV2_queryUnPayOrderUseVirtualCoupon_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\OrderInfoModelResult();
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




class SvipOspServiceV2_queryUserSvipSaveOrderList_result {
	
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




class SvipOspServiceV2_queryUserSvipSaveOrderListByContractSn_result {
	
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




class SvipOspServiceV2_queryUserSvipSaveOrderListForOsp_result {
	
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




class SvipOspServiceV2_queryVirtualCoupon_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\VirtualCouponActiveModelResult();
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




class SvipOspServiceV2_receivePrize_result {
	
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




class SvipOspServiceV2_receiveSvipCoupon_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipCouponReceiveResp();
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




class SvipOspServiceV2_receiveSvipCouponImportIdl_result {
	
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




class SvipOspServiceV2_recoverSvipFirstRights_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ReduceOrRecoverRightsResult();
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




class SvipOspServiceV2_reduceSvipFirstRights_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ReduceOrRecoverRightsResult();
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




class SvipOspServiceV2_rejoinTencentMember_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_repairData_result {
	
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




class SvipOspServiceV2_resetCanceledPayMember_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_retryFirstOpenRightsUdpFlow_result {
	
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




class SvipOspServiceV2_retryOthersOperateRecord_result {
	
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




class SvipOspServiceV2_retryProcessGifts_result {
	
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




class SvipOspServiceV2_retrySendMsgToEbs_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_retrySvipExceptionLog_result {
	
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




class SvipOspServiceV2_retrySvipOperate_result {
	
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




class SvipOspServiceV2_scrapeAction_result {
	
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




class SvipOspServiceV2_searchSvipTXHistory_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipTXBindHistoryResult();
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




class SvipOspServiceV2_sendSaveMoneyRemindSms_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractBaseResult();
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




class SvipOspServiceV2_sendSvipFirstRightsExpireSms_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_setMonthCardLogoutStatus_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_specialMemberTrySvip_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_startBeforePayAutoPay_result {
	
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




class SvipOspServiceV2_startBeforePayAutoPayRetry_result {
	
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




class SvipOspServiceV2_startBeforePayPreAutoPay_result {
	
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




class SvipOspServiceV2_startBeforePayPreAutoPayRetry_result {
	
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




class SvipOspServiceV2_svipAutoPayNoticePayStatus_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_svipCompensateForCommon_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_svipCompensateForCommonForBackground_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_svipRightsSendRegisterCode_result {
	
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




class SvipOspServiceV2_svipUserOperate_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipOperateResult();
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




class SvipOspServiceV2_syncCancelResult_result {
	
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




class SvipOspServiceV2_takeFreeSVipLayerRights_result {
	
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




class SvipOspServiceV2_takeFreeSvipRights_result {
	
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




class SvipOspServiceV2_takeOneToManyReward_result {
	
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




class SvipOspServiceV2_takePackageGift_result {
	
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




class SvipOspServiceV2_takePackageGiftForTest_result {
	
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




class SvipOspServiceV2_takeSvipPrize_result {
	
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




class SvipOspServiceV2_takeSvipPrizeForTest_result {
	
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




class SvipOspServiceV2_takeSvipRightsPrize_result {
	
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




class SvipOspServiceV2_terminateContract_result {
	
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




class SvipOspServiceV2_terminateContractForCSC_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_testSendMsgToEbs_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_thirdOpenLimitCheck_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ThirdOpenLimitResponse();
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




class SvipOspServiceV2_thirdOpenSvip_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ThirdSvipOpenResponse();
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




class SvipOspServiceV2_txGetSvipToken_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\TxGetSvipTokenResult();
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




class SvipOspServiceV2_txOpenSvip_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\DoubleSvipCreateResponse();
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




class SvipOspServiceV2_updateSvipFirstOpenStatus_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_updateUseBeforePayContract_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\ContractBaseResult();
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




class SvipOspServiceV2_vOrderCallMonthCard_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\BaseResult();
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




class SvipOspServiceV2_vOrderCallSvip_result {
	
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
			
			
			$this->success = new \com\vip\svip\osp\service\SvipOperateResult();
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




?>