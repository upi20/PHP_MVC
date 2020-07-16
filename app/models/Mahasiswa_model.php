<?php 
class Mahasiswa_model{
	private $table = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllMahsiswa(){
		$this->db->query('SELECT * FROM '. $this->table );
		return $this->db->resultSet();
	}
	public function getMahsiswaByID($id){
		$this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}
	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO mahasiswa VALUES
				('', :nama, :npm, :email, :jurusan, '')";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('npm', $data['npm']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function hapusDataMahasiswa($id){
		$query = "DELETE FROM mahasiswa WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->rowCount();
	}
	public function ubahDataMahsiswa($data){
		$query = "UPDATE mahasiswa SET
			nama=:nama,
			npm=:npm,
			email=:email,
			jurusan=:jurusan
			WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('npm', $data['npm']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function cariDataMahsiswa(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		$this->db->execute();
		return $this->db->resultSet();
	}
}
