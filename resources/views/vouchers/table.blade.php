<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="vouchers-table">
            <thead>
            <tr>
                <th>Divulgador</th>
                <th>Voucher</th>
                <th>Status</th>
                <th>Data de Utilização</th>
                <th>Data de Cadastro</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vouchers as $voucher)
                <tr>
                    <td>{{ $voucher->divulgador->nome }}</td>
                    <td>{{ $voucher->uuid }}</td>
                    <td>{{ $voucher->status }}</td>
                    <td>{{ $voucher->utilizado_at }}</td>
                    <td>{{ $voucher->created_at }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['vouchers.destroy', $voucher->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('vouchers.show', [$voucher->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('vouchers.edit', [$voucher->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $vouchers])
        </div>
    </div>
</div>
