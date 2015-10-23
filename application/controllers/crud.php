<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));	
	}
	//fungsi index saat controller pertama kali dijalankan
	function index(){
		$limit = 10;
		$offset = 0;
		$this->load->model('m_jenis');
		$this->data['data_get']=$this->m_jenis->ambil($limit,$offset);
		$this->data['page']='tabel';
		$this->load->view('dh_view',$this->data);
	}
	//fungsi tambah jenis
	function tambah_jenis()
	{
		$this->data['id']="";
		$this->data['nama_anak']="";
		$this->data['nama_ayah']="";
		$this->data['nama_ibu']="";
		$this->data['tgl_lahir']="";
		$this->data['tahun_lahir']="";
		$this->data['tempat_lahir']="";
		$this->data['st']="tambah";
		$this->data['jam_lahir']="";
		$this->data['page']='formjenis';
		$this->load->view('dh_view',$this->data);
	}
	//fungsi edit
	function edit()
	{
		$id = $this->uri->segment(3);
		if($id == NULL){
			redirect('Crud');
		}
		$this->load->model('m_jenis');
		$dt = $this->m_jenis->edit($id);
		$this->data['nama_anak']=$dt->nama_anak;
		$this->data['nama_ayah']=$dt->nama_ayah;
		$this->data['nama_ibu']=$dt->nama_ibu;
		$this->data['tgl_lahir']=$dt->tgl_lahir;
		$this->data['tahun_lahir']=$dt->tahun_lahir;
		$this->data['tempat_lahir']=$dt->tempat_lahir;
		$this->data['jam_lahir']=$dt->jam_lahir;
		$this->data['st']="edit";
		$this->data['id']=$id;
		$this->data['page']='formjenis';
		$this->load->view('dh_view',$this->data);
	}
	//fungsi hapus
	function hapus()
	{
		$u = $this->uri->segment(3);
		$this->load->model('m_jenis');
		$this->m_jenis->hapus($u);
		redirect('crud');
	}
	//fungsi simpan
	function simpan() 
	{
		$this->form_validation->set_rules('nama_anak', 'Nama Anak', 'trim|required');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required');
		$this->form_validation->set_rules('nama_ibu',  'Nama Ibu', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('tahun_lahir',  'Tahun Lahir', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir',  'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('jam_lahir',  'Jam Lahir', 'trim|required');
		if ($this->form_validation->run() == FALSE) { 
			if ($this->input->post('submit')) {
				$this->data['nama_anak'] = $this->input->post('nama_anak');
				$this->data['nama_ayah'] = $this->input->post('nama_ayah');
				$this->data['nama_ibu'] = $this->input->post('nama_ibu');
				$this->data['tgl_lahir'] = $this->input->post('tgl_lahir');
				$this->data['tahun_lahir'] = $this->input->post('tahun_lahir');
				$this->data['st'] = $this->input->post('st');
				$this->data['tempat_lahir'] = $this->input->post('tempat_lahir');
				$this->data['jam_lahir'] = $this->input->post('jam_lahir');
				$this->data['page'] = 'formjenis';
				$this->load->view('dh_view', $this->data);
			} 
		} 
		else 
		{
			$st = $this->input->post('st');
			if ($this->input->post('submit')) 
			{
				if ($st == "tambah") {
					$this->load->model('m_jenis');
					$this->m_jenis->tambah();
					redirect('crud');
		} else if ($st == "edit") 
		{
			$id = $this->input->post('id');
			$this->load->model('m_jenis');
			$this->m_jenis->update($id);
			redirect('crud');
		}
	}
	}
}
}
