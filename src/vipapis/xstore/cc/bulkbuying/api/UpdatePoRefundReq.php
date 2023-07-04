<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class UpdatePoRefundReq {
	
	static $_TSPEC;
	public $taskNo = null;
	public $refundNo = null;
	public $refundItems = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'taskNo'
			),
			2 => array(
			'var' => 'refundNo'
			),
			3 => array(
			'var' => 'refundItems'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['taskNo'])){
				
				$this->taskNo = $vals['taskNo'];
			}
			
			
			if (isset($vals['refundNo'])){
				
				$this->refundNo = $vals['refundNo'];
			}
			
			
			if (isset($vals['refundItems'])){
				
				$this->refundItems = $vals['refundItems'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdatePoRefundReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("taskNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taskNo);
				
			}
			
			
			
			
			if ("refundNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundNo);
				
			}
			
			
			
			
			if ("refundItems" == $schemeField){
				
				$needSkip = false;
				
				$this->refundItems = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\xstore\cc\bulkbuying\api\PoRefundPlanItem();
						$elem0->read($input);
						
						$this->refundItems[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('taskNo');
		$xfer += $output->writeString($this->taskNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refundNo');
		$xfer += $output->writeString($this->refundNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refundItems');
		
		if (!is_array($this->refundItems)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->refundItems as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>