<?php
class Setup extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->model('m_data');
		$this->load->library('session');
	}

	function index()
	{
		$data['data'] = $this->m_data->tampil_data()->result();
		$data['dataa'] = $this->m_data->tampil()->result();
		$data['sam'] = $this->m_data->showdata()->result();
		$this->load->view('setup_view', $data);
	}


	function create_table_blog()
	{
		$fields = array(
			'blog_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'blog_title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'unique' => TRUE,
			),
			'blog_author' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'default' => '',
			),
			'blog_description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
		);
		$this->dbforge->add_key('blog_id', TRUE);
		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('tbl_blog');
		echo $this->session->set_flashdata('msg', 'Table Blog Created!');
		redirect('setup');
	}

	function create_table_user()
	{
		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'user_username' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'unique' => TRUE,
			),
			'user_password' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

		);
		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('tbl_user');
		echo $this->session->set_flashdata('msg', 'Table User Created!');
		redirect('setup');
	}

	function create_kolom()
	{

		$kar = $this->input->post('kar');
		$option_1 = $this->input->post('option_1');
		$option_2 = $this->input->post('option_2');

		$data = array(
			'kar' => $kar,
			'option_1' => $option_1,
			'option_2' => $option_2
		);

		// $fields = array(
		// 	$karakter => array(
		// 		'type' => 'TEXT'
		// 	)
		// );

		$this->m_data->input_data($data, 'tbl_tes');
		// $this->dbforge->add_column('tbl_blog', $fields);
		redirect('setup');
	}


	function add()
	{

		$kar_01 = $this->input->post('kar_01');
		$kar_02 = $this->input->post('kar_02');
		$kar_03 = $this->input->post('kar_03');
		$kar_04 = $this->input->post('kar_04');
		$kar_05 = $this->input->post('kar_05');
		$kar_06 = $this->input->post('kar_06');
		$kar_07 = $this->input->post('kar_07');
		$kar_08 = $this->input->post('kar_08');
		// $kar_09 = $this->input->post('kar_09');


		$data = array(
			'kar_01' => $kar_01,
			'kar_02' => $kar_02,
			'kar_03' => $kar_03,
			'kar_04' => $kar_04,
			'kar_05' => $kar_05,
			'kar_06' => $kar_06,
			'kar_07' => $kar_07,
			'kar_08' => $kar_08

		);
		// if ('kar_08' > 0) {
		// 	$data = array(
		// 		'kar_08' => $kar_08
		// 	);
		// }
		// if ('kar_07' > 0) {
		// 	$data = array(
		// 		'kar_07' => $kar_07
		// 	);
		// }
		// if ('kar_06' > 0) {
		// 	$data = array(
		// 		'kar_06' => $kar_06
		// 	);
		// }
		// if ('kar_05' > 0) {
		// 	$data = array(
		// 		'kar_05' => $kar_05
		// 	);
		// }
		// if ('kar_09' > 0) {
		// 	$data = array(
		// 		'kar_09' => $kar_09
		// 	);
		// }

		$this->m_data->input_data($data, 'tbl_blog');
		redirect('setup');
	}
}
