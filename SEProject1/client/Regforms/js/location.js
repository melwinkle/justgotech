const countries = () => {
  fetch("https://restcountries.eu/rest/v2/all")
    .then((res) => res.json())
    .then((countries) => {
      countries.forEach((country) => {
        $("#Nationality").append(
          `<option value='${country.name}'>${country.name}</option>`
        );
      });
    });
};
countries();
