document.getElementById('point-needed').addEventListener('input', (e) => {
  let currencyIDR = new Intl.NumberFormat('id-ID').format(e.target.value)
  
  let currencyButton = document.createElement('button')
  currencyButton.classList.add('btn','btn-outline-primary','btn-sm')
  
  let faClose = document.createElement('i')
  faClose.classList.add('fa', 'fa-times-circle')

  currencyButton.innerHTML = "IDR " + currencyIDR + " - IDR 500.000 "
  currencyButton.appendChild(faClose)
  currencyButton.onclick = function () {
    document.getElementById('list-filter-point').removeChild(this)
  }

  document.getElementById('list-filter-point').innerHTML = null
  document.getElementById('list-filter-point').appendChild(currencyButton)
  document.getElementById('point-min').innerHTML = "IDR " + currencyIDR
});