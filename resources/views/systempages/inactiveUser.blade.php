@extends('layouts.app')

@section('odine')
     {{ $odine->sigla }}
@endsection

@section('page_content')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Utilizadores inactivos <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                                
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <p>Utilizadores que <i style="color: black">não podem acessar</i> ao sistema</p>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">Nome </th>
                    <th class="column-title">Sobrenome </th>
                    <th class="column-title">Email </th>
                    <th class="column-title">Odine </th>
                    <th class="column-title">Utilizador </th>
                    <th class="column-title">Estado </th>
                    <th class="column-title no-link last"><span class="nobr">Acção</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Multipla Acções ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($query as $user)
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{ $user->name }}</td>
                            <td class=" ">{{ $user->lastname }}</td>
                            <td class=" ">{{ $user->email }}</td>
                            <td class=" ">{{ $user->sigla }}</td>
                            <td class=" ">{{ $user->rol }}</td>
                            <td class=" ">{{ $user->estado }}</td>
                            <td class=" last">
                                <a href="#">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection