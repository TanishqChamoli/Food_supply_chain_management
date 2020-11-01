# Food_supply_chain_management

In this project, we take person’s details through the signup form whether he is a farmer, trader, retailer or a consumer and we take address
of the person and then map it with a hash address (BLOCKCHAIN WALLET ADDRESS) so that person can be shown or visible to any person but still
all his information remains private and that address helps to create transparency. We make the use of the user’s details and public address of
Block chain for this.  The person has to verify themselves from a government body over being able to fully use the site. We take current quantity
of all the crops and crop added and then update it gets stored as transaction in block chain. To transfer the crops from one person to another,
we take all the details such as :

    Seller’s address
    Receiver’s address
    Price of that crop per/kg
    Crop id of the crop transferred
    Quantity of that crop id gets stored
  
As, a trader gets a hash address which only central controller that is government will be able to access.

We also have a fucntion which returns the current quantity of the crop with the user right now and we can use this value to check that if a uer has a suspicious amount we can flag that user and as this would be a validated user we will have his/her information and then can take action.


## Brief Introduction

This Project is based on theme – “ATMA NIRBHAR BHARAT” which tends to empower our farmers. As we all know, the condition if farmers in India is terrible.
About 80% of farmers owe less than 1 hectare of land or small farmers (1 – 2 hectares). Every day, there are reports of suicides by farmers from different
parts of country. Agricultural sector includes 17% GDP of the prices.


Trader buy the crops directly from farmers at extremely low prices. For instance, On 11th November 2019,  A farmer was forced to sell onions at
Rs. 8 per/kg in Maharashtra. Prices of onions are almost touching Rs. 100 per/kg. The cost is almost 1000% more than the price at which onions
are bought from farmers. The reason behind is Traders store crops bought from the farmers in go-downs and creates an artificial scarcity of crops
in order to increase the demand by the customers and as less quantity of crops are sold by the traders to retailers at high prices, they sell the crops
to the customer and all the profit goes to traders because of less supply of crops. 


To keep food INFLATION under control, farmers denied to pay high prices for their crops for years. Farmers sought inflation of the money supply so that
more money could be available to them as credit, prices of their crops rise and all the debts become easy to repay.With the help of our project, supply
is made TRANSPARENT with the help of BLOCKCHAIN. An address is provided to all the type of people involved i.e. farmer->trader->retailer->customer. The
address provided is HASH ADDRESS which makes the supply of the crops transparent i.e. data will be stored with the help of hash address so that the type
of person he is, cannot be disclosed. Only, central controller (government) will be able to control the database and will know whose address it is. 

## Setting up this project
    
    Clone the directory
        git clone https://github.com/TanishqChamoli/Food_supply_chain_management.git
    1.PHP-
      Place the hackathon folder in the htdocs of Xaamp.
      This will set up the php part of the code.
    2.SQL-
      Now create a table hackathon in you're SQL database and then import the database provided in the hackathon folder.
    3.Blockchain-
      Run the Food.sol program on the https://remix.ethereum.org/ which is an online IDE and using the Javascript VM
      environment.

## Future Improvements

We can connect the code with the blockend and then seamlessly interact with the fronend(WEB APP) of the whole project
and be able to run all the functionalities on the web itself.

This can clearly be made into a department which can handle as well as make sure that the forced inflation and our farmers
are not being exploited

Moreover this will be providing a public database in which anyone can see what's happening but wont be able to know
who are the one's behind the transaction and th eonly ones with this power will be the govt.

# Demo Run of the Food.sol on the Remix-IDE
## 1.Deploying the contract.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/deploy.png?raw=true)

## 2.Now we will add a crop from user with provided hash id.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/add_crop.png?raw=true)


## 3.This is the output of the insertiong of a crop for the specified user.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/add_crop_op.png?raw=true)


## 4.Making a transaction from one user to another.These are the inputs.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/transfer_crop_para.png?raw=true)


## 5.Now this is the oupt we get after doing that transaction in the blockchain.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/transfer_crop_op.png?raw=true)

## 6.Now let's run the user info function to check the qunatity of crop with cropID and the User hash.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/user_info_para.png?raw=true)

## 7.Now's this is the output we get after running the function and we are able to get the quantity of the certain crop and for a certain person.
![alt text](https://github.com/TanishqChamoli/Food_supply_chain_management/blob/main/images/user_info_op.png?raw=true)

# Authors

## Sonam Garg
https://github.com/CO18350

## Tanishq Chamoli
https://github.com/TanishqChamoli

## Udayveer Singh
https://github.com/udayveer16
