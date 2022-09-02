let checkedFilter = []

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
    document.getElementById('cb-vouchers').checked = false
    document.getElementById('cb-products').checked = false
    document.getElementById('cb-giftcards').checked = false
    checkedFilter = []
  }


  if(document.getElementById('alltype').checked == true)
  {
    document.getElementById('cb-vouchers').checked = true
    document.getElementById('cb-products').checked = true
    document.getElementById('cb-giftcards').checked = true

    let typeButton = document.createElement('button')
    typeButton.classList.add('btn','btn-outline-primary','btn-sm', 'mb-2')

    let faClose = document.createElement('i')
    faClose.classList.add('fa', 'fa-times-circle')

    checkedFilter = []
    checkedFilter.push("Voucher", "Product", "Giftcard") // [Voucher,Product,Giftcard]
    let htmlType = checkedFilter.toString() // Voucher,Product,Giftcard(x)
    htmlType = htmlType.replaceAll(",", ", ") // Voucher, Product, Giftcard(x)
    typeButton.innerHTML = htmlType + " "// Voucher,Product,Giftcard (x)
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

function recreateBtn() {
  if(checkedFilter.length > 0)
  {
    let typeButton = document.createElement('button')
    typeButton.classList.add('btn','btn-outline-primary','btn-sm', 'mb-2')
  
    let faClose = document.createElement('i')
    faClose.classList.add('fa', 'fa-times-circle')
  
    checkedFilter = Array.from(new Set(checkedFilter))
    let htmlType = checkedFilter.toString()
    htmlType = htmlType.replaceAll(",", ", ")
    typeButton.innerHTML = htmlType + " "
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
}

document.getElementById('cb-vouchers').addEventListener('change', () => {

  let elem = document.getElementById('cb-vouchers')
  if(elem.checked == false)
  {
    let idx = checkedFilter.indexOf('Voucher')
    if(idx !== -1)
    {
      checkedFilter.splice(idx, 1)
    }
    recreateBtn()
  }
  else
  {
    checkedFilter.push('Voucher')
    recreateBtn()
  }
})

document.getElementById('cb-products').addEventListener('change', () => {

  let elem = document.getElementById('cb-products')
  if(elem.checked == false)
  {
    let idx = checkedFilter.indexOf('Product')
    if(idx !== -1)
    {
      checkedFilter.splice(idx, 1)
    }
    recreateBtn()
  }
  else
  {
    checkedFilter.push('Product')
    recreateBtn()
  }
})

document.getElementById('cb-giftcards').addEventListener('change', () => {

  let elem = document.getElementById('cb-giftcards')
  if(elem.checked == false)
  {
    let idx = checkedFilter.indexOf('Giftcard')
    if(idx !== -1)
    {
      checkedFilter.splice(idx, 1)
    }
    recreateBtn()
  }
  else
  {
    checkedFilter.push('Giftcard')
    recreateBtn()
  }
})