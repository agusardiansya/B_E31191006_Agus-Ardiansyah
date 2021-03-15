<?php 
	//Declare class
	class pilihJurusanIPS {
		// properties
		public $Nama;
		public $Asal;
		public $sejarah;
		public $matematika;
		public $ekonomi;
		public $sosiologi;
		public $akutansi;
        public $geografi;

		// Membuat Fungsi untuk menentukan jurusan informatika
		public function ilmusejarah() {
			if ($this -> sejarah > 85 && $this -> sosiologi > 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menentukan jurusan teknik
		public function akutansi() {
			if ($this -> ekonomi > 85 && $this -> matematika> 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menentukan jurusan kesehatan
		public function sosiologi() {
			if ($this -> sosiologi > 85 && $this -> geografi> 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menghitung rata rata 
		public function avg() {
			$a=$this -> sejarah;
			$b=$this -> matematika;
			$c=$this -> ekonomi;
			$d=$this -> sosiologi;
			$e=$this -> akutansi;
            $e=$this -> geografi;
			$avg=($sejarah+$matematika+$ekonomi+$sosiologi+$akutansi+$geografi)/6;
			return $avg;
		}

		// Membuat Fungsi untuk menentukan perkuliahan 
		public function univ($avg) {
			if ($avg>=85) {
				$hasil = "Universitas Airlangga";
			} else if ($avg<85 && $avg>=75) {
				$hasil = "Univ Negeri";
			} else if ($avg<75) {
				$hasil = "Univ Swasta";
			}
			return $hasil;
		}

		
	}

	echo "<h1>Data dan Nilai</h1>";
	//Membuat instance
	$person = new pilihJurusanIPS ();
	echo "Nama : ".$person -> nama="Agus Ardiansyah";
	echo "<br>";
	echo "Asal :".$person -> asal="Tambakboyo Tuban";
	echo "<br>";
	echo "Nilai sejarah :" .$person -> sejarah="95";
	echo "<br>";
	echo "Nilai matematika :" .$person -> matematika="90";
	echo "<br>";
	echo "Nilai ekonomi : " .$person -> ekonomi="90";
	echo "<br>";
	echo "Nilai sosiologi : " .$person -> sosiologi="85";
	echo "<br>";
	echo "Nilai akutansi : " .$person -> akutansi="85";
	echo "<br>";
    echo "Nilai geografi : " .$person -> geografi="90";
	echo "<br>";
	
	echo "<h3>Jurusan Informatika </h3>";
	echo $person -> ilmusejarah();
	echo "<br>";
	echo "<h3>Jurusan Teknik </h3>";
	echo $person -> akutansi();
	echo "<br>";
	echo "<h3>Jurusan kesehatan </h3>";
	echo $person -> sosiologi();
	echo "<br>";
	echo "<h4>Rata Rata</h4>";
	$avg=$person -> avg();
	echo $avg;
	echo "<br>";
	echo "<h4>Rekomendasi Sekolah :</h4>";
	echo $person -> univ($avg);
	echo "<br>";