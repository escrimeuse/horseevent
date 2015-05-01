@extends('base')

@section('content')
    <h1>Create Event</h1>
<form class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Event Information</h1>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="eventName" class="col-sm-2 control-label">Event Type</label>
                <div class="col-sm-5">
                    <p><input type="checkbox" id="hunter" name="eventType" value="hunter">  <label for="hunter">Hunter</label></p>
                    <p><input type="checkbox" id="jumper" name="eventType" value="jumper">  <label for="jumper">Jumper</label></p>
                    <p><input type="checkbox" id="dressage" name="eventType" value="dressage">  <label for="dressage">Dressage</label></p>
                    <p><input type="checkbox" id="schooling" name="eventType" value="schooling">  <label for="schooling">Schooling</label></p>
                    <p><input type="checkbox" id="other" name="eventType" value="other">  <label for="schooling">Other</label></p>
                </div>
            </div>
            <div class="form-group">
                <label for="eventName" class="col-sm-2 control-label">Event Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="eventName" name="eventName">
                </div>
            </div>
            <div class="form-group">
                <label for="eventLogo" class="col-sm-2 control-label">Event Logo</label>
                <div class="col-sm-5">
                    <div class="row"></div>
                    <p><input type="radio" id="upload" name="logo" value="upload"/> <label for="upload">Upload Logo</label> <input type="file" id="exampleInputFile"></p>
                    <p><input type="radio" id="useDefault" name="logo" value="useDefault"/> <label for="useDefault">Use Default</label></p>

                </div>
            </div>
            <div class="form-group">
                <label for="eventDate" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="eventDate" name="eventDate">
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Location</label>
                <div class="col-sm-5">
                    <p><input type="text" class="form-control" id="locationName" name="locationName" placeholder="Name"></p>
                    <p><input type="text" class="form-control" id="locationAddress" name="locationAddress" placeholder="Address"></p>
                    <p><input type="text" class="form-control" id="locationCity" name="locationCity" placeholder="City"></p>
                    <p><input type="text" class="form-control" id="locationPC" name="locationPC" placeholder="Postal Code"></p>
                    <p><input type="text" class="form-control" id="locationCountry" name="locationCountry" placeholder="Country"></p>
                </div>
            </div>
            <div class="form-group">
                <label for="regOpen" class="col-sm-2 control-label">Registration Open</label>
                <div class="col-sm-5">
                    <input type="datetime-local" class="form-control" id="regOpen" name="regOpen">
                </div>
            </div>
            <div class="form-group">
                <label for="regClosed" class="col-sm-2 control-label">Registration Closed</label>
                <div class="col-sm-5">
                    <input type="datetime-local" class="form-control" id="regClosed" name="regClosed">
                </div>
            </div>
            <div class="form-group">
                <label for="eventDesc" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-7">
                    <textarea class="form-control" id="eventDesc" name="eventDesc" rows="10" cols="10"></textarea>
                </div>
            </div>



        </div>
    </div>




    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Class List</h1>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Class #</th>
                    <th>Class Name</th>
                    <th>Entry Price</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>0001</td>
                    <td><input type="text" class="form-control" id="class1name" name="class1Name"></td>
                    <td><input type="text" class="form-control" id="class1price" name="class1price"></td>
                </tr>
                <tr>

                </tr>
                </tbody>
            </table>
            <button class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Add Another Class
            </button>
        </div>

    </div>


        <button class="btn-lg btn-default" type="submit">
            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
            Save Event
        </button>


    </div>


</form>
@stop;