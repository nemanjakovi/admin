<nav class="navbar navbar-light bg-light">
    <form class="form-inline" style="display:flex;  margin-bottom:5px" method="POST" action="index.php?page=dashboard">
        <input class="form-control mr-sm-2 " type="text" name="filter_name" value="" placeholder="First Name" aria-label="Filter">
        <input class="form-control mr-sm-2" type="text" name="filter_last_name" value="" placeholder="Last Name" aria-label="Search">
        <input class="form-control mr-sm-2 " type="date" name="from_date" value="" placeholder="From yyyy/mm/dd   " aria-label="Search">
        <input class="form-control mr-sm-2 " type="date" name="to_date" value="" placeholder="To yyyy/mm/dd " aria-label="Search">
        <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
        <label class="form-check-label mr-2" for="male" id="male">
            Male
        </label>

        <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
        <label class="form-check-label mr-3" for="female">
            Female
        </label>

        <button class="btn btn-primary btn-sm my-2 my-sm-0" name="filter" type="submit">Filter</button>
    </form>
</nav>