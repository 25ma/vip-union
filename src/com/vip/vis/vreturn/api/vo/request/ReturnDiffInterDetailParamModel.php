<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnDiffInterDetailParamModel {
	
	static $_TSPEC;
	public $po_no = null;
	public $item_code = null;
	public $box_id = null;
	public $record_quantity = null;
	public $real_quantity = null;
	public $pay_quantity = null;
	public $price = null;
	public $diff_amount = null;
	public $vendor_feedback = null;
	public $second_vendor_feedback = null;
	public $vendor_note = null;
	public $is_complete = null;
	public $is_return = null;
	public $sku_img = null;
	public $anti_theft_code = null;
	public $order_sn = null;
	public $video_url = null;
	public $no_unique_code_reason = null;
	public $transport_box_id = null;
	public $trans_detail_id = null;
	public $op_type = null;
	public $origin_order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'item_code'
			),
			3 => array(
			'var' => 'box_id'
			),
			4 => array(
			'var' => 'record_quantity'
			),
			5 => array(
			'var' => 'real_quantity'
			),
			6 => array(
			'var' => 'pay_quantity'
			),
			7 => array(
			'var' => 'price'
			),
			8 => array(
			'var' => 'diff_amount'
			),
			9 => array(
			'var' => 'vendor_feedback'
			),
			10 => array(
			'var' => 'second_vendor_feedback'
			),
			11 => array(
			'var' => 'vendor_note'
			),
			12 => array(
			'var' => 'is_complete'
			),
			13 => array(
			'var' => 'is_return'
			),
			14 => array(
			'var' => 'sku_img'
			),
			15 => array(
			'var' => 'anti_theft_code'
			),
			16 => array(
			'var' => 'order_sn'
			),
			17 => array(
			'var' => 'video_url'
			),
			18 => array(
			'var' => 'no_unique_code_reason'
			),
			19 => array(
			'var' => 'transport_box_id'
			),
			20 => array(
			'var' => 'trans_detail_id'
			),
			21 => array(
			'var' => 'op_type'
			),
			22 => array(
			'var' => 'origin_order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['box_id'])){
				
				$this->box_id = $vals['box_id'];
			}
			
			
			if (isset($vals['record_quantity'])){
				
				$this->record_quantity = $vals['record_quantity'];
			}
			
			
			if (isset($vals['real_quantity'])){
				
				$this->real_quantity = $vals['real_quantity'];
			}
			
			
			if (isset($vals['pay_quantity'])){
				
				$this->pay_quantity = $vals['pay_quantity'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['diff_amount'])){
				
				$this->diff_amount = $vals['diff_amount'];
			}
			
			
			if (isset($vals['vendor_feedback'])){
				
				$this->vendor_feedback = $vals['vendor_feedback'];
			}
			
			
			if (isset($vals['second_vendor_feedback'])){
				
				$this->second_vendor_feedback = $vals['second_vendor_feedback'];
			}
			
			
			if (isset($vals['vendor_note'])){
				
				$this->vendor_note = $vals['vendor_note'];
			}
			
			
			if (isset($vals['is_complete'])){
				
				$this->is_complete = $vals['is_complete'];
			}
			
			
			if (isset($vals['is_return'])){
				
				$this->is_return = $vals['is_return'];
			}
			
			
			if (isset($vals['sku_img'])){
				
				$this->sku_img = $vals['sku_img'];
			}
			
			
			if (isset($vals['anti_theft_code'])){
				
				$this->anti_theft_code = $vals['anti_theft_code'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['video_url'])){
				
				$this->video_url = $vals['video_url'];
			}
			
			
			if (isset($vals['no_unique_code_reason'])){
				
				$this->no_unique_code_reason = $vals['no_unique_code_reason'];
			}
			
			
			if (isset($vals['transport_box_id'])){
				
				$this->transport_box_id = $vals['transport_box_id'];
			}
			
			
			if (isset($vals['trans_detail_id'])){
				
				$this->trans_detail_id = $vals['trans_detail_id'];
			}
			
			
			if (isset($vals['op_type'])){
				
				$this->op_type = $vals['op_type'];
			}
			
			
			if (isset($vals['origin_order_sn'])){
				
				$this->origin_order_sn = $vals['origin_order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterDetailParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_id);
				
			}
			
			
			
			
			if ("record_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->record_quantity); 
				
			}
			
			
			
			
			if ("real_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->real_quantity); 
				
			}
			
			
			
			
			if ("pay_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pay_quantity); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("diff_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diff_amount);
				
			}
			
			
			
			
			if ("vendor_feedback" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_feedback);
				
			}
			
			
			
			
			if ("second_vendor_feedback" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->second_vendor_feedback);
				
			}
			
			
			
			
			if ("vendor_note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_note);
				
			}
			
			
			
			
			if ("is_complete" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_complete); 
				
			}
			
			
			
			
			if ("is_return" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_return); 
				
			}
			
			
			
			
			if ("sku_img" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_img);
				
			}
			
			
			
			
			if ("anti_theft_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_code);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("video_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->video_url);
				
			}
			
			
			
			
			if ("no_unique_code_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->no_unique_code_reason);
				
			}
			
			
			
			
			if ("transport_box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_box_id);
				
			}
			
			
			
			
			if ("trans_detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trans_detail_id);
				
			}
			
			
			
			
			if ("op_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->op_type); 
				
			}
			
			
			
			
			if ("origin_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_order_sn);
				
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
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_code');
		$xfer += $output->writeString($this->item_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_id');
		$xfer += $output->writeString($this->box_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('record_quantity');
		$xfer += $output->writeI32($this->record_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('real_quantity');
		$xfer += $output->writeI32($this->real_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_quantity');
		$xfer += $output->writeI32($this->pay_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeString($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->diff_amount !== null) {
			
			$xfer += $output->writeFieldBegin('diff_amount');
			$xfer += $output->writeString($this->diff_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_feedback');
		$xfer += $output->writeString($this->vendor_feedback);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->second_vendor_feedback !== null) {
			
			$xfer += $output->writeFieldBegin('second_vendor_feedback');
			$xfer += $output->writeString($this->second_vendor_feedback);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_note');
		$xfer += $output->writeString($this->vendor_note);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_complete');
		$xfer += $output->writeI32($this->is_complete);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_return');
		$xfer += $output->writeI32($this->is_return);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sku_img');
		$xfer += $output->writeString($this->sku_img);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->anti_theft_code !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_code');
			$xfer += $output->writeString($this->anti_theft_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->video_url !== null) {
			
			$xfer += $output->writeFieldBegin('video_url');
			$xfer += $output->writeString($this->video_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->no_unique_code_reason !== null) {
			
			$xfer += $output->writeFieldBegin('no_unique_code_reason');
			$xfer += $output->writeString($this->no_unique_code_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_box_id !== null) {
			
			$xfer += $output->writeFieldBegin('transport_box_id');
			$xfer += $output->writeString($this->transport_box_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('trans_detail_id');
		$xfer += $output->writeString($this->trans_detail_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_type');
		$xfer += $output->writeI32($this->op_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->origin_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('origin_order_sn');
			$xfer += $output->writeString($this->origin_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>