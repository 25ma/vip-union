<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class CustomRegionLayout {
	
	static $_TSPEC;
	public $left = null;
	public $top = null;
	public $width = null;
	public $height = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'left'
			),
			2 => array(
			'var' => 'top'
			),
			3 => array(
			'var' => 'width'
			),
			4 => array(
			'var' => 'height'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['left'])){
				
				$this->left = $vals['left'];
			}
			
			
			if (isset($vals['top'])){
				
				$this->top = $vals['top'];
			}
			
			
			if (isset($vals['width'])){
				
				$this->width = $vals['width'];
			}
			
			
			if (isset($vals['height'])){
				
				$this->height = $vals['height'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomRegionLayout';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("left" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->left);
				
			}
			
			
			
			
			if ("top" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->top);
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->width);
				
			}
			
			
			
			
			if ("height" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->height);
				
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
		
		if($this->left !== null) {
			
			$xfer += $output->writeFieldBegin('left');
			$xfer += $output->writeDouble($this->left);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->top !== null) {
			
			$xfer += $output->writeFieldBegin('top');
			$xfer += $output->writeDouble($this->top);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->width !== null) {
			
			$xfer += $output->writeFieldBegin('width');
			$xfer += $output->writeDouble($this->width);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->height !== null) {
			
			$xfer += $output->writeFieldBegin('height');
			$xfer += $output->writeDouble($this->height);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>