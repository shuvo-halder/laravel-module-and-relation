@extends('ajaxcrud::layouts.master')

@section('ajaxContent')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card mt-5">
                    
                    
                    <a href="{{ route('ajaxCrud.index') }}"class="btn btn-primary" type="button">Index</a>
                    <a href="{{ route('ajaxCrud.insert') }}" class="btn btn-info">insert</a>
                    
                    <hr>
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
