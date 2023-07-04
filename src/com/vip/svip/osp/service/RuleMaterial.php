<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class RuleMaterial {
	
	static $_TSPEC;
	public $img = null;
	public $linkType = null;
	public $linkParam = null;
	public $mtips = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'img'
			),
			2 => array(
			'var' => 'linkType'
			),
			3 => array(
			'var' => 'linkParam'
			),
			4 => array(
			'var' => 'mtips'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['img'])){
				
				$this->img = $vals['img'];
			}
			
			
			if (isset($vals['linkType'])){
				
				$this->linkType = $vals['linkType'];
			}
			
			
			if (isset($vals['linkParam'])){
				
				$this->linkParam = $vals['linkParam'];
			}
			
			
			if (isset($vals['mtips'])){
				
				$this->mtips = $vals['mtips'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RuleMaterial';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("img" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->img);
				
			}
			
			
			
			
			if ("linkType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkType);
				
			}
			
			
			
			
			if ("linkParam" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkParam);
				
			}
			
			
			
			
			if ("mtips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mtips);
				
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
		
		if($this->img !== null) {
			
			$xfer += $output->writeFieldBegin('img');
			$xfer += $output->writeString($this->img);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkType !== null) {
			
			$xfer += $output->writeFieldBegin('linkType');
			$xfer += $output->writeString($this->linkType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkParam !== null) {
			
			$xfer += $output->writeFieldBegin('linkParam');
			$xfer += $output->writeString($this->linkParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mtips !== null) {
			
			$xfer += $output->writeFieldBegin('mtips');
			$xfer += $output->writeString($this->mtips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>