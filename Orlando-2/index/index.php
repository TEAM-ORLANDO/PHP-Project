<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="UTF-8">

		<title>Електроника за всеки любител</title>

		<meta name="robots" content="index, follow">
		<link rel="stylesheet" type="text/css" href="css/aciTree.css" media="all">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.aciPlugin.min.js"></script>
		<script type="text/javascript" src="js/jquery.aciTree.min.js"></script>
		<link rel="stylesheet" href="css/index.css"/>
	</head>
	<body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "useracount";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn -> connect_error) {
            die("Connection failed: " . $conn -> connect_error);
        }
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])) {
            if($_POST['username'] !="" && $_POST['password'] !=""){
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $user_get = mysqli_query($conn, "SELECT fname FROM userprofiles WHERE username='$username' AND password='$password'");
                $name = mysqli_fetch_array($user_get);
                echo "<div>Здравей, " . $name['fname'] . "</div>";
            }else{
                echo "Моля, регистрирайте се.";
            }
        }
        $conn -> close();
        ?>
		<div id="container">
			<header>
			
				
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="logo" width="200px"></a>
				</div>
				<h1>Електроника за всеки любител</h1>
				    <?php //logged in or not field

                    echo"<form id='register' action='login.php' method='post' accept-charset='UTF-8'><div>
                        <input type='submit' name='register' value='Регистрация' id='registerBtn'/>
                    </div></form>";

                echo "<form id='login' action='index.php' method='post' accept-charset='UTF-8'>
                <div id='userPass'>
                        <div >
                            <label for='username'>Потребител:</label>
                            <div>
                                <input type='text' name='username' id='username' maxlength='50'/>
                            </div>
                        </div>

                        <div>
                            <label for='password'>Парола:</label>
                            <div>
                                <input type='password' name='password' id='password' maxlength='50'/>
                            </div>
                         </div>
                        <div id='submit'>
                            <div>
                                <input type='submit' name='submit' value='Вход'/>
                            </div>
                        </div>
                </div>
                </form>";
                ?>
				<nav id="main-nav">
					<a href="index.php">Начало</a>
					<a href="#">Каталог</a>
					<a href="#">Контакти</a>
				</nav>
			</header>

			<aside id="left-side">
				<nav>

					<div id="tree" class="aciTree">
						<div>
							<br>
							Products:
						</div>
					</div>

					<script class="code" type="text/javascript">
						$(function() {

							// listen for the events
							$('#tree').on('acitree', function(event, api, item, eventName, options) {
								if (eventName == 'selected') {
									// do something when a item is selected
									var itemData = api.itemData(item);
									alert('You just selected the item with the ID: ' + api.getId(item) + '\n' + 'also the custom property [my-url] equals: ' + itemData['my-url']);
								}
							});

							// init the tree
							$('#tree').aciTree({
								ajax : {
									url : 'json/sample.json'
								},
								selectable : true
							});

						});

					</script>

					<script type="text/javascript">
						$(function() {

							var log = $('.log div');

							// write to log
							$('#tree').on('acitree', function(event, api, item, eventName, options) {
								if (api.isItem(item)) {
									log.prepend('<p>' + eventName + ' [' + api.getId(item) + ']</p>');
								} else {
									log.prepend('<p>' + eventName + ' [tree]</p>');
								}
							});

							$('.clear_log').click(function() {
								$('.log div').html('');
								return false;
							});

						});

					</script>

					<img src="img/aside.png" alt="aside" width="160"/>

				</nav>
			</aside>
			<main>
				<article>
					<h2>Поле за промоция</h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
						quod ratione tempora. Eligendi, quia.
					</p>
				</article>
				<article>
					<h2>Поле за новина</h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
						quod ratione tempora. Eligendi, quia.
					</p>
				</article>
				<article>
					<h2>Поле за промоция</h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
						quod ratione tempora. Eligendi, quia.
					</p>
				</article>
				<article>
					<h2>Поле за новина</h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
						quod ratione tempora. Eligendi, quia.
					</p>
				</article>
				<article>
					<h2>Поле за промоция</h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
						quod ratione tempora. Eligendi, quia.
					</p>
				</article>
			</main>
			<footer>
				<a href="#">За нас</a>
				<a href="#">Пишете ни</a>
				<a href="#">Условия за ползване</a>
				<a href="#">Нашата политика</a>
				<a href="#">Адрес и телефон</a>
				<a href="#">Харесайте ни във Facebook</a>
			</footer>
		</div>

	</body>
</html>