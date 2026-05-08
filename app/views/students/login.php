<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Masuk</title>
  <link rel="stylesheet" href="/css/login.css" />
</head>
<body>

  <div class="auth-page">
    <div class="auth-container login-layout">

      <!-- Illustration (left) -->
      <div class="auth-illustration">
        <div class="illus-blob">
          <!-- Inline SVG: students sitting in a circle -->
          <svg viewBox="0 0 320 260" xmlns="http://www.w3.org/2000/svg" fill="none">
            <!-- Chair backs -->
            <rect x="30" y="120" width="32" height="50" rx="6" fill="#7EC8D8" opacity=".7"/>
            <rect x="80" y="80" width="32" height="50" rx="6" fill="#7EC8D8" opacity=".7"/>
            <rect x="200" y="80" width="32" height="50" rx="6" fill="#7EC8D8" opacity=".7"/>
            <rect x="258" y="120" width="32" height="50" rx="6" fill="#7EC8D8" opacity=".7"/>
            <rect x="160" y="50" width="32" height="50" rx="6" fill="#7EC8D8" opacity=".7"/>

            <!-- Person 1 – left, yellow top -->
            <ellipse cx="46" cy="108" rx="14" ry="18" fill="#F5C97A"/>
            <circle cx="46" cy="86" r="12" fill="#4A3728"/>
            <circle cx="46" cy="86" r="9" fill="#F5C4A1"/>

            <!-- Person 2 – top-left, teal top -->
            <ellipse cx="96" cy="72" rx="14" ry="18" fill="#6EC6C6"/>
            <circle cx="96" cy="50" r="12" fill="#2E1F14"/>
            <circle cx="96" cy="50" r="9" fill="#F0B89A"/>

            <!-- Person 3 – top-center -->
            <ellipse cx="176" cy="44" rx="14" ry="18" fill="#E0E0E0"/>
            <circle cx="176" cy="22" r="12" fill="#3C2A1A"/>
            <circle cx="176" cy="22" r="9" fill="#F5C4A1"/>

            <!-- Person 4 – top-right -->
            <ellipse cx="216" cy="72" rx="14" ry="18" fill="#9BB8E8"/>
            <circle cx="216" cy="50" r="12" fill="#2E1F14"/>
            <circle cx="216" cy="50" r="9" fill="#F0B89A"/>

            <!-- Person 5 – right -->
            <ellipse cx="274" cy="108" rx="14" ry="18" fill="#E88B8B"/>
            <circle cx="274" cy="86" r="12" fill="#4A3728"/>
            <circle cx="274" cy="86" r="9" fill="#F5C4A1"/>

            <!-- Arms / interaction lines -->
            <path d="M60 115 Q100 100 120 110" stroke="#D4A57A" stroke-width="3" stroke-linecap="round"/>
            <path d="M200 110 Q230 100 260 115" stroke="#D4A57A" stroke-width="3" stroke-linecap="round"/>
            <path d="M120 110 Q160 95 200 110" stroke="#D4A57A" stroke-width="2.5" stroke-linecap="round"/>

            <!-- Floor -->
            <ellipse cx="160" cy="170" rx="130" ry="18" fill="#A8DDE8" opacity=".25"/>

            <!-- Legs -->
            <line x1="40"  y1="145" x2="36"  y2="175" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>
            <line x1="52"  y1="145" x2="56"  y2="175" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>
            <line x1="90"  y1="115" x2="86"  y2="145" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>
            <line x1="102" y1="115" x2="106" y2="145" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>
            <line x1="268" y1="145" x2="264" y2="175" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>
            <line x1="280" y1="145" x2="284" y2="175" stroke="#7EC8D8" stroke-width="5" stroke-linecap="round"/>

            <!-- Shoes -->
            <ellipse cx="36"  cy="178" rx="7" ry="4" fill="#F5A050"/>
            <ellipse cx="56"  cy="178" rx="7" ry="4" fill="#E07070"/>
            <ellipse cx="268" cy="178" rx="7" ry="4" fill="#6E9EE0"/>
            <ellipse cx="284" cy="178" rx="7" ry="4" fill="#E07070"/>
          </svg>
        </div>
      </div>

      <!-- Form (right) -->
      <div class="auth-form-wrap">
        <h1 class="auth-title">
          <span class="colored">Sign in</span> EduClass
        </h1>

        <div class="input-group">
          <input type="email" class="auth-input" placeholder="student@school.id" autocomplete="email" />
        </div>

        <div class="input-group">
          <input type="password" class="auth-input" placeholder="Password" autocomplete="current-password" />
        </div>

        <div class="auth-row">
          <label class="remember-label">
            <input type="checkbox" /> Remember me
          </label>
          <a href="#" class="forgot-link">Forgot password?</a>
        </div>

        <a href="/home" class="btn-continue">Continue</a>

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

        <div class="auth-bottom">
          Don't have an account?
          <a href="/signup" id="go-signup">Create your account</a>
        </div>
      </div>

    </div>
  </div>

  <script>
    // Smooth page-leave animation before navigating
    document.getElementById('go-signup').addEventListener('click', function(e) {
      e.preventDefault();
      var href = this.getAttribute('href');
      document.body.style.animation = 'fadeOut 0.32s cubic-bezier(0.4,0,0.2,1) both';
      setTimeout(function() { window.location.href = href; }, 320);
    });
  </script>

</body>
</html>