<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\guide;

class GuideShareModel {
	
	static $_TSPEC;
	public $materialType = null;
	public $materialId = null;
	public $materialCategoryId = null;
	public $groupMaterialId = null;
	public $miniProgramUrl = null;
	public $picTitle = null;
	public $picUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialType'
			),
			2 => array(
			'var' => 'materialId'
			),
			3 => array(
			'var' => 'materialCategoryId'
			),
			4 => array(
			'var' => 'groupMaterialId'
			),
			5 => array(
			'var' => 'miniProgramUrl'
			),
			6 => array(
			'var' => 'picTitle'
			),
			7 => array(
			'var' => 'picUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialType'])){
				
				$this->materialType = $vals['materialType'];
			}
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['materialCategoryId'])){
				
				$this->materialCategoryId = $vals['materialCategoryId'];
			}
			
			
			if (isset($vals['groupMaterialId'])){
				
				$this->groupMaterialId = $vals['groupMaterialId'];
			}
			
			
			if (isset($vals['miniProgramUrl'])){
				
				$this->miniProgramUrl = $vals['miniProgramUrl'];
			}
			
			
			if (isset($vals['picTitle'])){
				
				$this->picTitle = $vals['picTitle'];
			}
			
			
			if (isset($vals['picUrl'])){
				
				$this->picUrl = $vals['picUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GuideShareModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("materialType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->materialType); 
				
			}
			
			
			
			
			if ("materialId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->materialId); 
				
			}
			
			
			
			
			if ("materialCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->materialCategoryId); 
				
			}
			
			
			
			
			if ("groupMaterialId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->groupMaterialId); 
				
			}
			
			
			
			
			if ("miniProgramUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->miniProgramUrl);
				
			}
			
			
			
			
			if ("picTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->picTitle);
				
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
		
		$xfer += $output->writeFieldBegin('materialType');
		$xfer += $output->writeI32($this->materialType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('materialId');
		$xfer += $output->writeI64($this->materialId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('materialCategoryId');
		$xfer += $output->writeI64($this->materialCategoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->groupMaterialId !== null) {
			
			$xfer += $output->writeFieldBegin('groupMaterialId');
			$xfer += $output->writeI64($this->groupMaterialId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->miniProgramUrl !== null) {
			
			$xfer += $output->writeFieldBegin('miniProgramUrl');
			$xfer += $output->writeString($this->miniProgramUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->picTitle !== null) {
			
			$xfer += $output->writeFieldBegin('picTitle');
			$xfer += $output->writeString($this->picTitle);
			
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