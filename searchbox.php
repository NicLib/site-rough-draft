<?php include 'assets/variables.php'; ?>

<!-- Searchbox Tabs -->
<div class="tabs">
    <!-- New Searchbox code -->
    <div class="jumbotron-fluid">
        <div class="container-fluid">
            <form id="catalog-search" autocomplete="off">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <select id="search-facet" class="form-control">
                            <option selected value="booksmedia">Books & Media</option>
                            <option value="articles">Articles</option>
                            <option value="allfmts">All Formats</option>
                        </select>
                    </div>
                    <input name="queryString" id="queryString" type="text" placeholder="Search catalog" class="form-control" aria-label="Text input with dropdown button">
                    <button type="submit">Search</button>
                </div>
            </form>
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
