@extends('main')
@section('content')
    @section('title', '| Contact')
       <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Contact me</h1>
            <form>
            <div class="form-group">
            <label name="email">Email :</label>
            <input id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label name="subject">Subject :</label>
            <input id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
            <label name="message">Message :</label>
            <textarea id="message" name="message" class="form-control">Enter your message here...</textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-success">
            </form>
            </div>
        </div>
    </div>

@endsection