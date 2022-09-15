<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="contatos-table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Mensagem</th>
                <th>Data</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contatos as $contato)
                <tr>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->mensagem }}</td>
                    <td>{{ Carbon\Carbon::parse($contato->created_at)->toDayDateTimeString() }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['contatos.destroy', $contato->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('contatos.show', [$contato->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('contatos.edit', [$contato->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $contatos])
        </div>
    </div>
</div>
