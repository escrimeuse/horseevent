@extends('base')

@section('content')

    <h1>Your Show Record</h1>

    <hr />
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h3>Upcoming Events</h3>
        </div>
        <table class="table text-center">
            <tr>
                <td>
                    <h4>Total number of upcoming events:</h4>
                    <p>[#]</p></td>
            </tr>
            <tr>
                <td>
                    <h4>Events within the next 4 weeks:</h4>
                    <p>
                        Event 1 - Date
                    </p>
                    <p>
                        Event 2 - Date
                    </p>
                    <p>
                        Event 3 - Date
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="text-center">
                        <a href="/yourupcomingevents"> <button class="btn btn-default">
                                <p></p>
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></p>
                                <p>View All Upcoming Events</p>
                            </button> </a>
                </td>
            </tr>
        </table>

    </div>
</div>


    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3>Past Events</h3>
            </div>
            <table class="table text-center">
                <tr>
                    <td>
                        <h4>Total number of past events:</h4>
                        <p>[#]</p></td>
                </tr>
                <tr>
                    <td>
                        <h4>Events within the last 4 weeks:</h4>
                        <p>
                            Event 1 - Date
                        </p>
                        <p>
                            Event 2 - Date
                        </p>
                        <p>
                            Event 3 - Date
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-center">
                            <a href="/yourpastevents"> <button class="btn btn-default">
                                    <p></p>
                                    <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></p>
                                    <p>View All Past Events</p>
                                </button> </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>




@stop;