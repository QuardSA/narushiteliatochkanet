<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <h2 class="text-center mt-3">Заявление</h2>
        <form class="mt-2" style="max-width: 60% margin:auto" method="POST" action="/application-create">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Номер машины</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="car_number">
            </div>
            @error('car_number')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="exampleInputPassword1">Описание</label>
                <textarea type="password" class="form-control" id="exampleInputPassword1" name="description">
                </textarea>
                @error('description')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Подавть заявление</button>
        </form>
    </div>
</body>
</html>
