<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model{

    protected $table = 'users';
	protected $primary_key = 'id';
	protected $order_by = 'id';
	protected $order_by_type = 'ASC';
    protected $timestamps = TRUE;

  
    public function find($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function findAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

}