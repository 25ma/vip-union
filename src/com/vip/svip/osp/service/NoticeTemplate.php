<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class NoticeTemplate {
	
	static $_TSPEC;
	public $templateId = null;
	public $showDay = null;
	public $content = null;
	public $url = null;
	public $type = null;
	public $variables = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'templateId'
			),
			2 => array(
			'var' => 'showDay'
			),
			3 => array(
			'var' => 'content'
			),
			4 => array(
			'var' => 'url'
			),
			5 => array(
			'var' => 'type'
			),
			6 => array(
			'var' => 'variables'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['templateId'])){
				
				$this->templateId = $vals['templateId'];
			}
			
			
			if (isset($vals['showDay'])){
				
				$this->showDay = $vals['showDay'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['variables'])){
				
				$this->variables = $vals['variables'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'NoticeTemplate';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("templateId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->templateId); 
				
			}
			
			
			
			
			if ("showDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->showDay); 
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("variables" == $schemeField){
				
				$needSkip = false;
				
				$this->variables = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->variables[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->templateId !== null) {
			
			$xfer += $output->writeFieldBegin('templateId');
			$xfer += $output->writeI64($this->templateId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('showDay');
		$xfer += $output->writeI32($this->showDay);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->content !== null) {
			
			$xfer += $output->writeFieldBegin('content');
			$xfer += $output->writeString($this->content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->url !== null) {
			
			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->variables !== null) {
			
			$xfer += $output->writeFieldBegin('variables');
			
			if (!is_array($this->variables)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->variables as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>