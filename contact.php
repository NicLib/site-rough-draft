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
                            <div class="emailForm">
                                <h4>Email a Librarian</h4>
                                <form>
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control" placeholder="@anderson.edu">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-block submit-button" disabled>Send Email</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p><em>Not sure how to display calling and texting options</em><p>
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
