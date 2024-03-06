<link rel="stylesheet" href="{{asset("css/register.css")}}">
<div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>Registration Form</h2>
      </div>
      <div class="row clearfix">

          <form action="/register" method="POST">
            @csrf
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="username" name="username" placeholder="Username" required />
              </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                {{ $errors->first('email')}}
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                {{ $errors->first('password')}}
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password_confirmation" placeholder="Re-type Password" required />
            </div>

              <div class="input_field checkbox_option">
                  <input type="checkbox" id="cb1">
                  <label for="cb1">I agree with terms and conditions</label>
              </div>
            <input  type="submit" value="Register" />
          </form>
          <p class="">Already have an account? <a href="/login" >Login</a></p>

      </div>
    </div>
  </div>
