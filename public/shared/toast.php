<!-- toast.php -->
<?php
function toast($message)
{
    echo "<script>
  // init and run toast notification inside php
  // it is essential that header loads and cant put this inside footer

  const toastElList = document.querySelectorAll(`.toast`)
  const toastList = [...toastElList].map(toastEl => new bootstrap.Toast(toastEl,{delay: 2500}))
  document.getElementById('toast-body').innerHTML=`${message}`
  toastList[0].show()
  </script>";
}