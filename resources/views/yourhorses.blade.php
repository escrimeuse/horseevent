@extends('base')

@section('content')

    <h1>Your Horses</h1>
    <div class="spacer" style="height:30px"></div>

    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">[Horse Name]</h3>
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
                <div class="panel-footer">
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit</button></a>
                    <a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remove</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="">
                <button class="btn btn-default" type="submit">
                    <p></p>
                    <p><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></p>
                    <p>Add Horse</p>
                </button>
            </a>
        </div>


    </div>



@stop;