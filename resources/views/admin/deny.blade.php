<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<x-links></x-links>
<x-alert></x-alert>
<div class="container mt-5 d-flex justify-content-center flex-wrap">
    <x-adminmenu></x-adminmenu>
    <div class="personal-info ms-2">
        <h2>Отклонённые заявления</h2>
        <a href="{{ route('admin.deny', ['sort_field' => 'created_at', 'sort_order' => 'asc']) }}">Сортировать по возрастанию</a>
        <a href="{{ route('admin.deny', ['sort_field' => 'created_at', 'sort_order' => 'desc']) }}">Сортировать по убыванию</a>
        <div class="table-responsive">
        <table class="table table-bordered align-middle scroll">
            <thead>
                <tr>
                    <th scope="col">Номер заявки</th>
                    <th scope="col">Гражданин</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Номер автомобиля</th>
                    <th scope="col">Дата заявки</th>
                    <th scope="col">Статус заявки</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->user_application->surname }} {{ $application->user_application->name }} {{ $application->user_application->patronymic }}</td>
                        <td>{{ $application->description }}</td>
                        <td>{{ $application->created_at }}</td>
                        <td>{{ $application->car_number }}</td>
                        <td class="text-danger">
                            Отклонено
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <p class="text text-danger">Больше нет заявок</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
        <div class="d-flex justify-content-center">
            {{ $applications->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
</body>
</html>
