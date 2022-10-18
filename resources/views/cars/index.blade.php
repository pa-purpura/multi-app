<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <a href="{{ route('car.create') }}"><button type="button" class="btn btn-primary">Crea
                                nuova</button></a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Modello</th>
                                        <th scope="col">Anno</th>
                                        <th scope="col" colspan="2">Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->brand }}</td>
                                        <td>{{ $car->year }}</td>
                                        <td><button type="button" class="btn btn-info">modifica</button></td>
                                        <td><button type="button" class="btn btn-danger">elimina</button></td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
