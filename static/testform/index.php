<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta http-equiv="language" content="english, en"/>
    <meta name="keywords" content="wetator,web,application,test,testing,automation,GUI,tool,HTMLUnit"/>
    <meta name="description" content="Wetator is a small, flexible and extendable test automation tool that drives and checks your web application. Wetator provides you with a language for writing test scripts that is simple and easily readable - also for non-IT-people. The list of supported commands is intended to be preferably small."/>
    <meta name="page-topic" content="Software-Testing"/>
    <meta name="author" content="Ronald Brill"/>
    <meta name="publisher" content="Ronald Brill"/>
    <meta name="copyright" content="(c) Ronald Brill"/>
    <meta name="robots" content="index,nofollow"/>
    <meta name="revisit-after" content="14 days"/>

    <link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css"/>
    <title>WETATOR / Test Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" title="" href="https://www.wetator.org/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" media="screen" title="" href="https://www.wetator.org/css/default.css"/>
    <link rel="stylesheet" type="text/css" media="screen" title="" href="https://www.wetator.org/css/content.css"/>

    <link rel="stylesheet" type="text/css" media="screen" title="" href="https://www.wetator.org/css/tipsy.css"/>

  </head>

  <body style="; display: block">
    <div id="header" style="display: block">
      <div id="header_logo" style="display: block">
        <a href="http://www.wetator.org/" style="display: inline">
          <img alt="WETATOR Smart Web Application Testing" title="Wetator" height="137" width="400" src="https://www.wetator.org/images/wetator.png" style="display: inline"/></a>
      </div>

      <div id="header_bottomline" style="display: block">
        <div id="header_nav" style="display: inline">
        </div>
      </div>

      <div id="header_breadcrumbs" style="display: block">
      </div>

    </div>


    <div class="colmask leftmenu" style="display: block">
      <div class="colright" style="display: block">
        <div class="col1wrap" style="display: block">
          <div class="col1" style="display: block">
            <div id="content" style="display: block">

              <h1 style="display: block">Test Form</h1>

              <style type="text/css">

form {
  margin:0;padding:0;
}
.action input {
  padding: 3px 12px;
}
select {
  padding: 2px;
}
fieldset {
    border-right: medium none;
    border-style: solid none none;
    border-width: 1px medium medium;
    margin: 1em 0;
    padding: 5px 10px 12px 10px;
}
legend {
    background: none repeat scroll 0 0 transparent;
    color: #00769C;
    font-size: 1.12em;
    font-weight: normal;
    margin: 1em 0;
    padding: 0 0.5em;
}
fieldset div {
    display: block;
    margin-bottom: 0.5em;
    padding: 0;
}
fieldset div input, fieldset div textarea {
    width: 25em;
}
div div .checkbox {
    width: 1em;
    float: none;
}
fieldset div div label.checkbox {
    padding-left: 0.2em;
    padding-right: 3em;
}
label, .action {
  font-size: 0.88em;
  float: left;
  padding: 0 1em;
  text-align: right;
  width: 17em;
}
.action {
  margin-left: 10px;
}
label.required {
  font-weight: bold;
}
label.required:after {
    content: "*";
}
div.error {
  color: #D8000C;
  background-color: #FFBABA;
  border: 1px solid;
  margin: 10px 0px;
  padding: 5px 5px 5px 20px;
}
input.error {
  border: 1px solid #D8000C;
}
              </style>

              <p style="display: block">The form below is only for testing purpose. Please have a look at the WETATOR introduction for more info.</p>

 <?php
// define variables and set to empty values
$projectNameErr = "";
$projectName = "";

$allowedProgrammingLanguages = array('JAVA', 'JavaScript', 'C#', 'other');
$programmingLanguages = array('other');

$allowedNatures = array('amazing', 'visionary', 'marvelous');
$natures = array();
$comment = "";

$fromSubmit = False;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromSubmit = "formTest" == $_POST["flag_submitted"];

    if (empty($_POST["projectName"])) {
      $projectNameErr = "\"Project name\" is a required field";
    } else {
      $projectName = $_POST["projectName"];
    }

    if(isset($_POST['languages'])) {
      $programmingLanguages = $_POST['languages'];
    }
    if(isset($_POST['wetatorIs'])) {
      $natures = $_POST['wetatorIs'];
    }
    if(isset($_POST['wetatorIsText'])) {
      $comment = $_POST['wetatorIsText'];
    }
  }

  if ($fromSubmit && !empty($_POST["projectName"])) {
?>
  <fieldset style="display: block">
    <legend style="display: block">Thank you for submitting your truth about WETATOR</legend>

    <p style="display: block">We hope all your
      <b style="display: inline"><?php echo implode(", ", $natures); ?></b>
      WETATOR tests for the project
      <b style="display: inline">'<?php echo $projectName; ?>'</b> are green.
    </p>

    <p style="display: block">Why not using WETATOR for your other
      <b style="display: inline"><?php echo implode(", ", $programmingLanguages); ?></b>
      projects?
    </p>
  </fieldset>

  <div class="action" style="display: block">
      <form action="" method="get" id="formTest" style="display: block">
        <input type="submit" name="submit" value="Restart" id="submit" style="display: inline-block"/>
      </form>
  </div>

<?php
  } else {
?>
              <form action="" method="post" id="formTest" style="display: block">

                <input type="hidden" name="flag_submitted" value="formTest"/>

<?php
  if (!empty($projectNameErr)) {
?>
                <div class="error" style="display: block"><?php echo $projectNameErr; ?></div>
<?php
  }
?>
                <fieldset style="display: block">

                  <legend style="display: block">
                    For which project do you use WETATOR?
                  </legend>

                  <div style="display: block">
                    <label for="project" class="required" style="display: inline">
                      Project name
                    </label>
                    <input type="text" name="projectName" size="40" id="project" class="required <?php if (!empty($projectNameErr)) echo "error" ?>" style="display: inline-block"/>
                  </div>

                  <div style="display: block">
                    <label for="language" style="display: inline">
                      Project programming language
                    </label>
                    <select name="languages[]" size="4" id="languages" style="display: inline-block">
  <?php foreach ($allowedProgrammingLanguages as $lang): ?>
    <option value="<?php echo $lang; ?>" <?php if(in_array($lang, $programmingLanguages)) echo 'selected = "selected"';  ?>> <?php echo $lang; ?></option>
  <?php endforeach; ?>
                    </select>
                  </div>

                </fieldset>

                <fieldset style="display: block">

                  <legend style="display: block">
                    What do you think about WETATOR?
                  </legend>

                  <div style="display: block">
                    <div id="wetatorIs" style="display: block">
                      <label for="wetatorIs" style="display: inline">
                        WETATOR is
                      </label> 

  <?php foreach ($allowedNatures as $is): ?>
    <input type="checkbox" name="wetatorIs[]" id="wetatorIs_wetatorIs_<?php echo $is; ?>" value="<?php echo $is; ?>" <?php if(in_array($is, $natures)) echo 'checked';  ?> class="checkbox" style="display: inline-block"/>
    <label for="wetatorIs_wetatorIs_<?php echo $is; ?>" class="checkbox" style="display: inline"><?php echo $is; ?></label> 
  <?php endforeach; ?>

                    </div>
                  </div>

                  <div style="display: block">
                    <label for="wetatorIsText" style="display: inline">
                      WETATOR makes
                    </label><textarea name="wetatorIsText" id="wetatorIsText" style="display: inline-block"><?php echo $comment; ?></textarea>
                  </div>

                </fieldset>

                <fieldset style="display: block">

                  <legend style="display: block">
                    I like to be a WETATOR developer
                  </legend>

                  <div style="display: block">
                    <label for="resume" style="display: inline">
                      Please find attached my resume
                    </label><input id="resume" class="required" type="file" name="resume" style="display: inline-block"/>
                  </div>

                </fieldset>

                <div class="action" style="display: block">
                  <input type="submit" name="submit" value="Submit My Truth" id="submit" style="display: inline-block"/>
                </div>
              </form>

<?php
  }
?>

            </div>

            <div id="footer" style="display: block">
            </div>

          </div>
        </div>

        <div class="col2" style="display: block">

          <div id="sidebar" style="display: block">
            <h1 style="display: block"><a href="http://www.wetator.org/testform" style="display: inline">
              </a></h1>
            <div id="sidebar_nav" style="display: block">
              <ul style="display: block">
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
