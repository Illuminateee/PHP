<div class="table-container">
<table cellpadding="5px" width="100%">
    <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>AGE</th>
        <th>GENDER</th>
        <th>ACTION</th>
    </tr>
    <?php 
    $no = 1;
    foreach($a as $data){
    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data->name;?></td>
        <td><?php echo $data->address;?></td>
        <td><?php echo $data->age;?></td>
        <td><?php echo $data->gender;?></td>
        <td>
			<button><a href="#">Edit</a></button>
			<button><a href="#">Hapus</a></button>
		</td>
    </tr>
    <?php
    }
    ?>
</table>
</div>