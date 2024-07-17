@php
$homemessage = App\Models\HomeMessage::find(1);
@endphp







<section class="ftco-consultation ftco-section ftco-no-pb img"
    style="background-image:url('{{ asset($homemessage->photo) }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
                <span class="subheading">{{ $homemessage->title_booking }}</span>
                <h2 class="mb-4">{{ $homemessage->title_free }}</h2>



                <form id="myForm" method="post" action="{{ route('store.message') }}" class="consultation">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="customer_name" class="form-control"
                            placeholder="{{  $homemessage->name }}" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type="email" name="customer_email" class="form-control"
                            placeholder="{{  $homemessage->email }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <input type="text" name="customer_subject" class="form-control"
                            placeholder="{{  $homemessage->subject }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <textarea name="customer_message" cols="30" rows="7" class="form-control"
                            placeholder="{{  $homemessage->message }}"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{  $homemessage->button_title }}" class="btn btn-dark py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#myForm').validate({
        rules: {
            customer_name: {
                required: true,
            },
            customer_email: {
                required: true,
            },
            customer_subject: {
                required: true,
            },
            customer_message: {
                required: true,
            },
        },
        messages: {
            customer_name: {
                required: 'Please Enter Name',
            },
            customer_email: {
                required: 'Please Enter Email',
            },
            customer_subject: {
                required: 'Please Enter Subject',
            },
            customer_message: {
                required: 'Please Enter Message',
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
    });
});
</script>