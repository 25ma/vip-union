<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\mapi\shop\service\vop;

class CategoryProductModel {
	
	static $_TSPEC;
	public $mid = null;
	public $picUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mid'
			),
			2 => array(
			'var' => 'picUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['picUrl'])){
				
				$this->picUrl = $vals['picUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryProductModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("picUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->picUrl);
				
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
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->picUrl !== null) {
			
			$xfer += $output->writeFieldBegin('picUrl');
			$xfer += $output->writeString($this->picUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>