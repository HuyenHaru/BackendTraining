/**
 * 
 */

function CheckForm(){
	var f = document.bill;
	//kiem tra billID co rong hay khong
	if(f.billID.value == ''){
		document.getElementById("id-error").style.display='block';
		document.getElementById("id-error").innerHTML="Vui lòng nhập ID";
			//alert('Vui long nhap ID');
			f.billID.focus();
			return false;
	}
	else{
		document.getElementById("id-error").style.display='none';
	}
	
	//kiem tra bill name co rong hay khong
	if(f.billname.value == ''){
		document.getElementById("name-error").style.display='block';
		document.getElementById("name-error").innerHTML="Vui lòng nhập tên";
			//alert('Vui long nhap ID');
			f.billname.focus();
			return false;
	}
	else{
		document.getElementById("name-error").style.display='none';
	}

	if(f.amount.value == ''){
		document.getElementById("amount-error").style.display='block';
		document.getElementById("amount-error").innerHTML="Không được để trống";
			//alert('Vui long nhap ID');
			f.amount.focus();
			return false;
	}
	else if(isNaN(f.amount.value)){
		document.getElementById("amount-error").style.display='block';
		document.getElementById("amount-error").innerHTML="Cần nhập chữ số. Vui lòng nhập lại";
			//alert('Vui long nhap ID');
		f.amount.focus();
		return false;
		
	} else {
		document.getElementById("amount-error").style.display='none';
	}

	
    //Kiem tra bill đã được chọn chưa
	if(f.billon.selectedIndex == 0){
		document.getElementById("billon-error").style.display='block';
		document.getElementById("billon-error").innerHTML="Bạn chưa chọn";
			//alert('Vui long nhap ID');
			f.billon.focus();
			return false;
	}
	else{
		document.getElementById("amount-error").style.display='none';
	}

	
}

function resetForm(){
   document.getElementById("bill").reset();
 } 