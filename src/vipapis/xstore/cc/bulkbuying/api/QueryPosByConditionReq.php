<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class QueryPosByConditionReq {
	
	static $_TSPEC;
	public $purchase_nos = null;
	public $group_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchase_nos'
			),
			2 => array(
			'var' => 'group_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchase_nos'])){
				
				$this->purchase_nos = $vals['purchase_nos'];
			}
			
			
			if (isset($vals['group_code'])){
				
				$this->group_code = $vals['group_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryPosByConditionReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchase_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->purchase_nos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->purchase_nos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("group_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_code);
				
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
		
		$xfer += $output->writeFieldBegin('purchase_nos');
		
		if (!is_array($this->purchase_nos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->purchase_nos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_code !== null) {
			
			$xfer += $output->writeFieldBegin('group_code');
			$xfer += $output->writeString($this->group_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>