<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\mapi\shop\service\vop;

class ProductInfoByEquipmentModel {
	
	static $_TSPEC;
	public $detailUrl = null;
	public $wxCodePic = null;
	public $productPicUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'detailUrl'
			),
			2 => array(
			'var' => 'wxCodePic'
			),
			3 => array(
			'var' => 'productPicUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['detailUrl'])){
				
				$this->detailUrl = $vals['detailUrl'];
			}
			
			
			if (isset($vals['wxCodePic'])){
				
				$this->wxCodePic = $vals['wxCodePic'];
			}
			
			
			if (isset($vals['productPicUrl'])){
				
				$this->productPicUrl = $vals['productPicUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductInfoByEquipmentModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("detailUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailUrl);
				
			}
			
			
			
			
			if ("wxCodePic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wxCodePic);
				
			}
			
			
			
			
			if ("productPicUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productPicUrl);
				
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
		
		if($this->detailUrl !== null) {
			
			$xfer += $output->writeFieldBegin('detailUrl');
			$xfer += $output->writeString($this->detailUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wxCodePic !== null) {
			
			$xfer += $output->writeFieldBegin('wxCodePic');
			$xfer += $output->writeString($this->wxCodePic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productPicUrl !== null) {
			
			$xfer += $output->writeFieldBegin('productPicUrl');
			$xfer += $output->writeString($this->productPicUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>