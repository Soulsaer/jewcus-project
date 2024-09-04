@extends('adminlte::page')

@section('content')
<section class="py-4">
    <div class="container-fluid mb-3">
        <h2>Games</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>101</h3>
                        <p>Total Products</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-game"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-gradient-success">
                    <div class="inner">
                        <h3>100000</h3>
                        <p>Total Customers</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-game"></i>
                    </div>
                    <a href="" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>123000</h3>
                        <p>Total Ticket Sale</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-game"></i>
                    </div>
                    <a href="" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection
@section('css')
<style type="text/css">
    .margin-button {
        margin-top: 2rem;
    }

    @media only screen and (max-width: 600px)  {
        .margin-button {
            margin-top: 0.5rem;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
@stop
@section('js') 
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script>
    $(function () {

        $('.input-daterange').datepicker({
            todayBtn:'linked',
            format:'yyyy-mm-dd',
            autoclose:true
        });

    });

    function getAnkData() {
        var game_id = $("#game_name").val();
        var session = $("#game_session").val();

        $.ajax({
            type:'POST',
            url:"",
            data:{"_token": "{{ csrf_token() }}", game_id:game_id, session:session},
            success:function(data){
                if (data.success == true) {
                    toastr.success(data.message);
                    var html = "";
                    $.each(data.data, function(key, value) {
                        html += '<div class="col-md-3"><div class="card"><div class="card-header"><b class="card-title">Ank '+key+'</b></div><div class="card-body"><p><b>Total Bids: </b><span>'+value.total_bid+'</span></p><p><b>Total Bid Amt: </b><span>'+value.total_bid_amount+'</span></p></div></div></div>';
                    });

                    $("#single_ank_data").html(html);
                }
                else {
                    toastr.success(data.message)
                }
            }
        });
    }

    function load_data(from_date = '', to_date = '') {
        $.ajax({
            type:'POST',
            url:"",
            data:{"_token": "{{ csrf_token() }}", from_date:from_date, to_date:to_date},
            success:function(data){
                if (data.success == true) {
                    toastr.success(data.message);

                    $("#total_deposit").html(data.data.totalDeposit);
                    $("#total_withdraw").html(data.data.totalWithdraw);
                    $("#total_pl").html(data.data.totalPL);
                    $("#result_pl").html(data.data.resultPL);
                }
                else {
                    toastr.success(data.message)
                }
            }
        });
    }
    

    $('#filter').click(function(){
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();

        if(from_date != ''){
            load_data(from_date, to_date);
        } else{
            alert('From Date is required');
        }

    });

    $('#refresh').click(function(){
        $('#from_date').val('');
        $('#to_date').val('');
        load_data();
    });
</script>
@stop
