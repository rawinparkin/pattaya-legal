@extends('admin.admin_master')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Contact Page</h4>

                        <form method="post" action="{{ route('update.message') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $homemessage->id }}">


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Booking</label>
                                <div class="col-sm-10">
                                    <input name="title_booking" class="form-control" type="text"
                                        value="{{ $homemessage->title_booking }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Free
                                    Consultation</label>
                                <div class="col-sm-10">
                                    <input name="title_free" class="form-control" type="text"
                                        value="{{ $homemessage->title_free }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <!-- <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Name</label>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" type="text"
                                        value="{{ $homemessage->name }}">
                                </div>
                            </div> -->
                            <!-- end row -->

                            <!-- <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Email</label>
                                <div class="col-sm-10">
                                    <input name="email" class="form-control" type="text"
                                        value="{{ $homemessage->email }}">
                                </div>
                            </div> -->
                            <!-- end row -->

                            <!-- <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Subject</label>
                                <div class="col-sm-10">
                                    <input name="subject" class="form-control" type="text"
                                        value="{{ $homemessage->subject }}">
                                </div>
                            </div> -->
                            <!-- end row -->

                            <!-- <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Message</label>
                                <div class="col-sm-10">
                                    <input name="message" class="form-control" type="text"
                                        value="{{ $homemessage->message }}">
                                </div>
                            </div> -->
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Address</label>
                                <div class="col-sm-10">
                                    <input name="admin_address" class="form-control" type="text"
                                        value="{{ $homemessage->admin_address }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Phone
                                    Number</label>
                                <div class="col-sm-10">
                                    <input name="admin_phone" class="form-control" type="text"
                                        value="{{ $homemessage->admin_phone }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Eamil</label>
                                <div class="col-sm-10">
                                    <input name="admin_email" class="form-control" type="text"
                                        value="{{ $homemessage->admin_email }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Open Days</label>
                                <div class="col-sm-10">
                                    <input name="open_days" class="form-control" type="text"
                                        value="{{ $homemessage->open_days }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Close Days</label>
                                <div class="col-sm-10">
                                    <input name="close_days" class="form-control" type="text"
                                        value="{{ $homemessage->close_days }}">
                                </div>
                            </div>
                            <!-- end row -->




                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Contact Image</label>
                                <div class="col-sm-10">
                                    <input name="photo" class="form-control" type="file" id="image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg"
                                        src="{{ (!empty($homemessage->photo))? url( $homemessage->photo):url('upload/no_image.jpg') }}"
                                        alt="Card image cap" width="200px">
                                </div>
                            </div>
                            <!-- end row -->


                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                value="Update Contact Page">
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