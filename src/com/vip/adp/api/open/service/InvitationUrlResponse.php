<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class InvitationUrlResponse {
	
	static $_TSPEC;
	public $invitationUrl = null;
	public $weiXinSmallInvitationPath = null;
	public $weiXinSmallInvitationQrCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'invitationUrl'
			),
			2 => array(
			'var' => 'weiXinSmallInvitationPath'
			),
			3 => array(
			'var' => 'weiXinSmallInvitationQrCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['invitationUrl'])){
				
				$this->invitationUrl = $vals['invitationUrl'];
			}
			
			
			if (isset($vals['weiXinSmallInvitationPath'])){
				
				$this->weiXinSmallInvitationPath = $vals['weiXinSmallInvitationPath'];
			}
			
			
			if (isset($vals['weiXinSmallInvitationQrCode'])){
				
				$this->weiXinSmallInvitationQrCode = $vals['weiXinSmallInvitationQrCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvitationUrlResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("invitationUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invitationUrl);
				
			}
			
			
			
			
			if ("weiXinSmallInvitationPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weiXinSmallInvitationPath);
				
			}
			
			
			
			
			if ("weiXinSmallInvitationQrCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weiXinSmallInvitationQrCode);
				
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
		
		if($this->invitationUrl !== null) {
			
			$xfer += $output->writeFieldBegin('invitationUrl');
			$xfer += $output->writeString($this->invitationUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weiXinSmallInvitationPath !== null) {
			
			$xfer += $output->writeFieldBegin('weiXinSmallInvitationPath');
			$xfer += $output->writeString($this->weiXinSmallInvitationPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weiXinSmallInvitationQrCode !== null) {
			
			$xfer += $output->writeFieldBegin('weiXinSmallInvitationQrCode');
			$xfer += $output->writeString($this->weiXinSmallInvitationQrCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>