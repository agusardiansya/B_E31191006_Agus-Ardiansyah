<html>
<head>
<title>Prodi</title>
</head>
<body>
<p>Daftar Prodi Jurusan Teknologi Informasi</p>
<?php
$tampilan=array('table_open'=>'<table border="1" align="left"
width="30%"/>'
);
$this->table->set_template($tampilan);
$this->table->set_heading('No.','Prodi','Keterangan');
$this->table->add_row('1.','MIF','Manajemen Informatika');
$this->table->add_row('2.','TKK','Teknik Komputer');
$this->table->add_row('3.','TIF','Teknologi Informasi');
echo $this->table->generate();
?>
</body>
</html>