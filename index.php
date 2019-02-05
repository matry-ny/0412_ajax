<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JS App</title>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>
<body>
<script>
  $.ajax({
    type: 'get',
    url: 'http://api.0412.local/products/get-list',
    headers: {
      "Auth-Key": "$2y$10$qAHkEqnUZ7SIZKLOUPAPLuV/cQ7onOzHS3qnnpULCC2CY/AibajS6"
    },
    data: {
      test: 123
    },
    success: function (data) {
      console.log(data);
    }
  });
</script>
</body>
</html>