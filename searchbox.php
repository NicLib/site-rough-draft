<?php include 'assets/variables.php'; ?>

<!-- Searchbox Tabs -->
<div class="tabs">
    <div class="tab-links">
        <a href="#tab1" class="selected"><h2 class=""><br/><span class="tab-label">Tab 1</span></h2></a>
        <a href="#tab2" class=""><h2 class=""><br/><span class="tab-label">Tab 2</span></h2></a>
        <a href="#tab3" class=""><h2 class=""><br/><span class="tab-label">Tab 3</span></h2></a>
        <a href="#tab4" class=""><h2 class=""><br/><span class="tab-label">Tab 4</span></h2></a>
    </div>

    <!-- New Searchbox -->
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                <div class="row">
                    <div class="col-8">
                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab1)" class="form-control form-control-lg" type="text" name="queryString">
                    </div>
                    <div class="col-3">
                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="custom-select form-control form-control-lg" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div id="tab2" class="tab">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                <div class="row">
                    <div class="col-8">
                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab2)" class="form-control form-control-lg" type="text" name="queryString">
                    </div>
                    <div class="col-3">
                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="custom-select form-control form-control-lg" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div id="tab3" class="tab">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                <div class="row">
                    <div class="col-8">
                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab3)" class="form-control form-control-lg" type="text" name="queryString">
                    </div>
                    <div class="col-3">
                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="custom-select form-control form-control-lg" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div id="tab4" class="tab">
            <form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
                <div class="row">
                    <div class="col-8">
                        <label class="sr-only" for="queryString">Search Term</label>
                        <input placeholder="Search the Nicholson Library Catalog (tab4)" class="form-control form-control-lg" type="text" name="queryString">
                    </div>
                    <div class="col-3">
                        <label class="sr-only" for="scope">Library Select</label>
                        <select class="custom-select form-control form-control-lg" name="scope">
                            <option selected value>Libraries Worldwide</option>
                            <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
