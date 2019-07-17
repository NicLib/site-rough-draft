<?php include 'assets/variables.php'; ?>

<!-- New Searchbox code -->
<div class="container-fluid">
    <h1 class="search-title">Search the Catalog</h1>
    <form id="catalog-search" autocomplete="off">
        <select id="search-facet" class="form-control-lg">
            <option selected value="booksmedia">Books & Media</option>
            <option value="articles">Articles</option>
            <option value="allfmts">All Formats</option>
        </select>
        <input name="queryString" id="queryString" class="form-control-lg" type="text" placeholder="Search by Title, Author, Subject or other Keywords" aria-label="Text input with dropdown button">
        <button type="submit" class="btn-lg">Search</button>
    </form>
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
