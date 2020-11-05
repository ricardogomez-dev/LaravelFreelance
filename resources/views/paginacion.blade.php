@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <p style="padding: 50px;">Descripción: Simple, quiero paginar los items de la tabla con ajax sin recargar la página de la manera más simple y limpia hablando en cuanto código.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody id="load_data"></tbody>
                </table>
                <div>
                    <ul class="pagination"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('js/ajax-pagination.js') }}"></script>
@endsection