@extends('base')

@section('content')

    <!-- Edit Personal Information Modal -->
    <div class="modal fade bs-example-modal-md" id="personal" tabindex="-1" role="dialog" aria-labelledby="personal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Personal Information</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="fName">First Name</label>
                            <input type="text" class="form-control" id="fName">
                        </div>
                        <div class="form-group">
                            <label for="init">Middle Initial</label>
                            <input type="text" class="form-control" id="init">
                        </div>
                        <div class="form-group">
                            <label for="lName">Last Name</label>
                            <input type="text" class="form-control" id="lName">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender">
                                <option>Female</option>
                                <option>Male</option>
                                <option>Prefer Not To Disclose</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="bday">Birthdate</label>
                            <input type="date" class="form-control" id="bday">
                        </div>



                    </form>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close Without Saving</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Edit Contact Details Modal -->
    <div class="modal fade bs-example-modal-md" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Contact Details</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="street">Address</label>
                            <p><input type="text" class="form-control" id="street" placeholder="Street"></p>
                            <p><input type="text" class="form-control" id="unit" placeholder="Apartment/Suite/Unit"></p>
                            <p><input type="text" class="form-control" id="city" placeholder="City"></p>
                            <p><input type="text" class="form-control" id="province" placeholder="Province/State"></p>
                            <p><input type="text" class="form-control" id="postal" placeholder="Postal/ Zip Code"></p>
                            <p><input type="text" class="form-control" id="country" placeholder="Country"></p>
                        </div>
                        <div class="form-group">
                            <label for="tele">Phone Number</label>
                            <input type="tel" class="form-control" id="tele">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>




                    </form>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close Without Saving</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Edit Equestrian Details Modal -->
    <div class="modal fade bs-example-modal-md" id="equestrian" tabindex="-1" role="dialog" aria-labelledby="equestrian">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Equestrian Details</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="coach">Coach</label>
                            <input type="text" class="form-control" id="coach">
                        </div>
                        <div class="form-group">
                            <label for="stable">Stable</label>
                            <input type="text" class="form-control" id="stable">
                        </div>




                    </form>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close Without Saving</button>

                </div>
            </div>
        </div>
    </div>
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
                    <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#personal"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button>

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
                    <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button>

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
                    <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#equestrian"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button>

                </div>
            </div>
        </div>




       </table>


    </div>



@stop;