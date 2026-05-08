<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Daftar</title>
  <link rel="stylesheet" href="/css/sign-up.css">
</head>
<body>

  <div class="auth-page">
    <div class="auth-container">

      <!-- Form (left) -->
      <div class="auth-form-wrap">
        <h1 class="auth-title">
          <span class="colored">Sign Up</span> EduClass
        </h1>

        <div class="input-group">
          <input type="email" class="auth-input" placeholder="yourschoolemail@school.id" autocomplete="email" />
        </div>

        <div class="input-group">
          <input type="password" class="auth-input" placeholder="Password" autocomplete="new-password" />
        </div>

        <div class="input-group">
          <input type="password" class="auth-input" placeholder="Confirm Password" autocomplete="new-password" />
        </div>

        <div class="auth-row">
          <label class="remember-label">
            <input type="checkbox" /> Remember me
          </label>
          <a href="#" class="forgot-link">Forgot password?</a>
        </div>

        <a href="/topic" class="btn-continue">Continue</a>

        <div class="or-divider">Or</div>

        <a href="#" class="btn-oauth">
          <!-- Google icon -->
          <svg class="oauth-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
          </svg>
          Continue with Google
        </a>

        <a href="#" class="btn-oauth">
          <!-- Facebook icon -->
          <svg class="oauth-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="12" fill="#1877F2"/>
            <path d="M16.5 8H14c-.28 0-.5.22-.5.5v2h3l-.5 3H13.5v7h-3v-7H9v-3h1.5V8.5C10.5 6.57 11.93 5 14 5h2.5v3z" fill="#fff"/>
          </svg>
          Continue with Facebook
        </a>

        <div class="auth-bottom">
          Already have an account?
          <a href="/login" id="go-login">Sign In</a>
        </div>
      </div>

      <!-- Illustration (right) -->
      <div class="auth-illustration">
        <div class="illus-blob">
          <!-- Conference / meeting table SVG -->
          <svg viewBox="0 0 340 280" xmlns="http://www.w3.org/2000/svg" fill="none">
            <!-- Table -->
            <ellipse cx="170" cy="155" rx="120" ry="40" fill="#A8D8E8" opacity=".6"/>
            <rect x="60" y="148" width="220" height="14" rx="7" fill="#7EC8D8" opacity=".7"/>

            <!-- Ceiling lamps -->
            <line x1="120" y1="0" x2="120" y2="40" stroke="#555" stroke-width="2"/>
            <line x1="170" y1="0" x2="170" y2="35" stroke="#555" stroke-width="2"/>
            <line x1="220" y1="0" x2="220" y2="40" stroke="#555" stroke-width="2"/>
            <rect x="105" y="36" width="30" height="10" rx="5" fill="#E0E0D0"/>
            <rect x="155" y="31" width="30" height="10" rx="5" fill="#E0E0D0"/>
            <rect x="205" y="36" width="30" height="10" rx="5" fill="#E0E0D0"/>

            <!-- Person 1 – far left, standing/sitting -->
            <circle cx="58" cy="105" r="11" fill="#F0B89A"/>
            <rect x="48" y="116" width="20" height="28" rx="6" fill="#8B5CF6"/>
            <line x1="48" y1="144" x2="44" y2="172" stroke="#8B5CF6" stroke-width="5" stroke-linecap="round"/>
            <line x1="68" y1="144" x2="72" y2="172" stroke="#8B5CF6" stroke-width="5" stroke-linecap="round"/>

            <!-- Person 2 – left  -->
            <circle cx="106" cy="92" r="11" fill="#F5C4A1"/>
            <rect x="96" y="103" width="20" height="28" rx="6" fill="#5BA4CF"/>
            <!-- laptop hint -->
            <rect x="84" y="124" width="34" height="20" rx="3" fill="#C8D8E8" opacity=".8"/>
            <rect x="84" y="143" width="34" height="4" rx="2" fill="#A0B8C8" opacity=".6"/>

            <!-- Person 3 – center-left -->
            <circle cx="148" cy="86" r="11" fill="#4A3728"/>
            <circle cx="148" cy="86" r="8" fill="#F0B89A"/>
            <rect x="138" y="97" width="20" height="28" rx="6" fill="#E88B8B"/>
            <!-- paper hint -->
            <rect x="130" y="118" width="28" height="18" rx="3" fill="#FFF" opacity=".7"/>

            <!-- Person 4 – center-right -->
            <circle cx="192" cy="86" r="11" fill="#2E1F14"/>
            <circle cx="192" cy="86" r="8" fill="#F5C4A1"/>
            <rect x="182" y="97" width="20" height="28" rx="6" fill="#6EC6C6"/>

            <!-- Person 5 – right -->
            <circle cx="236" cy="92" r="11" fill="#3C2A1A"/>
            <circle cx="236" cy="92" r="8" fill="#F0B89A"/>
            <rect x="226" y="103" width="20" height="28" rx="6" fill="#9BB8E8"/>
            <!-- tablet hint -->
            <rect x="222" y="120" width="26" height="18" rx="4" fill="#C8D8E8" opacity=".8"/>

            <!-- Person 6 – far right -->
            <circle cx="282" cy="105" r="11" fill="#F5C4A1"/>
            <rect x="272" y="116" width="20" height="28" rx="6" fill="#7EC8D8"/>
            <line x1="272" y1="144" x2="268" y2="172" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>
            <line x1="292" y1="144" x2="296" y2="172" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>

            <!-- Person 7 – front, turned away slightly -->
            <circle cx="170" cy="198" r="12" fill="#F5C4A1"/>
            <rect x="158" y="210" width="24" height="30" rx="6" fill="#E07070"/>
            <line x1="158" y1="240" x2="154" y2="268" stroke="#E07070" stroke-width="5" stroke-linecap="round"/>
            <line x1="182" y1="240" x2="186" y2="268" stroke="#E07070" stroke-width="5" stroke-linecap="round"/>

            <!-- Chairs (front) -->
            <rect x="60"  y="170" width="22" height="30" rx="5" fill="#7EC8D8" opacity=".5"/>
            <rect x="258" y="170" width="22" height="30" rx="5" fill="#7EC8D8" opacity=".5"/>
          </svg>
        </div>
      </div>

    </div>
  </div>

  <script>
    document.getElementById('go-login').addEventListener('click', function(e) {
      e.preventDefault();
      var href = this.getAttribute('href');
      document.body.style.animation = 'fadeOut 0.32s cubic-bezier(0.4,0,0.2,1) both';
      setTimeout(function() { window.location.href = href; }, 320);
    });
  </script>

</body>
</html>