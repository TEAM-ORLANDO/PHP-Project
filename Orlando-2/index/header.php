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
        <div id="container">
            <header>

                <div id="logo">
                    <a href="index.php"><img src="img/logo.png" alt="logo" width="200px"></a>
                </div>
                <h1>Електроника за всеки любител</h1>
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
            </main>            
        </div>

    </body>
</html>