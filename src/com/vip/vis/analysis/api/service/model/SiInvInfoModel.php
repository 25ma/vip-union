<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\analysis\api\service\model;

class SiInvInfoModel {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_code = null;
	public $vip_sku_id = null;
	public $sku_name = null;
	public $whs_id = null;
	public $whs_name = null;
	public $brand_store_sn = null;
	public $brand_name = null;
	public $spot_inventory_qty = null;
	public $inner_delv_in_transit_qty = null;
	public $pur_not_arrive_qty = null;
	public $can_ord_qty = null;
	public $remainging_day = null;
	public $expire_date = null;
	public $batch_id = null;
	public $dt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			3 => array(
			'var' => 'vip_sku_id'
			),
			4 => array(
			'var' => 'sku_name'
			),
			5 => array(
			'var' => 'whs_id'
			),
			6 => array(
			'var' => 'whs_name'
			),
			7 => array(
			'var' => 'brand_store_sn'
			),
			8 => array(
			'var' => 'brand_name'
			),
			9 => array(
			'var' => 'spot_inventory_qty'
			),
			10 => array(
			'var' => 'inner_delv_in_transit_qty'
			),
			11 => array(
			'var' => 'pur_not_arrive_qty'
			),
			12 => array(
			'var' => 'can_ord_qty'
			),
			13 => array(
			'var' => 'remainging_day'
			),
			14 => array(
			'var' => 'expire_date'
			),
			15 => array(
			'var' => 'batch_id'
			),
			16 => array(
			'var' => 'dt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vip_sku_id'])){
				
				$this->vip_sku_id = $vals['vip_sku_id'];
			}
			
			
			if (isset($vals['sku_name'])){
				
				$this->sku_name = $vals['sku_name'];
			}
			
			
			if (isset($vals['whs_id'])){
				
				$this->whs_id = $vals['whs_id'];
			}
			
			
			if (isset($vals['whs_name'])){
				
				$this->whs_name = $vals['whs_name'];
			}
			
			
			if (isset($vals['brand_store_sn'])){
				
				$this->brand_store_sn = $vals['brand_store_sn'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['spot_inventory_qty'])){
				
				$this->spot_inventory_qty = $vals['spot_inventory_qty'];
			}
			
			
			if (isset($vals['inner_delv_in_transit_qty'])){
				
				$this->inner_delv_in_transit_qty = $vals['inner_delv_in_transit_qty'];
			}
			
			
			if (isset($vals['pur_not_arrive_qty'])){
				
				$this->pur_not_arrive_qty = $vals['pur_not_arrive_qty'];
			}
			
			
			if (isset($vals['can_ord_qty'])){
				
				$this->can_ord_qty = $vals['can_ord_qty'];
			}
			
			
			if (isset($vals['remainging_day'])){
				
				$this->remainging_day = $vals['remainging_day'];
			}
			
			
			if (isset($vals['expire_date'])){
				
				$this->expire_date = $vals['expire_date'];
			}
			
			
			if (isset($vals['batch_id'])){
				
				$this->batch_id = $vals['batch_id'];
			}
			
			
			if (isset($vals['dt'])){
				
				$this->dt = $vals['dt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SiInvInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vip_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_sku_id);
				
			}
			
			
			
			
			if ("sku_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_name);
				
			}
			
			
			
			
			if ("whs_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->whs_id);
				
			}
			
			
			
			
			if ("whs_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->whs_name);
				
			}
			
			
			
			
			if ("brand_store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_store_sn);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("spot_inventory_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->spot_inventory_qty); 
				
			}
			
			
			
			
			if ("inner_delv_in_transit_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inner_delv_in_transit_qty); 
				
			}
			
			
			
			
			if ("pur_not_arrive_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pur_not_arrive_qty); 
				
			}
			
			
			
			
			if ("can_ord_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->can_ord_qty); 
				
			}
			
			
			
			
			if ("remainging_day" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->remainging_day); 
				
			}
			
			
			
			
			if ("expire_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expire_date);
				
			}
			
			
			
			
			if ("batch_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_id);
				
			}
			
			
			
			
			if ("dt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dt);
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('vip_sku_id');
			$xfer += $output->writeString($this->vip_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku_name !== null) {
			
			$xfer += $output->writeFieldBegin('sku_name');
			$xfer += $output->writeString($this->sku_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->whs_id !== null) {
			
			$xfer += $output->writeFieldBegin('whs_id');
			$xfer += $output->writeString($this->whs_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->whs_name !== null) {
			
			$xfer += $output->writeFieldBegin('whs_name');
			$xfer += $output->writeString($this->whs_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('brand_store_sn');
			$xfer += $output->writeString($this->brand_store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spot_inventory_qty !== null) {
			
			$xfer += $output->writeFieldBegin('spot_inventory_qty');
			$xfer += $output->writeI32($this->spot_inventory_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inner_delv_in_transit_qty !== null) {
			
			$xfer += $output->writeFieldBegin('inner_delv_in_transit_qty');
			$xfer += $output->writeI32($this->inner_delv_in_transit_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pur_not_arrive_qty !== null) {
			
			$xfer += $output->writeFieldBegin('pur_not_arrive_qty');
			$xfer += $output->writeI32($this->pur_not_arrive_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->can_ord_qty !== null) {
			
			$xfer += $output->writeFieldBegin('can_ord_qty');
			$xfer += $output->writeI32($this->can_ord_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remainging_day !== null) {
			
			$xfer += $output->writeFieldBegin('remainging_day');
			$xfer += $output->writeI32($this->remainging_day);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_date !== null) {
			
			$xfer += $output->writeFieldBegin('expire_date');
			$xfer += $output->writeString($this->expire_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batch_id !== null) {
			
			$xfer += $output->writeFieldBegin('batch_id');
			$xfer += $output->writeString($this->batch_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dt !== null) {
			
			$xfer += $output->writeFieldBegin('dt');
			$xfer += $output->writeString($this->dt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>