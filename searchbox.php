<?php include 'assets/variables.php'; ?>

<!-- Searchbox Tabs -->
<div class="tabs">
    <div class="tab-links">
        <a href="#tab1" class="selected"><h2 class="fas fa-school"><br/><span class="tab-label">Tab 1</span></h2></a>
        <a href="#tab2" class=""><h2 class="fas fa-book"><br/><span class="tab-label">Tab 2</span></h2></a>
        <a href="#tab3" class=""><h2 class="far fa-newspaper"><br/><span class="tab-label">Tab 3</span></h2></a>
        <a href="#tab4" class=""><h2 class="fas fa-video"><br/><span class="tab-label">Tab 4</span></h2></a>
    </div>

    <!-- New Searchbox -->
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">

                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab1)" class="" type="text" name="queryString">


                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>


                        <button class="" type="submit"><i class="fas fa-search"></i></button>


            </form>
        </div>
        <div id="tab2" class="tab">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">


                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab2)" class="" type="text" name="queryString">


                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>


                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>

            </form>
        </div>
        <div id="tab3" class="tab">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">

                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab3)" class="" type="text" name="queryString">

                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>

                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>

            </form>
        </div>
        <div id="tab4" class="tab">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">

                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab4)" class="" type="text" name="queryString">

                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>

                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>

            </form>
        </div>
    </div>
</div>
