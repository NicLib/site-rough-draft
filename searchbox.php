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

    <!-- Links under Searchbox -->
    <div class="searchLinks">
        <table class="table">
            <tbody>
                <tr>
                    <td><a href="https://anderson.on.worldcat.org/myaccount" target="_blank">My Library Account</a></td>
                    <td><a href="#" onclick="window.open('https://youtu.be/uipNoxYbH4Q', 'tutorial1', 'width=425, height=349, left=300, top=80, menubar=0, toolbar=0, scrollbars=1, location=0, directories=0, resizable=1, status=0'); return false">Search Tutorial</a></td>
                    <td><a href="http://anderson.worldcat.org/wcpa/courseReserves?action=courseReserveManager" target="_blank">Course Reserves</a></td>
                    <td><a href="http://anderson.on.worldcat.org/advancedsearch?databaseList=1708,1920,2513,197,2175,1978,1736,638,283,1279,4162" target="_blank">Advanced Search</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
