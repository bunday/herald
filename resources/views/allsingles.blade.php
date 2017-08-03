@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                    @foreach ($entry as $e)
                        <table>

                            <td> 
                                <a role="button" class="btn-link" href="/singlemessages{{$e->id}}">{{$e->title}}</a> <br>
                            </td>
                        </table>
                        @endif
                        @endforeach  
                    </div>
                </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection