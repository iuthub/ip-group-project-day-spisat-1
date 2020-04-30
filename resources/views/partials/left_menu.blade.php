<div style="float: left; margin: 40px; border: 1px solid black">
  <form>
    @csrf

    <p>From: <input type="date"></p>
    <p>To: <input type="date"></p>
    <p>Number of people: 
      <select>
        <option>1</option>
        <option>2</option>
        <option>4</option>
      </select>
    </p>
    <p><input type="submit" value="Search"></p>
  </form>
</div>