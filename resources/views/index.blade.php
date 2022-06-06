
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <img src="{{ asset('images/file.png')}}" alt="">
    <title>AUF</title>
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"> 
          <a class="navbar-brand" href="./index.html">
              <img src="{{ asset('img/auf.jpg')}}" width="250px" height="130px" alt="">
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.html">
                Agence Universitaire de la <br> Francophonie</a>
              </li>
            </ul>
          </div>
        </div>
    </nav> 

    <div class="ratio ratio-4x3">
      <h1>bienvenue!!!!!!</h1>
    </div>

    <div class="row g-0 bg-light position-relative">
      <div class="col-md-6 mb-md-0 p-md-4">
        <a href="https://www.auf.org/" target="_blank" class="btn btn-primary btn-lg" role="button" aria-disabled="true">pourquoi s'abonner</a>
        <br><br><br> <br> <br> <br>
        <form action="" method="post">
          
            <div class="d-grid gap-2 d-md-block">
              <a href="{{ route('etudiant')}}">
              <button class="btn btn-primary" type="button">abonnez-vous</button></a>
              <br> <br>
              <a href="./php/abonnés.php">
              <button class="btn btn-primary butv" type="button">liste des abonnées</button></a>
            </div>
      </form>
        
      </div>

      <div class="col-md-6 p-4 ps-md-0">
         <br>  <a href="https://www.auf.org/a-propos/qui-nous-sommes/" target="_blank"> <h3> Présentation</h3></a>
        <img src="{{ asset('img/afiche.jpg') }}" class="w-100" alt="...">
      </div>
    </div>
<div class="footer1">    
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link foot" aria-current="page" href="#">Contact <br> Mentions légales <br> Politique de <br> Confidentialité </a>
      </li>
      <li class="nav-item">
        
        <a class="nav-link foot" href="#"> <br> <br> <br> ABONNEZ-VOUS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link foot">Abonnez-vous <br> à l'infolette de <br> l'AUF International</a>
      </li>
    </ul>


    <div class="mx-auto" style="width: 300px;">
      <a href="https://m.facebook.com/aufinternational" target="_blank"> <img src="{{ asset('img/face.png') }}" width="30px" height="30px" alt=""> </a>
      AUF 2022 tous droits réservés
       <a href="https://twitter.com/auf_org" target="_blank" >  <img src="{{ asset('img/twitter-logo.png') }}" width="30px" height="30px" alt=""></a>
    </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>