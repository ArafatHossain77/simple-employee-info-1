<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card p-5">
        <div class="card-header">
            <h2>Info Desk</h2>
        </div>
            @if(request()->has('id'))
            <form method="POST" action="{{route('updateEmployee',request()->has('id'))}}">
                @method('put')
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>NAME :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->name}}" name="name" class="form-control" id="inputEmail3" placeholder="Type your name..." >
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>EMAIL :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->email}}" name="email" class="form-control" id="inputPassword3" placeholder="Type your email..." >
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>ADDRESS :</h5></label>
                    <div class="col-sm-10">
                        <input type="text"value="{{request()->address}}"  name="address" class="form-control" id="inputPassword3"  placeholder="Type your address...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->mobile}}" name="mobile" class="form-control" id="inputPassword3" placeholder="Type your number..." >
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Date of Birth :</h5></label>
                    <div class="col-sm-10">
                        <input type="date"  value="{{request()->dob}}"name="dob" class="form-control" id="inputPassword3">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Designation :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->designation}}" name="designation" class="form-control" id="inputPassword3" placeholder="Type your Designation...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Salary :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->salary}}" name="salary" class="form-control" id="inputPassword3" placeholder="Type here...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <button type="submit" name="add" class="text-bg-info p-3">UPDATE INFO</button>
            </form>
        @else
            <form method="POST" action={{route('addTodo')}}>
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>NAME :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->name}}" name="name" class="form-control" id="inputEmail3" placeholder="Type your name...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>EMAIL :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->email}}" name="email" class="form-control" id="inputPassword3" placeholder="Enter your email..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>ADDRESS :</h5></label>
                    <div class="col-sm-10">
                        <input type="text"value="{{request()->address}}"  name="address" class="form-control" id="inputPassword3" placeholder="Type your address..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->mobile}}" name="mobile" class="form-control" id="inputPassword3" placeholder="Type your Number..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Date of Birth :</h5></label>
                    <div class="col-sm-10">
                        <input type="date"  value="{{request()->dob}}"name="dob" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Designation :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->designation}}" name="designation" class="form-control" id="inputPassword3" placeholder="Type your Designation..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Salary :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->salary}}" name="salary" class="form-control" id="inputPassword3" placeholder="Type here..."  >
                    </div>
                </div>
                <button type="submit" name="add" class="text-bg-info p-3">ADD INFO</button>
            </form>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">{!! \Session::get('success') !!} </div>
            @endif
        </form>
    </div>
</div>
        <div class="container mt-5">
                <div class="card-header">
                    <div class="card p-5 mt-5 mb-5">
                    <h2> All Employee Info Desk :</h2>
                        <table class="table table-bordered mt-3 p-5 mb-5">
            <thead>
                    <tr>
                        <th scope="col">S-NUM</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Salary</th>
                        <th scope="col">BIN</th>
                    </tr>
            </thead>
                     <tbody>

                     <div class="input-group mb-2 mt-2">
                         <input type="text" value="{{request('#')}}" class="form-control" placeholder="Search employee info. . ." aria-label="Recipient's username" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <span type="submit" class="btn btn-success" id="basic-addon2">Search</span>
                         </div>


                    @php($i=1)
                    @foreach($employeeAllData as $employeeData)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$employeeData->name}}</td>
                            <td>{{$employeeData->email}}</td>
                            <td>{{$employeeData->address}}</td>
                            <td>{{$employeeData->mobile}}</td>
                            <td>{{$employeeData->dob}}</td>
                            <td>{{$employeeData->designation}}</td>
                            <td>{{$employeeData->salary}}</td>
                            <td>
                           <span class="badge  rounded-pill">
                                  <a href="{{route('index',['name'=>$employeeData->name,'mobile'=>$employeeData->mobile,'email'=>$employeeData->email,'id'=>$employeeData->id,'address'=>$employeeData->address,'designation'=>$employeeData->designation,'dob'=>$employeeData->dob,'salary'=>$employeeData->salary])}}"
                                     class="btn btn-warning btn-sm">Edit</a>
                                  <a href="#"
                                     onclick="event.preventDefault();document.getElementById('delete-to').submit();"
                                     class="btn btn-danger btn-sm">Delete</a>
                                    <form id="delete-to" method="POST" action="{{route('deleteEmployee',$employeeData->id)}}" method="post" class="d-none">
                                        @csrf
                                        @method('delete')
                                    </form>
                           </span>
                            </td>
                            </tr>
                            @endforeach
                         </tbody>
                    </div>
            </div>
              </table>

     </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
