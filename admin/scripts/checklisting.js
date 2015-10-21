function validateAddListing() {
	var addListingForm = document.getElementById("addListingForm");
	var title = addListingForm.title.value;
	var description = addListingForm.description.value;
	var mls = addListingForm.mls.value;
	var acreage = addListingForm.acreage.value;
	var houseFootage = addListingForm.houseFootage.value;
	var bedrooms = addListingForm.bedrooms.value;
	var bathrooms = addListingForm.bathrooms.value;
	var price = addListingForm.price.value;
	var street = addListingForm.street.value;
	var city = addListingForm.city.value;
	var state = addListingForm.state.value;
	var zipcode = addListingForm.zipcode.value;
	var validated = true;
	
	if (!validateNumber(mls)) {
		alert("Please enter only numbers for the \"MSL Listing #\".");
		validated = false;
	}
	else if (!validateNumber(acreage)) {
		alert("Please enter only numbers for the \"Acreage\".");
		validated = false;
	}
	else if (!validateNumber(houseFootage)) {
		alert("Please enter only numbers for the \"House SqFt\".");
		validated = false;
	}
	else if (!validateNumber(bedrooms)) {
		alert("Please enter only numbers for the \"Bedrooms\".");
		validated = false;
	}	
	else if (!validateNumber(bathrooms)) {
		alert("Please enter only numbers for the \"Bathrooms\".");
		validated = false;
	}
	else if (!validateNumber(price)) {
		alert("Please enter only numbers for the \"Asking price\".");
		validated = false;
	}
	else if(!validateState(state)) {
		alert("Please enter a valid state abbreviation (e.g. \"TX\").");
		validated  = false;
	}
	else if (!validateZipCode(zipcode)) {
		alert("Please enter only numbers for the \"Zip Code\" (e.g. 75602).");
		validated = false;
	}
	
	return validated;
}

function validateNumber(number) {
	var p = number.search(/^\d*$/);
	
	if (p == 0)
		return true;
	else
		return false;
}

function validateState(state) {
	if (state) {
		var p = state.search(/^[a-zA-Z]{2}$/);
		
		if (p == 0)
			return true;
		else
			return false;
	}
	return true;
}

function validateZipCode(zip) {
	if(zip=="") {
		return true;
	}
	else {
		var p = zip.search(/^\d{5}$/);
		
		if (p == 0)
			return true;
		else
			return false;
	}
}