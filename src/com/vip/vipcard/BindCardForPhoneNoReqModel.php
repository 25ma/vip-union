<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class BindCardForPhoneNoReqModel {
	
	static $_TSPEC;
	public $merchant_code = null;
	public $vopAppKey = null;
	public $sign = null;
	public $cardPhoneNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			11 => array(
			'var' => 'merchant_code'
			),
			12 => array(
			'var' => 'vopAppKey'
			),
			13 => array(
			'var' => 'sign'
			),
			14 => array(
			'var' => 'cardPhoneNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['vopAppKey'])){
				
				$this->vopAppKey = $vals['vopAppKey'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
			if (isset($vals['cardPhoneNoList'])){
				
				$this->cardPhoneNoList = $vals['cardPhoneNoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BindCardForPhoneNoReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchant_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchant_code);
				
			}
			
			
			
			
			if ("vopAppKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vopAppKey);
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
			}
			
			
			
			
			if ("cardPhoneNoList" == $schemeField){
				
				$needSkip = false;
				
				$this->cardPhoneNoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vipcard\CardAndPhoneNoModel();
						$elem1->read($input);
						
						$this->cardPhoneNoList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vopAppKey');
		$xfer += $output->writeString($this->vopAppKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sign');
		$xfer += $output->writeString($this->sign);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cardPhoneNoList');
		
		if (!is_array($this->cardPhoneNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->cardPhoneNoList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>