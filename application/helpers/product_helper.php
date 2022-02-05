<?php 
function get_category_products($id)
{
	$CI =& get_instance();
	$fetch_data = $CI->db->select('ms_categories.category_name,ms_products.*')
		   ->from('ms_products')
		   ->where('category_id',$id)
		   ->join('ms_categories','ms_products.category_id = ms_categories.id')
		   ->limit(100)
		   ->order_by('id','desc')
		   ->get();
		   if($fetch_data->num_rows() > 0){
		   		return $fetch_data->result();
		   }
		   else{
		   	return $fetch_data->result();
		   }
}
function get_category_details($id)
{
	$CI =& get_instance();
	$fetch_data = $CI->db->get_where('ms_categories',['id'=>$id]);
	if($fetch_data->num_rows() > 0){
		   		return $fetch_data->result();
		   }
		   else{
		   	return $fetch_data->result();
		   }
}
function get_product_detail($id)
{
	$CI =& get_instance();
	$fetch_data = $CI->db->get_where('ms_products',['id'=>$id]);
	if($fetch_data->num_rows() > 0){
		return $fetch_data->result();
	 }
	else{
		return $fetch_data->result();
	}
}

function get_order_products($tablename,$order_id)
{
	$CI =& get_instance();
	$fetch_data = $CI->db->get_where($tablename,['order_id'=>$order_id]);
	if($fetch_data->num_rows() > 0){
		return $fetch_data->result();
	 }
	else{
		return $fetch_data->result();
	}
}


?>