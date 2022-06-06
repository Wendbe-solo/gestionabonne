    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
    <title>AUF</title>
</head>
<body>
    <center>
    <div class="ima">
        <img src="../images/auf.jpg" alt="">

    </div>
    </center>
    <center> <h3>Fiche d'abonnement</h3> </center>
    <center> 
    <form action="/inscription" method="post" class=" ">
        {{csrf_field()}}
        <input  type="text" name="nom" id="nom" class="formulaire" placeholder="entrez votre nom"> <br><br>
        <input  type="text" name="prenom" id="prenom" class="formulaire" placeholder="entrez votre prenom"> <br><br>
        <input  type="date" name="age" id="age" class="formulaire" placeholder="entrez votre date de naissance"> <br><br>
        <input  type="number" name="numero" id="numero" class="formulaire" placeholder="entrez votre numero" > <br><br>
        <input  type="email" name="email" id="email" class="formulaire" placeholder="entrez votre email"> <br><br>
        <input  type="date" name="date" id="date" class="formulaire" placeholder="entrez date d'abonnement"> <br><br>

    <p>
        NB: Tous les champs sont obligatoires
</p>
    <input type="submit" value="Enregistrer"class="formula" name="submit"> <br>
    </form>
    </center>

    
        <center>  <h4>AUF 2022 tous droits réservés</h4> </center>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>