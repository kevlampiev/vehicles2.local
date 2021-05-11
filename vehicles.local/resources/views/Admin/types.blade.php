@extends('Layouts.admin-layour')

@section('title')
    Администратор| Справочники
@endsection

@section('content')

    <div class="row">
        <h2>Типы техники</h2>
    </div>
    <div class="row">
        <div class="col-md-2">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($types as $type)
                <tr>
                    <th scope="row">{{$type->id}}</th>
                    <td>{{$type->name}}</td>
                    <td>&#9998;</td>
                    <td>&#10008;</td>
                </tr>
                @empty
                    <p>Нет записей</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
