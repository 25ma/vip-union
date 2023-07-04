<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupShopCancelForOrderForVopRequest {
	
	static $_TSPEC;
	public $cancelOrderList = null;
	public $vipLastAareaId = null;
	public $channel = null;
	public $channelCoopId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cancelOrderList'
			),
			2 => array(
			'var' => 'vipLastAareaId'
			),
			3 => array(
			'var' => 'channel'
			),
			4 => array(
			'var' => 'channelCoopId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cancelOrderList'])){
				
				$this->cancelOrderList = $vals['cancelOrderList'];
			}
			
			
			if (isset($vals['vipLastAareaId'])){
				
				$this->vipLastAareaId = $vals['vipLastAareaId'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['channelCoopId'])){
				
				$this->channelCoopId = $vals['channelCoopId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupShopCancelForOrderForVopRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cancelOrderList" == $schemeField){
				
				$needSkip = false;
				
				$this->cancelOrderList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\cup\sal\vop\CupShopCancelOrderForVop();
						$elem1->read($input);
						
						$this->cancelOrderList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vipLastAareaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipLastAareaId);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("channelCoopId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCoopId);
				
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
		
		$xfer += $output->writeFieldBegin('cancelOrderList');
		
		if (!is_array($this->cancelOrderList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->cancelOrderList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vipLastAareaId');
		$xfer += $output->writeString($this->vipLastAareaId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelCoopId !== null) {
			
			$xfer += $output->writeFieldBegin('channelCoopId');
			$xfer += $output->writeString($this->channelCoopId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>