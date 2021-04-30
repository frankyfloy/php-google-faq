<?php

    $questions = [
        [
            'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",

            'answParagraphs' => [

                "
                    La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
                    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.

                "
            ]
        ],

        [
            'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",

            'answParagraphs' => [
                "
                    Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.
                ",
            ]
        ],

        [
            'question' => "Perché il mio account è associato a un paese?",

            'answParagraphs' => [

                'list' => [

                    [
                        "
                            Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:
                        ",
                        'subList' => [

                            "Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.",

                            "Google LLC, con sede negli Stati Uniti, per il resto del mondo."
                        ],

                        "La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali."
                    ],

                    "
                        Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.
                    "
                ],
            ]
        ],
    ]
 ?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <!-- CSS -->
        <link rel="stylesheet" href="assets/master.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="logo">
                <a class="navbar-brand" :href="navbarData.linkHome">
                    <img
                        src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo">
                    <a href="#">Privacy e termini</a>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#"><strong>Introduzione</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#"><strong>Norme sulla privacy</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#"><strong>Termini di servizio</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#"><strong>Tecnologie</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-primary" href="#"><strong>Domande frequenti</strong></a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <div class="container">
                <?
                    // ciclo l'array delle domande
                    foreach ($questions as $faq => $value_by_faq) { ?>

                        <!-- Creo N Section per N  FAQ  -->
                        <section class="section-answer row">

                            <!-- Creo la colonna contenente il FAQ -->
                            <div class="col-12">

                                <!-- Stampo l'header del paragrafo -->
                                <h2><?  echo $questions[$faq]['question']; ?>   </h2>
                            </div>
                            <?
                                //Salvo l'array della/e risposta/e
                                $answParagraphs = $questions[$faq]['answParagraphs'];
                                // DEBUG: var_dump($answParagraphs);

                                // Se l'array delle risposta/e ha una lista la condizione è true
                                if (array_key_exists('list', $answParagraphs)) {


                                    // Salvo la lista contenuta nell'array delle risposte
                                    $list = $answParagraphs['list'];
                                    // DEBUG: var_dump($list);

                                    // Creo la lista ------ HTML
                                    ?>  <ol> <?

                                    // ciclo gli elementi della lista  --- PHP
                                    foreach ($list as $li => $value_by_li) {

                                        // Controllo se l'elemento della lista ha una sottolista
                                        if (is_array($value_by_li)) {?>

                                            <!-- stampo l'elemento della lista che ha una sottolista -->
                                            <li>
                                                <? echo $value_by_li[0];?>

                                                <!-- Creo la sottolista  HTML-->
                                                <ul> <?

                                                // ciclo gli elementi della sottolista
                                                foreach ($value_by_li['subList'] as $subLi => $value_by_subLi) {?>

                                                    <li>
                                                        <?echo $value_by_subLi ?>
                                                        <!-- $value_by_subLi -->
                                                    </li><?
                                                }?>

                                                <!-- Chiudo la sottolista -->
                                                </ul>

                                            <!-- Chiudo l'elemento lista con una sottolista -->
                                            </li>
                                            <?

                                        // TODO: creare elemento lista senza sottolista
                                        }else {
                                            echo "dai";
                                        }
                                    }?>

                                </ol> <?

                                    // Elemento faq senza lista
                                }else{

                                    for ($i=0; $i < count($questions[$faq]['answParagraphs']); $i++) { ?>
                                        <p> <?echo $questions[$faq]['answParagraphs'][$i] ?> </p><?
                                    }
                                }?>

                        </section><?
                    }?>
            </div>
        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>
