<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupDnyShopPreHoldInvForVopResult {
	
	static $_TSPEC;
	public $optResult = null;
	public $prodInvDetail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			101 => array(
			'var' => 'optResult'
			),
			102 => array(
			'var' => 'prodInvDetail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['optResult'])){
				
				$this->optResult = $vals['optResult'];
			}
			
			
			if (isset($vals['prodInvDetail'])){
				
				$this->prodInvDetail = $vals['prodInvDetail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupDnyShopPreHoldInvForVopResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("optResult" == $schemeField){
				
				$needSkip = false;
				
				$this->optResult = new \com\vip\cup\sal\vop\OptResultForVop();
				$this->optResult->read($input);
				
			}
			
			
			
			
			if ("prodInvDetail" == $schemeField){
				
				$needSkip = false;
				
				$this->prodInvDetail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\cup\sal\vop\CupDnyShopProdSkuInvDetailForVop();
						$elem0->read($input);
						
						$this->prodInvDetail[$_size0++] = $elem0;
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
		
		if($this->optResult !== null) {
			
			$xfer += $output->writeFieldBegin('optResult');
			
			if (!is_object($this->optResult)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->optResult->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodInvDetail !== null) {
			
			$xfer += $output->writeFieldBegin('prodInvDetail');
			
			if (!is_array($this->prodInvDetail)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->prodInvDetail as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>