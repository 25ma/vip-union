<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnDiffUpdateParamModel {
	
	static $_TSPEC;
	public $requestTime = null;
	public $fromSource = null;
	public $rvDifferenceNo = null;
	public $transportNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestTime'
			),
			2 => array(
			'var' => 'fromSource'
			),
			3 => array(
			'var' => 'rvDifferenceNo'
			),
			4 => array(
			'var' => 'transportNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestTime'])){
				
				$this->requestTime = $vals['requestTime'];
			}
			
			
			if (isset($vals['fromSource'])){
				
				$this->fromSource = $vals['fromSource'];
			}
			
			
			if (isset($vals['rvDifferenceNo'])){
				
				$this->rvDifferenceNo = $vals['rvDifferenceNo'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffUpdateParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestTime);
				
			}
			
			
			
			
			if ("fromSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fromSource);
				
			}
			
			
			
			
			if ("rvDifferenceNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rvDifferenceNo);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
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
		
		if($this->requestTime !== null) {
			
			$xfer += $output->writeFieldBegin('requestTime');
			$xfer += $output->writeString($this->requestTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('fromSource');
		$xfer += $output->writeString($this->fromSource);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rvDifferenceNo');
		$xfer += $output->writeString($this->rvDifferenceNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>