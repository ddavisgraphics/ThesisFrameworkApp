<?php
    $localvars  = localvars::getInstance();
    //do session checks
    $sessionCheck = User::performChecks();

    // set session tracker up
    if(session::has('completePages')){
        $thisPage = $localvars->get('pageName');
        $pages    = session::get('completePages');
        $lesson   = $thisPage."Lesson";
        $survey   = $thisPage."LessonSurvey";

        if(in_array($lesson, $pages) && in_array($survey, $pages)){
            $localvars->set('tracker', 'doNotTrack');
        } else {
            $localvars->set('tracker','track');
        }
    } else {
         $localvars->set('tracker','track');
    }
 ?>