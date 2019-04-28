<?php
include('Code/php/connection.php');
include('Code/php/user_management.php');
include('Code/php/config.php'); 
include('Code/php/categories_management.php');
session_start();
check_connection();
if (isSet($_SESSION['user'])) {
    $GLOBALS['isSignedIn'] = true;
} else {
    $GLOBALS['isSignedIn'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>English for kid</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="myCss.css">
</head>

<body>
    <div class="container-fluid bgimage-color">
        <img class="mx-auto d-block" src="Eng_banner.jpg" class="img-fluid" alt="Responsive image">
    </div>

    <nav class="container-fluid bg-dark">
        <div class="row">
            <ul class="nav mr-auto col-12" id="nav-tab">
            <?php $id_name = get_id_name_categories(); ?>
                <li class="nav-item active col-2">
                    <div class="row">
                        <img class="mx-auto my-auto d-block navicon-size" src="notebook.png">
                        <span class="col-9 nav-link my-auto text-white" href="index.php">Home</span>
                    </div>
                </li>
                <li class="nav-item col-2">
                    <div class="row">
                        <img class="mx-auto my-auto d-block navicon-size" src="notebook.png">
                        <a class="col-9 nav-link my-auto text-white" href="Listen_Watch.html"><?php echo $id_name[1] ?></a>
                    </div>
                </li>
                <li class="nav-item col-2">
                    <div class="row">
                        <img class="mx-auto my-auto d-block navicon-size" src="notebook.png">
                        <a class="col-9 nav-link my-auto text-white" href="Read_Write.html"><?php echo $id_name[3] ?></a>
                    </div>
                </li>
                <li class="nav-item col-2">
                    <div class="row">
                        <img class="mx-auto my-auto d-block navicon-size" src="notebook.png">
                        <a class="col-9 nav-link my-auto text-white" href="Speak_Spell.html"><?php echo $id_name[5] ?></a>
                    </div>
                </li>
                <li class="nav-item col-2">
                    <div class="row">
                        <img class="mx-auto my-auto d-block navicon-size" src="notebook.png">
                        <a class="col-9 nav-link my-auto text-white" href="Grammar_Vocab.html"><?php echo $id_name[7] ?></a>
                    </div>
                </li>
                <li class="nav-item col-1">
                    <div class="row">
                        <a href="" class="text-default" data-toggle="modal" data-target="#modalRegisterForm">
                            <?php if($GLOBALS['isSignedIn'] != null){
                                      if($GLOBALS['isSignedIn'] == false){
                                          echo "Register";
                                      }
                                      else echo "<a href='Code/php/logout.php'"."> Sign Out</a>";
                                    }
                                  else echo "Register"; 
                            ?>
                        </a>
                    </div>
                </li>
                <li class="nav-item col-1">
                    <div class="row">
                            <?php if($GLOBALS['isSignedIn'] === false){
                                echo '<a id="login" href="" class="text-default" data-toggle="modal" 
                                data-target="#modalLoginForm"> Sign in </a>';
                            }
                            else echo '<span class="text-primary">'.$_SESSION['user'].'</span>' ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container intro">
        <h1>Home</h1>
        <div style="word-wrap:break-word;">
        LearnEnglish Kids is brought to you by the UIT student team, the world's Technology experts. We have lots of free online games, songs, stories and activities for children. For parents, we have articles on supporting children in learning English, videos on using English at home and information about face-to-face courses around the world.
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-3 border border-light rounded overflow-auto d-flex flex-column">
                <img class="d-block mx-auto img-fluid rounded" src="watch_listen.jpg">
                <h1>LISTEN & WATCH</h1>
                <br>
                <div style="word-wrap:break-word;"><?php echo get_content_categories($id_name[0])?></div>
                <button class="mt-auto btn btn-info">
                    <h3>
                        <?php echo '<a href="./view_tab.php?cat_id='.$id_name[0].'"> MORE --→ </a>' ?>
                    </h3>
                </button>
            </div>
            <div class="col-3 border border-light rounded d-flex flex-column">
                <img class="d-block mx-auto img-fluid rounded" src="read_write.png">
                <h1>READ & WRITE</h1>
                <br>
                <div style="word-wrap:break-word;">><?php echo get_content_categories($id_name[2])?> </div>
                <button class="mt-auto btn btn-info">
                    <h3>
                        <?php echo '<a href="./view_tab.php?cat_id='.$id_name[2].'"> MORE --→ </a>' ?>
                    </h3>
                </button>
            </div>
            <div class="col-3 border border-light rounded d-flex flex-column">
                <img class="d-block mx-auto img-fluid rounded" src="speak_spell.jpg">
                <h1>SPEAK & SPELL</h1>
                <br>
                <div style="word-wrap:break-word;">><?php echo get_content_categories($id_name[4])?> </div>
                <button class="mt-auto btn btn-info">
                    <h3>
                        <?php echo '<a href="./view_tab.php?cat_id='.$id_name[4].'"> MORE --→ </a>' ?>
                    </h3>
                </button>
            </div>
            <div class="col-3 border border-light rounded d-flex flex-column">
                <img class="d-block mx-auto img-fluid rounded" src="grammar_vocabulary.jpg">
                <h1>GRAMMAR & VOCAB</h1>
                <br>
                <div style="word-wrap:break-word;">><?php echo get_content_categories($id_name[6])?></div>
                <button class="mt-auto btn btn-info">
                    <h3>
                        <?php echo '<a href="./view_tab.php?cat_id='.$id_name[6].'"> MORE --→ </a>' ?>
                    </h3>
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid" id="footer">
        <div class="container">
            <br>
            <h2 class="text-light">Developer Team:</h2>
            <h5 class="text-light"> Tran Hoang An</h5>
            <h5 class="text-light"> Cao Minh huy</h5>
            <h5 class="text-light"> Nguyen Le Hoai An</h5>
        </div>
    </div>

    <form class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
    aria-hidden="true" method="post" action="Code/php/login.php">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="defaultForm-email" class="form-control validate" name="email">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate" name="pass">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default" type="submit">Login</button>
                </div>
            </div>
        </div>
    </form>

    <form class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" method="post"  action="Code/php/user_management.php">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="orangeForm-name" class="form-control validate" name="user_name">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="orangeForm-email" class="form-control validate" name="user_email">
                        <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="orangeForm-pass" class="form-control validate" name="user_pass">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange">Sign up</button>
                </div>
            </div>
        </div>
    </form>


    <script src="bootstrap/script/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/script/popper.min.js"></script>
    <script src="bootstrap/script/bootstrap.min.js"></script>
</body>
</html>