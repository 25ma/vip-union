<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportVopItem {
	
	static $_TSPEC;
	public $transport_no = null;
	public $carriers_code = null;
	public $order_sn = null;
	public $new_carriers_code = null;
	public $name = null;
	public $tel = null;
	public $province_name = null;
	public $city_name = null;
	public $region_name = null;
	public $town_name = null;
	public $address = null;
	public $service_field_list = null;
	public $goods = null;
	public $package_volume = null;
	public $package_weight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'carriers_code'
			),
			3 => array(
			'var' => 'order_sn'
			),
			4 => array(
			'var' => 'new_carriers_code'
			),
			5 => array(
			'var' => 'name'
			),
			6 => array(
			'var' => 'tel'
			),
			7 => array(
			'var' => 'province_name'
			),
			8 => array(
			'var' => 'city_name'
			),
			9 => array(
			'var' => 'region_name'
			),
			10 => array(
			'var' => 'town_name'
			),
			11 => array(
			'var' => 'address'
			),
			12 => array(
			'var' => 'service_field_list'
			),
			13 => array(
			'var' => 'goods'
			),
			14 => array(
			'var' => 'package_volume'
			),
			15 => array(
			'var' => 'package_weight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['new_carriers_code'])){
				
				$this->new_carriers_code = $vals['new_carriers_code'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['province_name'])){
				
				$this->province_name = $vals['province_name'];
			}
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['region_name'])){
				
				$this->region_name = $vals['region_name'];
			}
			
			
			if (isset($vals['town_name'])){
				
				$this->town_name = $vals['town_name'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['service_field_list'])){
				
				$this->service_field_list = $vals['service_field_list'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['package_volume'])){
				
				$this->package_volume = $vals['package_volume'];
			}
			
			
			if (isset($vals['package_weight'])){
				
				$this->package_weight = $vals['package_weight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportVopItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("new_carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->new_carriers_code);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("province_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_name);
				
			}
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("region_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region_name);
				
			}
			
			
			
			
			if ("town_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town_name);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("service_field_list" == $schemeField){
				
				$needSkip = false;
				
				$this->service_field_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\TransportserviceFieldVop();
						$elem0->read($input);
						
						$this->service_field_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\PackageGoodsVop();
						$elem1->read($input);
						
						$this->goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("package_volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_volume);
				
			}
			
			
			
			
			if ("package_weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_weight);
				
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
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->new_carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('new_carriers_code');
			$xfer += $output->writeString($this->new_carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_name !== null) {
			
			$xfer += $output->writeFieldBegin('province_name');
			$xfer += $output->writeString($this->province_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_name !== null) {
			
			$xfer += $output->writeFieldBegin('city_name');
			$xfer += $output->writeString($this->city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region_name !== null) {
			
			$xfer += $output->writeFieldBegin('region_name');
			$xfer += $output->writeString($this->region_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town_name !== null) {
			
			$xfer += $output->writeFieldBegin('town_name');
			$xfer += $output->writeString($this->town_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->service_field_list !== null) {
			
			$xfer += $output->writeFieldBegin('service_field_list');
			
			if (!is_array($this->service_field_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->service_field_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_volume !== null) {
			
			$xfer += $output->writeFieldBegin('package_volume');
			$xfer += $output->writeString($this->package_volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_weight !== null) {
			
			$xfer += $output->writeFieldBegin('package_weight');
			$xfer += $output->writeString($this->package_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>