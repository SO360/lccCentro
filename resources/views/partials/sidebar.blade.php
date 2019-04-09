@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
             <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ route('admin.docsearch.index') }}">
                    <i class="fa  fa-user-plus"></i>
                    <span class="title">Inscripciónes</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'comentario' ? 'active' : '' }}">
                <a href="{{ route('admin.crearcurso.index') }}">
                    <i class="fa  fa-user-plus"></i>
                    <span class="title">Crear Curso</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'comentario' ? 'active' : '' }}">
                <a href="{{ route('admin.comentarios.index') }}">
                    <i class="fa  fa-user-plus"></i>
                    <span class="title">Comentarios</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Cambiar contraseña</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Salir</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
