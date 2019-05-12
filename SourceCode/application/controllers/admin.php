<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		//Fungsi yang digunakan untuk melakukan pemanggilan model yang ada di admin model
        $this->load->model('adminmodel');
        //Fungsi yang digunakan untuk memanggil library yang digunakan untuk membuka file csv dan merubah dalam bentuk array
        $this->load->library('csvimport');
        //Fungsi penggunaan Session dimana ketika pengguna masuk ke halaman admin di cek dulu setatusnya jika tidak login makan harus login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
    //fungsi penampilan halaman localhost/admin untuk memanggil view sbg
	function index(){
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('admin/tutorial');
	}
	//fungsi penampilan halaman localhost/admin/upload untuk memanggil view utk upload
	function upload(){
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('admin/upload');
	}
    //fungsi yang digunakan untuk logout dengan cara menghancurkan seesion dan mengalihkan tampilakn ke login
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    function import(){
	    $extention = explode(".",$_FILES["csv_file"]["name"]); // fungsi yang digunakan untuk mengambil extention file yang di upload
        //Jika extention filenya csv maka fungsi dibawah akan di jalankan
	    if($extention[1]=="csv") {
	        //Penggunaan library csvimport untuk membuka file dan hasilnya menjadi array
            $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
            //Pengambilan jumlah data yang ada untuk dimasukkan kedalam id
            $id = $this->adminmodel->jumlah();
            $zona_waktu = "000";
            $columnsNames = array_keys($file_data[0]);
            $jumlah_column=0;
            //melakukan pengecekan field name apakah sesuai dengan ketentuan
            foreach ($columnsNames as $row){
                if(($row=="waktu") ||($row=="temperature")|| ($row=="sun_radiation") ||
                    ($row=="Relative_humidity") || ($row=="wind_direction") || ($row=="wind_speed") ||
                    ($row=="pressure") || ($row=="rain_rate") || ($row=="timestamp")){
                    $jumlah_column = $jumlah_column+1;
                }
            }
            if($jumlah_column==9) {
                //Perulangan untuk membuka array $file_data dan dimasukkan kedalam mongodb
                foreach ($file_data as $row) {
                    $id++;
                    $data = array(
                        'id' => (String)$id,
                        'waktu' => $row['waktu'],
                        'temperature' => $row['temperature'],
                        'sun_radiation' => $row['sun_radiation'],
                        'Relative_humidity' => $row['Relative_humidity'],
                        'wind_direction' => $row['wind_direction'],
                        'wind_speed' => $row['wind_speed'],
                        'pressure' => $row['pressure'],
                        'rain_rate' => $row['rain_rate'],
                        'timestamp' => $row['timestamp'] . $zona_waktu
                    );
                    //Fungsi untuk memasukkan array $data kedalam mongodb
                    $this->adminmodel->insertmo($data);
                    //Menjadikan null untuk membalikan array $data menjadi kosong agar tidak redundan
                    $data = null;
                }
                //Digunakan untuk mengirimkan pesan berupa json yang digunakan untuk menampilan pesan file berhasil di upload
                $response_array = 'success';
            }else{
                $response_array='error';
            }
        }else{
	        //jika extention non csv maka mengirimkan pesan json yang digunakan untuk menampilkan pesan file gagal diupload
            $response_array='error';
        }
	    //Mengirimkan output pesan berhasil atau error dalam format json agar dapat dibaca di uploatcsv.js dan mengeluarkan notif
        echo json_encode($response_array);

    }
}