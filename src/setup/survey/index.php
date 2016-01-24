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
    $form = formBuilder::createForm('setup');

    $form->linkToDatabase( array(
        'table' => 'setupSurvey'
    ));

    if(!is_empty($_POST) || session::has('POST')) {
        $processor = formBuilder::createProcessor();
        $processor->setCallback('beforeInsert', 'feedbackCheck');
        $processor->processPost();
    }

    // form titles
    $form->insertTitle = "Setup Survey";
    $form->editTitle   = "";
    $form->updateTitle = "";
    $form->template    = "learningAppTemp";


    // form information
    $form->addField(array(
        'name'       => 'ssID',
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
        'label'      => 'How easy would you consider your choice, based on this lesson, would be to setup?',
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
        'name'        => "framework",
        'label'       => "Select a framework that you would use",
        'type'        => 'select',
        'blankOption' => 'Select a Framework',
        'options'     => array(
            'engineAPI' => "EngineAPI",
            'meteorJS'  => "Meteor JS",
        ),
        'fieldClass' => 'framework-select',
        'required'   => TRUE
    ));

    $form->addField(array(
        'name'       => "feedback",
        'label'      => "What was your reasoning behind your choice of framework?",
        'type'       => 'textarea',
        'fieldClass' => 'feedback',
        'required'   => TRUE
    ));

    $form->addField(array(
        'showIn'     => array(formBuilder::TYPE_INSERT),
        'name'       => 'insert',
        'type'       => 'submit',
        'fieldClass' => 'submit',
        'value'      => 'Submit Survey'
    ));
?>

<section class="wrapper">
    <div class="container">
        {form name="setup" display="form"}
    </div>
</section>