<!-- Modal -->
<div class="modal fade" id="roomsModal" tabindex="-1" role="dialog" aria-labelledby="roomsModalLabel" aria-hidden="true" usePopper="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roomsModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <dl class="row">
          <div class="col-sm-12">
            <img src="" alt="" id="image" class="img-fluid text-center" style="display: block; margin: auto;">
          </div>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Price</dt>
          <dd class="col-sm-9" id="price"></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Desription</dt>
          <dd class="col-sm-9" id="description"></dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(function() {
    $('#roomsModal').on("show.bs.modal", function (e) {

      $("#roomsModalLabel").html($(e.relatedTarget).data('name'));
      $("#image").attr('src', $(e.relatedTarget).data('image'));
      $("#price").html($(e.relatedTarget).data('price'));
      $("#description").html($(e.relatedTarget).data('description'));
      // $("#status").html($(e.relatedTarget)[0].getAttribute('data-status'));
      // $("#number-of-guests").html($(e.relatedTarget).data('number-of-guests'));
      // $("#card-number").html($(e.relatedTarget).data('card-number'));
      // $("#street").html($(e.relatedTarget).data('street'));
      // $("#city").html($(e.relatedTarget).data('city'));
      // $("#country").html($(e.relatedTarget).data('country'));
      // $("#postal-code").html($(e.relatedTarget).data('postal-code'));
      // $("#phone").html($(e.relatedTarget).data('phone'));
      // $("#passport").html($(e.relatedTarget).data('passport'));
      // $("#submit").attr('data-id', $(e.relatedTarget).data('id'));

     
    });
  });

</script>