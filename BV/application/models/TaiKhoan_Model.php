<?php

class TaiKhoan_Model extends CI_Model {

    function add($data) {        
        $this->db->insert('taikhoan', $data);
        return $data;
    }

    function view() {
        $a = $this->db->get('taikhoan');
        if ($a->num_rows() > 0) {
            foreach ($a->result() as $data) {
                $b[] = $data;
            }
            return $b;
        }
    }

    function edit($a) {
        $d = $this->db->get_where('taikhoan', array('idTaiKhoan' => $a))->row();
        return $d;
    }

    function delete($a) {
        $this->db->delete('taikhoan', array('idTaiKhoan' => $a));
        return;
    }

    function update($id) {
        $tk = $this->input->post('tk');
        $mk = $this->input->post('mk');
        $q = $this->input->post('q');

        $data = array(
            'TaiKhoan' => $tk,
            'MatKhau' => $mk,
            'Quyen' => $q
        );
        $this->db->where('idTaiKhoan', $id);
        $this->db->update('taikhoan', $data);
    }

    public function save() {
        $this->db->insert('taikhoan', $data);
        //return $this->db->insert_idTaiKhoan();
    }

}
