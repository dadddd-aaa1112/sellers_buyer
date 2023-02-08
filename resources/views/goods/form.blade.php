<form class="my-3" method="POST" action="{{ route('goods.store') }}">
    @csrf

    <div class="row mb-3">
        <label for="title" class="col-md-4 col-form-label text-md-end">Наименование товара</label>

        <div class="col-md-6">
            <input id="title" type="text"
                   class="form-control @error('title') is-invalid @enderror" name="title"
                   value="{{ old('title') }}">

            @error('title')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="price_from"
               class="col-md-4 col-form-label text-md-end">Цена от</label>

        <div class="col-md-6">
            <input id="price_from" type="number"
                   class="form-control @error('price_from') is-invalid @enderror" name="price_from"
                   value="{{ old('price_from') }}">

            @error('price_from')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="price_to"
               class="col-md-4 col-form-label text-md-end">Цена до</label>

        <div class="col-md-6">
            <input id="price_from" type="number"
                   class="form-control @error('price_to') is-invalid @enderror" name="price_to"
                   value="{{ old('price_to') }}">

            @error('price_to')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="type"
               class="col-md-4 col-form-label text-md-end">Тип товара</label>
        <div class="col-md-6">
    <select class="form-select" name="type">
        <option value="1">Новый</option>
        <option value="2">б/у</option>
    </select>
    </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-warning">
                Создать
            </button>
        </div>
    </div>
</form>

