<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Form</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <div class="jumbotron">
        <form method="post">
      


        <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                {{ $errors->first('name') }}
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            
                <label  class="form-label">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone">
            </div>
            <label  class="form-label">Age</label>
            <select class="form-select" aria-label="Default select example" name="age">
                <option selected>Select Age</option>
                <option value="1">18</option>
                <option value="2">19</option>
                <option value="3">20</option>
                <option value="4">21</option>
                <option value="5">22</option>
                <option value="6">23</option>
                <option value="7">24</option>
            </select>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm password">
            </div>
            <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="2"></textarea>
            </div>
            <label  class="form-label">City</label>
            <select class="form-select" aria-label="Default select example" name="city">
                <option selected>Select City</option>
                <option value="1">Mumbai</option>
                <option value="2">Bhandup</option>
                <option value="3">Vashi</option>
                <option value="4">Viman nagar</option>
                <option value="5">Hadapsar</option>
                <option value="6">virar</option>
                <option value="7">thane</option>
            </select>

            <label  class="form-label">State</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select State</option>
                <option value="1">Maharashtra</option>
                <option value="2">delhi</option>
                <option value="3">UP</option>
                <option value="4">MP</option>
                
            </select>

            <label  class="form-label">Country</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Country</option>
                <option value="1">India</option>
                <option value="2">US</option>
                <option value="3">Russia</option>
                <option value="4">Japan</option>
                
            </select>

            <div class="mb-3">
                <label  class="form-label">Pincode</label>
                <input type="text" class="form-control" id="pincode" name="pincode"> 
            </div>

            <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="image" placeholder="Choose image" id="image" name="image">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>
              <div class="col-md-12 mb-2">
                  <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                      alt="preview image" style="max-height: 250px;">
                  </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>  
</body>
</html>