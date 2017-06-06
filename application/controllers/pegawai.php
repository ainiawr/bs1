<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		//$this->load->model('Pegawai_model');
		$object['biodata_object']=$this->Pegawai_model->getDataPegawai();
		$this->load->view('tampilan_pegawai',$object);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','trim|required');
		//$this->load->model('Pegawai_model');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->load->view('tambah_pegawai_view');
		}
		else
		{

				$config['upload_path']          = './Assets/upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->load->view('tambah_pegawai_view',$error);
                }
                else{

                	$image_data = $this->upload->data();

                	$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 250,
					'height' => 250,
				);
                	$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

                	$this->Pegawai_model->insertPegawai();
					$this->load->view('tambah_pegawai_sukses');
                }
			
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

		$data['pegawai']=$this->Pegawai_model->getPegawai($id);
		$filename = 'foto';

		if ($this->form_validation->run()==FALSE) 
		{
			$this->load->view('edit_pegawai_view',$data);
		}
		else
		{
			$config['upload_path']          = './Assets/upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_pegawai_view',$error);
            }
            else{

                $image_data = $this->upload->data();

                $configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 250,
					'height' => 250,
				);
				
				$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

                $this->Pegawai_model->UpdateById($id);
				$this->load->view('edit_pegawai_sukses');
            }
		}
	}

	public function delete($id)
	{
		$this->Pegawai_model->delete($id);
		$this->load->view('hapus_pegawai_sukses');
	}

	// public function datatable(){
	// 	$data['pegawai_list']=$this->pegawai_model_all->getDataPegawai();
	// 	$this->load->view('pegawai_datatable', $data);
	// }
}
?>
