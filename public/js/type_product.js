function getNameTypeProduct(item){
    switch(item) {
        case 'men':
            name="Nam";
            break;
        case 'women':
            name="Nữ";
            break;
        default:
            name="Trẻ em";
    }
    return name;
}