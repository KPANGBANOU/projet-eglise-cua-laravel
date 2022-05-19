@extends('layout.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('mycss/acceuil.css') }}">
@endsection



@section('content')
     @include('layout.nav')

      <div class="bienvenue">
             BIENVENUE SUR LA PLATEFORME D'ECHANGE ET D'ENREGISTREMENT DES FIDELES DE L'EGLISE CENTRE UNIVERSITAIRE APOSTOLIQUE
      </div>

     
      <div class="avertissement">
             <h1>AVERTISSEMENT</h1>
             L'UTILISATION MALVEILLANTE DES INFORMATIONS PERSONNELLES D'UN FIDELE EST PUNIE SOUS UNE POURSUITE JUDICIAIRE
      </div>



    <footer class="d-start-end">
      
             <ul class="renseignement">
                <li>Comment naviguer sur cette plateforme </li>
                  <li>Signaler un probleme</li> 
                  <li>Decouvrir l'Eglise Centre Universitaire Apostolique</li>   
             </ul>

             <div class="contact">
                <h1>REJOIGNEZ-NOUS</h1>
             </div>


        <ul class="contenu-footer d-flex">
            <li class="content-footer "><i class="bi bi-facebook"></i></li>
            <li class="content-footer "><i class="bi bi-whatsapp"></i></li>
            <li class="content-footer "><i class="bi bi-twitter"></i></li>
            <li class="content-footer "><i class="bi bi-instagram"></i></li>
            <li class="content-footer "><i class="bi bi-youtube"></i></li>
        </ul>

        
             <div class="copyright">
              <b> Copiryght </b> {{date('y')}}
             </div>

       

      




       <!--
        <ul class="contenu-footer">
            <li class="content-footer"><i class="bi bi-facebook"></i></li>
            <li class="content-footer"><i class="bi bi-whatsapp"></i></li>
            <li class="content-footer"><i class="bi bi-twitter"></i></li>
            <li class="content-footer"><i class="bi bi-instagram"></i></li>
        </ul>

        -->

    </footer> 







@endsection



@section('script')

<script type="text/javascript" src="{{ asset('myjs/accueil.js') }}">
</script>

@endsection