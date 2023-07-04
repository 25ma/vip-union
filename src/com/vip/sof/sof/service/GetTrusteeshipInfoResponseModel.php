<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GetTrusteeshipInfoResponseModel {
	
	static $_TSPEC;
	public $trustStatus = null;
	public $taxInfoStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trustStatus'
			),
			2 => array(
			'var' => 'taxInfoStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trustStatus'])){
				
				$this->trustStatus = $vals['trustStatus'];
			}
			
			
			if (isset($vals['taxInfoStatus'])){
				
				$this->taxInfoStatus = $vals['taxInfoStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTrusteeshipInfoResponseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trustStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trustStatus);
				
			}
			
			
			
			
			if ("taxInfoStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxInfoStatus);
				
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
		
		$xfer += $output->writeFieldBegin('trustStatus');
		$xfer += $output->writeString($this->trustStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('taxInfoStatus');
		$xfer += $output->writeString($this->taxInfoStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>