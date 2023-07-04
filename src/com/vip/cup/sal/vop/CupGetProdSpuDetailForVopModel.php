<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupGetProdSpuDetailForVopModel {
	
	static $_TSPEC;
	public $productModel = null;
	public $brandModel = null;
	public $categoryModel = null;
	public $sizeTableModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productModel'
			),
			2 => array(
			'var' => 'brandModel'
			),
			3 => array(
			'var' => 'categoryModel'
			),
			4 => array(
			'var' => 'sizeTableModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productModel'])){
				
				$this->productModel = $vals['productModel'];
			}
			
			
			if (isset($vals['brandModel'])){
				
				$this->brandModel = $vals['brandModel'];
			}
			
			
			if (isset($vals['categoryModel'])){
				
				$this->categoryModel = $vals['categoryModel'];
			}
			
			
			if (isset($vals['sizeTableModel'])){
				
				$this->sizeTableModel = $vals['sizeTableModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupGetProdSpuDetailForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("productModel" == $schemeField){
				
				$needSkip = false;
				
				$this->productModel = new \com\vip\cup\sal\vop\CupGetProdSpuDetailProductForVopModel();
				$this->productModel->read($input);
				
			}
			
			
			
			
			if ("brandModel" == $schemeField){
				
				$needSkip = false;
				
				$this->brandModel = new \com\vip\cup\sal\vop\CupGetProdSpuDetailBrandForVopModel();
				$this->brandModel->read($input);
				
			}
			
			
			
			
			if ("categoryModel" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryModel = new \com\vip\cup\sal\vop\CupGetProdSpuDetailCategoryForVopModel();
				$this->categoryModel->read($input);
				
			}
			
			
			
			
			if ("sizeTableModel" == $schemeField){
				
				$needSkip = false;
				
				$this->sizeTableModel = new \com\vip\cup\sal\vop\SizeTableForVopModel();
				$this->sizeTableModel->read($input);
				
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
		
		if($this->productModel !== null) {
			
			$xfer += $output->writeFieldBegin('productModel');
			
			if (!is_object($this->productModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->productModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandModel !== null) {
			
			$xfer += $output->writeFieldBegin('brandModel');
			
			if (!is_object($this->brandModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->brandModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryModel !== null) {
			
			$xfer += $output->writeFieldBegin('categoryModel');
			
			if (!is_object($this->categoryModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->categoryModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeTableModel !== null) {
			
			$xfer += $output->writeFieldBegin('sizeTableModel');
			
			if (!is_object($this->sizeTableModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->sizeTableModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>