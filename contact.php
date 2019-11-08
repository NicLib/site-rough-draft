<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>Contact a Librarian | Anderson University</title>
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>

        <main>
            <div class="container">
                <nav>
                    <a href="index.php">Home</a> / Contact
                </nav>
                <section class="content">
                    <h2 class="contentTitle">CONTACT A LIBRARIAN</h2>
                    <div class="contentImage">
                        <div style="width: 100%; height: 20em; background-color: black;"></div>
                    </div>
                    <div class="contentContent">
                        <p>Contact a librarian through chat, phone, email or text</p>
                        <div class="box">
                            <div class="libraryh3lp" data-lh3-jid="nicref@chat.libraryh3lp.com">
                                <iframe src="https://libraryh3lp.com/chat/nicref@chat.libraryh3lp.com?skin=29545" frameborder="0" style="width: 100%; height: 100%;"></iframe>
                            </div>
                        </div>
                        <div class="box">
                            <!--<?php include 'assets/contact-form.php' ?>-->
                            <a class="btn btn-block btn-lg contact-buttons" href="mailto:jcbell@anderson.edu">Email a Librarian</a>
                            <a class="btn btn-block btn-lg contact-buttons" href="sms:17652039280">Text a Librarian<br/>765-203-9280</a>
                            <a class="btn btn-block btn-lg contact-buttons" href="tel:17656414280">Call the InfoDesk<br/>765-641-4280</a>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer>
            <?php include 'footer.php' ?>
        </footer>
        <?php include 'add-js.php'; ?>
    </body>
</html>
