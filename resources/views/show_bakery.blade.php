@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-8">
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
        <div class="col-2">
            <a class="btn btn-primary" href="/new-bakery">Új dolgozó</a>
        </div>
    </div>
</div>
@endsection