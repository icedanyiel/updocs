<html>
        <head>
                <title>UpDocs</title>
                <style>
					h1 {
						float: left;
						padding-left: 20px;
						font-size: 42px;
					    position: relative;
					} 
					/*TOP MENU LIST*/
					ul.header {
					    list-style-type: none;
					    margin: 0;
					    padding: 0;
					    overflow: hidden;
					    background-color: #333;
					}

					li.hdr {
					    float: left;
					}

					li a {
					    display: block;
					    color: white;
					    text-align: center;
					    padding: 14px 16px;
					    text-decoration: none;
					}

					li a:hover:not(.active) {
					    background-color: #111;
					}

					.active {
					    background-color: #4CAF50;
					}
					/*ID'S*/
					#top-menu {
						float: right;
						padding-right: 20px;
					    position: relative;
					    padding-top: 30px;
					}
					/*CLASSES*/
					.main-header {
					    width: 1250px;
					    margin: 0 auto;
					    clear: both;
					    display: block;
					    padding: 0;
					}
					.header {
						position: relative;
					    width: 100%;
					    float: left;
					    margin: 0;
					    padding: 0;
					    background: #F0FFFF;
					}
					.page {
					    width: 1250px;
					    margin: 0 auto;
					    background: #fff;
					    clear: both;
					    display: block;
					    padding: 0;
					}
					.page-container {
					    background: #F0FFF0;
					    padding-top: 25px;
					    min-height: 100px;
					    float: none;
					    clear: both;
					    padding: 25px 2% 0 2%;
					    display: inline-block;
					    width: 100%;
					    -webkit-box-sizing: border-box;     -moz-box-sizing: border-box;     box-sizing: border-box;
					}
					footer{
					    background: #FFFFE0;
					    text-align: center;
					    padding: 10px;
					}

				</style>
        </head>
        <body>
        <header class="main-header">
        	<div class="header">

        		<h1><a style="text-decoration: none; color: #B22222;" href="/updocs"><?php echo "UpDocs"; ?></a></h1>

        		<div id="top-menu">
        			<ul class="header">
        				<li class="hdr"><?php echo anchor('home', 'Home'); ?></li>
        				<li class="hdr"><?php echo anchor('upload', 'Upload'); ?></li>
        				<li class="hdr"><?php echo anchor('register', 'Register'); ?></li>
        				<li class="hdr"><?php echo anchor('myaccount', 'My Account'); ?></li>

        				<li style="float:right" class="active">

        				<?php
        					if($this->session->userdata('logged_in')){
        						echo anchor('MyAccount/logout', 'Log Out');
        					}
        					else{
        						echo anchor('login', 'Log In');
        					}
        				?>

        				</li>

        			</ul>
        		</div>

        	</div>
        	</header>
        	<div class="page">
        	<div class ="page-container">

