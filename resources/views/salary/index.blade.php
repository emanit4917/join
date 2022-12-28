<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Employe Salary</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Employee Salary</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">E_Name</th>
                                <th scope="col">E_Salary</th>
                                <th scope="col">E_Age</th>
                                <th scope="col">E_Gender</th>
                                <th scope="col">E_Department</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $key => $row)
                              <tr>
                                <th scope="row">{{$key ++ }}</th>
                                  <td>{{$row->name}}</td>
                                  <td>{{$row->salary->salary}}</td>
                                  
                                  <td>{{$row->age}}</td>
                                  <td>{{$row->gender}}</td>
                                  <td>{{$row->department->dep_name}}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>