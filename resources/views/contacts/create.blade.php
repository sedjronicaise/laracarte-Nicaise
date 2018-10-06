@extends('layouts.default', ['title' => 'contact'])

@section('content')
    <div class="container">
       <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-offset-1">
                <h2>Laisser moi un message</h2>
                <p class="text-muted">Si vous avez un problème avec cette application plz,  
                    <a href="mailto:sedjronicaise@gmail.com">écrivez moi à mon mail</a> </p>
                <form action="{{ route('contact_path') }}" method="POST" >
                    {{ csrf_field() }}
                    <div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                        {!!$errors->first('name', '<span class="help-block">:message </span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required">
                        {!!$errors->first('email',  '<span class="help-block">:message </span>')!!}

                    </div>

                    <div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">
                        <label for="message" class="control-label">Message</label>
                        <textarea name="message" cols="20" rows="5" id="message" class="form-control" required="required">
                        </textarea>
                        {!!$errors->first('message',  '<span class="help-block">:message </span>')!!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Envoyer &raquo;</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
@stop