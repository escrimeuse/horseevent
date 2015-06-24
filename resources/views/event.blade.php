@extends('base')

@section('content')
    <h1>Event <small> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> [Event Title]</small></h1>
    <hr/>
    <div class="panel panel-default">

        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    Event Logo Here
                </div>
                <div class="col-md-4">
                    <table class="table">
                        <tr>
                            <td><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></td>
                            <td>[Date]</td>
                        </tr>
                        <tr>
                            <td><span class="glyphicon glyphicon-home" aria-hidden="true"></span></td>
                            <td>[Location]</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <button class="btn btn-default" type="submit">
                            <p></p>
                            <p><span class="glyphicon glyphicon-star" aria-hidden="true"></span></p>
                            <p>Register Now</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>


    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Description</h3>
        </div>
        <div class="panel-body">
            Event Description Here
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Class List</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID#</th>
                    <th>Name</th>
                    <th>Entry Price</th>
                    <th></th>
                </tr>
                </thead>
                <tr>
                    <td>[ID#]</td>
                    <td>[Class Name]</td>
                    <td>[Price]</td>
                    <td><button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> View Details
                        </button></td>
                </tr>

            </table>
        </div>
    </div>



@stop;