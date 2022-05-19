 <ul class="nav container-fluid ">

        <div class="nav1 flex-grow-1 d-flex">
            <li class="nav-item flex-grow-1 p-7"> <img src="images/logo1.jpg" alt="Image du logo"
                    class="imageLogo pl-10 mb-2">
            </li>
            <li class="nav-item nav-acceuil flex-grow-1">
                <a class="nav-link active " aria-current="page" href="{{Route('home')}}">
                    Accueil
            </li>

             <li class="nav-item nav-acceuil flex-grow-1">
                <a class="nav-link active" aria-current="page" href="#">
                    BESOIN D'AIDE
            </li>
             <li class="nav-item nav-acceuil flex-grow-1">
                <a class="nav-link active" aria-current="page" href="#">
                    GUIDE D'USAGE
            </li>
             <li class="nav-item nav-acceuil flex-grow-1">
                <a class="nav-link active" aria-current="page" href="{{Route('register')}}">
                    J'ADHERE
            </li>
        </div>

        <li class="nav-item">
            <a class="nav-link nav-connexion" href="{{Route('login')}}">CONNEXION</a>
        </li>

    </ul>