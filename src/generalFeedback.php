<?php
    $localvars = localvars::getInstance();
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
        'table' => 'feedback'
    ));

    if(!is_empty($_POST) || session::has('POST')) {
        $processor = formBuilder::createProcessor();
        $processor->setCallback('beforeInsert', 'feedbackCheck');
        $processor->processPost();
    }

    // form titles
    $form->insertTitle = "Give Feedback?";
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
        'name'       => 'starRating',
        'type'       => 'plaintext',
        'label'      => 'How would you rate your experience so far?',
        'fieldClass' => 'starRating',
        'value'      =>  $starHTML,
    ));

    $form->addField(array(
        'name'       => 'rating',
        'type'       => 'hidden',
        'label'      => '--',
        'fieldClass' => 'rating'
    ));

    $form->addField(array(
        'name'       => "feedback",
        'label'      => "Please describe your experience so far:",
        'type'       => 'textarea',
        'fieldClass' => 'feedback',
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
        {form name="feedback" display="form"}
    </div>
</section>