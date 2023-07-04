<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class UpdateSoInfoDetailOutStockStatusReq {
	
	static $_TSPEC;
	public $soNo = null;
	public $skuList = null;
	public $multiChannelOutStockStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNo'
			),
			2 => array(
			'var' => 'skuList'
			),
			3 => array(
			'var' => 'multiChannelOutStockStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNo'])){
				
				$this->soNo = $vals['soNo'];
			}
			
			
			if (isset($vals['skuList'])){
				
				$this->skuList = $vals['skuList'];
			}
			
			
			if (isset($vals['multiChannelOutStockStatus'])){
				
				$this->multiChannelOutStockStatus = $vals['multiChannelOutStockStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateSoInfoDetailOutStockStatusReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("soNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->soNo);
				
			}
			
			
			
			
			if ("skuList" == $schemeField){
				
				$needSkip = false;
				
				$this->skuList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->skuList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("multiChannelOutStockStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->multiChannelOutStockStatus); 
				
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
		
		$xfer += $output->writeFieldBegin('soNo');
		$xfer += $output->writeString($this->soNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('skuList');
		
		if (!is_array($this->skuList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->skuList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('multiChannelOutStockStatus');
		$xfer += $output->writeI64($this->multiChannelOutStockStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>