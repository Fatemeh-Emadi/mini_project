<?php include "header.php"?>
<div class="container d-flex justify-content-center align-items-center">
      <table class="table table-light table-striped mt-5" style="width: 70%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">medical service</th>
      <th scope="col">doctor name</th>
      <th scope="col">medical expert</th>
      <th scope="col">time</th>
      <th scope="col">date</th>
      <th scope="col">reserve</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($services as $service):?>
    <tr>
      <th scope="row"><?php echo $service["m_id"];?></th>
      <td><?php echo $service["info"];?></td>
      <td><?php echo $service["first_name"] ." ". $service["last_name"];?></td>
      <td><?php echo $service["type"];?></td>
      <td><?php echo $service["time"];?></td>
      <td><?php echo $service["date"];?></td>
      <form id="form-reserve-<?php echo $service["m_id"];?>">
      <input type="hidden" name="service_id" value="<?php echo $service["m_id"];?>">
      <td><button type="button" onclick='reserve(<?php echo $service["m_id"]; ?>)' class="btn btn-outline-warning" id="btn-reserve-<?php echo $service["m_id"];?>" >reserve</button></td>
      </form>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script>
    function reserve(service_id){
    let btn=document.getElementById("btn-reserve-"+service_id);
   
    let form=document.getElementById("form-reserve-"+service_id);
    let form_data=new FormData(form);
  
    fetch("reserve",{
      method:"post",
      body:form_data
    }).then(
      result=>result.text()
      
    ).then(result=>{
      console.log(result);
      if(result==1){
       
        btn.classList.remove("btn-outline-warning");
        btn.classList.add("btn-warning");
        
        btn.innerHTML="reserved";
      }
      else if(result==0){
        btn.classList.remove("btn-warning");
        btn.classList.add("btn-outline-warning");
        
        btn.innerHTML="reserve";
      }
    }).catch(error=>{
      alert(error)
    });
  
  }
  </script>
<?php include "footer.php"?>