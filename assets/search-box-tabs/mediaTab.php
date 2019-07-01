<form class="searchForm" action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET" autocomplete="off">
        <label class="sr-only" for="queryString">Search Term</label>
        <input id="query4" placeholder="Search the Nicholson Library Catalog (Media Tab)" class="searchTerm searchbox" type="text" name="queryString">
        <input type="hidden" name="databaseList" value="<?php echo $media_database_list; ?>">
        <label class="sr-only" for="scope">Library Select</label>
        <select class="searchScope" name="scope">
            <option selected value>Libraries Worldwide</option>
            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
        </select>
        <button class="searchSubmit" type="submit"><i class="fas fa-search"></i></button>
</form>
