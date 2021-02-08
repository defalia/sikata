
	<?php $no=1; ?>

			<div class="col-md-9">
				<h4>Data Mahasiswa TA</h4>
				<table class="table table-bordered table-striped">
					<thead class="thead-dark text-center">
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Nama</th>
							<th scope="col">NIM</th>
							<th scope="col">Prodi</th>
							<th scope="col">SMT/Th. Akademik</th>
							<th scope="col">Bukti Bayar</th>
							<th scope="col">Tanggal Registrasi</th>
							<th scope="col"></th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($registrasi_ta as $key): ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $key['nama_mhs'] ?></td>
							<td><?php echo $key['nim_mhs'] ?></td>
							<td><?php echo $key['nama_prodi'] ?></td>
							<td><?php echo $key['tahun'] ?></td>
							<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['bukti_bayar'] ?>"><?php echo $key['bukti_bayar'] ?></a></td>
							<td><?php echo $key['tanggal_registrasi'] ?></td>
							<td class="text-center">
								<?php echo form_open('keuangan/verif_keu'); ?>
								<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
								<button type="submit" class="btn btn-success btn-sm w-100">Setuju<i class="fa fa-check"></i></button>
							</form>
							<button class="btn btn-danger btn-sm mt-1 w-100" data-toggle="modal" data-target="#myModal<?php echo $key['id_registrasi']?>"> Batal <i class="fa fa-check"></i></button>
						</td>
					</tr>
					<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>


</div>

<!-- Modal -->
<?php foreach ($registrasi as $key): ?>
<div class="modal fade" id="myModal<?php echo $key['id_registrasi']?>" role="dialog">
	<div class="modal-dialog">
		<?php echo form_open('keuangan/batal_keu'); ?>
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<input class="form-control" type="text" name="alasan_batal" placeholder="Alasan Pembatalan" required>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi']?>">
				<button type="submit" class="btn btn-default">Kirim</button>
			</div>
		</div>
	</form>
</div>
</div>
<?php endforeach; ?>
