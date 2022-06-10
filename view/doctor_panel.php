<?php include "header.php" ;
$i=1;
$j=1;
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-6 mt-5 ms-5">
      <h5 class="text-light">doctor's medical services</h5>
      <hr class="text-light">
      <a href="add-service" class="btn btn-success "> <i class="fas fa-plus"></i></a>
      <table class="table table-light table-striped ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">medical service</th>
            <th scope="col">doctor name</th>
            <th scope="col">medical expert</th>
            <th scope="col">time</th>
            <th scope="col">date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($service_array as $service) : ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $service["info"]; ?></td>
              <td><?php echo $service["first_name"] . " " . $service["last_name"]; ?></td>
              <td><?php echo $service["type"]; ?></td>
              <td><?php echo $service["time"]; ?></td>
              <td><?php echo $service["date"]; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>


    </div>
    <div class="col-6 mt-5 ms-5">
    <h5 class="text-light">patient list</h5>
      <hr class="text-light">
      <table class="table table-light table-striped ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">patient name</th>
            <th scope="col">medical service</th>
           
            <th scope="col">time</th>
            <th scope="col">date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($service["reserve"] as $reserve) : ?>
            <tr>
              <th scope="row"><?php echo $j++; ?></th>
              <td><?php echo $reserve["p_name"] . " " . $reserve["p_lname"]; ?></td>
              <td><?php echo $reserve["info"]; ?></td>
              <td><?php echo $reserve["time"]; ?></td>
              <td><?php echo $reserve["date"]; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>

  </div>

</div>
<?php include "footer.php" ?>