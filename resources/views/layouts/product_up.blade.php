<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Responsive Form with Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body{
        /* background-color: rgb(224, 227, 218); */
    }
    .form-control1{
        width: 50vh;
    }
    .form-control2{
        width: 35vh;
    }
    .form-control3{
        width: 20vh;
    }
    .form-control4{
        width: 50vh;
        height: 30vh;
    }
    .container2{
        height: 45vh;
        width: 45vh;
    }
</style>
       {{-- <!-- Input Fields -->
                    <div class="col-md-6">
                    <!-- First Row -->
                    <div class="form-group">
                        <label for="field1">Field 1</label>
                        <input type="text" class="form-control1" id="field1" name="field1">
                    </div>

                    <div class="form-group">
                        <label for="field1">Field 1</label>
                        <input type="text" class="form-control2" id="field1" name="field1">
                    </div>
                    <!-- Add more input fields as needed -->
                    <!-- ... -->
                    <!-- Last Row -->
                    <div class="form-group">
                        <label for="field21">Field 21</label>
                        <input type="text" class="form-control3" id="field21" name="field21">
                    </div>
                    </div> --}}
<body>
<div class="d-flex flex-row">
    <form action="{{route('/store')}}" method="POST">
        @csrf
    <div class="container p-3 m-3 shadow rounded card-body">

            <div class=" mt-5">

                <div class="row">
                        <div class="d-flex flex-row" style="margin-right: 1vh;">
                            {{-- product_name --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control1" id="product_name" name="product_name">
                            </div>
                            {{-- o_rate --}}
                            <div class="form-group ml-3 mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control3" id="old_rate" name="old_rate">
                            </div>
                            {{-- n_rate --}}
                            <div class="form-group ml-3 mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control3" id="new_rate" name="new_rate">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            {{-- color --}}
                            <div class="form-group ml-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="color" name="color">
                            </div>
                            {{-- material --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="material" name="material">
                            </div>
                            {{-- s_length --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control3" id="saree_length" name="saree_length">
                            </div>
                            {{-- b_length --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control3" id="blous_length" name="blous_length">
                            </div>
                        </div>
                        <div  class="d-flex flex-row">
                            {{-- w_type --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="work_type" name="work_type">
                            </div>
                            {{-- s_type --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="stich_type" name="stich_type">
                            </div>
                            {{-- p_type --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="product_type" name="product_type">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            {{-- p_work_type --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control1" id="product_work_type" name="product_work_type">
                            </div>
                            {{-- p_m_type --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control1" id="product_method_type" name="product_method_type">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="d-block flex-row">
                                {{-- p_details_1 --}}
                                <div class="form-group mr-3">
                                    <label for="field1">Field 1</label>
                                    <input type="text" class="form-control1" id="product_details_1" name="product_details_1">
                                </div>
                                {{-- p_details_2 --}}
                                <div class="form-group mr-3">
                                    <label for="field1">Field 1</label>
                                    <input type="text" class="form-control1" id="product_details_2" name="product_details_2">
                                </div>
                                {{-- p_details_3 --}}
                                <div class="form-group mr-3">
                                    <label for="field1">Field 1</label>
                                    <input type="text" class="form-control1" id="product_details_3" name="product_details_3">
                                </div>
                                {{-- p_details_4 --}}
                                <div class="form-group mr-3">
                                    <label for="field1">Field 1</label>
                                    <input type="text" class="form-control1" id="product_details_4" name="product_details_4">
                                </div>
                                {{-- p_details_5 --}}
                                <div class="form-group mr-3">
                                    <label for="field1">Field 1</label>
                                    <input type="text" class="form-control1" id="product_details_5" name="product_details_5">
                                </div>
                            </div>
                            <div>
                                {{-- p_content --}}
                                <div class="form-group mr-3">
                                    <label for="field1">Field 1</label>
                                    <input type="text" class="form-control4" id="product_content" name="product_content">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            {{-- m_color --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="munthi_color" name="munthi_color">
                            </div>
                            {{-- b_color --}}
                            <div class="form-group mr-3">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control2" id="body_color" name="body_color">
                            </div>
                        </div>
                </div>



            </div>

    </div>

   <div class="d-block flex-column">
            <div class="container2 p-3 m-3 shadow rounded card-body">
                {{-- main_image --}}
                <div class="form-group">
                    <label for="imageUpload1">Image Upload 1</label>
                    <input type="file" class="form-control-file" id="product_img" name="product_img">
                </div>
            </div>
            <div class="container2 p-3 m-3 shadow rounded card-body">
                    <!-- Image Upload Fields -->
                    <div class="d-flex flex-row">
                        {{-- s_img_1 --}}
                        <div class="form-group">
                            <label for="imageUpload4">Image Upload 4</label>
                            <input type="file" class="form-control-file" id="product_img_1" name="product_img_1">
                        </div>
                         {{-- s_img_2 --}}
                        <div class="form-group">
                            <label for="imageUpload4">Image Upload 4</label>
                            <input type="file" class="form-control-file" id="product_img_2" name="product_img_2">
                        </div>
                         {{-- s_img_3 --}}
                        <div class="form-group">
                            <label for="imageUpload4">Image Upload 4</label>
                            <input type="file" class="form-control-file" id="product_img_3" name="product_img_3">
                        </div>
                    </div>
            </div>
   </div>

     <!-- Submit Button -->
     <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- Bootstrap JS and jQuery (for Bootstrap functionalities) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
