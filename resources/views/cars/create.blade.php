<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('car.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label">Name</label>
            <input class="form-control" type="text" placeholder="Enter name" name="name">

            <label class="control-label">brand</label>
            <input class="form-control" type="text" placeholder="Enter brand" name="brand">

            <label class="control-label">year</label>
            <input class="form-control" type="number" placeholder="Enter year" name="year">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
