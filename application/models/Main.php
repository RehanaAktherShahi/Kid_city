<?php
class Main extends CI_Model
{
	public function login_auth($tablename,$args)
	{
		$fetch_rec = $this->db->get_where($tablename,$args);
		if($fetch_rec->num_rows() > 0){
			return $fetch_rec->result();
		}
		else{
			return $fetch_rec->result();
		}
	}

	public function insert_data($tablename,$data){
		$insert_rec = $this->db->insert($tablename,$data);
		if($this->db->affected_rows() > 0){
				return true;
		}
		else{
			return false;
		}
	}

	public function fetch_records_by_args($tablename,$args)
	{
		$this->db->order_by('id','asc');
		$fetch_rec = $this->db->get_where($tablename,$args);
		if($fetch_rec->num_rows() > 0){
			return $fetch_rec->result();
		}
		else{
			return $fetch_rec->result();
		}
	}

	public function fetch_all_records($tablename,$order,$limit)
    {
    	if($limit == "limit")
    	{

    	}
    	else{
    		$this->db->limit($limit);
    	}

    	$fetch_rec = $this->db->select()
    			 ->from($tablename)
    			 ->order_by('id',$order)
    			 ->get();
    	if($fetch_rec->num_rows() > 0){
			return $fetch_rec->result();
		}
		else{
			return $fetch_rec->result();
		}
    }

    public function delete_records_by_args($tablename,$args)
    {
    	$delete_rec = $this->db->delete($tablename,$args);
    	if($this->db->affected_rows() > 0){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public function update_records_by_args($tablename,$data,$args)
    {
    	$update_rec = $this->db->where($args)
  				->update($tablename,$data);
  		if($this->db->affected_rows() > 0){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public function fetch_records_by_args_with_like($tablename,$args)
    {
    	$fetch_rec = $this->db->select()
    			->from($tablename)
    			->like($args)
    			->get();
    	if($fetch_rec->num_rows() > 0){
			return $fetch_rec->result();
		}
		else{
			return $fetch_rec->result();
		}
    }

    public function fetch_records_by_order($tablename,$order_format)
    {
    	extract($order_format);
    	$fetch_rec = $this->db->select()
    	->from($tablename)
    	->order_by($order_format['column_name'],$order_format['order'])
    	->get();
    	//echo $this->db->last_query();
    	//die();
    if($fetch_rec->num_rows() > 0){
			return $fetch_rec->result();
		}
		else{
			return $fetch_rec->result();
		}
    }

    public function fetch_records_by_args_with_order($tablename,$args,$order_format)
    {
        extract($order_format);
        $fetch_rec = $this->db->select()
             ->from($tablename)
             ->where($args)
             ->order_by($order_format['column_name'],$order_format['order'])
             ->get();
        if($fetch_rec->num_rows() > 0){
            return $fetch_rec->result();
        }
        else{
            return $fetch_rec->result();
        }
    }

    public function fetch_records_by_args_with_limit($tablename,$args,$limit)
    {
        $this->db->limit($limit);
        $fetch_rec = $this->db->get_where($tablename,$args);
        if($fetch_rec->num_rows() > 0){
            return $fetch_rec->result();
        }
        else{
            return $fetch_rec->result();
        }
    }


}