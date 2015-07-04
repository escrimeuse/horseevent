@extends('base')

@section('content')

    <!-- Class Info Modal -->
    <div class="modal fade" id="classInfo" tabindex="-1" role="dialog" aria-labelledby="classInfo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">[Class Name]</h4>
                </div>
                <table class="table">
                    <tr>
                        <td>ID:</td>
                        <td>[ID]</td>
                    </tr>
                    <tr>
                        <td>Entry Price</td>
                        <td>[$$]</td>
                    </tr>
                    <tr>
                        <td>Number of Entrants:</td>
                        <td>[#]</td>
                    </tr>

                    <tr>
                        <td>Documents:</td>
                        <td><ul>
                                <li>Attachment 1</li>
                                <li>Attachment 2</li>
                            </ul></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td>[Class Description]</td>
                    </tr>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <h1>Event <small> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> [Event Title]</small></h1>
    <hr/>


    <div class="row">

        <div class="col-md-4 text-center">
            <div class="panel panel-default" >
                <div class="panel-heading"><h2>Information</h2></div>
                <div class="panel-body">
                    <img src="/dressage.jpg" alt="jumper" height="200px"/>
                </div>
                <table class="table text-center">
                    <tr>
                        <td>
                            <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></p>
                            <p>[Date]</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span></p>
                            <p>[Location]</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></p>
                            <p>[Description]</p>
                        </td>
                    </tr>
                </table>
            </div>

            <a href=""><div class="well well-lg"><h2>Register Now!</h2></div></a>

        </div>

        <div class="col-md-8 text-center">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Class List</h2></div>
                <div class="panel-body">
                   <table class="table table-hover">
                       <thead>
                        <tr>
                            <th>Class Name</th>
                            <th>Entry Price</th>
                            <th># of Entrants</th>
                            <th></th>
                        </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>[Class Name]</td>
                           <td>[Price]</td>
                           <td>[Num]</td>
                           <td><button class="btn btn-default" type="button" data-toggle="modal" data-target="#classInfo">Details</button></td>
                       </tr>


                       </tbody>
                   </table>
                </div>
            </div>
        </div>


    </div>











@stop;