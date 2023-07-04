<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GoodsInfoByGoodsIdsRequest {
	
	static $_TSPEC;
	public $openId = null;
	public $realCall = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'openId'
			),
			2 => array(
			'var' => 'realCall'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['realCall'])){
				
				$this->realCall = $vals['realCall'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsInfoByGoodsIdsRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("realCall" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->realCall);
				
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
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realCall !== null) {
			
			$xfer += $output->writeFieldBegin('realCall');
			$xfer += $output->writeBool($this->realCall);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>