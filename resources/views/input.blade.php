<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="text-center">Biodata Form</h3>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <br/>
                    <form action="/proceed" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="placeofbirth">Place Of Birth</label>
                            <input class="form-control" type="text" name="placeofbirth" value="{{ old('placeofbirth') }}">
                        </div>
                        <div class="form-group">
                            <label for="dateofbirth">Date Of Birth (MM-DD-YYYY)</label>
                            <input class="form-control" type="text" name="dateofbirth" value="{{ old('dateofbirth') }}">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input class="form-control" type="text" name="age" value="{{ old('age') }}">
                        </div>
                        <div class="form-group">
                            <label for="gpa">GPA</label>
                            <input class="form-control" type="number" step="0.01" name="gpa" value="{{ old('gpa') }}">
                        </div>
                        <div class="form-group">
                            <label for="picture">Profile Picture</label>
                            <input type="file" class="form-control-file" name="picture">
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>