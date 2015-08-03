<?php

date_default_timezone_set('Europe/London');

if (isset($_POST)) {
    //form validation vars
    $formok = true;
    $errors = array();

    //submission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');

    //form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $bnet = $_POST['bnet'];
    $role = $_POST['role'];
    $class = $_POST['class'];
    $spec = $_POST['spec'];
    $dps = $_POST['dps'];
    $ilvl = $_POST['ilvl'];
    $reason = $_POST['reason'];
    $availability = $_POST['availability'];
    $experience = $_POST['experience'];
    $voice = $_POST['voice'];


    //validate form data

    //validate name is not empty
    if (empty($username)) {
        $formok = false;
        $errors[] = "You have not entered a name";
    }

    //validate email address is not empty
    if (empty($email)) {
        $formok = false;
        $errors[] = "You have not entered an email address";

        //validate email address is valid
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formok = false;
        $errors[] = "You have not entered a valid email address";
    }

    //validate ilvl is not empty
    if (empty($ilvl)) {
        $formok = false;
        $errors[] = "You have not entered a valid item level.";
    }

    //validate role is not empty
    if (empty($role)) {
        $formok = false;
        $errors[] = "You have not entered your role.";
    }

    //validate class is not empty
    if (empty($class)) {
        $formok = false;
        $errors[] = "You have not entered your class.";
    }

    //validate class is not empty
    if (empty($spec)) {
        $formok = false;
        $errors[] = "You have not entered your spec.";
    }

    //validate availability is not empty
    if (empty($availability)) {
        $formok = false;
        $errors[] = "You have not entered your availability.";
    }

    //validate vcomms is not empty
    if (empty($voice)) {
        $formok = false;
        $errors[] = "You have not entered whether you can speak on voice comms.";
    }

    //validate experience is not empty
    if (empty($experience)) {
        $formok = false;
        $errors[] = "You have not entered your raiding experience.";
    }

    //send email if all is ok
    if ($formok) {
        $headers = "From: contact@leagueofassassins.co.uk" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $emailbody = "<p>You have received a new application.</p>
                      <p><strong>Name: </strong> {$username} </p>
                      <p><strong>Email Address: </strong> {$email} </p>
                      <p><strong>Battle Net ID: </strong> {$bnet} </p>
                      <p><strong>Role: </strong> {$role} </p>
                      <p><strong>Class: </strong> {$class} </p>
                      <p><strong>Spec: </strong> {$spec} </p>
                      <p><strong>DPS: </strong> {$dps} </p>
                      <p><strong>Current Item Level: </strong> {$ilvl} </p>
                      <p><strong>Can they use voice?</strong> {$voice} </p>
                      <p><strong>Availability: </strong> {$availability} </p>
                      <p><strong>Reason for wanting to join: </strong> {$reason} </p>
                      <p><strong>Raiding Experience: </strong> {$experience} </p>
                      <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";

        mail("contact@leagueofassassins.co.uk", "New Application", $emailbody, $headers);

    }

    //what we need to return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'username' => $username,
            'email' => $email,
            'bnet' => $bnet,
            'role' => $role,
            'class' => $class,
            'spec' => $spec,
            'dps' => $dps,
            'reason' => $reason,
            'experience' => $experience,
            'voice' => $voice,
        ),
        'form_ok' => $formok,
        'errors' => $errors
    );


    //if this is not an ajax request
    if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;

        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}