var nameindex = ["", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"];

function convertVnd(a) {
    $("#nameMoney").removeClass('d-none');
    var milion = parseInt(a / 1000000);
    var hundress = parseInt((a % 1000000) / 100000);
    var hchuc = parseInt(((a % 1000000) % 100000) / 10000);
    var nghindong = parseInt((((a % 1000000) % 100000) % 10000) / 1000);
    if (a > 999999) {
        if (hchuc == 0 && hundress == 0 && nghindong != 0) {
            str=hangtrieu(milion) + " không trăm linh " + hangchuc(nghindong) + " nghìn đồng";
            
        }
        if (hchuc == 0 && hundress == 0 && nghindong == 0) {
            str=hangtrieu(milion) + " đồng";
            

        }
        if (hchuc != 0 && hundress != 0 && nghindong != 0) {
            if (nghindong == 1) {
                str=hangtrieu(milion) + " " + hangtram(hundress) + " " + hangchuc(hchuc) + " mươi" + " mốt nghìn đồng";
                
            } else {
                if (hchuc != 0 && nghindong == 5) {
                    str=hangtrieu(milion) + " " + hangtram(hundress) + " " + hangchuc(hchuc) + " mươi" + " lăm nghìn đồng";
                    
                }
                if (hchuc != 0 && nghindong != 5) {
                    str=hangtrieu(milion) + " " + hangtram(hundress) + " " + hangchuc(hchuc) + " mươi " + hangchuc(nghindong) + " nghìn đồng";
                    
                }
            }
        }
        if (hundress != 0 && hchuc == 0 && nghindong != 0) {
            str=hangtrieu(milion) + " " + hangtram(hundress) + " linh " + hangchuc(nghindong) + " nghìn đồng";
            $("#nameMoney").text()
        }
        if (hundress == 0 && hchuc != 0 && nghindong != 0) {
            if (nghindong == 1) {
                str=hangtrieu(milion) + " " + hangchuc(hchuc) + " mươi mốt nghìn đồng";
                
            } else {
                if (nghindong == 5) {
                    str=hangtrieu(milion) + " " + hangchuc(hchuc) + " mươi lăm nghìn đồng";
                    
                } else {
                    str=hangtrieu(milion) + " không trăm " + hangchuc(hchuc) + " mươi " + hangchuc(nghindong) + " nghìn đồng";
                    
                }
            }
        }
        if (hundress != 0 && hchuc != 0 && nghindong == 0) {
            if (hchuc == 1) {
                str=hangtrieu(milion) + " " + hangtram(hundress) + " mười nghìn";
                
            } else {
                str=hangtrieu(milion) + " " + hangtram(hundress) + " " + hangchuc(hchuc) + " mươi nghìn đồng";
                
            }
        }
        if (hundress != 0 && hchuc == 0 && nghindong == 0) {
            str=hangtrieu(milion) + " " + hangtram(hundress) + " nghìn đồng";
            
        }
    }
    if (999999 < a < 99999) {
        if (milion == 0 && hundress != 0 && hchuc != 0 && nghindong != 0) {
            if (hchuc == 1) {
                if (nghindong == 5) {
                    str=hangtram(hundress) + " mười lăm nghìn đồng";
                    $("#nameMoney").text()
                } else {
                    str=hangtram(hundress) + " mười " + hangchuc(nghindong) + " nghìn đồng";
                    
                }
            } else {
                if (nghindong == 5) {
                    str=hangtram(hundress) + " " + hangchuc(hchuc) + " mươi lăm nghìn đồng";
                    $("#nameMoney").text()
                } else {
                    if (nghindong == 1) {
                        str=hangtram(hundress) + " " + hangchuc(hchuc) + " mươi mốt nghìn đồng";
                        $("#nameMoney").text()
                    } else {
                        str=hangtram(hundress) + " " + hangchuc(hchuc) + " mươi " + hangchuc(nghindong) + " nghìn đồng";
                        
                    }
                }
            }
        }
        if (milion == 0 && hundress != 0 && hchuc != 0 && nghindong == 0) {
            if (hchuc == 1) {
                str=hangtram(hundress) + " mười nghìn đồng";
                
            } else {
                str=hangtram(hundress) + " " + hangchuc(hchuc) + " mươi nghìn đồng";
                
            }
        }
        if (milion == 0 && hundress != 0 && hchuc == 0 && nghindong != 0) {
            str=hangtram(hundress) + " linh " + hangchuc(nghindong) + " nghìn đồng";
            
        }
        if (milion == 0 && hundress != 0 && hchuc == 0 && nghindong == 0) {
            str=hangtram(hundress) + " nghìn đồng";
            $("#nameMoney").text()
        }
    }
    if (99999 < a < 9999) {
        if (hundress == 0 && hchuc != 0 && nghindong == 0) {
            if (hchuc == 1) {
                str="Mười nghìn đồng";
                
            } else {
                str=hangchuc(hchuc) + " mươi nghìn đồng";
                
            }
        }
        if (milion == 0 && hundress == 0 && hchuc != 0 && nghindong != 0) {
            if (hchuc == 1) {
                if (nghindong == 5) {
                    str="Mười lăm nghìn đồng";
                    
                } else {
                    str="Mười " + hangchuc(nghindong) + " nghìn đồng";
                    
                }

            } else {
                if (nghindong == 1) {
                    str=hangchuc(hchuc) + " mươi mốt nghìn đồng";
                    
                } else {
                    if (nghindong == 5) {
                        str=hangchuc(hchuc) + " mươi lăm nghìn đồng";
                        
                    }
                    if (nghindong != 1 && nghindong != 5) {
                        str=hangchuc(hchuc) + " mươi " + hangchuc(nghindong) + " nghìn đồng";
                    }
                }
            }
        }
    }
    if (a < 9999) {
        str=hangchuc(nghindong) + " nghìn đồng";
    }
    return str.charAt(0).toUpperCase() + str.slice(1);
};

function hangtrieu(index) {
    switch (index) {
        case 0:
            return "";
            break;
        case 1:
            return nameindex[index] + " triệu";
            break;
        case 2:
            return nameindex[index] + " triệu";
            break;
        case 3:
            return nameindex[index] + " triệu";
            break;
        case 4:
            return nameindex[index] + " triệu";
            break;
        case 5:
            return nameindex[index] + " triệu";
            break;
        case 6:
            return nameindex[index] + " triệu";
            break;
        case 7:
            return nameindex[index] + " triệu";
            break;
        case 8:
            return nameindex[index] + " triệu";
            break;
        case 9:
            return nameindex[index] + " triệu";
            break;
    }
}

function hangtram(index) {
    switch (index) {
        case 0:
            return " không trăm";
            break;
        case 1:
            return nameindex[index] + " trăm";
            break;
        case 2:
            return nameindex[index] + " trăm";
            break;
        case 3:
            return nameindex[index] + " trăm";
            break;
        case 4:
            return nameindex[index] + " trăm";
            break;
        case 5:
            return nameindex[index] + " trăm";
            break;
        case 6:
            return nameindex[index] + " trăm";
            break;
        case 7:
            return nameindex[index] + " trăm";
            break;
        case 8:
            return nameindex[index] + " trăm";
            break;
        case 9:
            return nameindex[index] + " trăm";
            break;
    }
}

function hangchuc(index) {
    switch (index) {
        case 0:
            return "";
            break;
        case 1:
            return nameindex[index];
            break;
        case 2:
            return nameindex[index];
            break;
        case 3:
            return nameindex[index];
            break;
        case 4:
            return nameindex[index];
            break;
        case 5:
            return nameindex[index];
            break;
        case 6:
            return nameindex[index];
            break;
        case 7:
            return nameindex[index];
            break;
        case 8:
            return nameindex[index];
            break;
        case 9:
            return nameindex[index];
            break;
    }
}

function upperName(string) {
    var x = string.toLowerCase();
    return string.charAt(0).toUpperCase() + x.slice(1);
};