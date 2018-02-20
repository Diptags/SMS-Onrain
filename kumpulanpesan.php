<html>
	<head>
		<meta charset="utf-8">
		<title>Kumpulan Pesan</title>

		<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,1000" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/messages.css">
	</head>

<body id="home" style="background-image: linear-gradient(120deg, #000428 0%,#004e92  100%)">
                <h1 style=text-align:center>Terima Kasih Pesannya !</i><br><br>
				<span style='font-size:28px; color:red'>Admin akan segera menampilkan pesanmu!</span></h1>
				<p style='font-size:20px; color:lightgreen;text-align:center'> Silakan tunggu beberapa menit, lalu refresh browser kamu! </p>
			<div style=text-align:center>
				<a href="home.html"><button class="button button1">Kembali</button></a>
			</div>

            <br>

    <?php
    include 'koneksi.php';
    $datapesan = mysqli_query($koneksi, "SELECT * from datapesan");

    foreach ($datapesan as $row){
        echo "
            <div style='background-color:#434343;position:absolute;left:28%;border-radius:10px;width:45%'align='center'>
            <p style='color:orange;text-align:center;font-size:20px;font-weight:bold'>Pesan dari - Untuk: </p>
            <p style='color:white;text-align:center;font-size:19px;font-weight:bold'>".$row['pengirim']."<span> - ".$row['penerima']."</span> 
            </p>
            <p style='color:orange;text-align:center;font-size:20px;font-weight:bold'>Isi Pesan:
            </p>
            <p style='color:white;text-align:center;font-size:19px;font-weight:bold'>".$row['pesan']."
            </p>
            </div><br><br><br><br><br><br><br><br><br><br><br><br>";
    }?>

        <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
</body>
</html>