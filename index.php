<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>DWA15 - Steven McDevitt</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
        <link href="css/normalize.css" rel="stylesheet" >
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <?php require('logic.php'); ?>

    </head>

    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-100">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="http://p1.iitbotftbd.com">DWA15</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-100">
                            <ul class="nav navbar-nav">
                                <li><a href="http://p1.iitbotftbd.com">P1 - Portfolio</a></li>
                                <li class=active><a href="http://p2.iitbotftbd.com">P2 - xkcd PwD</a></li>
                                <li><a href="http://p1.iitbotftbd.com">P3 - TBD</a></li>
                                <li><a href="http://p1.iitbotftbd.com">P4 - TBD</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <div class="jumbotron col-md-12">
                    <h1>Project 2  - xkcd PwD</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h1>Password Generator</h1>

                    <form method='GET' action='index.php'>
                        <label>Number of Words:</label>
                        <select name='wordCount'>
                            <option value='1'>1<option>
                            <option value='2'>2<option>
                            <option value='3'>3<option>
                            <option SELECTED value='4'>4<option>
                            <option value='5'>5<option>
                            <option value='6'>6<option>
                            <option value='7'>7<option>
                            <option value='8'>8<option>
                            <option value='9'>9<option>
                        </select><br>
                        <label>Append a Number?
                            <input type='checkbox' name='includeNumbers' <?php echo ($includeNumbers) ? 'checked="checked"' : '' ; ?> /></label><br>
                        <label>Append a Symbol?
                            <input type='checkbox' name='includeSymbols' <?php echo ($includeSymbols) ? 'checked="checked"' : '' ; ?> /></label><br>

                        <input type='submit' value='Generate Password'>
                    </form>

                    <?php ($appTraceOn) ? print_r($_GET) : ''; ?>
                    <?php ($appTraceOn) ? print $appMsg : ''; ?>        
                    <?php ($appTraceOn) ? print $appTrace : ''; ?>
                    <?php ($appTraceOn) ? print $totalWords : ''; ?>
                    <?php ($appTraceOn) ? print $totalNumbers : ''; ?>
                    <?php ($appTraceOn) ? print $totalSymbols : ''; ?>
                    <?php ($appTraceOn) ? print_r($passwordComponents) : ''; ?>
                    <br>
                    <h2>Password: <?=$generatedPassword?></h2>
                    <br>
                    <br>
                    <p class="bottom-sep"></p>
                    <h1>Links to Project</h1>
                    <p><a href="p2.iitbotftbd.com">Link to Project 2 Site</a></p>
                    <p><a href="https://github.com/stevenMcDevitt/dwa15-p2.git">Link to Project 2 Github Repository</a></p>
                    <p class="bottom-sep"></p>
                </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="sidebar">
                        <h2>xkcd Passwords</h2>
                        <p>The purpose of this project is to provide hands-on practice with working with the basics of PHP by creating and XKCD Password Generator.  This is a different approach for creating passwords.  Rather than using combinations of letters, numbers and symbols that are difficult to remember (which is why most people write down their password) the XKCD model is one that uses whole words in a sequence.  These are easier to remember and more difficult to crack.</p>
                        <p>The user can select from 1 to 9 words and determine if the password should also contain a number and a symbol</p>
                    </div>
                    <div class="sidebar">
                        <h2>It Is The Business Of The Future To Be Dangerous</h2>
                    </div>
                </div>
            </div>

            <div class="row sitefooter">

                <div class="col-md-4 sitefooter"></div>
                <div class="col-md-8 sitefooter"></div>

            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
