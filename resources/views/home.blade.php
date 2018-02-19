@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    @hasanyrole('employee|administrator')
                        You are an employee|administrator
                    @else
                        I have none of these roles...
                    @endhasanyrole
                <br>
                    @can('read')
                      you can read
                    @endcan
                <br>
                    @can('write')
                      you can write
                    @endcan
                <br>
                    @can('edit')
                      you can edit
                    @endcan
                <br>
                    @can('delete')
                      you can delete
                    @endcan          
                </div>
            </div>
        </div>
    </div>
@endsection
