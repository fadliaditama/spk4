<?php $this->load->view('layout/header');?>
	<div class="container"> 
		<h1>Alternatif</h1>
		<div>
			<form method="POST" action="insert">
			  <div class="form-group col-md-3">
			    <label for="exampleInputEmail1">Kode Alternatif</label>
			    <input type="kode" class="form-control" id="" placeholder="Contoh A1">
			  </div>
			  <div class="form-group col-md-3">
			    <label for="exampleInputPassword1">Nama Alternatif</label>
			    <input type="password" class="form-control" id="" placeholder="Contoh Alternatif 1">
			  </div>
			  <div class="col-md-3">
			  	<button type="submit" class="btn btn-primary">Tambah</button>
			  </div>
			</form>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>no</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($mahasiswa as $row) 
				{ ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nim?></td>
						<td><?php echo $row->nama?></td>
						<td><button type="submit" class="btn btn-warning btn-sm">edit</button><button type="delete" class="btn btn-danger btn-sm">delete</button></td>
					</tr>				
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php $this->load->view('layout/footer');?>

