<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>jumbotron.css" rel="stylesheet">


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome To Sisfo Gempa</h1>
        <p>Website ini menyediakan informasi tentang gempa bumi dan beragam informasi lainnya. fitur lainnya yaitu anda bisa mendapatkan sms dari kami jika anda mendaftar sebagai member.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

	<div class="container">
			<?php
			$this->load->view('vwMaps');
			?>
	</div>
	
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  
		<div class="col-lg-4">
          <h2>Gempa Bumi</h2>
          <p>Gempa bumi adalah getaran atau guncangan yang terjadi di permukaan bumi akibat pelepasan energi dari dalam secara tiba-tiba yang menciptakan gelombang seismik. 
			Gempa Bumi biasa disebabkan oleh pergerakan kerak Bumi (lempeng Bumi).Frekuensi suatu wilayah, mengacu pada jenis dan ukuran gempa Bumi yang di alami selama periode waktu.
			Akumulasi energi penyebab terjadinya gempabumi dihasilkan dari pergerakan lempeng-lempeng tektonik. Energi yang dihasilkan dipancarkan kesegala arah berupa gelombang gempabumi sehingga efeknya dapat dirasakan sampai ke permukaan bumi.
			Gempa Bumi biasa disebabkan oleh pergerakan kerak Bumi (lempeng Bumi). Frekuensi suatu wilayah, mengacu pada jenis dan ukuran gempa Bumi yang di alami selama periode waktu. Gempa Bumi diukur dengan menggunakan alat Seismometer. 
			Moment magnitudo adalah skala yang paling umum di mana gempa Bumi terjadi untuk seluruh dunia. Skala Rickter adalah skala yang di laporkan oleh observatorium seismologi nasional yang di ukur pada skala besarnya lokal 5 magnitude. 
			kedua skala yang sama selama rentang angka mereka valid. gempa 3 magnitude atau lebih sebagian besar hampir tidak terlihat dan besar nya 7 lebih berpotensi menyebabkan kerusakan serius di daerah yang luas, tergantung pada kedalaman gempa. 
			Gempa Bumi terbesar bersejarah besarnya telah lebih dari 9, meskipun tidak ada batasan besarnya. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
	  
        <div class="col-lg-4">
          <h2>Data Gempa Terakhir</h2>
          <?php
					$url = "http://www.bmkg.go.id/webXML/en_autogempa.xml";
					$sUrl = file_get_contents($url, False);
					$xml = simplexml_load_string($sUrl);
					?>
					
				<table border="1" cellpadding="4" cellspacing="0" style="border-collapse:collapse;" >
					<tr>
					<th colspan="3" sty	le="text-align:center" >Data Gempa Terakhir</th>
					</tr>
					<tr>
					<td>Tanggal / Jam</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Tanggal;?> / <?php echo $xml->gempa->Jam;?></td>
					</tr>
					<tr>
					<td>Lintang</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Lintang;?></td>
					</tr>
					<tr>
					<td>Bujur</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Bujur;?></td>
					</tr>
					<tr>
					<td>Magnitude</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Magnitude;?></td>
					</tr>
					<tr>
					<td>Data Wilayah</td>
					<td>:</td>
					<td><ul>
					<li><?php echo $xml->gempa->Wilayah1;?></li>
					<li><?php echo $xml->gempa->Wilayah2;?></li>
					<li><?php echo $xml->gempa->Wilayah3;?></li>
					<li><?php echo $xml->gempa->Wilayah4;?></li>
					<li><?php echo $xml->gempa->Wilayah5;?></li>
					</ul></td>
					</tr>
					<tr>
					<td>Keterangan</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Potensi;?></td>
					</tr>
				</table>
				
			</br>
			
			<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      
        <div class="col-lg-4">
          <h2>Jalur Gempa Dunia</h2>
          <p><img src="/ark/assets/images/jalur.png"></br></br>
			Indonesia merupakan daerah rawan gempabumi karena dilalui oleh jalur pertemuan 3 lempeng tektonik, yaitu: Lempeng Indo-Australia, lempeng Eurasia, dan lempeng Pasifik. 
			Lempeng Indo-Australia bergerak relatip ke arah utara dan menyusup kedalam lempeng Eurasia, sementara lempeng Pasifik bergerak relatip ke arah barat. 
			Jalur pertemuan lempeng berada di laut sehingga apabila terjadi gempabumi besar dengan kedalaman dangkal maka akan berpotensi menimbulkan tsunami sehingga Indonesia juga rawan tsunami. 
			Belajar dari pengalaman kejadian gempabumi dan tsunami di Aceh, Pangandaran dan daerah lainnya yang telah mengakibatkan korban ratusan ribu jiwa serta kerugian harta benda yang tidak sedikit, maka sangat diperlukan upaya-upaya mitigasi baik ditingkat pemerintah maupun masyarakat untuk mengurangi resiko akibat bencana gempabumi dan tsunami. 
			Mengingat terdapat selang waktu antara terjadinya gempabumi dengan tsunami maka selang waktu tersebut dapat digunakan untuk memberikan peringatan dini kepada masyarakat sebagai salah satu upaya mitigasi bencana tsunami dengan membangun Sistem Peringatan Dini Tsunami Indonesia (Indonesia Tsunami Early Warning System / Ina-TEWS).</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
<?php
$this->load->view('vwFooter');
?>