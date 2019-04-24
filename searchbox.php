<?php include "assets/variables.php"; ?>

<!-- New Searchbox -->
<form action="https://anderson.on.worldcat.org/search?" target="_blank" method="GET">
    <div class="row">
        <div class="col-9">
            <label class="sr-only" for="queryString">Search Term</label>
            <input placeholder="Search the Nicholson Library Catalog" class="form-control form-control-lg" type="text" name="queryString">
        </div>
        <div class="col-2">
            <label class="sr-only" for="scope">Library Select</label>
            <select class="custom-select form-control form-control-lg" name="scope">
                <option selected value>Libraries Worldwide</option>
                <option value="<?php echo $oclc_niclib_scope; ?>">Nicholson Library</option>
            </select>
        </div>
        <div class="col">
            <button class="btn btn-primary btn-lg" type="submit">Search</button>
        </div>
    </div>
</form>
