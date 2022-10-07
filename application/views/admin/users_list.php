<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="accordion-header">
	<div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                  <h4 class="card-title">
                    <i class="fa fa-list"></i>
                    Admin List <a href="<?= base_url('admin/user/add_user');?>" name="add-list"class="btn btn-primary pull-right">Add-User</a></h4>
              </div>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="col-lg-12" style="margin-top:10px ;">
<div class="card">
<div class="card-body">
<table class="table table-striped table-bordered" id="mytable">
	<thead>
<div class="card-title">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Status</th>
			<th>Action</th>

		</tr>
</div>
	</thead>	

	<tbody>
		<?php $i=0;foreach($users as $row){ $i++;?>

		<tr>
			<td><?= $i;?></td>
			<td><?= $row['firstname'];?></td>
			<td><?= $row['email'];?></td>
			 <td>
			 	<?php if($row['status']=='1') { ?>
			 	<button class="btn btn-success" onclick="changeStatus(<?php echo $row['id'];?>,'active')">Active</button>
			 	<?php } else { ?>
			 	<button class="btn btn-danger" onclick="changeStatus(<?php echo $row['id'];?>,'inactive')">Inactive</button>
			 	<?php } ?>

			 </td>
			<td>
				
					<a href="<?= base_url('admin/user/'.$row['id']) ?>" class="btn btn-primary">Edit</a>
					<a href="<?= base_url('admin/user/del_user/'.$row['id']) ?>" class="btn btn-danger">Delete</a>
				
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<script type="text/javascript" src="https//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</div>
</div>	
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#mytable').DataTable();
});


function changeStatus(id,status) {
	var res = confirm("Are you sure to change status?");
	if(res) {

		 $.ajax({
	 	url: "<?php echo base_url('admin/user/change_status');?>", 
	 	method : "post",
	 	data : {id:id,status:status},
	 	success: function(result){
    		
    		if(result) {

    			location.reload();
    		}
	  }
	});

	} else {

	}
	

}
</script>