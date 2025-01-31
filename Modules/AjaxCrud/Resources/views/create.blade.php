@extends('ajaxcrud::layouts.master')

@section('ajaxContent')
    <div class="section">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card mt-5">
                    <form action="" id="formDataInput">
                        <input type="text" id="name" name="name" class="form-control">
                        <input type="text" id="email" name="email" class="form-control">
                        <input type="file" id="file" name="file" class="form-control">
                        <button type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#formDataInput').submit(function(event){
                event.preventDefault();

                var form = $('$formDataInput')[0];
                var data = new FormData(form);
                $('#btnSubmit').prop('disabled',true);

                $.ajax({
                    url: "{{ route('ajaxCrud.store') }}",
                    type: "post",
                    data: data,
                    processData: false,
                    contentType: false,

                    success: function(data){

                    },error:function(e){
                        
                    }
                });

            });
        });
    </script>
@endsection