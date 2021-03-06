<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>

<html>
<head>

    <title>Stage Four - Template Two</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/storetodb.js"></script>
	<script src="js/getfromdb.js"></script>
	<script type="text/javascript">
	
		var myid = 421;
		function set1()
		{
			myid = 421;
		}
		function set2()
		{
			myid = 422;
		}
		function set3()
		{
			myid = 423;
		}
		function set4()
		{
			myid = 424;
		}
		function set5()
		{
			myid = 425;
		}
		function set6()
		{
			myid = 426;
		}
		function init()
		{
			for(myid = 421; myid <= 426; ++myid)
			{
				getfromdb();
			}
		}
		function update(evt)
		{
			savetodb();
			var quantity;
			var myxmlhttp=new XMLHttpRequest();
			myxmlhttp.onreadystatechange = function(){};
			if(myid == 425)
			{
				quantity = document.getElementById("425").value;
				myxmlhttp.open("GET","storetodb.php?myid=528&val="+quantity,false);
				myxmlhttp.send();
			}
			else if(myid == 426)
			{
				quantity = document.getElementById("426").value;
				myxmlhttp.open("GET","storetodb.php?myid=529&val="+quantity,false);
				myxmlhttp.send();
			}
			else if(myid == 422)
			{
				quantity = document.getElementById("422").value;
				myxmlhttp.open("GET","storetodb.php?myid=522&val="+quantity,false);
				myxmlhttp.send();
			}
		}
	</script>
</head>

<body onload = "init()">
	
	<!-- Fixes Navigation Bar
    ======================================================-->
    
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">B-M-I</span>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
					<li><a href="myindex.php">Home</a></li>
					<li><a href="getstarted.php">Get Started</a></li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 1 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stageonepointone.php">Template 1 - Understand</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 2 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagetwopointone.php">Template 1 - Identify</a></li>
                            <li><a href="stagetwopointtwo.php">Template 2 - Problem Selection</a></li>
                            <li><a href="stagetwopointthree.php">Template 3 - Problem Description</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 3 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagethreepointone.php">Template 1 - Technology</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 4 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagefourpointone.php">Template 1 - Idea Selection</a></li>
                            <li><a href="stagefourpointtwo.php">Template 2 - Idea Description</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 5 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagefivepointone.php">Template 1 - Types of Business Model</a></li>
                            <li><a href="stagefivepointtwo.php">Template 2 - Business Model Canvas</a></li>
                        </ul>
                    </li>
					<li><a style="position:fixed; right:200px" >Welcome <?php echo $_SESSION['name']; ?>,</a></li>
					<li><a style="position:fixed; right:100px" href="logout.php">Log Out</a></li>
                </ul>
            </div>
            
        </div>
    </div>
	
	
    <!-- Carousel
    =========================-->
    
    <div id="myCarousel" class="carousel slide" data-interval="false">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
        
        <div class="carousel-inner">
            
			<div class="carousel-inner">
            <div class="item active">
                <img src="img/black.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h3>Problem:</h3>
						<p>The problem that we have chosen in the previous stages. Our problem here is that the farmers are unaware of the current crop prices and technologies, due to which the middle men take majority of the margin and farmers donot get the actual price for their crops.</p>
						<h3>Solution:</h3>
						<p>The solution for this will be eleminating the middle men or minimisiing their importance. This can be done by directly updating the farmers with the current price for the crops and technologies by either sms or newspaper or weekly magazines etc. Also the buyer can contact the farmers directly and buy his yield. This can be done by providing the crop details and the farmer details to the Buyers.</p>
						<h3>User:</h3>
						<p>The main user segment will be the farmers. Especially the small scale farmers and uneducated farmers. Also the Buys will be benifitted as the crops can directly be bought from the farmers resulting in the elimination of the middlemen.</p>
					</div>
                </div>
            </div>
			
            <div class="item">
                <img src="img/black.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h3>Competition:</h3>
						<p>The competition will be the similar business groups that work on the similar lines. For the problem considered, there are no such competators in Indian market. As this solution is currently unique, we have a upper hand in this area.</p>
						<h3>Costs:</h3>
						<p>Once the network is eshtablished, the maintainance of the call center will be costly. Creating the automated voice call and maintaining the databse of the farmers will require a few computer engineers. Integrating with the service provider will cost us. The extra cost will be for the payment for the newspaper articles.</p>
						<h3>Revenue:</h3>
						<p>The main revenue will be from the farmers. They will have to activate a plan and pay for it in order to avail the service. The farmers will be charged a minimun amount depending on the plan which they take.</p>
					</div>
                </div>
            </div>
			
            <div class="item">
                <img src="img/slide1.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h1>Stage 4 - Template 2</h1>
                        <h2>Problem: (1 of 6)</h2>
                        <p><textarea id='421' rows='6' cols='100' onfocus='set1()' onblur='savetodb()' placeholder='What problem are you trying to solve? What user need are you satisfying?'></textarea></p>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide2.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Solution: (2 of 6)</h2>
						 <p><textarea id='422' rows='6' cols='100' onfocus='set2()' onblur='update(event)' placeholder='What is your idea and how does it work? What is the core functionality of your idea? What is your unique value proposition to the user? How will you market your solution and reach the user?'></textarea></p>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide3.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>User: (3 of 6)</h2>
                        <p><textarea id='423' rows='6' cols='100' onfocus='set3()' onblur='savetodb()' placeholder='Who are you helping with your solution? Who is the most important user?'></textarea></p>
                    </div>
                </div>
            </div>
			
			<div class="item">
                <img src="img/slide4.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Competition: (4 of 6)</h2>
						<p><textarea id='424' rows='6' cols='100' onfocus='set4()' onblur='savetodb()' placeholder='What are the alternative solutions to the problem? Who offers these solution? How will you beat the competitors?'></textarea></p>                       
                    </div>
                </div>
            </div>    
			
			<div class="item">
				<img src="img/slide5.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Costs: (5 of 6)</h2>
						<p><textarea id='425' rows='6' cols='100' onfocus='set5()' onblur='update(event)' placeholder='What will it cost to develop your solution? What are the ongoing fixed + variable costs?'></textarea></p>   
					</div>
				</div>
			</div>		
			<div class="item">
				<img src="img/slide6.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Revenue: (6 of 6)</h2>
						<p><textarea id='426' rows='6' cols='100' onfocus='set6()' onblur='update(event)' placeholder='How are you going to make money? Who pays? How much will they pay? How do they pay (one-time fee/ongoing subscription/license..)?'></textarea></p>
						<br/>
						<p><a class="btn btn-large btn-primary" href="stagefivepointone.php">Next Stage</a></p>
					</div>
				</div>
			</div>
		</div>
		
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
			
	</div>
	
	
	<!-- Collapse
    =========================-->
	
	<div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Problem:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					The problem that we have chosen in the previous stages. Our problem here is that the farmers are unaware of the current crop prices and technologies, due to which the middle men take majority of the margin and farmers donot get the actual price for their crops.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Solution:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					The solution for this will be eleminating the middle men or minimisiing their importance. This can be done by directly updating the farmers with the current price for the crops and technologies by either sms or newspaper or weekly magazines etc. Also the buyer can contact the farmers directly and buy his yield. This can be done by providing the crop details and the farmer details to the Buyers.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        User:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
					The main user segment will be the farmers. Especially the small scale farmers and uneducated farmers. Also the Buys will be benifitted as the crops can directly be bought from the farmers resulting in the elimination of the middlemen. All the remotely connected users should also be mentioned here.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        Competition:
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
					The competition will be the similar business groups that work on the similar lines. For the problem considered, there are no such competators in Indian market. As this solution is currently unique, we have a upper hand in this area. If any competators available, all of them should be written here along with their positive and negative feedback. This will help you in evaluating your model with others and make it better in the next iteration.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                        Costs:
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
					Once the network is eshtablished, the maintainance of the call center will be costly. Creating the automated voice call and maintaining the databse of the farmers will require a few computer engineers. Integrating with the service provider will cost us. The extra cost will be for the payment for the newspaper articles.  
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                        Revenue:
                    </a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
					The main revenue will be from the farmers. They will have to activate a plan and pay for it in order to avail the service. The farmers will be charged a minimun amount depending on the plan which they take. 
				</div>
            </div>
        </div>
	
		
	</div>

	
	<!-- Footer and Modal
    ==========================-->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <hr/>
                <p>Copyright &copy; PES Institute Of Technology
                    <a data-toggle="modal" href="#myModal">Terms and Conditions</a>
                </p>
                
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabinex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Terms and Conditions</h2>
                            </div>
                            <div class="modal-body">
                                 <p>These terms and conditions shall govern your use of our website.By using our website, you accept these terms and conditions in full accordingly, if you disagree with these terms and conditions or any part of these terms and conditions, you must not use our website.[Our website uses sessions; by using our website or agreeing to these terms and conditions, you consent to our use of sessions</p>
								<p> You may view pages from our website in a web browser, download pdfs from our website, view video files from our website. You may only use our website for your business purposes, and you must not use our website for any other purposes. </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	
</body>
</html>
<?php
	}
	else
	{
		header("location:index.html");
	}
?>