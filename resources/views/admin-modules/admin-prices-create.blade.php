@extends('layouts.admin-modules')

@section('module')
<div class="container border border-dark">
    <form action="{{ route('register.price.submit') }}" method="POST" id="dynamic_form" novalidate>
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="damage_things">Daños a cosas</label>
                    <input class="form-control number" type="number" name="damage_things" id="damage_things" placeholder="Insertar precio">
                    <label for="premium1">Prima por daños a cosas</label>
                    <input class="form-control number" type="number" name="premium1" id="premium1" placeholder="Insertar Precio">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="damage_people">Daños a personas</label>
                    <input class="form-control number" type="number" name="damage_people" id="damage_people" placeholder="Insertar precio">
                    <label for="premium2">Prima por daños a perosonas</label>
                    <input class="form-control number" type="number" name="premium2" id="premium2" placeholder="Insertar Precio">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="disability">Invalidez</label>
                    <input class="form-control number" type="number" name="disability" id="disability" placeholder="Insertar precio">
                    <label for="premium3">Prima por invalidez</label>
                    <input class="form-control number" type="number" name="premium3" id="premium3" placeholder="Insertar Precio">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="legal_assistance">Asistencia Legal</label>
                    <input class="form-control number" type="number" name="legal_assistance" id="legal_assistance" placeholder="Insertar precio">
                    <label for="premium4">Prima por asistencia legal</label>
                    <input class="form-control number" type="number" name="premium4" id="premium4" placeholder="Insertar Precio">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="death">Muerte</label>
                    <input class="form-control number" type="number" name="death" id="death" placeholder="Insertar precio">
                    <label for="premium5">Prima por muerte</label>
                    <input class="form-control number" type="number" name="premium5" id="premium5" placeholder="Insertar Precio">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="medical_expenses">Gastos Medicos</label>
                    <input class="form-control number" type="number" name="medical_expenses" id="medical_expenses" placeholder="Insertar precio">
                    <label for="premium6">Prima por gastos medicos</label>
                    <input class="form-control number" type="number" name="premium6" id="premium6" placeholder="Insertar Precio">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="crane">Grua</label>
                    <input class="form-control number" type="number" name="crane" id="crane" placeholder="Insertar precio">
                </div>
            </div>
        </div>
    </form> 
</div>


@endsection