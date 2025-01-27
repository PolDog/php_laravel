<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="employee_form" id="employee_form" method="post" action="{{url('store-from')}}">
        @csrf
        <div class="form_group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required="true">
        </div>
        <div class="form_group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control" required="true">
        </div>
        <div class="form_group">
            <label for="email">Description</label>
            <input type="email" id="email" name="email" class="form-control" required="true">
        </div>
        <div class="form_group">
            <label for="work_data">workData</label>
            <textarea name="workData"  class="form-control" required="true"></textarea>
        </div>
        <div class="form_group">
            <label for="json_text">JSON Data</label>
            <textarea name="json_text"  class="form-control" required="true">
            {
                "email": "heyjson@example.com",
                "name": "JSON",
                "twitter": "@callmeJSON007",
                "github": "helloworldjsonhere"
            }
            </textarea>
        </div>
        <button type="submit" class="btn btn_primary">Submit</button>
    </form>
</body>
</html>