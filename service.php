<?php
require "header.php"
?>



<?php
if (array_key_exists('button1', $_POST)) {
    button1();
} else if (array_key_exists('button2', $_POST)) {
    button2();
}
function button1()
{
    echo "This is Button1 that is selected";
}
function button2()
{
    echo "This is Button2 that is selected";
}
?>

    <body>
                    <div class= "row">
                        <div class="lastFive" style="text-align:center;">
                            <button onclick="window.location.href = 'http://192.168.64.2/cmpe272-labs/lastfivevisited.php';">Last five visited products</button>
                        </div>
                    </div>


                    <div class = "row">
                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/Cassandra.png">
                            </div>

                            <div class = "title">
                                <h1>Cassandra</h1>
                            </div>

                            <div class = "describution">
                                <p>10 cassandra servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/cassandra.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>

                        </div>


                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/scylla1.png">
                            </div>

                            <div class = "title">
                                <h1>Scylla</h1>
                            </div>

                            <div class = "describution">
                                <p>10 scylla servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/scylla.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>

                        </div>

                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/tidb.png">
                            </div>

                            <div class = "title">
                                <h1>TiDB</h1>
                            </div>

                            <div class = "describution">
                                <p>10 tidb servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/tidb.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>

                        </div>






                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/redis.png">
                            </div>

                            <div class = "title">
                                <h1>Redis</h1>
                            </div>

                            <div class = "describution">
                                <p>10 redis servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/redis.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>


                        </div>



                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/adb.png">
                            </div>

                            <div class = "title">
                                <h1>Dynamo</h1>
                            </div>

                            <div class = "describution">
                                <p>10 dynamoDB servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/dynamoDB.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>

                        </div>

                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/mdb.png">
                            </div>

                            <div class = "title">
                                <h1>Mongodb</h1>
                            </div>

                            <div class = "describution">
                                <p>10 mongodb servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/mongodb.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>
                        </div>

                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/redis.png">
                            </div>

                            <div class = "title">
                                <h1>MySQL</h1>
                            </div>

                            <div class = "describution">
                                <p>10 mysql servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/mysql.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>
                        </div>

                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/redis.png">
                            </div>

                            <div class = "title">
                                <h1>MariaDB</h1>
                            </div>

                            <div class = "describution">
                                <p>10 mariaDB servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/mariaDB.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>
                        </div>

                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/redis.png">
                            </div>
                            <div class = "title">
                                <h1>SQliteDB</h1>
                            </div>

                            <div class = "describution">
                                <p>10 sqlite servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/sqlite.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>
                        </div>


                        <div class = "cards">
                            <div class = "image">
                                <img src = "images/redis.png">
                            </div>

                            <div class = "title">
                                <h1>PostgreSQL</h1>
                            </div>

                            <div class = "describution">
                                <p>10 postgresql servers in a clusetr</p>

                                <form method="post" action="http://192.168.64.2/cmpe272-labs/postgresql.php">
                                        <input type="submit" name="button1"
                                                class="button" value="Visit Item" />
                                </form>
                            </div>

                        </div>
                    </div>

    </body>
