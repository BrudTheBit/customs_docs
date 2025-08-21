<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BrudTheGreat — тестирую тут всякое</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        *{box-sizing:border-box}
        html,body{height:100%}
        body{
            margin:0; font-family:Inter,system-ui,Segoe UI,Roboto,Arial,Helvetica,sans-serif;
            color:#e5f0ff;              /* вместо var(--fg) */
            background:#0b0f1a;         /* вместо var(--bg) */
            overflow:hidden;            /* фиксируем фон */
        }

        /* ⭐ Немного звёздочек с помощью градиентов */
        .stars{
            position:fixed; inset:0; pointer-events:none; z-index:-3;
            background:
                radial-gradient(1px 1px at 10% 20%,#fff8 99%,#0000 100%),
                radial-gradient(1px 1px at 30% 80%,#fff8 99%,#0000 100%),
                radial-gradient(1px 1px at 70% 30%,#fff8 99%,#0000 100%),
                radial-gradient(1px 1px at 90% 60%,#fff8 99%,#0000 100%),
                radial-gradient(1px 1px at 50% 50%,#fff6 99%,#0000 100%),
                radial-gradient(1px 1px at 80% 10%,#fff6 99%,#0000 100%),
                radial-gradient(1px 1px at 15% 65%,#fff6 99%,#0000 100%),
                #0b0f1a; /* фон космоса */
            filter: drop-shadow(0 0 6px #fff8);
            animation: twinkle 6s linear infinite;
        }
        @keyframes twinkle { 0%,100%{opacity:.9} 50%{opacity:.7} }

        /* 🌍 Пиксель-арт Земли — SVG, увеличиваем как гигантские пиксели */
        .earth-wrap{ position:fixed; inset:0; display:grid; place-items:center; z-index:-2; opacity:.18 }
        .earth{ width:min(60vmin,640px); height:auto; image-rendering: pixelated; filter: drop-shadow(0 0 30px #46d2ff33) }

        /* Контентная карточка */
        .card{
            position:relative; z-index:1; max-width:820px; margin:10vh auto; padding:32px clamp(20px,5vw,48px);
            background:linear-gradient(180deg,rgba(255,255,255,.08),rgba(255,255,255,.03));
            border:1px solid rgba(255,255,255,.12);  /* вместо var(--glass-stroke) */
            border-radius:24px; backdrop-filter: blur(10px);
            box-shadow:0 20px 60px rgba(0,0,0,.35);
        }
        h1{ font-family:"Inter",system-ui; font-weight:800; letter-spacing:.5px; margin:0 0 12px; font-size:clamp(32px,6vw,64px) }
        .tag{ font-family:"JetBrains Mono",monospace; font-size:clamp(12px,2.4vw,14px); opacity:.8 }
        p{ font-size:clamp(16px,3.2vw,20px); line-height:1.6; margin:16px 0 24px }

        .actions{ display:flex; gap:12px; flex-wrap:wrap }
        .btn{
            appearance:none; border:none; cursor:pointer; padding:14px 18px; border-radius:16px;
            background:rgba(255,255,255,.06); /* вместо var(--glass) */
            color:#e5f0ff; font-weight:600; letter-spacing:.3px;
            border:1px solid rgba(255,255,255,.12); transition: transform .08s ease, background .2s ease;
        }
        .btn:hover{ transform: translateY(-1px) }
        .btn.primary{ background:linear-gradient(135deg,#3fe0ff,#7cfcb7); color:#04223a }

        .footer{ margin-top:22px; opacity:.75; font-size:14px }
    </style>
</head>
<body>
<div class="stars"></div>

<!-- SVG-пиксель-Земля: поле 16×16, увеличиваем для пиксельного ощущения -->
<div class="earth-wrap" aria-hidden="true">
    <svg class="earth" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges" role="img">
        <defs>
            <style>
                .o{fill:#1b5fff}  /* океан */
                .l{fill:#31d27c}  /* суша */
                .s{fill:#0b0f1a}  /* космос/пустота */
            </style>
        </defs>
        <rect class="s" x="0" y="0" width="16" height="16"/>
        <!-- Круглая «маска» океана квадратиками -->
        <rect class="o" x="5" y="1" width="6" height="1"/>
        <rect class="o" x="4" y="2" width="8" height="1"/>
        <rect class="o" x="3" y="3" width="10" height="1"/>
        <rect class="o" x="2" y="4" width="12" height="1"/>
        <rect class="o" x="2" y="5" width="12" height="1"/>
        <rect class="o" x="1" y="6" width="14" height="1"/>
        <rect class="o" x="1" y="7" width="14" height="1"/>
        <rect class="o" x="1" y="8" width="14" height="1"/>
        <rect class="o" x="2" y="9" width="12" height="1"/>
        <rect class="o" x="2" y="10" width="12" height="1"/>
        <rect class="o" x="3" y="11" width="10" height="1"/>
        <rect class="o" x="4" y="12" width="8" height="1"/>
        <rect class="o" x="5" y="13" width="6" height="1"/>

        <!-- Континенты (очень условно) -->
        <rect class="l" x="7" y="3" width="2" height="1"/>
        <rect class="l" x="8" y="4" width="3" height="1"/>
        <rect class="l" x="9" y="5" width="3" height="1"/>
        <rect class="l" x="9" y="6" width="2" height="1"/>
        <rect class="l" x="8" y="7" width="3" height="1"/>
        <rect class="l" x="8" y="8" width="2" height="1"/>
        <rect class="l" x="7" y="9" width="2" height="1"/>
        <rect class="l" x="7" y="10" width="1" height="1"/>
        <rect class="l" x="3" y="5" width="2" height="1"/>
        <rect class="l" x="3" y="6" width="2" height="1"/>
        <rect class="l" x="4" y="7" width="1" height="1"/>
        <rect class="l" x="4" y="8" width="1" height="1"/>
        <rect class="l" x="5" y="9" width="1" height="1"/>
        <rect class="l" x="12" y="9" width="1" height="1"/>
        <rect class="l" x="12" y="10" width="1" height="1"/>
    </svg>
</div>

<main class="card" role="main">
    <div class="tag">Привет, космос 👋</div>
    <h1>Я — BrudTheGreat</h1>
    <p>и я <strong>тестирую тут всякое</strong>. Не пугайся — это всего лишь демка приветственной страницы с пиксельной Землёй на заднем плане. Чувствуй себя как дома, а если что-нибудь сломается — значит, так и было задумано 😉</p>
    <div class="actions">
        <button class="btn primary" onclick="alert('Ну всё, тест прошёл. Молодец! 🚀')">Потестить кнопочку</button>
        <a class="btn" href="#" onclick="navigator.clipboard?.writeText(location.href).then(()=>this.textContent='URL скопирован!')">Скопировать URL</a>
    </div>
    <div class="footer">© <span id="y"></span> BrudTheGreat — экспериментирую смело, деплой осторожно.</div>
</main>

<script>document.getElementById('y').textContent = new Date().getFullYear();</script>
</body>
</html>
