@extends("layouts.master")

@section("content")
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3
    offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4">
        <form class="form-control mt-5 p-3" action="/store-bakery" method="post">
            @csrf
            <label for="name" class="mt-2">Név</label>
            <input class="form-control" type="text" name="name">
            <label for="type" class="mt-2">Típus</label>
            <input class="form-control" type="text" name="type">
            <label for="price" class="mt-2">Ár</label>
            <input class="form-control" type="text" name="price">
            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection