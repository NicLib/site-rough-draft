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
            <form class="searchForm" action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                <label class="sr-only" for="queryString">Search Term</label>
                <input placeholder="Search the Nicholson Library Catalog (tab1)" class="searchTerm" type="text" name="queryString">
                <label class="sr-only" for="scope">Library Select</label>
                <select class="searchScope" name="scope">
                    <option selected value>Libraries Worldwide</option>
                    <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                </select>
                <button class="searchSubmit" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <!-- Tab2: Books -->
        <div id="tab2" class="tab">
            <form class="searchForm" action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                    <label class="sr-only" for="queryString">Search Term</label>
                    <input placeholder="Search the Nicholson Library Catalog (tab2)" class="searchTerm" type="text" name="queryString">
                    <label class="sr-only" for="scope">Library Select</label>
                    <select class="searchScope" name="scope">
                        <option selected value>Libraries Worldwide</option>
                        <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                    </select>
                <button class="searchSubmit" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <!-- Tab3: Articles -->
        <div id="tab3" class="tab">
            <form class="searchForm" action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                    <label class="sr-only" for="queryString">Search Term</label>
                    <input placeholder="Search the Nicholson Library Catalog (tab3)" class="searchTerm" type="text" name="queryString">
                    <label class="sr-only" for="scope">Library Select</label>
                    <select class="searchScope" name="scope">
                        <option selected value>Libraries Worldwide</option>
                        <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                    </select>
                <button class="searchSubmit" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <!-- Tab4: Media -->
        <div id="tab4" class="tab">
            <form class="searchForm" action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                    <label class="sr-only" for="queryString">Search Term</label>
                    <input placeholder="Search the Nicholson Library Catalog (tab4)" class="searchTerm" type="text" name="queryString">
                    <label class="sr-only" for="scope">Library Select</label>
                    <select class="searchScope" name="scope">
                        <option selected value>Libraries Worldwide</option>
                        <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                    </select>
                <button class="searchSubmit" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
