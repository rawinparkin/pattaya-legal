@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Service Page </h4>

                        <form method="post" action="{{ route('update.service') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $homeservice->id }}">


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Service</label>
                                <div class="col-sm-10">
                                    <input name="title_service" class="form-control" type="text"
                                        value="{{ $homeservice->title_service }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Why Us</label>
                                <div class="col-sm-10">
                                    <input name="title_why" class="form-control" type="text"
                                        value="{{ $homeservice->title_why }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                    Description</label>
                                <div class="col-sm-10">
                                    <textarea name="short_title" class="form-control"
                                        rows="3">{{ $homeservice->short_title }}</textarea>

                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Button Title</label>
                                <div class="col-sm-10">
                                    <input name="button_title" class="form-control" type="text"
                                        value="{{ $homeservice->button_title }}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Card 1</label>
                                <div class="col-sm-10">
                                    <input name="title_card_1" class="form-control" type="text"
                                        value="{{ $homeservice->title_card_1 }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Card
                                    1</label>
                                <div class="col-sm-10">
                                    <textarea name="des_1" class="form-control"
                                        rows="3">{{ $homeservice->des_1 }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Card 2</label>
                                <div class="col-sm-10">
                                    <input name="title_card_2" class="form-control" type="text"
                                        value="{{ $homeservice->title_card_2 }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Card
                                    2</label>
                                <div class="col-sm-10">
                                    <textarea name="des_2" class="form-control"
                                        rows="3">{{ $homeservice->des_2 }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title Card 3</label>
                                <div class="col-sm-10">
                                    <input name="title_card_3" class="form-control" type="text"
                                        value="{{ $homeservice->title_card_3 }}">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Description Card
                                    3</label>
                                <div class="col-sm-10">
                                    <textarea name="des_3" class="form-control"
                                        rows="3">{{ $homeservice->des_3 }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->






                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                value="Update Home Service">
                        </form>



                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div>
</div>



@endsection