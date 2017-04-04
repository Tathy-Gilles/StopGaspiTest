<h1>Login</h1>

<form method='POST' action='/login'>

  {{ csrf_field() }}

  <div>
    <label for='siret'>Siret</label>
    <input id='siret' type='text' name='siret' required/>
  </div>

  <div>
    <label for='email'>Mail</label>
    <input id='email' type='text' name='email' required/>
  </div>

  <div>
    <label for='password'>Password</label>
    <input id='password' type='password' name='password' required/>
  </div>

  <div>
    <button type='submit'>Login</button>
  </div>

</form>
