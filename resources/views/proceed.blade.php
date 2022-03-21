<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        @if ($message = Session::get('successMsg'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <h3 class="text-center">Biodata Display</h3>
                        <div class="text-center">
                            <img src="{{ '/' . $imageName }}" alt="Image" width="200" height="auto">
                        </div>
                        <br/>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:200px">Name</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td>Place Of Birth</td>
                                <td>{{ $data->placeofbirth }}</td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td>{{ $data->dateofbirth }}</td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>{{ $data->age }}</td>
                            </tr>
                            <tr>
                                <td>GPA</td>
                                <td>{{ $data->gpa }}</td>
                            </tr>
                        </table>
                        <a href="/input" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>              
</body>
</html>