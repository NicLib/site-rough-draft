<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>Nicholson Library | Anderson University</title>
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>

        <main>
            <div >

                <!-- Searchbox -->
                <section class="mainBox box">
                    <div class="libSearch">
                        <?php include 'searchbox.php'; ?>
                        <!--Main Box-->
                    </div>
                </section>

                <!-- Databases/LibGuides -->
                <!-- LibGuides -->
                <section class="box">
                    <a href="https://libguides.anderson.edu" target="_blank"><div id="researchBox"><h2 class="buttonTitle">RESEARCH HELP</h2></div></a>
                </section>

                <!-- Databases -->
                <section class="box">
                    <a href="https://libguides.anderson.edu/az.php" target="_blank"><div id="databasesBox"><h2 class="buttonTitle">DATABASES</h2></div></a>
                </section>

                <!-- Library News -->
                <section class="bottomBox box">
                    <div style="background-color:yellow">Library News</div>
                </section>
            </div>
        </main>

        <footer>
            <?php include 'footer.php'; ?>
        </footer>

        <?php include 'add-js.php'; ?>
    </body>
</html>
