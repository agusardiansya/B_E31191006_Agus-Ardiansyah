<html>
<head>
<title>Angkatan</title>
</head>
<body>
<p>Daftar Angkatan</p>
<?php
$tampilan=array('table_open'=>'<table border="1" align="left"
width="10%"/>'
);
$this->table->set_template($tampilan);
$this->table->set_heading('No.','Tahun');
$this->table->add_row('1.','2016');
$this->table->add_row('2.','2017');
$this->table->add_row('3.','2018');
echo $this->table->generate();
?>
</body>
</html>