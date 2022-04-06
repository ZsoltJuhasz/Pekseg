@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row my-3">
        <div class="col-6">
            <form action="search-bakery">
                <select name="type" id="" class="form-select">
                    <option selected>Típus</option>
                    <option>Töltött</option>
                    <option>Sós</option>
                    <option>Édes</option>
                </select>
                <button class="btn btn-outline-info mt-2" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-6">
            <a class="btn btn-outline-info mb-1" href="/register">Regisztráció</a>
            <a class="btn btn-outline-info mb-1" href="/login">Bejelentkezés</a>
            <a class="btn btn-outline-danger mb-1" href="/logout">Kijelentkezés</a>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <table class="table">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Név</th>
                            <th scope="col">Típus</th>
                            <th scope="col">Ár</th>
                        </thead>
                        <tbody>
                            @foreach($bakeries as $bakery)
                            <tr>
                                <td>{{ $bakery->id }}</td>
                                <td>{{ $bakery->name }}</td>
                                <td>{{ $bakery->type }}</td>
                                <td>{{ $bakery->price }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="/edit-bakery/{{ $bakery->id }}">Szerkesztés</a>
                                    <a class="btn btn-outline-danger btn-sm" href="/delete-bakery/{{ $bakery->id }}">Törlés</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a class="btn btn-outline-primary" href="/new-bakery">Új péksütemény</a>
            </div>
        </div>
    </div>
</div>
@endsection