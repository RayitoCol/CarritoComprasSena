@extends('dashboard.master')
@section('titulo','NuevoIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Crear Nuevo Ingreso</h1>
    <form action="{{ route('income.store') }}" method="post"> 
        @csrf
        <div class="form-group row">
            <label for="provider_id" class="col-sm-2 col-form-label">Id proveedor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="provider_id" id="provider_id" placeholder="Ingresa el Id proveedor">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">Id usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Ingresa el Id usuario">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo comprobante</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el tipo comprobante">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie comprobante</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa la serie comprobante">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Numero comprobante</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el numero comprobante">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="date" name="date" id="date" placeholder="Ingresa la fecha">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Porcentaje</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" placeholder="Ingresa el porcentaje">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="total" id="total" placeholder="Ingresa el total">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estatus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="status" placeholder="Ingresa el estatus">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection