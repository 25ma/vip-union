<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class SimpleEventMessageInfoForVop {
	
	static $_TSPEC;
	public $messageId = null;
	public $bizId = null;
	public $eventType = null;
	public $bizIdType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'messageId'
			),
			2 => array(
			'var' => 'bizId'
			),
			3 => array(
			'var' => 'eventType'
			),
			4 => array(
			'var' => 'bizIdType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['messageId'])){
				
				$this->messageId = $vals['messageId'];
			}
			
			
			if (isset($vals['bizId'])){
				
				$this->bizId = $vals['bizId'];
			}
			
			
			if (isset($vals['eventType'])){
				
				$this->eventType = $vals['eventType'];
			}
			
			
			if (isset($vals['bizIdType'])){
				
				$this->bizIdType = $vals['bizIdType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SimpleEventMessageInfoForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("messageId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->messageId); 
				
			}
			
			
			
			
			if ("bizId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizId);
				
			}
			
			
			
			
			if ("eventType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\cup\sal\vop\EventTypeForVop::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->eventType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("bizIdType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\cup\sal\vop\BizIdTypeForVop::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->bizIdType = $k;
						break;
					}
					
				}
				
				
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
		
		$xfer += $output->writeFieldBegin('messageId');
		$xfer += $output->writeI64($this->messageId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizId');
		$xfer += $output->writeString($this->bizId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('eventType');
		
		$em = new \com\vip\cup\sal\vop\EventTypeForVop; 
		$output->writeString($em::$__names[$this->eventType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizIdType');
		
		$em = new \com\vip\cup\sal\vop\BizIdTypeForVop; 
		$output->writeString($em::$__names[$this->bizIdType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>