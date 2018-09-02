<!doctype html>
<html lang="en">
  <head>
    <title>Shonen Jump Ore Collection Database</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fan run character list for shonen jump ore collection. Includes a filter function to categorize characters.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sjoc-db.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body style="margin-top:70px;">
    <nav class="navbar navbar-default fixed-top search-container">
      <div class="row searchbar">
        <div class="col padding-5 input-group">
          <input type="text" class="form-control quicksearch" placeholder="Search" style="width:100%;" />
        </div>
      </div>
    </nav>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    <div class="container-fluid" id="main">
      <div class="row">
        <div class="col-2 sidebar">
          <div class="row" id="filter">
            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">type</h6></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="strength">str</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="agile">agi</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="intelligence">int</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="physical">phy</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="heart">hrt</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="technique">tec</button></div>

            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">class</h6></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="healer-class">healer</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="dps-class">dps</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="tank-class">tank</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="support-class">support</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="all-rounder-class">all rounder</button></div>

            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">year</h6></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="<1970">&lt;1970</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="1980">1980</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="1990">1990</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="2000">2000</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="2010">2010</button></div>

            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">obtainable</h6></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="f2p">f2p</button></div>
            <div class="col col-md6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="pvp-exclusive">pvp exclusive</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="gacha">gacha</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="limited-gacha">limited gacha</button></div>
            <div class="col col-md-6 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="raid">raid</button></div>

            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">Characteristics</h6></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="adventure">adventure</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="airhead">airhead</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="alien">alien</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="artificial">artificial</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="artist">artist</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="athlete">athlete</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="avenger">avenger</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="combatant">combatant</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="cooking">cooking</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="cool-headed">cool headed</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="dark">dark</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="delinquent">delinquent</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="disguise">disguise</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="divine">divine</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="dragon">dragon</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="elite">elite</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="ethereal">ethereal</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="evil">evil</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="fighting-spirit">fighting spirit</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="fire">fire</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="flight">flight</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="genius">genius</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="glasses">glasses</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="gunner">gunner</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hand-to-hand-combat">hand to hand combat</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hard-worker">hard worker</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hero">hero</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="heroine">heroine</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hot-blooded">hot blooded</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="insane">insane</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="light">light</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="luck">luck</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="manliness">manliness</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="master">master</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="money">money</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="music">music</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="natural">natural</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="ninja">ninja</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="optimist">optimist</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="order">order</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="persistent">persistent</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="pro">pro</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="prodigy">prodigy</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="protagonist">protagonist</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="pure">pure</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="rival">rival</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="royal">royal</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="saintly-warrior">saintly warrior</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="sly">sly</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="student">student</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="superhuman-strength"> strength</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="swordsman">swordsman</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="teacher">teacher</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="tsundere">tsundere</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="trouble-maker">trouble maker</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="water">water</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="weak">weak</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="weapon">weapon</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="wind">wind</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="yokai">yokai</button></div>

            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">Leader Skill</h6></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="large-lead">large</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="extreme-lead">extreme</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="strength-lead">str</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="agile-lead">agi</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="intelligence-lead">int</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="physical-lead">phy</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="heart-lead">hrt</button></div>
            <div class="col col-md-6 col-lg-4 zero-padding"><button class="btn btn-default filter-button text-uppercase text-center" data-filter="technique-lead">tec</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="attack-lead">attack</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="defence-lead">defence</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hp-lead">hp</button></div>
            <div class="col col-md-12 col-lg-6 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="critical-chance-lead">critical chance</button></div>

            <div class="col-12 zero-padding"><h6 class="text-capitalize text-center">Category</h6></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center type" data-filter="type-booster">type-booster</button></div>
            <div class="col-4 zero-padding type-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="strength-booster">strength</button></div>
            <div class="col-4 zero-padding type-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="agile-booster">agile</button></div>
            <div class="col-4 zero-padding type-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="intelligence-booster">intelligence</button></div>
            <div class="col-4 zero-padding type-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="physical-booster">physical</button></div>
            <div class="col-4 zero-padding type-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="heart-booster">heart</button></div>
            <div class="col-4 zero-padding type-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="technique-booster">technique</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center stat" data-filter="stat-booster">stat-booster</button></div>
            <div class="col-6 zero-padding stat-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="attack-booster">attack</button></div>
            <div class="col-6 zero-padding stat-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="defence-booster">defence</button></div>
            <div class="col-6 zero-padding stat-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hp-booster">hp</button></div>
            <div class="col-6 zero-padding stat-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="critical-chance-booster">critical chance</button></div>
            <div class="col-6 zero-padding stat-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="hit-increaser">hit amount</button></div>
            <div class="col-6 zero-padding stat-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="speed-booster">speed</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="cooldown-reducer">cooldown reducer</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="characteristics-booster">characteristics booster</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center single-hitter" data-filter="single-hitter">single hitter</button></div>
            <div class="col-4 zero-padding single-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="all-single-hitter">all</button></div>
            <div class="col-4 zero-padding single-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="single-target-single-hitter">single</button></div>
            <div class="col-4 zero-padding single-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="random-target-single-hitter">random</button></div>
            <div class="col-4 zero-padding single-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="support-target-single-hitter">support</button></div>
            <div class="col-4 zero-padding single-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="main-target-single-hitter">main</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center multi-hitter" data-filter="multi-hitter">multi hitter</button></div>
            <div class="col-4 zero-padding multi-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="all-multi-hitter">all</button></div>
            <div class="col-4 zero-padding multi-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="single-target-multi-hitter">single</button></div>
            <div class="col-4 zero-padding multi-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="main-target-multi-hitter">main</button></div>
            <div class="col-4 zero-padding multi-hitter-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="random-target-multi-hitter">random</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center debuffer" data-filter="debuffer">debuffer</button></div>
            <div class="col-4 zero-padding debuffer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="attack-reducer">attack</button></div>
            <div class="col-4 zero-padding debuffer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="defence-reducer">defence</button></div>
            <div class="col-4 zero-padding debuffer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="speed-reducer">speed</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center healer" data-filter="healer">healer</button></div>
            <div class="col-6 zero-padding healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="all-healer">all</button></div>
            <div class="col-6 zero-padding healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="main-healer">main</button></div>
            <div class="col-6 zero-padding healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="self-healer">self</button></div>
            <div class="col-6 zero-padding healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="random-healer">random</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center eot-healer" data-filter="eot-healer">end of turn healer</button></div>
            <div class="col-6 zero-padding eot-healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="all-eot-healer">all</button></div>
            <div class="col-6 zero-padding eot-healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="main-eot-healer">main</button></div>
            <div class="col-6 zero-padding eot-healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="self-eot-healer">self</button></div>
            <div class="col-6 zero-padding eot-healer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="random-eot-healer">random</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="enemy-buff-negator">negate enemy buff</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="rollback-cooldown">rollback cooldown</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center sealer" data-filter="sealer">sealer</button></div>
            <div class="col-6 zero-padding sealer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="ultimate-sealer">ultimate sealer</button></div>
            <div class="col-6 zero-padding sealer-child"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="skill-sealer">skill sealer</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="stunner">stunner</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="freezer">freezer</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="blinder">blinder</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="paralyzer">paralyzer</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="charmer">charmer</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="burner">burner</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="poisoner">poisoner</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="coma">coma</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="ignore-defence">ignore defence</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="debuff-preventer">prevent debuff</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="debuff-remover">remove debuff</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="blocker">blocker</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="damage-nullifier">damage nullifier / invulnerability</button></div>
            <div class="col-12 zero-padding"><button class="btn btn-default filter-button text-capitalize text-center" data-filter="fear-immune">Fear Immune</button></div>
          </div>
        </div>
        <div class="offset-2 col-10">
          <div class="row" id="characters">
            <div class="gallery_product filter heart support-class <1970 gacha student manliness delinquent protagonist extreme-lead heart-lead critical-chance-lead characteristics-booster stat-booster type-booster attack-booster heart-booster hp-booster cooldown-reducer defence-booster critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=1" target="_blank"><img src="assets/images/Mankichi_Togawa.png" class="img img-fluid"></a>
              <p class="name sr-only">Mankichi Togawa</p>
            </div>

            <div class="gallery_product filter physical dps-class <1970 gacha student persistent water protagonist extreme-lead physical-lead attack-lead type-booster heart-booster stat-booster critical-chance-booster type-booster heart-booster main-target-single-hitter single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer multi-hitter single-target-multi-hitter hit-increaser eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=2" target="_blank"><img src="assets/images/Hiroshi_Pyonkichi.png" class="img img-fluid"></a>
              <p class="name sr-only">Hiroshi & Pyonkichi</p>
            </div>

            <div class="gallery_product filter intelligence tank-class <1970 gacha student athlete persistent hard-worker protagonist extreme-lead intelligence-lead defence-lead defence-booster stat-booster hp-booster type-booster intelligence-booster attack-booster single-hitter single-target-single-hitter debuffer attack-reducer eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=3" target="_blank"><img src="assets/images/Takao_Taniguchi.png" class="img img-fluid"></a>
              <p class="name sr-only">Takao Taniguchi</p>
            </div>

            <div class="gallery_product filter physical support-class <1970 gacha manliness trouble-maker money order protagonist extreme-lead physical-lead critical-chance-lead type-booster physical-booster stat-booster hit-increaser single-hitter single-target-single-hitter main-target-single-hitter enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=4" target="_blank"><img src="assets/images/Ryotsu_Kankichi.png" class="img img-fluid"></a>
              <p class="name sr-only">Ryotsu Kankichi</p>
            </div>

            <div class="gallery_product filter technique healer-class 1980 gacha student disguise trouble-maker protagonist extreme-lead technique-lead hp-lead stat-booster speed-booster defence-booster attack-booster defence-booster eot-healer main-eot-healer healer all-healer random-healer cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=5" target="_blank"><img src="assets/images/Ichido_Rei.png" class="img img-fluid"></a>
              <p class="name sr-only">Ichido Rei</p>
            </div>

            <div class="gallery_product filter heart all-rounder-class 1980 gacha hero student swordsman flight protagonist extreme-lead heart-lead hp-lead type-booster heart-booster stat-booster hp-booster single-hitter single-target-single-hitter debuffer defence-reducer defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=6" target="_blank"><img src="assets/images/Kenta_Hirono.png" class="img img-fluid"></a>
              <p class="name sr-only">Kenta Hirono</p>
            </div>

            <div class="gallery_product filter intelligence support-class 1980 gacha heroine ethereal disguise large-lead intelligence-lead physical-lead critical-chance-lead stat-booster speed-booster type-booster intelligence-booster critical-chance-booster single-hitter single-target-single-hitter rollback-cooldown support-target-single-hitter random-target-single-hitter main-target-single-hitter debuffer defence-reducer speed-reducer attack-booster critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=7" target="_blank"><img src="assets/images/Aoi_Yume.png" class="img img-fluid"></a>
              <p class="name sr-only">Aoi Yume</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 1980 f2p hand-to-hand-combat manliness master fighting-spirit protagonist extreme-lead technique-lead attack-lead stat-booster speed-booster type-booster technique-booster attack-booster single-hitter single-target-multi-hitter single-target-single-hitter main-target-single-hitter debuffer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=8" target="_blank"><img src="assets/images/Kenshiro.png" class="img img-fluid"></a>
              <p class="name sr-only">Kenshiro</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 1980 f2p hand-to-hand-combat manliness master fighting-spirit hot-blooded protagonist large-lead technique-lead strength-lead physical-lead attack-lead stat-booster speed-booster type-booster technique-booster attack-booster single-hitter single-target-multi-hitter single-target-single-hitter main-target-single-hitter debuffer defence-reducer ignore-defence">
              <a href="http://originalcontenthd.com/charpage.php?char=9" target="_blank"><img src="assets/images/JUMP_Kenshiro.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Kenshiro</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1980 limited-gacha hand-to-hand-combat manliness master large-lead technique-lead strength-lead heart-lead attack-lead stat-booster critical-chance-booster defence-booster debuff-preventer single-hitter single-target-single-hitter attack-booster sealer skill-sealer">
              <a href="http://originalcontenthd.com/charpage.php?char=10" target="_blank"><img src="assets/images/Rei.png" class="img img-fluid"></a>
              <p class="name sr-only">Rei</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1980 limited-gacha hand-to-hand-combat manliness master persistent extreme-lead strength-lead attack-lead stat-booster critical-chance-booster defence-booster debuff-preventer single-hitter single-target-single-hitter attack-booster sealer skill-sealer debuffer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=11" target="_blank"><img src="assets/images/Jump_Rei.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Rei</p>
            </div>

            <div class="gallery_product filter technique healer-class 1980 f2p heroine fighting-spirit large-lead strength-lead technique-lead hp-lead cooldown-reducer stat-booster defence-booster hp-booster type-booster technique-booster single-hitter single-target-single-hitter debuffer defence-reducer healer all-healer characteristics-booster debuff-preventer debuff-remover attack-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=12" target="_blank"><img src="assets/images/Mamiya.png" class="img img-fluid"></a>
              <p class="name sr-only">Mamiya</p>
            </div>

            <div class="gallery_product filter agile support-class 1980 f2p natural persistent hot-blooded protagonist extreme-lead agile-lead critical-chance-lead stat-booster speed-booster type-booster agile-booster critical-chance-booster single-hitter single-target-single-hitter enemy-buff-negator defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=13" target="_blank"><img src="assets/images/Gin.png" class="img img-fluid"></a>
              <p class="name sr-only">Gin</p>
            </div>

            <div class="gallery_product filter strength dps-class 1980 f2p hand-to-hand-combat adventure pure protagonist extreme-lead strength-lead attack-lead characteristics-booster type-booster agile-booster stat-booster critical-chance-booster single-hitter single-target-single-hitter main-target-single-hitter attack-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=14" target="_blank"><img src="assets/images/Son_Goku.png" class="img img-fluid"></a>
              <p class="name sr-only">Son Goku</p>
            </div>

            <div class="gallery_product filter technique support-class 1980 gacha hand-to-hand-combat hard-worker light large-lead technique-lead physical-lead critical-chance-lead stat-booster speed-booster type-booster technique-booster debuff-remover single-hitter single-target-single-hitter rollback-cooldown support-target-single-hitter random-target-single-hitter critical-chance-booster debuffer attack-reducer enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=15" target="_blank"><img src="assets/images/Krillin.png" class="img img-fluid"></a>
              <p class="name sr-only">Krillin</p>
            </div>

            <div class="gallery_product filter intelligence dps-class 1980 gacha hand-to-hand-combat sly evil extreme-lead intelligence-lead attack-lead stat-booster critical-chance-booster attack-booster type-booster intelligence-booster cooldown-reducer multi-hitter single-target-multi-hitter single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=16" target="_blank"><img src="assets/images/Yamcha.png" class="img img-fluid"></a>
              <p class="name sr-only">Yamcha</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 1980 gacha manliness pro gunner sly protagonist extreme-lead agile-lead defence-lead stat-booster hp-booster type-booster agile-booster attack-booster single-hitter single-target-single-hitter rollback-cooldown support-target-single-hitter random-target-single-hitter blocker multi-hitter single-target-multi-hitter defence-booster eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=17" target="_blank"><img src="assets/images/Ryo_Saeba.png" class="img img-fluid"></a>
              <p class="name sr-only">Ryo Saeba</p>
            </div>

            <div class="gallery_product filter agile tank-class 1980 gacha heroine superhuman-strength gunner order large-lead agile-lead technique-lead attack-lead stat-booster defence-booster type-booster agile-booster characteristics-booster single-hitter single-target-single-hitter rollback-cooldown damage-nullifier multi-hitter random-target-multi-hitter attack-booster sealer skill-sealer">
              <a href="http://originalcontenthd.com/charpage.php?char=18" target="_blank"><img src="assets/images/Kaori_Makimura.png" class="img img-fluid"></a>
              <p class="name sr-only">Kaori Makimura</p>
            </div>

            <div class="gallery_product filter agile dps-class 1980 f2p divine hand-to-hand-combat persistent hard-worker protagonist saintly-warrior extreme-lead agile-lead attack-lead stat-booster critical-chance-booster type-booster physical-booster multi-hitter main-target-multi-hitter single-hitter main-target-single-hitter attack-booster eot-healer self-eot-healer single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=19" target="_blank"><img src="assets/images/Pegasus_Seiya.png" class="img img-fluid"></a>
              <p class="name sr-only">Pegasus Seiya</p>
            </div>

            <div class="gallery_product filter agile dps-class 1980 f2p divine hand-to-hand-combat persistent hard-worker protagonist saintly-warrior large-lead agile-lead strength-lead physical-lead attack-lead stat-booster critical-chance-booster type-booster physical-booster multi-hitter main-target-multi-hitter single-hitter main-target-single-hitter attack-booster eot-healer self-eot-healer single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=20" target="_blank"><img src="assets/images/JUMP_Seiya.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Pegasus Seiya</p>
            </div>

            <div class="gallery_product filter physical tank-class 1980 gacha divine hand-to-hand-combat manliness prodigy dragon saintly-warrior large-lead technique-lead physical-lead defence-lead stat-booster critical-chance-booster hp-booster type-booster physical-booster single-hitter single-target-single-hitter enemy-buff-negator debuff attack-reducer main-target-single-hitter defence-booster eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=21" target="_blank"><img src="assets/images/Shiryuu.png" class="img img-fluid"></a>
              <p class="name sr-only">Shiryuu</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 1980 gacha divine hand-to-hand-combat water cool-headed saintly-warrior extreme-lead agile-lead defence-lead cooldown-reducer stat-booster critical-chance-booster type-booster agile-booster debuff-remover single-hitter main-target-single-hitter rollback-cooldown freezer  attack-booster debuffer defence-reducer defence-booster attack-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=22" target="_blank"><img src="assets/images/Cygnus_Hyoga.png" class="img img-fluid"></a>
              <p class="name sr-only">Cygnus Hyoga</p>
            </div>

            <div class="gallery_product filter strength dps-class 1980 f2p divine hand-to-hand-combat fire fighting-spirit avenger saintly-warrior large-lead agile-lead strength-lead critical-chance-lead characteristics-booster stat-booster attack-booster single-hitter single-target-single-hitter sealer skill-sealer healer self-healer eot-healer self-eot-healer damage-nullifier">
              <a href="http://originalcontenthd.com/charpage.php?char=23" target="_blank"><img src="assets/images/Ikki.png" class="img img-fluid"></a>
              <p class="name sr-only">Ikki</p>
            </div>

            <div class="gallery_product filter strength support-class 1980 gacha divine hand-to-hand-combat pure saintly-warrior large-lead agile-lead strength-lead hp-lead characteristics-booster stat-booster defence-booster single-hitter single-target-single-hitter support-target-single-hitter damage-nullifier healer main-healer eot-healer random-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=24" target="_blank"><img src="assets/images/Andromeda_Shun.png" class="img img-fluid"></a>
              <p class="name sr-only">Andromeda Shun</p>
            </div>

            <div class="gallery_product filter intelligence all-rounder-class 1980 f2p hand-to-hand-combat elite persistent hot-blooded protagonist extreme-lead intelligence-lead defence-lead stat-booster hp-booster type-booster intelligence-booster debuffer defence-reducer single-hitter main-target-single-hitter single-target-single-hitter multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=25" target="_blank"><img src="assets/images/Jonathan_Joestar.png" class="img img-fluid"></a>
              <p class="name sr-only">Jonathan Joestar</p>
            </div>

            <div class="gallery_product filter technique support-class 1980 gacha hand-to-hand-combat delinquent elite sly protagonist extreme-lead technique-lead critical-chance-lead stat-booster speed-booster critical-chance-booster single-hitter single-target-single-hitter debuffer attack-reducer multi-hitter single-target-multi-hitter enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=26" target="_blank"><img src="assets/images/Joseph_Joestar.png" class="img img-fluid"></a>
              <p class="name sr-only">Joseph Joestar</p>
            </div>

            <div class="gallery_product filter intelligence all-rounder-class 1980 gacha artist superhuman-strength fire protagonist evil extreme-lead intelligence-lead attack-lead stat-booster critical-chance-booster attack-booster type-booster intelligence-booster single-hitter main-target-single-hitter enemy-buff-negator single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=27" target="_blank"><img src="assets/images/Dark_Schneider.png" class="img img-fluid"></a>
              <p class="name sr-only">Dark Schneider</p>
            </div>

            <div class="gallery_product filter intelligence support-class 1980 limited-gacha heroine ethereal tsundere cooking large-lead intelligence-lead physical-lead defence-lead stat-booster hp-booster type-booster intelligence-booster speed-booster attack-booster characteristics-booster defence-booster cooldown-reducer critical-chance-booster single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=28" target="_blank"><img src="assets/images/Amano_Ai.png" class="img img-fluid"></a>
              <p class="name sr-only">Amano Ai</p>
            </div>

            <div class="gallery_product filter intelligence support-class 1980 limited-gacha heroine ethereal tsundere cooking large-lead intelligence-lead physical-lead strength-lead defence-lead stat-booster hp-booster type-booster intelligence-booster speed-booster attack-booster characteristics-booster defence-booster cooldown-reducer critical-chance-booster single-hitter single-target-single-hitter hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=29" target="_blank"><img src="assets/images/JUMPAmano_Ai.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Amano Ai</p>
            </div>

            <div class="gallery_product filter strength dps-class 1990 f2p yokai student delinquent fighting-spirit protagonist extreme-lead strength-lead attack-lead against-damage-booster stat-booster attack-booster type-booster strength-booster single-hitter single-target-single-hitter multi-hitter single-target-multi-hitter debuffer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=30" target="_blank"><img src="assets/images/Urameshi_Yusuke.png" class="img img-fluid"></a>
              <p class="name sr-only">Urameshi Yusuke</p>
            </div>

            <div class="gallery_product filter technique dps-class 1990 gacha yokai swordsman dark fire cool-headed large-lead agile-lead technique-lead attack-lead against-damage-booster stat-booster defence-booster critical-chance-booster single-hitter main-target-single-hitter burner single-target-single-hitter multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=31" target="_blank"><img src="assets/images/Hiei.png" class="img img-fluid"></a>
              <p class="name sr-only">Hiei</p>
            </div>

            <div class="gallery_product filter intelligence healer-class 1990 gacha yokai student natural prodigy large-lead strength-lead intelligence-lead hp-lead stat-booster speed-booster defence-booster heal-booster multi-hitter single-target-multi-hitter healer all-healer attack-booster sealer skill-sealer">
              <a href="http://originalcontenthd.com/charpage.php?char=32" target="_blank"><img src="assets/images/Kurama.png" class="img img-fluid"></a>
              <p class="name sr-only">Kurama</p>
            </div>

            <div class="gallery_product filter physical support-class 1990 gacha student manliness delinquent hot-blooded large-lead technique-lead physical-lead critical-chance-lead against-damage-booster stat-booster ultimate-damage-booster type-booster physical-booster defence-booster single-hitter single-target-single-hitter rollback-cooldown random-target-single-hitter support-target-single-hitter blocker attack-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=33" target="_blank"><img src="assets/images/Kazuma_Kuwabara.png" class="img img-fluid"></a>
              <p class="name sr-only">Kazuma Kuwabara</p>
            </div>

            <div class="gallery_product filter strength dps-class 1990 gacha yokai trouble-maker protagonist evil extreme-lead strength-lead attack-lead characteristics-booster ultimate-damage-booster type-booster strength-booster single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=34" target="_blank"><img src="assets/images/Taro_Yamada.png" class="img img-fluid"></a>
              <p class="name sr-only">Taro Yamada</p>
            </div>

            <div class="gallery_product filter physical tank-class 1990 gacha hero student hand-to-hand-combat insane protagonist extreme-lead physical-lead defence-lead stat-booster attack-booster type-booster physical-booster single-hitter single-target-single-hitter blocker debuffer attack-reducer defence-reducer multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=35" target="_blank"><img src="assets/images/Kyosuke_Shikijo.png" class="img img-fluid"></a>
              <p class="name sr-only">Kyosuke Shikijo</p>
            </div>

            <div class="gallery_product filter strength dps-class 1990 gacha delinquent music fighting-spirit sly protagonist extreme-lead strength-lead attack-lead against-damage-booster stat-booster attack-booster type-booster strength-booster multi-hitter random-target-multi-hitter sealer skill-sealer single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=36" target="_blank"><img src="assets/images/Hibino_Hareluya.png" class="img img-fluid"></a>
              <p class="name sr-only">Hibino Hareluya</p>
            </div>

            <div class="gallery_product filter heart dps-class 1990 gacha hero weak luck alien protagonist extreme-lead heart-lead hp-lead against-damage-booster stat-booster attack-booster type-booster heart-booster critical-chance-booster burner stunner debuffer defence-reducer single-hitter single-target-single-hitter speed-booster defence-booster blinder damage-nullifier counter">
              <a href="http://originalcontenthd.com/charpage.php?char=37" target="_blank"><img src="assets/images/Luckyman.png" class="img img-fluid"></a>
              <p class="name sr-only">Luckyman</p>
            </div>

            <div class="gallery_product filter heart all-rounder-class 1990 gacha ninja hand-to-hand-combat wind pure protagonist extreme-lead heart-lead attack-lead stat-booster speed-booster type-booster heart-booster ultimate-damage-booster multi-hitter all-multi-hitter defence-booster enemy-buff-negator sealer skill-sealer single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=38" target="_blank"><img src="assets/images/Fuusuke.png" class="img img-fluid"></a>
              <p class="name sr-only">Fuusuke</p>
            </div>

            <div class="gallery_product filter strength tank-class 1990 gacha hero yokai artist protagonist teacher extreme-lead strength-lead defence-lead stat-booster hp-booster type-booster strength-booster attack-booster against-damage-booster multi-hitter single-target-multi-hitter blocker defence-booster single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=39" target="_blank"><img src="assets/images/Meisuke_Nueno.png" class="img img-fluid"></a>
              <p class="name sr-only">Meisuke Nueno</p>
            </div>

            <div class="gallery_product filter heart support-class 1990 gacha yokai heroine trouble-maker large-lead technique-lead heart-lead critical-chance-lead against-damage-booster ultimate-damage-booster type-booster heart-booster stat-booster defence-booster freezer eot-healer self-eot-healer single-hitter single-target-single-hitter healer main-healer cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=40" target="_blank"><img src="assets/images/Yukime.png" class="img img-fluid"></a>
              <p class="name sr-only">Yukime</p>
            </div>

            <div class="gallery_product filter agile tank-class 1990 f2p swordsman natural airhead protagonist extreme-lead agile-lead defence-lead against-damage-booster stat-booster heal-booster type-booster agile-booster speed-booster single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=41" target="_blank"><img src="assets/images/Himura_Kenshin.png" class="img img-fluid"></a>
              <p class="name sr-only">Himura Kenshin</p>
            </div>

            <div class="gallery_product filter strength tank-class 1990 gacha superhuman-strength persistent fighting-spirit evil large-lead strength-lead technique-lead defence-lead stat-booster hp-booster defence-booster attack-booster single-hitter main-target-single-hitter debuffer attack-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=42" target="_blank"><img src="assets/images/Sanosuke_Sagara.png" class="img img-fluid"></a>
              <p class="name sr-only">Sanosuke Sagara</p>
            </div>

            <div class="gallery_product filter heart dps-class 1990 pvp-exclusive swordsman persistent hard-worker hot-blooded fighting-spirit large-lead persistent-lead attack-lead stat-booster defence-booster hp-booster characteristics-booster hit-increaser against-damage-booster single-hitter single-target-single-hitter rollback-cooldown attack-booster critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=43" target="_blank"><img src="assets/images/Myojin_Yahiko.png" class="img img-fluid"></a>
              <p class="name sr-only">Myojin Yahiko</p>
            </div>

            <div class="gallery_product filter physical dps-class 1990 pvp-exclusive swordsman superhuman-strength genius teacher large-lead strength-lead heart-lead physical-lead attack-lead stat-booster defence-booster characteristics-booster ultimate-damage-booster against-damage-booster multi-hitter single-target-multi-hitter damage-nullifier counter debuffer attack-reducer rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=44" target="_blank"><img src="assets/images/Hiko_Seijuro_XIII.png" class="img img-fluid"></a>
              <p class="name sr-only">Hiko Seijuro XIII</p>
            </div>

            <div class="gallery_product filter technique tank-class 1990 gacha student hand-to-hand-combat trouble-maker protagonist extreme-lead technique-lead defence-lead stat-booster hp-booster heal-booster type-booster technique-booster ultimate-damage-booster single-hitter single-target-single-hitter rollback-cooldown debuffer attack-reducer defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=45" target="_blank"><img src="assets/images/Masaru_Hananakajima.png" class="img img-fluid"></a>
              <p class="name sr-only">Masaru Hanakajima</p>
            </div>

            <div class="gallery_product filter heart support-class 1990 f2p artist adventure trouble-maker sly protagonist extreme-lead heart-lead critical-chance-lead stat-booster speed-booster attack-booster type-booster heart-booster defence-booster single-hitter main-target-single-hitter eot-damager bleed single-target-single-hitter sealer skill-sealer debuffer attack-reducer blinder speed-booster cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=46" target="_blank"><img src="assets/images/Taikobo.png" class="img img-fluid"></a>
              <p class="name sr-only">Taikobo</p>
            </div>

            <div class="gallery_product filter intelligence all-rounder-class 1990 gacha artist disguise genius cool-headed extreme-lead intelligence-lead defence-lead against-damage-booster heal-booster type-booster intelligence-booster stat-booster attack-booster multi-hitter main-target-multi-hitter critical-chance-booster defence-booster enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=47" target="_blank"><img src="assets/images/Youzen.png" class="img img-fluid"></a>
              <p class="name sr-only">Youzen</p>
            </div>

            <div class="gallery_product filter intelligence dps-class 1990 limited-gacha student luck protagonist large-lead intelligence-lead physical-lead heart-lead attack-lead stat-booster critical-chance-booster ultimate-damage-booster type-booster intelligence-booster debuff-preventer debuffer attack-reducer defence-reducer single-hitter all-single-hitter attack-booster damage-nullifier single-target-single-hitter stunner">
              <a href="http://originalcontenthd.com/charpage.php?char=48" target="_blank"><img src="assets/images/Yugi_Moto.png" class="img img-fluid"></a>
              <p class="name sr-only">Yugi Moto</p>
            </div>

            <div class="gallery_product filter intelligence dps-class 1990 limited-gacha student luck protagonist royal extreme-lead intelligence-lead attack-lead stat-booster critical-chance-booster ultimate-damage-booster type-booster intelligence-booster debuff-preventer against-damage-booster ignore-defence debuffer attack-reducer defence-reducer single-hitter all-single-hitter attack-booster damage-nullifier single-target-single-hitter stunner rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=49" target="_blank"><img src="assets/images/Jump_Yugi_Moto.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Yugi Moto</p>
            </div>

            <div class="gallery_product filter physical support-class 1990 f2p student manliness luck extreme-lead physical-lead defence-lead stat-booster hp-booster attack-booster type-booster physical-booster single-hitter single-target-single-hitter burner sealer skill-sealer debuffer attack-reducer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=50" target="_blank"><img src="assets/images/Katsuya_Jonouchi.png" class="img img-fluid"></a>
              <p class="name sr-only">Katsuya Jonouchi</p>
            </div>

            <div class="gallery_product filter physical all-rounder-class 1990 f2p superhuman-strength hand-to-hand-combat adventure optimist protagonist extreme-lead physical-lead hp-lead stat-booster critical-chance-booster type-booster technique-booster ultimate-damage-booster against-damage-booster single-hitter single-target-single-hitter multi-hitter single-target-multi-hitter defence-booster debuffer attack-reducer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=51" target="_blank"><img src="assets/images/Monkey_D_Luffy.png" class="img img-fluid"></a>
              <p class="name sr-only">Monkey D Luffy</p>
            </div>

            <div class="gallery_product filter technique dps-class 1990 gacha swordsman manliness adventure master large-lead technique-lead intelligence-lead attack-lead against-damage-booster stat-booster attack-booster type-booster technique-booster ultimate-damage-booster multi-hitter single-target-multi-hitter single-hitter single-target-single-hitter stunner">
              <a href="http://originalcontenthd.com/charpage.php?char=52" target="_blank"><img src="assets/images/Roronoa_Zoro.png" class="img img-fluid"></a>
              <p class="name sr-only">Rorona Zoro</p>
            </div>

            <div class="gallery_product filter intelligence healer-class 1990 gacha heroine adventure money sly large-lead agile-lead intelligence-lead hp-lead stat-booster speed-booster type-booster intelligence-booster heal-booster single-hitter single-target-single-hitter sealer skill-sealer healer all-healer defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=53" target="_blank"><img src="assets/images/Nami.png" class="img img-fluid"></a>
              <p class="name sr-only">Nami</p>
            </div>

            <div class="gallery_product filter heart all-rounder-class 1990 gacha adventure weak gunner luck extreme-lead heart-lead critical-chance-lead stat-booster attack-booster damage-nullifier single-hitter single-target-single-hitter debuffer defence-reducer sealer skill-sealer stunner rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=54" target="_blank"><img src="assets/images/Usopp.png" class="img img-fluid"></a>
              <p class="name sr-only">Usopp</p>
            </div>

            <div class="gallery_product filter physical dps-class 1990 f2p hand-to-hand-combat persistent pure protagonist extreme-lead physical-lead attack-lead stat-booster critical-chance-booster attack-booster type-booster physical-booster single-hitter main-target-single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=55" target="_blank"><img src="assets/images/Gon_Freecs.png" class="img img-fluid"></a>
              <p class="name sr-only">Gon Freecs</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 1990 limited-gacha pro avenger prodigy large-lead agile-lead technique-lead attack-lead against-damage-booster stat-booster attack-booster type-booster technique-booster defence-booster debuff-preventer counter damage-nullifier single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer rollback-cooldown enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=56" target="_blank"><img src="assets/images/Kurapika.png" class="img img-fluid"></a>
              <p class="name sr-only">Kurapika</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 1990 limited-gacha pro avenger prodigy large-lead agile-lead technique-lead physical-lead attack-lead against-damage-booster stat-booster attack-booster type-booster technique-booster defence-booster debuff-preventer counter damage-nullifier single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer rollback-cooldown enemy-buff-negator hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=57" target="_blank"><img src="assets/images/Jump_Kurapika.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Kurapika</p>
            </div>

            <div class="gallery_product filter agile healer-class 1990 gacha hand-to-hand-combat manliness prodigy glasses large-lead agile-lead physical-lead hp-lead stat-booster defence-booster heal-booster type-booster agile-booster healer all-healer single-hitter single-target-single-hitter random-target-single-hitter support-target-single-hitter debuff-preventer main-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=58" target="_blank"><img src="assets/images/Leorio_Paradinight.png" class="img img-fluid"></a>
              <p class="name sr-only">Leorio Paradinight</p>
            </div>

            <div class="gallery_product filter intelligence dps-class 1990 gacha artist dark genius insane extreme-lead intelligence-lead critical-chance-lead against-damage-booster stat-booster attack-booster type-booster intelligence-booster cooldown-reducer single-hitter single-target-single-hitter main-target-single-hitter debuffer attack-reducer damage-nullifier enemy-buff-negator defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=59" target="_blank"><img src="assets/images/Hisoka_Morrow.png" class="img img-fluid"></a>
              <p class="name sr-only">Hisoka Morrow</p>
            </div>

            <div class="gallery_product filter technique dps-class 1990 f2p pro master money large-lead agile-lead technique-lead attack-lead against-damage-booster stat-booster critical-chance-booster type-booster technique-booster attack-booster single-hitter single-target-single-hitter ultimate-damage-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=60" target="_blank"><img src="assets/images/Zeno_Zoldyck.png" class="img img-fluid"></a>
              <p class="name sr-only">Zeno Zoldyck</p>
            </div>

            <div class="gallery_product filter physical tank-class 1990 f2p ninja hand-to-hand-combat persistent trouble-maker hard-worker protagonist extreme-lead physical-lead defence-lead stat-booster hp-booster defence-booster ultimate-damage-booster multi-hitter single-target-multi-hitter single-hitter main-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=61" target="_blank"><img src="assets/images/Uzumaki_Naruto.png" class="img img-fluid"></a>
              <p class="name sr-only">Uzumaki Naruto</p>
            </div>

            <div class="gallery_product filter agile dps-class 1990 gacha ninja hand-to-hand-combat genius avenger rival large-lead agile-lead technique-lead attack-lead stat-booster critical-chance-booster attack-booster type-booster agile-booster speed-booster single-hitter main-target-single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=62" target="_blank"><img src="assets/images/Sasuke_Uchiha.png" class="img img-fluid"></a>
              <p class="name sr-only">Sasuke Uchiha</p>
            </div>

            <div class="gallery_product filter technique tank-class 1990 gacha ninja insane weapon extreme-lead technique-lead defence-lead against-damage-booster damage-nullifier single-hitter main-target-single-hitter sealer ultimate-sealer debuff-preventer debuffer defence-reducer cooldown-reducer multi-hitter random-target-multi-hitter hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=63" target="_blank"><img src="assets/images/Gaara.png" class="img img-fluid"></a>
              <p class="name sr-only">Gaara</p>
            </div>

            <div class="gallery_product filter strength support-class 2000 gacha hand-to-hand-combat master protagonist glasses extreme-lead strength-lead attack-lead cooldown-reducer type-booster characteristics-booster single-hitter single-target-single-hitter sealer ultimate-sealer enemy-buff-negator main-target-single-hitter stat-booster attack-booster stunner">
              <a href="http://originalcontenthd.com/charpage.php?char=64" target="_blank"><img src="assets/images/BoBoBo.png" class="img img-fluid"></a>
              <p class="name sr-only">BoBobo</p>
            </div>

            <div class="gallery_product filter strength tank-class 2000 f2p student swordsman divine protagonist extreme-lead strength-lead defence-lead stat-booster hp-booster heal-booster type-booster strength-booster attack-booster damage-booster against-damage-booster single-hitter single-target-single-hitter multi-hitter all-multi-hitter debuffer attack-reducer defence-reducer enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=65" target="_blank"><img src="assets/images/Ichigo_Kurosaki.png" class="img img-fluid"></a>
              <p class="name sr-only">Ichigo Kurosaki</p>
            </div>

            <div class="gallery_product filter heart healer-class 2000 gacha student artist heroine natural airhead prodigy large-lead strength-lead heart-lead hp-lead stat-booster defence-booster heal-booster debuff-preventer healer all-healer main-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=66" target="_blank"><img src="assets/images/Orihime_Inoue.png" class="img img-fluid"></a>
              <p class="name sr-only">Orihime Inoue</p>
            </div>

            <div class="gallery_product filter physical tank-class 2000 gacha student hand-to-hand-combat manliness superhuman-strength large-lead physical-lead heart-lead defence-lead stat-booster defence-booster ultimate-damage-booster damage-booster against-damage-booster single-hitter single-target-single-hitter main-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=67" target="_blank"><img src="assets/images/Yasutora_Chad.png" class="img img-fluid"></a>
              <p class="name sr-only">Yasutora Chad</p>
            </div>

            <div class="gallery_product filter technique dps-class 2000 f2p swordsman manliness trouble-maker protagonist extreme-lead technique-lead attack-lead damage-booster against-damage-booster stat-booster critical-chance-booster attack-booster multi-hitter single-target-multi-hitter single-hitter single-target-single-hitter debuffer attack-reducer defence-reducer main-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=68" target="_blank"><img src="assets/images/Sakata_Gintoki.png" class="img img-fluid"></a>
              <p class="name sr-only">Sakata Gintoki</p>
            </div>

            <div class="gallery_product filter physical dps-class 2000 gacha heroine superhuman-strength alien extreme-lead physical-lead attack-lead stat-booster hp-booster attack-booster characteristics-booster series-booster single-hitter main-target-single-hitter ignore-defence single-target-single-hitter healer self-healer random-target-single-hitter support-target-single-hitter debuff-preventer">
              <a href="http://originalcontenthd.com/charpage.php?char=69" target="_blank"><img src="assets/images/Kagura.png" class="img img-fluid"></a>
              <p class="name sr-only">Kagura</p>
            </div>

            <div class="gallery_product filter technique tank-class 2000 gacha student royal heroine trouble-maker alien large-lead heart-lead technique-lead defence-lead stat-booster defence-booster characteristics-booster attack-booster single-hitter all-single-hitter healer all-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=70" target="_blank"><img src="assets/images/Lala.png" class="img img-fluid"></a>
              <p class="name sr-only">Lala</p>
            </div>

            <div class="gallery_product filter agile dps-class 2000 gacha heroine pro dark alien cool-headed large-lead heart-lead agile-lead attack-lead damage-booster against-damage-booster stat-booster attack-booster type-booster agile-booster multi-hitter single-target-multi-hitter single-hitter single-target-single-hitter critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=71" target="_blank"><img src="assets/images/Yami.png" class="img img-fluid"></a>
              <p class="name sr-only">Yami</p>
            </div>

            <div class="gallery_product filter strength dps-class 2000 gacha superhuman-strength hand-to-hand-combat pro cooking protagonist extreme-lead strength-lead attack-lead damage-booster against-damage-booster stat-booster critical-chance-booster type-booster agile-booster ultimate-damage-booster multi-hitter single-target-multi-hitter single-hitter single-target-single-hitter debuffer defence-reducer attack-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=72" target="_blank"><img src="assets/images/Toriko.png" class="img img-fluid"></a>
              <p class="name sr-only">Toriko</p>
            </div>

            <div class="gallery_product filter heart support-class 2000 gacha student athlete protagonist extreme-lead heart-lead critical-chance-lead stat-booster speed-booster type-booster heart-booster attack-booster cooldown-reducer single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=73" target="_blank"><img src="assets/images/Kuroko_Tetsuya.png" class="img img-fluid"></a>
              <p class="name sr-only">Kuroko Tetsuya</p>
            </div>

            <div class="gallery_product filter strength dps-class 2000 gacha student athlete superhuman-strength hot-blooded large-lead strength-lead physical-lead attack-lead damage-booster characteristics-booster athlete-booster stat-booster attack-booster type-booster strength-booster critical-chance-booster damage-booster against-damage-booster single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=74" target="_blank"><img src="assets/images/Kagami_Taiga.png" class="img img-fluid"></a>
              <p class="name sr-only">Kagami Taiga</p>
            </div>

            <div class="gallery_product filter physical dps-class 2000 gacha student royal hand-to-hand-combat superhuman-strength protagonist extreme-lead physical-lead attack-lead damage-booster against-damage-booster stat-booster attack-booster type-booster physical-booster single-hitter main-target-single-hitter multi-hitter single-target-multi-hitter single-target-single-hitter sealer skill-sealer">
              <a href="http://originalcontenthd.com/charpage.php?char=75" target="_blank"><img src="assets/images/Tatsumi_Oga.png" class="img img-fluid"></a>
              <p class="name sr-only">Tatsumi Oga</p>
            </div>

            <div class="gallery_product filter agile support-class 2000 gacha swordsman heroine ethereal elite evil large-lead intelligence-lead agile-lead critical-chance-lead stat-booster speed-booster type-booster agile-booster critical-chance-booster single-hitter single-target-single-hitter rollback-cooldown random-target-single-hitter support-target-single-hitter attack-booster sealer skill-sealer enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=76" target="_blank"><img src="assets/images/Hildegarde.png" class="img img-fluid"></a>
              <p class="name sr-only">Hildegarde</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 2000 gacha student superhuman-strength heroine tsundere order protagonist extreme-lead technique-lead attack-lead damage-booster against-damage-booster against-student-booster stat-booster speed-booster type-booster technique-booster attack-booster single-hitter single-target-single-hitter ignore-defence main-target-single-hitter defence-booster cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=77" target="_blank"><img src="assets/images/Medaka_Kurokami.png" class="img img-fluid"></a>
              <p class="name sr-only">Medaka Kurokami</p>
            </div>

            <div class="gallery_product filter agile dps-class 2010 gacha student hand-to-hand-combat heroine superhuman-strength tsundere extreme-lead agile-lead attack-lead damage-booster against-damage-booster against-protagonist-booster stat-booster critical-chance-booster type-booster intelligence-booster ultimate-damage-booster single-hitter single-target-single-hitter multi-hitter single-target-multi-hitter debuffer defence-reducer attack-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=78" target="_blank"><img src="assets/images/Chitoge_Kirisaki.png" class="img img-fluid"></a>
              <p class="name sr-only">Chitoge Kirisaki</p>
            </div>

            <div class="gallery_product filter heart support-class 2010 gacha student persistent hard-worker cooking protagonist extreme-lead heart-lead critical-chance-lead stat-booster hp-booster defence-booster type-booster heart-booster defence-booster damage-nullifier single-hitter main-target-single-hitter debuffer speed-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=79" target="_blank"><img src="assets/images/Marika_Tachibana.png" class="img img-fluid"></a>
              <p class="name sr-only">Marika Tachibana</p>
            </div>

            <div class="gallery_product filter agile dps-class 2010 gacha student athlete persistent trouble-maker hot-blooded protagonist extreme-lead agile-lead attack-lead stat-booster critical-chance-booster type-booster physical-booster speed-booster damage-booster against-damage-booster against-athlete-booster single-hitter single-target-single-hitter multi-hitter random-target-multi-hitter main-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=80" target="_blank"><img src="assets/images/Hinata_Shoyo.png" class="img img-fluid"></a>
              <p class="name sr-only">Hinata Shoyo</p>
            </div>

            <div class="gallery_product filter technique support-class 2010 gacha student athlete persistent genius fighting-spirit rival large-lead strength-lead technique-lead critical-chance-lead damage-booster against-damage-booster against-rival-booster stat-booster speed-booster type-booster technique-booster counter single-hitter single-target-single-hitter rollback-cooldown random-target-single-hitter support-target-single-hitter cooldown-reducer enemy-buff-negator attack-booster critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=81" target="_blank"><img src="assets/images/Kageyama_Tobio.png" class="img img-fluid"></a>
              <p class="name sr-only">Kageyama Tobio</p>
            </div>

            <div class="gallery_product filter technique support-class 2010 gacha student superhuman-strength protagonist extreme-lead technique-lead critical-chance-lead stat-booster defence-booster against-defence-booster against-student-booster against-technique-booster heal-booster single-hitter single-target-single-hitter rollback-cooldown random-target-single-hitter support-target-single-hitter main-target-single-hitter debuffer defence-reducer attack-booster enemy-buff-negator">
              <a href="http://originalcontenthd.com/charpage.php?char=82" target="_blank"><img src="assets/images/Saiki_Kusuo.png" class="img img-fluid"></a>
              <p class="name sr-only">Saiki Kusuo</p>
            </div>

            <div class="gallery_product filter heart healer-class 2010 gacha student persistent hard-worker cooking protagonist extreme-lead heart-lead hp-lead stat-booster speed-booster type-booster heart-booster heal-booster healer main-healer defence-booster all-healer eot-healer main-eot-healer cooldown-reducer random-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=83" target="_blank"><img src="assets/images/Yukihira_Soma.png" class="img img-fluid"></a>
              <p class="name sr-only">Yukihira Soma</p>
            </div>

            <div class="gallery_product filter intelligence healer-class 2010 gacha student athlete heroine weak cooking large-lead heart-lead intelligence-lead hp-lead stat-booster defence-booster characteristics-booster student-booster against-defence-booster against-intelligence-booster heal-booster attack-booster speed-booster healer main-healer all-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=84" target="_blank"><img src="assets/images/Megumi_Tadokoro.png" class="img img-fluid"></a>
              <p class="name sr-only">Megumi Tadokoro</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 2010 f2p swordsman ethereal sly protagonist artificial extreme-lead technique-lead critical-chance-lead stat-booster critical-chance-booster speed-booster type-booster technique-booster damage-booster against-damage-booster against-physical-booster single-hitter single-target-single-hitter multi-hitter single-target-multi-hitter debuffer attack-reducer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=85" target="_blank"><img src="assets/images/Kuga_Yuuma.png" class="img img-fluid"></a>
              <p class="name sr-only">Kuga Yuuma</p>
            </div>

            <div class="gallery_product filter intelligence tank-class 2010 gacha hero swordsman gunner combatant order protagonist glasses extreme-lead intelligence-lead defence-lead stat-booster defence-booster against-defence-booster against-evil-booster against-intelligence-booster hp-booster single-hitter main-target-single-hitter blocker enemy-buff-negator critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=86" target="_blank"><img src="assets/images/Osamu_Mikumo.png" class="img img-fluid"></a>
              <p class="name sr-only">Osamu Mikumo</p>
            </div>

            <div class="gallery_product filter physical support-class 2010 gacha heroine weak combatant gunner large-lead strength-lead physical-lead critical-chance-lead damage-booster against-damage-booster against-ethereal-booster stat-booster attack-booster type-booster physical-booster critical-chance-booster cooldown-reducer debuffer attack-reducer single-hitter single-target-single-hitter main-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=87" target="_blank"><img src="assets/images/Chika_Amatori.png" class="img img-fluid"></a>
              <p class="name sr-only">Chika Amatori</p>
            </div>

            <div class="gallery_product filter heart dps-class 2010 gacha student athlete persistent fighting-spirit protagonist extreme-lead heart-lead attack-lead damage-booster against-damage-booster against-athlete-booster stat-booster attack-booster type-booster heart-booster critical-chance-booster multi-hitter single-target-multi-hitter ignore-defence single-hitter debuffer defence-reducer hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=88" target="_blank"><img src="assets/images/Hinomaru_Ushio.png" class="img img-fluid"></a>
              <p class="name sr-only">Hinomaru Ushio</p>
            </div>

            <div class="gallery_product filter agile tank-class 2010 f2p hero student superhuman-strength weak protagonist extreme-lead agile-lead defence-lead stat-booster defence-booster against-defence-booster against-evil-booster hp-booster type-booster agile-booster attack-booster single-target-single-hitter blocker debuffer attack-reducer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=89" target="_blank"><img src="assets/images/Izuku_Midoriya.png" class="img img-fluid"></a>
              <p class="name sr-only">Izuku Midoriya</p>
            </div>

            <div class="gallery_product filter strength dps-class 2010 gacha hero student superhuman-strength fire fighting-spirit rival large-lead strength-lead heart-lead attack-lead damage-booster against-damage-booster against-superhuman-strength-booster ultimate-damage-booster type-booster strength-booster stat-booster attack-booster single-hitter all-single-hitter eot-damager burner single-target-single-hitter multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=90" target="_blank"><img src="assets/images/Katsuki_Bakugo.png" class="img img-fluid"></a>
              <p class="name sr-only">Katsuki Bakugo</p>
            </div>

            <div class="gallery_product filter intelligence all-rounder-class 2010 gacha hero student superhuman-strength fire water extreme-lead intelligence-lead critical-chance-lead stat-booster critical-chance-booster speed-booster type-booster intelligence-booster attack-booster single-hitter main-target-single-hitter debuffer speed-reducer single-target-single-hitter defence-reducer eot-damager burner immobilizer freezer">
              <a href="http://originalcontenthd.com/charpage.php?char=91" target="_blank"><img src="assets/images/Shoto_Todoroki.png" class="img img-fluid"></a>
              <p class="name sr-only">Shoto Todoroki</p>
            </div>

            <div class="gallery_product filter strength tank-class 2010 gacha swordsman persistent hot-blooded order protagonist extreme-lead strength-lead defence-lead stat-booster hp-booster attack-booster type-booster strength-booster single-hitter single-target-single-hitter damage-nullifier multi-hitter random-target-multi-hitter defence-booster counter debuffer attack-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=92" target="_blank"><img src="assets/images/Asta.png" class="img img-fluid"></a>
              <p class="name sr-only">Asta</p>
            </div>

            <div class="gallery_product filter heart dps-class 1990 pvp-exclusive ninja teacher elite extreme-lead heart-lead critical-chance-lead stat-booster defence-booster hp-booster cooldown-reducer single-hitter single-target-single-hitter ignore-defence paralyzer debuffer attack-reducer sealer skill-sealer critical-chance-booster hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=93" target="_blank"><img src="assets/images/Kakashi_Hatake.png" class="img img-fluid"></a>
              <p class="name sr-only">Kakashi Hatake</p>
            </div>

            <div class="gallery_product filter physical dps-class 2000 pvp-exclusive royal tsun alien large-lead characteristics-lead royal-lead defence-lead stat-booster defence-booster characteristics-booster nature-booster attack-booster royal-booster single-hitter support-target-single-hitter stunner healer self-healer characteristics-healer royal-healer hit-increaser counter">
              <a href="http://originalcontenthd.com/charpage.php?char=94" target="_blank"><img src="assets/images/Nana.png" class="img img-fluid"></a>
              <p class="name sr-only">Nana</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1980 f2p hand-to-hand-combat weak prodigy large-lead strength-lead heart-lead attack-lead stat-booster attack-booster characteristics-booster single-hitter single-target-single-hitter blinder  multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=95" target="_blank"><img src="assets/images/Son_Gohan.png" class="img img-fluid"></a>
              <p class="name sr-only">Son Gohan</p>
            </div>

            <div class="gallery_product filter heart all-rounder-class 1980 limited-gacha hand-to-hand-combat pure fighting-spirit protagonist large-lead strength-lead heart-lead attack-lead stat-booster attack-booster defence-booster single-hitter single-target-single-hitter main-target-single-hitter debuffer defence-reducer rollback-cooldown support-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=96" target="_blank"><img src="assets/images/Son_Goku_Adult.png" class="img img-fluid"></a>
              <p class="name sr-only">Son Goku Adult</p>
            </div>

            <div class="gallery_product filter heart all-rounder-class 1980 limited-gacha hand-to-hand-combat pure fighting-spirit protagonist large-lead strength-lead heart-lead technique-lead attack-lead stat-booster attack-booster defence-booster single-hitter single-target-single-hitter main-target-single-hitter debuffer defence-reducer rollback-cooldown support-target-single-hitter all-single-hitter speed-booster critical-chance-booster hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=97" target="_blank"><img src="assets/images/Jump_Adult_Goku.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Son Goku Adult</p>
            </div>

            <div class="gallery_product filter heart support-class 2000 gacha royal alien sly extreme-lead heart-lead hp-lead stat-booster defence-booster characteristics-booster fighting-spirit-booster damage-nullifier hp-booster  single-hitter main-target-single-hitter healer characteristics-healer fighting-spirit-healer ultimate-damage-reducer damage-reducer debuff-remover eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=98" target="_blank"><img src="assets/images/Momo.png" class="img img-fluid"></a>
              <p class="name sr-only">Momo</p>
            </div>

            <div class="gallery_product filter intelligence support-class 2000 gacha student hero glasses extreme-lead intelligence-lead critical-chance-lead stat-booster attack-booster against-alien-booster defence-booster type-booster intelligence-booster debuff-preventer damage-reducer sealer ultimate-sealer enemy-buff-negator debuffer attack-reducer debuff-remover critical-chance-booster speed-booster eot-damager bleed">
              <a href="http://originalcontenthd.com/charpage.php?char=99" target="_blank"><img src="assets/images/Kazuyoshi_Usui.png" class="img img-fluid"></a>
              <p class="name sr-only">Kazuyoshi Usui</p>
            </div>

            <div class="gallery_product filter physical tank-class 2010 gacha yokai heroine natural airhead flight extreme-lead physical-lead defence-lead stat-booster defence-booster against-defence-booster against-technique-booster critical-chance-booster type-booster physical-booster single-hitter single-target-single-hitter blocker debuffer attack-reducer damage-nullifier healer main-healer eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=100" target="_blank"><img src="assets/images/Yunohana_Yuuna.png" class="img img-fluid"></a>
              <p class="name sr-only">Yunohana Yuuna</p>
            </div>

            <div class="gallery_product filter strength dps-class <1970 pvp-exclusive athlete hard-worker hot-blooded protagonist large-lead physical-lead strength-lead attack-lead characteristics-booster single-hitter single-target-single-hitter rollback-cooldown sealer ultimate-sealer stunner ignore-defence">
              <a href="http://originalcontenthd.com/charpage.php?char=101" target="_blank"><img src="assets/images/Ryuuji_Takane.png" class="img img-fluid"></a>
              <p class="name sr-only">Ryuuji Takane</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1980 gacha student delinquent protagonist extreme-lead strength-lead critical-chance-lead debuff-preventer cooldown-reducer stat-booster attack-booster multi-hitter single-target-multi-hitter ignore-defence hit-increaser main-target-multi-hitter single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=102" target="_blank"><img src="assets/images/Jotaro_Kujo.png" class="img img-fluid"></a>
              <p class="name sr-only">Jotaro Kujo</p>
            </div>

            <div class="gallery_product filter agile dps-class 2010 gacha student hard-worker extreme-lead physical-lead attack-lead stat-booster attack-booster type-booster physical-booster damage-booster critical-chance-booster single-hitter single-target-single-hitter immobilizer stunner rollback-cooldown against-attack-booster against-heart-booster ignore-defence debuffer attack-reducer damage-nullifier">
              <a href="http://originalcontenthd.com/charpage.php?char=103" target="_blank"><img src="assets/images/Nagisa_Shiota.png" class="img img-fluid"></a>
              <p class="name sr-only">Nagisa Shiota</p>
            </div>

            <div class="gallery_product filter physical dps-class 2000 limited-gacha student hand-to-hand-combat fire protagonist large-lead strength-lead physical-lead attack-lead stat-booster defence-booster type-booster physical-booster damage-booster single-hitter single-target-single-hitter critical-chance-booster attack-booster hit-increaser burner eot-damager debuffer attack-reducer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=104" target="_blank"><img src="assets/images/Sawada_Tsuna.png" class="img img-fluid"></a>
              <p class="name sr-only">Sawada Tsuna</p>
            </div>

            <div class="gallery_product filter physical dps-class 2000 limited-gacha student hand-to-hand-combat fire protagonist large-lead strength-lead technique-lead physical-lead attack-lead stat-booster defence-booster type-booster physical-booster damage-booster against-heart-booster single-hitter main-target-single-hitter freezer immobilizer critical-chance-booster attack-booster hit-increaser burner eot-damager debuffer attack-reducer defence-reducer debuff-preventer counter">
              <a href="http://originalcontenthd.com/charpage.php?char=105" target="_blank"><img src="assets/images/Jump_Sawada_Tsuna.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Sawada Tsuna</p>
            </div>

            <div class="gallery_product filter physical all-rounder-class 2000 f2p student delinquent large-lead agile-lead physical-lead attack-lead stat-booster attack-booster type-booster physical-booster damage-booster against-pro-booster cooldown-reducer single-hitter main-target-single-hitter burner eot-damager damage-reducer multi-hitter single-target-multi-hitter single-target-single-hitter damage-nullifier">
              <a href="http://originalcontenthd.com/charpage.php?char=106" target="_blank"><img src="assets/images/Gokudera_Hayato.png" class="img img-fluid"></a>
              <p class="name sr-only">Gokudera Hayato</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 1990 f2p student athlete hot-blooded large-lead strength-lead technique-lead attack-lead stat-booster critical-chance-booster characteristics-booster attack-booster multi-hitter single-target-multi-hitter cooldown-reducer defence-booster counter hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=107" target="_blank"><img src="assets/images/Mitsui_Hisashi.png" class="img img-fluid"></a>
              <p class="name sr-only">Mistui Hisashi</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1990 gacha student athlete superhuman-strength hot-blooded manliness large-lead strength-lead technique-lead attack-lead debuff-preventer stat-booster defence-booster type-booster strength-booster damage-booster  single-hitter single-target-single-hitter healer self-healer attack-booster damage-nullifier cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=108" target="_blank"><img src="assets/images/Akagi_Takenori.png" class="img img-fluid"></a>
              <p class="name sr-only">Akagi Takenori</p>
            </div>

            <div class="gallery_product filter physical tank-class 1980 gacha hand-to-hand-combat superhuman rival extreme-lead physical-lead defence-lead stat-booster hp-booster type-booster physical-booster debuff-preventer stun-preventer defence-booster against-defence-booster against-fighting-spirit-booster single-hitter single-target-single-hitter debuffer defence-reducer against-heart-debuffer sealer ultimate-sealer stunner damage-reducer rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=110" target="_blank"><img src="assets/images/Shin.png" class="img img-fluid"></a>
              <p class="name sr-only">Shin</p>
            </div>

            <div class="gallery_product filter strength dps-class 2000 gacha hero student superhuman-strength hand-to-hand-combat extreme-lead strength-lead critical-chance-lead stat-booster critical-chance-booster damage-booster against-student-booster defence-booster single-hitter support-target-single-hitter immobilizer stunner healer self-healer counter attack-booster main-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=109" target="_blank"><img src="assets/images/Hime_Onizuka.png" class="img img-fluid"></a>
              <p class="name sr-only">Hime Onizuka</p>
            </div>

            <div class="gallery_product filter strength dps-class 1990 limited-gacha student athlete protagonist hot-blooded genius delinquent large-lead strength-lead technique-lead attack-lead type-booster strength-booster stat-booster hit-increaser counter attack-booster single-hitter main-target-single-hitter single-target-single-hitter debuffer damage-reducer attack-reducer rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=111" target="_blank"><img src="assets/images/Sakuragi_Hanamichi.png" class="img img-fluid"></a>
              <p class="name sr-only">Sakuragi Hanamichi</p>
            </div>

            <div class="gallery_product filter strength dps-class 1990 limited-gacha student athlete protagonist hot-blooded genius delinquent extreme-lead strength-lead technique-lead attack-lead type-booster strength-booster stat-booster hit-increaser counter attack-booster single-hitter main-target-single-hitter ignore-defence single-target-single-hitter debuffer damage-reducer attack-reducer rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=112" target="_blank"><img src="assets/images/Jump_Sakuragi_Hanamichi.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Sakuragi Hanamichi</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 1990 f2p athlete hot-blooded manliness student extreme-lead agile-lead attack-lead ultimate-damage-booster characteristics-booster stat-booster attack-booster type-booster agile-booster critical-chance-booster single-hitter support-target-single-hitter rollback-cooldown hit-increaser speed-booster damage-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=113" target="_blank"><img src="assets/images/Ryota_Miyagi.png" class="img img-fluid"></a>
              <p class="name sr-only">Ryota Miyagi</p>
            </div>

            <div class="gallery_product filter physical dps-class 1980 pvp-exclusive master student protagonist swordsman extreme-lead physical-lead attack-lead stat-booster attack-booster critical-chance-booster speed-booster type-booster physical-booster multi-hitter single-target-multi-hitter paralyzer single-hitter single-target-single-hitter defence-booster main-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=114" target="_blank"><img src="assets/images/Momotaro_Tsurugi.png" class="img img-fluid"></a>
              <p class="name sr-only">Momotaro Tsurugi</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 2010 pvp-exclusive yokai teacher extreme-lead agile-lead attack-lead stat-booster hit-increaser damage-nullifier damage-booster against-damage-booster against-master-booster single-hitter main-target-single-hitter debuffer defence-reducer against-strength-booster multi-hitter single-target-multi-hitter debuff-remover attack-booster defence-booster against-defence-booster against-student-booster healer self-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=115" target="_blank"><img src="assets/images/Koro_Sensei.png" class="img img-fluid"></a>
              <p class="name sr-only">Koro Sensei</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 2000 gacha student master swordsman extreme-lead agile-lead hp-lead stat-booster hp-booster characteristics-booster master-booster  attack-booster against-strength-booster debuff-preventer ultimate-seal-preventer single-hitter single-target-single-hitter ignore-defence main-target-single-hitter debuffer attack-reducer damage-nullifier defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=116" target="_blank"><img src="assets/images/Yamamoto_Takeshi.png" class="img img-fluid"></a>
              <p class="name sr-only">Yamamoto Takeshi</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 2000 gacha student protagonist hero genius large-lead strength-lead technique-lead intelligence-lead hp-lead stat-booster attack-booster against-evil-booster hp-booster series-booster sket-dance-booster cooldown-reducer defence-booster hit-increaser critical-chance-booster single-hitter single-target-single-hitter ignore-defence immobilizer stunner ultimate-damage-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=117" target="_blank"><img src="assets/images/Bossun.png" class="img img-fluid"></a>
              <p class="name sr-only">Bossun</p>
            </div>

            <div class="gallery_product filter agile support-class 1990 limited-gacha student natural protagonist large-lead agile-lead strength-lead hp-lead stat-booster defence-booster type-booster agile-booster damage-reducer multi-hitter single-target-multi-hitter rollback-cooldown critical-chance-booster hit-increaser attack-booster healer all-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=118" target="_blank"><img src="assets/images/Giorno_Giovanna.png" class="img img-fluid"></a>
              <p class="name sr-only">Giorno Giovanna</p>
            </div>

            <div class="gallery_product filter agile support-class 1990 limited-gacha student natural protagonist large-lead agile-lead strength-lead physical-lead hp-lead stat-booster defence-booster type-booster agile-booster damage-reducer multi-hitter all-multi-hitter rollback-cooldown critical-chance-booster hit-increaser attack-booster healer all-healer damage-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=119" target="_blank"><img src="assets/images/Jump_Giorno_Giovanna.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Giorno Giovanna</p>
            </div>

            <div class="gallery_product filter agile dps-class 1990 f2p weapon fighting-spirit flight extreme-lead agile-lead attack-lead stat-booster attack-booster multi-hitter main-target-multi-hitter ignore-defence critical-chance-booster single-hitter all-single-hitter single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=120" target="_blank"><img src="assets/images/Narancia_Ghirga.png" class="img img-fluid"></a>
              <p class="name sr-only">Narancia Ghirga</p>
            </div>

            <div class="gallery_product filter strength dps-class 1990 f2p weak persistent hot-blooded protagonist extreme-lead strength-lead attack-lead stat-booster speed-booster attack-booster defence-booster single-hitter single-target-single-hitter ignore-defence main-target-single-hitter hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=121" target="_blank"><img src="assets/images/Makibao.png" class="img img-fluid"></a>
              <p class="name sr-only">Makibao</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 2000 pvp-exclusive swordsman divine order large-lead agile-lead technique-lead attack-lead debuff-preventer stat-booster defence-booster attack-booster multi-hitter single-target-multi-hitter immobilizer stunner single-target-single-hitter debuffer attack-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=122" target="_blank"><img src="assets/images/Byakuya_Kuchiki.png" class="img img-fluid"></a>
              <p class="name sr-only">Byakuya Kuchiki</p>
            </div>

            <div class="gallery_product filter physical all-rounder-class 1980 f2p athlete money heroine extreme-lead physical-lead attack-lead stat-booster attack-booster defence-booster cooldown-reducer characteristics-booster single-hitter main-target-single-hitter charmer  debuffer attack-reducer single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=123" target="_blank"><img src="assets/images/Kawai_Iyona.png" class="img img-fluid"></a>
              <p class="name sr-only">Kawai Iyona</p>
            </div>

            <div class="gallery_product filter strength dps-class 2000 f2p student heroine tsundere order extreme-lead strength-lead attack-lead stat-booster attack-booster characteristics-booster heroine-booster tsundere-booster cooldown-reducer single-hitter single-target-single-hitter ignore-defence fear rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=124" target="_blank"><img src="assets/images/Yui_Kotegawa.png" class="img img-fluid"></a>
              <p class="name sr-only">Yui Kotegawa</p>
            </div>

            <div class="gallery_product filter technique support-class 1990 f2p heroine genius large-lead technique-lead physical-lead hp-lead stat-booster attack-booster type-booster technique-booster hp-booster cooldown-reducer characteristics-booster critical-chance-booster damage-booster single-hitter main-target-single-hitter ultimate-damage-booster skill-damage-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=125" target="_blank"><img src="assets/images/Itsuki_Akiba.png" class="img img-fluid"></a>
              <p class="name sr-only">Itsuki Akiba</p>
            </div>

            <div class="gallery_product filter technique support-class 1990 f2p heroine genius large-lead technique-lead physical-lead strength-lead hp-lead stat-booster attack-booster type-booster technique-booster hp-booster cooldown-reducer characteristics-booster critical-chance-booster damage-booster single-hitter main-target-single-hitter ultimate-damage-booster skill-damage-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=126" target="_blank"><img src="assets/images/Jump_Itsuki_Akiba.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Itsuki Akiba</p>
            </div>

            <div class="gallery_product filter agile support-class 2000 f2p heroine student large-lead heart-lead agile-lead hp-lead stat-booster defence-booster against-type-booster against-strength-booster speed-booster type-booster agile-booster characteristics-booster heroine-booster single-hitter single-target-single-hitter debuff-remover healer main-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=127" target="_blank"><img src="assets/images/Nishino_Tsukasa.png" class="img img-fluid"></a>
              <p class="name sr-only">Nishino Tsukasa</p>
            </div>

            <div class="gallery_product filter agile support-class 2000 f2p heroine student large-lead heart-lead intelligence-lead agile-lead hp-lead stat-booster defence-booster against-type-booster against-strength-booster speed-booster type-booster agile-booster characteristics-booster heroine-booster damage-nullifier single-hitter single-target-single-hitter debuff-remover healer main-healer cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=128" target="_blank"><img src="assets/images/Jump_Nishino_Tsukasa.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Nishino Tsukasa</p>
            </div>

            <div class="gallery_product filter heart healer-class 1990 limited-gacha heroine student large-lead heart-lead physical-lead defence-lead stat-booster hp-booster characteristics-booster heal-booster ultimate-heal-booster debuff-preventer healer all-healer charmer ultimate-damage-booster class-booster main-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=129" target="_blank"><img src="assets/images/Iori_Yoshizuki.png" class="img img-fluid"></a>
              <p class="name sr-only">Iori Yoshizuki</p>
            </div>

            <div class="gallery_product filter heart healer-class 1990 limited-gacha heroine student large-lead heart-lead physical-lead technique-lead defence-lead stat-booster hp-booster characteristics-booster heal-booster ultimate-heal-booster debuff-preventer healer all-healer debuff-remover charmer ultimate-damage-booster class-booster main-healer debuff-preventer">
              <a href="http://originalcontenthd.com/charpage.php?char=130" target="_blank"><img src="assets/images/Jump_Iori_Yoshizuki.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Iori Yoshizuki</p>
            </div>

            <div class="gallery_product filter intelligence-lead support-class 2000 limited-gacha student heroine hard-worker large-lead intelligence-lead agile-lead hp-lead stat-booster defence-booster hp-booster characteristics-booster heroine-booster against-protagonist-booster against-characteristics-booster damage-reducer debuffer defence-reducer skill-damage-reducer cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=131" target="_blank"><img src="assets/images/Aya_Toujou.png" class="img img-fluid"></a>
              <p class="name sr-only">Aya Toujou</p>
            </div>

            <div class="gallery_product filter intelligence-lead support-class 2000 limited-gacha student heroine hard-worker large-lead strength-lead intelligence-lead agile-lead hp-lead stat-booster defence-booster hp-booster characteristics-booster heroine-booster against-protagonist-booster against-characteristics-booster damage-reducer rollback-cooldown debuffer defence-reducer skill-damage-reducer cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=132" target="_blank"><img src="assets/images/Jump_Aya_Toujou.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Aya Toujou</p>
            </div>

            <div class="gallery_product filter intelligence all-rounder-class 1990 raid student rival large-lead intelligence-lead defence-lead stat-booster attack-booster defence-booster ultimate-damage-booster damage-booster against-damage-booster single-hitter all-single-hitter single-target-single-hitter damage-nullifier debuffer attack-reducer rollback-cooldown poisoner">
              <a href="http://originalcontenthd.com/charpage.php?char=133" target="_blank"><img src="assets/images/Seto_Kaiba.png" class="img img-fluid"></a>
              <p class="name sr-only">Seto Kaiba</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 1990 pvp-exclusive hand-to-hand-combat cooking glasses extreme-lead agile-lead hp-lead stat-booster attack-booster defence-booster characteristics-booster hp-booster series-booster multi-hitter single-target-multi-hitter healer all-healer damage-nullifier blocker counter single-target-single-hitter ignore-defence">
              <a href="http://originalcontenthd.com/charpage.php?char=134" target="_blank"><img src="assets/images/Sanji.png" class="img img-fluid"></a>
              <p class="name sr-only">Sanji</p>
            </div>

            <div class="gallery_product filter physical dps-class 1980 gacha artificial protagonist glasses extreme-lead physical-lead attack-lead stat-booster attack-booster defence-booster debuff-preventer single-hitter main-target-single-hitter stunner healer self-healer single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=135" target="_blank"><img src="assets/images/Arale.png" class="img img-fluid"></a>
              <p class="name sr-only">Arale</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1990 gacha fire natural extreme-lead strength-lead attack-lead stat-booster critical-chance-booster cooldown-reducer  characteristics-booster fire-booster damage-booster single-hitter all-single-hitter debuffer defence-reducer damage-nullifier rollback-cooldown attack-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=136" target="_blank"><img src="assets/images/Ace.png" class="img img-fluid"></a>
              <p class="name sr-only">Ace</p>
            </div>

            <div class="gallery_product filter technique dps-class 1980 gacha rival hand-to-hand-combat evil extreme-lead technique-lead attack-lead debuff-preventer stat-booster attack-booster single-hitter all-single-hitter single-target-single-hitter healer self-healer rollback-cooldown random-target-single-hitter support-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=137" target="_blank"><img src="assets/images/Piccolo.png" class="img img-fluid"></a>
              <p class="name sr-only">Picollo</p>
            </div>

            <div class="gallery_product filter heart support-class 1990 limited-gacha royal pure large-lead heart-lead agile-lead hp-lead stat-booster speed-booster type-booster heart-booster series-booster hp-booster ultimate-damage-booster characteristics-booster single-hitter main-target-single-hitter damage-nullifier eot-healer self-eot-healer single-target-single-hitter rollback-cooldown debuffer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=138" target="_blank"><img src="assets/images/Vivi.png" class="img img-fluid"></a>
              <p class="name sr-only">Nefertari Vivi</p>
            </div>

            <div class="gallery_product filter heart support-class 1990 limited-gacha royal pure large-lead heart-lead agile-lead physical-lead hp-lead stat-booster speed-booster type-booster heart-booster series-booster hp-booster ultimate-damage-booster characteristics-booster damage-booster damage-nullifier eot-healer self-eot-healer single-target-single-hitter rollback-cooldown debuffer defence-reducer debuff-preventer stat-reduce-preventer">
              <a href="http://originalcontenthd.com/charpage.php?char=139" target="_blank"><img src="assets/images/Jump_Vivi.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Nefertari Vivi</p>
            </div>

            <div class="gallery_product filter physical dps-class 1990 f2p superhuman-strength hand-to-hand-combat adventure persistent protagonist large-lead heart-lead physical-lead attack-lead stat-booster attack-booster skill-damage-booster single-hitter main-target-single-hitter ultimate-damage-booster debuffer defence-reducer single-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=140" target="_blank"><img src="assets/images/Luffy2.png" class="img img-fluid"></a>
              <p class="name sr-only">Monkey D Luffy</p>
            </div>

            <div class="gallery_product filter physical dps-class 1990 f2p superhuman-strength hand-to-hand-combat adventure persistent protagonist water large-lead agile-lead heart-lead physical-lead attack-lead stat-booster attack-booster skill-damage-booster single-hitter all-single-hitter ultimate-damage-booster debuffer defence-reducer single-target-single-hitter critical-chance-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=141" target="_blank"><img src="assets/images/Jump_Luffy2.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Monkey D luffy</p>
            </div>

            <div class="gallery_product filter physical support-class 1980 f2p adventure heroine genius extreme-lead physical-lead attack-lead stat-booster hp-booster characteristics-booster genius-booster attack-booster adventure-booster type-booster physical-booster single-hitter single-target-single-hitter rollback-cooldown multi-hitter main-target-multi-hitter random-target-multi-hitter charmer">
              <a href="http://originalcontenthd.com/charpage.php?char=142" target="_blank"><img src="assets/images/Bulma_Briefs.png" class="img img-fluid"></a>
              <p class="name sr-only">Bulma Briefs</p>
            </div>

            <div class="gallery_product filter heart dps-class 1990 pvp-exclusive protagonist student yokai extreme-lead heart-lead attack-lead stat-booster against-master-booster attack-booster critical-chance-booster against-technique-booster single-hitter single-target-single-hitter against-damage-booster counter">
              <a href="http://originalcontenthd.com/charpage.php?char=143" target="_blank"><img src="assets/images/Hikaru.png" class="img img-fluid"></a>
              <p class="name sr-only">Hikaru</p>
            </div>

            <div class="gallery_product filter technique dps-class 1990 f2p swordsman hot-blooded extreme-lead technique-lead attack-lead stat-booster attack-booster speed-booster characteristics-booster hot-blooded-booster against-attack-booster against-physical-booster single-hitter single-target-single-hitter main-target-single-hitter multi-hitter single-target-multi-hitter damage-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=144" target="_blank"><img src="assets/images/Kou_Tenka.png" class="img img-fluid"></a>
              <p class="name sr-only">Kou Tenka</p>
            </div>

            <div class="gallery_product filter physical dps-class 1990 limited-gacha artificial fighting-spirit weapon extreme-lead physical-lead attack-lead stat-booster hit-increaser fighting-spirit-booster characteristics-booster attack-booster characteristics-booster artifical-booster debuff-preventer single-hitter main-target-single-hitter single-target-single-hitter eot-damager burner all-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=145" target="_blank"><img src="assets/images/Li_Nataku.png" class="img img-fluid"></a>
              <p class="name sr-only">Li Nataku</p>
            </div>

            <div class="gallery_product filter physical dps-class 1990 limited-gacha artificial fighting-spirit weapon extreme-lead physical-lead heart-lead attack-lead stat-booster hit-increaser fighting-spirit-booster characteristics-booster attack-booster characteristics-booster artifical-booster debuff-preventer enemy-buff-negator single-hitter main-target-single-hitter single-target-single-hitter eot-damager burner all-single-hitter ultimate-damage-booster skill-damage-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=146" target="_blank"><img src="assets/images/Jump_Li_Nataku.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Li Nataku</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class <1970 gacha hero protagonist adventure extreme-lead agile-lead attack-lead stat-booster attack-booster type-booster agile-booster damage-booster against-alien-booster defence-booster heroine-booster characteristics-booster single-hitter main-target-single-hitter ignore-defence rollback-cooldown single-target-single-hitter ultimate-damage-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=147" target="_blank"><img src="assets/images/Cobra.png" class="img img-fluid"></a>
              <p class="name sr-only">Cobra</p>
            </div>

            <div class="gallery_product filter heart dps-class 2000 gacha divine protagonist extreme-lead heart-lead attack-lead stat-booster attack-booster against-evil-booster against-characteristics-booster critical-chance-booster multi-hitter main-target-multi-hitter random-target-multi-hitter ultimate-damage-booster single-hitter main-target-single-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=148" target="_blank"><img src="assets/images/Allen_Walker.png" class="img img-fluid"></a>
              <p class="name sr-only">Allen Walker</p>
            </div>

            <div class="gallery_product filter heart support-class 1990 f2p artist adventure trouble-maker sly protagonist extreme-lead heart-lead technique-lead critical-chance-lead stat-booster speed-booster attack-booster type-booster heart-booster defence-booster single-hitter all-single-hitter damage-reducer eot-damager bleed single-target-single-hitter sealer skill-sealer debuffer attack-reducer blinder speed-booster cooldown-reducer debuff-remover rollback-cooldown">
              <a href="http://originalcontenthd.com/charpage.php?char=149" target="_blank"><img src="assets/images/Jump_Taikobo.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Taikobo</p>
            </div>

            <div class="gallery_product filter strength all-rounder-class 1980 raid royal rival alien hand-to-hand-combat extreme-lead strength-lead attack-lead stat-booster attack-booster characteristics-booster rival-booster ultimate-damage-booster damage-reducer protagonist-damage-reducer single-hitter single-target-single-hitter enemy-buff-negator support-target-single-hitter rollback-cooldown rollback-protagonist-cooldown debuff-remover healer self-healer damage-booster against-protagonist-booster against-characteristics-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=150" target="_blank"><img src="assets/images/Vegeta.png" class="img img-fluid"></a>
              <p class="name sr-only">Vegeta</p>
            </div>

            <div class="gallery_product filter agile dps-class 1990 f2p elite pro genius cool-headed extreme-lead agile-lead attack-lead stat-booster speed-booster type-booster agile-booster hit-increaser attack-booster single-hitter single-target-single-hitter ignore-defence rollback-cooldown critical-chance-booster multi-hitter single-target-multi-hitter">
              <a href="http://originalcontenthd.com/charpage.php?char=151" target="_blank"><img src="assets/images/Killua.png" class="img img-fluid"></a>
              <p class="name sr-only">Killua Zoldyck</p>
            </div>

            <div class="gallery_product filter intelligence support-class 1990 pvp-exclusive artist large-lead intelligence-lead heart-lead hp-lead ultimate-damage-booster characteristics-booster artist-booster damage-booster support-class-booster stat-booster attack-booster single-hitter main-target-single-hitter ignore-defence damage-reducer damage-nullifier defence-booster single-target-single-hitter coma">
              <a href="http://originalcontenthd.com/charpage.php?char=152" target="_blank"><img src="assets/images/Fugen.png" class="img img-fluid"></a>
              <p class="name sr-only">Fugen Shinjin</p>
            </div>

            <div class="gallery_product filter intelligence all-rounder-class 1990 gacha heroine ethereal extreme-lead intelligence-lead hp-lead fear-immune heal-booster damage-booster characteristics-booster yokai-booster single-hitter main-target-single-hitter to-enemy-damage-booster immobilizer damage-nullifier eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=153" target="_blank"><img src="assets/images/Misery.png" class="img img-fluid"></a>
              <p class="name sr-only">Misery Stalker</p>
            </div>

            <div class="gallery_product filter technique all-rounder-class 1980 gacha gunner fighting-spirit extreme-lead technique-lead attack-lead stat-booster critical-chance-booster type-booster technique-booster attack-booster against-physical-booster multi-hitter random-target-multi-hitter main-target-multi-hitter damage-booster hit-increaser">
              <a href="http://originalcontenthd.com/charpage.php?char=154" target="_blank"><img src="assets/images/Guido_Mista.png" class="img img-fluid"></a>
              <p class="name sr-only">Guido Mista</p>
            </div>

            <div class="gallery_product filter heart dps-class 1980 limited-gacha swordsman protagonist dragon large-lead technique-lead heart-lead attack-lead cooldown-reducer stat-booster attack-booster characteristics-booster protagonist-booster type-booster heart-booster single-hitter single-target-single-hitter critical-chance-booster damage-booster against-technique-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=155" target="_blank"><img src="assets/images/Dai.png" class="img img-fluid"></a>
              <p class="name sr-only">Dai</p>
            </div>

            <div class="gallery_product filter heart dps-class 1980 limited-gacha swordsman protagonist dragon large-lead technique-lead heart-lead agile-lead attack-lead cooldown-reducer stat-booster attack-booster characteristics-booster protagonist-booster type-booster heart-booster single-hitter single-target-single-hitter critical-chance-booster damage-booster against-technique-booster eot-healer self-eot-healer">
              <a href="http://originalcontenthd.com/charpage.php?char=156" target="_blank"><img src="assets/images/Jump_Dai.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Dai</p>
            </div>

            <div class="gallery_product filter technique support-class 1980 f2p artist weak extreme-lead technique-lead attack-lead stat-booster attack-booster characteristics-booster weak-booster damage-booster artist-booster cooldown-reducer single-hitter main-target-single-hitter rollback-cooldown damage-nullifier">
              <a href="http://originalcontenthd.com/charpage.php?char=157" target="_blank"><img src="assets/images/Pop.png" class="img img-fluid"></a>
              <p class="name sr-only">Pop</p>
            </div>

            <div class="gallery_product filter intelligence support-class 2000 limited-gacha student artist weak large-lead intelligence-lead physical-lead defence-lead stat-booster attack-booster type-booster intelligence-booster defence-booster characteristics-booster artist-booster debuff-preventer artist-debuff-preventer single-hitter all-single-hitter damage-nullifier damage-reducer agile-damage-reducer ultimate-damage-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=158" target="_blank"><img src="assets/images/Chrome_Dokuro.png" class="img img-fluid"></a>
              <p class="name sr-only">Chrome Dokuro</p>
            </div>

            <div class="gallery_product filter intelligence support-class 2000 limited-gacha student artist weak extreme-lead intelligence-lead physical-lead defence-lead stat-booster attack-booster type-booster intelligence-booster defence-booster characteristics-booster artist-booster debuff-preventer artist-debuff-preventer multi-hitter all-multi-hitter ignore-defence damage-nullifier damage-reducer agile-damage-reducer ultimate-damage-booster cooldown-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=159" target="_blank"><img src="assets/images/Jump_Chrome.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Chrome Dokuro</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 2000 limited-gacha student heroine divine swordsman large-lead agile-lead technique-lead attack-lead stat-booster attack-booster type-booster agile-booster critical-chance-booster ultimate-damage-booster characteristics-booster divine-booster single-hitter main-target-single-hitter single-target-single-hitter rollback-cooldown paralyzer immobilizer">
              <a href="http://originalcontenthd.com/charpage.php?char=160" target="_blank"><img src="assets/images/Rukia_Kuchiki.png" class="img img-fluid"></a>
              <p class="name sr-only">Rukia Kuchiki</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 2000 limited-gacha student heroine divine swordsman extreme-lead agile-lead technique-lead attack-lead stat-booster attack-booster type-booster agile-booster critical-chance-booster ultimate-damage-booster characteristics-booster divine-booster single-hitter all-single-hitter freezer single-target-single-hitter rollback-cooldown paralyzer immobilizer damage-booster against-strength-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=161" target="_blank"><img src="assets/images/Jump_Rukia.png" class="img img-fluid"></a>
              <p class="name sr-only">Jump Rukia Kuchiki</p>
            </div>

            <div class="gallery_product filter agile all-rounder-class 1980 pvp-exclusive gunner superhuman-strength extreme-lead agile-lead hp-lead cooldown-reducer agile-cooldown-reducer stat-booster attack-booster type-booster agile-booster damage-reducer from-strength-damage-reducer damage-booster against-strength-booster single-hitter single-target-single-hitter main-target-single-hitter healer main-healer stunner immobilizer defence-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=162" target="_blank"><img src="assets/images/Maam.png" class="img img-fluid"></a>
              <p class="name sr-only">Maam</p>
            </div>

            <div class="gallery_product filter heart support-class 2010 f2p student heroine natural cooking extreme-lead heart-lead hp-lead stat-booster attack-booster type-booster heart-booster characteristics-booster protagonist-booster heroine-booster single-hitter main-target-single-hitter stunner immobilizer debuff-preventer cooldown-reducer eot-healer self-eot-healer damage-reducer to-heart-damage-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=163" target="_blank"><img src="assets/images/Kosaki_Onodera.png" class="img img-fluid"></a>
              <p class="name sr-only">Kosaki Onodera</p>
            </div>

            <div class="gallery_product filter technique support-class 1980 f2p artist ethereal trouble-maker pure protagonist extreme-lead technique-lead defence-lead ultimate-damage-booster type-booster technique-booster stat-booster attack-booster against-characteristics-booster against-heroine-booster single-hitter all-single-hitter single-target-single-hitter healer main-healer damage-booster against-type-booster against-technique-booster">
              <a href="http://originalcontenthd.com/charpage.php?char=164" target="_blank"><img src="assets/images/Taruruuto.png" class="img img-fluid"></a>
              <p class="name sr-only">Taruruuto-kun</p>
            </div>

            <div class="gallery_product filter physical all-rounder-class 1980 raid avenger swordsman extreme-lead physical-lead defence-lead anti-stun stat-booster attack-booster ultimate-damage-booster against-heart-booster damage-booster single-hitter all-single-hitter single-target-single-hitter sealer skill-sealer main-target-single-hitter rollback-cooldown rollback-heart-cooldown blocker">
              <a href="http://originalcontenthd.com/charpage.php?char=165" target="_blank"><img src="assets/images/Hyunckel.png" class="img img-fluid"></a>
              <p class="name sr-only">Hyunckel</p>
            </div>

            <div class="gallery_product filter intelligence support-class 2010 pvp-exclusive student heroine tsundere cooking extreme-lead intelligence-lead hp-lead heal-booster rollback-cooldown debuffer defence-reducer">
              <a href="http://originalcontenthd.com/charpage.php?char=166" target="_blank"><img src="assets/images/Erina_Nakiri.png" class="img img-fluid"></a>
              <p class="name sr-only">Erina Nakiri</p>
            </div>
            <?php
              $str = file_get_contents('characters.json');
              $json = json_decode($str, true);
              foreach ($json as $id => $character) : ?>
              <div class="gallery_product filter <?php
              echo $character['type']." ".$character['class']."-class ".$character['era']." ".$character['obtainable'];
              foreach ($character['characteristics'] as $characteristic) {
                echo " ".$characteristic;
              }
              foreach ($character['category'] as $category) {
                echo " ".$category;
              }?>">
              <a href="http://originalcontenthd.com/charpage.php?char=<?php echo $id ?>" target="_blank">
                <img src="<?php echo $character['image-path'] ?>" class="img img-fluid">
              </a>
              <p class="name sr-only"><?php echo $character['name'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <span class="float" onclick="openNav()">
      <i class="fa fa-plus my-float"></i>
    </span> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
    <script src="assets/js/sjoc-db.js" charset="utf-8"></script>
  </body>
</html>
