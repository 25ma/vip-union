<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\oauth;

class AuthorizeCodeRequest {
	
	static $_TSPEC;
	public $vip_client_id = null;
	public $vip_access_token = null;
	public $client_id = null;
	public $redirect_url = null;
	public $response_type = null;
	public $state = null;
	public $scope = null;
	public $business_type = null;
	public $business_value = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vip_client_id'
			),
			2 => array(
			'var' => 'vip_access_token'
			),
			3 => array(
			'var' => 'client_id'
			),
			4 => array(
			'var' => 'redirect_url'
			),
			5 => array(
			'var' => 'response_type'
			),
			6 => array(
			'var' => 'state'
			),
			7 => array(
			'var' => 'scope'
			),
			8 => array(
			'var' => 'business_type'
			),
			9 => array(
			'var' => 'business_value'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vip_client_id'])){
				
				$this->vip_client_id = $vals['vip_client_id'];
			}
			
			
			if (isset($vals['vip_access_token'])){
				
				$this->vip_access_token = $vals['vip_access_token'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['redirect_url'])){
				
				$this->redirect_url = $vals['redirect_url'];
			}
			
			
			if (isset($vals['response_type'])){
				
				$this->response_type = $vals['response_type'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['scope'])){
				
				$this->scope = $vals['scope'];
			}
			
			
			if (isset($vals['business_type'])){
				
				$this->business_type = $vals['business_type'];
			}
			
			
			if (isset($vals['business_value'])){
				
				$this->business_value = $vals['business_value'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AuthorizeCodeRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vip_client_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_client_id);
				
			}
			
			
			
			
			if ("vip_access_token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_access_token);
				
			}
			
			
			
			
			if ("client_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client_id);
				
			}
			
			
			
			
			if ("redirect_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redirect_url);
				
			}
			
			
			
			
			if ("response_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->response_type);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("scope" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scope);
				
			}
			
			
			
			
			if ("business_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->business_type); 
				
			}
			
			
			
			
			if ("business_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->business_value);
				
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
		
		$xfer += $output->writeFieldBegin('vip_client_id');
		$xfer += $output->writeString($this->vip_client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vip_access_token');
		$xfer += $output->writeString($this->vip_access_token);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->redirect_url !== null) {
			
			$xfer += $output->writeFieldBegin('redirect_url');
			$xfer += $output->writeString($this->redirect_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('response_type');
		$xfer += $output->writeString($this->response_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scope !== null) {
			
			$xfer += $output->writeFieldBegin('scope');
			$xfer += $output->writeString($this->scope);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->business_type !== null) {
			
			$xfer += $output->writeFieldBegin('business_type');
			$xfer += $output->writeI32($this->business_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->business_value !== null) {
			
			$xfer += $output->writeFieldBegin('business_value');
			$xfer += $output->writeString($this->business_value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>