<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
 
<div class="page-header container">
  <h1><small>Data Gempa Terakhir di Jawa Barat</small></h1>
</div>


<div class="container">
    


<table class='table table-bordered table-striped'>
		<tr><td>Tanggal</td>
		<td>Sabtu, 12 April 2014</td></tr>
		<tr><td>Jam</td>
		<td>09:55:21 AM</td></tr>
		<tr><td>Magnitude - Lokasi</td>
		<td> 3.6 SR JATILUHUR</td></tr>
		<tr><td>Keterangan</td>
		<td>  3.6  SR , Kedalaman 10 Km, Pusat gempa berada di darat 25 km BaratDaya PURWAKARTA</td></tr>
</table>

</br>
</br>

<div class="col-lg-4">
<img class="img-rounded img-polaroid showmap" src="http://maps.google.com/maps/api/staticmap?center=-6.6,107.22&zoom=5&size=300x300&sensor=true&markers=color:red|label|-6.6,107.22" />
</div>


</div>

  
     <hr>
<?php
$this->load->view('vwFooter');
?>