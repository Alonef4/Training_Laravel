<link rel="stylesheet" href="{{asset("css/register.css")}}">
<div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>Login Form</h2>
      </div>
      <div class="row clearfix">


          <form action="/login" method="POST">
            @csrf
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <input type="submit" value="Login" />
          </form>
          <p class="">Don't have an account? <a href="/register" >Register</a></p>

      </div>
    </div>
  </div>
