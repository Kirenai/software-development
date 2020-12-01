<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .alert-toast {
      -webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .alert-toast input:checked~* {
      -webkit-animation: fade-out-right 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: fade-out-right 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    @-webkit-keyframes slide-in-right {
      0% {
        -webkit-transform: translateX(1000px);
        transform: translateX(1000px);
        opacity: 0
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1
      }
    }

    @keyframes slide-in-right {
      0% {
        -webkit-transform: translateX(1000px);
        transform: translateX(1000px);
        opacity: 0
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1
      }
    }

    @-webkit-keyframes fade-out-right {
      0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1
      }

      100% {
        -webkit-transform: translateX(50px);
        transform: translateX(50px);
        opacity: 0
      }
    }

    @keyframes fade-out-right {
      0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1
      }

      100% {
        -webkit-transform: translateX(50px);
        transform: translateX(50px);
        opacity: 0
      }
    }
  </style>
</head>
<body class="bg-gray-700">