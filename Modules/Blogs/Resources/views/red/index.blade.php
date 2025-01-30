@extends('blogs::layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10  m-auto">
                <div class="card">
                    <form action="{{ route('blogs.store') }}" method="POST" id="__add_blog">
                        @csrf
                        <div id="messageFromServer"></div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" name="category" id="category" class="form-control" >
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#__add_blog').on('submit', function(event){
                event.preventDefault();
                // alert('Form Submitted');
                jQuery.ajax({
                    url: "{{ route('blogs.store') }}",
                    data: jQuery('#__add_blog').serialize(),
                    type: 'POST',

                    success: function(result){

                        $('#messageFromServer').css('display','block');
                        jQuery('#messageFromServer').html(result.storeSuccessfylly);

                        jQuery('#__add_blog').trigger('reset');


                    }
                })
            });
        });
    </script>
@endsection
