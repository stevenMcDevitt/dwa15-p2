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
                            <a class="navbar-brand" href="../p1/index.php">DWA15</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-100">
                            <ul class="nav navbar-nav">
                                <li><a href="../p1/index.php">P1 - Portfolio</a></li>
                                <li class=active><a href="index.php">P2 - xkcd PwD</a></li>
                                <li><a href="../p3/index.php">P3 - TBD</a></li>
                                <li><a href="../p4/index.php">P4 - TBD</a></li>
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
                        <p>Ipsum Lorem Guess I got what I deserve. Kept you waiting there, too long my love. 
                           All that time, without a word. Didn't know you'd think, that I'd forget, or I'd regret.
                           The special love I have for you. My baby blue.
                           All the days became so long. Did you really think I'd do you wrong. Dixie, when I let you go. 
                           Thought you'd realize, I would know, I would show. The special love I have for you. My baby blue
                           What can I do, what can I say? Except that I want you by my side. How can I show you? Show me a way.
                           Don't you know, the times I tried. Guess that's all I have to say. Except the feeling just grows stronger everyday.
                           Just one thing, before I go. Take good care, baby let me know, let it grow. The special love you have for me. My Dixie dear
                        </p>
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
