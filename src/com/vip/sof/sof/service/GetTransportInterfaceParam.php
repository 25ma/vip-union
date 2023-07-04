<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GetTransportInterfaceParam {
	
	static $_TSPEC;
	public $appName = null;
	public $storeId = null;
	public $orderSnList = null;
	public $statList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'storeId'
			),
			3 => array(
			'var' => 'orderSnList'
			),
			4 => array(
			'var' => 'statList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
			if (isset($vals['statList'])){
				
				$this->statList = $vals['statList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTransportInterfaceParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("orderSnList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderSnList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->orderSnList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("statList" == $schemeField){
				
				$needSkip = false;
				
				$this->statList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readByte($elem1); 
						
						$this->statList[$_size1++] = $elem1;
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('orderSnList');
			
			if (!is_array($this->orderSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderSnList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statList !== null) {
			
			$xfer += $output->writeFieldBegin('statList');
			
			if (!is_array($this->statList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->statList as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
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