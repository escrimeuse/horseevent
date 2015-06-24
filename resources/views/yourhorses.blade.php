@extends('base')

@section('content')

    <!-- Add Horse Modal -->
    <div class="modal fade bs-example-modal-md" id="add" tabindex="-1" role="dialog" aria-labelledby="addModal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Horse</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="horseNameAdd">Horse Name</label>
                            <input type="text" class="form-control" id="horseName">
                        </div>
                        <div class="form-group">
                            <label for="horsePhotoAdd">Photo</label>
                            <input type="file" id="horsePhoto">
                        </div>
                        <div class="form-group">
                            <label for="horseSexAdd">Sex</label>
                            <select class="form-control">
                                <option>Mare</option>
                                <option>Gelding</option>
                                <option>Stallion</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="horseAgeAdd">Age</label>
                            <input type="text" class="form-control" id="horseAge">
                        </div>


                        <div class="form-group">
                            <label for="horseBreedAdd">Breed</label>
                            <input type="text" class="form-control" id="horseBreed">
                        </div>
                        <div class="form-group">
                            <label for="horseHeightAdd">Height</label>
                            <input type="text" class="form-control" id="horseHeight">
                        </div>


                        <div class="form-group">
                            <label for="horseColourAdd">Colouring</label>
                            <input type="text" class="form-control" id="horseColour">
                        </div>



                    </form>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Add Horse</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close Without Adding</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Edit Horse Details  Modal -->
    <div class="modal fade bs-example-modal-md" id="edit" tabindex="-1" role="dialog" aria-labelledby="editModal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Details for [Horse Name]</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="horseName">Horse Name</label>
                            <input type="text" class="form-control" id="horseName">
                        </div>
                        <div class="form-group">
                            <label for="horsePhoto">Photo</label>
                            <input type="file" id="horsePhoto">
                        </div>
                        <div class="form-group">
                            <label for="horseSex">Sex</label>
                            <select class="form-control">
                                <option>Mare</option>
                                <option>Gelding</option>
                                <option>Stallion</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="horseAge">Age</label>
                            <input type="text" class="form-control" id="horseAge">
                        </div>


                        <div class="form-group">
                            <label for="horseBreed">Breed</label>
                            <input type="text" class="form-control" id="horseBreed">
                        </div>
                        <div class="form-group">
                            <label for="horseHeight">Height</label>
                            <input type="text" class="form-control" id="horseHeight">
                        </div>


                        <div class="form-group">
                            <label for="horseColour">Colouring</label>
                            <input type="text" class="form-control" id="horseColour">
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

    <!-- Show Record Modal -->
    <div class="modal fade bs-example-modal-lg" id="showRecord" tabindex="-1" role="dialog" aria-labelledby="showRecordModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Show Record for [Horse Name]</h4>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Show Date</th>
                            <th>Show Name</th>
                            <th>Class</th>
                            <th>Placement/Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>[Show Date]</td>
                            <td>[Show Name]</td>
                            <td>[Class]</td>
                            <td>[Placement/Result]</td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <h1>Your Horses</h1>
    <hr />

    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>[Horse Name]</h3>
                </div>
                <div class="panel-body text-center">
                    <img src="/horse.png" alt="horse"/>
                </div>
                <table class="table">
                    <tr>
                        <td>Sex:</td>
                        <td>[sex]</td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td>[age]</td>
                    </tr>
                    <tr>
                        <td>Breed:</td>
                        <td>[breed]</td>
                    </tr>
                    <tr>
                        <td>Height:</td>
                        <td>[height]</td>
                    </tr>
                    <tr>
                        <td>Colouring:</td>
                        <td>[colour]</td>
                    </tr>
                </table>
                <div class="panel-footer text-center">
                    <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#showRecord"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Show Record</button>
                    <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button>

                </div>
            </div>
        </div>
        <div class="col-md-4">

                <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#add">
                    <p></p>
                    <p><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></p>
                    <p>Add Horse</p>
                </button>

        </div>


    </div>



@stop;