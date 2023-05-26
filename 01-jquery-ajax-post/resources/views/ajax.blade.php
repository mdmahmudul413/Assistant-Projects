<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="display-2 text-center">Ajax Form Submit</h1>
    <h2 id="msg" class="text-center text-success"></h2>
    <form id="form" class="mt-5">
        @csrf
        <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name"/>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email"/>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="submit" class="btn btn-primary w-100" id="formSubmitBtn"/>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    $('#form').submit(function (e) {
        e.preventDefault();
        $('#formSubmitBtn').attr('disabled', true);
        $('#formSubmitBtn').attr('value', 'Please Wait...');

        $.ajax({
            url: "{{route('submit')}}",
            data: $('#form').serialize(),
            type: 'POST',
            success: function (response) {
                $('#msg').html(response.result);
                $('#form')[0].reset();
                $('#formSubmitBtn').attr('disabled', false);
                $('#formSubmitBtn').attr('value', 'Submit');
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
</script>
</body>
</html>
