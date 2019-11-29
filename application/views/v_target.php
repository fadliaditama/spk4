<?php $this->load->view('layout/header');?>
	<div class="container"> 
		<h1>Target</h1>
		<!--<div>
			<form>
			  <div class="form-group col-md-4">
			    <label for="kode_aspek">Kode Aspek</label>
			    <input type="text" class="form-control" id="kode_aspek" placeholder="A1">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="nama_aspek">Nama Aspek</label>
			    <input type="text" class="form-control" id="nama_aspek" placeholder="Nama Aspek">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="bobot">Bobot</label>
			    <input type="text" class="form-control" id="bobot" placeholder="100%">
			  </div>
			  <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>-->
		<br>
		<div>
			<table class='table'>
              <tr>
                <th>Aspek</th>
                <th>Faktor Penilaian</th>
                <th>Nilai Target</th>
				<th>Tipe</th>
              </tr>
              <tr>
              	<th rowspan='4'>Kandungan Asam</th>
              	<td>Fixed Acid</td>
              	<td>3</td>
              	<td>Core Factor</td>
              </tr>
              <tr>
              	<td>Volatile Acid</td>
              	<td>3</td>
              	<td>Secondary Factor</td>
              </tr>
              <tr>
              	<td>Citric Acid</td>
              	<td>3</td>
              	<td>Secondary Factor</td>
              </tr>
              <tr>
              	<td>pH</td>
              	<td>3</td>
              	<td>Core Factor</td>
              </tr>
			<th rowspan='5'>Kandungan Non Asam</th>
			<td>Residual Sugar</td>
			<td>3</td>
			<td>Secondary Factor</td>
		</tr>
		<tr>
			<td>Chlorides</td>
			<td>3</td>
			<td>Core Factor</td>
		</tr>
		<tr>
			<td>Free Sulfur Dioxide</td>
			<td>3</td>
			<td>Core Factor</td>
		</tr>
		<tr>
			<td>Sulphates</td>
			<td>3</td>
			<td>Core Factor</td>
		</tr>
		<tr>
			<td>Alcohol</td>
			<td>3</td>
			<td>Secondary Factor</td>
		</tr>
		    </table>
		<br>
		<!--<div>
			<h2>Kandungan Non Asam</h2>
			<table class="table table-bordered" id="tab2">
				<thead>
					<tr>
						<th>no</th>
						<th>Nama Alternatif</th>
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
							<td>nama</td>
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
	</div>-->
<?php $this->load->view('layout/footer');?>

