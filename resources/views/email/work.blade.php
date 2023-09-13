<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flash Shop email</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=Kaushan+Script&display=swap" rel="stylesheet">

    <style>

        *{
            font-family: 'Cormorant Garamond', serif;
        }

        h1, h2 , h4{
            font-family: 'Kaushan Script', cursive;
            color: blueviolet;
        }

        .bg-custom{
            background-color: lightgray;
        }

        .header-custom{
            width: 100%;
            text-align: center;
            text-transform: uppercase;
        }

        .main-custom{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .card-custom{
            width: 65%;
            padding: 25px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            border-radius: 10px;
            background-color: rgb(107, 199, 230);
            font-size: 30px;
            color: white;
            box-shadow: 5px 5px 5px black;
        }

        .text-custom{
            text-align: center;
            color: white;
        }

        .uppercase{
            text-transform: uppercase;
        }

        .btn-custom{
            padding: 15px;
            border-radius: 8px;
            text-decoration: none;
            text-transform: uppercase;
            background-color: blueviolet;
            color: white;
        }
    </style>

</head>
<body class="bg-custom">
    
    <header class="header-custom">
        <h1>Ciao Admin</h1>
        <h2>Un nuovo utente ha richiesto di diventare revisore e di entrare a far parte del nostro team!</h2>
    </header>

    <main class="main-custom">

        <section>
            <h4 class="uppercase">Dati utente</h4>
        </section>
        
        <section class="card-custom">
            <div class="text-custom">
            <p class="uppercase">Nome:</p>
            <p>{{$user->name}}</p>
            <p class="uppercase">Email:</p>
            <p>{{$user->email}}</p>
            <p class="uppercase">Messaggio:</p>
            <p>{{$description}}</p>
            </div>

            <div>
                <a class="btn-custom" href="{{route('revisor.make', compact('user'))}}">Rendi revisore</a>
            </div>
        </section>
    </main>


</body>
</html>