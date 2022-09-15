<!-- Divulgador Field -->
<div class="col-sm-12">
    {!! Form::label('divulgador', 'Divulgador:') !!}
    <p>{{ $voucher->divulgador }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $voucher->status }}</p>
</div>

<!-- Utilizado At Field -->
<div class="col-sm-12">
    {!! Form::label('utilizado_at', 'Utilizado At:') !!}
    <p>{{ $voucher->utilizado_at }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $voucher->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $voucher->updated_at }}</p>
</div>

