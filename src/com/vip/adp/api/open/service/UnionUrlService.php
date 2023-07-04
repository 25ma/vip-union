<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;
interface UnionUrlServiceIf{
	
	
	public function genByGoodsId( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl,\com\vip\adp\api\open\service\UrlGenByGoodsIdRequest $urlGenByGoodsIdRequest);
	
	public function genByGoodsIdWithOauth( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl,\com\vip\adp\api\open\service\UrlGenByGoodsIdRequest $urlGenByGoodsIdRequest);
	
	public function genByVIPUrl( $urlList, $chanTag, $requestId, $statParam,\com\vip\adp\api\open\service\UrlGenRequest $urlGenRequest);
	
	public function genByVIPUrlForSdk(\com\vip\adp\api\open\service\GenVipUrlRequest $request);
	
	public function genByVIPUrlForSdkWithOauth(\com\vip\adp\api\open\service\GenVipUrlRequest $request);
	
	public function genByVIPUrlWithOauth( $urlList, $chanTag, $requestId, $statParam,\com\vip\adp\api\open\service\UrlGenRequest $urlGenRequest);
	
	public function getChannelUrlByType(\com\vip\adp\api\open\service\GetChannelUrlByTypeRequest $request);
	
	public function getWxCode(\com\vip\adp\api\open\service\WxCodeGenRequest $request);
	
	public function getWxCodeWithOauth(\com\vip\adp\api\open\service\WxCodeGenRequest $request);
	
	public function healthCheck();
	
	public function vipLinkCheck(\com\vip\adp\api\open\service\VipLinkCheckReq $vipLinkCheckReq);
	
	public function vipLinkCheckWithOuth(\com\vip\adp\api\open\service\VipLinkCheckReq $vipLinkCheckReq);
	
}

class _UnionUrlServiceClient extends \Osp\Base\OspStub implements \com\vip\adp\api\open\service\UnionUrlServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.adp.api.open.service.UnionUrlService", "1.3.0");
	}
	
	
	public function genByGoodsId( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl,\com\vip\adp\api\open\service\UrlGenByGoodsIdRequest $urlGenByGoodsIdRequest){
		
		$this->send_genByGoodsId( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl, $urlGenByGoodsIdRequest);
		return $this->recv_genByGoodsId();
	}
	
	public function send_genByGoodsId( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl,\com\vip\adp\api\open\service\UrlGenByGoodsIdRequest $urlGenByGoodsIdRequest){
		
		$this->initInvocation("genByGoodsId");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_genByGoodsId_args();
		
		$args->goodsIdList = $goodsIdList;
		
		$args->chanTag = $chanTag;
		
		$args->requestId = $requestId;
		
		$args->statParam = $statParam;
		
		$args->evokeQuickApp = $evokeQuickApp;
		
		$args->queryExclusiveCoupon = $queryExclusiveCoupon;
		
		$args->genShortUrl = $genShortUrl;
		
		$args->urlGenByGoodsIdRequest = $urlGenByGoodsIdRequest;
		
		$this->send_base($args);
	}
	
	public function recv_genByGoodsId(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_genByGoodsId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function genByGoodsIdWithOauth( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl,\com\vip\adp\api\open\service\UrlGenByGoodsIdRequest $urlGenByGoodsIdRequest){
		
		$this->send_genByGoodsIdWithOauth( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl, $urlGenByGoodsIdRequest);
		return $this->recv_genByGoodsIdWithOauth();
	}
	
	public function send_genByGoodsIdWithOauth( $goodsIdList, $chanTag, $requestId, $statParam, $evokeQuickApp, $queryExclusiveCoupon, $genShortUrl,\com\vip\adp\api\open\service\UrlGenByGoodsIdRequest $urlGenByGoodsIdRequest){
		
		$this->initInvocation("genByGoodsIdWithOauth");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_genByGoodsIdWithOauth_args();
		
		$args->goodsIdList = $goodsIdList;
		
		$args->chanTag = $chanTag;
		
		$args->requestId = $requestId;
		
		$args->statParam = $statParam;
		
		$args->evokeQuickApp = $evokeQuickApp;
		
		$args->queryExclusiveCoupon = $queryExclusiveCoupon;
		
		$args->genShortUrl = $genShortUrl;
		
		$args->urlGenByGoodsIdRequest = $urlGenByGoodsIdRequest;
		
		$this->send_base($args);
	}
	
	public function recv_genByGoodsIdWithOauth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_genByGoodsIdWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function genByVIPUrl( $urlList, $chanTag, $requestId, $statParam,\com\vip\adp\api\open\service\UrlGenRequest $urlGenRequest){
		
		$this->send_genByVIPUrl( $urlList, $chanTag, $requestId, $statParam, $urlGenRequest);
		return $this->recv_genByVIPUrl();
	}
	
	public function send_genByVIPUrl( $urlList, $chanTag, $requestId, $statParam,\com\vip\adp\api\open\service\UrlGenRequest $urlGenRequest){
		
		$this->initInvocation("genByVIPUrl");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrl_args();
		
		$args->urlList = $urlList;
		
		$args->chanTag = $chanTag;
		
		$args->requestId = $requestId;
		
		$args->statParam = $statParam;
		
		$args->urlGenRequest = $urlGenRequest;
		
		$this->send_base($args);
	}
	
	public function recv_genByVIPUrl(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrl_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function genByVIPUrlForSdk(\com\vip\adp\api\open\service\GenVipUrlRequest $request){
		
		$this->send_genByVIPUrlForSdk( $request);
		return $this->recv_genByVIPUrlForSdk();
	}
	
	public function send_genByVIPUrlForSdk(\com\vip\adp\api\open\service\GenVipUrlRequest $request){
		
		$this->initInvocation("genByVIPUrlForSdk");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrlForSdk_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_genByVIPUrlForSdk(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrlForSdk_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function genByVIPUrlForSdkWithOauth(\com\vip\adp\api\open\service\GenVipUrlRequest $request){
		
		$this->send_genByVIPUrlForSdkWithOauth( $request);
		return $this->recv_genByVIPUrlForSdkWithOauth();
	}
	
	public function send_genByVIPUrlForSdkWithOauth(\com\vip\adp\api\open\service\GenVipUrlRequest $request){
		
		$this->initInvocation("genByVIPUrlForSdkWithOauth");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrlForSdkWithOauth_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_genByVIPUrlForSdkWithOauth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrlForSdkWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function genByVIPUrlWithOauth( $urlList, $chanTag, $requestId, $statParam,\com\vip\adp\api\open\service\UrlGenRequest $urlGenRequest){
		
		$this->send_genByVIPUrlWithOauth( $urlList, $chanTag, $requestId, $statParam, $urlGenRequest);
		return $this->recv_genByVIPUrlWithOauth();
	}
	
	public function send_genByVIPUrlWithOauth( $urlList, $chanTag, $requestId, $statParam,\com\vip\adp\api\open\service\UrlGenRequest $urlGenRequest){
		
		$this->initInvocation("genByVIPUrlWithOauth");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrlWithOauth_args();
		
		$args->urlList = $urlList;
		
		$args->chanTag = $chanTag;
		
		$args->requestId = $requestId;
		
		$args->statParam = $statParam;
		
		$args->urlGenRequest = $urlGenRequest;
		
		$this->send_base($args);
	}
	
	public function recv_genByVIPUrlWithOauth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_genByVIPUrlWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getChannelUrlByType(\com\vip\adp\api\open\service\GetChannelUrlByTypeRequest $request){
		
		$this->send_getChannelUrlByType( $request);
		return $this->recv_getChannelUrlByType();
	}
	
	public function send_getChannelUrlByType(\com\vip\adp\api\open\service\GetChannelUrlByTypeRequest $request){
		
		$this->initInvocation("getChannelUrlByType");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_getChannelUrlByType_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getChannelUrlByType(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_getChannelUrlByType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWxCode(\com\vip\adp\api\open\service\WxCodeGenRequest $request){
		
		$this->send_getWxCode( $request);
		return $this->recv_getWxCode();
	}
	
	public function send_getWxCode(\com\vip\adp\api\open\service\WxCodeGenRequest $request){
		
		$this->initInvocation("getWxCode");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_getWxCode_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getWxCode(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_getWxCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWxCodeWithOauth(\com\vip\adp\api\open\service\WxCodeGenRequest $request){
		
		$this->send_getWxCodeWithOauth( $request);
		return $this->recv_getWxCodeWithOauth();
	}
	
	public function send_getWxCodeWithOauth(\com\vip\adp\api\open\service\WxCodeGenRequest $request){
		
		$this->initInvocation("getWxCodeWithOauth");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_getWxCodeWithOauth_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getWxCodeWithOauth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_getWxCodeWithOauth_result();
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
		$args = new \com\vip\adp\api\open\service\UnionUrlService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vipLinkCheck(\com\vip\adp\api\open\service\VipLinkCheckReq $vipLinkCheckReq){
		
		$this->send_vipLinkCheck( $vipLinkCheckReq);
		return $this->recv_vipLinkCheck();
	}
	
	public function send_vipLinkCheck(\com\vip\adp\api\open\service\VipLinkCheckReq $vipLinkCheckReq){
		
		$this->initInvocation("vipLinkCheck");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_vipLinkCheck_args();
		
		$args->vipLinkCheckReq = $vipLinkCheckReq;
		
		$this->send_base($args);
	}
	
	public function recv_vipLinkCheck(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_vipLinkCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vipLinkCheckWithOuth(\com\vip\adp\api\open\service\VipLinkCheckReq $vipLinkCheckReq){
		
		$this->send_vipLinkCheckWithOuth( $vipLinkCheckReq);
		return $this->recv_vipLinkCheckWithOuth();
	}
	
	public function send_vipLinkCheckWithOuth(\com\vip\adp\api\open\service\VipLinkCheckReq $vipLinkCheckReq){
		
		$this->initInvocation("vipLinkCheckWithOuth");
		$args = new \com\vip\adp\api\open\service\UnionUrlService_vipLinkCheckWithOuth_args();
		
		$args->vipLinkCheckReq = $vipLinkCheckReq;
		
		$this->send_base($args);
	}
	
	public function recv_vipLinkCheckWithOuth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUrlService_vipLinkCheckWithOuth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class UnionUrlService_genByGoodsId_args {
	
	static $_TSPEC;
	public $goodsIdList = null;
	public $chanTag = null;
	public $requestId = null;
	public $statParam = null;
	public $evokeQuickApp = null;
	public $queryExclusiveCoupon = null;
	public $genShortUrl = null;
	public $urlGenByGoodsIdRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsIdList'
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
			'var' => 'evokeQuickApp'
			),
			6 => array(
			'var' => 'queryExclusiveCoupon'
			),
			7 => array(
			'var' => 'genShortUrl'
			),
			8 => array(
			'var' => 'urlGenByGoodsIdRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsIdList'])){
				
				$this->goodsIdList = $vals['goodsIdList'];
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
			
			
			if (isset($vals['evokeQuickApp'])){
				
				$this->evokeQuickApp = $vals['evokeQuickApp'];
			}
			
			
			if (isset($vals['queryExclusiveCoupon'])){
				
				$this->queryExclusiveCoupon = $vals['queryExclusiveCoupon'];
			}
			
			
			if (isset($vals['genShortUrl'])){
				
				$this->genShortUrl = $vals['genShortUrl'];
			}
			
			
			if (isset($vals['urlGenByGoodsIdRequest'])){
				
				$this->urlGenByGoodsIdRequest = $vals['urlGenByGoodsIdRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->goodsIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->goodsIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->chanTag);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->requestId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->statParam);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->evokeQuickApp);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->queryExclusiveCoupon);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->genShortUrl);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->urlGenByGoodsIdRequest = new \com\vip\adp\api\open\service\UrlGenByGoodsIdRequest();
			$this->urlGenByGoodsIdRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('goodsIdList');
		
		if (!is_array($this->goodsIdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->goodsIdList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->statParam !== null) {
			
			$xfer += $output->writeFieldBegin('statParam');
			$xfer += $output->writeString($this->statParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->evokeQuickApp !== null) {
			
			$xfer += $output->writeFieldBegin('evokeQuickApp');
			$xfer += $output->writeBool($this->evokeQuickApp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryExclusiveCoupon !== null) {
			
			$xfer += $output->writeFieldBegin('queryExclusiveCoupon');
			$xfer += $output->writeBool($this->queryExclusiveCoupon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->genShortUrl !== null) {
			
			$xfer += $output->writeFieldBegin('genShortUrl');
			$xfer += $output->writeBool($this->genShortUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->urlGenByGoodsIdRequest !== null) {
			
			$xfer += $output->writeFieldBegin('urlGenByGoodsIdRequest');
			
			if (!is_object($this->urlGenByGoodsIdRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->urlGenByGoodsIdRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionUrlService_genByGoodsIdWithOauth_args {
	
	static $_TSPEC;
	public $goodsIdList = null;
	public $chanTag = null;
	public $requestId = null;
	public $statParam = null;
	public $evokeQuickApp = null;
	public $queryExclusiveCoupon = null;
	public $genShortUrl = null;
	public $urlGenByGoodsIdRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsIdList'
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
			'var' => 'evokeQuickApp'
			),
			6 => array(
			'var' => 'queryExclusiveCoupon'
			),
			7 => array(
			'var' => 'genShortUrl'
			),
			8 => array(
			'var' => 'urlGenByGoodsIdRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsIdList'])){
				
				$this->goodsIdList = $vals['goodsIdList'];
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
			
			
			if (isset($vals['evokeQuickApp'])){
				
				$this->evokeQuickApp = $vals['evokeQuickApp'];
			}
			
			
			if (isset($vals['queryExclusiveCoupon'])){
				
				$this->queryExclusiveCoupon = $vals['queryExclusiveCoupon'];
			}
			
			
			if (isset($vals['genShortUrl'])){
				
				$this->genShortUrl = $vals['genShortUrl'];
			}
			
			
			if (isset($vals['urlGenByGoodsIdRequest'])){
				
				$this->urlGenByGoodsIdRequest = $vals['urlGenByGoodsIdRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->goodsIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->goodsIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->chanTag);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->requestId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->statParam);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->evokeQuickApp);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->queryExclusiveCoupon);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->genShortUrl);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->urlGenByGoodsIdRequest = new \com\vip\adp\api\open\service\UrlGenByGoodsIdRequest();
			$this->urlGenByGoodsIdRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('goodsIdList');
		
		if (!is_array($this->goodsIdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->goodsIdList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->statParam !== null) {
			
			$xfer += $output->writeFieldBegin('statParam');
			$xfer += $output->writeString($this->statParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->evokeQuickApp !== null) {
			
			$xfer += $output->writeFieldBegin('evokeQuickApp');
			$xfer += $output->writeBool($this->evokeQuickApp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryExclusiveCoupon !== null) {
			
			$xfer += $output->writeFieldBegin('queryExclusiveCoupon');
			$xfer += $output->writeBool($this->queryExclusiveCoupon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->genShortUrl !== null) {
			
			$xfer += $output->writeFieldBegin('genShortUrl');
			$xfer += $output->writeBool($this->genShortUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->urlGenByGoodsIdRequest !== null) {
			
			$xfer += $output->writeFieldBegin('urlGenByGoodsIdRequest');
			
			if (!is_object($this->urlGenByGoodsIdRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->urlGenByGoodsIdRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionUrlService_genByVIPUrl_args {
	
	static $_TSPEC;
	public $urlList = null;
	public $chanTag = null;
	public $requestId = null;
	public $statParam = null;
	public $urlGenRequest = null;
	
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
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
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
		
		
		
		
		if(true) {
			
			$input->readString($this->chanTag);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->requestId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->statParam);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->urlGenRequest = new \com\vip\adp\api\open\service\UrlGenRequest();
			$this->urlGenRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
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
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionUrlService_genByVIPUrlForSdk_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\GenVipUrlRequest();
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




class UnionUrlService_genByVIPUrlForSdkWithOauth_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\GenVipUrlRequest();
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




class UnionUrlService_genByVIPUrlWithOauth_args {
	
	static $_TSPEC;
	public $urlList = null;
	public $chanTag = null;
	public $requestId = null;
	public $statParam = null;
	public $urlGenRequest = null;
	
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
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
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
		
		
		
		
		if(true) {
			
			$input->readString($this->chanTag);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->requestId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->statParam);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->urlGenRequest = new \com\vip\adp\api\open\service\UrlGenRequest();
			$this->urlGenRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
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
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionUrlService_getChannelUrlByType_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\GetChannelUrlByTypeRequest();
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




class UnionUrlService_getWxCode_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\WxCodeGenRequest();
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




class UnionUrlService_getWxCodeWithOauth_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\WxCodeGenRequest();
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




class UnionUrlService_healthCheck_args {
	
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




class UnionUrlService_vipLinkCheck_args {
	
	static $_TSPEC;
	public $vipLinkCheckReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vipLinkCheckReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vipLinkCheckReq'])){
				
				$this->vipLinkCheckReq = $vals['vipLinkCheckReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->vipLinkCheckReq = new \com\vip\adp\api\open\service\VipLinkCheckReq();
			$this->vipLinkCheckReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vipLinkCheckReq');
		
		if (!is_object($this->vipLinkCheckReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->vipLinkCheckReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionUrlService_vipLinkCheckWithOuth_args {
	
	static $_TSPEC;
	public $vipLinkCheckReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vipLinkCheckReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vipLinkCheckReq'])){
				
				$this->vipLinkCheckReq = $vals['vipLinkCheckReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->vipLinkCheckReq = new \com\vip\adp\api\open\service\VipLinkCheckReq();
			$this->vipLinkCheckReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vipLinkCheckReq');
		
		if (!is_object($this->vipLinkCheckReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->vipLinkCheckReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionUrlService_genByGoodsId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UrlGenResponse();
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




class UnionUrlService_genByGoodsIdWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UrlGenResponse();
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




class UnionUrlService_genByVIPUrl_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UrlGenResponse();
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




class UnionUrlService_genByVIPUrlForSdk_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UrlGenResponse();
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




class UnionUrlService_genByVIPUrlForSdkWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UrlGenResponse();
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




class UnionUrlService_genByVIPUrlWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UrlGenResponse();
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




class UnionUrlService_getChannelUrlByType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\GetChannelUrlByTypeResponse();
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




class UnionUrlService_getWxCode_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\WxCodeGenResponse();
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




class UnionUrlService_getWxCodeWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\WxCodeGenResponse();
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




class UnionUrlService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
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




class UnionUrlService_vipLinkCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\VipLinkCheckResp();
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




class UnionUrlService_vipLinkCheckWithOuth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\VipLinkCheckResp();
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