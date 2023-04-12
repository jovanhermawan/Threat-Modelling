<div class="border p-3" id="ptable">
				<?php include 'php/projects.php';
				if (mysqli_num_rows($res) > 0) { ?>

					<h1 class="p3">PROJECTS TABLE</h1>
					<table class="table" style="width: 32rem;">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Project Name</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;

							while ($rows = mysqli_fetch_assoc($res)) { ?>
								<tr>
								<th scope="row"><?= $i ?></th>
									<td><?= $rows['Project Name'] ?></td>
								</tr>
							<?php $i++;
							} ?>
						</tbody>
					</table>
				<?php } ?>
			</div>