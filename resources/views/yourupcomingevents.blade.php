@extends('base')

@section('content')

    <h1>Show Record <small> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Your Upcoming Events</small></h1>
    <hr />

    <div class="row">



        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>[Event Name]</h2>
                </div>
                <div class="panel-body text-center">
                    <img src="/dressage.jpg" alt="jumper" height="200px"/>
                </div>
                <table class="table">
                    <tr>
                        <td>Date:</td>
                        <td>[date]</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>[location]</td>
                    </tr>

                    <tr>
                        <td>Your Registered Classes:</td>
                        <td>
                            <table class="table">
                                <thead>
                                <tr>

                                    <th>Class</th>
                                    <th>Horse</th>
                                </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
                    <a href="/eventpage"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Event Page</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>[Event Name]</h2>
                </div>
                <div class="panel-body text-center">
                    <img src="/jumper.png" alt="jumper" height="200px"/>
                </div>
                <table class="table">
                    <tr>
                        <td>Date:</td>
                        <td>[date]</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>[location]</td>
                    </tr>

                    <tr>
                        <td>Your Registered Classes:</td>
                        <td>
                            <table class="table">
                                <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>Horse</th>
                                </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
                    <a href="/eventpage"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Event Page</button></a>
                </div>
            </div>
        </div>



    </div>



@stop;