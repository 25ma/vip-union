<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupShopCancelForOrderDataForVop {
	
	static $_TSPEC;
	public $optResultMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			101 => array(
			'var' => 'optResultMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['optResultMap'])){
				
				$this->optResultMap = $vals['optResultMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupShopCancelForOrderDataForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("optResultMap" == $schemeField){
				
				$needSkip = false;
				
				$this->optResultMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = null;
						
						$val0 = new \com\vip\cup\sal\vop\OptResultNewForVop();
						$val0->read($input);
						
						$this->optResultMap[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->optResultMap !== null) {
			
			$xfer += $output->writeFieldBegin('optResultMap');
			
			if (!is_array($this->optResultMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->optResultMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>