<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pretty File Name</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
  <br /><br />
  <h2>With Timestamp</h2>
  {{ $timestamp }}
  <hr />
  <h2>With Slugify</h2>
  {{ $slugify }}
  <hr />
  <h2>With Separator</h2>
  {{ $separator }}
  <hr />
  <h2>With Limit</h2>
  {{ $limit }}
  <hr />
  <h2>With Uppercase</h2>
  {{ $uppercase }}
  <hr />
  <h2>With Default Options</h2>
  {{ $filename }}
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>