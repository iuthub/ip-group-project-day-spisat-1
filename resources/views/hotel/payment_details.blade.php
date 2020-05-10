@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="offset-md-3 col-md-6 window">
          <form method="post" action="{{ route('addPaymentDetails') }}">
            @csrf
            <p>
                <label>First name:</label> 
                <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p><label>Last name:</label> 
                <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p>
                <label>Card number:</label> 
                <input type="text" class="form-control" name="card_number"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p>
                <label>CVC: </label>
                <input type="text" class="form-control" name="cvc"/>
                <span class="error" style="color: red;  font-size: 9px"></span></p>
            <p>
                <label>Street:</label> 
                <input type="text" class="form-control" name="street"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p>
                <label>City:</label> 
                <input type="text" class="form-control" name="city"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p>
                <label>Country:</label> 
                <input type="text" class="form-control" name="country"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p>
                <label>Postal code:</label> 
                <input type="text" class="form-control" name="postal_code"/>
                <span class="error" style="color: red;  font-size: 9px"></span></p>
            <p>
                <label>Phone:</label> 
                <input type="text" class="form-control" name="phone"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>
            <p>
                <label>Passport number:</label> 
                <input type="text" class="form-control" name="passport_number"/>
                <span class="error" style="color: red;  font-size: 9px"></span>
            </p>

            <input type="hidden" name="checkin" value="{{ $checkin }}">
            <input type="hidden" name="checkout" value="{{ $checkout }}">
            <input type="hidden" name="room_id" value="{{ $room_id }}">
            <input type="hidden" name="number_of_guests" value="{{ $number_of_guests }}">

            <input type="Submit" class="btn-submit btn btn-success" value="Book" />
          </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        
        const card_number_pattern = new RegExp('^[\\d]{16}$');
        const cvc_pattern = new RegExp('^[\\d]{3}$');
        const city_pattern = new RegExp('^[\\w\\s]{3,}$');
        const postal_code_pattern = new RegExp('^[\\d]{7}$');
        const phone_pattern = new RegExp('^\\+998-[\\d]{2}-[\\d]{7}$');
        const passport_number_pattern = new RegExp('^[a-zA-Z]{2}[0-9]{7}$');
        const alpha_num_pattern = new RegExp('[\\w]+');
        const required_msg = "Required";

        $(".btn-submit").click(function(e){

            $(".error").css('display', 'none');
            let isOkey = true;

            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            var _token = $("input[name='_token']").val();
            var first_name = $("input[name='first_name']").val();
            var last_name = $("input[name='last_name']").val();
            var card_number = $("input[name='card_number']").val();
            var cvc = $("input[name='cvc']").val();
            var street = $("input[name='street']").val();
            var city = $("input[name='city']").val();
            var country = $("input[name='country']").val();
            var postal_code = $("input[name='postal_code']").val();
            var phone = $("input[name='phone']").val();
            var passport_number = $("input[name='passport_number']").val();
            var checkin = $("input[name='checkin']").val();
            var checkout = $("input[name='checkout']").val();
            var room_id = $("input[name='room_id']").val();
            var number_of_guests = $("input[name='number_of_guests']").val();
            
            
            isOkey = isRequiredValidation($("input[name='first_name']")) ? isOkey : false;
            isOkey = isRequiredValidation($("input[name='last_name']")) ? isOkey : false;
            isOkey = isRequiredValidation($("input[name='street']")) ? isOkey : false;
            isOkey = isRequiredValidation($("input[name='country']")) ? isOkey : false;
            if(isRequiredValidation($("input[name='card_number']"))) {
                if(!card_number_pattern.test(card_number)) {
                    generateErrorMsg($("input[name='card_number']"), "Card number should consist of 16 digits");
                    isOkey = false;
                }
            }

            if(isRequiredValidation($("input[name='cvc']"))) {
                if(!cvc_pattern.test(cvc)) {
                    generateErrorMsg($("input[name='cvc']"), "CVC should consist of 3 digits");
                    isOkey = false;
                }
            }

            if(isRequiredValidation($("input[name='postal_code']"))) {
                if(!postal_code_pattern.test(postal_code)) {
                    generateErrorMsg($("input[name='postal_code']"), "Postal code should consist of 7 digits");
                    isOkey = false;
                }
            }

            if(isRequiredValidation($("input[name='city']"))) {
                if(!city_pattern.test(city)) {
                    generateErrorMsg($("input[name='city']"), "City should contain words only");
                    isOkey = false;
                }
            }
            
            if(isRequiredValidation($("input[name='phone']"))) {
                if(!phone_pattern.test(phone)) {
                    generateErrorMsg($("input[name='phone']"), "Phone number should be in format +998-**-*******");
                    isOkey = false;
                }
            }


            if(isRequiredValidation($("input[name='passport_number']"))) {
                if(!passport_number_pattern.test(passport_number)) {
                    generateErrorMsg($("input[name='passport_number']"), "Passport number should be in format AA1234567");
                    isOkey = false;
                }
            }
            
            if(isOkey === true) {
                $.ajax({
                    url: "{{ route('addPaymentDetails') }}",
                    type:'POST',
                    data: {_token:_token, 
                        first_name:first_name, 
                        last_name:last_name, 
                        card_number:card_number,
                        cvc:cvc,
                        street:street,
                        city:city,
                        country:country,
                        postal_code:postal_code,
                        phone:phone,
                        passport_number:passport_number,
                        checkin:checkin,
                        checkout:checkout,
                        room_id:room_id,
                        number_of_guests:number_of_guests
                    },
                    success: function(response) {
                        if(!response.error){
                            console.log('successfull payment');
                            window.location.replace("confirm_booking/" + response.success.id);

                        } else {
                            console.log('booking error');
                        }
                    }
                });
            }
        }); 


        function generateErrorMsg(e, msg) {
            $(e).next().text(msg);
            $(e).next().css('display', 'block');
        }

        function isRequiredValidation(e) {
            if(!e.val()) {
                generateErrorMsg(e, required_msg);
                return false;
            }
            return true;
        }
    });
</script>
@endsection