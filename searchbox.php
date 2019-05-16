<?php include 'assets/variables.php'; ?>

<!-- Searchbox Tabs -->
<div class="tabs">
    <div class="tab-links">
        <a href="#tab1" class="selected">
            <h2>
                <i class="fas fa-school"></i><br/><span class="tab-label">Everything</span>
            </h2>
        </a>
        <a href="#tab2" class="">
            <h2>
                <i class="fas fa-book"></i><br/><span class="tab-label">Books</span>
            </h2>
        </a>
        <a href="#tab3" class="">
            <h2>
                <i class="far fa-newspaper"></i><br/><span class="tab-label">Articles</span>
            </h2>
        </a>
        <a href="#tab4" class="">
            <h2>
                <i class="fas fa-video"></i><br/><span class="tab-label">Media</span>
            </h2>
        </a>
    </div>

    <!-- New Searchbox -->
    <div class="tab-content">
        <!-- Tab1: Everything -->
        <div id="tab1" class="tab active">
            <?php include 'assets/search-box-tabs/everythingTab.php'; ?>
        </div>
        <!-- Tab2: Books -->
        <div id="tab2" class="tab">
            <?php include 'assets/search-box-tabs/booksTab.php'; ?>
        </div>
        <!-- Tab3: Articles -->
        <div id="tab3" class="tab">
            <?php include 'assets/search-box-tabs/articlesTab.php'; ?>
        </div>
        <!-- Tab4: Media -->
        <div id="tab4" class="tab">
            <?php include 'assets/search-box-tabs/mediaTab.php'; ?>
        </div>
    </div>
</div>
