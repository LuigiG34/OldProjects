<?php
if(!isset($_SESSION['id']) && !isset($_SESSION['pseudo'])){
    echo '<link rel="stylesheet" href="style/style.css">
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
    <div class="toast m-3" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header shadow">
      <strong class="me-auto">Unknown user</strong>
      <small>🔒</small>
      <button type="button" onclick="toast.hide()" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-center shadow">
      Hello, unknown user we suggest you <br> to <a href="auth/registration/user-registration">create an account !</a>
    </div>
  </div>
</div>';
}else{
    echo '<link rel="stylesheet" href="style/style.css">
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
    <div class="toast m-3" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header shadow">
      <p class="rounded me-2"></p>
      <strong class="me-auto">Website login was a success.</strong>
      <small>✔️</small>
      <button type="button" onclick="toast.hide()" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-center shadow">
      Welcome back '. $_SESSION["firstname"] .' '. $_SESSION["lastname"] .'<br>
      '."<p class='text-dark'>Today's date is <strong>".date('d/m/Y') ." 📅</strong>.<br>".
    "Today's time is <strong>".date('H:i') ." 🕰️</strong>.</p>".'
    </div>
  </div>
  </div>';
}
?>
