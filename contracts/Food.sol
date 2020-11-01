//SPDX-License-Identifier: UNLICENSED
pragma solidity >0.4.17;

contract Food {
    struct Crop {
        uint256 cropID;
        uint256 total_quantity; 
        address farmer;
    }
    //Array of crops and crop count declared
   
    uint256 public cropCount;
    Crop[]  public crops;
    
    struct Person{
        uint256 typeID;
        mapping(uint256=> uint256) current_quantity;//cropID to quantity
    }
    mapping (address=> Person) public people;
     
    struct Acquire{
        address seller;    // seller's address
        address reciever;  // reciever's address
        uint256 Price;     //price per kg
        uint256 quantity;  //quantity of the crop sold
        uint256 cropID;    //cropID of crop transfered

    }
    
    uint256 public total_sales;
    mapping(uint256=> Acquire) public Sales; //total_sales with cropID
    
    
    function updateSender(address _from, uint256 _cropID, uint256 _quantity) private {
        people[_from].current_quantity[_cropID]=people[_from].current_quantity[_cropID]- _quantity;
    } 
    function updateReciever(address _to, uint256 _cropID, uint256 _quantity) private {
        people[_to].current_quantity[_cropID]=people[_to].current_quantity[_cropID]+ _quantity;
    }
    function transferCrop(address _to, uint256 _price, uint256 _quantity,uint256 _cropID ) public payable {
        require(people[msg.sender].current_quantity[_cropID]>=_quantity);
        total_sales++;
        Sales[total_sales]=Acquire({seller: msg.sender, 
                                    reciever: _to, 
                                    Price:_price,
                                    quantity:_quantity,
                                    cropID:_cropID
                                     
                                    });
        updateSender(msg.sender, _cropID,_quantity);
        updateReciever(_to, _cropID,_quantity);
    }
    //this function returns array of address, Price and quantity
    function history(uint256 _cropID) public view returns(address[] memory, address[] memory, uint256[] memory, uint256[] memory){
        address[] memory w;
        address[] memory x;
        uint256[] memory y;
        uint256[] memory z;
        uint256 count;
        for(uint256 i=total_sales; i>=0; i--){
            if(Sales[i].cropID==_cropID){
                count++;
                w[count]=(Sales[i].reciever);
                x[count]=(Sales[i].seller);
                y[count]=(Sales[i].Price);
                z[count]=(Sales[i].quantity);
            }
        }
        return(w,x,y,z);
    }
    
    function addCrop(uint256 _cropID, uint256 _total_quantity, address _farmer)public payable{
        Crop memory x=Crop({cropID: _cropID, total_quantity: _total_quantity, farmer: _farmer});
        cropCount++;
        crops.push(x);
        people[_farmer].current_quantity[_cropID]=_total_quantity;
    }
}