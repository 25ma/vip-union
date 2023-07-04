<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetSuggestVisitHourOptionRequest {
	
	static $_TSPEC;
	public $tmsRequestHeader = null;
	public $orderSn = null;
	public $returnApplyTime = null;
	public $userId = null;
	public $buyerAreaId = null;
	public $buyerAddressEncrypt = null;
	public $saleType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsRequestHeader'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'returnApplyTime'
			),
			4 => array(
			'var' => 'userId'
			),
			5 => array(
			'var' => 'buyerAreaId'
			),
			6 => array(
			'var' => 'buyerAddressEncrypt'
			),
			7 => array(
			'var' => 'saleType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsRequestHeader'])){
				
				$this->tmsRequestHeader = $vals['tmsRequestHeader'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['returnApplyTime'])){
				
				$this->returnApplyTime = $vals['returnApplyTime'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['buyerAreaId'])){
				
				$this->buyerAreaId = $vals['buyerAreaId'];
			}
			
			
			if (isset($vals['buyerAddressEncrypt'])){
				
				$this->buyerAddressEncrypt = $vals['buyerAddressEncrypt'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSuggestVisitHourOptionRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsRequestHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsRequestHeader = new \com\vip\top\carrier\service\TmsRequestHeader();
				$this->tmsRequestHeader->read($input);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("returnApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->returnApplyTime);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("buyerAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAreaId);
				
			}
			
			
			
			
			if ("buyerAddressEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddressEncrypt);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->saleType); 
				
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
		
		$xfer += $output->writeFieldBegin('tmsRequestHeader');
		
		if (!is_object($this->tmsRequestHeader)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tmsRequestHeader->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('returnApplyTime');
		$xfer += $output->writeI64($this->returnApplyTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buyerAreaId');
		$xfer += $output->writeString($this->buyerAreaId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->buyerAddressEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddressEncrypt');
			$xfer += $output->writeString($this->buyerAddressEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('saleType');
		$xfer += $output->writeI32($this->saleType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>