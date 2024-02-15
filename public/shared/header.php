<!-- header.php -->
<!-- connect to database -->

<!-- uncomment this for the db to be able to work -->
<?php //require './../config/database.php';?>
<?php require './../config/database.php';?>

<!-- container html and body tags along with nav -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./../assets/styles.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<body>
  <!-- toast -->
  <div class="toast-container mt-4 d-flex justify-content-center align-items-center w-100">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <!-- <img src="..." class="rounded me-2" alt="..."> -->
        <strong class="me-auto">Status</strong>
        <small class="text-body-secondary">just now</small>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> -->
      </div>
      <div class="toast-body" id="toast-body">
        Message
      </div>
    </div>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <!-- <img src="..." class="rounded me-2" alt="..."> -->
        <strong class="me-auto">Bootstrap</strong>
        <small class="text-body-secondary">2 seconds ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Heads up, toasts will stack automatically
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top mb-6">
    <div class="container">
      <a class="navbar-brand" href="#">
        <svg width="150" height="50" viewBox="0 0 369.9130434782609 75.12139103205308" class="looka-1j8o68f">
          <defs id="SvgjsDefs1011"></defs>
          <g id="SvgjsG1012" featurekey="HKaMnE-0"
            transform="matrix(0.5944293737411499,0,0,0.5944293737411499,6.000000032411808,11.517449680877768)"
            fill="#000000">
            <title xmlns="http://www.w3.org/2000/svg">Transportation 2 final</title>
            <path xmlns="http://www.w3.org/2000/svg"
              d="M14.97662,107c2.23334,0,3.8028-1.8316,4.777-4.42267L15.532,102.205a2.64629,2.64629,0,0,1-.55536.74628,2.8359,2.8359,0,0,1-.61206-.84918l-4.46069-.39343C10.84021,104.7514,12.50085,107,14.97662,107Z">
            </path>
            <path xmlns="http://www.w3.org/2000/svg"
              d="M105.42389,81.50659c0,7.16278,2.51855,11.61237,6.57281,11.61237s6.57275-4.44958,6.57275-11.61237-2.51855-11.61243-6.57275-11.61243S105.42389,74.34375,105.42389,81.50659Zm9.14471,0c0,4.20477-1.15143,7.6134-2.5719,7.6134s-2.572-3.40863-2.572-7.6134,1.15149-7.61346,2.572-7.61346S114.5686,77.30182,114.5686,81.50659Z">
            </path>
            <path xmlns="http://www.w3.org/2000/svg"
              d="M67.98761,80.007c-5.16217,0-7.00146,6.71368-7.00146,12.99664s1.83929,12.99664,7.00146,12.99664S74.989,99.28662,74.989,93.0036,73.14972,80.007,67.98761,80.007Zm0,21.99432c-1.65723,0-3.00067-4.02838-3.00067-8.99768s1.34344-8.99768,3.00067-8.99768,3.00061,4.02838,3.00061,8.99768S69.64478,102.00128,67.98761,102.00128Z">
            </path>
            <path xmlns="http://www.w3.org/2000/svg"
              d="M1.82458,96.97119l34.007,2.99927c.05865.00537.11725.00781.17584.00781.09473,0,21.2876-3.01929,21.2876-3.01929a1.99945,1.99945,0,0,0,1.71716-1.97943V84.101a7.98361,7.98361,0,0,1,7.15869-7.953l.1153-.0127c3.46948-.3681,6.46912-.55408,8.0788.91333,1.13208,1.03052,1.68787,3.01825,1.65076,5.934v.99976a2.00048,2.00048,0,0,0,2.74567,1.85547l3.22906-1.2962v.464a1.99992,1.99992,0,0,0,2.00043,1.99951,1.97009,1.97009,0,0,0,.32916-.02734l17.78613-2.963c-.06677-.80731-.11157-1.63684-.11157-2.50824,0-.52386.01611-1.033.04041-1.53387l-16.0437,2.67273V31.46588l38.00781,21.70868v23.139l-2.3913.39838a27.22764,27.22764,0,0,1,.36981,3.99249l4.35107-.72479A1.99989,1.99989,0,0,0,128,78.00751V52.01422a1.999,1.999,0,0,0-1.008-1.73584L74.91492,21.21252a2.03,2.03,0,0,0-1.06567-.207L37.8418,24.00476a2.0004,2.0004,0,0,0-1.723,1.33563l-2.04919,5.88422L22.36792,34.669A2.00021,2.00021,0,0,0,21.144,35.69269L18.14343,41.6911a2,2,0,0,0,1.78943,2.8938h.3819l-2.24139,8.21252L9.30475,59.02332A7.01466,7.01466,0,0,0,2.983,65.96362L2.93365,83.05725l-.75745-.06677A1.99993,1.99993,0,0,0,0,84.98212v9.99744A1.9996,1.9996,0,0,0,1.82458,96.97119ZM75.98926,26.23041l5.95642,2.99811V80.25043l-1.98773.79767c-.23932-3.11884-1.19458-5.40485-2.89807-6.95569a7.34658,7.34658,0,0,0-1.07062-.801ZM21.05951,55.58215,61.93164,54.908a1.99851,1.99851,0,0,0,1.86267-1.36145L67.82349,41.58a1.99911,1.99911,0,0,0-1.16138-2.49744c-5.489-2.16687-35.7655.346-43.24445,1.00732l.91553-1.83044,11.853-3.48883a2.00011,2.00011,0,0,0,1.32349-1.26093l1.96039-5.62744L71.9884,25.17358V71.98547a27.81525,27.81525,0,0,0-6.12714.17334l-.11523.0127A11.96738,11.96738,0,0,0,55.05151,83.24213L37.94385,85.68488l.0484-19.67633a6.99913,6.99913,0,0,0-7.00146-7.01965H16.26141Zm1.86212-4.03021,1.71716-7.55469C37.4295,42.8877,56.6698,41.699,63.31573,42.42981L60.45282,50.933ZM6.98389,65.97681a2.99965,2.99965,0,0,1,2.87927-2.97668c.03259.00159.06421.01129.0968.01129.05182,0,.10248-.01953.1543-.02356H30.99078a2.99985,2.99985,0,0,1,3.00061,3.009l-.05109,19.79492L6.93353,83.41Zm-2.983,21.18884L35.8316,89.973a1.97693,1.97693,0,0,0,.45911-.01221l18.7207-2.67316v5.95795l-19.05865,2.721L4.00085,93.1485Z">
            </path>
          </g>
          <g id="SvgjsG1013" featurekey="J3GnXt-0"
            transform="matrix(2.887453556060791,0,0,2.887453556060791,91.7981775397639,15.562731635847602)"
            fill="#000000">
            <path
              d="M4.1504 11.5527 c0.50781 -0.88867 1.8262 -1.709 3.2813 -1.709 l0 2.5098 c-2.1289 0 -3.1445 0.625 -3.1445 2.7539 l0 4.8926 l-2.832 0 l0 -10.039 l2.6953 0 l0 1.5918 z M18.524953125 14.834 l-0.029297 0.67383 l-7.4414 0 c0.11719 1.6699 1.2305 2.4707 2.5684 2.4707 c1.0059 0 1.7871 -0.46875 2.168 -1.3574 l2.5781 0.38086 c-0.66406 2.0313 -2.4707 3.1934 -4.7266 3.1934 c-3.2422 0 -5.3613 -1.9141 -5.3613 -5.2148 s2.1777 -5.2344 5.2734 -5.2344 c2.8418 0 4.9609 1.5723 4.9707 5.0879 z M13.574253125 11.7383 c-1.2793 0 -2.168 0.5957 -2.4414 1.9336 l4.6094 0 c-0.14648 -1.2793 -1.0156 -1.9336 -2.168 -1.9336 z M26.591784375 9.766 c2.4121 0 3.7402 1.25 3.7402 3.4766 l0 6.7578 l-2.8223 0 l0 -6.1523 c0 -1.3379 -0.83008 -1.8262 -1.7969 -1.8262 c-1.1621 0 -2.2168 0.58594 -2.2363 2.4414 l0 5.5371 l-2.8125 0 l0 -10.039 l2.8125 0 l0 1.1133 c0.70313 -0.83008 1.7871 -1.3086 3.1152 -1.3086 z M36.7968625 20 c-1.9531 0 -3.0664 -1.1328 -3.0664 -3.1348 l0 -4.7461 l-1.9727 0 l0 -2.1582 l0.63477 0 c1.0645 0 1.6504 -0.41016 1.6504 -1.9141 l0 -1.3281 l2.5391 0 l0 3.2422 l2.0703 0 l0 2.1582 l-2.0703 0 l0 4.4434 c0 0.89844 0.43945 1.2988 1.1621 1.2988 l0.9082 0 l0 2.1387 l-1.8555 0 z M53.467 9.961 l2.9102 0 l-3.5156 10.049 l-2.6074 0 l-2.3242 -6.6309 l-2.3438 6.6309 l-2.6465 0 l-3.4473 -10.049 l2.9004 0 l2.0703 6.5332 l2.373 -6.5332 l2.1582 0 l2.3633 6.5137 z M64.013675 9.766 c2.2461 0 3.5938 1.25 3.5938 3.7598 l0 6.4746 l-2.8223 0 l0 -6.0156 c0 -1.4746 -0.82031 -1.9629 -1.8262 -1.9629 c-1.0449 0 -2.1875 0.51758 -2.207 2.4414 l0 5.5371 l-2.8125 0 l0 -15 l2.8125 0 l0 6.1621 c0.71289 -0.86914 1.8359 -1.3965 3.2617 -1.3965 z M79.755421875 14.834 l-0.029297 0.67383 l-7.4414 0 c0.11719 1.6699 1.2305 2.4707 2.5684 2.4707 c1.0059 0 1.7871 -0.46875 2.168 -1.3574 l2.5781 0.38086 c-0.66406 2.0313 -2.4707 3.1934 -4.7266 3.1934 c-3.2422 0 -5.3613 -1.9141 -5.3613 -5.2148 s2.1777 -5.2344 5.2734 -5.2344 c2.8418 0 4.9609 1.5723 4.9707 5.0879 z M74.804721875 11.7383 c-1.2793 0 -2.168 0.5957 -2.4414 1.9336 l4.6094 0 c-0.14648 -1.2793 -1.0156 -1.9336 -2.168 -1.9336 z M91.337453125 14.834 l-0.029297 0.67383 l-7.4414 0 c0.11719 1.6699 1.2305 2.4707 2.5684 2.4707 c1.0059 0 1.7871 -0.46875 2.168 -1.3574 l2.5781 0.38086 c-0.66406 2.0313 -2.4707 3.1934 -4.7266 3.1934 c-3.2422 0 -5.3613 -1.9141 -5.3613 -5.2148 s2.1777 -5.2344 5.2734 -5.2344 c2.8418 0 4.9609 1.5723 4.9707 5.0879 z M86.386753125 11.7383 c-1.2793 0 -2.168 0.5957 -2.4414 1.9336 l4.6094 0 c-0.14648 -1.2793 -1.0156 -1.9336 -2.168 -1.9336 z M93.476584375 20 l0 -15 l2.8418 0 l0 15 l-2.8418 0 z">
            </path>
          </g>
        </svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="cars.php"> Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agencies.php"> Agencies</a>
          </li>


          <!-- DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <!-- Here's the magic. Add the .animate and .slideIn classes to your .dropdown-menu and you're all set! -->
            <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.php">Login</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="userSignup.php">User Signup</a>
              <a class="dropdown-item" href="agencySignup.php">Agency Signup</a>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>