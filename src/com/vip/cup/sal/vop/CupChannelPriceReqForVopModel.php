<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupChannelPriceReqForVopModel {
	
	static $_TSPEC;
	public $channel = null;
	public $channelCoopId = null;
	public $prodSkuId = null;
	public $effectiveTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channel'
			),
			2 => array(
			'var' => 'channelCoopId'
			),
			3 => array(
			'var' => 'prodSkuId'
			),
			4 => array(
			'var' => 'effectiveTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['channelCoopId'])){
				
				$this->channelCoopId = $vals['channelCoopId'];
			}
			
			
			if (isset($vals['prodSkuId'])){
				
				$this->prodSkuId = $vals['prodSkuId'];
			}
			
			
			if (isset($vals['effectiveTime'])){
				
				$this->effectiveTime = $vals['effectiveTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupChannelPriceReqForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("channelCoopId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCoopId);
				
			}
			
			
			
			
			if ("prodSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSkuId);
				
			}
			
			
			
			
			if ("effectiveTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effectiveTime);
				
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
		
		$xfer += $output->writeFieldBegin('channel');
		$xfer += $output->writeString($this->channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channelCoopId');
		$xfer += $output->writeString($this->channelCoopId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('prodSkuId');
		$xfer += $output->writeString($this->prodSkuId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->effectiveTime !== null) {
			
			$xfer += $output->writeFieldBegin('effectiveTime');
			$xfer += $output->writeI64($this->effectiveTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>