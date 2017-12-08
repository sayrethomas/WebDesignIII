// resources/views/temps.blade.php

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    

        <!-- New Temp Form -->
        <form action="/temp" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Temp Name -->
            <div class="form-group">
                <label for="temp" class="col-sm-3 control-label">Temp</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="temp-name" class="form-control">
                </div>
            </div>

            <!-- Add Temp Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Temp
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Temps -->
	
@endsection