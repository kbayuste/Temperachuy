<!DOCTYPE html>
<html>
<head>
	<title>Temperachuy</title>
	
	<style type="text/css">

		.adjust{
			padding-top:35px;
			padding-bottom: -15px;
		}
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		}

		li {
    		float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;	
		    padding: 14px 16px;
		    text-decoration: none;
		}

		li a:hover {
      		background-color: #111;
		}

		.placement1{
			margin-right: -165px;
			padding-bottom: 25px
		}

		.placement2{
			padding-bottom: 25px	
		}

		.placement3{
			padding-bottom: 35px;
		}

		.selectsize{
			height:18.4px; 
			width:104.8px;
		}

		.boxed{
			border: 1px solid black;
		}

	</style>
</head>
<body style="background: url('Images/bg.jpg');background-repeat: no-repeat;background-size: cover;">
	<center>
	<img src="Images/Logo.png" height="120" width="550" class="adjust">
	<center>
	<h3>The Temperature Converter</h3>

	<ul>
	  <li><a class="active"></a></li>
	  <li><a></a></li>
	  <li><a></a></li>
	</ul>

	<br>

	<br>
	<div class="boxed">
	<form>
		<h5>Celcius</h5>
		<input type="text" name="change" id ="demo1" oninput=" toCelsius(this.value)" style="width: 150px; height:20px;"
    onblur="if(this.value=='') {this.value = '';}" 
    onfocus="if(this.value=='') {this.value = '';} />
	</form>
	
	<br>

	<img src="Images/arrow.png" height="150px" width="150px">

	<br>

		<form >
			<h5> Fahrenheit </h5>
			<input type="text" name="change" id="demo" oninput=" toFahrenheit(this.value)" style="width: 150px; height:20px;">
		</form>
		<br>
	</div>
	<script>
		
	function toCelsius(fahrenheit) {
    document.getElementById("demo").value =(5/9) * (fahrenheit-32);
		};

	function toFahrenheit(celsius) {
    document.getElementById("demo1").value = (celsius*9/5) + 32;
		};
	</script>

</body>
</html>
