	<div class="col-md-12 text-left">
		<a href="#" class = "btn btn-primary" data-toggle="modal" data-target="#modal-document_member">Read More</a>
	</div>

	<!-- Dokuwiki Modal -->
	<div class="modal fade" id="modal-document_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="exampleModalLabel">Add Members</h4>
				</div>
				<div class="modal-body">
					<div>
						Testing
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Dokuwiki Modal -->

<?php
Yii::app()->clientScript->registerScript('adding-document-members-script', "
$(document).ready(function(){
	$('#modal-document_member').on('shown.bs.modal', function (e) {
	})
});
", CClientScript::POS_LOAD);
?>