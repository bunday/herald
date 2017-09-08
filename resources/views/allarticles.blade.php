@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>All Articles</h3></div>

                <table>
                <tbody>
                    @foreach ($art as $article)
                    <tr>
                        <td>{{$article->title}}</td>
                        <td><a href="/viewarticle{{$article->id}}"> <button>View</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                
                            
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
