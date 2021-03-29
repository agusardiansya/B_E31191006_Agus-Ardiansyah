<html>
<head>
<title>Mahasiswa</title>
</head>
<body>
<p>Daftar Mahasiswa</p>
<?php
$tampilan=array('table_open'=>'<table border="1" align="left"
width="20%"/>'
);
$this->table->set_template($tampilan);
$this->table->set_heading('No.','Nama','Prodi');
$this->table->add_row('1.','Kim Jefri','MIF');
$this->table->add_row('2.','Ahmad Kurniawan','TKK');
$this->table->add_row('3.','Budi Sudarsono','TIF');
echo $this->table->generate();
?>
</body>
</html>