
@extends("layouts.master")


@section("contenu")

<div class="my-3 p-3 bg-body rounded shadow-sm">
<center> <h3>Fiche d'abonnement</h3> </center>

    <div class="mt-4">

        @if(session()->has("success"))
        <div class="alert alert-sucess">
            {{session()->get('success')}}
            </div>
        @endif

        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <center>
        <form method="POST" action="{{route('etudiant.ajouter')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Date de naissance</label>
                <input type="date" name="age" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control formulaire" id="">

            </div>
            <button type="submit" class="btn btn-primary formula">Enregistre</button>
            <a href="{{route('etudiant')}}"  class="btn btn-danger">Retour</a>
        </form>
        </center>

    </div>

</div>


@endsection