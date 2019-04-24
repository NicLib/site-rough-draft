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
            <div class="container">

                <!-- Searchbox -->
                <section class="col-xs-12">
                    <div style="width:100%;height:30em;border:1px solid black;">
                        <?php include 'searchbox.php'; ?>
                    </div>
                </section>

                <!-- Databases/LibGuides -->
                <div class="row">
                    <!-- LibGuides -->
                    <section class="col-md-6">
                        <div style="width:100%;height:15em;background-color:blue;">Research Help</div>
                    </section>

                    <!-- Databases -->
                    <section class="col-md-6">
                        <div style="width:100%;height:15em;background-color:green">Databases</div>
                    </section>
                </div>

                <!-- Library News -->
                <section class="col-xs-12">
                    <div style="width:100%;height:10em;background-color:yellow">Library News</div>
                </section>
            </div>
        </main>

        <footer>
            <?php include 'footer.php' ?>
        </footer>
    </body>
</html>
