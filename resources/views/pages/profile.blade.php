@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Welcome username</h1>
@stop
@section('css')
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
@stop

@section('content')
    <div class="container">
        <form>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fullName">Full Name :</label>
                    <input type="text" class="form-control" name="name" id="fullName" aria-describedby="helpId"
                           placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-group">
                    <label for="pAddress">Permanent Address :</label>
                    <input type="text" class="form-control" name="pAddress" id="pAddress" aria-describedby="helpId"
                           placeholder="Enter Your Permanent Address" required>
                </div>
                <div class="form-group">
                    <label for="tAddress">Temporary Address :</label>
                    <input type="text" class="form-control" name="tAddress" id="tAddress" aria-describedby="helpId"
                           placeholder="Enter Your Temporary Address">
                </div>
                <div class="form-group">
                    <label>Date Of Birth:</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker"
                               placeholder="Enter Your Temporary Address" name="dob" required>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-success ">
                        <i class='glyphicon glyphicon-save-file'></i>
                        Save
                    </button>
                    <button type="reset" class="btn btn-danger ">
                        <i class='glyphicon glyphicon-edit'></i>
                        Clear
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email"
                           placeholder="Enter your Email Address" required>
                </div>
                <div class="form-group">
                    <label for="parentNo"> Parent Contact Number :</label>
                    <input type="tel" class="form-control" name="parentNo" id="parentNo"
                           placeholder="Enter your Parent Contact No." required>
                </div>
                <div class="form-group">
                    <label for="primaryNo">Primary Contact Number :</label>
                    <input type="tel" class="form-control" name="primaryNo" id="primaryNo"
                           placeholder="Enter your Primary Contact No." required>
                </div>
                <div class="form-group">
                    <label for="secondaryNo">Secondary Contact Number : </label>
                    <input type="tel" class="form-control" name="secondaryNo" id="secondaryNo"
                           placeholder="Enter your Secondary Contact No.">
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="semester">Select Your Semester</label>
                    <select class="form-control" name="semester" id="semester">
                        <option>----Select Semester----</option>
                        <option>b</option>
                        <option>c</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" name="name" id="fullName" aria-describedby="helpId"
                           placeholder="Enter your Full Name">
                </div>
                <div class="form-group">
                    <label for="image"> Upload Image</label>
                    <input type="file" name="image" id="image">
                </div>
            </div>
        </form>

    </div>

@stop
@section('js')
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script>
     $('#datepicker').datepicker();
    </script>
@endsection