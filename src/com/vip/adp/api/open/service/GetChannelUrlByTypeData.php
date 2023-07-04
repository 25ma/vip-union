<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GetChannelUrlByTypeData {
	
	static $_TSPEC;
	public $shortUrl = null;
	public $shortLink = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shortUrl'
			),
			2 => array(
			'var' => 'shortLink'
			),
			3 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shortUrl'])){
				
				$this->shortUrl = $vals['shortUrl'];
			}
			
			
			if (isset($vals['shortLink'])){
				
				$this->shortLink = $vals['shortLink'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetChannelUrlByTypeData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shortUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortUrl);
				
			}
			
			
			
			
			if ("shortLink" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortLink);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->shortUrl !== null) {
			
			$xfer += $output->writeFieldBegin('shortUrl');
			$xfer += $output->writeString($this->shortUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shortLink !== null) {
			
			$xfer += $output->writeFieldBegin('shortLink');
			$xfer += $output->writeString($this->shortLink);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>