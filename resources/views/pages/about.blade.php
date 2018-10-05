@extends('layouts.default', ['title' => 'about'])

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-6">
            <h2>C'est quoi {{config('app.name')}} ?</h2>
            <p>{{config('app.name')}} est la toute première application Conçut par Nicaise après avoir
                 appris le FrameWork Laravel de PHP :)</p>
                <p class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i>
                    Que les pro de Laravel ne se moquent pas!! :) parceque je suis pour l'instant 
                    qu'un debutant merci pour votre compréhension!
                </p>
                <p class="alert alert-danger">
                <span><i class="fa fa-exclamation-triangle"></i></span>
                    Donc c'est une application qui permet juste de me localiser grâce à Google Map... hahaha ouais trop Naz!!!! je sais
                    mais si t'es comme moi vas concevoir la tienne dabord. c'est pas palabre!! merci tonton  :)
                 </p>
                    <h2 class="text-center">C'est quoi Google Map Alors?</h2>
                <p class="text-justify">Google Maps est un service de cartographie en ligne. Le service a été créé par Google.
                 Lancé en 2004 aux États-Unis et au Canada et en 2005 en Grande-Bretagne (sous le nom de Google 
                 Local), Google Maps a été lancé mardi 25 avril 2006, simultanément en France, Allemagne, Espagne et Italie.
                C'est un service disponible sur PC, sur tablette et sur smartphone qui permet, à partir de l'échelle d'un pays,
                 de zoomer jusqu'à l'échelle d'une rue. Des prises de vue fixes montrant les détails de certaines rues sont également
                  accessibles grâce à une passerelle vers Google Street View.</p>
                <em class="text-right"> Source - Wikipédia</em>
                  
                  <h2>Le saviez vous ?</h2>
                <p>Parait t-il que les developpeurs Laravel sont appelés des artisans! <strong>PHP artisan...</strong> du coup je suis donc un 
                artisan du moment ou je fais partir de la communauté Laravel :) c'est fun na... les gas?? lol!! </p>
                   <p><a href="https://github.com/sedjronicaise/laracarte-Nicaise"><h4>Code source de mon projet</h4></a></p>
                <p>Vous pouvez télécharger la source de ce projet sur <a href="https://github.com/sedjronicaise/laracarte-Nicaise">github</a> </p>
            </div>
         </div>
    </div>
@stop