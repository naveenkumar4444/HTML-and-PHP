<?php
    if(!isset($_REQUEST['uname']) || !isset($_REQUEST['paswd']))
    {
        header("Location:index.html");
    }

    $name = $_REQUEST['uname'];
    $paswd = $_REQUEST['paswd'];
    $db = array("sai"=>"1234","kumar"=>"5678");

    if($_REQUEST['submit'] == 'register')
    {
        if (array_key_exists($_REQUEST['uname'],$db))
        {
            print_r("Sorry, your username is taken");
        }
        else
        {
            array_push($db,$_REQUEST['uname'],$_REQUEST['paswd']);
            print_r("Welcome, ".$name."");
        }
        exit(0);
    }
    
    foreach($db as $x => $x_value) 
    {
        if($x==$name && $x_value==$paswd)
		{
			print_r("You have successfully logged in");
			exit(0);
		}
    }
    print_r("Sorry, wrong infornmation has been entered.");
?>