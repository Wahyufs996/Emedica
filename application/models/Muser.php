<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model
{
    private $_table = "tbl_user";

    public $unama;
    public $uid;


    public function rules()
    {
        return [
            ['field' => 'unama',
            'label' => 'Nama User',
            'rules' => 'required'],


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    //
    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["vakid" => $id])->row();
    // }
    // //
    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->vaknama = $post["vaknama"];
    //
    //     return $this->db->insert($this->_table, $this);
    // }
    // //
    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->vaknama = $post["vaknama"];
    //
    //
    //     return $this->db->update($this->_table, array('vaknama' => $post['vaknama']), array('vakid' => $post['vakid']));
    // }
    //
    //
    // //
    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("vakid" => $id));
    // }
}
