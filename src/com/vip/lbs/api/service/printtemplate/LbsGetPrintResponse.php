<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsGetPrintResponse {
	
	static $_TSPEC;
	public $header = null;
	public $traceId = null;
	public $templateUrl = null;
	public $printDatas = null;
	public $platformTemplateURL = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'traceId'
			),
			3 => array(
			'var' => 'templateUrl'
			),
			4 => array(
			'var' => 'printDatas'
			),
			5 => array(
			'var' => 'platformTemplateURL'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['traceId'])){
				
				$this->traceId = $vals['traceId'];
			}
			
			
			if (isset($vals['templateUrl'])){
				
				$this->templateUrl = $vals['templateUrl'];
			}
			
			
			if (isset($vals['printDatas'])){
				
				$this->printDatas = $vals['printDatas'];
			}
			
			
			if (isset($vals['platformTemplateURL'])){
				
				$this->platformTemplateURL = $vals['platformTemplateURL'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsGetPrintResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\lbs\api\service\common\LbsApiResponseHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("traceId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->traceId);
				
			}
			
			
			
			
			if ("templateUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateUrl);
				
			}
			
			
			
			
			if ("printDatas" == $schemeField){
				
				$needSkip = false;
				
				$this->printDatas = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\lbs\api\service\printtemplate\PrintDataDTO();
						$elem1->read($input);
						
						$this->printDatas[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("platformTemplateURL" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platformTemplateURL);
				
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
		
		if($this->traceId !== null) {
			
			$xfer += $output->writeFieldBegin('traceId');
			$xfer += $output->writeString($this->traceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateUrl !== null) {
			
			$xfer += $output->writeFieldBegin('templateUrl');
			$xfer += $output->writeString($this->templateUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->printDatas !== null) {
			
			$xfer += $output->writeFieldBegin('printDatas');
			
			if (!is_array($this->printDatas)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->printDatas as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platformTemplateURL !== null) {
			
			$xfer += $output->writeFieldBegin('platformTemplateURL');
			$xfer += $output->writeString($this->platformTemplateURL);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>