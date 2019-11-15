@extends('layouts.default',['title' => 'Contact'])

@section('content')    
    <div class="container">        
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <h2>Get In Touch</h2>
            <p class="text-muted">If you having trouble with this service, <a href="mailto:{{ config('laracarte.admin_support_email') }}">please ask for help</a>.</p>

                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                            <label for="nom" class="control-label">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" required="required" value="{{ old('nom') }}">
                            {!! $errors->first('nom','<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email')}}">
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required">{{ old('message')}}</textarea>
                                {!! $errors->first('message','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection