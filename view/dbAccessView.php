<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Aprendendo PHP | Databases</title>
    </head>
    <body>
        <header>
            <h1>Conexões com Banco de Dados</h1>
        </header>
        <main>
            <article>
                <header>
                    <h2>Teste Conexão</h2>
                </header>
                <section>
                    <h3>Testando MySQLi</h3>
                    <pre>
                        <?php
                            require_once "../model/DataBaseAccess/005.class.db.singleton.php";

                            var_dump(DStMySQLi::getInstance());
                            $dbm2 = DStMySQLi::getInstance();
                            $resultm = $dbm2->query("SELECT * FROM usuario");
                            var_dump($resultm);
                        ?>
                    </pre>
                </section>
                <hr>
                <section>
                    <h3>Testando PDO</h3>
                    <pre>
                        <?php
                            $dbp = DStPDO::getInstance();
                            var_dump($dbp);
                            $dbp2 = DStPDO::getInstance();
                            $resultp = $dbp2->query('SELECT * FROM usuario');
                            var_dump($resultp);
                            echo $resultp->rowCount();
                        ?>
                    </pre>
                </section>
                <hr>
                <section>
                    <h3>Testando MySQLi #2</h3>
                    <pre>
                        <?php
                            $dbm = DStMySQLi::getInstance();
                            var_dump($dbm);
                            $dbm2 = DStMySQLi::getInstance();
                            $resultm = $dbm2->query('SELECT * FROM usuario');
                            var_dump($resultm);
                        ?>
                    </pre>
                </section>
                <hr>
                <section>
                    <h3>Testando PDO #2</h3>
                    <pre>
                        <?php
                            $dbp = DStPDO::getInstance();
                            var_dump($dbp);
                            $dbp2 = DStPDO::getInstance();
                            $resultp = $dbp2->query('SELECT * FROM usuario');
                            var_dump($resultp);
                            echo $resultp->rowCount();
                        ?>
                    </pre>
                </section>
            </article>
        </main>
    </body>
</html>
