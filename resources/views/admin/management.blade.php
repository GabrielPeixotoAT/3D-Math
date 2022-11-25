@extends('layouts.app')

@section('subtitle', ' - Administração')

@section('content')

<section class="u-clearfix u-grey-5 u-section-5" id="sec-02c1">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
                <h4>Produtcts</h4>
                <table class="table table-striped table-borderless">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ProductID</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{$product->ProductID}}</td>
                            <td>{{$product->Description}}</td>
                            <td>{{$product->Price}}</td>
                            <td>{{$product->Category}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
