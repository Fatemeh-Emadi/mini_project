<?php include "header.php"?>
<div class="container d-flex justify-content-center align-items-center">
      <table class="table table-light table-striped mt-5 " style="width: 70%;" >
  <thead>
    <tr class="text-secondary">
      <th scope="col">#</th>
      <th scope="col">medical service</th>
      <th scope="col">doctor name</th>
      <th scope="col">medical expert</th>
      <th scope="col">time</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($services as $service):?>
    <tr>
      <th scope="row" class="text-secondary"><?php echo $service["m_id"];?></th>
      <td><?php echo $service["info"];?></td>
      <td><?php echo $service["first_name"] ." ". $service["last_name"];?></td>
      <td><?php echo $service["type"];?></td>
      <td><?php echo $service["time"];?></td>
      <td><?php echo $service["date"];?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include "footer.php"?>