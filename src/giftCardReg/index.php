<?php
    require_once "../includes/engine.php";
    $localvars = localvars::getInstance();
    templates::display('header');

    // username
    $username  = dbSanitize(session::get('username'));

    // rating sys
    $starHTML  = '<div class="rating-system">
                    <span class="star" data-star="1"></span>
                    <span class="star" data-star="2"></span>
                    <span class="star" data-star="3"></span>
                    <span class="star" data-star="4"></span>
                    <span class="star" data-star="5"></span>
                  </div>';

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
?>

<section class="wrapper">
    <div class="container">
        <h2> Giftcard Registration </h2>

        <p> Upon completing at least 2 modules and surveys you become eligible for a chance to win a giftcard.  Drawings will be at random.  You can increase your chances of winning by completing more course modules.  Each course module and survey you complete bumps up your probability number. </p>

        <p class="micro-text"> Form will fail if your email is already in the system.  </p>

        <div class="{local var="formClass"}">
            {form name="feedback" display="form"}
        </div>
    </div>
</section>

<?php
    templates::display('footer');
?>