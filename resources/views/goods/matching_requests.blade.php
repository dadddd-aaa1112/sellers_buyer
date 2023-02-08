@php
    $i = 1
@endphp

<table class="table table-striped table-success">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Наименование товара</th>
        <th scope="col">Цена от</th>
        <th scope="col">Цена до</th>
        <th scope="col">Тип товара</th>
        <th scope="col">Запрос от пользователя</th>
    </tr>
    </thead>
    <tbody>
    @foreach($matching_requests as $match)
        @if($match->user_id !== auth()->user()->id)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$match->title}}</td>
                <td>{{$match->price_from}}</td>
                <td>{{$match->price_to}}</td>
                <td>
                    @if($match->type == 1)
                        новый
                    @else
                        б/у
                    @endif
                </td>
                <td>{{\App\Models\User::where('id', $match->user_id)->first()->name}}</td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>
