@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Footer Page </h4>

                        <form method="post" action="{{ route('update.footer') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $homefooter->id }}">


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">White Title</label>
                                <div class="col-sm-10">
                                    <input name="white_title" class="form-control" type="text"
                                        value="{{ $homefooter->white_title }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Yellow Title</label>
                                <div class="col-sm-10">
                                    <input name="yellow_title" class="form-control" type="text"
                                        value="{{ $homefooter->yellow_title }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                    Description</label>
                                <div class="col-sm-10">
                                    <textarea name="short_title" class="form-control"
                                        rows="3">{{ $homefooter->short_title }}</textarea>

                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input name="twitter" class="form-control" type="text"
                                        value="{{ $homefooter->twitter }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input name="facebook" class="form-control" type="text"
                                        value="{{ $homefooter->facebook }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input name="instagram" class="form-control" type="text"
                                        value="{{ $homefooter->instagram }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title 2</label>
                                <div class="col-sm-10">
                                    <input name="title_2" class="form-control" type="text"
                                        value="{{ $homefooter->title_2 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 1</label>
                                <div class="col-sm-10">
                                    <input name="topic_1" class="form-control" type="text"
                                        value="{{ $homefooter->topic_1 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 2</label>
                                <div class="col-sm-10">
                                    <input name="topic_2" class="form-control" type="text"
                                        value="{{ $homefooter->topic_2 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 3</label>
                                <div class="col-sm-10">
                                    <input name="topic_3" class="form-control" type="text"
                                        value="{{ $homefooter->topic_3 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 4</label>
                                <div class="col-sm-10">
                                    <input name="topic_4" class="form-control" type="text"
                                        value="{{ $homefooter->topic_4 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 5</label>
                                <div class="col-sm-10">
                                    <input name="topic_5" class="form-control" type="text"
                                        value="{{ $homefooter->topic_5 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 6</label>
                                <div class="col-sm-10">
                                    <input name="topic_6" class="form-control" type="text"
                                        value="{{ $homefooter->topic_6 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 7</label>
                                <div class="col-sm-10">
                                    <input name="topic_7" class="form-control" type="text"
                                        value="{{ $homefooter->topic_7 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Topic 8</label>
                                <div class="col-sm-10">
                                    <input name="topic_8" class="form-control" type="text"
                                        value="{{ $homefooter->topic_8 }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Question</label>
                                <div class="col-sm-10">
                                    <input name="title_question" class="form-control" type="text"
                                        value="{{ $homefooter->title_question }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Hours</label>
                                <div class="col-sm-10">
                                    <input name="title_hours" class="form-control" type="text"
                                        value="{{ $homefooter->title_hours }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Open</label>
                                <div class="col-sm-10">
                                    <input name="title_open" class="form-control" type="text"
                                        value="{{ $homefooter->title_open }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Close</label>
                                <div class="col-sm-10">
                                    <input name="title_close" class="form-control" type="text"
                                        value="{{ $homefooter->title_close }}">
                                </div>
                            </div>
                            <!-- end row -->




                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                value="Update Footer Service">
                        </form>



                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div>
</div>



@endsection