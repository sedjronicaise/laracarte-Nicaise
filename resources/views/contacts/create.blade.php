@extends('layouts.default', ['title' => 'contact'])

@section('content')
    <div class="container">
       <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-offset-1">
                <h2>Laisser moi un message</h2>
                <p class="text-muted">Si vous avez un problème avec cette application plz,  
                    <a href="mailto:sedjronicaise@gmail.com">écrivez moi à mon mail</a> </p>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="name" cols="30" rows="10" id="message" class="form-control" required="required">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Envoyer &raquo;</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
@stop