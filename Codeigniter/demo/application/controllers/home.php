<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		echo 'trang chu';
	}

	//index.php/home/product/aaaa/1/3
	public function product($param1,$param2,$param3)
	{
		echo 'san pham'.$param1;
	}
	
	public function view()
	{
		$this->load->view('home/view');
	} 

	//ket noi show csdl
	public function show($number = 10,$start = 0)
	{
		// $data['category'] = $this->db->select('*')->from('category')->get()->result_array();
		// $this->load->view('home/view');
	
		echo "<a href='http://localhost/all-project-demo/Codeigniter/demo/index.php/home/add'>add</a>  ";

		$data['category'] = $this->db->select('*')->from('category')->limit($number, $start)->get()->result_array();
		$this->load->view('home/show',$data);
	} 

	public function update($catid=0){
		$data = array(
               'title' => 'bóng đá'
            );
 	// 	$this->db->where('id', 2);
		// $this->db->update('category', $data); 

		$this->db->where('id', 2)->update('category', $data); 

		echo "<a href='http://localhost/all-project-demo/Codeigniter/demo/index.php/home/show'>show</a>";
	}

	public function delete($catid=0){
		$this->db->delete('category', array('id' => $catid));
		echo "<a href='http://localhost/all-project-demo/Codeigniter/demo/index.php/home/show'>show</a>";
	}

	public function add($catid=0){
		$data = array('title' => 'Quốc Tế');
		$this->db->insert('category',$data);
		echo "<a href='http://localhost/all-project-demo/Codeigniter/demo/index.php/home/show'>show</a>";
	}

	public function detail($catid=0){
		$data['category'] = $this->db->select('*')->from('category')->where(array('id'=>$catid))->get()->row_array();
		$this->load->view('home/detail',$data);
		echo "<a href='http://localhost/all-project-demo/Codeigniter/demo/index.php/home/show'>show</a>";	
	}
}