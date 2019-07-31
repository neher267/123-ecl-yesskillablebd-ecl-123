@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('students.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <tr>
                        <th style="width: 150px">Account Name</th>
                        <td>
                            {{$user->name}}
                        </td>
                    </tr>

                    <tr>
                        <th>Total Debit</th>
                        <td>{{$user->account->debit}} TK</td>
                    </tr>

                    <tr>
                        <th style="color: #b94c4c">Current Credit</th>
                        <td style="color: #b94c4c">{{$user->account->credit-$user->account->debit}} TK</td>
                    </tr>

                    <tr>
                        <th>Total Credit</th>
                        <td>{{$user->account->credit}} TK</td>
                    </tr>

                    <tr>
                        <th>Actions</th>
                        <td>
                            <a href="{{route('student.account.transaction.index', $user)}}" class="btn btn-default btn-sm">Transactions</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection