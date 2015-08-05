<?php session_start() ?>

<!DOCTYPE html>
<html>
<head lang="en">

    <meta charset="UTF-8">
    <title>Welcome to LoA!</title>

    <!-- External Libraries -->

    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Local Libraries -->

    <!-- My Custom Styles -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/navbar.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/main.css">


    <!-- Favicons for all devices -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/icons/favicon-128.png" sizes="128x128"/>
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="<?php $_SERVER['DOCUMENT_ROOT'] ?>/images/mstile-310x310.png"/>


    <style>

        /* Roster Table Styles */

        table.fixed {
            table-layout: fixed;
        }

        table.fixed tr {
            width: 60px
        }

        table.fixed td {
            overflow: hidden;
        }

        .rogue {
            background-color: #fff468;
        }

        .warlock {
            background-color: #9382c9;
        }

        .shaman {
            background-color: #2359ff;
        }

        .paladin {
            background-color: #f48cba;
        }

        .death-knight {
            background-color: #c41e3b;
        }

        .warrior {
            background-color: #c69b6d;
        }

        .monk {
            background-color: #00ffba;
        }

        .hunter {
            background-color: #aad372;
        }

        .priest {
            background-color: #f0ebe0;
        }

        .mage {
            background-color: #68ccef;
        }

        .druid {
            background-color: #ff7c0a;
        }

        .title {
            background-color: #737373;
        }

        .bordered,
        .bordered th,
        .bordered td {
            border: 2px solid #000000;
        }

    </style>
</head>

<body>

<!--MAIN CONTAINER-->
<div class="container-custom" id="navContainer">
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/js/initialize.js"></script>
</div>


<!--POSTS-->
<div class="container-main">

    <div class="well main-well">

        <h2> Core Assassins </h2>

        <h1> Tanks</h1>
        <table class="table fixed bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>

            <tr class="death-knight">
                <td>Winkshadow</td>
                <td>Death Knight</td>
                <td>Blood</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Winkshadow/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>

            <tr class="warrior">
                <td>Spartacoos</td>
                <td>Warrior</td>
                <td>Protection</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Spartacoos/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>

        </table>

        <h1> Healers</h1>
        <table class="table fixed table-outlined bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>

            <tr class="paladin">
                <td>Fool</td>
                <td>Paladin</td>
                <td>Holy</td>
                <td><a href="http://eu.battle.net/wow/en/character/kul-tiras/Fool/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>

            <tr class="priest">
                <td>Tulenjano</td>
                <td>Priest</td>
                <td>Discipline</td>
                <td><a href="http://eu.battle.net/wow/en/character/anachronos/Tulenjano/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>


            <tr class="paladin">
                <td>Eldruin</td>
                <td>Paladin</td>
                <td>Holy</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Eldruin/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>


        </table>

        <h1> Melee DPS</h1>
        <table class="table fixed bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>

            <tr class="warrior">
                <td>Karmad</td>
                <td>Warrior</td>
                <td>Fury</td>
                <td><a href="http://eu.battle.net/wow/en/character/anachronos/Karmad/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>


            <tr class="rogue">
                <td>Arganor</td>
                <td>Rogue</td>
                <td>Combat/Assass</td>
                <td><a href="http://eu.battle.net/wow/en/character/Alonsus/Arganor/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>
            </tr>

            <!-- <tr class="rogue">
                <td>Nova</td>
                <td>Rogue</td>
                <td>Combat/Assass</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/N%C3%B5va/"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>
            </tr> -->

            <tr class="druid">
                <td>Animalfuryz</td>
                <td>Druid</td>
                <td>Feral/Balance</td>
                <td><a href="http://eu.battle.net/wow/en/character/kul-tiras/Animalfuryz/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>


        </table>

        <h1> Ranged DPS</h1>
        <table class="table fixed bordered">

            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>


            <tr class="warlock">
                <td>Pasho</td>
                <td>Warlock</td>
                <td>Affliction</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Pasho/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>

            <tr class="shaman">
                <td>Elextria</td>
                <td>Shaman</td>
                <td>Elemental</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Elextria/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>

            <tr class="hunter">
                <td>Yoricka</td>
                <td>Hunter</td>
                <td>Marksmanship</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Y%C3%B2ricka/simplee"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>
            </tr>

            <tr class="hunter">
                <td>Twistedben</td>
                <td>Hunter</td>
                <td>Beast Mastery</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Twistedben/simple"><img
                            src="../images/icons/wowarmoryicon.png"
                            style="width: 20px; height: 20px;"></a></td>
            </tr>


            <tr class="mage">
                <td>Viagrajunkie</td>
                <td>Mage</td>
                <td>Arcane/Frost</td>
                <td><a href="http://eu.battle.net/wow/en/character/kul-tiras/Viagrajunkie/simple"><img
                            src="../images/icons/wowarmoryicon.png"
                            style="width: 20px; height: 20px;"></a></td>

            </tr>

        </table>

    </div>

    <div class="well main-well">
        <h2> Reserve Assassins</h2>
        <table class="table fixed bordered">

            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>

            <tr class="death-knight">
                <td>Mizir</td>
                <td>Death Knight</td>
                <td>Unholy</td>
                <td><a href="http://eu.battle.net/wow/en/character/alonsus/Mizir/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>
            </tr>


        </table>
    </div>


    <div class="well main-well">
        <h2> Current Trial Members</h2>

        <h1> Tanks</h1>
        <table class="table fixed bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>
        </table>

        <h1> Healers</h1>
        <table class="table fixed bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>


        </table>

        <h1> Melee DPS</h1>
        <table class="table fixed bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>
        </table>

        <h1> Ranged DPS</h1>
        <table class="table fixed bordered">
            <tr class="title">
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">Class</td>
                <td style="font-weight: bold;">Spec</td>
                <td style="font-weight: bold;">Armory</td>
            </tr>



            <!--  <tr class="mage">
                <td>Charmelina</td>
                <td>Mage</td>
                <td>Frost</td>
                <td><a href="http://eu.battle.net/wow/en/character/kul-tiras/Charmelina/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr>

            <tr class="monk">
                <td>Slendermanz</td>
                <td>Monk</td>
                <td>Windwalker</td>
                <td><a href="http://eu.battle.net/wow/en/character/anachronos/Slendermanz/simple"><img
                        src="../images/icons/wowarmoryicon.png"
                        style="width: 20px; height: 20px;"></a></td>

            </tr> -->


        </table>

    </div>
</div>


</body>
</html>