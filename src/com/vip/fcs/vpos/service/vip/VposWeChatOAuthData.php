<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\vip;

class VposWeChatOAuthData {
	
	static $_TSPEC;
	public $accessToken = null;
	public $expiresIn = null;
	public $refreshToken = null;
	public $openid = null;
	public $scope = null;
	public $unionid = null;
	public $errcode = null;
	public $errmsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'accessToken'
			),
			2 => array(
			'var' => 'expiresIn'
			),
			3 => array(
			'var' => 'refreshToken'
			),
			4 => array(
			'var' => 'openid'
			),
			5 => array(
			'var' => 'scope'
			),
			6 => array(
			'var' => 'unionid'
			),
			7 => array(
			'var' => 'errcode'
			),
			8 => array(
			'var' => 'errmsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['accessToken'])){
				
				$this->accessToken = $vals['accessToken'];
			}
			
			
			if (isset($vals['expiresIn'])){
				
				$this->expiresIn = $vals['expiresIn'];
			}
			
			
			if (isset($vals['refreshToken'])){
				
				$this->refreshToken = $vals['refreshToken'];
			}
			
			
			if (isset($vals['openid'])){
				
				$this->openid = $vals['openid'];
			}
			
			
			if (isset($vals['scope'])){
				
				$this->scope = $vals['scope'];
			}
			
			
			if (isset($vals['unionid'])){
				
				$this->unionid = $vals['unionid'];
			}
			
			
			if (isset($vals['errcode'])){
				
				$this->errcode = $vals['errcode'];
			}
			
			
			if (isset($vals['errmsg'])){
				
				$this->errmsg = $vals['errmsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VposWeChatOAuthData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("accessToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessToken);
				
			}
			
			
			
			
			if ("expiresIn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->expiresIn); 
				
			}
			
			
			
			
			if ("refreshToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refreshToken);
				
			}
			
			
			
			
			if ("openid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openid);
				
			}
			
			
			
			
			if ("scope" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scope);
				
			}
			
			
			
			
			if ("unionid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unionid);
				
			}
			
			
			
			
			if ("errcode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->errcode); 
				
			}
			
			
			
			
			if ("errmsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errmsg);
				
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
		
		if($this->accessToken !== null) {
			
			$xfer += $output->writeFieldBegin('accessToken');
			$xfer += $output->writeString($this->accessToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expiresIn !== null) {
			
			$xfer += $output->writeFieldBegin('expiresIn');
			$xfer += $output->writeI32($this->expiresIn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refreshToken !== null) {
			
			$xfer += $output->writeFieldBegin('refreshToken');
			$xfer += $output->writeString($this->refreshToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openid !== null) {
			
			$xfer += $output->writeFieldBegin('openid');
			$xfer += $output->writeString($this->openid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scope !== null) {
			
			$xfer += $output->writeFieldBegin('scope');
			$xfer += $output->writeString($this->scope);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unionid !== null) {
			
			$xfer += $output->writeFieldBegin('unionid');
			$xfer += $output->writeString($this->unionid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errcode !== null) {
			
			$xfer += $output->writeFieldBegin('errcode');
			$xfer += $output->writeI32($this->errcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errmsg !== null) {
			
			$xfer += $output->writeFieldBegin('errmsg');
			$xfer += $output->writeString($this->errmsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>