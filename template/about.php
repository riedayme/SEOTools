<?php defined('BASEPATH') OR exit('no direct script access allowed');?>

<div class="modal fade" id="about" tabindex="-1" aria-labelledby="about" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">About</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<table class="table">
					<tbody>
						<tr>
							<td>Name</td>
							<td>
								<?php echo $appinfo['name']; ?>
							</td>
						</tr>
						<tr>
							<td>Version</td>
							<td>
								<?php echo $appinfo['version']; ?>
							</td>
						</tr>
						<tr>
							<td>Creator</td>
							<td>
								<?php echo $appinfo['creator']; ?>
							</td>
						</tr>
						<tr>
							<td>Contact</td>
							<td>
								<a target="_blank" href="<?php echo $appinfo['contact']; ?>">Facebook</a>
							</td>
						</tr>
						<tr>
							<td class=" u-text-center" colspan="2">Build With</td>
						</tr>
						<tr>
							<td class="u-p-medium u-text-bold" colspan="2">
								<span class="badge mb-1 bg-primary">PHP Native</span>
								<a href="https://plainadmin.com" rel="nofollow" target="_blank" class="badge mb-1 bg-dark">
								PlainAdmin
							</td>
						</tr>       
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>