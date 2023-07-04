<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipFirstRightsReduceOrRecoverReq {
	
	static $_TSPEC;
	public $userId = null;
	public $orderNo = null;
	public $activityCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'orderNo'
			),
			3 => array(
			'var' => 'activityCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['activityCode'])){
				
				$this->activityCode = $vals['activityCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipFirstRightsReduceOrRecoverReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("activityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityCode);
				
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderNo');
		$xfer += $output->writeString($this->orderNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->activityCode !== null) {
			
			$xfer += $output->writeFieldBegin('activityCode');
			$xfer += $output->writeString($this->activityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>