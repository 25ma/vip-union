<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class ReturnDiffInterRecordsRespModel {
	
	static $_TSPEC;
	public $rv_difference_no = null;
	public $status_name = null;
	public $return_no = null;
	public $sub_return_no = null;
	public $po_no = null;
	public $schedule_id = null;
	public $poDelivery_type_name = null;
	public $create_time_str = null;
	public $update_time_str = null;
	public $contractor = null;
	public $telephone = null;
	public $follow_up_name = null;
	public $follow_up_department = null;
	public $step_back_po = null;
	public $ebs_bill_number = null;
	public $step_back_transport_no = null;
	public $required_transport_no = null;
	public $warehouse_name = null;
	public $return_type_name = null;
	public $status = null;
	public $status_note = null;
	public $is_complete = null;
	public $approve_qty = null;
	public $not_approve_qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rv_difference_no'
			),
			2 => array(
			'var' => 'status_name'
			),
			3 => array(
			'var' => 'return_no'
			),
			4 => array(
			'var' => 'sub_return_no'
			),
			5 => array(
			'var' => 'po_no'
			),
			6 => array(
			'var' => 'schedule_id'
			),
			7 => array(
			'var' => 'poDelivery_type_name'
			),
			8 => array(
			'var' => 'create_time_str'
			),
			9 => array(
			'var' => 'update_time_str'
			),
			10 => array(
			'var' => 'contractor'
			),
			11 => array(
			'var' => 'telephone'
			),
			12 => array(
			'var' => 'follow_up_name'
			),
			13 => array(
			'var' => 'follow_up_department'
			),
			14 => array(
			'var' => 'step_back_po'
			),
			15 => array(
			'var' => 'ebs_bill_number'
			),
			16 => array(
			'var' => 'step_back_transport_no'
			),
			17 => array(
			'var' => 'required_transport_no'
			),
			18 => array(
			'var' => 'warehouse_name'
			),
			19 => array(
			'var' => 'return_type_name'
			),
			20 => array(
			'var' => 'status'
			),
			21 => array(
			'var' => 'status_note'
			),
			22 => array(
			'var' => 'is_complete'
			),
			23 => array(
			'var' => 'approve_qty'
			),
			24 => array(
			'var' => 'not_approve_qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rv_difference_no'])){
				
				$this->rv_difference_no = $vals['rv_difference_no'];
			}
			
			
			if (isset($vals['status_name'])){
				
				$this->status_name = $vals['status_name'];
			}
			
			
			if (isset($vals['return_no'])){
				
				$this->return_no = $vals['return_no'];
			}
			
			
			if (isset($vals['sub_return_no'])){
				
				$this->sub_return_no = $vals['sub_return_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['poDelivery_type_name'])){
				
				$this->poDelivery_type_name = $vals['poDelivery_type_name'];
			}
			
			
			if (isset($vals['create_time_str'])){
				
				$this->create_time_str = $vals['create_time_str'];
			}
			
			
			if (isset($vals['update_time_str'])){
				
				$this->update_time_str = $vals['update_time_str'];
			}
			
			
			if (isset($vals['contractor'])){
				
				$this->contractor = $vals['contractor'];
			}
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['follow_up_name'])){
				
				$this->follow_up_name = $vals['follow_up_name'];
			}
			
			
			if (isset($vals['follow_up_department'])){
				
				$this->follow_up_department = $vals['follow_up_department'];
			}
			
			
			if (isset($vals['step_back_po'])){
				
				$this->step_back_po = $vals['step_back_po'];
			}
			
			
			if (isset($vals['ebs_bill_number'])){
				
				$this->ebs_bill_number = $vals['ebs_bill_number'];
			}
			
			
			if (isset($vals['step_back_transport_no'])){
				
				$this->step_back_transport_no = $vals['step_back_transport_no'];
			}
			
			
			if (isset($vals['required_transport_no'])){
				
				$this->required_transport_no = $vals['required_transport_no'];
			}
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['return_type_name'])){
				
				$this->return_type_name = $vals['return_type_name'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['status_note'])){
				
				$this->status_note = $vals['status_note'];
			}
			
			
			if (isset($vals['is_complete'])){
				
				$this->is_complete = $vals['is_complete'];
			}
			
			
			if (isset($vals['approve_qty'])){
				
				$this->approve_qty = $vals['approve_qty'];
			}
			
			
			if (isset($vals['not_approve_qty'])){
				
				$this->not_approve_qty = $vals['not_approve_qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterRecordsRespModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("rv_difference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rv_difference_no);
				
			}
			
			
			
			
			if ("status_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_name);
				
			}
			
			
			
			
			if ("return_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_no);
				
			}
			
			
			
			
			if ("sub_return_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_return_no);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("poDelivery_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDelivery_type_name);
				
			}
			
			
			
			
			if ("create_time_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time_str);
				
			}
			
			
			
			
			if ("update_time_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time_str);
				
			}
			
			
			
			
			if ("contractor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractor);
				
			}
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("follow_up_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->follow_up_name);
				
			}
			
			
			
			
			if ("follow_up_department" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->follow_up_department);
				
			}
			
			
			
			
			if ("step_back_po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->step_back_po);
				
			}
			
			
			
			
			if ("ebs_bill_number" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ebs_bill_number);
				
			}
			
			
			
			
			if ("step_back_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->step_back_transport_no);
				
			}
			
			
			
			
			if ("required_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->required_transport_no); 
				
			}
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("return_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_type_name);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("status_note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_note);
				
			}
			
			
			
			
			if ("is_complete" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_complete); 
				
			}
			
			
			
			
			if ("approve_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->approve_qty); 
				
			}
			
			
			
			
			if ("not_approve_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->not_approve_qty); 
				
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
		
		if($this->rv_difference_no !== null) {
			
			$xfer += $output->writeFieldBegin('rv_difference_no');
			$xfer += $output->writeString($this->rv_difference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_name !== null) {
			
			$xfer += $output->writeFieldBegin('status_name');
			$xfer += $output->writeString($this->status_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_no !== null) {
			
			$xfer += $output->writeFieldBegin('return_no');
			$xfer += $output->writeString($this->return_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_return_no !== null) {
			
			$xfer += $output->writeFieldBegin('sub_return_no');
			$xfer += $output->writeString($this->sub_return_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDelivery_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('poDelivery_type_name');
			$xfer += $output->writeString($this->poDelivery_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_str !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_str');
			$xfer += $output->writeString($this->create_time_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time_str !== null) {
			
			$xfer += $output->writeFieldBegin('update_time_str');
			$xfer += $output->writeString($this->update_time_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractor !== null) {
			
			$xfer += $output->writeFieldBegin('contractor');
			$xfer += $output->writeString($this->contractor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telephone !== null) {
			
			$xfer += $output->writeFieldBegin('telephone');
			$xfer += $output->writeString($this->telephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->follow_up_name !== null) {
			
			$xfer += $output->writeFieldBegin('follow_up_name');
			$xfer += $output->writeString($this->follow_up_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->follow_up_department !== null) {
			
			$xfer += $output->writeFieldBegin('follow_up_department');
			$xfer += $output->writeString($this->follow_up_department);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->step_back_po !== null) {
			
			$xfer += $output->writeFieldBegin('step_back_po');
			$xfer += $output->writeString($this->step_back_po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebs_bill_number !== null) {
			
			$xfer += $output->writeFieldBegin('ebs_bill_number');
			$xfer += $output->writeString($this->ebs_bill_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->step_back_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('step_back_transport_no');
			$xfer += $output->writeString($this->step_back_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->required_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('required_transport_no');
			$xfer += $output->writeI32($this->required_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_name');
			$xfer += $output->writeString($this->warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('return_type_name');
			$xfer += $output->writeString($this->return_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_note !== null) {
			
			$xfer += $output->writeFieldBegin('status_note');
			$xfer += $output->writeString($this->status_note);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_complete !== null) {
			
			$xfer += $output->writeFieldBegin('is_complete');
			$xfer += $output->writeI32($this->is_complete);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approve_qty !== null) {
			
			$xfer += $output->writeFieldBegin('approve_qty');
			$xfer += $output->writeI32($this->approve_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->not_approve_qty !== null) {
			
			$xfer += $output->writeFieldBegin('not_approve_qty');
			$xfer += $output->writeI32($this->not_approve_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>