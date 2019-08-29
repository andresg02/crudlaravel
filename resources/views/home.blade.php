@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row justify-content-center">Sistema Medicamentos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href="{{ route('medicamento.index') }}" class="btn btn-info btn-block" >Consultar Medicamentos</a>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
