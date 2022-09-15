<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('cursos.index') }}" class="nav-link {{ Request::is('cursos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Cursos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('divulgadors.index') }}" class="nav-link {{ Request::is('divulgadors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-people-group"></i>
        <p>Divulgadores</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vouchers.index') }}" class="nav-link {{ Request::is('vouchers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-invoice-dollar"></i>
        <p>Vouchers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('alunos.index') }}" class="nav-link {{ Request::is('alunos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Alunos</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('alunos.ok') }}" class="nav-link {{ Request::is('alunos/check*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Alunos Cadastrado</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contatos.index') }}" class="nav-link {{ Request::is('contatos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Contatos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('locals.index') }}" class="nav-link {{ Request::is('locals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Locais</p>
    </a>
</li>
