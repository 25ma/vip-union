<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsSaveStorePrinterInfoRequest {
	
	static $_TSPEC;
	public $header = null;
	public $storeId = null;
	public $printerName = null;
	public $printerSetting = null;
	public $versionNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'storeId'
			),
			3 => array(
			'var' => 'printerName'
			),
			4 => array(
			'var' => 'printerSetting'
			),
			5 => array(
			'var' => 'versionNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['printerName'])){
				
				$this->printerName = $vals['printerName'];
			}
			
			
			if (isset($vals['printerSetting'])){
				
				$this->printerSetting = $vals['printerSetting'];
			}
			
			
			if (isset($vals['versionNum'])){
				
				$this->versionNum = $vals['versionNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsSaveStorePrinterInfoRequest';
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
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("printerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->printerName);
				
			}
			
			
			
			
			if ("printerSetting" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->printerSetting);
				
			}
			
			
			
			
			if ("versionNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->versionNum);
				
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
		
		$xfer += $output->writeFieldBegin('storeId');
		$xfer += $output->writeString($this->storeId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->printerName !== null) {
			
			$xfer += $output->writeFieldBegin('printerName');
			$xfer += $output->writeString($this->printerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('printerSetting');
		$xfer += $output->writeString($this->printerSetting);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->versionNum !== null) {
			
			$xfer += $output->writeFieldBegin('versionNum');
			$xfer += $output->writeString($this->versionNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>