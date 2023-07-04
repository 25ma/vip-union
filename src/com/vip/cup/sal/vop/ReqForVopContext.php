<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class ReqForVopContext {
	
	static $_TSPEC;
	public $appId = null;
	public $operatorForVop = null;
	public $channelCoopId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			2 => array(
			'var' => 'operatorForVop'
			),
			3 => array(
			'var' => 'channelCoopId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['operatorForVop'])){
				
				$this->operatorForVop = $vals['operatorForVop'];
			}
			
			
			if (isset($vals['channelCoopId'])){
				
				$this->channelCoopId = $vals['channelCoopId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReqForVopContext';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appId);
				
			}
			
			
			
			
			if ("operatorForVop" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorForVop);
				
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
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operatorForVop !== null) {
			
			$xfer += $output->writeFieldBegin('operatorForVop');
			$xfer += $output->writeString($this->operatorForVop);
			
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