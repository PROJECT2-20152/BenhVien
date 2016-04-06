<?php

class TaiKhoan_Controller extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('TaiKhoan_Model');
    }

    public function index() {
        $data['data_get'] = $this->TaiKhoan_Model->view();
        $this->load->view('DSTaiKhoan', $data);
    }

    function edit() {
        $kd = $this->uri->segment(3);
        if ($kd == NULL) {
            redirect('TaiKhoan_Controller');
        }
        $dt = $this->TaiKhoan_Model->edit($kd);
        $data['tk'] = $dt->TaiKhoan;
        $data['mk'] = $dt->MatKhau;
        $data['q'] = $dt->Quyen;
        $data['id'] = $kd;
        $this->load->view('TaiKhoan_capnhat', $data);
    }

    function delete() {
        $u = $this->uri->segment(3);
        $this->TaiKhoan_Model->delete($u);
        redirect('TaiKhoan_Controller');
    }

    function add() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tk', 'Tài Khoản', 'required');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        

            $tk = $this->input->post('tk');
            $mk = $this->input->post('mk');
            $q = $this->input->post('q');
            $data = array(
                'TaiKhoan' => $tk,
                'MatKhau' => $mk,
                'Quyen' => $q
            );
            $this->TaiKhoan_Model->add($data);
            redirect('TaiKhoan_Controller');        
    }

    function update() {
        if ($this->input->post('mit')) {
            $id = $this->input->post('id');
            $this->TaiKhoan_Model->update($id);
            redirect('TaiKhoan_Controller');
        } else {
            redirect('TaiKhoan_Controller/edit/' . $id);
        }
    }

}
