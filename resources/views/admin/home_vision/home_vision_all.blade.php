@extends('admin.admin_master')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Page </h4>

                        <form method="post" action="{{ route('update.vision') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $homevision->id }}">


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Welcome</label>
                                <div class="col-sm-10">
                                    <input name="title_welcome" class="form-control" type="text"
                                        value="{{ $homevision->title_welcome }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Sub Title</label>
                                <div class="col-sm-10">
                                    <input name="sub_title" class="form-control" type="text"
                                        value="{{ $homevision->sub_title }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input name="short_title" class="form-control" type="text"
                                        value="{{ $homevision->short_title }}">
                                </div>
                            </div>
                            <!-- end row -->




                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Card 1</label>
                                <div class="col-sm-10">
                                    <input name="title_card_1" class="form-control" type="text"
                                        value="{{ $homevision->title_card_1 }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Card
                                    1</label>
                                <div class="col-sm-10">
                                    <textarea name="des_1" class="form-control"
                                        rows="3">{{ $homevision->des_1 }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Card 2</label>
                                <div class="col-sm-10">
                                    <input name="title_card_2" class="form-control" type="text"
                                        value="{{ $homevision->title_card_2 }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Card
                                    2</label>
                                <div class="col-sm-10">
                                    <textarea name="des_2" class="form-control"
                                        rows="3">{{ $homevision->des_2 }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Card 3</label>
                                <div class="col-sm-10">
                                    <input name="title_card_3" class="form-control" type="text"
                                        value="{{ $homevision->title_card_3 }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Card
                                    3</label>
                                <div class="col-sm-10">
                                    <textarea name="des_3" class="form-control"
                                        rows="3">{{ $homevision->des_3 }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->




                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Years of
                                    Expirience</label>
                                <div class="col-sm-10">
                                    <input name="year_exp" class="form-control" type="text"
                                        value="{{ $homevision->year_exp }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Expirience
                                    Wording</label>
                                <div class="col-sm-10">
                                    <input name="exp_title" class="form-control" type="text"
                                        value="{{ $homevision->exp_title }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Vision Image </label>
                                <div class="col-sm-10">
                                    <input name="photo" class="form-control" type="file" id="image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg"
                                        src="{{ (!empty($homevision->photo))? url( $homevision->photo):url('upload/no_image.jpg') }}"
                                        alt="Card image cap" width="200px">
                                </div>
                            </div>
                            <!-- end row -->


                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                value="Update About Page">
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