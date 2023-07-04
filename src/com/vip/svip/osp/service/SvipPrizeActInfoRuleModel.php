<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipPrizeActInfoRuleModel {
	
	static $_TSPEC;
	public $days = null;
	public $quota = null;
	public $unUsedQuota = null;
	public $img = null;
	public $valueOfPrize = null;
	public $ugWhiteList = null;
	public $ugBlackList = null;
	public $frWhiteList = null;
	public $frBlackList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'days'
			),
			2 => array(
			'var' => 'quota'
			),
			3 => array(
			'var' => 'unUsedQuota'
			),
			4 => array(
			'var' => 'img'
			),
			5 => array(
			'var' => 'valueOfPrize'
			),
			6 => array(
			'var' => 'ugWhiteList'
			),
			7 => array(
			'var' => 'ugBlackList'
			),
			8 => array(
			'var' => 'frWhiteList'
			),
			9 => array(
			'var' => 'frBlackList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['days'])){
				
				$this->days = $vals['days'];
			}
			
			
			if (isset($vals['quota'])){
				
				$this->quota = $vals['quota'];
			}
			
			
			if (isset($vals['unUsedQuota'])){
				
				$this->unUsedQuota = $vals['unUsedQuota'];
			}
			
			
			if (isset($vals['img'])){
				
				$this->img = $vals['img'];
			}
			
			
			if (isset($vals['valueOfPrize'])){
				
				$this->valueOfPrize = $vals['valueOfPrize'];
			}
			
			
			if (isset($vals['ugWhiteList'])){
				
				$this->ugWhiteList = $vals['ugWhiteList'];
			}
			
			
			if (isset($vals['ugBlackList'])){
				
				$this->ugBlackList = $vals['ugBlackList'];
			}
			
			
			if (isset($vals['frWhiteList'])){
				
				$this->frWhiteList = $vals['frWhiteList'];
			}
			
			
			if (isset($vals['frBlackList'])){
				
				$this->frBlackList = $vals['frBlackList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipPrizeActInfoRuleModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->days); 
				
			}
			
			
			
			
			if ("quota" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quota); 
				
			}
			
			
			
			
			if ("unUsedQuota" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unUsedQuota); 
				
			}
			
			
			
			
			if ("img" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->img);
				
			}
			
			
			
			
			if ("valueOfPrize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->valueOfPrize);
				
			}
			
			
			
			
			if ("ugWhiteList" == $schemeField){
				
				$needSkip = false;
				
				$this->ugWhiteList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->ugWhiteList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ugBlackList" == $schemeField){
				
				$needSkip = false;
				
				$this->ugBlackList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->ugBlackList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("frWhiteList" == $schemeField){
				
				$needSkip = false;
				
				$this->frWhiteList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->frWhiteList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("frBlackList" == $schemeField){
				
				$needSkip = false;
				
				$this->frBlackList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->frBlackList[$_size3++] = $elem3;
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
		
		$xfer += $output->writeFieldBegin('days');
		$xfer += $output->writeI32($this->days);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quota');
		$xfer += $output->writeI32($this->quota);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('unUsedQuota');
		$xfer += $output->writeI32($this->unUsedQuota);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->img !== null) {
			
			$xfer += $output->writeFieldBegin('img');
			$xfer += $output->writeString($this->img);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->valueOfPrize !== null) {
			
			$xfer += $output->writeFieldBegin('valueOfPrize');
			$xfer += $output->writeString($this->valueOfPrize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ugWhiteList !== null) {
			
			$xfer += $output->writeFieldBegin('ugWhiteList');
			
			if (!is_array($this->ugWhiteList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ugWhiteList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ugBlackList !== null) {
			
			$xfer += $output->writeFieldBegin('ugBlackList');
			
			if (!is_array($this->ugBlackList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ugBlackList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frWhiteList !== null) {
			
			$xfer += $output->writeFieldBegin('frWhiteList');
			
			if (!is_array($this->frWhiteList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->frWhiteList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frBlackList !== null) {
			
			$xfer += $output->writeFieldBegin('frBlackList');
			
			if (!is_array($this->frBlackList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->frBlackList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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