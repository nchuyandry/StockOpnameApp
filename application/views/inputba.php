<?php

?>
<div class="row">
	<div class="col-12">
    	<div class="card">
    	  	<form class="form-horizontal" method="post" action="<?=base_url('submitform') ?>" onkeydown="return event.key!= 'Enter';">
        	<div class="card-header">
            	<div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Stock Opname</h5>
                    <h2 class="card-title">Input Berita Acara</h2>
                  </div>
                  <div class="col-sm-6 text-right">
                    <h4 class="card-title">Today : <?php echo date('d M Y') ?></h4>
                  </div>
                </div>
            </div>
            <div class="card-body">
            
                <div class="row">
                	<div class="col-md-12">
                		<div id="qr-reader"></div>
    					<div id="qr-reader-results"></div>
                	</div>
                   	<div class="col-md-6">
                   		<div class="form-group">
                   			<label>Barcode</label>
                   			<input type="text" class="form-control"  name="barcode" id="barcode" placeholder="Barcode" onchange="search()" />
	                       	<!--<button type="button" class="btn btn-outline-secondary"  name="cari" id="cari" onclick="search()" ><i class="fa fa-search"></i>&nbsp;Find</button>-->
                   		</div>
                   	</div>
                   	<div class="col-md-6">
                   	  	<div class="form-group">
	                       	<label>Nama Asset</label>
	                       	<input type="text" class="form-control" name="namaasset" id="namaasset">
	                   	</div>
	               	</div>
	               	<div class="col-md-4">
                   		<div class="form-group">
                       		<label>Merk</label>
                       		<input type="text" class="form-control" name="merk"  id="merk">
                   		</div>
                   	</div>
                   	<div class="col-md-4">
                   		<div class="form-group">
                       		<label>Type</label>
                       		<input type="text" class="form-control" name="type"  id="type">
                   		</div>
                   	</div>
                   	<div class="col-md-4">
                   		<div class="form-group">
                       		<label>User</label>
                       		<input type="text" class="form-control" name="user"  id="user">
                   		</div>
                   	</div>
                   	<div class="col-md-4">
                   		<div class="form-group">
        					<label>Pilih Depo</label>
        					<select class="form-control" name="depo" id="depo" >
        						<option value="">--Pilih Depo--</option>
        					<?php foreach($depo as $row){?>
          						<option value="<?php echo $row->depo?>"><?php echo $row->depo?></option>
          					<?php } ?>
          					</select>
      					</div>
      				</div>
      				<div class="col-md-4">
                   		<div class="form-group">
                       		<label>Lokasi</label>
                       		<input type="text" class="form-control" name="lokasi" id="lokasi">
                   		</div>
                   	</div>
					<div class="col-md-4">
                   		<div class="form-group">
                       		<label>Master Stock</label>
                       		<input type="text" class="form-control" name="masterstock" id="masterstock" >
                  		</div>
                	</div>
                	<div class="col-md-4 form-group">
                		<div class="form-group">
        					<label>Fisik Opname</label>
        					<select class="form-control" name="fisikopname" id="fisikopname" >
        						<option value="">-- Pilih --</option>
          						<option value="Ya">Ya</option>
          						<option value="Tidak">Tidak</option>
          					</select>
      					</div>
                   	</div>
                	<div class="col-md-4">
                   		<div class="form-group">
                       		<label>Kondisi</label>
                       		<input type="text" class="form-control"name="kondisi" id="kondisi" >
                  		</div>
                	</div>

                	<div class="col-md-12">
      					<div class="form-group">
                       		<label>Keterangan </label>
                       		<textarea rows="10" cols="60" class="form-control"  name="keterangan" id="keterangan"></textarea>
                    	</div>
                    </div>
                    <div class="col-md-12 text-right">
                      	<button type="submit" class="btn btn-fill btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div><!--
<div class="row">
	<div class="col-12">
    	<div class="card">
    	  	<div class="card-header">
            	<div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title">Your Ticket</h2>
                  </div>
                </div>
            </div>
            <div class="card-body">
            	<div class="table-responsive">
				<table id="dataTable" class="table table-hover table-sorter" style="width: 100%">
					<thead class="text-primary">
						<tr>
							<th>No.</th>
							<th>No. Ticket</th>
							<th>Tanggal</th>
							<th>Depo</th>
							<th>User</th>
							<th>Issue</th>
							<th>Solving</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
						foreach($person as $row){ 
						$i++;
					?>
						<tr>
							<td><?php echo $i?></td>
							<td><?php echo $row->notim ?></td>
							<td><?php echo $row->tglsubmit ?></td>
							<td><?php echo $row->depo ?></td>
							<td><?php echo $row->user ?></td>
							<td><?php echo $row->issue ?></td>
							<td><?php echo $row->solving ?></td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>No. Ticket</th>
							<th>Tanggal</th>
							<th>Depo</th>
							<th>User</th>
							<th>Issue</th>
							<th>Solving</th>
						</tr>
					</tfoot>
				</table>
				</div>   
            </div>
        </div>
  
    </div>
</div>-->