<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> 
        <style>
    .card{
    background: rgba( 255, 255, 255, 0.4 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 11px );
    -webkit-backdrop-filter: blur( 11px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
}</style> 
    </head>
        <body class="bg-secondary">
        <div class="container">
        <h5 class="text-warning mt-5">Add New Service</h5>
        <hr class="text-warning">
        <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mt-lg-auto mt-md-3 mt-sm-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="doctor-add-service">
                            <div class="mb-3">
                                <label for="exampleInputEmail1 " class="form-label text-light">service information</label>
                                <input type="text" name="info" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1 " class="form-label text-light">date</label>
                                <input type="date" name="date" class="form-control"  value="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-light">time</label>
                                <input type="time" name="time" class="form-control"value="" >
                            </div>
                            <button type="submit" class="btn btn-warning text-light">save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
        </body>
   
</html>
