<?php $this->load->view('layout/header');?>
	<div class="container"> 
		<h1>Kriteria</h1>
		<div>
			<form>
			  <div class="form-group col-md-4">
			    <label for="kode_aspek">Kode Kriteria</label>
			    <input type="text" class="form-control" id="kode_aspek" placeholder="A1">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="nama_aspek">Nama Kriteria</label>
			    <input type="text" class="form-control" id="nama_aspek" placeholder="Nama Kriteria">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="nilai">Nilai</label>
			    <input type="text" class="form-control" id="bobot" placeholder="Contoh Nilai '5'">
			  </div>
			  <div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
				  <label class="form-check-label" for="inlineRadio1">Core Factor</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				  <label class="form-check-label" for="inlineRadio2">Secondary Factor</label>
				</div>
				<br>
				<div class="col-md-4">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
		<br>
		<div>
			<h2>Kandungan Asam</h2>
			<table class="table table-bordered" id="tab1">
				<thead>
					<tr>
						<th>no</th>
						<th>Nama Aspek</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>no</td>
							<td>Nama Aspek</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td><button type="submit" class="btn btn-warning btn-sm">edit</button><button type="delete" class="btn btn-danger btn-sm">delete</button></td>
						</tr>				
				</tbody>
			</table>
			<button class="btn1 btn btn-sm btn-danger">Hide</button>
			<button class="btn2 btn btn-sm btn-warning">Show</button>
		</div>
		<br>
		<div>
			<h2>Kandungan Non Asam</h2>
			<table class="table table-bordered" id="tab2">
				<thead>
					<tr>
						<th>no</th>
						<th>Nama Aspek</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>no</td>
							<td>nama aspek</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td><button type="submit" class="btn btn-warning btn-sm">edit</button><button type="delete" class="btn btn-danger btn-sm">delete</button></td>
						</tr>				
				</tbody>
			</table>
			<button class="btn3">Hide</button>
			<button class="btn4">Show</button>
		</div>
	</div>
<?php $this->load->view('layout/footer');?>

