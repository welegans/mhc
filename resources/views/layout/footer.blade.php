<div class="feet">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 feets">
        <h4>Quick Links</h4>
        <ul class="quie">
          <li><a href="#">Home</a></li>
          <li><a href="#">Hajj</a></li>
          <li><a href="#">Umrah</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-sm-4 feets">
        <h4>Say Salaam!</h4>
        <form method="POST" action='{{route('sendemail')}}'>
          <div class="form-group">
            {{ csrf_field() }}
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-sm-1">

      </div>
      <div class="col-sm-4 feets">
        <h4>Contact Us</h4>
        <p class="calling"><a href="tel:9890608910"><strong>Mobile : </strong>989 060 8910</a><br> 
        <a href="tel:8698441455"><strong>Mobile : </strong>869 844 1455</a></p>
        <p><strong>Address : </strong>Building No: 183/1, Near Jama Masjid, Papdy, Vasai west 401207</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="coop">
      <h5>Multazim Haj Corporation © 2020. All Rights Reserved | <a href="http://welegans.in" target="blank">By Welegans</a></h5>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
