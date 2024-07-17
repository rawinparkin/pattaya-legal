@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Header Page </h4>

                        <form method="post" action="{{ route('update.header') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $homeheader->id }}">


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Welcome</label>
                                <div class="col-sm-10">
                                    <input name="title_welcome" class="form-control" type="text"
                                        value="{{ $homeheader->title_welcome }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Before
                                    Rotate</label>
                                <div class="col-sm-10">
                                    <input name="title_2" class="form-control" type="text"
                                        value="{{ $homeheader->title_2 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Rotate</label>
                                <div class="col-sm-10">
                                    <input name="title_rotate" class="form-control" type="text"
                                        value="{{ $homeheader->title_rotate }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Title </label>
                                <div class="col-sm-10">
                                    <textarea name="long_title" class="form-control"
                                        rows="3">{{ $homeheader->long_title }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Button Title</label>
                                <div class="col-sm-10">
                                    <input name="button_title" class="form-control" type="text"
                                        value="{{ $homeheader->button_title }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Header Image </label>
                                <div class="col-sm-10">
                                    <input name="photo" class="form-control" type="file" id="image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg"
                                        src="{{ (!empty($homeheader->photo))? url( $homeheader->photo):url('upload/no_image.jpg') }}"
                                        alt="Card image cap" width="200px">
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                value="Update Home Header">
                        </form>



                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>

@endsection