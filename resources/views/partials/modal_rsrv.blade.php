<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true" usePopper="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reservationModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <dl class="row">
          <dt class="col-sm-3">Room</dt>
          <dd class="col-sm-9" id="room"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Check-in</dt>
          <dd class="col-sm-9" id="checkin"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Check-out</dt>
          <dd class="col-sm-9" id="checkout"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Status</dt>
          <dd class="col-sm-9">
            @if($isAdminModal === true)
              <div class="btn-group dropright">
                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                  <span id="status"></span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#" data-value="0">New</a>
                  <a class="dropdown-item" href="#" data-value="1">Cancelled</a>
                  <a class="dropdown-item" href="#" data-value="2">Confirmed</a>
                </div>
              </div>
            @else
              <span id="status"></span>
            @endif
          </dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3"># of guests</dt>
          <dd class="col-sm-9" id="number-of-guests"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Card number (last 4 digits)</dt>
          <dd class="col-sm-9" id="card-number"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Address</dt>
          <dd class="col-sm-9">
            <span id="street"></span><br>
            <span id="city"></span><br>
            <span id="postal-code"></span><br>
            <span id="country"></span>
          </dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Phone</dt>
          <dd class="col-sm-9" id="phone"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Passport</dt>
          <dd class="col-sm-9" id="passport"></dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        @if($isAdminModal === true)
          <button data-dismiss="modal" id="submit" type="button" class="btn btn-primary" data-id="" data-status-value="">Save changes</button>
        @endif
      </div>
    </div>
  </div>
</div>
<script>
  $(function() {
    $('#reservationModal').on("show.bs.modal", function (e) {
      $("#reservationModalLabel").html($(e.relatedTarget).data('name'));
      $("#room").html($(e.relatedTarget).data('room'));
      $("#checkin").html($(e.relatedTarget).data('checkin'));
      $("#checkout").html($(e.relatedTarget).data('checkout'));
      $("#status").html($(e.relatedTarget)[0].getAttribute('data-status'));
      $("#number-of-guests").html($(e.relatedTarget).data('number-of-guests'));
      $("#card-number").html($(e.relatedTarget).data('card-number'));
      $("#street").html($(e.relatedTarget).data('street'));
      $("#city").html($(e.relatedTarget).data('city'));
      $("#country").html($(e.relatedTarget).data('country'));
      $("#postal-code").html($(e.relatedTarget).data('postal-code'));
      $("#phone").html($(e.relatedTarget).data('phone'));
      $("#passport").html($(e.relatedTarget).data('passport'));
      $("#submit").attr('data-id', $(e.relatedTarget).data('id'));

      addBtnClass(".btn-group .btn", "btn", $(e.relatedTarget)[0].getAttribute('data-status'), $(e.relatedTarget).data('status-value'));
    });
  });

  $(document).ready(function(){
    $('.dropdown-toggle').dropdown()
    $(".dropdown-menu a").click(function(){
      $("#status").text($(this).text());
      $("#status").val($(this).text());
      addBtnClass(".btn-group .btn", "btn", $(this).text(), $(this).data('value'));
    });
  }); 
    
  function addBtnClass (destination, dest_type, status, value) {
    $("#submit").attr('data-status-value', value);
    switch(status) {
      case "New":
        $(destination).removeClass(dest_type + "-secondary");
        $(destination).removeClass(dest_type + "-success");
        $(destination).addClass(dest_type + "-primary");
        break;
      case "Cancelled":
        $(destination).removeClass(dest_type + "-primary");
        $(destination).removeClass(dest_type + "-success");
        $(destination).addClass(dest_type + "-secondary");
        break;
      case "Confirmed":
        $(destination).removeClass(dest_type + "-primary");
        $(destination).removeClass(dest_type + "-secondary");
        $(destination).addClass(dest_type + "-success");
        break;
    }
  }

  $("#submit").click(function() {
    $("#reservationModal").modal("hide"); 
    
    let id  = $(this).data("id");
    let status_value = $(this).data("status-value");
    let status_name = $("#status").text();
    let _url = '/admin/updateStatus/' + id + '/' + status_value;

    $.ajax({
      url: _url,
      type: "GET",
      success: function(data) {
        console.log('status updated');
        addBtnClass("#rsrv-" + id, "table", status_name, status_value);
        $("#rsrv-" + id + " .status-name").text(status_name);
        $("#view-" + id).attr("data-status-value", status_value);
        $("#view-" + id).attr("data-status", status_name);
      }
    });
  });
</script>