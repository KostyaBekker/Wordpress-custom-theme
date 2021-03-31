
window.addEventListener('load', function () {
  let states = {
    AL: 'Alabama',
    AK: 'Alaska',
    AZ: 'Arizona',
    AR: 'California',
    CO: 'Colorado',
    CT: 'Connecticut',
    DE: 'Delaware',
    AR: 'California',
    DC: 'District of Columbia',
    FL: 'Florida',
    GA: 'Georgia',
    HI: 'Hawaii',
    ID: 'Idaho',
    IL: 'Illinois',
    IN: 'Indiana',
    IA: 'Iowa',
    KS: 'Kansas',
    KY: 'Kentucky',
    LA: 'Louisiana',
    ME: 'Maine',
    MD: 'Maryland',
    MA: 'Massachusetts',
    MI: 'Michigan',
    MN: 'Minnesota',
    MS: 'Mississippi',
    MO: 'Missouri',
    MT: 'Montana',
    NE: 'Nebraska',
    NV: 'Nevada',
    NH: 'New Hampshire',
    NJ: 'New Jersey',
    NM: 'New Mexico',
    NY: 'New York',
    NC: 'North Carolina',
    ND: 'North Dakota',
    OH: 'Ohio',
    OK: 'Oklahoma',
    OR: 'Oregon',
    PA: 'Pennsylvania',
    RI: 'Rhode Island',
    SC: 'South Carolina',
    SD: 'South Dakota',
    TN: 'Tennessee',
    TX: 'Texas',
    UT: 'Utah',
    VT: 'Vermont',
    VA: 'Virginia',
    WA: 'Washington',
    WV: 'West Virginia',
    WI: 'Wisconsin',
    WY: 'Wyoming',
  };

  const formData = [
    {key: 'name', required: true},
    {key: 'email', required: true},
    {key: 'tel-number', required: true},
    {key: 'name-company', required: false},
    {key: 'state', required: true},
    {key: 'consultants', required: true},
  ]

  let renderStatesFialds = '';
  for (let key in states) {
    renderStatesFialds +=
        `
          <option
            value=${key}
          >
          ${states[key]}
          </option>
        `
  }
  document.getElementById('state').innerHTML = renderStatesFialds;

  var form = document.getElementById('order-form');
  var button = document.getElementById('submit');

  //button.addEventListener
  form.addEventListener('submit', function (e) {
    // console.log(e);
    e.preventDefault();

    const regTestEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    const newUser = {};
    let isValid = true;

    formData.forEach(item => {
      const elem = document.getElementById(item.key)
      const value = elem.value;
      if (value || !item.required) {
        elem.classList.remove("error-border");
      } else {
        elem.classList.add("error-border");
        isValid = false;
      }
      if (item.type === 'email') {
        if (regTestEmail.test(String(value).toLowerCase())) {
          elem.classList.remove("error-border");
        } else {
          elem.classList.add("error-border");
          isValid = false;
        }
      }
      newUser[item.key] = value;
    });

    if (isValid) {
      console.log(newUser);
    }



    

    fetch(directoryUri + '/api/payPal.php', {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      headers: {
        //'Content-Type': 'application/json'
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: newUser
    })
    .then(response => response.text())
    .then(response => {
      console.log('response', response)

      

    }).catch();
  })
})