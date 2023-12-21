<div class="row">
	<div class="col-12">
    	<div class="card">
    	  	<form class="form-horizontal" method="post" action="<?=base_url('submitrequest') ?>">
        	<div class="card-header">
            	<div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">System Access Request Form</h5>
                    <h2 class="card-title">Request Form</h2>
                  </div>
                  <div class="col-sm-6 text-right">
                    <h4 class="card-title">Today : <?php echo date('d M Y') ?></h4>
                  </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                   	<div class="col-md-4">
                   		<div class="form-group">
                   		<label>NIK</label>
                       		<input type="text" class="form-control" disabled="" name="nik" value="<?php echo $this->session->userdata('nik')?>">
                   		</div>
                   	</div>
                   	<div class="col-md-4">
                   	  	<div class="form-group">
	                       	<label>Nama Karyawan</label>
	                       	<input type="text" class="form-control" disabled="" name="nama" value="<?php echo $this->session->userdata('name')?>">
	                   	</div>
	               	</div>
	               	<div class="col-md-4">
                   		<div class="form-group">
                       		<label for="email address">Alamat Email</label>
                       		<input type="email" class="form-control" placeholder="example@tvip.co.id" name="email" required="">
                   		</div>
                   	</div>
                   	<div class="col-md-4">
                   		<div class="form-group">
                       		<label for="email address">Departemen</label>
                       		<input type="text" class="form-control" disabled="" name="dept" value="<?php echo $this->session->userdata('dept')?>">
                  		</div>
                	</div>
                	<div class="col-md-4">
                   		<div class="form-group">
                       		<label for="email address">Jabatan</label>
                       		<input type="text" class="form-control" disabled="" name="jabatan" value="<?php echo $this->session->userdata('jabatan')?>">
                  		</div>
                	</div>
                	<div class="col-md-2">
                   		<div class="form-group">
                       		<label for="email address">Level</label>
                       		<input type="text" class="form-control" disabled="" name="level" value="<?php echo $this->session->userdata('level')?>">
                  		</div>
                	</div>
                	<div class="col-md-4">
                   		<div class="form-group">
                       		<label for="email address">Depo Asal</label>
                       		<input type="text" class="form-control" disabled="" name="lokasi" value="<?php echo $this->session->userdata('lokasi')?>">
                  		</div>
                	</div>
                	<div class="col-md-4">
                   		<div class="form-group">
        					<label for="selectsystem">Pilih sistem</label>
        					<select class="form-control" name="system" id="system">
          						<option value="CCTV">CCTV</option>
          						<option value="Database">Database</option>
          						<option value="VPN">VPN</option>
          					</select>
      					</div>
      				</div>
      				<div class="col-md-12">
      					<div class="form-group">
                       		<label>Kebutuhan </label>
                       		<textarea rows="10" cols="60" class="form-control" placeholder="Here can be your description" name="reason" required=""></textarea>
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
</div>
<div class="row">
	<div class="col-12">
    	<div class="card">
    	  	<div class="card-header">
            	<div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title">Your Request</h2>
                  </div>
                </div>
            </div>
            <div class="card-body">
            	<div class="table-responsive">
				<table id="dataTable" class="table table-hover table-sorter" style="width: 100%">
					<thead class="text-primary">
						<tr>
							<th>No.</th>
							<th>Permintaan Akses</th>
							<th>Kebutuhan</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$i = 0;
					foreach($drequest as $row){ 
					$i++;
					?>
						<tr>
							<td><?php echo $i?></td>
							<td><?php echo $row->system ?></td>
							<td><?php echo $row->reason ?></td>
							<td>
							<?php if($row->status === 'Open'){?>
								<span class="badge badge-info"><?php echo $row->status ?></span>
							<?php }elseif($row->status === 'Approved'){?>
								<span class="badge badge-success"><?php echo $row->status ?></span>
							<?php }else{ ?>
								<span class="badge badge-danger"><?php echo $row->status ?></span>
							<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>System Request</th>
							<th>Reason</th>
							<th>Status</th>
						</tr>
					</tfoot>
				</table>
				</div>   
            </div>
        </div>
  
    </div>
</div>