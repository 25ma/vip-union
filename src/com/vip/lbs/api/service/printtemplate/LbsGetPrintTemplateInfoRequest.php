<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsGetPrintTemplateInfoRequest {
	
	static $_TSPEC;
	public $header = null;
	public $storeTmpId = null;
	public $storeTmpVersion = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'storeTmpId'
			),
			3 => array(
			'var' => 'storeTmpVersion'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['storeTmpId'])){
				
				$this->storeTmpId = $vals['storeTmpId'];
			}
			
			
			if (isset($vals['storeTmpVersion'])){
				
				$this->storeTmpVersion = $vals['storeTmpVersion'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsGetPrintTemplateInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\lbs\api\service\common\LbsApiRequestHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("storeTmpId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeTmpId); 
				
			}
			
			
			
			
			if ("storeTmpVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeTmpVersion); 
				
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
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeTmpId');
		$xfer += $output->writeI64($this->storeTmpId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeTmpVersion');
		$xfer += $output->writeI32($this->storeTmpVersion);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>