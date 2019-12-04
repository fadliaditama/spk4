<?php $this->load->view('layout/header');?>
	<div class="container"> 
		<h1>Perhitungan</h1>
		<br>
		<div>
			<h2>Tabel Aspek Kandungan Asam</h2>
			<table class="table table-bordered" id="tab1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Fixed Acid</th>
						<th>Volatile Acid</th>
						<th>Citric Acid</th>
						<th>pH</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						foreach ($mahasiswa as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$value->nama.'</td>
									<td>'.$value->fixed_acid.'</td>
									<td>'.$value->volatile_acid.'</td>
									<td>'.$value->citric_acid.'</td>
									<td>'.$value->ph.'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn1 btn btn-sm btn-danger">Hide</button>
				<button class="btn2 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Tabel Aspek Kandungan Non Asam</h2>
			<table class="table table-bordered" id="tab2">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Residual Sugar</th>
						<th>Chlorides</th>
						<th>Free Sulfur Dioxide</th>
						<th>Sulphates</th>
						<th>Alcohol</th>
					</tr>
				</thead>
				<tbody>
					<?php  
						$count = 1;
						foreach ($mahasiswa as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$value->nama.'</td>
									<td>'.$value->residual_sugar.'</td>
									<td>'.$value->chlorides.'</td>
									<td>'.$value->free_sulfur_dioxide.'</td>
									<td>'.$value->sulphates.'</td>
									<td>'.$value->alcohol.'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn3 btn btn-sm btn-danger">Hide</button>
				<button class="btn4 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Tabel GAP Kandungan Asam</h2>
			<table class="table table-bordered" id="tab3">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Fixed Acid</th>
						<th>Volatile Acid</th>
						<th>Citric Acid</th>
						<th>pH</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						foreach ($pm->gap_asam as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$mahasiswa[$key]->nama.'</td>
									<td>'.$value[0].'</td>
									<td>'.$value[1].'</td>
									<td>'.$value[2].'</td>
									<td>'.$value[3].'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn5 btn btn-sm btn-danger">Hide</button>
				<button class="btn6 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Tabel GAP Kandungan Non Asam</h2>
			<table class="table table-bordered" id="tab4">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Residual Sugar</th>
						<th>Chlorides</th>
						<th>Free Sulfur Dioxide</th>
						<th>Sulphates</th>
						<th>Alcohol</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						foreach ($pm->gap_non_asam as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$mahasiswa[$key]->nama.'</td>
									<td>'.$value[0].'</td>
									<td>'.$value[1].'</td>
									<td>'.$value[2].'</td>
									<td>'.$value[3].'</td>
									<td>'.$value[4].'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn7 btn btn-sm btn-danger">Hide</button>
				<button class="btn8 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Ketentuan Pembobotan</h2>
			<table class="table table-bordered table-sm" id="tab5">
				<thead>
					<tr>
						<th>Selisih</th>
						<th>Bobot Nilai</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>0</td>
						<td>5</td>
					</tr>
					<tr>
						<td>1</td>
						<td>4.5</td>
					</tr>
					<tr>
						<td>-1</td>
						<td>4</td>
					</tr>
					<tr>
						<td>2</td>
						<td>3.5</td>
					</tr>
					<tr>
						<td>-2</td>
						<td>3</td>
					</tr>
					<tr>
						<td>3</td>
						<td>2.5</td>
					</tr>
					<tr>
						<td>-3</td>
						<td>2</td>
					</tr>
					<tr>
						<td>4</td>
						<td>1.5</td>
					</tr>
					<tr>
						<td>-4</td>
						<td>1</td>
					</tr>
				</tbody>
			</table>
			<div align="right">
				<button class="btn9 btn btn-sm btn-danger">Hide</button>
				<button class="btn10 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Pembobotan Kandungan Asam</h2>
			<table class="table table-bordered" id="tab6">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Fixed Acid</th>
						<th>Volatile Acid</th>
						<th>Citric Acid</th>
						<th>pH</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						foreach ($pm->bobot_asam as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$mahasiswa[$key]->nama.'</td>
									<td>'.$value[0].'</td>
									<td>'.$value[1].'</td>
									<td>'.$value[2].'</td>
									<td>'.$value[3].'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn11 btn btn-sm btn-danger">Hide</button>
				<button class="btn12 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Pembobotan Kandungan Non Asam</h2>
			<table class="table table-bordered" id="tab7">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Residual Sugar</th>
						<th>Chlorides</th>
						<th>Free Sulfur Dioxide</th>
						<th>Sulphates</th>
						<th>Alcohol</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						foreach ($pm->bobot_non_asam as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$mahasiswa[$key]->nama.'</td>
									<td>'.$value[0].'</td>
									<td>'.$value[1].'</td>
									<td>'.$value[2].'</td>
									<td>'.$value[3].'</td>
									<td>'.$value[4].'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn13 btn btn-sm btn-danger">Hide</button>
				<button class="btn14 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<div>
			<h2>Perhitungan Factor Kandungan Asam</h2>
			<table class="table table-bordered" id="tab8">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>CF Asam</th>
						<th>SF Asam</th>
						<th>Nilai Asam</th>
						<th>CF Non Asam</th>
						<th>SF Non Asam</th>
						<th>Nilai Non Asam</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 1;
						foreach ($pm->ncf_asam as $key => $value) {
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$mahasiswa[$key]->nama.'</td>
									<td>'.$pm->ncf_asam[$key].'</td>
									<td>'.$pm->nsf_asam[$key].'</td>
									<td>'.$pm->total_asam[$key].'</td>
									<td>'.$pm->ncf_non_asam[$key].'</td>
									<td>'.$pm->nsf_non_asam[$key].'</td>
									<td>'.$pm->total_non_asam[$key].'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn15 btn btn-sm btn-danger">Hide</button>
				<button class="btn16 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
		<br>
		<br>
		<div>
			<h2>Ranking</h2>
			<table class="table table-bordered js-sort-table" id="tab9">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Alternatif</th>
						<th class="js-sort-number">Nilai Total</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$max = max($pm->rank);
						$bg = '';
						$count = 1;
						foreach ($pm->rank as $key => $value) {
							if($pm->rank[$key] == $max)
								$bg = "#ffb2ae ";
							else
								$bg = 'ffffff';
							echo '
								<tr>
									<td>'.$count.'</td>
									<td>'.$mahasiswa[$key]->nama.'</td>
									<td bgcolor='.$bg.'>'.$pm->rank[$key].'</td>
								</tr>
							';$count++;
						}
					?>
				</tbody>
			</table>
			<div align="right">
				<button class="btn17 btn btn-sm btn-danger">Hide</button>
				<button class="btn18 btn btn-sm btn-warning">Show</button>
			</div>
		</div>
	</div>
<?php $this->load->view('layout/footer');?>

