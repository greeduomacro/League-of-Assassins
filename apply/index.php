<?php session_start() ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to LoA!</title>

    <!-- JQuery -->
    <script src="../js/jquery/jquery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <!-- My Custom Styles -->
    <link rel="stylesheet" href="../css/navbar.css">

    <!-- Application Form Styles -->
    <link rel="stylesheet" href="../css/main.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/applyform.js"></script>

    <!-- Favicons for all devices -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/icons/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/icons/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/icons/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/icons/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../images/icons/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../images/icons/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../images/icons/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../images/icons/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="../images/icons/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="../images/icons/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="../images/icons/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="../images/icons/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="../images/icons/favicon-128.png" sizes="128x128"/>
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="../images/icons/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="../images/icons/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="../images/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="../images/icons/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="../images/icons/mstile-310x310.png"/>

</head>


<body>

<!--MAIN CONTAINER-->
<div class="container-custom" id="navContainer">
    <script src="../js/initialize.js"></script>
</div>

<div class="custom-container" style="padding-top: 10px">
    <div class="well main-well">
        <h1>Application Information</h1>

        <h2> League of Assassins are currently recruiting:</h2>

        <h3>Ranged DPS:</h3>
        <li style="color:red;font-weight:bold;">Hunters;</li>
        <li>Elemental Shamans;</li>
        <li style="color:red;font-weight:bold;">Balance Druids;</li>
        <li>Frost or Arcane Mage with Fire OS;</li>
        <li style="color:red;font-weight:bold;">Warlocks;</li>
        <li>Shadow Priest;</li>

        <h3>Melee DPS:</h3>
        <li>Enhancement Shamans;</li>
        <li>Windwalker Monks;</li>
        <li>Rogues;</li>

        <h3>Healers:</h3>
        <li>Restoration Druids;</li>
        <li>Restoration Shamans;</li>
        <li>Mistweaver Monks;</li>
        <br>

        <p><span style="color:red; font-weight:bold;">Bold, red classes and specs are high priority.</span></p>
        <br>

        <p>If you'd like to apply, please read the following and fill out the application below.
            For further information please contact us at <a
                href="mailto:contact@leagueofassassins.co.uk?Subject=Enquiry"
                target="_top">contact@leagueofassassins.co.uk.</a></p>

        <p> If your application is accepted you will be subjected to a two week trial with the rank of "Trial
            Assassin".
            If
            you pass this you will be accepted into either the core team or the reserve team depending on
            individual
            circumstances.
        </p><br>

        <p>

        </p></div>

    <div id="contact-form" class="clearfix">

        <?php
        //init variables
        $cf = array();
        $sr = false;

        if (isset($_SESSION['cf_returndata'])) {
            $cf = $_SESSION['cf_returndata'];
            $sr = true;
        }
        ?>

        <h1>
            <span style="text-align=center;">Application Form</span>
        </h1>

        <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
            <li id="info">There were some problems with your form submission:</li>
            <?php
            if (isset($cf['errors']) && count($cf['errors']) > 0) :
                foreach ($cf['errors'] as $error) :
                    ?>
                    <li><?php echo $error ?></li>
                <?php
                endforeach;
            endif;
            ?>
        </ul>
        <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your
            application!
            We
            will get back to you ASAP!</p>

        <form method="post" action="process.php">
            <label for="username">Character Name: <span class="required">*</span></label>
            <input type="text" id="username" name="username" value="" placeholder="Spinkyspank123"
                   required="required"/>

            <label for="email">Email Address: <span class="required">*</span></label>
            <input type="email" id="email" name="email" value="" placeholder="user@domain.com"
                   required="required"/>

            <label for="bnet">Battlenet ID:</label>
            <input id="bnet" name="bnet" value="" placeholder="user#1234"/>

            <label for="role">Role: <span class="required">*</span> </label>
            <select id="role" name="role" required="required">
                <option value="">Please Select a Role</option>
                <option value="Tank">Tank</option>
                <option value="Healer">Healer</option>
                <option value="MDPS">Melee DPS</option>
                <option value="RDPS">Ranged DPS</option>
            </select>

            <label for="class">Class: <span class="required">*</span> </label>
            <select id="class" name="class" required="required">
                <option value="">Please Select a Class</option>

            </select>

            <label for="spec">Spec: <span class="required">*</span> </label>
            <select id="spec" name="spec" required="required">
                <option value="">Please Select a Spec</option>
            </select>

            <label for="os">Off-Spec:</label>
            <select id="os" name="os">
                <option value="">None</option>
            </select>

            <label for="ilvl">Current Item Level: <span class="required">*</span></label>
            <input id="ilvl" name="ilvl" value="" placeholder="123" required="required"/>

            <label for="dps">Do you have any idea what sort of DPS you can pull in the most recent raid
                instance?</label>
            <input id="dps" name="dps" value=""
                   placeholder="30-45k or 'No idea' etc."/>

            <label for="availability">Availability: <span class="required">*</span></label>
            <input id="availability" name="availability" value="" required="required"
                   placeholder="M T W Th F Sat Sun"/>

            <label for="voice">Can you speak over Voice Comms (TS3)? <span class="required">*</span></label>
            <select id="voice" name="voice" required="required">
                <option value="">Please Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>


            <label for="experience">Briefly Describe Your Raiding Experience<span class="required">*</span>
            </label>
                <textarea id="experience" name="experience" required="required"
                          placeholder="Please enter why you would like to join League of Assassins."></textarea>

            <label for="reason">Why do you want to join League of Assassins?</label>
               <textarea id="reason" name="reason" placeholder="Your message must be greater than 20 characters."
                         required="required" data-minlength="20"></textarea>


            <span id="loading"></span>
            <input type="submit" value="Submit" id="submit-button"/>

        </form>
        <?php unset($_SESSION['cf_returndata']); ?>
    </div>

</div>

<!--FOOTER-->
</body>
</html>