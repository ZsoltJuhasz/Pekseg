@extends("layouts.master")

@section("content")
<div class="row justify-content-center">
    <div class="col-6 col-sm-5 col-md-4 col-lg-3">
        <form class="form-control m-5" action="/update-bakery" method="put">
            @csrf
            @method("PUT")
            <input class="form-control" type="hidden" name="id" value="{{ $bakery->id }}">
            <label for="name">Név</label>
            <input class="form-control" type="text" name="name" value="{{ $bakery->name }}">
            <label for="type">Típus</label>
            <input class="form-control" type="text" name="type" value="{{ $bakery->type }}">
            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price" value="{{ $bakery->price }}">
            <button class="btn btn-outline-primary mt-2" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection