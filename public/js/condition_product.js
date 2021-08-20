function getNameConditionProduct(item){
    
                switch(item) {
                    case 'default':
                        name="Mặc định";
                        break;
                    case 'hot':
                        name="Hot";
                        break;
                    case 'new':
                        name="mới";
                        break;
                    default:
                        name="Giảm gía";
                }
                return name;
}