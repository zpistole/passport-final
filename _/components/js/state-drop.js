$(document).ready(function(){
  $("select.country").change(function() {
    var selectedCountry = $(".country option:selected").val();
      //alert("You have selected the country - " + selectedCountry);
      if(selectedCountry == "US") {
        $('#stateForm').show();
        $('#distributors').show();
      } else {
        $('#stateForm').hide();
        $('#distributors').hide();
      }
      if(selectedCountry == "MEX") {
        $('#mexico').show();
      } else {
        $('#mexico').hide();
      }
      if(selectedCountry == "EUR") {
        $('#europe').show();
      } else {
        $('#europe').hide();
      }
      if(selectedCountry == "ME") {
        $('#middleEast').show();
      } else {
        $('#middleEast').hide();
      }
      if(selectedCountry == "CHIN") {
        $('#china').show();
      } else {
        $('#china').hide();
      }
      if(selectedCountry == "PR") {
        $('#puertoRico').show();
      } else {
        $('#puertoRico').hide();
      }
      if(selectedCountry == "HK") {
        $('#hongKong').show();
      } else {
        $('#hongKong').hide();
      }
      if(selectedCountry == "SING") {
        $('#singapore').show();
      } else {
        $('#singapore').hide();
      }
      if(selectedCountry == "AUS") {
        $('#australia').show();
      } else {
        $('#australia').hide();
      }
      if(selectedCountry == "GU") {
        $('#guam').show();
      } else {
        $('#guam').hide();
      }
      if(selectedCountry == "CAN") {
        $('#canada').show();
      } else {
        $('#canada').hide();
      }
    });
});

$(document).ready(function(){
  $("select.state").change(function() {
    var selectedState = $(".state option:selected").val();
      //alert("You have selected the state - " + selectedState);
      if(selectedState == 'AL') {
         $('#alabama').show();
      } else {
        $('#alabama').hide();
      }
      if(selectedState == 'AK') {
         $('#alaska').show();
      } else {
        $('#alaska').hide();
      }
      if(selectedState == 'AR') {
         $('#arkansas').show();
      } else {
        $('#arkansas').hide();
      }
      if(selectedState == 'AZ') {
         $('#arizona').show();
      } else {
        $('#arizona').hide();
      }
      if(selectedState == 'CA') {
         $('#california').show();
      } else {
        $('#california').hide();
      }
      if(selectedState == 'CO') {
         $('#colorado').show();
      } else {
        $('#colorado').hide();
      }
      if(selectedState == 'CT') {
         $('#connecticut').show();
      } else {
        $('#connecticut').hide();
      }
      if(selectedState == 'DE') {
         $('#delaware').show();
      } else {
        $('#delaware').hide();
      }
      if(selectedState == 'FL') {
         $('#florida').show();
      } else {
        $('#florida').hide();
      }
      if(selectedState == 'GA') {
         $('#georgia').show();
      } else {
        $('#georgia').hide();
      }
      if(selectedState == 'HI') {
         $('#hawaii').show();
      } else {
        $('#hawaii').hide();
      }
      if(selectedState == 'ID') {
         $('#idaho').show();
      } else {
        $('#idaho').hide();
      }
      if(selectedState == 'IL') {
         $('#illinois').show();
      } else {
        $('#illinois').hide();
      }
      if(selectedState == 'IN') {
         $('#indiana').show();
      } else {
        $('#indiana').hide();
      }
      if(selectedState == 'IA') {
         $('#iowa').show();
      } else {
        $('#iowa').hide();
      }
      if(selectedState == 'KS') {
         $('#kansas').show();
      } else {
        $('#kansas').hide();
      }
      if(selectedState == 'KY') {
         $('#kentucky').show();
      } else {
        $('#kentucky').hide();
      }
      if(selectedState == 'LA') {
         $('#louisiana').show();
      } else {
        $('#louisiana').hide();
      }
      if(selectedState == 'ME') {
         $('#maine').show();
      } else {
        $('#maine').hide();
      }
      if(selectedState == 'MD') {
         $('#maryland').show();
      } else {
        $('#maryland').hide();
      }
      if(selectedState == 'MA') {
         $('#massachusetts').show();
      } else {
        $('#massachusetts').hide();
      }
      if(selectedState == 'MI') {
         $('#michigan').show();
      } else {
        $('#michagan').hide();
      }
      if(selectedState == 'MN') {
         $('#minnesota').show();
      } else {
        $('#minnesota').hide();
      }
      if(selectedState == 'MS') {
         $('#mississippi').show();
      } else {
        $('#mississippi').hide();
      }
      if(selectedState == 'MO') {
         $('#missouri').show();
      } else {
        $('#missouri').hide();
      }
      if(selectedState == 'MT') {
         $('#montana').show();
      } else {
        $('#montana').hide();
      }
      if(selectedState == 'NE') {
         $('#nebraska').show();
      } else {
        $('#nebraska').hide();
      }
      if(selectedState == 'NV') {
         $('#nevada').show();
      } else {
        $('#nevada').hide();
      }
      if(selectedState == 'NH') {
         $('#new-hampshire').show();
      } else {
        $('#new-hampshire').hide();
      }
      if(selectedState == 'NJ') {
         $('#new-jersey').show();
      } else {
        $('#new-jersey').hide();
      }
      if(selectedState == 'NM') {
         $('#new-mexico').show();
      } else {
        $('#new-mexico').hide();
      }
      if(selectedState == 'NY') {
         $('#new-york').show();
      } else {
        $('#new-york').hide();
      }
      if(selectedState == 'NC') {
         $('#north-carolina').show();
      } else {
        $('#north-carolina').hide();
      }
      if(selectedState == 'ND') {
         $('#north-dakota').show();
      } else {
        $('#north-dakota').hide();
      }
      if(selectedState == 'OH') {
         $('#ohio').show();
      } else {
        $('#ohio').hide();
      }
      if(selectedState == 'OK') {
         $('#oklahoma').show();
      } else {
        $('#oklahoma').hide();
      }
      if(selectedState == 'OR') {
         $('#oregon').show();
      } else {
        $('#oregon').hide();
      }
      if(selectedState == 'PA') {
         $('#pennsylvania').show();
      } else {
        $('#pennsylvania').hide();
      }
      if(selectedState == 'RI') {
         $('#rhode-island').show();
      } else {
        $('#rhode-island').hide();
      }
      if(selectedState == 'SC') {
         $('#south-carolina').show();
      } else {
        $('#south-carolina').hide();
      }
      if(selectedState == 'SD') {
         $('#south-dakota').show();
      } else {
        $('#south-dakota').hide();
      }
      if(selectedState == 'TN') {
         $('#tennessee').show();
      } else {
        $('#tennessee').hide();
      }
      if(selectedState == 'TX') {
         $('#texas').show();
      } else {
        $('#texas').hide();
      }
      if(selectedState == 'UT') {
         $('#utah').show();
      } else {
        $('#utah').hide();
      }
      if(selectedState == 'VT') {
         $('#vermont').show();
      } else {
        $('#vermont').hide();
      }
      if(selectedState == 'VA') {
         $('#virginia').show();
      } else {
        $('#virginia').hide();
      }
      if(selectedState == 'WA') {
         $('#washington').show();
      } else {
        $('#washington').hide();
      }
      if(selectedState == 'WV') {
         $('#west-virginia').show();
      } else {
        $('#west-virginia').hide();
      }
      if(selectedState == 'WI') {
         $('#wisconsin').show();
      } else {
        $('#wisconsin').hide();
      }
      if(selectedState == 'WY') {
         $('#wyoming').show();
      } else {
        $('#wyoming').hide();
      }
    });
});
