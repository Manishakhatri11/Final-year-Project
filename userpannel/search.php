<!DOCTYPE html>
<html>
<head>
    <title>Search Function Example</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form method="GET" action="search.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="query" placeholder="Search...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <!-- Display search results here -->
        <div id="searchResults"></div>
    </div>
</body>
</html>
