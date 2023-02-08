@php
    $i = 1
@endphp

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Наименование товара</th>
        <th scope="col">Цена от</th>
        <th scope="col">Цена до</th>
        <th scope="col">Тип товара</th>
    </tr>
    </thead>
    <tbody>
    @foreach($goods as $good)
        @if($good->user_id === auth()->user()->id)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$good->title}}</td>
                <td>{{$good->price_from}}</td>
                <td>{{$good->price_to}}</td>
                <td>
                    @if($good->type == 1)
                        новый
                    @else
                        б/у
                    @endif
                </td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>
