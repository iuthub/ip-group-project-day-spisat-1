<div style="float: left; margin: 40px; border: 1px solid black">
  <form method="post" action="{{ route('rooms') }}">
    @csrf

    <p>From: <input type="date" name="checkin"></p>
    <p>To: <input type="date" name="checkout"></p>
    <p>Number of people: 
      <select name="number_of_guests">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </p>
    <p><input type="submit" value="Search"></p>
  </form>
</div>