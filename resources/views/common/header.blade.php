<meta charset="utf-8">
    <title>Dhule Fights Corona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dhulekar's are Ready to Fight!">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="icon" href="{{asset('assets/logo.png')}}" sizes="16x16" type="image/png">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="{{asset('assets/fonts/Inter-UI-upright.var.woff2')}}" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="{{asset('assets/fonts/Inter-UI.var.woff2')}}" type="font/woff2" crossorigin="anonymous">

    <link rel="alternate" hreflang="en" href="https://dhulefightscorona.tech">
    <link rel="alternate" hreflang="hi" href="https://hi.dhulefightscorona.tech">
    <link rel="alternate" hreflang="mr" href="https://mr.dhulefightscorona.tech">
    <style>
      section {
    padding: 1rem 0;
}
.card-body {
    flex: 1 1 auto;
    padding: 1rem;
}

.text-responsive {
  font-size: calc(100% + 1vw + 1vh);
}
.last-update {
    display: flex;
    flex-direction: column;
    text-align: right;
    margin-bottom: auto;
    margin-top: .25rem;
}
.title {
  font-size: 4rem;
}

@media (max-width: 1200px) {
  .title {
    font-size: calc(1.525rem + 3.3vw);
  }
}
    </style>
