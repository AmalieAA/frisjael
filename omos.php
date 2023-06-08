<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Veteranhaven - Om os</title>
    <meta name="description" content="Mangler du hjælp til havearbejde?🌸🍃 Hos Veteranhaven har vi styr på alt fra græsslåning til beskæring af blomster. Ring allerede i dag, så finder vi en løsning der passer dig.">
    <meta name="Keywords" content="Havearbejde">
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <meta property="og:title" content="Veteranhaven for alle">
    <meta property="og:type" content="website">
    <meta property="og:url" content="www.amaliealiceandersen.dk/frisjael">
    <meta property="og:image" content="images/mennesker-snak%20.webp">
    <meta property="og:description" content="Læs mere om hvad veteranahven er, og hvad de kan tilbyde dig ">
    <meta property="og:locale" content="da_DK">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Serif&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-baggrund">


<?php include "includes/header.php";?>


<main class="container-fluid container-xl">


    <div class="row mb-4">

        <nav class="p-4 pb-0 mb-0" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="link-secondary" href="index.php">Forside</a></li>
                <li class="breadcrumb-item active" aria-current="page">Om os</li>
            </ol>
        </nav>

        <div class="col-12 col-md-6 p-4 order-md-1">
            <h1>Veteranhaven for alle</h1>
            <p>
                Veteranhaven er et frivilligt, gratis
                og permanent tilbud til for eksempel
                veteraner fra Forsvaret, Politiet,
                Beredskabet eller blot dem, der har
                lyst til at være en del af vores fællesskab
                og selvfølgelig pårørende.
                <br>
                <br>
                Vi bruger naturen til at genopbygge
                mennesker.  Det gør vi i fællesskab
                og får opbygget gode relationer.
                <br>
                <br>
                Hos Veteranhaven skaber vi sammen
                et udendørsrum, hvor der er plads til
                alle og højt til loftet, samtidig med,
                at vi støtter vores veteraner. Her kan
                du finde ro og lindring fra PTSD-
                symptomer. Vi forstår de udfordringer
                vores veteraner kan stå overfor og
                vi tilbyder derfor en bred vifte
                af forløb og ressourcer for støtte
                i overgangen til et civilt liv.
                <br>
                <br>
                <a href="komiforløb.php">
                    Du kan læse meget mere om et forløb hos os her.
                </a>
            </p>

        </div>

        <div class="col-12 col-md-6 p-0 p-md-4 mb-4 mt-md-2">
            <figure>
                <img class="img-fluid" src="images/mennesker-snak%20.webp" alt="Et billed af mennesker, som taler sammen"/>
            </figure>
        </div>

    </div>

    <div class="row border-top border-borderfarve">
        <div class="col-12 col-md-6 order-2 order-md-0 p-0 p-md-4 mb-4 mt-md-2">
             <img class="img-fluid" src="images/mennesker-går%20.webp" alt="Et billed af to mennesker taler sammen og går en tur i veteranhaven">
        </div>


        <div class="col-12 col-md-6 p-4 ">
         <h2>
             Socialøkonomisk virksomhed
         </h2>

            <p>
                En vigtig del af vores mission er også at drive en socialøkonomisk virksomhed.
                Det lyder måske lidt kedeligt, men det er det slet ikke, og hvis du er interesseret i
                at læse mere om hvad en socialøkonomisk virksomhed er, kan du

                <a href="#">finde en masse information hos kommunen lige her.</a>
                <br>
                <br>
                Vil du vide lidt mere om, hvad det betyder for
                Veteranhaven,

                <a href="samarbejde.php"> har vi skrevet mere om det her.</a>
            </p>
        </div>

    </div>

    <div id="Haveservice" class=" row bg-grøn mb-4 mt-4">
        <div class="col-12 col-md-8 offset-md-2 p-4">
            <h2>Veteranhavens haveservice
            </h2>
            <p>
                Har du brug for hjælp til havearbejde,
                kan vores medarbejdere hjælpe både private,
                organisationer og virksomheder med en bred vifte af
                havearbejde som forårsklargøring af haven, græsslåning,
                fældning af træer og meget mere. Vi tilpasser os dine behov
                og hjælper med lige præcis det, du har brug for i din have.
                <br>
                <br>
                Ud over at få hjælp til dit havearbejde, så
                hjælper du også vores folk med at se en fremtid
                på arbejdsmarkedet. Vores medarbejdere er meget
                motiveret og sætter ekstra pris på, at få lov at
                komme ud og arbejde og føle, at de er med til at gøre en forskel.
                <br>
                <br>
                Har du brug for hjælp til haven,
                står vi klar. Vi glæder os til at hjælpe dig.

            </p>
        </div>

        <div class="col-12 col-md-8 offset-md-2 p-0 pb-md-4">

            <video width="100%" height="auto" controls poster="images/havevideo_thumbnail.webp">
                <source src="images/Veteranhaven%20Haveservice.mp4">
            </video>
        </div>
    </div>

    <div class="row mt-5 border-top border-borderfarve">
        <div class="col-12 col-md-8 offset-md-2 p-4 p-md-5">
            <h2 class="text-success">Kort over veteranhaven</h2>
        <img  class="img-fluid" src="images/Haveplan.webp" alt="Et billed af haveplanen over veteranhaven"/>
        </div>
    </div>
</main>

<?php include "includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
