@extends('base')

@section('content')

    <h1>Your Past Events</h1>
    <div class="spacer" style="height:30px"></div>

    <div class="row">



        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">[Event Name]</h3>
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
                        <td>Paid:</td>
                        <td>[paid]</td>
                    </tr>
                    <tr>
                        <td>Your Registered Classes:</td>
                        <td>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Horse</th>
                                    <th>Placement</th>
                                </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Event Page</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">[Event Name]</h3>
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
                        <td>Paid:</td>
                        <td>[paid]</td>
                    </tr>
                    <tr>
                        <td>Your Registered Classes:</td>
                        <td>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Horse</th>
                                    <th>Placement</th>
                                </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="panel-footer">
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Event Page</button></a>
                </div>
            </div>
        </div>



    </div>



@stop;