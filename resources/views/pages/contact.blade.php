@extends('layouts.sub-page')

@section('content')
    <div class="page-header text-center">
        <div class="container">
            <h1>Contact Us</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

        <div class="container">
            <div class="contact-form" style="max-width:640px;margin:50px auto;">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email">
                </div>
                <div class="form-group">
                    <label for="">Request/Comment</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit Form">
                </div>
            </div>
        </div>
@stop

@section('script')
@stop