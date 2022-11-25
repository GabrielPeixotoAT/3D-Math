@extends('layouts.app')

@section('subtitle', ' - Administração')

@section('content')

<section class="u-clearfix u-grey-5 u-section-5" id="sec-02c1">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
                <div class="d-flex justify-content-between">
                    <h3>Produtcts</h3>
                    <button type="button" class="btn rounded-top btn-info rounded-top">New Product
                    </button>
                </div>
                <table class="table table-striped table-borderless">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{$product->ProductID}}</td>
                            <td>{{$product->Description}}</td>
                            <td>{{$product->Price}}</td>
                            <td>{{$product->Category}}</td>
                            <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-warning btn-sm">
                                        <span class="material-symbols-outlined">
                                            edit
                                            </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                        <span class="material-symbols-outlined">
                                            delete
                                            </span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="u-layout" style="">
                <div class="d-flex justify-content-between">
                    <h3>Clients</h3>
                </div>
                <table class="table table-striped table-borderless">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">CPF</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td scope="row">{{$client->ClientID}}</td>
                            <td>{{$client->Name}}</td>
                            <td>{{$client->Email}}</td>
                            <td>{{$client->Cpf}}</td>
                            <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button type="button" class="btn btn-outline-warning btn-sm">
                                        <span class="material-symbols-outlined">
                                            edit
                                            </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                        <span class="material-symbols-outlined">
                                            delete
                                            </span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
