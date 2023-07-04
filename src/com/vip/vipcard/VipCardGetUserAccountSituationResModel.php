<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class VipCardGetUserAccountSituationResModel {
	
	static $_TSPEC;
	public $limitCardMoney = null;
	public $isLimitCardNumber = null;
	public $totalMoney = null;
	public $favourableId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limitCardMoney'
			),
			2 => array(
			'var' => 'isLimitCardNumber'
			),
			3 => array(
			'var' => 'totalMoney'
			),
			4 => array(
			'var' => 'favourableId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limitCardMoney'])){
				
				$this->limitCardMoney = $vals['limitCardMoney'];
			}
			
			
			if (isset($vals['isLimitCardNumber'])){
				
				$this->isLimitCardNumber = $vals['isLimitCardNumber'];
			}
			
			
			if (isset($vals['totalMoney'])){
				
				$this->totalMoney = $vals['totalMoney'];
			}
			
			
			if (isset($vals['favourableId'])){
				
				$this->favourableId = $vals['favourableId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCardGetUserAccountSituationResModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("limitCardMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->limitCardMoney);
				
			}
			
			
			
			
			if ("isLimitCardNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isLimitCardNumber); 
				
			}
			
			
			
			
			if ("totalMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalMoney);
				
			}
			
			
			
			
			if ("favourableId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favourableId);
				
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
		
		$xfer += $output->writeFieldBegin('limitCardMoney');
		$xfer += $output->writeDouble($this->limitCardMoney);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isLimitCardNumber');
		$xfer += $output->writeI32($this->isLimitCardNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalMoney');
		$xfer += $output->writeDouble($this->totalMoney);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('favourableId');
		$xfer += $output->writeString($this->favourableId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>