<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\imp\otd\otdapi\service;

class VopFinanceModel {
	
	static $_TSPEC;
	public $advertiserId = null;
	public $accountType = null;
	public $fundType = null;
	public $tradeType = null;
	public $amount = null;
	public $date = null;
	public $description = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'advertiserId'
			),
			2 => array(
			'var' => 'accountType'
			),
			3 => array(
			'var' => 'fundType'
			),
			4 => array(
			'var' => 'tradeType'
			),
			5 => array(
			'var' => 'amount'
			),
			6 => array(
			'var' => 'date'
			),
			7 => array(
			'var' => 'description'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['advertiserId'])){
				
				$this->advertiserId = $vals['advertiserId'];
			}
			
			
			if (isset($vals['accountType'])){
				
				$this->accountType = $vals['accountType'];
			}
			
			
			if (isset($vals['fundType'])){
				
				$this->fundType = $vals['fundType'];
			}
			
			
			if (isset($vals['tradeType'])){
				
				$this->tradeType = $vals['tradeType'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['date'])){
				
				$this->date = $vals['date'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VopFinanceModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("advertiserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->advertiserId);
				
			}
			
			
			
			
			if ("accountType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\imp\otd\otdapi\service\VopAccountType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->accountType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("fundType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\imp\otd\otdapi\service\VopFundType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->fundType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("tradeType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\imp\otd\otdapi\service\VopTradeType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->tradeType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->amount); 
				
			}
			
			
			
			
			if ("date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->date);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
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
		
		if($this->advertiserId !== null) {
			
			$xfer += $output->writeFieldBegin('advertiserId');
			$xfer += $output->writeString($this->advertiserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountType !== null) {
			
			$xfer += $output->writeFieldBegin('accountType');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopAccountType; 
			$output->writeString($em::$__names[$this->accountType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fundType !== null) {
			
			$xfer += $output->writeFieldBegin('fundType');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopFundType; 
			$output->writeString($em::$__names[$this->fundType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeType !== null) {
			
			$xfer += $output->writeFieldBegin('tradeType');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopTradeType; 
			$output->writeString($em::$__names[$this->tradeType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI64($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->date !== null) {
			
			$xfer += $output->writeFieldBegin('date');
			$xfer += $output->writeString($this->date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>