<div class="row">
	<div class="col-12">
    	<div class="card">
    	  	<div class="card-header">
            	<div class="row">
                  <div class="col-sm-6 text-left">
	                  <h5 class="card-category">BA Stock Opname 2022</h5>
    	              <h2 class="card-title">List Asset</h2>
                  </div>
                </div>
            </div>
            <div class="card-body">
            	<div class="table-responsive">
				<table id="dataTable" class="table table-hover table-sorter" style="width: 100%">
					<thead class="text-primary">
						<tr>
							<th>No.</th>
							<th>Tanggal</th>
							<th>Barcode</th>
							<th>Nama Asset</th>
							<th>Merk</th>
							<th>Type</th>
							<th>User</th>
							<th>Depo</th>
							<th>Lokasi</th>
							<th>Master Stock</th>
							<th>Fisik Opname</th>
							<th>Kondisi</th>							
							<th>Keterangan</th>							
						</tr>
					</thead>
					<tbody id="showdata">	
						<?php 
						$i = 0;
						foreach($baso as $row){ 
						$i++;
						$tgl = date_create($row->tanggal);
						$tglsub = date_format($tgl, 'd M Y H:i:s');
						$tglres = date_format($tgl, 'Y-m-d');
					?>
						<tr>
							<td><?php echo $i?></td>
							<td><?php echo $tglsub ?></td>
							<td><?php echo $row->barcode ?></td>
							<td><?php echo $row->namaasset ?></td>
							<td><?php echo $row->merk ?></td>
							<td><?php echo $row->type ?></td>
							<td><?php echo $row->user ?></td>
							<td><?php echo $row->depo ?></td>
							<td><?php echo $row->lokasi ?></td>
							<td><?php echo $row->masterstock ?></td>
							<td><?php echo $row->fisikopname ?></td>
							<td><?php echo $row->kondisi ?></td>
							<td><?php echo $row->keterangan ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				</div>  
            </div>
        </div>
  
    </div>
</div>
