@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Criar Vouchers
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'vouchers.generate']) !!}

            <div class="card-body">

                <div class="row">
                    <!-- Divulgador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('divulgador', 'Divulgador:') !!}
    {!! Form::select('divulgador_id', $divulgadors, ['class' => 'form-control']) !!}
</div>

<!-- Uuid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', 'Quantidade:') !!}
    {!! Form::number('quantidade') !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
    //    $('#utilizado_at').datepicker()
    </script>
@endpush
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('vouchers.index') }}" class="btn btn-default"> Cacelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
