<?php
    require_once "../includes/engine.php";
    $localvars = localvars::getInstance();
    templates::display('header');

    // username
    $username  = dbSanitize(session::get('username'));

    // create customer form
    $form = formBuilder::createForm('feedback');

    $form->linkToDatabase( array(
        'table' => 'giftcard'
    ));

    if(!is_empty($_POST) || session::has('POST')) {
        $processor = formBuilder::createProcessor();
        $processor->setCallback('beforeInsert', 'feedbackCheck');
        $processor->processPost();
    }

    // form titles
    $form->insertTitle = "";
    $form->editTitle   = "";
    $form->updateTitle = "";
    $form->template    = "learningAppTemp";


    // form information
    $form->addField(array(
        'name'       => 'fID',
        'type'       => 'hidden',
        'primary'    => TRUE,
        'fieldClass' => 'id',
        'showIn'     => array(formBuilder::TYPE_INSERT, formBuilder::TYPE_UPDATE),
    ));

    $form->addField(array(
        'name'       => 'ipAddr',
        'type'       => 'hidden',
        'fieldClass' => 'ip',
        'value'      => $_SERVER['REMOTE_ADDR'],
        'showIn'     => array(formBuilder::TYPE_INSERT, formBuilder::TYPE_UPDATE),
    ));

    $form->addField(array(
        'name'       => 'username',
        'type'       => 'hidden',
        'label'      => 'Username:',
        'value'      => $username,
        'required'   => TRUE,
        'fieldClass' => 'username'
    ));

    $form->addField(array(
        'name'       => "usernameUS",
        'label'      => "Enter Your Username",
        'type'       => 'text',
        'fieldClass' => 'username',
        'required'   => TRUE
    ));

    $form->addField(array(
        'name'       => "emailAddress",
        'label'      => "Valid Email Address <div class='micro-text'> This will be only used to contact you for details on where to send your gift card if you win.  </div>",
        'type'       => 'email',
        'placholder' => 'JonSnow@direwolf.com',
        'fieldClass' => 'email',
        'duplicates' => FALSE,
        'required'   => TRUE
    ));

    $form->addField(array(
        'showIn'     => array(formBuilder::TYPE_INSERT),
        'name'       => 'insert',
        'type'       => 'submit',
        'fieldClass' => 'submit',
        'value'      => 'Send Feedback'
    ));

    $numModules = User::numCompleted($username);
    if( $numModules < 4){
        $localvars->set('form', '<div class="warning-message"> I am sorry you do not have enough completed modules to register for a chance to win a giftcard at this time. You currently have <strong> '.($numModules/2).' of 2 </strong> modules completed. </div>');
    } else {
        $localvars->set('form', '{form name="feedback" display="form"}');
    }
?>

<section class="wrapper">
    <div class="container">
        <h2> Giftcard Registration </h2>

        <p> Upon completing at least 2 modules and surveys you become eligible for a chance to win a giftcard.  Drawings will be at random.  You can increase your chances of winning by completing more course modules.  Each course module and survey you complete bumps up your probability number.  Gift cards will be randomly select and the amounts will be $20, $25, $50.  4 total giftcards will be rewarded. </p>

        <p class="micro-text"> Form will fail if your email is already in the system.  </p>

        <div class="form">
            {local var="form"}
        </div>
    </div>
</section>

<?php
    templates::display('footer');
?>