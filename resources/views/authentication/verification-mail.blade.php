<h1>Hello there, {{ $user->fname }}!</h1>


<br>

<p>Thank you for being a part of our growing community. Please click the link below to verify your account.</p>

<p>
  <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here.</a>
</p>