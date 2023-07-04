<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;
interface UnionUserServiceIf{
	
	
	public function checkUser(\com\vip\adp\api\open\service\CheckUserRequest $request);
	
	public function checkUserWithOauth(\com\vip\adp\api\open\service\CheckUserRequest $request);
	
	public function healthCheck();
	
	public function userVerify(\com\vip\adp\api\open\service\UserVerifyQuery $request);
	
	public function userVerifyWithOauth(\com\vip\adp\api\open\service\UserVerifyQuery $request);
	
}

class _UnionUserServiceClient extends \Osp\Base\OspStub implements \com\vip\adp\api\open\service\UnionUserServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.adp.api.open.service.UnionUserService", "1.0.0");
	}
	
	
	public function checkUser(\com\vip\adp\api\open\service\CheckUserRequest $request){
		
		$this->send_checkUser( $request);
		return $this->recv_checkUser();
	}
	
	public function send_checkUser(\com\vip\adp\api\open\service\CheckUserRequest $request){
		
		$this->initInvocation("checkUser");
		$args = new \com\vip\adp\api\open\service\UnionUserService_checkUser_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_checkUser(){
		
		$result = new \com\vip\adp\api\open\service\UnionUserService_checkUser_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkUserWithOauth(\com\vip\adp\api\open\service\CheckUserRequest $request){
		
		$this->send_checkUserWithOauth( $request);
		return $this->recv_checkUserWithOauth();
	}
	
	public function send_checkUserWithOauth(\com\vip\adp\api\open\service\CheckUserRequest $request){
		
		$this->initInvocation("checkUserWithOauth");
		$args = new \com\vip\adp\api\open\service\UnionUserService_checkUserWithOauth_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_checkUserWithOauth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUserService_checkUserWithOauth_result();
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
		$args = new \com\vip\adp\api\open\service\UnionUserService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\adp\api\open\service\UnionUserService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function userVerify(\com\vip\adp\api\open\service\UserVerifyQuery $request){
		
		$this->send_userVerify( $request);
		return $this->recv_userVerify();
	}
	
	public function send_userVerify(\com\vip\adp\api\open\service\UserVerifyQuery $request){
		
		$this->initInvocation("userVerify");
		$args = new \com\vip\adp\api\open\service\UnionUserService_userVerify_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_userVerify(){
		
		$result = new \com\vip\adp\api\open\service\UnionUserService_userVerify_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function userVerifyWithOauth(\com\vip\adp\api\open\service\UserVerifyQuery $request){
		
		$this->send_userVerifyWithOauth( $request);
		return $this->recv_userVerifyWithOauth();
	}
	
	public function send_userVerifyWithOauth(\com\vip\adp\api\open\service\UserVerifyQuery $request){
		
		$this->initInvocation("userVerifyWithOauth");
		$args = new \com\vip\adp\api\open\service\UnionUserService_userVerifyWithOauth_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_userVerifyWithOauth(){
		
		$result = new \com\vip\adp\api\open\service\UnionUserService_userVerifyWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class UnionUserService_checkUser_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\CheckUserRequest();
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




class UnionUserService_checkUserWithOauth_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\CheckUserRequest();
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




class UnionUserService_healthCheck_args {
	
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




class UnionUserService_userVerify_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\UserVerifyQuery();
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




class UnionUserService_userVerifyWithOauth_args {
	
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
			
			
			$this->request = new \com\vip\adp\api\open\service\UserVerifyQuery();
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




class UnionUserService_checkUser_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\CheckUserResponse();
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




class UnionUserService_checkUserWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\CheckUserResponse();
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




class UnionUserService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
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




class UnionUserService_userVerify_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UserVerifyResponse();
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




class UnionUserService_userVerifyWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\adp\api\open\service\UserVerifyResponse();
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