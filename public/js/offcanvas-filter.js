document.getElementById('point-needed').addEventListener('input', (e) => {
  let currencyIDR = new Intl.NumberFormat('id-ID').format(e.target.value)
  
  let currencyButton = document.createElement('button')
  currencyButton.classList.add('btn','btn-outline-primary','btn-sm', 'mb-2')
  
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
})

document.getElementById('alltype').addEventListener('change', () => {
  //jalankan uncheck serentak
  function checkFalse () {
    document.getElementById('alltype').checked = false
    document.getElementById('vouchers').checked = false
    document.getElementById('products').checked = false
    document.getElementById('giftcards').checked = false
  }


  if(document.getElementById('alltype').checked == true)
  {
    document.getElementById('vouchers').checked = true
    document.getElementById('products').checked = true
    document.getElementById('giftcards').checked = true

    let typeButton = document.createElement('button')
    typeButton.classList.add('btn','btn-outline-primary','btn-sm', 'mb-2')

    let faClose = document.createElement('i')
    faClose.classList.add('fa', 'fa-times-circle')

    typeButton.innerHTML = "Voucher, Product, Giftcards "
    typeButton.appendChild(faClose)
    typeButton.onclick = function () {
      //hapus type-button
      document.getElementById('list-filter-type').removeChild(this)
      //uncheck semua type filter
      checkFalse()
    }
    document.getElementById('list-filter-type').innerHTML = null
    document.getElementById('list-filter-type').appendChild(typeButton)
  }
  else
  {
    document.getElementById('list-filter-type').innerHTML = null
    checkFalse()
  }
})