@extends('shared.layout')

@section('content')

<style>
    .question{
        border: 1px solid #eeeeee;
        background-color: #eeeeee;
        padding: 12px;
        border-radius: 12px;
    }

    .question span{
        font-size: 10px;
        display: block;
        padding-top: 12px;
        text-align: right;
    }
</style>

<section class="section">
    <div class="container">
        <h1 class="text-center">Lansman Soruları</h1>
        <div id="questions-holder">
        
        </div>
    </div>
</section>

@endsection

@push('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        var questionsHolder = $('#questions-holder');
        var lastID = 0;

        setInterval(function(){
            $.ajax({
                type: 'POST',
                url: '{{ route("api.launch-questions") }}',
                data: {lastID : lastID},
                dataType: 'json',
                success: function(response){
                    if(response.length > 0){
                        $.each(response, function(){
                            questionsHolder.prepend('<p class="question"><strong>' + this.user.name + ':</strong> '+ this.content +'<br><span>' + this.created_at + '</span></p>');
                        });

                        lastID = response[response.length - 1].id;
                    }
                },
                error: function(err){
                    console.log(err.responseText);
                }
            });
        },1200);
    });
</script>

@endpush