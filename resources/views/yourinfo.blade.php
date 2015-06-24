@extends('base')

@section('content')

    <h1>Your Information</h1>
    <hr />

    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h3><h3> Personal Information</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>First Name:</td>
                        <td>[fName]</td>
                    </tr>
                    <tr>
                        <td>Middle Initial:</td>
                        <td>[mi]</td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td>[lName]</td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>[gender]</td>
                    </tr>
                    <tr>
                        <td>Birthdate:</td>
                        <td>[dob]</td>
                    </tr>

                </table>
                <div class="panel-footer text-center">
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h3><h3> Contact Details</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>Address:</td>
                        <td>[address]</td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>[phone]</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>[email]</td>
                    </tr>
                </table>
                <div class="panel-footer text-center">
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button></a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3><span class="glyphicon glyphicon-star" aria-hidden="true"></span></h3><h3> Equestrian Details</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>Coach:</td>
                        <td>[coach]</td>
                    </tr>
                    <tr>
                        <td>Stable:</td>
                        <td>[stable]</td>
                    </tr>
                </table>
                <div class="panel-footer text-center">
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button></a>
                </div>
            </div>
        </div>




       </table>


    </div>



@stop;