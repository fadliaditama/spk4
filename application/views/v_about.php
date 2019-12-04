<?php $this->load->view('layout/header');?>

<div class="container">
	<h1 align="center">Penentuan Prioritas Jenis Wine Berdasarkan Kandungan yang Mempengaruhi Kesehatan Gigi dengan Metode Profile Matching</h1>
	<hr class="my-4">	
	<p>Penelitian yang dilakukan di Universitas Adelaide telah mengungkapkan, tingkat keasaman dalam minuman anggur atau ‘wine’ bisa menyebabkan kerusakan gigi. Sebuah studi menunjukkan, mencicipi minuman ‘wine’ selama 10 menit bisa menimbulkan pelunakan enamel gigi. Cara menikmati Wine yang terbaik adalah dengan menyeruputnya secara perlahan. Namun, semakin lama Wine berkontak dengan lapisan email gigi, maka stain dan pengikisan akan semakin terjadi. Oleh karena itu, jangan biarkan Wine menggenang terlalu lama di dalam mulut.  Namun dalam penelitian ini, kami akan melakukan penyortiran  terhadap jenis wine yang ada di dataset dan menentukan wine terbaik untuk di konsumsi yang tingkat ‘merusak gigi’-nya lebih kecil.</p>
	<div class="col-sm-4">
		<ul class="list-group list-group-flush">
		  	<li class="list-group-item active">Daftar Anggota</li>
		  	<li class="list-group-item">Acmad Fadli Aditama (09021181621020)</li>
		 	<li class="list-group-item">Destia Asri Felliani (09021181621014)</li>
		  	<li class="list-group-item">Kartika Rahmayani (09021281621042)</li>
		 	<li class="list-group-item">Veti Vera (09021181621142)</li>
		</ul>
	</div>
	
	<hr class="my-4">
	<h1 align="center">Kesimpulan</h1>
	<p>Kami memilih Fixed acidity dan pH sebagai Core Factor pada kriteria Asam karena pada tingkat keasaman jika dibandingkan diantara Fixed Acidity, Volatile Acidity, Citric Acidity dan pH, kedua variable tersebut memiliki nilai tingkat keasaman yang lebih tinggi. Semangkin tinggi kandungan asam yang terdapat dalam suatu wine maka akan lebih mudah untuk merusak gigi karena asam bersifat korosif/merusak. Dan jika semakin tinggi kandungan Fixed acidity dan nilai pH dari suatu wine maka akan semakin tidak baik untuk kesehatan gigi.
Sedangkan pada kriteria NON-Asam kami memilih Chlorides, Free Sulfur Dioxide dan Sulphates sebagai Core Factor nya dikarenakan kandungan tersebut merupakan kandungan dalam wine yang baik untuk gigi. Clorides baik untuk gigi karena kandungan ini juga sering dipakai dalam pembuatan pasta gigi. Free Sulfur Dioxide merrupakan suatu Sulfur atau bisa seperti sejenis pengawet organic pada wine yang bisa menyebabkan wine bertahan dalam cukup suhu ruang, dan memiliki pengaruh yang cukup baik pada gigi meskipun tidak setinggi Clorides. Dan kandungan yang memberikan pengaruh yang kuat untuk menjaga kesehatan gigi adalan Sulphates, kandungan ini juga biasa ddigunakan dalam pasta gigi yang dapat membuat gigi menjadi lebih bersih dan menghasilkan busa saat kita menyikat gigi. 
Dan berdasarkan  program yang telah kami buat, kami memasukkan data yang sesuai dengan data yang telah di sediakan dan di syaratkan dalam pengerjaan tugas ini. Dalam web yang telah di kerjakan kami akan memasukkan nilai alternative kandungan Asam dan Non- Asam  kemudian  melakukan perhitungan sesuai dengan metode Profile Matching yaitu perhitungan nilai GAP, menentukan nilai bobot, melakukan pembobotan  pada kandungan Asam dan Non-Asam, Perhitungan Core Factor dan Secondary Factor lalu terakhir adalah melakukan Perangkingan. Yang akhirnya dari data random yang kami masukkan terdapat nilai yang sama pada perangkingan, namun dilihat dari nilai Core Factor yang tertinggi untuk menentukan urutan perangkingan nilai yang sama tersebut. Yang memiliki nilai Core Factor lebih tinggi akan berada di perangkingan yang diatas dari data yang satu nya.</p>
<hr class="my-4">
	<p>	Program ini dibuat untuk memenuhi UAS mata kuliah Sistem Pendukung Keputusan.</p>
</div>


<?php $this->load->view('layout/footer');?>