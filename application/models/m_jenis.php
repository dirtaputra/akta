<?php
if(!defined('BASEPATH'))
	exit('No direct script access allowed');
class m_jenis extends CI_Model{
	//insert data ke database
	function tambah()
	{
		$nama_anak=$this->input->post('nama_anak');
		$nama_ayah=$this->input->post('nama_ayah');
		$nama_ibu=$this->input->post('nama_ibu');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$tahun_lahir=$this->input->post('tahun_lahir');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$jam_lahir=$this->input->post('jam_lahir');
		$data = array('id'=>NULL,
					   'nama_anak'=>$nama_anak,
					   'nama_ayah'=>$nama_ayah,
					   'nama_ibu'=>$nama_ibu,
					   'tgl_lahir'=>$tgl_lahir,
					   'tahun_lahir'=>$tahun_lahir,
					   'tempat_lahir'=>$tempat_lahir,
					   'jam_lahir'=>$jam_lahir);
		$this->db->insert('data_akta',$data);
	}
	//mengambil semua data dari database
	function ambil($limit,$offset)
	{
		$ambil=$this->db->get('data_akta',$limit,$offset);
		if($ambil->num_rows()>0){
			foreach($ambil->result() as $data){
				$hasil[]=$data;
			}
			return $hasil;
		}
	}
	//mengambil data sesuai id_jenis
	function edit($a)
	{
		$d=$this->db->get_where('data_akta',array('id'=>$a))->row();
		return $d;
	}
	//menghapus salah satu data
	function hapus($a)
	{
		$this->db->delete('data_akta',array('id'=>$a));
		return;
	}
	// mengubah isi data   //
	function update($id) 
	{
		$nama_anak=$this->input->post('nama_anak');
		$nama_ayah=$this->input->post('nama_ayah');
		$nama_ibu=$this->input->post('nama_ibu');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$tahun_lahir=$this->input->post('tahun_lahir');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$jam_lahir=$this->input->post('jam_lahir');
		$data = array(
					   'nama_anak'=>$nama_anak,
					   'nama_ayah'=>$nama_ayah,
					   'nama_ibu'=>$nama_ibu,
					   'tgl_lahir'=>$tgl_lahir,
					   'tahun_lahir'=>$tahun_lahir,
					   'tempat_lahir'=>$tempat_lahir,
					   'jam_lahir'=>$jam_lahir);
		$this->db->where('id', $id);
		$this->db->update('data_akta', $data);
	}
}
?>