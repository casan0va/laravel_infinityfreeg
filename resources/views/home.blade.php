
@extends ('layouts.app')


@section('content')
@include('includes.banner')
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tirdzniecības centrs Sevka</title>
    <style>
        body {
            font-family: "Georgia", serif;
            margin: 0;
            padding: 20px;
            background: #fff;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-weight: normal;
            margin-bottom: 5px;
        }
        .subtitle {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }
        .promo-title {
            font-weight: bold;
        }
        .columns {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .column {
            flex: 1;
            max-width: 300px;
            font-size: 14px;
            line-height: 1.5;
        }
        .column img {
            max-width: 100%;
            display: block;
            margin-bottom: 15px;
        }
        .column-title {
            font-weight: bold;
            margin-bottom: 8px;
        }
        .link-more {
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
            color: black;
        }
        .link-more:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Laipni lūdzam Tirdzniecības centrā “Sevka”!</h1>
        <p class="subtitle">
            Nāciet pie mums – <span class="promo-title">“Sevka”</span> ir vieta, kur iepirkšanās kļūst par baudu! Vairāk nekā 300 veikali!!
        </p>
        <div><strong>Aktualas akcijas:</strong></div>
        <div class="columns">
            <div class="column">
                <img src="https://tc4.gt.tc/wp-content/uploads/2025/09/82611-sale-logo.jpg" alt="Stenders akcija" />
                <div class="column-title">Stenders</div>
                <p>
                    Mūsu saknes ir vītas Ziemeļvalstu dabā, kurā ziemeļnieki smeļ spēku un zināšanas, atrod laiku sev, ļaujot pasaules steigai aizplūst garām. Šo ziemeļniecisko skatu uz dzīvi STENDERS ienes vannas istabās visā pasaulē jau kopš 2001. gada.
                </p>
                <a href="#" class="link-more">Vairāk →</a>
            </div>
            <div class="column">
                <img src="https://tc4.gt.tc/wp-content/uploads/2025/09/82635-sale-logo-1024x1024.png" alt="Gabi akcija" />
                <div class="column-title">Gabi</div>
                <p>
                    <strong>Gabi</strong> ir Latvijas apavu veikalu tīkls, kas piedāvā plašu apavu, somu un aksesuāru klāstu sievietēm, vīriešiem un bērniem. Veikali atrodas lielākajos tirdzniecības centros un citās Rīgas un Latvijas pilsētās. Gabi piedāvā sezonai piemērotus apavus, atbilstoši modes tendencēm, kā arī klasiskas kurpes ikdienai un svētkiem. Papildus apaviem, veikalos ir pieejamas arī somas, virsjakas, naudas maki, lakati, šalles un lietussargi.
                </p>
                <a href="#" class="link-more">Vairāk →</a>
            </div>
            <div class="column">
                <img src="https://tc4.gt.tc/wp-content/uploads/2025/09/82586-sale-logo-1024x1024.jpg" alt="My sushi akcija" />
                <div class="column-title">My sushi</div>
                <p>
                    <strong>MySushi</strong> ir populārs suši restorānu tīkls Latvijā, kas piedāvā svaigus un garšīgus suši ēdienus, kā arī citus japāņu virtuves ēdienus, piemēram, poke bļodas un zupas. Restorāni ir ērti izvietoti lielākajos tirdzniecības centros, piemēram, <strong>Origo</strong> un <strong>Akropole</strong>, kā arī citās vietās Rīgā un citās Latvijas pilsētās.
                </p>
                <a href="#" class="link-more">Vairāk →</a>
            </div>
        </div>
    </div>
</body>

<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Par Sevka</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .info-section {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
    }

    .info-box {
      background-color: #f4f0e7;
      padding: 25px;
      margin-bottom: 20px;
      border-left: 5px solid #d1c7b7;
    }

    .info-box h3 {
      margin-top: 0;
      font-size: 20px;
      color: #111;
    }

    .info-box strong {
      color: #111;
    }
  </style>
</head>
<body>

  <section class="info-section">

    <div class="info-box">
      <h3>Sevka</h3>
      <p>
        Tirdzniecības centrs <strong>“Sevka”</strong> ir viens no vadošajiem iepirkšanās un izklaides centriem, kas piedāvā plašu veikalu un pakalpojumu klāstu, kas apmierinās katra apmeklētāja vajadzības. Mēs esam izveidojuši modernu un ērtu vidi, kurā apmeklētāji var baudīt iepirkšanās pieredzi, iegādājoties preces gan no vietējiem, gan starptautiskiem zīmoliem.
      </p>
    </div>

    <div class="info-box">
      <h3>Mūsu misija:</h3>
      <p>
        Mūsu mērķis ir nodrošināt augstākās kvalitātes pakalpojumus, piedāvājot dažādus produktus un iespējas, lai apmeklētāji varētu baudīt ērtu, pieejamu un patīkamu iepirkšanās pieredzi. Tirdzniecības centrā “Sevka” ikviens atradīs sev nepieciešamo – no modes līdz ikdienas precēm, tehnoloģijām un mājas interjeram.
      </p>
    </div>

    <div class="info-box">
      <h3>Kas mūs raksturo?</h3>
      <p><strong>Restorāni un kafejnīcas</strong> – plaša ēdināšanas vietu izvēle, kur varat nobaudīt gardus ēdienus vai vienkārši atpūsties pie kafijas tases.</p>
      <p><strong>Plaša veikalu izvēle</strong> – no modes, aksesuāriem līdz tehnoloģijām un sadzīves precēm.</p>
      <p><strong>Ērta atrašanās vieta</strong> – Tirdzniecības centrs atrodas viegli sasniedzamā vietā ar lielisku transporta pieejamību.</p>
      <p><strong>Īpašas akcijas un piedāvājumi</strong> – mēs regulāri piedāvājam izdevīgas atlaides un akcijas, lai sniegtu papildu vērtību mūsu apmeklētājiem.</p>
      <p><strong>Bērnu rotaļu zona</strong> – Tirdzniecības centrā ir arī droša un jautra rotaļu zona bērniem, kas ļauj vecākiem iepirkties mierīgi.</p>
    </div>

  </section>

</body>
</html>







</html>


@endsection