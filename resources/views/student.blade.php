<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='stylesheet' href='{{asset('css/style.css')}}'>

    <title>Student management system</title>
  </head>
  <body>
    @include('navbar')
    <div class="row header-conatiner justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2018/05/21/23/31/kids-3420032_960_720.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Enter information of New Student</h5>
                          <form action="{{url('/store')}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="cne">CNE</label>
                              <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input name="secondName" type="text" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="number" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                          </form>
                        </div>
                      </div>

                    
                </section>
            </div>
        </div>  
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>  
    @elseif($layout== 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2013/07/12/15/19/graduation-149646_960_720.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Edit Student Information</h5>
                          <form action="{{url('/update/'.$student->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="cne">CNE</label>
                              <input name="cne" value="{{$student->cne}}" type="text" class="form-control" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input name="firstName" value="{{$student->firstName}}" type="text" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input name="secondName" value="{{$student->secondName}}" type="text" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="number" value="{{$student->age}}" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input name="speciality" value="{{$student->speciality}}" type="text" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                          </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>  
    @endif

    <footer>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>