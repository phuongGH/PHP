<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_controller {
	public function show(){
		$data['category'] = $this->db->select('*')->from('category')->order_by('id desc, title asc')->get()->
		result_array();
		$this->load->view('category/show',$data);
	}

	public function add(){
		$this->load->library('newclass');
		if($this->input->post('add')){
			$title = $this->input->post('title');
			$alias = $this->newclass->alias($title);
			$this->db->insert('category',array('title'=>$title,'alias'=>$alias));
			header('Location: http://localhost/all-project-demo/Codeigniter/demo/index.php/category/show');
		}
		$this->load->view('category/add');
	}

	public function edit($id=0){
		if($this->input->post('update'))
		{
			$title = $this->input->post('title');
			$alias = $this->input->post('alias');
			$this->db->where(array('id'=>$id))->update('category',array('title'=>$title,'alias'=>$alias));
			header('Location: http://localhost/all-project-demo/Codeigniter/demo/index.php/category/show');
		}
		$data['category'] = $this->db->select('*')->from('category')->where(array('id'=>$id))->get()->row_array();
		if(!isset($data['category'])||count($data['category'])==0)
		{
			header('Location: http://localhost/all-project-demo/Codeigniter/demo/index.php/category/show');
		}
		$this->load->view('category/edit',$data);
	}

	public function delete($id=0){
		$data['category'] = $this->db->select('*')->from('category')->where(array('id'=>$id))->get()->row_array();
		if(!isset($data['category'])||count($data['category'])==0)
		{
			header('Location: http://localhost/all-project-demo/Codeigniter/demo/index.php/category/show');
		}
		// else
		// {
		// 	echo "xác nhận xóa!<br>";
		// 	echo "ID : " . $data['id'] . ' Title ' . $data['title'] . '<br>';
		// 	echo '<input type="button" name="ok" value="Xóa">';
		// 	echo ' | ';
		// 	echo '<input type="button" name="cancel" value="Hủy bỏ">';
		// 	// $this->db->delete('category',array('id'=>$data['category']=>'id'));
		// }
		// print_r($this->input->post('delete'));
		if($this->input->post('delete'))
		{
			$category = $data['category'];
			// echo $category['id'];
			$this->db->delete('category',array('id'=>$category['id']));
			header('Location: http://localhost/all-project-demo/Codeigniter/demo/index.php/category/show');
		}
		$this->load->view('category/delete',$data);

	}
}
?>
