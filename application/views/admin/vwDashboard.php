<?php
$this->load->view('admin/vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
<style>
    .panel{
        margin-left: 55px;
        float: left;
        width: 500px;
        height: 303px;
    }

</style>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Language', 'Speakers (in millions)'],
            ['10 Tahun', 13], ['12 Tahun', 83], ['15 Tahun', 1.4],
            ['8 Tahun', 2.3], ['17 Tahun', 46], ['20 Tahun', 300],
            ['11 Tahun', 38], ['8 Tahun', 5.5], ['13 Tahun', 5],
            ['23 Tahun', 20], ['31 Tahun', 33], ['33 Tahun', 1.5],
            ['29 Tahun', 72], ['35 Tahun', 2.9], ['50 Tahun', 33],
            ['27 Tahun', 29], ['55 Tahun', 0.01], ['60 Tahun', 6.5],
            ['25 Tahun', 2.5], ['24 Tahun', 61], ['40 Tahun', 74], ['30 Tahun', 52],
        ]);

        var options = {
            title: 'Age System Use',
            legend: 'none',
            pieSliceText: 'label',
            slices: {4: {offset: 0.2},
                12: {offset: 0.3},
                14: {offset: 0.4},
                15: {offset: 0.5},
            },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ]);

        var options = {
            title: 'Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart12'));
        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'New Member', 'Old member'],
            ['2004', 1000, 400],
            ['2005', 1170, 460],
            ['2006', 660, 1120],
            ['2007', 1030, 540]
        ]);

        var options = {
            title: 'Trafik Member'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>


<div class="page-header container">
    <h1><small>Dashboard</small></h1>
</div>
<div class="container">

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Rata - Rata Pengguna Sistem</div>
        <div class="panel-body">
            <div id="piechart" style="width: 300px; height: 200px;"></div>

        </div>
    </div>

    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading">Trafik Pengguna Member</div>
        <div class="panel-body">
            <div id="chart_div" style="width: 300px; height: 200px;"></div>

        </div>
    </div>

    <div class="panel panel-danger">
        <!-- Default panel contents -->
        <div class="panel-heading">Notification</div>
        <div class="panel-body">

            <ul style="max-width: 260px;" class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="#">
                        <span class="badge pull-right">42</span>
                        New Users
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="badge pull-right">3</span>
                        Messages
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="badge pull-right">6</span>
                        Notifications
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="panel panel-warning">
        <!-- Default panel contents -->
        <div class="panel-heading">Daily Activities </div>
        <div class="panel-body">
            <div id="piechart12" style="width: 300px; height: 200px;"></div>
        </div>
    </div>

    <div class="panel panel-info">
        <!-- Default panel contents -->
        <div class="panel-heading">Antisipasi saat terjadi gempa</div>
        <div class="panel-body">
            <p>1.	Jika anda didalam ruangan, hindari dari benda-benda berat yang mudah jatuh, berlindunglah dikolong meja atau perabot lain yang dianggap kuat dan aman. Peganglah kaki meja atau perabot lain dimana anda berlindung dan waspada jika perabot tersebut bergeser. Tunggu sampai getaran berhenti, dan jika keadaan aman bergeraklah untuk pindah ketempat yang lebih aman dan waspada terhadap benda-benda yang mudah jatuh seperti kaca, perabot-perabot yang berat, dan lain-lain serta yang paling penting adalah anda harus tenang.
</br>		2.	Jika anda diluar ruangan, cari tempat yang terbuka, hindari dari gedung-gedung, aliran listrik, pohon-pohon besar dan lain-lain.
</br>		3.	Jika anda sedang mengemudi, berhentilah jika keadaan aman dan usahakan masi didalam kendaraan, hindari jembatan terowongan dan aliran listrik.
</br></p>
        </div>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Antisipasi setelah terjadi gempa</div>
        <div class="panel-body">
            <p>a)	Terhadap orang yang luka berat, jangan ditinggalkan sendirian dan jangan dipindahkan kecuali kalau mereka dalam bahaya yang segera akan menambah luka lagi.
</br>		b)	Waspada terhadap kebakaran.
</br>		c)	Matikan kompor gas, segera putus aliran gas dan instalasinya atau lepaskan slang aliran gas dari tabungnya.
</br>		d)	Matikan aliran lampu listrik dari sumbernya.
</br>		e)	Turunkan benda-benda berat yang tergantung di tembok yang mungkin dapat menjatuhi orang.
</br>		f)	Siapkan barang-barang ringan untuk kebutuhan pokok yang mudah dibawa dan obat-obatan ringan untuk keperluan paling tidak 3 hari jika anda pindah ketempat yang jauh.
        </p>
        </div>
    </div>

</div><!-- /.container -->
<hr>
<?php
$this->load->view('admin/vwFooter');
?>