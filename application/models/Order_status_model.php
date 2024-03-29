<?php

class Order_status_model extends Crud_model
{

	private $table = NULL;

	function __construct()
	{
		$this->table = 'order_status';
		parent::__construct($this->table);
	}

	function get_details($options = [])
	{
		$order_status_table = $this->db->dbprefix('order_status');
		$orders_table = $this->db->dbprefix('orders');

		$where = "";
		$id = get_array_value($options, "id");
		if($id)
		{
			$where = " AND $order_status_table.id=$id";
		}

		$sql = "SELECT $order_status_table.*, (SELECT COUNT($orders_table.id) FROM $orders_table WHERE $orders_table.deleted=0 AND $orders_table.status_id=$order_status_table.id) AS total_orders
        FROM $order_status_table
        WHERE $order_status_table.deleted=0 $where
        ORDER BY $order_status_table.sort ASC";
		return $this->db->query($sql);
	}

	function get_max_sort_value()
	{
		$order_status_table = $this->db->dbprefix('order_status');

		$sql = "SELECT MAX($order_status_table.sort) as sort
        FROM $order_status_table
        WHERE $order_status_table.deleted=0";
		$result = $this->db->query($sql);
		if($result->num_rows())
		{
			return $result->row()->sort;
		}
		else
		{
			return 0;
		}
	}

	function get_first_status()
	{
		$order_status_table = $this->db->dbprefix('order_status');

		$sql = "SELECT $order_status_table.id AS first_order_status
        FROM $order_status_table
        WHERE $order_status_table.deleted=0
        ORDER BY $order_status_table.sort ASC
        LIMIT 1";

		return $this->db->query($sql)->row()->first_order_status;
	}

}
