<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\oauth;
interface OauthFacadeIf{
	
	
	public function authorizeCode(\com\vip\api\ubc\facade\oauth\AuthorizeCodeRequest $request);
	
	public function getAccessToken( $grant_type, $auth_code, $client_id, $client_secret, $redirect_url);
	
	public function getUserInfo( $client_id, $out_access_token, $open_id);
	
	public function healthCheck();
	
}

class _OauthFacadeClient extends \Osp\Base\OspStub implements \com\vip\api\ubc\facade\oauth\OauthFacadeIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.api.ubc.facade.oauth.OauthFacade", "1.0.0");
	}
	
	
	public function authorizeCode(\com\vip\api\ubc\facade\oauth\AuthorizeCodeRequest $request){
		
		$this->send_authorizeCode( $request);
		return $this->recv_authorizeCode();
	}
	
	public function send_authorizeCode(\com\vip\api\ubc\facade\oauth\AuthorizeCodeRequest $request){
		
		$this->initInvocation("authorizeCode");
		$args = new \com\vip\api\ubc\facade\oauth\OauthFacade_authorizeCode_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_authorizeCode(){
		
		$result = new \com\vip\api\ubc\facade\oauth\OauthFacade_authorizeCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAccessToken( $grant_type, $auth_code, $client_id, $client_secret, $redirect_url){
		
		$this->send_getAccessToken( $grant_type, $auth_code, $client_id, $client_secret, $redirect_url);
		return $this->recv_getAccessToken();
	}
	
	public function send_getAccessToken( $grant_type, $auth_code, $client_id, $client_secret, $redirect_url){
		
		$this->initInvocation("getAccessToken");
		$args = new \com\vip\api\ubc\facade\oauth\OauthFacade_getAccessToken_args();
		
		$args->grant_type = $grant_type;
		
		$args->auth_code = $auth_code;
		
		$args->client_id = $client_id;
		
		$args->client_secret = $client_secret;
		
		$args->redirect_url = $redirect_url;
		
		$this->send_base($args);
	}
	
	public function recv_getAccessToken(){
		
		$result = new \com\vip\api\ubc\facade\oauth\OauthFacade_getAccessToken_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserInfo( $client_id, $out_access_token, $open_id){
		
		$this->send_getUserInfo( $client_id, $out_access_token, $open_id);
		return $this->recv_getUserInfo();
	}
	
	public function send_getUserInfo( $client_id, $out_access_token, $open_id){
		
		$this->initInvocation("getUserInfo");
		$args = new \com\vip\api\ubc\facade\oauth\OauthFacade_getUserInfo_args();
		
		$args->client_id = $client_id;
		
		$args->out_access_token = $out_access_token;
		
		$args->open_id = $open_id;
		
		$this->send_base($args);
	}
	
	public function recv_getUserInfo(){
		
		$result = new \com\vip\api\ubc\facade\oauth\OauthFacade_getUserInfo_result();
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
		$args = new \com\vip\api\ubc\facade\oauth\OauthFacade_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\api\ubc\facade\oauth\OauthFacade_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class OauthFacade_authorizeCode_args {
	
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
			
			
			$this->request = new \com\vip\api\ubc\facade\oauth\AuthorizeCodeRequest();
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




class OauthFacade_getAccessToken_args {
	
	static $_TSPEC;
	public $grant_type = null;
	public $auth_code = null;
	public $client_id = null;
	public $client_secret = null;
	public $redirect_url = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'grant_type'
			),
			2 => array(
			'var' => 'auth_code'
			),
			3 => array(
			'var' => 'client_id'
			),
			4 => array(
			'var' => 'client_secret'
			),
			5 => array(
			'var' => 'redirect_url'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['grant_type'])){
				
				$this->grant_type = $vals['grant_type'];
			}
			
			
			if (isset($vals['auth_code'])){
				
				$this->auth_code = $vals['auth_code'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['client_secret'])){
				
				$this->client_secret = $vals['client_secret'];
			}
			
			
			if (isset($vals['redirect_url'])){
				
				$this->redirect_url = $vals['redirect_url'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->grant_type);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->auth_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->client_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->client_secret);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->redirect_url);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('grant_type');
		$xfer += $output->writeString($this->grant_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('auth_code');
		$xfer += $output->writeString($this->auth_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_secret');
		$xfer += $output->writeString($this->client_secret);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->redirect_url !== null) {
			
			$xfer += $output->writeFieldBegin('redirect_url');
			$xfer += $output->writeString($this->redirect_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OauthFacade_getUserInfo_args {
	
	static $_TSPEC;
	public $client_id = null;
	public $out_access_token = null;
	public $open_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'client_id'
			),
			2 => array(
			'var' => 'out_access_token'
			),
			3 => array(
			'var' => 'open_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['out_access_token'])){
				
				$this->out_access_token = $vals['out_access_token'];
			}
			
			
			if (isset($vals['open_id'])){
				
				$this->open_id = $vals['open_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->client_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->out_access_token);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->open_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('out_access_token');
		$xfer += $output->writeString($this->out_access_token);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('open_id');
		$xfer += $output->writeString($this->open_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OauthFacade_healthCheck_args {
	
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




class OauthFacade_authorizeCode_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\api\ubc\facade\oauth\AuthorizeCodeResponse();
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




class OauthFacade_getAccessToken_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\api\ubc\facade\oauth\GetAccessTokenResponse();
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




class OauthFacade_getUserInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\api\ubc\facade\oauth\GetUserInfoResponse();
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




class OauthFacade_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
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




?>