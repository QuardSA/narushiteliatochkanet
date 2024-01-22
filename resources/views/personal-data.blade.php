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
    <div class="container d-flex justify-content-center flex-wrap mt-3 gap-5" >
        <div class="personal-data" style="max-width: 40%">
            <p>Имя: <b>{{Auth::user()->name}}</b></p>
            <p>Фамилия: <b>{{Auth::user()->surname}}</b></p>
            <p>Отчество: <b>{{Auth::user()->patronymic}}</b></p>
            <p>Логин: <b>{{Auth::user()->login}}</b></p>
            <p>Номер телефона: <b>{{Auth::user()->phone}}</b></p>
            <p>Электронная почта: <b>{{Auth::user()->email}}</b></p>
        </div>
        <div class="applications d-flex flex-column gap-3" style="min-width: 50%;">
            <a href="{{ route('personal', ['sort_field' => 'created_at', 'sort_order' => 'asc']) }}">Сортировать по возрастанию</a>
            <a href="{{ route('personal', ['sort_field' => 'created_at', 'sort_order' => 'desc']) }}">Сортировать по убыванию</a>
            @forelse ($applications as $application)
            <div class="application border border-warning" >
                <p class="ms-2 mt-1">Номера автомобиля: <b>{{$application->car_number}}</b></p>
                <p class="ms-2">Описание нарушения:{{$application->description}}</p>
                <p class="ms-2">Статус заявки: <b class="text-danger">{{$application->status_application->status}}</b></p>
                <p class="ms-2">Дата создания:{{$application->created_at}}</p>
            </div>
            @empty
            <td>Больше нету принятых заявок</td>
            @endforelse
            {{ $applications->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</body>
</html>
