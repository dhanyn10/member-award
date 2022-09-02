let checkedFilter = []
let filterbyPoint = false
let filterbyType = false

document.getElementById('point-needed').addEventListener('input', (e) => {
  let currencyIDR = new Intl.NumberFormat('id-ID').format(e.target.value)

  if(e.target.value > 0) {
    filterbyPoint = true
  } else {
    filterbyPoint = false
  }
  
  let currencyButton = document.createElement('button')
  currencyButton.classList.add('btn','btn-outline-primary','btn-sm', 'mb-2')
  
  let faClose = document.createElement('i')
  faClose.classList.add('fa', 'fa-times-circle')

  currencyButton.innerHTML = "IDR " + currencyIDR + " - IDR 500.000 "
  currencyButton.appendChild(faClose)
  currencyButton.onclick = function () {
    document.getElementById('list-filter-point').removeChild(this)
  }

  let parentElem = document.getElementById('list-filter-point')

  document.getElementById('list-filter-point').innerHTML = null
  document.getElementById('list-filter-point').appendChild(currencyButton)
  document.getElementById('point-min').innerHTML = "IDR " + currencyIDR

  displayClearFilterBtn()
})

document.getElementById('alltype').addEventListener('change', () => {
  //jalankan uncheck serentak
  function checkFalse () {
    document.getElementById('alltype').checked = false
    document.getElementById('cb-vouchers').checked = false
    document.getElementById('cb-products').checked = false
    document.getElementById('cb-giftcards').checked = false
    checkedFilter = []
    filterbyType = false
  }


  if(document.getElementById('alltype').checked == true)
  {
    filterbyType = true
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
    let parentElem = document.getElementById('list-filter-type')
    if(parentElem.hasChildNodes() == false) {
      document.getElementById('list-filter-type').appendChild(typeButton)
    }
  }
  else
  {
    document.getElementById('list-filter-type').innerHTML = null
    checkFalse()
  }
  displayClearFilterBtn()
})

function recreateBtn() {
  document.getElementById('list-filter-type').innerHTML = null
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
    document.getElementById('list-filter-type').appendChild(typeButton)
  }
}

function checkFilterByType () {
  if(checkedFilter.length == 0)
    filterbyType = false
  else
    filterbyType = true
}
function displayClearFilterBtn () {
  if(filterbyPoint == true && filterbyType == true) {
    let clearAllFilterButton = document.createElement('button')
    clearAllFilterButton.classList.add('btn','btn-outline-primary','btn-sm', 'mb-2')
    clearAllFilterButton.innerHTML = "Clear All Filter"
    clearAllFilterButton.onclick = function () {
      // hapus elemen html
      document.getElementById('list-filter-point').innerHTML = null
      document.getElementById('list-filter-type').innerHTML = null
      document.getElementById('list-filter-clear').removeChild(this)

      // reset nilai filter
      checkedFilter = []
      filterbyPoint = false
      filterbyType = false

      // uncheck semua filter type
      document.getElementById('alltype').checked = false
      document.getElementById('cb-vouchers').checked = false
      document.getElementById('cb-products').checked = false
      document.getElementById('cb-giftcards').checked = false
    }
    let parentElem = document.getElementById('list-filter-clear')
    if(parentElem.hasChildNodes() == false) {
      parentElem.appendChild(clearAllFilterButton)
    }
  }
  else
  {
    // hapus tombol jika salah satu diantara filtertype atau filterpoint bernilai false
    document.getElementById('list-filter-clear').innerHTML = null 
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
  }
  else
  {
    checkedFilter.push('Voucher')
  }
  recreateBtn()
  checkFilterByType()
  displayClearFilterBtn()
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
  }
  else
  {
    checkedFilter.push('Product')
  }
  recreateBtn()
  checkFilterByType()
  displayClearFilterBtn()
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
  }
  else
  {
    checkedFilter.push('Giftcard')
  }
  recreateBtn()
  checkFilterByType()
  displayClearFilterBtn()
})
